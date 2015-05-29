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

namespace Fox\Core\Utils\Database\Schema\rebuildActions;

class Currency extends \Fox\Core\Utils\Database\Schema\BaseRebuildActions
{

    public function afterRebuild()
    {
        $defaultCurrency = $this->getConfig()->get('defaultCurrency');

        $baseCurrency = $this->getConfig()->get('baseCurrency');
        $currencyRates = $this->getConfig()->get('currencyRates');

        if ($defaultCurrency != $baseCurrency) {
            $currencyRates = $this->exchangeRates($baseCurrency, $defaultCurrency, $currencyRates);
        }

        $currencyRates[$defaultCurrency] = '1.00';

        $pdo = $this->getEntityManager()->getPDO();

        $sql = "TRUNCATE `currency`";
        $pdo->prepare($sql)->execute();

        foreach ($currencyRates as $currencyName => $rate) {

            $sql = "
                INSERT INTO `currency`
                (id, rate)
                VALUES
                (".$pdo->quote($currencyName) . ", " . $pdo->quote($rate) . ")
            ";
            $pdo->prepare($sql)->execute();
        }
    }

    /**
     * Calculate exchange rates if defaultCurrency doesn't equals baseCurrency
     *
     * @param  string $baseCurrency
     * @param  string $defaultCurrency
     * @param  array $currencyRates   [description]
     * @return array  - List of new currency rates
     */
    protected function exchangeRates($baseCurrency, $defaultCurrency, array $currencyRates)
    {
        $precision = 5;
        $defaultCurrencyRate = round(1 / $currencyRates[$defaultCurrency], $precision);

        $exchangedRates = array();
        $exchangedRates[$baseCurrency] = $defaultCurrencyRate;

        unset($currencyRates[$baseCurrency], $currencyRates[$defaultCurrency]);

        foreach ($currencyRates as $currencyName => $rate) {
            $exchangedRates[$currencyName] = round($rate * $defaultCurrencyRate, $precision);
        }

        return $exchangedRates;
    }

}
