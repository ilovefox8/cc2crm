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

namespace Fox\Hooks\Common;

use Fox\ORM\Entity;

class AssignmentEmailNotification extends \Fox\Core\Hooks\Base
{
    public function afterSave(Entity $entity)
    {
        if (
            $this->getConfig()->get('assignmentEmailNotifications')
            &&
            $entity->has('assignedUserId')
            &&
            in_array($entity->getEntityName(), $this->getConfig()->get('assignmentEmailNotificationsEntityList', array()))
        ) {

            $userId = $entity->get('assignedUserId');
            if (!empty($userId) && $userId != $this->getUser()->id && $entity->isFieldChanged('assignedUserId')) {
                $job = $this->getEntityManager()->getEntity('Job');
                $job->set(array(
                    'serviceName' => 'EmailNotification',
                    'method' => 'notifyAboutAssignmentJob',
                    'data' => json_encode(array(
                        'userId' => $userId,
                        'assignerUserId' => $this->getUser()->id,
                        'entityId' => $entity->id,
                        'entityType' => $entity->getEntityName()
                    )),
                    'executeTime' => date('Y-m-d H:i:s'),
                ));
                $this->getEntityManager()->saveEntity($job);
            }
        }
    }

}

