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

Fox.define('Views.Fields.UserWithAvatar', 'Views.Fields.Link', function (Dep) {

    return Dep.extend({

        listTemplate: 'fields.user-with-avatar.detail',

        detailTemplate: 'fields.user-with-avatar.detail',

        data: function () {
            var o = _.extend({}, Dep.prototype.data.call(this));
            if (this.mode == 'detail' || this.mode == 'list') {
                o.avatar = this.getAvatarHtml();
            }
            return o;
        },

        getAvatarHtml: function () {
            if (this.getConfig().get('disableAvatars')) {
                return '';
            }
            var t;
            var cache = this.getCache();
            if (cache) {
                t = cache.get('app', 'timestamp');
            } else {
                t = Date.now();
            }
            return '<img class="avatar avatar-link" width="14" src="?entryPoint=avatar&size=small&id=' + this.model.get(this.idName) + '&t='+t+'">';
        },

    });
});

