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

Fox.define('Views.Notifications.Items.EmailReceived', 'Views.Notifications.Notification', function (Dep) {

    return Dep.extend({

        messageName: 'emailReceived',

        template: 'notifications.items.email-received',

        data: function () {
            return _.extend({
                emailId: this.emailId,
                emailName: this.emailName
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            var data = this.model.get('data') || {};

            this.userId = data.userId;

            this.messageData['entityType'] = Fox.Utils.upperCaseFirst((this.translate(data.entityType, 'scopeNames') || '').toLowerCase());
            if (data.personEntityId) {
                this.messageData['from'] = '<a href="#' + data.personEntityType + '/view/' + data.personEntityId + '">' + data.personEntityName + '</a>';
            } else {
                this.messageData['from'] = data.fromString || this.translate('empty address');
            }

            this.emailId = data.emailId;
            this.emailName = data.emailName;

            this.createMessage();
        }

    });
});

