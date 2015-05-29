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

use Fox\Core\Exceptions\Error;
use Fox\Core\Utils\Util;

class Install extends \Fox\Core\Upgrades\Actions\Base
{
    /**
     * Main installation process
     *
     * @param  string $processId Upgrade/Extension ID, gotten in upload stage
     * @return bool
     */
    public function run($data)
    {
        $processId = $data['id'];

        $GLOBALS['log']->debug('Installation process ['.$processId.']: start run.');

        if (empty($processId)) {
            throw new Error('Installation package ID was not specified.');
        }

        $this->setProcessId($processId);

        $this->initialize();

        /** check if an archive is unzipped, if no then unzip */
        $packagePath = $this->getPackagePath();
        if (!file_exists($packagePath)) {
            $this->unzipArchive();
            $this->isAcceptable();
        }

        //check permissions copied and deleted files
        $this->checkIsWritable();

        $this->backupExistingFiles();

        $this->beforeRunAction();

        /* run before install script */
        $this->runScript('before');

        /* copy files from directory "Files" to FoxCRM files */
        if (!$this->copyFiles()) {
            $this->throwErrorAndRemovePackage('Cannot copy files.');
        }

        /* remove files defined in a manifest */
        $this->deleteFiles(true);

        if (!$this->systemRebuild()) {
            $this->throwErrorAndRemovePackage('Error occurred while FoxCRM rebuild.');
        }

        /* run before install script */
        $this->runScript('after');

        $this->afterRunAction();

        $this->clearCache();

        /* delete unziped files */
        $this->deletePackageFiles();

        $this->finalize();

        $GLOBALS['log']->debug('Installation process ['.$processId.']: end run.');
    }

    protected function restoreFiles()
    {
        $GLOBALS['log']->info('Installer: Restore previous files.');

        $backupPath = $this->getPath('backupPath');
        $backupFilePath = Util::concatPath($backupPath, self::FILES);

        $backupFileList = $this->getRestoreFileList();
        $copyFileList = $this->getCopyFileList();
        $deleteFileList = array_diff($copyFileList, $backupFileList);

        $res = $this->copy($backupFilePath, '', true);
        $res &= $this->getFileManager()->remove($deleteFileList, null, true);

        if ($res) {
            $this->getFileManager()->removeInDir($backupPath, true);
        }

        return $res;
    }

    protected function throwErrorAndRemovePackage($errorMessage = '')
    {
        $this->restoreFiles();
        parent::throwErrorAndRemovePackage($errorMessage);
    }
}
