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
Fox.define('Collections.Tree', 'Collection', function (Dep) {

    return Dep.extend({

        createSeed: function () {
            var seed = new this.constructor();
            seed.url = this.url;
            seed.model = this.model;
            seed._user = this._user;
            seed.name = this.name;

            return seed;
        },

        parse: function (response) {
            var list = Dep.prototype.parse.call(this, response);

            var seed = this.clone();
            seed.reset();

            var f = function (l, depth) {
                l.forEach(function (d) {
                    d.depth = depth;
                    var c = this.createSeed();
                    if (d.childList) {
                        if (d.childList.length) {
                            f(d.childList, depth + 1);
                            c.set(d.childList);
                            d.childCollection = c;
                        } else {
                            d.childCollection = c;
                        }
                    } else if (d.childList === null) {
                        d.childCollection = null;
                    } else {
                        d.childCollection = c;
                    }
                }, this);
            }.bind(this);

            f(list, 0);

            return list;
        },

        fetch: function (options) {
            var options = options || {};
            options.data = options.data || {};

            options.data.parentId = this.parentId;
            options.data.maxDepth = this.maxDepth;

            return Dep.prototype.fetch.call(this, options);
        }

    });

});
