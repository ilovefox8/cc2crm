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

namespace Fox\Modules\Crm\Services;

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\ORM\Entity;

class Target extends \Fox\Services\Record
{
    protected function getDuplicateWhereClause(Entity $entity)
    {
        return array(
            'firstName' => $entity->get('firstName'),
            'lastName' => $entity->get('lastName'),
        );
    }

    public function convert($id)
    {
        $entityManager = $this->getEntityManager();
        $target = $this->getEntity($id);

        if (!$this->getAcl()->check($target, 'delete')) {
            throw new Forbidden();
        }
        if (!$this->getAcl()->check('Lead', 'read')) {
            throw new Forbidden();
        }

        $lead = $entityManager->getEntity('Lead');
        $lead->set($target->toArray());

        $entityManager->removeEntity($target);
        $entityManager->saveEntity($lead);

        return $lead;
    }
}

