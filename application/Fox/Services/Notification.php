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

namespace Fox\Services;

use \Fox\Core\Exceptions\Forbidden;
use \Fox\Core\Exceptions\NotFound;

use Fox\ORM\Entity;

use Fox\Core\Utils\Json;

class Notification extends \Fox\Core\Services\Base
{
    protected $dependencies = array(
        'entityManager',
        'user',
        'metadata',
    );

    protected function getEntityManager()
    {
        return $this->injections['entityManager'];
    }

    protected function getUser()
    {
        return $this->injections['user'];
    }

    protected function getMetadata()
    {
        return $this->injections['metadata'];
    }

    public function notifyAboutMentionInPost($userId, $noteId)
    {
        $notification = $this->getEntityManager()->getEntity('Notification');
        $notification->set(array(
            'type' => 'MentionInPost',
            'data' => array('noteId' => $noteId),
            'userId' => $userId
        ));
        $this->getEntityManager()->saveEntity($notification);
    }

    public function notifyAboutNote(array $userIds, \Fox\Entities\Note $note)
    {
        $data = array('noteId' => $note->id);
        $encodedData = Json::encode($data);

        $now = date('Y-m-d H:i:s');

        $pdo = $this->getEntityManager()->getPDO();

        $sql = "INSERT INTO `notification` (`id`, `data`, `type`, `user_id`, `created_at`) VALUES ";
        $arr = [];
        foreach ($userIds as $userId) {
            $id = uniqid();
            $arr[] = "(".$pdo->quote($id).", ".$pdo->quote($encodedData).", ".$pdo->quote('Note').", ".$pdo->quote($userId).", ".$pdo->quote($now).")";
        }

        if (empty($arr)) {
            return;
        }

        $sql .= implode(", ", $arr);
        $pdo->query($sql);
    }

    public function getNotReadCount($userId)
    {
        $searchParams = array();
        $searchParams['whereClause'] = array(
            'userId' => $userId
        );
        return $this->getEntityManager()->getRepository('Notification')->where(array(
            'userId' => $userId,
            'read' => 0,
        ))->count();
    }

    public function markAllRead($userId)
    {
        $pdo = $this->getEntityManager()->getPDO();
        $sql = "UPDATE notification SET `read` = 1 WHERE user_id = ".$pdo->quote($userId)." AND `read` = 0";
        $pdo->prepare($sql)->execute();
        return true;
    }

    public function getList($userId, array $params = array())
    {
        $searchParams = array();
        $searchParams['whereClause'] = array(
            'userId' => $userId
        );
        if (array_key_exists('offset', $params)) {
            $searchParams['offset'] = $params['offset'];
        }
        if (array_key_exists('maxSize', $params)) {
            $searchParams['limit'] = $params['maxSize'];
        }
        $searchParams['orderBy'] = 'createdAt';
        $searchParams['order'] = 'DESC';

        $collection = $this->getEntityManager()->getRepository('Notification')->find($searchParams);
        $count = $this->getEntityManager()->getRepository('Notification')->count($searchParams);

        $ids = array();
        foreach ($collection as $k => $entity) {
            $ids[] = $entity->id;
            $data = $entity->get('data');
            if (empty($data)) {
                continue;
            }
            switch ($entity->get('type')) {
                case 'Note':
                case 'MentionInPost':
                    $note = $this->getEntityManager()->getEntity('Note', $data->noteId);
                    if ($note) {
                        if ($note->get('parentId') && $note->get('parentType')) {
                            $parent = $this->getEntityManager()->getEntity($note->get('parentType'), $note->get('parentId'));
                            if ($parent) {
                                $note->set('parentName', $parent->get('name'));
                            }
                        }
                        $entity->set('noteData', $note->toArray());
                    } else {
                        unset($collection[$k]);
                        $count--;
                        $this->getEntityManager()->removeEntity($entity);
                    }
                    break;
            }
        }

        if (!empty($ids)) {
            $pdo = $this->getEntityManager()->getPDO();
            $sql = "UPDATE notification SET `read` = 1 WHERE id IN ('" . implode("', '", $ids) ."')";

            $s = $pdo->prepare($sql);
            $s->execute();
        }


        return array(
            'total' => $count,
            'collection' => $collection
        );
    }
}
