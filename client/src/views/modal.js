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

Fox.define('Views.Modal', 'View', function (Dep) {

    return Dep.extend({

        cssName: 'modal-dialog',

        header: false,

        dialog: null,

        containerSelector: null,

        scope: null,

        backdrop: 'static',

        buttonList: [],

        buttons: [],

        width: false,

        escapeDisabled: false,

        init: function () {
            var id = this.cssName + '-container-' + Math.floor((Math.random() * 10000) + 1).toString();
            var containerSelector = this.containerSelector = '#' + id;

            this.options = this.options || {};
            this.options.el = this.containerSelector;

            this.buttonList = Fox.Utils.clone(this.buttonList);
            this.buttons = Fox.Utils.clone(this.buttons);

            this.on('render', function () {
                $(containerSelector).remove();
                $('<div />').css('display', 'none').attr('id', id).appendTo('body');

                var buttonListExt = [];

                this.buttons.forEach(function (item) {
                    var o = Fox.Utils.clone(item);
                    if (!('text' in o) && ('label' in o)) {
                        o.text = this.getLanguage().translate(o.label);
                    }
                    buttonListExt.push(o);
                }, this);

                this.buttonList.forEach(function (item) {
                    var o = {};

                    if (typeof item == 'string') {
                        o.name = item;
                    } else {
                        o = item;
                    }

                    var text = o.text;
                    if (!o.text) {
                        if ('label' in o) {
                            o.text = this.translate(o.label, 'labels', this.scope)
                        } else {
                            o.text = this.translate(o.name, 'modalActions', this.scope);
                        }
                    }
                    o.onClick = o.onClick || this['action' + Fox.Utils.upperCaseFirst(o.name)].bind(this);

                    buttonListExt.push(o);
                }, this);

                this.dialog = new Fox.Ui.Dialog({
                    backdrop: this.backdrop,
                    header: this.header,
                    container: containerSelector,
                    body: '',
                    buttons: buttonListExt,
                    width: this.width,
                    keyboard: !this.escapeDisabled,
                    onRemove: function () {
                        this.remove();
                    }.bind(this)
                });
                this.setElement(containerSelector + ' .body');
            }, this);

            this.on('after:render', function () {
                $(containerSelector).show();
                this.dialog.show();
            });

            this.once('remove', function () {
                if (this.dialog) {
                    this.dialog.close();
                }
                $(containerSelector).remove();
            });
        },

        actionCancel: function (dialog) {
            dialog.close();
        },

        close: function () {
            this.dialog.close();
        },
    });
});

