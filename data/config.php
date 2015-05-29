<?php

return array (
  'cacheTimestamp' => 1432520588,
  'database' => 
  array (
    'driver' => 'pdo_mysql',
    'host' => 'localhost',
    'port' => '',
    'dbname' => 'cc2crm',
    'user' => 'root',
    'password' => '123456',
  ),
  'useCache' => true,
  'recordsPerPage' => 20,
  'recordsPerPageSmall' => 5,
  'applicationName' => 'FoxCRM',
  'version' => '3.3.0',
  'timeZone' => 'UTC',
  'dateFormat' => 'MM/DD/YYYY',
  'timeFormat' => 'HH:mm',
  'weekStart' => 0,
  'thousandSeparator' => ',',
  'decimalMark' => '.',
  'exportDelimiter' => ';',
  'currencyList' => 
  array (
    0 => 'USD',
  ),
  'defaultCurrency' => 'USD',
  'baseCurrency' => 'USD',
  'currencyRates' => 
  array (
  ),
  'outboundEmailIsShared' => false,
  'outboundEmailFromName' => '',
  'outboundEmailFromAddress' => '',
  'smtpServer' => '',
  'smtpPort' => '25',
  'smtpAuth' => false,
  'smtpSecurity' => '',
  'smtpUsername' => '',
  'smtpPassword' => '',
  'languageList' => 
  array (
    0 => 'en_US',
    1 => 'de_DE',
    2 => 'es_ES',
    3 => 'fr_FR',
    4 => 'nl_NL',
    5 => 'tr_TR',
    6 => 'ro_RO',
    7 => 'ru_RU',
    8 => 'pl_PL',
    9 => 'pt_BR',
    10 => 'uk_UA',
    11 => 'vi_VN',
  ),
  'language' => 'en_US',
  'logger' => 
  array (
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'isRotate' => true,
    'maxRotateFiles' => 30,
  ),
  'authenticationMethod' => 'Fox',
  'globalSearchEntityList' => 
  array (
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
  ),
  'tabList' => 
  array (
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Calendar',
    5 => 'Meeting',
    6 => 'Call',
    7 => 'Task',
    8 => 'Case',
    9 => 'Email',
    10 => 'Document',
    11 => 'Campaign',
  ),
  'quickCreateList' => 
  array (
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Meeting',
    5 => 'Call',
    6 => 'Task',
    7 => 'Case',
  ),
  'calendarDefaultEntity' => 'Meeting',
  'disableExport' => false,
  'assignmentEmailNotifications' => false,
  'assignmentEmailNotificationsEntityList' => 
  array (
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case',
  ),
  'assignmentNotificationsEntityList' => 
  array (
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task',
    3 => 'Email',
  ),
  'emailMessageMaxSize' => 10,
  'notificationsCheckInterval' => 10,
  'disabledCountQueryEntityList' => 
  array (
    0 => 'Email',
  ),
  'maxEmailAccountCount' => 2,
  'followCreatedEntities' => false,
  'b2cMode' => false,
  'isInstalled' => true,
  'siteUrl' => 'http://_:8082',
  'passwordSalt' => 'd3b4f4d8565896a5',
  'defaultPermissions' => 
  array (
    'user' => 502,
    'group' => 502,
  ),  
  'callcenter_ip' => '192.168.33.13',
  'callcenter_port' => '8080',
  'callcenter_username' => 'freeswitch',
  'callcenter_password' => 'works', 
);

?>