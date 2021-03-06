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

Fox.define('Views.OutboundEmail.Fields.TestSend', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        _template: '<button class="btn btn-default disabled" data-action="sendTestEmail">{{translate \'Send Test Email\' scope=\'Email\'}}</button>',

        events: {
            'click [data-action="sendTestEmail"]': function () {
                this.send();
            },
        },

        fetch: function () {
            return {};
        },

        checkAvailability: function () {
            if (this.model.get('smtpServer')) {
                this.$el.find('button').removeClass('disabled');
            } else {
                this.$el.find('button').addClass('disabled');
            }
        },

        afterRender: function () {
            this.checkAvailability();

            this.stopListening(this.model, 'change:smtpServer');

            this.listenTo(this.model, 'change:smtpServer', function () {
                this.checkAvailability();
            }, this);
        },

        getSmtpData: function () {
            var data = {
                'server': this.model.get('smtpServer'),
                'port': this.model.get('smtpPort'),
                'auth': this.model.get('smtpAuth'),
                'security': this.model.get('smtpSecurity'),
                'username': this.model.get('smtpUsername'),
                'password': this.model.get('smtpPassword') || null,
                'fromName': this.model.get('outboundEmailFromName'),
                'fromAddress': this.model.get('outboundEmailFromAddress'),
                'type': 'outboundEmail',
            };
            return data;
        },


        send: function () {
            var data = this.getSmtpData();

            this.createView('popup', 'OutboundEmail.Modals.TestSend', {
                emailAddress: this.getUser().get('emailAddress')
            }, function (view) {
                view.render();

                this.listenToOnce(view, 'send', function (emailAddress) {
                    this.$el.find('button').addClass('disabled');
                    data.emailAddress = emailAddress;

                    this.notify('Sending...');

                    view.close();

                    $.ajax({
                        url: 'Email/action/sendTestEmail',
                        type: 'POST',
                        data: JSON.stringify(data),
                        error: function (xhr, status) {
                            var statusReason = xhr.getResponseHeader('X-Status-Reason') || '';
                            statusReason = statusReason.replace(/ $/, '');
                            statusReason = statusReason.replace(/,$/, '');

                            var msg = this.translate('Error') + ' ' + xhr.status;
                            if (statusReason) {
                                msg += ': ' + statusReason;
                            }
                            Fox.Ui.error(msg);
                            console.error(msg);
                            xhr.errorIsHandled = true;

                            this.$el.find('button').removeClass('disabled');
                        }.bind(this)
                    }).done(function () {
                        this.$el.find('button').removeClass('disabled');
                        Fox.Ui.success(this.translate('testEmailSent', 'messages', 'Email'));
                    }.bind(this));
                }, this);
            }.bind(this));

        },

    });

});

