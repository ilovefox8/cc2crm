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

Fox.define('Views.Fields.Bool', 'Views.Fields.Base', function (Dep) {

    return Dep.extend({

        type: 'bool',            
        
        listTemplate: 'fields.bool.detail',
        
        detailTemplate: 'fields.bool.detail',
        
        editTemplate: 'fields.bool.edit',
        
        searchTemplate: 'fields.bool.search',
        
        validations: [],        
    
        fetch: function () {
            var value = this.$element.get(0).checked;    
            var data = {};
            data[this.name] = value;
            return data; 
        },
        
        fetchSearch: function () {
            var data = {
                type: this.$element.get(0).checked ? 'isTrue' : 'isFalse',
            };
            return data;                
        },
    });
});

