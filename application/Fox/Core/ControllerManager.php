<?php
/************************************************************************
 * This file is part of FoxCRM.
 *
 * FoxCRM - Open Source CRM application.
 * Copyright (C) 2014-2015 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * FoxCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * FoxCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with FoxCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/

namespace Fox\Core;

use \Fox\Core\Utils\Util;
use \Fox\Core\Exceptions\NotFound;

class ControllerManager
{
    private $config;

    private $metadata;

    private $container;

    public function __construct(\Fox\Core\Container $container)
    {
        $this->container = $container;

        $this->config = $this->container->get('config');
        $this->metadata = $this->container->get('metadata');
    }

    protected function getConfig()
    {
        return $this->config;
    }

    protected function getMetadata()
    {
        return $this->metadata;
    }

    public function process($controllerName, $actionName, $params, $data, $request)
    {
        $customeClassName = '\\Fox\\Custom\\Controllers\\' . Util::normilizeClassName($controllerName);
        if (class_exists($customeClassName)) {
            $controllerClassName = $customeClassName;
        } else {
            $moduleName = $this->metadata->getScopeModuleName($controllerName);
            if ($moduleName) {
                $controllerClassName = '\\Fox\\Modules\\' . $moduleName . '\\Controllers\\' . Util::normilizeClassName($controllerName);
            } else {
                $controllerClassName = '\\Fox\\Controllers\\' . Util::normilizeClassName($controllerName);
            }
        }

        if ($data && stristr($request->getContentType(), 'application/json')) {
            $data = json_decode($data);
        }


        if ($data instanceof \stdClass) {
            $data = get_object_vars($data);
        }

        if (!class_exists($controllerClassName)) {
            throw new NotFound("Controller '$controllerName' is not found");
        }

        $controller = new $controllerClassName($this->container, $request->getMethod());

        if ($actionName == 'index') {
            $actionName = $controllerClassName::$defaultAction;
        }

        $actionNameUcfirst = ucfirst($actionName);

        $beforeMethodName = 'before' . $actionNameUcfirst;
        if (method_exists($controller, $beforeMethodName)) {
            $controller->$beforeMethodName($params, $data, $request);
        }
        $actionMethodName = 'action' . $actionNameUcfirst;

        if (!method_exists($controller, $actionMethodName)) {
            throw new NotFound("Action '$actionMethodName' does not exist in controller '$controller'");
        }

        $result = $controller->$actionMethodName($params, $data, $request);

        $afterMethodName = 'after' . $actionNameUcfirst;
        if (method_exists($controller, $afterMethodName)) {
            $controller->$afterMethodName($params, $data, $request);
        }

        if (is_array($result) || is_bool($result)) {
            return \Fox\Core\Utils\Json::encode($result);
        }

        return $result;
    }

}
