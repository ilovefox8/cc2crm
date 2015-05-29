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

class Utils
{
	static public $actionPath = 'install/core/actions';

	static public function isActionExists($actionName)
	{
		$actionPath = static::$actionPath;
		$actionFileName = $actionName . '.php';
		$actionRealPath = realpath($actionPath . '/' . $actionFileName);

		$fileManager = new \Fox\Core\Utils\File\Manager();
		$actionList = $fileManager->getFileList($actionPath);

		foreach ($actionList as $fileName) {
			$fileRealPath = realpath($actionPath . '/' . $fileName);

			if ($fileRealPath === $actionRealPath) {
				return true;
			}
		}

		return false;
	}
}