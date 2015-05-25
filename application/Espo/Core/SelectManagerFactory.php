<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014-2015 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/

namespace Espo\Core;

use \Espo\Core\Exceptions\Error;

use \Espo\Core\Utils\Util;

class SelectManagerFactory
{
    private $entityManager;

    private $user;

    private $acl;

    private $metadata;

    public function __construct($entityManager, \Espo\Entities\User $user, Acl $acl, $metadata)
    {
        $this->entityManager = $entityManager;
        $this->user = $user;
        $this->acl = $acl;
        $this->metadata = $metadata;
    }

    public function create($entityType)
    {
        $normalizedName = Util::normilizeClassName($entityType);

        $className = '\\Espo\\Custom\\SelectManagers\\' . $normalizedName;
        if (!class_exists($className)) {
            $moduleName = $this->metadata->getScopeModuleName($entityType);
            if ($moduleName) {
                $className = '\\Espo\\Modules\\' . $moduleName . '\\SelectManagers\\' . $normalizedName;
            } else {
                $className = '\\Espo\\SelectManagers\\' . $normalizedName;
            }
            if (!class_exists($className)) {
                $className = '\\Espo\\Core\\SelectManagers\\Base';
            }
        }

        $selectManager = new $className($this->entityManager, $this->user, $this->acl, $this->metadata);
        $selectManager->setEntityType($entityType);

        return $selectManager;
    }
}

