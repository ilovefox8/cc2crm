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

Fox.define('Crm:Views.Opportunity.Fields.Stage', 'Views.Fields.Enum', function (Dep) {

    return Dep.extend({
    
        listTemplate: 'fields.enum-styled.detail',
        
        detailTemplate: 'fields.enum-styled.detail',
        
        data: function () {        
            var style = 'default';
            var stage = this.model.get('stage');
            if (stage == 'Closed Won') {
                style = 'success';
            } else if (stage == 'Closed Lost') {
                style = 'danger';
            }
            return _.extend({
                style: style,
            }, Dep.prototype.data.call(this));
        },

        setup: function () {
            Dep.prototype.setup.call(this);
            
            this.probabilityMap = this.getMetadata().get('entityDefs.Opportunity.probabilityMap') || {};
            
            if (this.mode != 'list') {
                if (!this.model.has('probability') && this.model.has('stage')) {                    
                    this.model.set('probability', this.probabilityMap[this.model.get('stage')]);
                }

                this.on('change', function () {
                    this.model.set('probability', this.probabilityMap[this.model.get(this.name)]);
                }, this);
            }
        },

        fetch: function () {
            var data = Dep.prototype.fetch.call(this);
            if (this.probabilityChanged) {
                data['probability'] = this.model.get('probability');
            }
            return data;
        },
    });

});
