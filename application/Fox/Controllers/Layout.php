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

use Fox\Core\Utils as Utils;
use \Fox\Core\Exceptions\NotFound;
use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;

class Layout extends \Fox\Core\Controllers\Base
{
    public function actionRead($params, $data)
    {
        $data = $this->getContainer()->get('layout')->get($params['scope'], $params['name']);
        if (empty($data)) {
            throw new NotFound("Layout " . $params['scope'] . ":" . $params['name'] . ' is not found.');
        }
        return $data;
    }

    public function actionUpdate($params, $data)
    {
        if (!$this->getUser()->isAdmin()) {
            throw new Forbidden();
        }

        $layoutManager = $this->getContainer()->get('layout');
        $layoutManager->set($data, $params['scope'], $params['name']);
        $result = $layoutManager->save();

        if ($result === false) {
            throw new Error("Error while saving layout.");
        }

        $this->getContainer()->get('dataManager')->updateCacheTimestamp();

        return $layoutManager->get($params['scope'], $params['name']);
    }

    public function actionPatch($params, $data)
    {
        return $this->actionUpdate($params, $data);
    }
}
