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

namespace Fox\Hooks\Common;

use Fox\ORM\Entity;
use Fox\Core\Utils\Util;

class Notifications extends \Fox\Core\Hooks\Base
{
    public static $order = 10;

    protected $noticatorsHash = array();

    protected function init()
    {
        $this->dependencies[] = 'container';
        $this->dependencies[] = 'metadata';
    }

    private $hasStreamCache = array();

    protected function getContainer()
    {
        return $this->getInjection('container');
    }

    protected function getMetadata()
    {
        return $this->getInjection('metadata');
    }

    protected function checkHasStream($entityType)
    {
        if (!array_key_exists($entityType, $this->hasStreamCache)) {
            $this->hasStreamCache[$entityType] = $this->getMetadata()->get("scopes.{$entityType}.stream");
        }
        return $this->hasStreamCache[$entityType];
    }

    protected function getNotificator($entityType)
    {
        if (empty($this->noticatorsHash[$entityType])) {
            $normalizedName = Util::normilizeClassName($entityType);

            $className = '\\Fox\\Custom\\Notificators\\' . $normalizedName;
            if (!class_exists($className)) {
                $moduleName = $this->getMetadata()->getScopeModuleName($entityType);
                if ($moduleName) {
                    $className = '\\Fox\\Modules\\' . $moduleName . '\\Notificators\\' . $normalizedName;
                } else {
                    $className = '\\Fox\\Notificators\\' . $normalizedName;
                }
                if (!class_exists($className)) {
                    $className = '\\Fox\\Core\\Notificators\\Base';
                }
            }

            $notificator = new $className();
            $dependencies = $notificator->getDependencyList();
            foreach ($dependencies as $name) {
                $notificator->inject($name, $this->getContainer()->get($name));
            }

            $this->noticatorsHash[$entityType] = $notificator;
        }
        return $this->noticatorsHash[$entityType];
    }

    public function afterSave(Entity $entity, array $options = array())
    {
        $entityType = $entity->getEntityType();

        if (!empty($options['silent']) && !empty($options['noNotifications'])) {
            return;
        }

        if (!$this->checkHasStream($entityType)) {
            if (in_array($entityType, $this->getConfig()->get('assignmentNotificationsEntityList', []))) {
                $notificator = $this->getNotificator($entityType);
                $notificator->process($entity);
            }
        }
    }

}

