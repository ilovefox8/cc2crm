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

Fox.define('Crm:Views.Calendar.CalendarPage', 'View', function (Dep) {

    return Dep.extend({

        template: 'crm:calendar.calendar-page',

        el: '#main',

        setup: function () {
            var mode = this.options.mode || null;
            if (!mode) {
                var mode = this.getStorage().get('state', 'calendarMode') || null;
            }
            this.createView('calendar', 'Crm:Calendar.Calendar', {
                date: this.options.date,
                mode: mode,
                el: '#main > .calendar-container',
            }, function (view) {
                var first = true;
                this.listenTo(view, 'view', function (date, mode) {
                    if (!first) {
                        this.getRouter().navigate('#Calendar/show/date=' + date + '&mode=' + mode);
                    }
                    first = false;
                }, this);
                this.listenTo(view, 'change:mode', function (mode) {
                    this.getStorage().set('state', 'calendarMode', mode);
                }, this);
            }.bind(this));
        },

        updatePageTitle: function () {
            this.setPageTitle(this.translate('Calendar', 'scopeNames'));
        },
    });
});


