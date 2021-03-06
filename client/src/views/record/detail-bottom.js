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

Fox.define('Views.Record.DetailBottom', 'View', function (Dep) {

    return Dep.extend({

        template: 'record.bottom',

        mode: 'detail',

        data: function () {
            return {
                panels: this.panels
            };
        },

        events: {
            'click .action': function (e) {
                var $target = $(e.currentTarget);
                var action = $target.data('action');
                var panel = $target.data('panel');
                var data = $target.data();
                if (action) {
                    var method = 'action' + Fox.Utils.upperCaseFirst(action);
                    var d = _.clone(data);
                    delete d['action'];
                    delete d['panel'];
                    var view = this.getView(panel);
                    if (view && typeof view[method] == 'function') {
                        view[method].call(view, d);
                    }
                }
            }
        },

        setupPanels: function () {
            var scope = this.scope;

            var panels = Fox.Utils.clone(this.getMetadata().get('clientDefs.' + scope + '.bottomPanels.' + this.mode) || []);

            if (this.mode == 'detail' && this.getMetadata().get('scopes.' + scope + '.stream')) {
                panels.push({
                    "name":"stream",
                    "label":"Stream",
                    "view":"Stream.Panel",
                    "sticked": true
                });
            }

            panels.forEach(function (p) {
                var name = p.name;
                this.panels.push(p);
                this.createView(name, p.view, {
                    model: this.model,
                    panelName: name,
                    el: this.options.el + ' .panel-body-' + Fox.Utils.toDom(name)
                }, function (view) {
                    if ('getActions' in view) {
                        p.actions = this.filterActions(view.getActions());
                    }
                    if ('getButtons' in view) {
                        p.buttons = this.filterActions(view.getButtons());
                    }
                    if (p.label) {
                        p.title = this.translate(p.label, 'labels', scope);
                    } else {
                        p.title = view.title;
                    }
                }.bind(this));
            }, this);
        },

        setup: function () {
            this.panels = [];
            var scope = this.scope = this.model.name;

            this.setupPanels();

            this.wait(true);

            this._helper.layoutManager.get(this.model.name, 'relationships', function (layout) {
                var panelList = layout;
                panelList.forEach(function (item) {
                    var p;
                    if (typeof item == 'string' || item instanceof String) {
                        p = {name: item};
                    } else {
                        p = item || {};
                    }
                    if (!p.name) {
                        return;
                    }

                    var name = p.name;

                    var foreignScope = this.model.defs.links[name].entity;
                    if (!this.getAcl().check(foreignScope, 'read')) {
                        return;
                    }

                    this.panels.push(p);

                    var defs = this.getMetadata().get('clientDefs.' + scope + '.relationshipPanels.' + name) || {};

                    var viewName = defs.view || 'Record.Panels.Relationship';

                    var total = 8;

                    this.createView(name, viewName, {
                        model: this.model,
                        total: total,
                        panelName: name,
                        defs: defs,
                        el: this.options.el + ' .panel-body-' + Fox.Utils.toDom(p.name)
                    }, function (view) {
                        if ('getActions' in view) {
                            p.actions = this.filterActions(view.getActions());
                        }
                        if ('getButtons' in view) {
                            p.buttons = this.filterActions(view.getButtons());
                        }
                        p.title = view.title;
                    }.bind(this));
                }.bind(this));

                this.wait(false);
            }.bind(this));
        },


        filterActions: function (actions) {
            var filtered = [];
            actions.forEach(function (item) {
                if (Fox.Utils.checkActionAccess(this.getAcl(), this.model, item)) {
                    filtered.push(item);
                }
            }.bind(this));
            return filtered;
        },

        getFields: function () {
            var fields = {};
            this.panels.forEach(function (p) {
                var panel = this.getView(p.name);
                if ('getFields' in panel) {
                    fields = _.extend(fields, panel.getFields());
                }
            }, this);
            return fields;
        },

        fetch: function () {
            var data = {};

            this.panels.forEach(function (p) {
                var panel = this.getView(p.name);
                if ('fetch' in panel) {
                    data = _.extend(data, panel.fetch());
                }
            }, this);
            return data;
        },

    });
});


