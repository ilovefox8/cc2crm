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

Fox.define('Views.Admin.Authentication', 'Views.Settings.Record.Edit', function (Dep) {

    return Dep.extend({

        layoutName: 'authentication',

        dependencyDefs: {
            'ldapAuth': {
                map: {
                    true: [
                        {
                            action: 'show',
                            fields: ['ldapUsername', 'ldapPassword']
                        }
                    ]
                },
                default: [
                    {
                        action: 'hide',
                        fields: ['ldapUsername', 'ldapPassword']
                    }
                ]
            },
            'ldapAccountCanonicalForm': {
                map: {
                    'Backslash': [
                        {
                            action: 'show',
                            fields: ['ldapAccountDomainName', 'ldapAccountDomainNameShort']
                        }
                    ],
                    'Principal': [
                        {
                            action: 'show',
                            fields: ['ldapAccountDomainName', 'ldapAccountDomainNameShort']
                        }
                    ]
                },
                default: [
                    {
                        action: 'hide',
                        fields: ['ldapAccountDomainName', 'ldapAccountDomainNameShort']
                    }
                ]
            }
        },

        setup: function () {
            Dep.prototype.setup.call(this);

            this.methodList = this.getMetadata().get('entityDefs.Settings.fields.authenticationMethod.options') || [];

            this.authFields = {
                'LDAP': [
                    'ldapHost', 'ldapPort', 'ldapAuth', 'ldapSecurity',
                    'ldapUsername', 'ldapPassword', 'ldapBindRequiresDn',
                    'ldapUserLoginFilter', 'ldapBaseDn', 'ldapAccountCanonicalForm',
                    'ldapAccountDomainName', 'ldapAccountDomainNameShort', 'ldapAccountDomainName',
                    'ldapAccountDomainNameShort', 'ldapTryUsernameSplit', 'ldapOptReferrals',
                    'ldapCreateFoxUser'
                ]
            };
        },


        afterRender: function () {
            this.handlePanelsVisibility();
            this.listenTo(this.model, 'change:authenticationMethod', function () {
                this.handlePanelsVisibility();
            }, this);
        },

        handlePanelsVisibility: function () {
            var authenticationMethod = this.model.get('authenticationMethod');

            this.methodList.forEach(function (method) {
                var list = (this.authFields[method] || []);
                if (method != authenticationMethod) {
                    this.hidePanel(method);
                    list.forEach(function (field) {
                        this.hideField(field);
                    }, this);
                } else {
                    this.showPanel(method);

                    list.forEach(function (field) {
                        this.showField(field);
                    }, this);
                    Object.keys(this.dependencyDefs || {}).forEach(function (attr) {
                        if (~list.indexOf(attr)) {
                            this._handleDependencyAttribute(attr);
                        }
                    }, this);
                }
            }, this);
        },

    });

});

