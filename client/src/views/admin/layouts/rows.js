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

Fox.define('Views.Admin.Layouts.Rows', 'Views.Admin.Layouts.Base', function (Dep) {

    return Dep.extend({

        template: 'admin.layouts.rows',


        events: _.extend({
            'click #layout a[data-action="editField"]': function (e) {
                var data = {};
                this.dataAttributes.forEach(function (attr) {
                    data[attr] =  $(e.target).closest('li').data(Fox.Utils.toDom(attr))
                });
                this.openEditDialog(data);
            },
        }, Dep.prototype.events),

        dataAttributes: null,

        dataAttributesDefs: {},

        editable: false,

        data: function () {
            return {
                scope: this.scope,
                type: this.type,
                buttons: this.buttons,
                enabledFields: this.enabledFields,
                disabledFields: this.disabledFields,
                layout: this.rowLayout,
                dataAttributes: this.dataAttributes,
                dataAttributesDefs: this.dataAttributesDefs,
                editable: this.editable,
            };
        },

        afterRender: function () {
            $('#layout ul.enabled, #layout ul.disabled').sortable({
                connectWith: '#layout ul.connected'
            });
        },

        fetch: function () {
            var layout = [];
            $("#layout ul.enabled > li").each(function (i, el) {
                var o = {};
                this.dataAttributes.forEach(function (attr) {
                    var value = $(el).data(Fox.Utils.toDom(attr)) || null;
                    if (value) {
                        o[attr] = value;
                    }
                });
                layout.push(o);
            }.bind(this));
            return layout;
        },

        validate: function (layout) {
            if (layout.length == 0) {
                this.notify('Layout cannot be empty', 'error');
                return false;
            }
            return true;
        }
    });
});

