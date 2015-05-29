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

class Container
{

    private $data = array();


    /**
     * Constructor
     */
    public function __construct()
    {

    }

    public function get($name)
    {
        if (empty($this->data[$name])) {
            $this->load($name);
        }
        return $this->data[$name];
    }

    private function load($name)
    {
        $loadMethod = 'load' . ucfirst($name);
        if (method_exists($this, $loadMethod)) {
            $obj = $this->$loadMethod();
            $this->data[$name] = $obj;
        } else {

            try {
                $className = $this->get('metadata')->get('app.loaders.' . ucfirst($name));
            } catch (\Exception $e) {}

            if (!isset($className) || !class_exists($className)) {
                $className = '\Fox\Custom\Core\Loaders\\'.ucfirst($name);
                if (!class_exists($className)) {
                    $className = '\Fox\Core\Loaders\\'.ucfirst($name);
                }
            }

            if (class_exists($className)) {
                 $loadClass = new $className($this);
                 $this->data[$name] = $loadClass->load();
            }
        }

        return null;
    }

    protected function getServiceClassName($name, $default)
    {
        $metadata = $this->get('metadata');
        $className = $metadata->get('app.serviceContainer.classNames.' . $name, $default);
        return $className;
    }

    protected function loadLog()
    {
        $logConfig = $this->get('config')->get('logger');

        $log = new \Fox\Core\Utils\Log('Fox');

        $levelCode = $log->getLevelCode($logConfig['level']);

        if ($logConfig['isRotate']) {
            $handler = new \Fox\Core\Utils\Log\Monolog\Handler\RotatingFileHandler($logConfig['path'], $logConfig['maxRotateFiles'], $levelCode);
        } else {
            $handler = new \Fox\Core\Utils\Log\Monolog\Handler\StreamHandler($logConfig['path'], $levelCode);
        }
        $log->pushHandler($handler);

        $errorHandler = new \Monolog\ErrorHandler($log);
        $errorHandler->registerExceptionHandler(null, false);
        $errorHandler->registerErrorHandler(array(), false);

        return $log;
    }

    protected function loadContainer()
    {
        return $this;
    }

    private function loadSlim()
    {
        return new \Fox\Core\Utils\Api\Slim();
    }

    private function loadFileManager()
    {
        return new \Fox\Core\Utils\File\Manager(
            $this->get('config')
        );
    }

    private function loadPreferences()
    {
        return $this->get('entityManager')->getEntity('Preferences', $this->get('user')->id);
    }

    private function loadConfig()
    {
        return new \Fox\Core\Utils\Config(
            new \Fox\Core\Utils\File\Manager()
        );
    }

    private function loadHookManager()
    {
        return new \Fox\Core\HookManager(
            $this
        );
    }

    private function loadOutput()
    {
        return new \Fox\Core\Utils\Api\Output(
            $this->get('slim')
        );
    }

    private function loadMailSender()
    {
        $className = $this->getServiceClassName('mailSernder', '\\Fox\\Core\\Mail\\Sender');
        return new $className(
            $this->get('config')
        );
    }

    private function loadDateTime()
    {
        return new \Fox\Core\Utils\DateTime(
            $this->get('config')->get('dateFormat'),
            $this->get('config')->get('timeFormat'),
            $this->get('config')->get('timeZone')
        );
    }

    private function loadServiceFactory()
    {
        return new \Fox\Core\ServiceFactory(
            $this
        );
    }

    private function loadSelectManagerFactory()
    {
        return new \Fox\Core\SelectManagerFactory(
            $this->get('entityManager'),
            $this->get('user'),
            $this->get('acl'),
            $this->get('metadata')
        );
    }

    private function loadMetadata()
    {
        return new \Fox\Core\Utils\Metadata(
            $this->get('config'),
            $this->get('fileManager')
        );
    }

    private function loadLayout()
    {
        return new \Fox\Core\Utils\Layout(
            $this->get('fileManager'),
            $this->get('metadata')
        );
    }

    private function loadAclManager()
    {
        $className = $this->getServiceClassName('acl', '\\Fox\\Core\\AclManager');
        return new $className(
            $this->get('container')
        );
    }

    private function loadAcl()
    {
        $className = $this->getServiceClassName('acl', '\\Fox\\Core\\Acl');
        return new $className(
            $this->get('aclManager'),
            $this->get('user')
        );
    }

    private function loadSchema()
    {
        return new \Fox\Core\Utils\Database\Schema\Schema(
            $this->get('config'),
            $this->get('metadata'),
            $this->get('fileManager'),
            $this->get('entityManager'),
            $this->get('classParser')
        );
    }

    private function loadClassParser()
    {
        return new \Fox\Core\Utils\File\ClassParser(
            $this->get('fileManager'),
            $this->get('config'),
            $this->get('metadata')
        );
    }

    private function loadLanguage()
    {
        return new \Fox\Core\Utils\Language(
            $this->get('fileManager'),
            $this->get('config'),
            $this->get('preferences')
        );
    }

    private function loadCrypt()
    {
        return new \Fox\Core\Utils\Crypt(
            $this->get('config')
        );
    }

    private function loadScheduledJob()
    {
        return new \Fox\Core\Utils\ScheduledJob(
            $this
        );
    }

    private function loadDataManager()
    {
        return new \Fox\Core\DataManager(
            $this
        );
    }

    private function loadFieldManager()
    {
        return new \Fox\Core\Utils\FieldManager(
            $this->get('metadata'),
            $this->get('language')
        );
    }

    public function setUser($user)
    {
        $this->data['user'] = $user;
    }
}

