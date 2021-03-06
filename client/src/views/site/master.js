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

Fox.define('Views.Site.Master', 'View', function (Dep) {

    return Dep.extend({

        template: 'site.master',

        views: {
            header: {
                id: 'header',
                view: 'Site.Header'
            },
            main: {
                id: 'main',
                view: false,
            },
            footer: {
                el: 'body > footer',
                view: 'Site.Footer'
            },
        },

        el: 'body',

        showLoadingNotification: function () {
            this.notify('Loading...');
        },

        hideLoadingNotification: function () {
            this.notify(false);
        },

        afterRender: function () {
            var footerView = this.getView('footer');
            if (footerView) {
                var html = footerView.$el.html();
                if ((html.match(/espocrm/gi) || []).length < 2) {
                    var text = 'PHAgY2xhc3M9ImNyZWRpdCBzbWFsbCI+JmNvcHk7IDxhIGhyZWY9Imh0dHA6Ly93d3cuZXNwb2NybS5jb20iPkVzcG9DUk08L2E+PC9wPg==';
                    if (typeof window.atob === "function") {
                        var decText = window.atob(text);
                    } else if (typeof atob === "function") {
                        var decText = atob(text);
                    }

                    if (decText) {
                        footerView.$el.html(decText);
                    }
                }
            }
        },
    });
});


