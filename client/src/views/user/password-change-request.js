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

Fox.define('Views.User.PasswordChangeRequest', 'View', function (Dep) {

    return Dep.extend({
        
        template: 'user.password-change-request',

        data: function () {
            return {
                requestId: this.options.requestId
            };
        },

        events: {
            'click #btn-submit': function () {
                this.submit();
            }
        },

        submit: function () {
            var $password = this.$el.find('input[name="password"]');
            var $passwordConfirm = this.$el.find('input[name="passwordConfirm"]');

            var password = $password.val();
            var passwordConfirm = $passwordConfirm.val();

            var translatedPasswordLabel = this.translate('password', 'fields', 'User');
            
            if (password == '') {
                var message = this.getLanguage().translate('fieldIsRequired', 'messages').replace('{field}', translatedPasswordLabel);

                $password.popover({
                    placement: 'bottom',
                    content: message,
                    trigger: 'manual',
                }).popover('show');

                var $cellPassword = $password.closest('.form-group');
                $cellPassword.addClass('has-error');

                $password.one('mousedown click', function () {
                    $cellPassword.removeClass('has-error');
                    $password.popover('destroy');
                });
                return;
            }

            if (password != passwordConfirm) {
                var message = this.getLanguage().translate('fieldBadPasswordConfirm', 'messages').replace('{field}', translatedPasswordLabel);

                $passwordConfirm.popover({
                    placement: 'bottom',
                    content: message,
                    trigger: 'manual',
                }).popover('show');

                var $cellPasswordConfirm = $passwordConfirm.closest('.form-group');
                $cellPasswordConfirm.addClass('has-error');

                $passwordConfirm.one('mousedown click', function () {
                    $cellPasswordConfirm.removeClass('has-error');
                    $passwordConfirm.popover('destroy');
                });
                return;
            }
            this.$el.find('.btn-submit').addClass('disabled');

            $.ajax({
                type: 'POST',
                url: 'User/changePasswordByRequest',
                data: JSON.stringify({
                    requestId: this.options.requestId,
                    password: password
                }),
                error: function () {
                    this.$el.find('.btn-submit').removeClass('disabled');
                }.bind(this)
            }).done(function () {
                this.$el.find('.password-change').remove();

                var msg = this.translate('passwordChangedByRequest', 'messages', 'User');
                msg += ' <a href="' + this.getConfig().get('siteUrl') + '">' + this.translate('Login', 'labels', 'User') + '</a>.';

                this.$el.find('.msg-box').removeClass('hidden').html('<span class="text-success">' + msg + '</span>');
            }.bind(this));
            

        },
        

    });
});

