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

namespace Fox\Core\Utils\Cron;

use \PDO;
use \Fox\Core\Utils\Config;
use \Fox\Core\ORM\EntityManager;

class ScheduledJob
{
    private $config;

    private $entityManager;

    public function __construct(Config $config, EntityManager $entityManager)
    {
        $this->config = $config;
        $this->entityManager = $entityManager;
    }

    protected function getConfig()
    {
        return $this->config;
    }

    protected function getEntityManager()
    {
        return $this->entityManager;
    }

    /**
     * Get active Scheduler Jobs
     *
     * @return array
     */
    public function getActiveJobs()
    {
        $query = "SELECT * FROM scheduled_job WHERE
                    `status` = 'Active'
                    AND deleted = 0";

        $pdo = $this->getEntityManager()->getPDO();
        $sth = $pdo->prepare($query);
        $sth->execute();

        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);

        $list = array();
        foreach ($rows as $row) {
            $list[] = $row;
        }

        return $list;
    }

    /**
     * Add record to ScheduledJobLogRecord about executed job
     *
     * @param string $scheduledJobId
     * @param string $status
     *
     * @return string ID of created ScheduledJobLogRecord
     */
    public function addLogRecord($scheduledJobId, $status, $runTime = null)
    {
        if (!isset($runTime)) {
            $runTime = date('Y-m-d H:i:s');
        }

        $entityManager = $this->getEntityManager();

        $scheduledJob = $entityManager->getEntity('ScheduledJob', $scheduledJobId);
        $scheduledJob->set('lastRun', $runTime);
        $entityManager->saveEntity($scheduledJob);

        $scheduledJobLog = $entityManager->getEntity('ScheduledJobLogRecord');
        $scheduledJobLog->set(array(
            'scheduledJobId' => $scheduledJobId,
            'name' => $scheduledJob->get('name'),
            'status' => $status,
            'executionTime' => $runTime,
        ));
        $scheduledJobLogId = $entityManager->saveEntity($scheduledJobLog);

        return $scheduledJobLogId;
    }
}