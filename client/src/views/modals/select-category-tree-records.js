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

Fox.define('Views.Modals.SelectCategoryTreeRecords', 'Views.Modals.SelectRecords', function (Dep) {

    return Dep.extend({

        setup: function () {
            this.filters = this.options.filters || {};
            this.boolFilterList = this.options.boolFilterList || {};
            this.primaryFilterName = this.options.primaryFilterName || null;

            if ('multiple' in this.options) {
                this.multiple = this.options.multiple;
            }

            this.createButton = false;
            this.massRelateEnabled = this.options.massRelateEnabled;

            this.buttons = [
                {
                    name: 'cancel',
                    label: 'Cancel',
                    onClick: function (dialog) {
                        dialog.close();
                    }
                }
            ];

            if (this.multiple) {
                this.buttons.unshift({
                    name: 'select',
                    style: 'primary',
                    label: 'Select',
                    onClick: function (dialog) {
                        var listView = this.getView('list');

                        if (listView.allResultIsChecked) {
                            var where = this.collection.where;
                            this.trigger('select', {
                                massRelate: true,
                                where: where
                            });
                        } else {
                            var list = listView.getSelected();
                            if (list.length) {
                                this.trigger('select', list);
                            }
                        }
                        dialog.close();
                    }.bind(this),
                });
            }

            this.scope = this.options.scope;

            this.header = this.getLanguage().translate(this.scope, 'scopeNamesPlural');

            this.waitForView('list');

            Fox.require('SearchManager', function (SearchManager) {
                this.getCollectionFactory().create(this.scope, function (collection) {

                    collection.maxSize = this.getConfig().get('recordsPerPageSmall') || 5;

                    this.collection = collection;

                    var searchManager = new SearchManager(collection, 'listSelect', null, this.getDateTime());
                    searchManager.emptyOnReset = true;
                    if (this.filters) {
                        searchManager.setAdvanced(this.filters);
                    }
                    if (this.boolFilterList) {
                        searchManager.setBool(this.boolFilterList);
                    }
                    if (this.primaryFilterName) {
                        searchManager.setPrimary(this.primaryFilterName);
                    }

                    collection.where = searchManager.getWhere();
                    collection.url = collection.name + '/action/listTree';

                    var viewName = this.getMetadata().get('clientDefs.' + this.scope + '.recordViews.listSelectCategoryTree') ||
                                   'Record.ListTree';

                    this.listenToOnce(collection, 'sync', function () {
                        this.createView('list', viewName, {
                            collection: collection,
                            el: this.containerSelector + ' .list-container',
                            createDisabled: true,
                            selectable: true,
                            checkboxes: this.multiple,
                            massActionsDisabled: true,
                            searchManager: searchManager,
                            checkAllResultDisabled: true,
                            buttonsDisabled: true
                        }, function (list) {
                            list.once('select', function (model) {
                                this.trigger('select', model);
                                this.close();
                            }.bind(this));
                        }.bind(this));
                    }.bind(this));

                    collection.fetch();

                }.bind(this));
            }.bind(this));
        },

    });
});

