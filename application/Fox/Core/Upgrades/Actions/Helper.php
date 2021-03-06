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

namespace Fox\Core\Upgrades\Actions;

use Fox\Core\Exceptions\Error;

class Helper
{
    private $actionObject;

    public function __construct($actionObject = null)
    {
        if (isset($actionObject)) {
            $this->setActionObject($actionObject);
        }
    }

    public function setActionObject(\Fox\Core\Upgrades\Actions\Base $actionObject)
    {
        $this->actionObject = $actionObject;
    }

    protected function getActionObject()
    {
        return $this->actionObject;
    }

    /**
     * Check dependencies
     *
     * @param  array | string $dependencyList
     *
     * @return bool
     */
    public function checkDependencies($dependencyList)
    {
        if (!is_array($dependencyList)) {
            $dependencyList = (array) $dependencyList;
        }

        $actionObject = $this->getActionObject();

        foreach ($dependencyList as $extensionName => $extensionVersion) {
            $dependencyExtensionEntity = $actionObject->getEntityManager()->getRepository('Extension')->where(array(
                'name' => trim($extensionName),
                'isInstalled' => true,
            ))->findOne();

            $errorMessage = 'Dependency Error: The extension "'.$extensionName.'" with version "'.$extensionVersion.'" is missing.';
            if (!isset($dependencyExtensionEntity) || !$actionObject->checkVersions($extensionVersion, $dependencyExtensionEntity->get('version'), $errorMessage)) {
                throw new Error($errorMessage);
            }
        }

        return true;
    }
}
