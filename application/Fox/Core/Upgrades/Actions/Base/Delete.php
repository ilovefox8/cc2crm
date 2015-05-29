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

namespace Fox\Core\Upgrades\Actions\Base;

class Delete extends \Fox\Core\Upgrades\Actions\Base
{
    public function run($data)
    {
        $processId = $data['id'];

        $GLOBALS['log']->debug('Delete package process ['.$processId.']: start run.');

        if (empty($processId)) {
            throw new Error('Delete package package ID was not specified.');
        }

        $this->initialize();

        $this->setProcessId($processId);

        $this->beforeRunAction();

        /* delete a package */
        $this->deletePackage();

        $this->afterRunAction();

        $this->finalize();

        $GLOBALS['log']->debug('Delete package process ['.$processId.']: end run.');
    }

    protected function deletePackage()
    {
        $packageArchivePath = $this->getPackagePath(true);
        $res = $this->getFileManager()->removeFile($packageArchivePath);

        return $res;
    }

}