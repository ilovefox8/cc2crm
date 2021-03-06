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

class Note extends \Fox\Core\ORM\Entity
{
    public function loadAttachments()
    {
        $data = $this->get('data');
        if (!empty($data) && !empty($data->attachmentsIds)) {
            $attachmentsIds = $data->attachmentsIds;
            $collection = array();
            foreach ($attachmentsIds as $id) {
                $attachment = $this->entityManager->getEntity('Attachment', $id);
                if ($attachment) {
                    $collection[] = $attachment;
                }
            }
        } else {
            $collection = $this->get('attachments');
        }
        
        $ids = array();
        $names = new \stdClass();
        $types = new \stdClass();
        foreach ($collection as $e) {
            $id = $e->id;
            $ids[] = $id;
            $names->$id = $e->get('name');
            $types->$id = $e->get('type');
        }
        $this->set('attachmentsIds', $ids);
        $this->set('attachmentsNames', $names);
        $this->set('attachmentsTypes', $types);
    }
}

