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

namespace Fox\Core\Loaders;

class EntityManager extends Base
{
    public function load()
    {
        $config = $this->getContainer()->get('config');

        $params = array(
            'host' => $config->get('database.host'),
            'port' => $config->get('database.port'),
            'dbname' => $config->get('database.dbname'),
            'user' => $config->get('database.user'),
            'password' => $config->get('database.password'),
            'metadata' => $this->getContainer()->get('metadata')->getOrmMetadata(),
            'repositoryFactoryClassName' => '\\Fox\\Core\\ORM\\RepositoryFactory',
            'driver' => $config->get('database.driver'),
            'platform' => $config->get('database.platform')
        );

        $entityManager = new \Fox\Core\ORM\EntityManager($params);
        $entityManager->setFoxMetadata($this->getContainer()->get('metadata'));
        $entityManager->setHookManager($this->getContainer()->get('hookManager'));
        $entityManager->setContainer($this->getContainer());

        return $entityManager;
    }
}

