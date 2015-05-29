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

class Job extends \Fox\Core\ORM\Repositories\RDB
{
    protected function init()
    {
        $this->dependencies[] = 'config';
    }

    protected function getConfig()
    {
        return $this->getInjection('config');
    }

    public function beforeSave(Entity $entity)
    {
        if (!$entity->has('executeTime')) {
            $entity->set('executeTime', date('Y-m-d H:i:s'));
        }

        if (!$entity->has('attempts')) {
            $attempts = $this->getConfig()->get('cron.attempts', 0);
            $entity->set('attempts', $attempts);
        }
    }
}

