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

$fields = array(
	'user-name' => array(
		'default' => (isset($langs['labels']['admin']))? $langs['labels']['admin'] : 'admin',
	),
	'user-pass' => array(),
	'user-confirm-pass' => array(),
);

foreach ($fields as $fieldName => $field) {
	if (isset($_SESSION['install'][$fieldName])) {
		$fields[$fieldName]['value'] = $_SESSION['install'][$fieldName];
	}
	else {
		$fields[$fieldName]['value'] = (isset($fields[$fieldName]['default']))? $fields[$fieldName]['default'] : '';
	}
}

$smarty->assign('fields', $fields);