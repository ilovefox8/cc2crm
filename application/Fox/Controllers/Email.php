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

use \Fox\Core\Exceptions\BadRequest;
use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\Error;

class Email extends \Fox\Core\Controllers\Record
{
    public function actionGetCopiedAttachments($params, $data, $request)
    {
        $id = $request->get('id');

        return $this->getRecordService()->getCopiedAttachments($id);
    }

    public function actionSendTestEmail($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }

        if (is_null($data['password'])) {
            if ($data['type'] == 'preferences') {
                if (!$this->getUser()->isAdmin() && $data['id'] != $this->getUser()->id) {
                    throw new Forbidden();
                }
                $preferences = $this->getEntityManager()->getEntity('Preferences', $data['id']);
                if (!$preferences) {
                    throw new Error();
                }

                $data['password'] = $this->getContainer()->get('crypt')->decrypt($preferences->get('smtpPassword'));
            } else {
                if (!$this->getUser()->isAdmin()) {
                    throw new Forbidden();
                }
                $data['password'] = $this->getConfig()->get('smtpPassword');
            }
        }

        return $this->getRecordService()->sendTestEmail($data);
    }

    public function actionMarkAsRead($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        if (empty($data['ids']) || !is_array($data['ids'])) {
            throw new BadRequest();
        }
        $ids = $data['ids'];

        return $this->getRecordService()->markAsReadByIds($ids);
    }

    public function actionMarkAllAsRead($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new BadRequest();
        }
        return $this->getRecordService()->markAllAsRead();
    }
}

