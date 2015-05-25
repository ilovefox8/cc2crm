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

return array(

	'apiPath' => '/api/v1',

	'requirements' => array(
		'phpVersion' => '5.4',

		'phpRequires' => array(
			'JSON',
			'mcrypt',
			'pdo_mysql',
		),

		'phpRecommendations' => array(
			'GD',
			'IMAP',
			'max_execution_time' => 180,
			'max_input_time' => 180,
			'memory_limit' => '256M',
			'post_max_size' => '20M',
			'upload_max_filesize' => '20M',
		),

		'mysqlVersion' => '5.1',
		'mysqlRequires' => array(

		),

		'mysqlRecommendations' => array(

		),
	),

	'blog' => 'http://blog.espocrm.com',
	'twitter' => 'https://twitter.com/espocrm',
	'forum' => 'http://forum.espocrm.com',

);