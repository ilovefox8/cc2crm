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

namespace Fox\Core\Utils\Database\Orm\Fields;

class LinkParent extends Base
{
    protected function load($fieldName, $entityName)
    {
        return array(
            $entityName => array (
                'fields' => array(
                    $fieldName.'Id' => array(
                        'type' => 'foreignId',
                        'index' => $fieldName,
                    ),
                    $fieldName.'Type' => array(
                        'type' => 'foreignType',
                        'notNull' => false,
                        'index' => $fieldName,
                    ),
                    $fieldName.'Name' => array(
                        'type' => 'varchar',
                        'notStorable' => true,
                    ),
                ),
            ),
            'unset' => array(
                $entityName => array(
                    'fields.'.$fieldName,
                ),
            ),
        );
    }
}