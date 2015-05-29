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

use \Fox\ORM\Entity;

class Account extends \Fox\Services\Record
{
    protected $linkSelectParams = array(
        'contacts' => array(
            'additionalColumns' => array(
                'role' => 'accountRole'
            )
        )
    );

    protected $mergeLinkList = array(
        'opportunities',
        'cases',
        'documents',
        'contacts',
        'tasks',
        'meetings',
        'calls',
        'emails',
        'meetingsPrimary',
        'callsPrimary',
        'emailsPrimary'
    );

    protected function getDuplicateWhereClause(Entity $entity)
    {
        return array(
            'name' => $entity->get('name')
        );
    }
}
