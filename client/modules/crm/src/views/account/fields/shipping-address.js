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

Fox.define('Crm:Views.Account.Fields.ShippingAddress', 'Views.Fields.Address', function (Dep) {

    return Dep.extend({

        copyFrom: 'billingAddress',

        afterRender: function () {
            Dep.prototype.afterRender.call(this);

            if (this.mode == 'edit') {
                var label = this.translate('Copy Billing', 'labels', 'Account');
                $btn = $('<button class="btn btn-default btn-sm">' + label + '</button>').on('click', function () {
                    this.copy(this.copyFrom);
                }.bind(this));
                this.$el.append($btn);
            }
        },

        copy: function (fieldFrom) {
            var attrList = Object.keys(this.getMetadata().get('fields.address.fields')).forEach(function (attr) {
                destField = this.name + Fox.Utils.upperCaseFirst(attr);
                sourceField = fieldFrom + Fox.Utils.upperCaseFirst(attr);

                this.model.set(destField, this.model.get(sourceField));
            }, this);

        },

    });
});

