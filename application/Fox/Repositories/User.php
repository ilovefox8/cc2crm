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

namespace Fox\Repositories;

use Fox\ORM\Entity;

use \Fox\Core\Exceptions\Error;

class User extends \Fox\Core\ORM\Repositories\RDB
{
    protected function beforeSave(Entity $entity, array $options)
    {
        parent::beforeSave($entity, $options);
        if ($entity->isNew()) {
            $userName = $entity->get('userName');
            if (empty($userName)) {
                throw new Error();
            }

            $user = $this->where(array(
                'userName' => $userName
            ))->findOne();

            if ($user) {
                throw new Error();
            }
        } else {
            if ($entity->isFieldChanged('userName')) {
                $userName = $entity->get('userName');
                if (empty($userName)) {
                    throw new Error();
                }

                $user = $this->where(array(
                    'userName' => $userName,
                    'id!=' => $entity->id
                ))->findOne();
                if ($user) {
                    throw new Error();
                }
            }
        }
    }

    public function checkBelongsToAnyOfTeams($userId, array $teamIds)
    {
        if (empty($teamIds)) {
            return false;
        }

        $pdo = $this->getEntityManager()->getPDO();

        $arr = [];
        foreach ($teamIds as $teamId) {
            $arr[] = $pdo->quote($teamId);
        }

        $sql = "SELECT * FROM team_user WHERE deleted = 0 AND user_id = :userId AND team_id IN (".implode(", ", $arr).")";

        $sth = $pdo->prepare($sql);
        $sth->execute(array(
            ':userId' => $userId
        ));
        if ($row = $sth->fetch()) {
            return true;
        }
        return false;
    }
}

