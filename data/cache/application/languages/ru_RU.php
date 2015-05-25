<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Включено',
      'Disabled' => 'Отключено',
      'System' => 'System',
      'Users' => 'Пользователи',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Customization',
      'Available Fields' => 'Available Fields',
      'Layout' => 'Макет',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Добавить панель',
      'Add Field' => 'Добавить поле',
      'Settings' => 'Настройки',
      'Scheduled Jobs' => 'Scheduled Jobs',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Очистить кэш',
      'Rebuild' => 'Rebuild',
      'Teams' => 'Группы',
      'Roles' => 'Роли',
      'Outbound Emails' => 'Outbound Emails',
      'Inbound Emails' => 'Inbound Emails',
      'Email Templates' => 'Email Templates',
      'Import' => 'Импорт',
      'Layout Manager' => 'Менеджер макетов',
      'User Interface' => 'Интерфейс пользователя',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentication',
      'Currency' => 'Валюта',
      'Integrations' => 'Интеграции',
      'Extensions' => 'Расширения',
      'Upload' => 'Загрузить',
      'Installing...' => 'Установка...',
      'Upgrading...' => 'Обновление...',
      'Upgraded successfully' => 'Обновления успешно установлены',
      'Installed successfully' => 'Успешно установлено',
      'Ready for upgrade' => 'Готов к обновлению',
      'Run Upgrade' => 'Установить обновления',
      'Install' => 'Установить',
      'Ready for installation' => 'Готов к установке',
      'Uninstalling...' => 'Удаление...',
      'Uninstalled' => 'Удалено',
      'Create Entity' => 'Create Entity',
      'Edit Entity' => 'Edit Entity',
      'Create Link' => 'Create Link',
      'Edit Link' => 'Edit Link',
      'Notifications' => 'Notifications',
      'Field Manager' => 'Менеджер полей',
      'Panel Name' => 'Имя панели',
    ),
    'layouts' => 
    array (
      'list' => 'Список',
      'detail' => 'Detail',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Search Filters',
      'massUpdate' => 'Mass Update',
      'relationships' => 'Relationships',
      'detailConvert' => 'Преобразовать потенциального клиента',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Address',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Duration',
      'password' => 'Пароль',
      'parsonName' => 'Person Name',
      'autoincrement' => 'Auto-increment',
      'bool' => 'Bool',
      'currency' => 'Валюта',
      'date' => 'Date',
      'datetime' => 'DateTime',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Phone',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'File',
      'image' => 'Image',
      'multiEnum' => 'Multi-Enum',
    ),
    'fields' => 
    array (
      'type' => 'Тип',
      'name' => 'Имя',
      'label' => 'Отображаемое имя',
      'required' => 'Обязательное поле',
      'default' => 'По умолчанию',
      'maxLength' => 'Максимальная длина',
      'options' => 'Опции',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Поле',
      'min' => 'Минимальное значение',
      'max' => 'Максимальное значение',
      'translation' => 'Перевод',
      'previewSize' => 'Размер просмотра',
      'noEmptyString' => 'No Empty String',
      'defaultType' => 'Default Type',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM будет обновлен до версии <strong>{version}</strong>. Это может занять некоторое время.',
      'upgradeDone' => 'EspoCRM был обновлен до версии <strong>{version}</strong>. Обновите окно браузера.',
      'upgradeBackup' => 'Мы рекомендуем перед обновлением сделать резервную копию ваших EspoCRM файлов и данных.',
      'thousandSeparatorEqualsDecimalMark' => 'Thousand separator can not be same as decimal mark',
      'userHasNoEmailAddress' => 'User has not email address.',
      'selectEntityType' => 'Выберите тип сущности в меню слева.',
      'selectUpgradePackage' => 'Выберите пакет обновления',
      'downloadUpgradePackage' => 'Скачать необходимые обновления <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/"> </a>.',
      'selectLayout' => 'Select needed layout in the left menu and edit it.',
      'selectExtensionPackage' => 'Выберите пакет расширения',
      'extensionInstalled' => 'Расширение {name} {version} установлено.',
      'installExtension' => 'Расширение {name} {version} готово к установке.',
      'uninstallConfirmation' => 'Вы действительно хотите удалить расширение?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Системные настройки.',
      'scheduledJob' => 'Задачи, которые выполняются с помощью cron.',
      'upgrade' => 'Обновить EspoCRM.',
      'clearCache' => 'Очистить весь кэш сервера.',
      'rebuild' => 'Восстановить сервер, и очистить кэш.',
      'users' => 'Управление пользователями.',
      'teams' => 'Управление группами.',
      'roles' => 'Управление ролями.',
      'outboundEmails' => 'Настройки SMTP для исходящих писем.',
      'inboundEmails' => 'Group IMAP email accouts. Email import and Email-to-Case.',
      'emailTemplates' => 'Шаблоны для исходящих писем.',
      'import' => 'Import data from CSV file.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => 'Create custom entities, edit existing ones. Manage field and relationships.',
      'userInterface' => 'Configure UI.',
      'authTokens' => 'Active auth sessions. IP address and last access date.',
      'authentication' => 'Настройки аутентификации.',
      'currency' => 'Currency settings and rates.',
      'extensions' => 'Установить или удалить расширения.',
      'integrations' => 'Integration with third-party services.',
      'notifications' => 'In-app and email notification settings.',
      'fieldManager' => 'Create new fields or customize existing ones.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'X-Small',
        'small' => 'Small',
        'medium' => 'Medium',
        'large' => 'Large',
      ),
    ),
    'layoutManagerDataAttributes' => 
    array (
      'width' => 'Width (%)',
      'link' => 'Link',
      'notSortable' => 'Not Sortable',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Пользователь',
      'ipAddress' => 'IP -адрес',
      'lastAccess' => 'Дата последнего подключения',
      'createdAt' => 'Дата входа',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Название',
      'dateFrom' => 'Дата от',
      'dateTo' => 'Дата к',
      'autorefreshInterval' => 'Интервал авто-обновления',
      'displayRecords' => 'Отобразить записи',
      'isDoubleHeight' => 'Высота 2x',
      'mode' => 'Mode',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Week (agenda)',
        'basicWeek' => 'Week',
        'month' => 'Month',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Тема',
      'parent' => 'Источник',
      'status' => 'статус',
      'dateSent' => 'Дата отправки',
      'from' => 'От',
      'to' => 'К',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Html',
      'body' => 'Тело',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'selectTemplate' => 'Выбрать шаблон',
      'fromEmailAddress' => 'С адреса',
      'toEmailAddresses' => 'На андрес',
      'emailAddress' => 'E-mail адрес',
      'deliveryDate' => 'Дата доставки',
      'account' => 'Account',
      'users' => 'Users',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Черновик',
      'Sending' => 'Отправляется',
      'Sent' => 'Отправлено',
      'Archived' => 'В архиве',
      'Received' => 'Received',
    ),
    'labels' => 
    array (
      'Create Email' => 'Отправить письмо в архив',
      'Archive Email' => 'Отправить письмо в архив',
      'Compose' => 'Новое сообщение',
      'Reply' => 'Ответить',
      'Reply to All' => 'Ответить всем',
      'Forward' => 'Переслать',
      'Original message' => 'Оригинал сообщение',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Email Accounts',
      'Send Test Email' => 'Отправить тестовое сообщение',
      'Send' => 'Отправить',
      'Email Address' => 'E-mail адрес',
      'Mark Read' => 'Mark Read',
      'Sending...' => 'Sending...',
      'Save Draft' => 'Save Draft',
      'Mark all as read' => 'Mark all as read',
      'Show Plain Text' => 'Show Plain Text',
      'Create Lead' => 'Create Lead',
      'Create Contact' => 'Create Contact',
      'Create Task' => 'Create Task',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'No SMTP setup. {link}.',
      'testEmailSent' => 'Test email has been sent',
      'emailSent' => 'Email has been sent',
      'savedAsDraft' => 'Saved as draft',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Отправлено',
      'archived' => 'В архиве',
      'inbox' => 'Inbox',
      'drafts' => 'Drafts',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Mark As Read',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'статус',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые разделы',
      'ssl' => 'SSL',
      'fetchSince' => 'Fetch Since',
      'emailAddress' => 'Email Address',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активный',
        'Inactive' => 'Неактивный',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Create Email Account',
      'IMAP' => 'IMAP',
      'Main' => 'Main',
      'Test Connection' => 'Test Connection',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не получается подключиться к серверу IMAP',
      'connectionIsOk' => 'Connection is Ok',
    ),
    'tooltips' => 
    array (
      'monitoredFolders' => 'You can add \'Sent\' folder to sync emails sent from external email client.',
    ),
  ),
  'EmailAddress' => 
  array (
    'labels' => 
    array (
      'Primary' => 'Главные',
      'Opted Out' => 'Отписка',
      'Invalid' => 'Неверный адрес',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'статус',
      'isHtml' => 'Html',
      'body' => 'Тело',
      'subject' => 'Тема',
      'attachments' => 'Вложения',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Создать шаблон письма',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Fields',
      'Relationships' => 'Relationships',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'type' => 'Type',
      'labelSingular' => 'Label Singular',
      'labelPlural' => 'Label Plural',
      'stream' => 'Stream',
      'label' => 'Label',
      'linkType' => 'Link Type',
      'entityForeign' => 'Foreign Entity',
      'linkForeign' => 'Foreign Link',
      'link' => 'Link',
      'labelForeign' => 'Foreign Label',
      'sortBy' => 'Default Order (field)',
      'sortDirection' => 'Default Order (direction)',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'None',
        'Base' => 'Base',
        'Person' => 'Person',
        'CategoryTree' => 'Category Tree',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'One-to-Many',
        'manyToOne' => 'Many-to-One',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascending',
        'desc' => 'Descending',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entity has been created',
      'linkAlreadyExists' => 'Conflict: link already exists.',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'version' => 'Версия',
      'description' => 'Описание',
      'isInstalled' => 'Установлен',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Удалить',
      'Install' => 'Установить',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Расширение {name} удалено',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Connect',
      'Connected' => 'Connected',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Email',
      'User' => 'Пользователь',
      'Team' => 'Группа',
      'Role' => 'Роль',
      'EmailTemplate' => 'Шаблон письма',
      'EmailAccount' => 'Email Account',
      'EmailAccountScope' => 'Email Account',
      'OutboundEmail' => 'Исходящее письмо',
      'ScheduledJob' => 'Запланированная работа',
      'ExternalAccount' => 'External Account',
      'Extension' => 'Расширение',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Входящая почта',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Account' => 'Контрагент',
      'Contact' => 'Контакт',
      'Lead' => 'Потенциальный клиент',
      'Target' => 'Цель',
      'Opportunity' => 'Cделка',
      'Meeting' => 'Встреча',
      'Calendar' => 'Календарь',
      'Call' => 'Вызов',
      'Task' => 'Задача',
      'Case' => 'Обращение',
      'Document' => 'Document',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Письма',
      'User' => 'Пользователи',
      'Team' => 'Группы',
      'Role' => 'Роли',
      'EmailTemplate' => 'Email шаблоны',
      'EmailAccount' => 'Email Accounts',
      'EmailAccountScope' => 'Email Accounts',
      'OutboundEmail' => 'Outbound Emails',
      'ScheduledJob' => 'Scheduled Jobs',
      'ExternalAccount' => 'External Accounts',
      'Extension' => 'Расширения',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Inbound Emails',
      'Stream' => 'Stream',
      'Import' => 'Import Results',
      'Account' => 'Контрагенты',
      'Contact' => 'Контакты',
      'Lead' => 'Потенциальные клиенты',
      'Target' => 'Цели',
      'Opportunity' => 'Сделки',
      'Meeting' => 'Встречи',
      'Calendar' => 'Календарь',
      'Call' => 'Звонки',
      'Task' => 'Задачи',
      'Case' => 'Обращения',
      'Document' => 'Documents',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Misc' => 'Разное',
      'Merge' => 'Объединить',
      'None' => 'Нет',
      'by' => 'по',
      'Saved' => 'Сохранено',
      'Error' => 'Ошибка',
      'Select' => 'Выбрать',
      'Not valid' => 'Некорректные данные',
      'Please wait...' => 'Пожалуйста, подождите...',
      'Please wait' => 'Пожалуйста, подождите',
      'Loading...' => 'Загрузка...',
      'Uploading...' => 'Загружается...',
      'Sending...' => 'Отправляется...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Удалено',
      'Posted' => 'Добавлено',
      'Linked' => 'Ссылка добавлена',
      'Unlinked' => 'Ссылка удалена',
      'Access denied' => 'В доступе отказано',
      'Access' => 'Доступ',
      'Are you sure?' => 'Вы уверены?',
      'Record has been removed' => 'Запись удалена',
      'Wrong username/password' => 'Неверное имя пользователя/пароль',
      'Post cannot be empty' => 'Сообщение не может быть пустым',
      'Removing...' => 'Удаляется...',
      'Unlinking...' => 'Ссылка удаляется...',
      'Posting...' => 'Размещается...',
      'Username can not be empty!' => 'Имя пользователя не может быть пустым!',
      'Cache is not enabled' => 'Кэш не подключен',
      'Cache has been cleared' => 'Кэш очищен',
      'Rebuild has been done' => 'Восстановление выполнено',
      'Saving...' => 'Сохраняется...',
      'Modified' => 'Изменено',
      'Created' => 'Создано',
      'Create' => 'Создать',
      'create' => 'создать',
      'Overview' => 'Обзор',
      'Details' => 'Описание',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Добавить панель',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Добавить',
      'Reset' => 'Сбросить',
      'Menu' => 'Меню',
      'More' => 'Больше',
      'Search' => 'Искать',
      'Only My' => 'Тлько мои',
      'Open' => 'Открыть',
      'Admin' => 'Администратор',
      'About' => 'О программе',
      'Refresh' => 'Обновить',
      'Remove' => 'Удалить',
      'Options' => 'Options',
      'Username' => 'Имя пользователя',
      'Password' => 'Пароль',
      'Login' => 'Войти',
      'Log Out' => 'Выйти',
      'Preferences' => 'Настройки',
      'State' => 'Регион',
      'Street' => 'Улица',
      'Country' => 'Страна',
      'City' => 'Город',
      'PostalCode' => 'Почтовый индекс',
      'Followed' => 'Отписаться',
      'Follow' => 'Подписаться',
      'Clear Local Cache' => 'Очистить локальный кэш',
      'Actions' => 'Действия',
      'Delete' => 'Удалить',
      'Update' => 'Обновить',
      'Save' => 'Сохранить',
      'Edit' => 'Редактировать',
      'View' => 'View',
      'Cancel' => 'Отменить',
      'Unlink' => 'Убрать ссылку',
      'Mass Update' => 'Mass Update',
      'Export' => 'Экспортировать',
      'No Data' => 'Нет данных',
      'No Access' => 'No Access',
      'All' => 'Все',
      'Active' => 'Активный',
      'Inactive' => 'Неактивный',
      'Write your comment here' => 'Оставьте свою заметку здесь',
      'Post' => 'Разместить',
      'Stream' => 'Лента',
      'Show more' => 'Загрузить еще',
      'Dashlet Options' => 'Настройки панели',
      'Full Form' => 'Раширенная форма',
      'Insert' => 'Вставить',
      'Person' => 'Личность',
      'First Name' => 'Имя',
      'Last Name' => 'Фамилия',
      'Original' => 'Оригинальный',
      'You' => 'Вы',
      'you' => 'вы',
      'change' => 'изменить',
      'Change' => 'Change',
      'Primary' => 'Главные',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Администрирование',
      'Run Import' => 'Импортировать',
      'Duplicate' => 'Копия',
      'Notifications' => 'Оповещения',
      'Mark all read' => 'Пометить все как прочитанное',
      'See more' => 'Подробнее',
      'Today' => 'Сегодня',
      'Tomorrow' => 'Завтра',
      'Yesterday' => 'Вчера',
      'Submit' => 'Submit',
      'Close' => 'Close',
      'Yes' => 'Yes',
      'No' => 'No',
      'Select All Result' => 'Select All Result',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Create InboundEmail' => 'Создать входящую почту',
      'Activities' => 'Мероприятия',
      'History' => 'История',
      'Attendees' => 'Участники',
      'Schedule Meeting' => 'Запланировать встречу',
      'Schedule Call' => 'Запланировать звонок',
      'Compose Email' => 'Создать e-mail',
      'Log Meeting' => 'Записать встречу',
      'Log Call' => 'Записать звонок',
      'Archive Email' => 'Отправить письмо в архив',
      'Create Task' => 'Создать задачу',
      'Tasks' => 'Задачи',
      'Add Filter' => 'Добавить фильтр',
      'Save Filters' => 'Сохранить фильтры',
      'Type & press enter' => 'Введите и нажмите enter',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Вы не внесли изменения в запись',
      'duplicate' => 'Созданная вами запись дублировалась',
      'fieldIsRequired' => '{field} обязательное',
      'fieldShouldBeEmail' => '{field} должно быть правильным e-mail',
      'fieldShouldBeFloat' => '{field} должно быть верное дробное число',
      'fieldShouldBeInt' => '{field} должно быть верное целое число',
      'fieldShouldBeDate' => '{field} должна быть верная дата',
      'fieldShouldBeDatetime' => '{field} должна быть верная дата/время',
      'fieldShouldAfter' => '{field} должно быть после {otherField}',
      'fieldShouldBefore' => '{field} должно быть до {otherField}',
      'fieldShouldBeBetween' => '{field} должно быть между {min} и {max}',
      'fieldShouldBeLess' => '{field} должно быть меньше чем {value}',
      'fieldShouldBeGreater' => '{field} должно быть больше чем {value}',
      'fieldBadPasswordConfirm' => '{field} подтверждено неверно',
      'resetPreferencesDone' => 'Preferences has been reset to defaults',
      'assignmentEmailNotificationSubject' => 'EspoCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} назначил {entityType} \'{Entity.name}\' на вас

{recordUrl}',
      'confirmation' => 'Вы уверены?',
      'resetPreferencesConfirmation' => 'Are you sure you want to reset preferences to defaults?',
      'removeRecordConfirmation' => 'Удалить запись?',
      'unlinkRecordConfirmation' => 'Убрать связь?',
      'removeSelectedRecordsConfirmation' => 'Удалить выбранные записи?',
      'massUpdateResult' => '{count} records have been updated',
      'massUpdateResultSingle' => '{count} record has been updated',
      'noRecordsUpdated' => 'No records were updated',
      'massRemoveResult' => '{count} records have been removed',
      'massRemoveResultSingle' => '{count} record has been removed',
      'noRecordsRemoved' => 'No records were removed',
      'clickToRefresh' => 'Click to refresh',
      'streamPostInfo' => 'Type <strong>@username</strong> to mention users in the post.

Available markdown syntax:
`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
(url)[link]',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Тлько мои',
      'followed' => 'Followed',
      'open' => 'Открыть',
      'active' => 'Активный',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Followed',
    ),
    'massActions' => 
    array (
      'remove' => 'Remove',
      'merge' => 'Merge',
      'massUpdate' => 'Mass Update',
      'export' => 'Export',
    ),
    'fields' => 
    array (
      'name' => 'Имя',
      'firstName' => 'Имя',
      'lastName' => 'Фамилия',
      'salutationName' => 'Пол',
      'assignedUser' => 'Ответственный пользователь',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Имя ответственного пользователя',
      'teams' => 'Группы',
      'createdAt' => 'Создан в',
      'modifiedAt' => 'Изменен в',
      'createdBy' => 'Создан (кем)',
      'modifiedBy' => 'Изменен (кем)',
      'description' => 'Description',
      'address' => 'Address',
      'phoneNumber' => 'Phone',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'order' => 'Order',
      'parent' => 'Parent',
      'children' => 'Children',
      'billingAddressCity' => 'Город',
      'billingAddressCountry' => 'Страна',
      'billingAddressPostalCode' => 'Почтовый индекс',
      'billingAddressState' => 'Регион',
      'billingAddressStreet' => 'Улица',
      'addressCity' => 'Город',
      'addressStreet' => 'Улица',
      'addressCountry' => 'Страна',
      'addressState' => 'Регион',
      'addressPostalCode' => 'Почтовый индекс',
      'shippingAddressCity' => 'Город доставки',
      'shippingAddressStreet' => 'Улица доставки',
      'shippingAddressCountry' => 'Страна доставки',
      'shippingAddressState' => 'Регион доставки',
      'shippingAddressPostalCode' => 'Почтовый код доставки',
    ),
    'links' => 
    array (
      'assignedUser' => 'Ответственный пользователь',
      'createdBy' => 'Создан (кем)',
      'modifiedBy' => 'Изменен (кем)',
      'team' => 'Группа',
      'roles' => 'Роли',
      'teams' => 'Группы',
      'users' => 'Пользователи',
      'parent' => 'Источник',
      'children' => 'Children',
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'leads' => 'Потенциальные клиенты',
      'meetings' => 'Встречи',
      'calls' => 'Звонки',
      'tasks' => 'Задачи',
      'emails' => 'Письма',
      'accounts' => 'Контрагенты',
      'cases' => 'Обращения',
      'documents' => 'Documents',
      'account' => 'Контрагент',
      'opportunity' => 'Cделка',
      'contact' => 'Контакт',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Лента',
      'Leads' => 'Мои потенциальные клиенты',
      'Opportunities' => 'Мои сделки',
      'Tasks' => 'Мои задачи',
      'Cases' => 'Мои обращения',
      'Calendar' => 'Календарь',
      'Calls' => 'Мои звонки',
      'Meetings' => 'Мои встречи',
      'OpportunitiesByStage' => 'Сделки по стадии',
      'OpportunitiesByLeadSource' => 'Сделки по источнику потенциального клиента',
      'SalesByMonth' => 'Продажи по месяцам',
      'SalesPipeline' => 'Источники продаж',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} создал {entityType} {entity}',
      'createAssigned' => '{user} создал {entityType} {entity} присвоен {assignee}',
      'assign' => '{user} присвоено {entityType} {entity} к {assignee}',
      'post' => '{user} опубликован на {entityType} {entity}',
      'attach' => '{user} прикреплен {entityType} {entity}',
      'status' => '{user} обновлен {field} на {entityType} {entity}',
      'update' => '{user} обновлен {entityType} {entity}',
      'createRelated' => '{user} создан {relatedEntityType} {relatedEntity} привязан к {entityType} {entity}',
      'mentionInPost' => '{user} mentioned {mentioned} on {entityType} {entity}',
      'createThis' => '{user} создал это {entityType}',
      'createAssignedThis' => '{user} создал это {entityType} присвоен {assignee}',
      'assignThis' => '{user} присвоено это {entityType} к {assignee}',
      'postThis' => '{user} добавил',
      'attachThis' => '{user} attached',
      'statusThis' => '{user} обновил {field}',
      'updateThis' => '{user} обновил это {entityType}',
      'createRelatedThis' => '{user} создал {relatedEntityType} {relatedEntity} привязал к этому {entityType}',
      'emailReceivedFromThis' => 'Email received from {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} было получено',
      'emailReceivedInitialThis' => 'Email {email} has been received and created this {entityType}',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} было получено для {entityType} {entity}',
      'emailReceivedInitial' => 'Email {email} has been received and created {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} sent email related to {entityType} {entity}',
      'emailSentThis' => '{by} sent email',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'January',
        1 => 'February',
        2 => 'March',
        3 => 'April',
        4 => 'May',
        5 => 'June',
        6 => 'July',
        7 => 'August',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mar',
        3 => 'Apr',
        4 => 'May',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Oct',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Sunday',
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Sun',
        1 => 'Mon',
        2 => 'Tue',
        3 => 'Wed',
        4 => 'Thu',
        5 => 'Fri',
        6 => 'Sat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Su',
        1 => 'Mo',
        2 => 'Tu',
        3 => 'We',
        4 => 'Th',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Г-н.',
        'Mrs.' => 'Г-жа.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Д-р.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Африкаанс',
        'az_AZ' => 'Азербайджанский',
        'be_BY' => 'Белорусский',
        'bg_BG' => 'Болгарский',
        'bn_IN' => 'Бенгальский',
        'bs_BA' => 'Боснийский',
        'ca_ES' => 'Каталонский',
        'cs_CZ' => 'Чешский',
        'cy_GB' => 'Валлийский',
        'da_DK' => 'Датский',
        'de_DE' => 'Немецкий',
        'el_GR' => 'Греческий',
        'en_GB' => 'Английский (UK)',
        'en_US' => 'Английский (US)',
        'es_ES' => 'Испанский (Испания)',
        'et_EE' => 'Эстонский',
        'eu_ES' => 'Баскский',
        'fa_IR' => 'Персидский',
        'fi_FI' => 'Финский',
        'fo_FO' => 'Фарерский',
        'fr_CA' => 'Французский (Канада)',
        'fr_FR' => 'Французский (Франция)',
        'ga_IE' => 'Ирландский',
        'gl_ES' => 'Галицкий',
        'gn_PY' => 'Гуарани',
        'he_IL' => 'Иврит',
        'hi_IN' => 'Хинди',
        'hr_HR' => 'Хорватский',
        'hu_HU' => 'Венгерский',
        'hy_AM' => 'Армянский',
        'id_ID' => 'Индонезийский',
        'is_IS' => 'Исландский',
        'it_IT' => 'Итальянский',
        'ja_JP' => 'Японский',
        'ka_GE' => 'Грузинский',
        'km_KH' => 'Кхмерийский',
        'ko_KR' => 'Корейский',
        'ku_TR' => 'Курдский',
        'lt_LT' => 'Литовский',
        'lv_LV' => 'Латвийский',
        'mk_MK' => 'Македонский',
        'ml_IN' => 'Малайялам',
        'ms_MY' => 'Малайский',
        'nb_NO' => 'Норвежский букмол',
        'nn_NO' => 'Норвежский нюнорск',
        'ne_NP' => 'Непальский',
        'nl_NL' => 'Нидерландский',
        'pa_IN' => 'Панджабский',
        'pl_PL' => 'Польский',
        'ps_AF' => 'Пушту',
        'pt_BR' => 'Португальский (Бразилия)',
        'pt_PT' => 'Португальский (Португалия)',
        'ro_RO' => 'Румынский',
        'ru_RU' => 'Русский',
        'sk_SK' => 'Словацкий',
        'sl_SI' => 'Словенский',
        'sq_AL' => 'Албанский',
        'sr_RS' => 'Сербский',
        'sv_SE' => 'Шведский',
        'sw_KE' => 'Суахили',
        'ta_IN' => 'Тамильский',
        'te_IN' => 'Телугу',
        'th_TH' => 'Тайский',
        'tl_PH' => 'Тагальский',
        'tr_TR' => 'Турецкий',
        'uk_UA' => 'Украинский',
        'ur_PK' => 'Урду',
        'vi_VN' => 'Вьетнамский',
        'zh_CN' => 'Упрощенный китайский (Китай)',
        'zh_HK' => 'Традиционный китайский (Гонконг)',
        'zh_TW' => 'Традиционный китайский (Тайвань)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'На',
        'notOn' => 'Не на',
        'after' => 'После',
        'before' => 'До',
        'between' => 'Между',
        'today' => 'Сегодня',
        'past' => 'Прошлое',
        'future' => 'Будущее',
        'currentMonth' => 'Current Month',
        'lastMonth' => 'Last Month',
        'currentQuarter' => 'Current Quarter',
        'lastQuarter' => 'Last Quarter',
        'currentYear' => 'Current Year',
        'lastYear' => 'Last Year',
      ),
      'searchRanges' => 
      array (
        'is' => 'Is',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Equals',
        'startsWith' => 'Starts With',
        'contains' => 'Contains',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Равняется',
        'notEquals' => 'Не равняется',
        'greaterThan' => 'Больше чем',
        'lessThan' => 'Меньше чем',
        'greaterThanOrEquals' => 'Больше чем или равняется',
        'lessThanOrEquals' => 'Меньше чем или равняется',
        'between' => 'Между',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Нет',
        '0.5' => '30 секунд',
        1 => '1 минута',
        2 => '2 минуты',
        5 => '5 минут',
        10 => '10 минут',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Мобильный',
        'Office' => 'Офисный',
        'Fax' => 'Факс',
        'Home' => 'Домашний',
        'Other' => 'Дополнительно',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'Email',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Полужирный',
          'italic' => 'Курсив',
          'underline' => 'Подчёркнутый',
          'strike' => 'Зачеркнутый',
          'clear' => 'Убрать стили шрифта',
          'height' => 'Высота линии',
          'name' => 'Название шрифта',
          'size' => 'Размер шрифта',
        ),
        'image' => 
        array (
          'image' => 'Изображение',
          'insert' => 'Вставить изображение',
          'resizeFull' => 'Восстановить размер',
          'resizeHalf' => 'Уменьшить до 50%',
          'resizeQuarter' => 'Уменьшить до 25%',
          'floatLeft' => 'Расположить слева',
          'floatRight' => 'Расположить справа',
          'floatNone' => 'Расположение по-умолчанию',
          'dragImageHere' => 'Перетащите изображение сюда',
          'selectFromFiles' => 'Выбрать из файлов',
          'url' => 'URL изображения',
          'remove' => 'Удалить изображение',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Вставить ссылку',
          'unlink' => 'Убрать ссылку',
          'edit' => 'Редактировать',
          'textToDisplay' => 'Отображаемый текст',
          'url' => 'URL для перехода',
          'openInNewWindow' => 'Открывать в новом окне',
        ),
        'video' => 
        array (
          'video' => 'Видео',
          'videoLink' => 'Ссылка на видео',
          'insert' => 'Вставить видео',
          'url' => 'URL видео',
          'providers' => '(YouTube, Vimeo, Vine, Instagram или DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Таблица',
        ),
        'hr' => 
        array (
          'insert' => 'Вставить горизонтальную линию',
        ),
        'style' => 
        array (
          'style' => 'Стиль',
          'normal' => 'Нормальный',
          'blockquote' => 'Цитата',
          'pre' => 'Код',
          'h1' => 'Заголовок 1',
          'h2' => 'Заголовок 2',
          'h3' => 'Заголовок 3',
          'h4' => 'Заголовок 4',
          'h5' => 'Заголовок 5',
          'h6' => 'Заголовок 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Маркированный список',
          'ordered' => 'Нумерованный список',
        ),
        'options' => 
        array (
          'help' => 'Помощь',
          'fullscreen' => 'На весь экран',
          'codeview' => 'Исходный код',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Параграф',
          'outdent' => 'Уменьшить отступ',
          'indent' => 'Увеличить отступ',
          'left' => 'Выровнять по левому краю',
          'center' => 'Выровнять по центру',
          'right' => 'Выровнять по правому краю',
          'justify' => 'Растянуть по ширине',
        ),
        'color' => 
        array (
          'recent' => 'Последний цвет',
          'more' => 'Еще цвета',
          'background' => 'Цвет фона',
          'foreground' => 'Цвет шрифта',
          'transparent' => 'Прозрачный',
          'setTransparent' => 'Сделать прозрачным',
          'reset' => 'Сбросить',
          'resetToDefault' => 'Восстановить умолчания',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Сочетания клавиш',
          'close' => 'Закрыть',
          'textFormatting' => 'Форматирование текста',
          'action' => 'Действие',
          'paragraphFormatting' => 'Форматирование параграфа',
          'documentStyle' => 'Стиль документа',
        ),
        'history' => 
        array (
          'undo' => 'Undo',
          'redo' => 'Повтор',
        ),
      ),
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Return to Import',
      'Run Import' => 'Импортировать',
      'Back' => 'Back',
      'Field Mapping' => 'Field Mapping',
      'Default Values' => 'Default Values',
      'Add Field' => 'Add Field',
      'Created' => 'Создано',
      'Updated' => 'Updated',
      'Result' => 'Result',
      'Show records' => 'Show records',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
      'Revert' => 'Revert',
    ),
    'messages' => 
    array (
      'utf8' => 'Should be UTF-8 encoded',
      'duplicatesRemoved' => 'Duplicates removed',
    ),
    'fields' => 
    array (
      'file' => 'File',
      'entityType' => 'Entity Type',
      'imported' => 'Imported Records',
      'duplicates' => 'Duplicate Records',
      'updated' => 'Updated Records',
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'team' => 'Группа',
      'status' => 'статус',
      'assignToUser' => 'Связаться с пользователем',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Отслеживаемые разделы',
      'trashFolder' => 'Корзина',
      'ssl' => 'SSL',
      'createCase' => 'Создать обращение',
      'reply' => 'Ответить',
      'caseDistribution' => 'Распределение обращений',
      'replyEmailTemplate' => 'Ответить по образцу',
      'replyFromAddress' => 'Ответить с адреса',
      'replyToAddress' => 'Адрес для получения ответа',
      'replyFromName' => 'Ответить от имени',
      'targetUserPosition' => 'Target User Position',
    ),
    'tooltips' => 
    array (
      'reply' => 'Уведомить отправителей, что их письма были получены.',
      'createCase' => 'Автоматически создавать обращение из входящих писем.',
      'replyToAddress' => 'Укажите адрес для этого ящика, чтобы ответы приходили в него.',
      'caseDistribution' => 'Как обращения будут назначаться: на пользователя или среди группы.',
      'assignToUser' => 'Пользователь, на которого письма и обращения будут назначаться.',
      'team' => 'Группа, к которой будут относиться письма и обращения.',
      'targetUserPosition' => 'Define the position of users which will be destributed with cases.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активный',
        'Inactive' => 'Неактивный',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Прямая задача',
        'Round-Robin' => 'Циклическая',
        'Least-Busy' => 'Наиболее свободный',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Создать входящую почту',
      'IMAP' => 'IMAP',
      'Actions' => 'Действия',
      'Main' => 'Main',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не получается подключиться к серверу IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Enabled',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Select an integration in menu.',
      'noIntegrations' => 'No Integrations is available.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Obtain OAuth 2.0 credentials from the Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.</p>',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Разместить',
      'attachments' => 'Вложения',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Разделитель разрядов(тысячные)',
      'decimalMark' => 'Десятичный знак',
      'defaultCurrency' => 'Валюта по умолчанию',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизация',
      'smtpSecurity' => 'Безопасность',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Пароль',
      'smtpEmailAddress' => 'E-mail адрес',
      'exportDelimiter' => 'Разделитель (Перемещение)',
      'receiveAssignmentEmailNotifications' => 'Получать уведомления при назначении',
      'autoFollowEntityTypeList' => 'Auto-Follow',
      'signature' => 'Email Signature',
      'dashboardTabList' => 'Tab List',
      'defaultReminders' => 'Default Reminders',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Оповещения',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'User will automatically follow all new records of the selected entity types, will see information in the stream and receive notifications.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'roles' => 'Роли',
      'assignmentPermission' => 'Assignment Permission',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
      'teams' => 'Группы',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Allows to restrict an ability for users to assign records to other users.

all - no restriction

team - can assign users from own teams

no - can assign only to self',
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create Role' => 'Создать роль',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'не установлен',
        'enabled' => 'включен',
        'disabled' => 'отключен',
      ),
      'levelList' => 
      array (
        'all' => 'все',
        'team' => 'группа',
        'own' => 'принадлежит',
        'no' => 'нет',
      ),
      'assignmentPermission' => 
      array (
        'all' => 'all',
        'team' => 'team',
        'not-set' => 'not-set',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Чтение',
      'edit' => 'Редактировать',
      'delete' => 'Удалить',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Все изменения применятся только после очистки кэша.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'статус',
      'job' => 'Работа',
      'scheduling' => 'Планирование (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Лог',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Создать периодическую работу',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Очистить',
        'CheckInboundEmails' => 'Проверить входящую почту',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Send Email Reminders',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Заметка: Добавьте эту строку в crontab - файл для запуска Планировщика Работ Espo:',
        'mac' => 'Заметка: Добавьте эту строку в crontab - файл для запуска Планировщика Работ Espo:',
        'windows' => 'Заметка: Создайте пакетный файл со следующими командами для запуска Планировщика Работ Espo, используя Планировщик задач Windows:',
        'default' => 'Заметка: Добавьте эту команду в Cron-Работа (Планировщик задач):',
      ),
      'status' => 
      array (
        'Active' => 'Активный',
        'Inactive' => 'Неактивный',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'статус',
      'executionTime' => 'Время запуска',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Использовать кэш',
      'dateFormat' => 'Формат даты',
      'timeFormat' => 'Формат времени',
      'timeZone' => 'Часовой пояс',
      'weekStart' => 'Первый день недели',
      'thousandSeparator' => 'Разделитель разрядов(тысячные)',
      'decimalMark' => 'Десятичный знак',
      'defaultCurrency' => 'Валюта по умолчанию',
      'baseCurrency' => 'Базовая валюта',
      'currencyRates' => 'Курсы обмена',
      'currencyList' => 'Список валют',
      'language' => 'Язык',
      'companyLogo' => 'Логотип компании',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизация',
      'smtpSecurity' => 'Безопасность',
      'smtpUsername' => 'Username',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Пароль',
      'outboundEmailFromName' => 'От имени',
      'outboundEmailFromAddress' => 'С адреса',
      'outboundEmailIsShared' => 'Может использоваться всеми пользователями',
      'recordsPerPage' => 'Показывать по страницам',
      'recordsPerPageSmall' => 'Показывать по страницам (Мелкий)',
      'tabList' => 'Вкладки',
      'quickCreateList' => 'Быстрое создание списка',
      'exportDelimiter' => 'Разделитель (Перемещение)',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Метод аутентификации',
      'ldapHost' => 'Host',
      'ldapPort' => 'Порт',
      'ldapAuth' => 'Авторизация',
      'ldapUsername' => 'Username',
      'ldapPassword' => 'Пароль',
      'ldapBindRequiresDn' => 'Привязка по домену',
      'ldapBaseDn' => 'Базовый домен',
      'ldapAccountCanonicalForm' => 'Стандартная форма учетной записи',
      'ldapAccountDomainName' => 'Доменное имя учетной записи',
      'ldapTryUsernameSplit' => 'Попробовать имя пользователя Split',
      'ldapCreateEspoUser' => 'Создать пользователя в EspoCRM',
      'ldapSecurity' => 'Безопасность',
      'ldapUserLoginFilter' => 'Фильтер пользовательской авторизации',
      'ldapAccountDomainNameShort' => 'Краткая учетная запись домена',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => 'Отмена экпортирования (доступно только администратору)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Оповещать по email при назначении',
      'assignmentEmailNotificationsEntityList' => 'Список вещей для оповещения',
      'b2cMode' => 'B2C Mode',
      'disableAvatars' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow Created Entities',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Воскресенье',
        1 => 'Понедельник',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Число записей в панелях связей.',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Локальные настройки',
      'SMTP' => 'SMTP',
      'Configuration' => 'Конфигурация',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Настройки валюты',
      'Currency Rtes' => 'Курсы обмена валюты',
      'Notifications' => 'Оповещения',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'roles' => 'Роли',
      'positionList' => 'Список должностей',
    ),
    'links' => 
    array (
      'users' => 'Пользователи',
    ),
    'tooltips' => 
    array (
      'roles' => 'Все пользователи этой команды получат настройки доступа из выбранных ролей.',
      'positionList' => 'Имеющиеся должности в этой группе. Например, продавец, менеджер.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Создать группу',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'userName' => 'Имя пользователя',
      'title' => 'Должность',
      'isAdmin' => 'Права администратора',
      'defaultTeam' => 'Группа по умолчанию',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Номер телефона',
      'roles' => 'Роли',
      'teamRole' => 'Должность',
      'password' => 'Пароль',
      'passwordConfirm' => 'Подтвердите пароль',
      'newPassword' => 'Новый пароль',
      'newPasswordConfirm' => 'Confirm New Password',
      'avatar' => 'Avatar',
      'isActive' => 'Is Active',
    ),
    'links' => 
    array (
      'teams' => 'Группы',
      'roles' => 'Роли',
      'targetLists' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Create User' => 'Создать пользователя',
      'Generate' => 'Сгенерировать',
      'Access' => 'Доступ',
      'Preferences' => 'Настройки',
      'Change Password' => 'Изменить пароль',
      'Teams and Access Control' => 'Teams and Access Control',
      'Forgot Password?' => 'Forgot Password?',
      'Password Change Request' => 'Password Change Request',
      'Email Address' => 'Email Address',
      'External Accounts' => 'External Accounts',
      'Email Accounts' => 'Email Accounts',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Все записи, созданные этим пользователем, по умолчанию будут относиться к этой команде.',
      'userName' => 'Letters a-z, numbers 0-9 and underscores are allowed.',
      'isAdmin' => 'Admin user can access everything.',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Teams which this user belongs to. Access control level is inherited from team\'s roles.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level only for this user.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Пароль будет выслан на почтовый адрес пользователя',
      'accountInfoEmailSubject' => 'Информация об учетной записи',
      'accountInfoEmailBody' => 'Информация о Вашей учетной записи:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Change Password Request',
      'passwordChangeLinkEmailBody' => 'You can change your password by this link {link}. This unique url will be exprired soon.',
      'passwordChanged' => 'Пароль изменен',
      'userCantBeEmpty' => 'Username can not be empty',
      'wrongUsernamePasword' => 'Wrong username/password',
      'emailAddressCantBeEmpty' => 'Email Address can not be empty',
      'userNameEmailAddressNotFound' => 'Username/Email Address not found',
      'forbidden' => 'Forbidden, please try later',
      'uniqueLinkHasBeenSent' => 'The unique link has been sent to the specified email address.',
      'passwordChangedByRequest' => 'Password has been changed.',
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Only My Team',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'website' => 'Интернет сайт',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Платежный адрес',
      'shippingAddress' => 'Почтовый адрес',
      'description' => 'Описание',
      'sicCode' => 'SicCode',
      'industry' => 'Промышленность',
      'type' => 'Type',
      'contactRole' => 'Роль',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'documents' => 'Documents',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Заказчик',
        'Investor' => 'Вкладчик',
        'Partner' => 'Партнер',
        'Reseller' => 'Посредник',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotive',
        'Banking' => 'Банковское дело',
        'Biotechnology' => 'Biotechnology',
        'Chemical' => 'Chemical',
        'Computer' => 'Computer',
        'Education' => 'Образование',
        'Electronics' => 'Электроника',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Финансы',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Insurance' => 'Страхование',
        'Legal' => 'Legal',
        'Publishing' => 'Publishing',
        'Real Estate' => 'Real Estate',
        'Service' => 'Service',
        'Sports' => 'Sports',
        'Software' => 'Software',
        'Technology' => 'Technology',
        'Telecommunications' => 'Telecommunications',
        'Television' => 'Television',
        'Transportation' => 'Transportation',
        'Venture Capital' => 'Venture Capital',
        'Apparel' => 'Одежда',
        'Computer Software' => 'Программное обеспечение',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Создать контрагента',
      'Copy Billing' => 'Copy Billing',
    ),
    'presetFilters' => 
    array (
      'customers' => 'Customers',
      'partners' => 'Partners',
    ),
  ),
  'Calendar' => 
  array (
    'modes' => 
    array (
      'month' => 'месяц',
      'week' => 'неделя',
      'day' => 'день',
      'agendaWeek' => 'неделя',
      'agendaDay' => 'день',
    ),
    'labels' => 
    array (
      'Today' => 'Сегодня',
      'Create' => 'Создать',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'direction' => 'Категория',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Потенциальные клиенты',
      'reminders' => 'Напоминания',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Запланированный',
        'Held' => 'Выполнен',
        'Not Held' => 'Не состоялся',
      ),
      'direction' => 
      array (
        'Outbound' => 'Исходящий',
        'Inbound' => 'Входящий',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
        'Accepted' => 'Принятый',
        'Declined' => 'Отклоненный',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Новый звонок',
      'Set Held' => 'Был выполнен',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Отправить приглашения',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированный',
      'held' => 'Выполнен',
      'todays' => 'На сегодня',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'status' => 'Status',
      'type' => 'Type',
      'startDate' => 'Start Date',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
      'sentCount' => 'Sent',
      'openedCount' => 'Opened',
      'clickedCount' => 'Clicked',
      'optedOutCount' => 'Opted Out',
      'bouncedCount' => 'Bounced',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Leads Created',
      'revenue' => 'Revenue',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'opportunities' => 'Opportunities',
      'campaignLogRecords' => 'Log',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
        'Mail' => 'Mail',
      ),
      'status' => 
      array (
        'Planning' => 'Planning',
        'Active' => 'Active',
        'Inactive' => 'Inactive',
        'Complete' => 'Complete',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Create Campaign',
      'Target Lists' => 'Target Lists',
      'Statistics' => 'Statistics',
      'hard' => 'hard',
      'soft' => 'soft',
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Action',
      'actionDate' => 'Date',
      'data' => 'Data',
      'campaign' => 'Campaign',
      'parent' => 'Target',
      'object' => 'Object',
      'application' => 'Application',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Sent',
        'Opened' => 'Opened',
        'Opted Out' => 'Opted Out',
        'Bounced' => 'Bounced',
        'Clicked' => 'Clicked',
        'Lead Created' => 'Lead Created',
      ),
    ),
    'labels' => 
    array (
      'All' => 'All',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'number' => 'Номер',
      'status' => 'статус',
      'account' => 'Контрагент',
      'contact' => 'Контакт',
      'priority' => 'Приоритет',
      'type' => 'Type',
      'description' => 'Описание',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новый',
        'Assigned' => 'На рассмотрении',
        'Pending' => 'Текущее',
        'Closed' => 'Закрыто',
        'Rejected' => 'Отказано',
        'Duplicate' => 'Копия',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Нормальный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
      'type' => 
      array (
        'Question' => 'Вопрос',
        'Incident' => 'Происшествие',
        'Problem' => 'Проблема',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Создать обращение',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открыть',
      'closed' => 'Закрыто',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Название',
      'account' => 'Контрагент',
      'accounts' => 'Контрагенты',
      'phoneNumber' => 'Phone',
      'accountType' => 'Тип контрагента',
      'doNotCall' => 'Не звонить',
      'address' => 'Address',
      'opportunityRole' => 'Роль сделки',
      'accountRole' => 'Роль',
      'description' => 'Описание',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Сделки',
      'cases' => 'Обращения',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Создать контакт',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Нет--',
        'Decision Maker' => 'Принимающий решение',
        'Evaluator' => 'Оценщик',
        'Influencer' => 'Консультант',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Create Document',
      'Details' => 'Описание',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'статус',
      'file' => 'File',
      'type' => 'Type',
      'source' => 'Source',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Описание',
    ),
    'links' => 
    array (
      'accounts' => 'Контрагенты',
      'opportunities' => 'Сделки',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активный',
        'Draft' => 'Черновик',
        'Expired' => 'Expired',
        'Canceled' => 'Отменена',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активный',
      'draft' => 'Черновик',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Преобразован в',
      'Create Lead' => 'Создать потенциального клиента',
      'Convert' => 'Преобразовать',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Название',
      'website' => 'Интернет сайт',
      'phoneNumber' => 'Phone',
      'accountName' => 'Имя контрагента',
      'doNotCall' => 'Не звонить',
      'address' => 'Address',
      'status' => 'статус',
      'source' => 'Source',
      'opportunityAmount' => 'Сумма сделки',
      'opportunityAmountConverted' => 'Сумма сделки (конвертирован)',
      'description' => 'Описание',
      'createdAccount' => 'Контрагент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Cделка',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новый',
        'Assigned' => 'На рассмотрении',
        'In Process' => 'В процессе',
        'Converted' => 'Преобразовано',
        'Recycled' => 'Восстановленный',
        'Dead' => 'Мертв',
      ),
      'source' => 
      array (
        'Call' => 'Вызов',
        'Email' => 'Email',
        'Existing Customer' => 'Existing Customer',
        'Partner' => 'Партнер',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Site',
        'Campaign' => 'Campaign',
        'Other' => 'Дополнительно',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активный',
      'converted' => 'Converted',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Дата окончания',
      'duration' => 'Длительность',
      'description' => 'Описание',
      'users' => 'Пользователи',
      'contacts' => 'Контакты',
      'leads' => 'Потенциальные клиенты',
      'reminders' => 'Напоминания',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Запланированный',
        'Held' => 'Выполнен',
        'Not Held' => 'Не состоялся',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нет',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Создать встречу',
      'Set Held' => 'Был выполнен',
      'Set Not Held' => 'Set Not Held',
      'Send Invitations' => 'Отправить приглашения',
      'on time' => 'on time',
      'before' => 'before',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Запланированный',
      'held' => 'Выполнен',
      'todays' => 'На сегодня',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Контрагент',
      'stage' => 'Стадия',
      'amount' => 'Сумма',
      'probability' => 'Вероятность успеха, %',
      'leadSource' => 'Источник потенциального клиента',
      'doNotCall' => 'Не звонить',
      'closeDate' => 'Дата закрытия',
      'contacts' => 'Контакты',
      'description' => 'Описание',
      'amountConverted' => 'Сумма (сконвертирована)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Контакты',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Привлечение клиента',
        'Qualification' => 'Оценка возможности',
        'Needs Analysis' => 'Требует анализа',
        'Value Proposition' => 'Выбор предложения/оферты',
        'Id. Decision Makers' => 'Определение ответственного лица',
        'Perception Analysis' => 'Проведение анализа',
        'Proposal/Price Quote' => 'Отправлено предложение/оферта',
        'Negotiation/Review' => 'Согласование/рассмотрение',
        'Closed Won' => 'Закрыто - Успех',
        'Closed Lost' => 'Закрыто - Провал',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Создать сделку',
    ),
    'presetFilters' => 
    array (
      'open' => 'Открыть',
      'won' => 'Успешные',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Название',
      'website' => 'Интернет сайт',
      'accountName' => 'Имя контрагента',
      'phoneNumber' => 'Phone',
      'doNotCall' => 'Не звонить',
      'address' => 'Address',
      'description' => 'Описание',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Создать цель',
      'Convert to Lead' => 'Преобразовать в потенциального клиента',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'description' => 'Description',
      'entryCount' => 'Entry Count',
      'campaigns' => 'Campaigns',
      'endDate' => 'End Date',
      'targetLists' => 'Target Lists',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'contacts' => 'Contacts',
      'leads' => 'Leads',
      'campaigns' => 'Campaigns',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Television',
        'Radio' => 'Radio',
        'Newsletter' => 'Newsletter',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Create Target List',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Имя',
      'parent' => 'Источник',
      'status' => 'Статус',
      'dateStart' => 'Дата начала',
      'dateEnd' => 'Date Due',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Приоритет',
      'description' => 'Описание',
      'isOverdue' => 'Просрочена',
      'account' => 'Account',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Attachments',
    ),
    'links' => 
    array (
      'attachments' => 'Attachments',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Не началась',
        'Started' => 'Началась',
        'Completed' => 'Завершена',
        'Canceled' => 'Отменена',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Низкий',
        'Normal' => 'Нормальный',
        'High' => 'Высокий',
        'Urgent' => 'Срочно',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Создать задачу',
      'Complete' => 'Завершить',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Завершена',
      'todays' => 'На сегодня',
      'overdue' => 'Просроченные',
    ),
  ),
);

?>