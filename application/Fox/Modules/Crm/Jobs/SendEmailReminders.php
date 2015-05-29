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

namespace Fox\Modules\Crm\Jobs;

use \Fox\Core\Exceptions;

class SendEmailReminders extends \Fox\Core\Jobs\Base
{
    const MAX_PORTION_SIZE = 10;

    public function run()
    {
        $dt = new \DateTime();

        $now = $dt->format('Y-m-d H:i:s');
        $nowShifted = $dt->sub(new \DateInterval('PT1H'))->format('Y-m-d H:i:s');

        $collection = $this->getEntityManager()->getRepository('Reminder')->where(array(
            'type' => 'Email',
            'remindAt<=' => $now,
            'startAt>' => $nowShifted,
        ))->find();

        if (!empty($collection)) {
            $emailReminder = new \Fox\Modules\Crm\Business\Reminder\EmailReminder(
                $this->getEntityManager(),
                $this->getContainer()->get('mailSender'),
                $this->getConfig(),
                $this->getContainer()->get('dateTime'),
                $this->getContainer()->get('language')
            );
            $pdo = $this->getEntityManager()->getPDO();
        }
        
        foreach ($collection as $i => $entity) {
            if ($i >= self::MAX_PORTION_SIZE) {
                break;
            }
            $emailReminder->send($entity);

            $sql = "DELETE FROM `reminder` WHERE id = ". $pdo->quote($entity->id);
            $pdo->query($sql);
            $this->getEntityManager()->removeEntity($entity);
        }
        return true;
    }
}

