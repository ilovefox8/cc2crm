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

Fox.define('Crm:Views.Case.Record.Panels.Activities', 'Crm:Views.Record.Panels.Activities', function (Dep) {

    return Dep.extend({
        
        getComposeEmailAttributes: function (data, callback) {
            data = data || {};
            var attributes = {
                status: 'Draft',
                name: '[#' + this.model.get('number') + '] ' + this.model.get('name')
            };
            
            if (this.model.get('contactId')) {
                this.getModelFactory().create('Contact', function (contact) {
                    contact.id = this.model.get('contactId');
                    
                    this.listenToOnce(contact, 'sync', function () {
                        var emailAddress = contact.get('emailAddress');                        
                        if (emailAddress) {
                            attributes.to = emailAddress;
                        }
                        
                        callback.call(this, attributes);
                    });                    
                    contact.fetch({
                        error: function () {
                            callback.call(this, attributes);
                        }.bind(this)
                    });
                }, this);
            } else {
                callback.call(this, attributes);
            }
        },
        
    });
});

