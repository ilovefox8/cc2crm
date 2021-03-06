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

Fox.define('Views.Modals.Detail', 'Views.Modal', function (Dep) {

    return Dep.extend({

        cssName: 'detail-modal',

        header: false,

        template: 'modals.detail',

        editButton: true,

        fullFormButton: true,

        detailViewName: null,

        columnCount: 1,

        backdrop: true,

        setup: function () {

            var self = this;

            this.buttonList = [];

            if ('editButton' in this.options) {
                this.editButton = this.options.editButton;
            }

            if ('fullFormButton' in this.options) {
                this.fullFormButton = this.options.fullFormButton;
            }

            if (this.fullFormButton) {
                this.buttonList.push({
                    name: 'fullForm',
                    label: 'Full Form'
                });
            }

            this.buttonList.push({
                name: 'cancel',
                label: 'Close'
            });

            this.scope = this.scope || this.options.scope;
            this.id = this.options.id;

            this.header = this.getLanguage().translate(this.scope, 'scopeNames');

            this.waitForView('record');

            this.getModelFactory().create(this.scope, function (model) {
                if (!this.model) {
                    this.model = model;
                    model.id = this.id;
                    model.once('sync', function () {
                        this.createRecord(model);
                    }, this);
                    model.fetch();
                } else {
                    var sourceModel = this.model;
                    model = this.model = this.model.clone();
                    this.once('after:render', function () {
                        model.fetch();
                    });
                    this.createRecord(model);

                    this.listenTo(model, 'change', function () {
                        sourceModel.set(model.getClonedAttributes());
                    }, this);
                }
            }, this);
        },

        addEditButton: function () {
            this.buttonList.unshift({
                name: 'edit',
                label: 'Edit',
                style: 'primary'
            });
        },

        createRecord: function (model, callback) {
            if (model.get('name')) {
                this.header += ' &raquo; ' + model.get('name');
            }
            if (this.editButton && this.getAcl().check(model, 'edit')) {
                this.addEditButton();
            }

            var viewName = this.detailViewName || this.getMetadata().get('clientDefs.' + model.name + '.recordViews.detailQuick') || 'Record.DetailSmall'; 
            var options = {
                model: model,
                el: this.containerSelector + ' .record-container',
                type: 'detailSmall',
                layoutName: this.layoutName || 'detailSmall',
                columnCount: this.columnCount,
                buttonsPosition: false,
                inlineEditDisabled: true,
                exit: function () {},
            };
            this.createView('record', viewName, options, callback);
        },

        afterRender: function () {
            Dep.prototype.afterRender.call(this);

            setTimeout(function () {
                this.$el.children(0).scrollTop(0);
            }.bind(this), 50);
        },

        actionEdit: function (dialog) {
            this.createView('quickEdit', 'Modals.Edit', {
                scope: this.scope,
                id: this.id,
                fullFormButton: this.fullFormButton
            }, function (view) {
                view.once('after:render', function () {
                    Fox.Ui.notify(false);
                    dialog.hide();
                });

                this.listenToOnce(view, 'remove', function () {
                    this.close();
                }, this);

                this.listenToOnce(view, 'after:save', function () {
                    this.trigger('after:save');
                }, this);

                view.render();
            }.bind(this));
        },

        actionFullForm: function (dialog) {
            var url;
            var router = this.getRouter();

            url = '#' + this.scope + '/view/' + this.id;

            var attributes = this.getView('record').fetch();
            var model = this.getView('record').model;
            attributes = _.extend(attributes, model.getClonedAttributes());

            setTimeout(function () {
                router.dispatch(this.scope, 'view', {
                    attributes: attributes,
                    returnUrl: Backbone.history.fragment,
                    id: this.id
                });
                router.navigate(url, {trigger: false});
            }.bind(this), 10);


            this.trigger('leave');
            dialog.close();

        }
    });
});

