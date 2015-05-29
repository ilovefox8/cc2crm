/************************************************************************
 * This file is part of FoxCRM.
 *
 * FoxCRM - Open Source CRM application.
 * Copyright (C) 2014-2015 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.#.com
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

Fox.define('Views.Callcenter.Callcenter', 'View', function (Dep) {

    return Dep.extend({

        template: 'callcenter.callcenter',

        events: {
            'click a[data-action="makecall"]': function (e) {
                this.makecall();
            },
            'click a[data-action="hangup"]': function (e) {
                this.hangup();
            },
            'click a[data-action="pauseCall"]': function (e) {
                this.pauseCall();
            },
            'click a[data-action="transferCall"]': function (e) {
                this.transferCall();
            },
            'click a[data-action="qcCall"]': function (e) {
                this.qcCall();
            },
        },
      
        makecall: function(){
            console.log("makecall");
        }
    });

});
