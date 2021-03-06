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

Fox.define('Views.Stream.List', 'Views.Record.ListExpanded', function (Dep) {

    return Dep.extend({

        type: 'listStream',

        buildRow: function (i, model, callback) {
            var key = 'row-' + model.id;
            this.rows.push(key);

            var type = model.get('type');
            var viewName = 'Stream.Notes.' + type;

            this.createView(key, viewName, {
                model: model,
                parentModel: this.model,
                acl: {
                    edit: this.getAcl().checkModel(model)
                },
                isUserStream: this.options.isUserStream,
                noEdit: this.options.noEdit,
                optionsToPass: ['acl'],
                name: this.type + '-' + model.name,
                el: this.options.el + ' li[data-id="' + model.id + '"]'
            }, callback);

        },

        buildRows: function (callback) {
            this.checkedList = [];
            this.rows = [];

            if (this.collection.length > 0) {
                this.wait(true);

                var count = this.collection.models.length;
                var built = 0;
                for (var i in this.collection.models) {
                    var model = this.collection.models[i];
                    this.buildRow(i, model, function () {
                        built++;
                        if (built == count) {
                            if (typeof callback == 'function') {
                                callback();
                            }
                            this.wait(false);
                        }
                    }.bind(this));
                }
            } else {
                if (typeof callback == 'function') {
                    callback();
                }
            }
        },

        showNewRecords: function () {
            var collection = this.collection;
            var initialCount = collection.length;

            var $list = this.$el.find(this.listContainerEl);

            var success = function () {
                var rowCount = collection.length - initialCount;
                var rowsReady = 0;
                for (var i = rowCount - 1; i >= 0; i--) {
                    var model = collection.at(i);

                    this.buildRow(i, model, function (view) {
                        view.getHtml(function (html) {
                            $list.prepend(html);
                            rowsReady++;
                            view._afterRender();
                            if (view.options.el) {
                                view.setElement(view.options.el);
                            }
                        }.bind(this));
                    });
                }
                this.noRebuild = true;
            }.bind(this);

            collection.fetchNew({
                success: success,
            });
        },

        actionViewRecord: function (data) {
            var id = data.id;
            var scope = data.scope;

            var viewName = this.getMetadata().get('clientDefs.' + scope + '.modalViews.detail') || 'Modals.Detail';

            this.notify('Loading...');
            this.createView('quickDetail', viewName, {
                scope: scope,
                id: id
            }, function (view) {
                view.once('after:render', function () {
                    Fox.Ui.notify(false);
                });
                view.render();
            }.bind(this));
        }

    });

});
