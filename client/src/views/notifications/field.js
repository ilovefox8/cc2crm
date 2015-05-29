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

Fox.define('Views.Notifications.Field', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        type: 'notification',

        listTemplate: 'notifications.field',

        detailTemplate: 'notifications.field',

        setup: function () {
            switch (this.model.get('type')) {
                case 'Note':
                    this.processNote(this.model.get('noteData'));
                    break;
                case 'MentionInPost':
                    this.processMentionInPost(this.model.get('noteData'));
                    break;
                default:
                    this.process();
            }
        },

        process: function () {
            var type = this.model.get('type');
            if (!type) return;

            var viewName = 'Notifications.Items.' + type.replace(/ /g, '');
            this.createView('notification', viewName, {
                model: this.model,
                el: this.params.containerEl + ' li[data-id="' + this.model.id + '"]',
            });
        },

        processNote: function (data) {
            this.wait(true);
            this.getModelFactory().create('Note', function (model) {
                model.set(data);
                var viewName = 'Stream.Notes.' + data.type;
                this.createView('notification', viewName, {
                    model: model,
                    isUserStream: true,
                    el: this.params.containerEl + ' li[data-id="' + this.model.id + '"]',
                    onlyContent: true,
                });
                this.wait(false);
            }, this);
        },

        processMentionInPost: function (data) {
            this.wait(true);
            this.getModelFactory().create('Note', function (model) {
                model.set(data);
                var viewName = 'Stream.Notes.MentionInPost';
                this.createView('notification', viewName, {
                    model: model,
                    userId: this.model.get('userId'),
                    isUserStream: true,
                    el: this.params.containerEl + ' li[data-id="' + this.model.id + '"]',
                    onlyContent: true,
                });
                this.wait(false);
            }, this);
        },

    });
});

