<?php
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

namespace Fox\Core\Utils;

use \Fox\Core\Exceptions\Error,
    \Fox\Core\Exceptions\Conflict;

class FieldManager
{
    private $metadata;

    private $language;

    private $metadataHelper;

    protected $isChanged = null;

    protected $metadataType = 'entityDefs';

    protected $customOptionName = 'isCustom';

    public function __construct(Metadata $metadata, Language $language)
    {
        $this->metadata = $metadata;
        $this->language = $language;

        $this->metadataHelper = new \Fox\Core\Utils\Metadata\Helper($this->metadata);
    }

    protected function getMetadata()
    {
        return $this->metadata;
    }

    protected function getLanguage()
    {
        return $this->language;
    }

    protected function getMetadataHelper()
    {
        return $this->metadataHelper;
    }

    public function read($name, $scope)
    {
        $fieldDef = $this->getFieldDef($name, $scope);

        $fieldDef['label'] = $this->getLanguage()->translate($name, 'fields', $scope);

        return $fieldDef;
    }

    public function create($name, $fieldDef, $scope)
    {
        $existingField = $this->getFieldDef($name, $scope);
        if (isset($existingField)) {
            throw new Conflict('Field ['.$name.'] exists in '.$scope);
        }

        return $this->update($name, $fieldDef, $scope);
    }

    public function update($name, $fieldDef, $scope)
    {
        /*Add option to metadata to identify the custom field*/
        if (!$this->isCore($name, $scope)) {
            $fieldDef[$this->customOptionName] = true;
        }

        $res = true;
        if (isset($fieldDef['label'])) {
            $this->setLabel($name, $fieldDef['label'], $scope);
        }

        if (isset($fieldDef['type']) && $fieldDef['type'] == 'enum') {
            if (isset($fieldDef['translatedOptions'])) {
                $this->setTranslatedOptions($name, $fieldDef['translatedOptions'], $scope);
            }
        }

        if (isset($fieldDef['label']) || isset($fieldDef['translatedOptions'])) {
            $res &= $this->getLanguage()->save();
        }

        if ($this->isDefsChanged($name, $fieldDef, $scope)) {
            $res &= $this->setEntityDefs($name, $fieldDef, $scope);
        }

        return (bool) $res;
    }

    public function delete($name, $scope)
    {
        if ($this->isCore($name, $scope)) {
            throw new Error('Cannot delete core field ['.$name.'] in '.$scope);
        }

        $unsets = array(
            'fields.'.$name,
            'links.'.$name,
        );

        $this->getMetadata()->delete($this->metadataType, $scope, $unsets);
        $res = $this->getMetadata()->save();
        $res &= $this->deleteLabel($name, $scope);

        return (bool) $res;
    }

    protected function setEntityDefs($name, $fieldDef, $scope)
    {
        $fieldDef = $this->normalizeDefs($name, $fieldDef, $scope);

        $this->getMetadata()->set($this->metadataType, $scope, $fieldDef);
        $res = $this->getMetadata()->save();

        return $res;
    }

    protected function setTranslatedOptions($name, $value, $scope)
    {
        return $this->getLanguage()->set($scope, 'options', $name, $value);
    }

    protected function setLabel($name, $value, $scope)
    {
        return $this->getLanguage()->set($scope, 'fields', $name, $value);
    }

    protected function deleteLabel($name, $scope)
    {
        $this->getLanguage()->delete($scope, 'fields', $name);
        $this->getLanguage()->delete($scope, 'options', $name);
        return $this->getLanguage()->save();
    }

    protected function getFieldDef($name, $scope)
    {
        return $this->getMetadata()->get($this->metadataType.'.'.$scope.'.fields.'.$name);
    }

    protected function getLinkDef($name, $scope)
    {
        return $this->getMetadata()->get($this->metadataType.'.'.$scope.'.links.'.$name);
    }

    /**
     * Prepare input fieldDefs, remove unnecessary fields
     *
     * @param string $fieldName
     * @param array $fieldDef
     * @param string $scope
     * @return array
     */
    protected function prepareFieldDef($name, $fieldDef, $scope)
    {
        $unnecessaryFields = array(
            'name',
            'label',
            'translatedOptions',
        );

        foreach ($unnecessaryFields as $fieldName) {
            if (isset($fieldDef[$fieldName])) {
                unset($fieldDef[$fieldName]);
            }
        }

        $currentOptionList = array_keys((array) $this->getFieldDef($name, $scope));
        foreach ($fieldDef as $defName => $defValue) {
            if ( (!isset($defValue) || $defValue === '') && !in_array($defName, $currentOptionList) ) {
                unset($fieldDef[$defName]);
            }
        }

        return $fieldDef;
    }

    /**
     * Add all needed block for a field defenition
     *
     * @param string $fieldName
     * @param array $fieldDef
     * @param string $scope
     * @return array
     */
    protected function normalizeDefs($fieldName, array $fieldDef, $scope)
    {
        $fieldDef = $this->prepareFieldDef($fieldName, $fieldDef, $scope);

        $metaFieldDef = $this->getMetadataHelper()->getFieldDefsInFieldMeta($fieldDef);
        if (isset($metaFieldDef)) {
            $fieldDef = Util::merge($metaFieldDef, $fieldDef);
        }

        if (isset($fieldDef['linkDefs'])) {
            $linkDefs = $fieldDef['linkDefs'];
            unset($fieldDef['linkDefs']);
        }

        $defs = array(
            'fields' => array(
                $fieldName => $fieldDef,
            ),
        );

        /** Save links for a field. */
        $metaLinkDef = $this->getMetadataHelper()->getLinkDefsInFieldMeta($scope, $fieldDef);
        if (isset($linkDefs) || isset($metaLinkDef)) {
            $linkDefs = Util::merge((array) $metaLinkDef, (array) $linkDefs);
            $defs['links'] = array(
                $fieldName => $linkDefs,
            );
        }

        return $defs;
    }

    /**
     * Check if changed metadata defenition for a field except 'label'
     *
     * @return boolean
     */
    protected function isDefsChanged($name, $fieldDef, $scope)
    {
        $fieldDef = $this->prepareFieldDef($name, $fieldDef, $scope);
        $currentFieldDef = $this->getFieldDef($name, $scope);

        $this->isChanged = Util::isEquals($fieldDef, $currentFieldDef) ? false : true;

        return $this->isChanged;
    }

    /**
     * Only for update method
     *
     * @return boolean
     */
    public function isChanged()
    {
        return $this->isChanged;
    }

    /**
     * Check if a field is core field
     *
     * @param  string  $name
     * @param  string  $scope
     * @return boolean
     */
    protected function isCore($name, $scope)
    {
        $existingField = $this->getFieldDef($name, $scope);
        if (isset($existingField) && (!isset($existingField[$this->customOptionName]) || !$existingField[$this->customOptionName])) {
            return true;
        }

        return false;
    }

}