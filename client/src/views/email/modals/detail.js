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

Fox.define('Views.Email.Modals.Detail', ['Views.Modals.Detail', 'Views.Email.Detail'], function (Dep, Detail) {

    return Dep.extend({

        setup: function () {
            Dep.prototype.setup.call(this);

            this.buttonList.unshift({
                'name': 'reply',
                'label': 'Reply',
                'style': 'danger'
            });
            if (this.model) {
                this.listenToOnce(this.model, 'sync', function () {
                    setTimeout(function () {
                        this.model.set('isRead', true);
                    }.bind(this), 50);
                }, this);
            }

        },

        actionReply: function () {
            Detail.prototype.actionReply.call(this, null, true);
        },

    });
});

