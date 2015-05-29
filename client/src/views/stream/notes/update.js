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

Fox.define('Views.Stream.Notes.Update', 'Views.Stream.Note', function (Dep) {

    return Dep.extend({

        template: 'stream.notes.update',

        messageName: 'update',

        data: function () {
            return _.extend({
                fieldsArr: this.fieldsArr,
                parentType: this.model.get('parentType')
            }, Dep.prototype.data.call(this));
        },

        events: {
            'click a[data-action="expandDetails"]': function (e) {
                if (this.$el.find('.details').hasClass('hidden')) {
                    this.$el.find('.details').removeClass('hidden');
                    $(e.currentTarget).find('span').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
                } else {
                    this.$el.find('.details').addClass('hidden');
                    $(e.currentTarget).find('span').addClass('glyphicon-chevron-down').removeClass('glyphicon-chevron-up');
                }
            }
        },

        init: function () {
            if (this.getUser().isAdmin()) {
                this.isRemovable = true;
            }
            Dep.prototype.init.call(this);
        },

        setup: function () {
            var data = this.model.get('data');

            var fields = data.fields;

            this.createMessage();


            this.wait(true);
            this.getModelFactory().create(this.model.get('parentType'), function (model) {
                var modelWas = model;
                var modelBecame = model.clone();

                data.attributes = data.attributes || {};

                modelWas.set(data.attributes.was);
                modelBecame.set(data.attributes.became);

                this.fieldsArr = [];

                fields.forEach(function (field) {
                    var type = model.getFieldType(field) || 'base';
                    var viewName = this.getMetadata().get('entityDefs.' + model.name + '.fields.' + field + '.view') || this.getFieldManager().getViewName(type);
                    this.createView(field + 'Was', viewName, {
                        model: modelWas,
                        readOnly: true,
                        defs: {
                            name: field
                        },
                        mode: 'list'
                    });
                    this.createView(field + 'Became', viewName, {
                        model: modelBecame,
                        readOnly: true,
                        defs: {
                            name: field
                        },
                        mode: 'list'
                    });

                    this.fieldsArr.push({
                        field: field,
                        was: field + 'Was',
                        became: field + 'Became'
                    });

                }, this);

                this.wait(false);

            }, this);
        },

    });
});

