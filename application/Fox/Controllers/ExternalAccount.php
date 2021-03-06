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

use \Fox\Core\Exceptions\Error;
use \Fox\Core\Exceptions\Forbidden;

class ExternalAccount extends \Fox\Core\Controllers\Record
{
    public static $defaultAction = 'list';

    public function actionList($params, $data, $request)
    {
        $integrations = $this->getEntityManager()->getRepository('Integration')->find();
        $arr = array();
        foreach ($integrations as $entity) {
            if ($entity->get('enabled') && $this->getMetadata()->get('integrations.' . $entity->id .'.allowUserAccounts')) {                
                $arr[] = array(
                    'id' => $entity->id
                );
            }
        }
        return array(
            'list' => $arr
        );
    }

    public function actionGetOAuth2Info($params, $data, $request)
    {
        $id = $request->get('id');
        list($integration, $userId) = explode('__', $id);


        if ($this->getUser()->id != $userId) {
            throw new Forbidden();
        }

        $entity = $this->getEntityManager()->getEntity('Integration', $integration);
        if ($entity) {
            return array(
                'clientId' => $entity->get('clientId'),
                'redirectUri' => $this->getConfig()->get('siteUrl') . '?entryPoint=oauthCallback',
                'isConnected' => $this->getRecordService()->ping($integration, $userId)
            );
        }
    }

    public function actionRead($params, $data, $request)
    {
        list($integration, $userId) = explode('__', $params['id']);

        if ($this->getUser()->id != $userId) {
            throw new Forbidden();
        }

        $entity = $this->getEntityManager()->getEntity('ExternalAccount', $params['id']);
        return $entity->toArray();
    }

    public function actionUpdate($params, $data)
    {
        return $this->actionPatch($params, $data);
    }

    public function actionPatch($params, $data)
    {
        list($integration, $userId) = explode('__', $params['id']);


        if ($this->getUser()->id != $userId) {
            throw new Forbidden();
        }

        if (isset($data['enabled']) && !$data['enabled']) {
            $data['data'] = null;
        }

        $entity = $this->getEntityManager()->getEntity('ExternalAccount', $params['id']);
        $entity->set($data);
        $this->getEntityManager()->saveEntity($entity);

        return $entity->toArray();
    }

    public function actionAuthorizationCode($params, $data, $request)
    {
        if (!$request->isPost()) {
            throw new Error('Bad HTTP method type.');
        }

        $id = $data['id'];
        $code = $data['code'];

        list($integration, $userId) = explode('__', $id);

        if ($this->getUser()->id != $userId) {
            throw new Forbidden();
        }

        $service = $this->getRecordService();
        return $service->authorizationCode($integration, $userId, $code);
    }
}

