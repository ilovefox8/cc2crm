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

Fox.define('Views.Record.ListTreeItem', 'View', function (Dep) {

    return Dep.extend({

        template: 'record.list-tree-item',

        isEnd: false,

        level: 0,

        data: function () {
            return {
                name: this.model.get('name'),
                isUnfolded: this.isUnfolded,
                showFold: this.isUnfolded && !this.isEnd,
                showUnfold: !this.isUnfolded && !this.isEnd,
                isEnd: this.isEnd,
                isSelected: this.isSelected
            };
        },

        events: {
            'click [data-action="unfold"]': function (e) {
                this.unfold();
                e.stopPropagation();
            },
            'click [data-action="fold"]': function (e) {
                this.fold();
                e.stopPropagation();
            }
        },

        setIsSelected: function () {
            this.isSelected = true;
            this.selectedData.id = this.model.id;

            var path = this.selectedData.path;
            var names = this.selectedData.names;
            path.length = 0;
            var view = this;
            while (1) {
                path.unshift(view.model.id);
                names[view.model.id] = view.model.get('name');
                if (view.getParentView().level) {
                    view = view.getParentView().getParentView();
                } else {
                    break;
                }
            }
        },

        setup: function () {
            if ('level' in this.options) {
                this.level = this.options.level;
            }
            if ('isSelected' in this.options) {
                this.isSelected = this.options.isSelected;
            }
            if ('selectedData' in this.options) {
                this.selectedData = this.options.selectedData;
            }
            if ('createDisabled' in this.options) {
                this.createDisabled = this.options.createDisabled;
            }

            this.scope = this.model.name;

            this.isUnfolded = false;

            var childCollection = this.model.get('childCollection');

            if (childCollection && childCollection.length == 0) {
                if (this.createDisabled) {
                    this.isEnd = true;
                }
            } else {
                if (childCollection) {
                    childCollection.models.forEach(function (model) {
                        if (~this.selectedData.path.indexOf(model.id)) {
                            this.isUnfolded = true;
                        }
                    }, this);
                    if (this.isUnfolded) {
                        this.createChildren();
                    }
                }
            }

            this.on('select', function (o) {
                this.getParentView().trigger('select', o);
            }, this);
        },

        createChildren: function () {
            var childCollection = this.model.get('childCollection');
            var callback = null;
            if (this.isRendered()) {
                callback = function (view) {
                    view.render();
                };
            }
            this.createView('children', 'Record.ListTree', {
                collection: childCollection,
                el: this.options.el + ' > .children',
                createDisabled: this.options.createDisabled,
                level: this.level + 1,
                selectedData: this.selectedData,
                model: this.model,
                selectable: this.options.selectable
            }, callback);
        },

        unfold: function () {
            var childCollection = this.model.get('childCollection');
            if (childCollection !== null) {
                this.createChildren();
                this.isUnfolded = true;
                this.afterUnfold();
            } else {
                this.getCollectionFactory().create(this.scope, function (collection) {
                    collection.url = this.collection.url;
                    collection.parentId = this.model.id;
                    collection.maxDepth = 1;

                    this.notify('Please wait...');
                    this.listenToOnce(collection, 'sync', function () {
                    this.notify(false);
                        this.model.set('childCollection', collection);
                        this.createChildren();
                        this.isUnfolded = true;

                        if (collection.length || !this.createDisabled) {
                            this.afterUnfold();
                        } else {
                            this.isEnd = true;
                            this.afterIsEnd();
                        }
                    }, this);
                    collection.fetch()
                }, this);
            }

        },

        fold: function () {
            this.clearView('children');
            this.afterFold();
        },

        afterFold: function () {
            this.$el.find('a[data-action="fold"][data-id="'+this.model.id+'"]').addClass('hidden');
            this.$el.find('a[data-action="unfold"][data-id="'+this.model.id+'"]').removeClass('hidden');
            this.$el.find(' > .children').addClass('hidden');
        },

        afterUnfold: function () {
            this.$el.find('a[data-action="unfold"][data-id="'+this.model.id+'"]').addClass('hidden');
            this.$el.find('a[data-action="fold"][data-id="'+this.model.id+'"]').removeClass('hidden');
            this.$el.find(' > .children').removeClass('hidden');
        },

        afterIsEnd: function () {
            this.$el.find('a[data-action="unfold"][data-id="'+this.model.id+'"]').addClass('hidden');
            this.$el.find('a[data-action="fold"][data-id="'+this.model.id+'"]').addClass('hidden');
            this.$el.find('span[data-name="white-space"][data-id="'+this.model.id+'"]').removeClass('hidden');
        },

    });
});

