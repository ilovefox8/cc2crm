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

class Language
{
	private $defaultLanguage = 'en_US';

	private $systemHelper;

	private $data = array();

	public function __construct()
	{
		require_once 'SystemHelper.php';
		$this->systemHelper = new SystemHelper();
	}

	protected function getSystemHelper()
	{
		return $this->systemHelper;
	}

	public function get($language)
	{
		if (isset($this->data[$language])) {
			return $this->data[$language];
		}

		if (empty($language)) {
			$language = $this->defaultLanguage;
		}

		$langFileName = 'install/core/i18n/'.$language.'/install.json';
		if (!file_exists($langFileName)) {
			$langFileName = 'install/core/i18n/'.$this->defaultLanguage.'/install.json';
		}

		$i18n = $this->getLangData($langFileName);

		if ($language != $this->defaultLanguage) {
			$i18n = $this->mergeWithDefaults($i18n);
		}

		$this->afterRetrieve($i18n);

		$this->data[$language] = $i18n;

		return $this->data[$language];
	}

	/**
	 * Merge current language with default one
	 *
	 * @param  array $data
	 * @return array
	 */
	protected function mergeWithDefaults($data)
	{
		$defaultLangFile = 'install/core/i18n/'.$this->defaultLanguage.'/install.json';
		$defaultData = $this->getLangData($defaultLangFile);

		foreach ($data as $categoryName => &$labels) {
			foreach ($defaultData[$categoryName] as $defaultLabelName => $defaultLabel) {
				if (!isset($labels[$defaultLabelName])) {
					$labels[$defaultLabelName] = $defaultLabel;
				}
			}
		}

		$data = array_merge($defaultData, $data);

		return $data;
	}

	protected function getLangData($filePath)
	{
		$data = file_get_contents($filePath);
		$data = json_decode($data, true);

		return $data;
	}

	/**
	 * After retrieve actions
	 *
	 * @param  array $i18n
	 * @return array $i18n
	 */
	protected function afterRetrieve(array &$i18n)
	{
		/** Get rewrite rules */
		$serverType = $this->getSystemHelper()->getServerType();
		$rewriteRules = $this->getSystemHelper()->getRewriteRules();
		$i18n['options']['modRewriteHelp'][$serverType] = str_replace('{0}', $rewriteRules, $i18n['options']['modRewriteHelp'][$serverType]);
	}


}
