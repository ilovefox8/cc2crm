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

namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error,
    \Fox\Core\Exceptions\Forbidden,
    \Fox\Core\Exceptions\NotFound;

class FieldManager extends \Fox\Core\Controllers\Base
{
    protected function checkControllerAccess()
    {
        if (!$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }
    }

    public function actionRead($params, $data)
    {
        $data = $this->getContainer()->get('fieldManager')->read($params['name'], $params['scope']);

        if (!isset($data)) {
            throw new NotFound();
        }

        return $data;
    }

    public function actionCreate($params, $data)
    {
        if (empty($data['name'])) {
            throw new Error("Field 'name' cannnot be empty");
        }

        $fieldManager = $this->getContainer()->get('fieldManager');
        $fieldManager->create($data['name'], $data, $params['scope']);

        try {
            $this->getContainer()->get('dataManager')->rebuild($params['scope']);
        } catch (Error $e) {
            $fieldManager->delete($data['name'], $params['scope']);
            throw new Error($e->getMessage());
        }

        return $fieldManager->read($data['name'], $params['scope']);
    }

    public function actionUpdate($params, $data)
    {
        $fieldManager = $this->getContainer()->get('fieldManager');
        $fieldManager->update($params['name'], $data, $params['scope']);

        if ($fieldManager->isChanged()) {
            $this->getContainer()->get('dataManager')->rebuild($params['scope']);
        } else {
            $this->getContainer()->get('dataManager')->clearCache();
        }

        return $fieldManager->read($params['name'], $params['scope']);
    }

    public function actionDelete($params, $data)
    {
        $res = $this->getContainer()->get('fieldManager')->delete($params['name'], $params['scope']);

        $this->getContainer()->get('dataManager')->rebuildMetadata();

        return $res;
    }

}

