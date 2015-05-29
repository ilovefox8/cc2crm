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

namespace Fox\Entities;

class Preferences extends \Fox\Core\ORM\Entity
{

    public function getSmtpParams()
    {
        $smtpParams = array();
        $smtpParams['server'] = $this->get('smtpServer');
        if ($smtpParams['server']) {
            $smtpParams['port'] = $this->get('smtpPort');
            $smtpParams['server'] = $this->get('smtpServer');
            $smtpParams['auth'] = $this->get('smtpAuth');
            $smtpParams['security'] = $this->get('smtpSecurity');
            $smtpParams['username'] = $this->get('smtpUsername');
            $smtpParams['password'] = $this->get('smtpPassword');
            return $smtpParams;
        } else {
            return false;
        }
    }
}

