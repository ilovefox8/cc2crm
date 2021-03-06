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

Fox.define('Views.Dashlets.Stream', 'Views.Dashlets.Abstract.Base', function (Dep) {

    return Dep.extend({

        name: 'Stream',

        defaultOptions: {
            displayRecords: 5,
            autorefreshInterval: 0.5,
            isDoubleHeight: false
        },

        _template: '<div class="list-container">{{{list}}}</div>',

        optionsFields: _.extend(_.clone(Dep.prototype.optionsFields), {
            'displayRecords': {
                type: 'enumInt',
                options: [3,4,5,10,15]
            },
            'isDoubleHeight': {
                type: 'bool',
            },
        }),

        actionRefresh: function () {
            this.getView('list').showNewRecords();
        },

        afterRender: function () {

            this.getCollectionFactory().create('Note', function (collection) {
                this.collection = collection;

                collection.url = 'Stream';
                collection.maxSize = this.getOption('displayRecords');

                this.listenToOnce(collection, 'sync', function () {
                    this.createView('list', 'Stream.List', {
                        el: this.options.el + ' > .list-container',
                        collection: collection,
                        isUserStream: true,
                        noEdit: true,
                    }, function (view) {
                        view.render();
                    });
                }.bind(this));
                collection.fetch();

            }, this);
        },


    });
});


