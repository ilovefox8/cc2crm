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

Fox.define('Views.User.Record.Detail', 'Views.Record.Detail', function (Dep) {

    return Dep.extend({

        sideView: 'User.Record.DetailSide',

        editModeEnabled: false,

        setup: function () {
            Dep.prototype.setup.call(this);
            this.buttonList = _.clone(this.buttonList);

            if (this.model.id == this.getUser().id || this.getUser().isAdmin()) {
                this.buttonList.push({
                    name: 'preferences',
                    label: 'Preferences',
                    style: 'default'
                });

                if (!this.model.get('isAdmin')) {
                    this.buttonList.push({
                        name: 'access',
                        label: 'Access',
                        style: 'default'
                    });
                }

                if (this.model.id == this.getUser().id) {
                    this.buttonList.push({
                        name: 'changePassword',
                        label: 'Change Password',
                        style: 'default'
                    });
                }

                if ((this.getAcl().check('EmailAccountScope') && this.model.id == this.getUser().id) || this.getUser().isAdmin()) {
                    this.buttonList.push({
                        name: 'emailAccounts',
                        label: "Email Accounts",
                        style: 'default'
                    });
                }

                if (this.model.id == this.getUser().id) {
                    this.buttonList.push({
                        name: 'externalAccounts',
                        label: 'External Accounts',
                        style: 'default'
                    });
                }
            }

            if (this.model.id == this.getUser().id) {
                this.listenTo(this.model, 'after:save', function () {
                    this.getUser().set(this.model.toJSON());
                }.bind(this));
            }
        },

        actionChangePassword: function () {
            this.notify('Loading...');

            this.createView('changePassword', 'Modals.ChangePassword', {
                userId: this.model.id
            }, function (view) {
                view.render();
                this.notify(false);

                this.listenToOnce(view, 'changed', function () {
                    setTimeout(function () {
                        this.getBaseController().logout();
                    }.bind(this), 2000);
                }, this);

            }.bind(this));
        },

        actionPreferences: function () {
            this.getRouter().navigate('#Preferences/edit/' + this.model.id, {trigger: true});
        },

        actionEmailAccounts: function () {
            this.getRouter().navigate('#EmailAccount/list/userId=' + this.model.id, {trigger: true});
        },

        actionExternalAccounts: function () {
            this.getRouter().navigate('#ExternalAccount', {trigger: true});
        },

        actionAccess: function () {
            this.notify('Loading...');

            $.ajax({
                url: 'User/action/acl',
                type: 'GET',
                data: {
                    id: this.model.id,
                }
            }).done(function (aclData) {
                this.createView('access', 'User.Modals.Access', {
                    aclData: aclData,
                    model: this.model,
                }, function (view) {
                    this.notify(false);
                    view.render();
                }.bind(this));
            }.bind(this));


        },

    });

});

