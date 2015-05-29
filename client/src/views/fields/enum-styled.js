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

Fox.define('Views.Fields.EnumStyled', 'Views.Fields.Enum', function (Dep) {

    return Dep.extend({

        listTemplate: 'fields.enum-styled.detail',

        detailTemplate: 'fields.enum-styled.detail',
    
        data: function () {            
            var value = this.model.get(this.name);    
            var style = 'default';            
            if (value in this.styleHash) {
                style = this.styleHash[value];
            }
            return _.extend({
                style: style,
            }, Dep.prototype.data.call(this));
        },
        
        setup: function () {
            Dep.prototype.setup.call(this);
            
            this.styleHash = this.model.getFieldParam(this.name, 'style') || {};
        },
    });
});

