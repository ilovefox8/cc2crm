<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Увімкнено',
      'Disabled' => 'Вимкнено',
      'System' => 'Система',
      'Users' => 'Користувачі',
      'Email' => 'Емейл',
      'Data' => 'Дані',
      'Customization' => 'Користувацькі налаштування',
      'Available Fields' => 'Доступні поля',
      'Layout' => 'Макет',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Додати панель',
      'Add Field' => 'Додати поле',
      'Settings' => 'Установки',
      'Scheduled Jobs' => 'Заплановані завдання',
      'Upgrade' => 'Оновлення',
      'Clear Cache' => 'Очистити кеш',
      'Rebuild' => 'Перебудувати',
      'Teams' => 'Команди',
      'Roles' => 'Ролі',
      'Outbound Emails' => 'Вихідна електронна пошта',
      'Inbound Emails' => 'Вхідна електронна пошта',
      'Email Templates' => 'Шаблони листів',
      'Import' => 'Імпорт',
      'Layout Manager' => 'Менеджер макетів',
      'User Interface' => 'Інтерфейс користувача',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Автентифікація',
      'Currency' => 'Валюта',
      'Integrations' => 'Інтенрації',
      'Extensions' => 'Розширення',
      'Upload' => 'Завантажити',
      'Installing...' => 'Установка...',
      'Upgrading...' => 'Оновлення...',
      'Upgraded successfully' => 'Оновлено успішно',
      'Installed successfully' => 'Успішно встановлено',
      'Ready for upgrade' => 'Готово до оновлення',
      'Run Upgrade' => 'Запустити оновлення',
      'Install' => 'Установити',
      'Ready for installation' => 'Готово до установки',
      'Uninstalling...' => 'Видалення...',
      'Uninstalled' => 'Видалено',
      'Create Entity' => 'Створити сутність',
      'Edit Entity' => 'Змінити сутність',
      'Create Link' => 'Створити Link',
      'Edit Link' => 'Змінити Link',
      'Notifications' => 'Оповіщення',
    ),
    'layouts' => 
    array (
      'list' => 'Список',
      'detail' => 'Детальний Вид',
      'listSmall' => 'Список (малий)',
      'detailSmall' => 'Детальний Вид (мала)',
      'filters' => 'Фільтри пошуку',
      'massUpdate' => 'Масове оновлення',
      'relationships' => 'Зв\'язки',
      'detailConvert' => 'Конвертувати лід',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Адреса',
      'array' => 'Масив',
      'foreign' => 'Іноземні',
      'duration' => 'Тривалість',
      'password' => 'Пароль',
      'parsonName' => 'Ім\'я особи',
      'autoincrement' => 'Автоінкремент',
      'bool' => 'Булевий тип',
      'currency' => 'Валюта',
      'date' => 'Дата',
      'datetime' => 'Дата, час',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Емейл',
      'enum' => 'Список',
      'enumInt' => 'Список цілі числа',
      'enumFloat' => 'Список дробні числа',
      'float' => 'Десятовий дріб',
      'int' => 'Ціле число',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiple',
      'linkParent' => 'Link Parent',
      'multienim' => 'Множинний список',
      'phone' => 'Телефон',
      'text' => 'Текст',
      'url' => 'URL-адреса',
      'varchar' => 'Рядок',
      'file' => 'Файл',
      'image' => 'Зображення',
      'multiEnum' => 'Множинний список',
    ),
    'fields' => 
    array (
      'type' => 'Тип',
      'name' => 'Ім\'я',
      'label' => 'Мітка',
      'required' => 'Обов\'язково',
      'default' => 'За замовчуванням',
      'maxLength' => 'Максимальна довжина',
      'options' => 'Опції',
      'after' => 'Після (поле)',
      'before' => 'Перед (поле)',
      'link' => 'Link',
      'field' => 'Поле',
      'min' => 'Мінімум',
      'max' => 'Максимум',
      'translation' => 'Переклад',
      'previewSize' => 'Розмір передперегляду',
      'noEmptyString' => 'Немає вільного рядка',
      'defaultType' => 'Default Type',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'FoxCRM буде оновлено до версії <strong>{version}</strong>. Це може зайняти деякий час.',
      'upgradeDone' => 'Your FoxCRM has been upgraded to version <strong>{version}</strong>.',
      'upgradeBackup' => 'Ми радимо перед оновленням зробити резервну копію ваших FoxCRM файлів і даних.',
      'thousandSeparatorEqualsDecimalMark' => 'Роздільник ґруп розрядів не може бути таким же, як і роздільник дробної частини',
      'userHasNoEmailAddress' => 'Користувач не має адреси електронної пошти.',
      'selectEntityType' => 'Оберіть тип сутности у лівому меню.',
      'selectUpgradePackage' => 'Оберіть пакет оновлення',
      'downloadUpgradePackage' => 'Завантажити необхідні оновлення <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/">тут</a>.',
      'selectLayout' => 'Оберіть потрібний макет у лівому меню та змінюйте його.',
      'selectExtensionPackage' => 'Оберіть пакет розширення',
      'extensionInstalled' => 'Розширення {name} {version} установлено.',
      'installExtension' => 'Розширення {name} {version} готове до інсталяції.',
      'uninstallConfirmation' => 'Ви дійсно хочете видалити розширення?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Системні установки додатку.',
      'scheduledJob' => 'Завдання, виконувані за допомогою cron.',
      'upgrade' => 'Оновити FoxCRM.',
      'clearCache' => 'Очистити весь кеш сервера.',
      'rebuild' => 'Перезапустити сервер та очистити кеш.',
      'users' => 'Управління користувачами.',
      'teams' => 'Управління командами.',
      'roles' => 'Управління ролями.',
      'outboundEmails' => 'Установки SMTP для вихідних листів.',
      'inboundEmails' => 'Ґрупувати поштові акаунти IMAP. Імпорт пошти та інтерфейс доступу до звернення через електронну пошту.',
      'emailTemplates' => 'Шаблони для вихідних листів.',
      'import' => 'Імпорт даних із файлу CSV.',
      'layoutManager' => 'Налаштування макетів (список, деталь, зміни, пошук, масове поновлення).',
      'entityManager' => 'Створювати користувацькі сутності, змінювати існуючі. Керувати полями та відносинами.',
      'userInterface' => 'Конфуґурація інтерфейсу користувача',
      'authTokens' => 'Активні авторизації. IP-адреса і дата останнього доступу.',
      'authentication' => 'Установки аутентифікації.',
      'currency' => 'Установки та розмірності валюти.',
      'extensions' => 'Установити або видалити розширення.',
      'integrations' => 'Інтеґрація зі сторонніми сервісами.',
      'notifications' => 'In-app and email notification settings.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Малесенький',
        'small' => 'Маленький',
        'medium' => 'Середній',
        'large' => 'Великий',
      ),
    ),
    'layoutManagerDataAttributes' => 
    array (
      'width' => 'Ширина (%)',
      'link' => 'Link',
      'notSortable' => 'Не сортоване',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Користувач',
      'ipAddress' => 'IP-адреса',
      'lastAccess' => 'Дата останнього доступу',
      'createdAt' => 'Дата входу',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Посада',
      'dateFrom' => 'Дата від',
      'dateTo' => 'Дата до',
      'autorefreshInterval' => 'Інтервал авто-оновлення',
      'displayRecords' => 'Відобразити записи',
      'isDoubleHeight' => 'Висота 2x',
      'mode' => 'Mode',
    ),
    'options' => 
    array (
      'mode' => 
      array (
        'agendaWeek' => 'Week (agenda)',
        'basicWeek' => 'тиждень',
        'month' => 'місяць',
      ),
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'name' => 'Тема',
      'parent' => 'Джерело',
      'status' => 'статус',
      'dateSent' => 'Дата відправки',
      'from' => 'Від',
      'to' => 'До',
      'cc' => 'ГГ',
      'bcc' => 'СК',
      'isHtml' => 'HTML-код',
      'body' => 'Тіло',
      'subject' => 'Тема',
      'attachments' => 'Вкладення',
      'selectTemplate' => 'Обрати шаблон',
      'fromEmailAddress' => 'З адреси',
      'toEmailAddresses' => 'На адресу',
      'emailAddress' => 'Поштова скринька',
      'deliveryDate' => 'Дата доставки',
      'account' => 'Контраґент',
      'users' => 'Користувачі',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Чернетка',
      'Sending' => 'Відправляється',
      'Sent' => 'Відправлено',
      'Archived' => 'В архіві',
      'Received' => 'Отримав',
    ),
    'labels' => 
    array (
      'Create Email' => 'Архівувати листа',
      'Archive Email' => 'Архівувати листа',
      'Compose' => 'Написати',
      'Reply' => 'Відповісти',
      'Reply to All' => 'Відповісти всим',
      'Forward' => 'Переслати',
      'Original message' => 'Ориґінал повідомлення',
      'Forwarded message' => 'Переслане повідомлення',
      'Email Accounts' => 'Акаунти емейлів',
      'Send Test Email' => 'Відправити тестове повідомлення',
      'Send' => 'Відправити',
      'Email Address' => 'Поштова скринька',
      'Mark Read' => 'Прочитане',
      'Sending...' => 'Шле...',
      'Save Draft' => 'Зберегти чернетку',
      'Mark all as read' => 'Mark all as read',
      'Show Plain Text' => 'Show Plain Text',
      'Create Lead' => 'Створили лід',
      'Create Contact' => 'Створити контакт',
      'Create Task' => 'Створити завдання',
    ),
    'messages' => 
    array (
      'noSmtpSetup' => 'Не налаштовано SMTP. {посилання}.',
      'testEmailSent' => 'Тестового листа було відправлено',
      'emailSent' => 'Листа було відправлено',
      'savedAsDraft' => 'Saved as draft',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Відправлено',
      'archived' => 'В архіві',
      'inbox' => 'Inbox',
      'drafts' => 'Drafts',
    ),
    'massActions' => 
    array (
      'markAsRead' => 'Позначити прочитаним',
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'статус',
      'host' => 'Хост',
      'username' => 'Ім\'я користувача',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Відслідковувані теки',
      'ssl' => 'SSL',
      'fetchSince' => 'Вибірки з',
      'emailAddress' => 'Поштова скринька',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активний',
        'Inactive' => 'Неактивний',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Створити емейл-акаунт',
      'IMAP' => 'IMAP',
      'Main' => 'Основне',
      'Test Connection' => 'Перевірка з\'єднання',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не вдається підключитися до сервера IMAP',
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
      'Primary' => 'Первинне',
      'Opted Out' => 'Відмовлено',
      'Invalid' => 'Хибно',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'статус',
      'isHtml' => 'HTML-код',
      'body' => 'Тіло',
      'subject' => 'Тема',
      'attachments' => 'Вкладення',
      'insertField' => 'Project-Id-Version: 
POT-Creation-Date: 
PO-Revision-Date: 2015-04-14 18:44+0300
Last-Translator: alihor <ihor.aleksejev@gmail.com>
Language-Team: FoxCRM <infobox@espocrm.com>
Language: uk
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);
X-Generator: Virtaal 0.7.1
',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Створити шаблон листа',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Поля',
      'Relationships' => 'Зв\'язки',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'type' => 'Тип',
      'labelSingular' => 'Одиночна мітка',
      'labelPlural' => 'Множинна мітка',
      'stream' => 'Потік',
      'label' => 'Мітка',
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
        '' => 'Нема',
        'Base' => 'База',
        'Person' => 'Особа',
        'CategoryTree' => 'Category Tree',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Багато-до-багатьох',
        'oneToMany' => 'Один-до-багатьох',
        'manyToOne' => 'Багато-до-одного',
        'parentToChildren' => 'Батьки-дітям',
        'childrenToParent' => 'Діти-батькам',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascending',
        'desc' => 'Descending',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Підрозділ було створено',
      'linkAlreadyExists' => 'Конфлікт: линва вже існує.',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'version' => 'Версія',
      'description' => 'Опис',
      'isInstalled' => 'Встановлено',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Видалити',
      'Install' => 'Установити',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Розширення {name} видалено',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Під\'єднати',
      'Connected' => 'Під\'єднаний',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'Емейл',
      'User' => 'Користувач',
      'Team' => 'Команда',
      'Role' => 'Роль',
      'EmailTemplate' => 'Шаблон листа',
      'EmailAccount' => 'Емейл-акаунт',
      'EmailAccountScope' => 'Емейл-акаунт',
      'OutboundEmail' => 'Вихідний лист',
      'ScheduledJob' => 'Заплановані завдання',
      'ExternalAccount' => 'Зовнішній рахунок',
      'Extension' => 'Розширення',
      'Dashboard' => 'Панель інструментів',
      'InboundEmail' => 'Inbound Email Account',
      'Stream' => 'Потік',
      'Import' => 'Імпорт',
      'Account' => 'Контраґент',
      'Contact' => 'Контакт',
      'Lead' => 'Лід',
      'Target' => 'Ціль',
      'Opportunity' => 'Угода',
      'Meeting' => 'Зустріч',
      'Calendar' => 'Календар',
      'Call' => 'Дзвінок',
      'Task' => 'Завдання',
      'Case' => 'Кейс',
      'Document' => 'Документ',
      'Campaign' => 'Кампанія',
      'TargetList' => 'Цільовий список',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Листи',
      'User' => 'Користувачі',
      'Team' => 'Команди',
      'Role' => 'Ролі',
      'EmailTemplate' => 'Шаблони листів',
      'EmailAccount' => 'Акаунти емейлів',
      'EmailAccountScope' => 'Акаунти емейлів',
      'OutboundEmail' => 'Вихідна електронна пошта',
      'ScheduledJob' => 'Заплановані завдання',
      'ExternalAccount' => 'Зовнішні рахунки',
      'Extension' => 'Розширення',
      'Dashboard' => 'Панель інструментів',
      'InboundEmail' => 'Inbound Email Accounts',
      'Stream' => 'Потік',
      'Import' => 'Import Results',
      'Account' => 'Контраґенти',
      'Contact' => 'Контакти',
      'Lead' => 'Ліди',
      'Target' => 'Цілі',
      'Opportunity' => 'Угоди',
      'Meeting' => 'Зустрічі',
      'Calendar' => 'Календар',
      'Call' => 'Дзвінки',
      'Task' => 'Завдання',
      'Case' => 'Кейси',
      'Document' => 'Документи',
      'Campaign' => 'Кампанії',
      'TargetList' => 'Цільові списки',
    ),
    'labels' => 
    array (
      'Misc' => 'Різне',
      'Merge' => 'Об\'єднати',
      'None' => 'Нема',
      'by' => 'за',
      'Saved' => 'Збережено',
      'Error' => 'Помилка',
      'Select' => 'Обрати',
      'Not valid' => 'Некоректні дані',
      'Please wait...' => 'Будь ласка, зачекайте...',
      'Please wait' => 'Будь ласка, зачекайте',
      'Loading...' => 'Вантаження...',
      'Uploading...' => 'Вивантаження...',
      'Sending...' => 'Шле...',
      'Merging...' => 'Злиття...',
      'Merged' => 'Злилося',
      'Removed' => 'Видалено',
      'Posted' => 'Додано',
      'Linked' => 'Із линвами',
      'Unlinked' => 'Безлинвові',
      'Access denied' => 'У доступі відмовлено',
      'Access' => 'Доступ',
      'Are you sure?' => 'Ви певні?',
      'Record has been removed' => 'Запис видалено',
      'Wrong username/password' => 'Хибне ім\'я користувача / пароль',
      'Post cannot be empty' => 'Повідомлення не може бути порожнім',
      'Removing...' => 'Видаляється...',
      'Unlinking...' => 'Розлинвення...',
      'Posting...' => 'Публікується...',
      'Username can not be empty!' => 'Ім\'я користувача не може бути порожнім!',
      'Cache is not enabled' => 'Кеш не підключено',
      'Cache has been cleared' => 'Кеш очищено',
      'Rebuild has been done' => 'Відновлення виконано',
      'Saving...' => 'Зберігається...',
      'Modified' => 'Змінено',
      'Created' => 'Створено',
      'Create' => 'Створити',
      'create' => 'створити',
      'Overview' => 'Огляд',
      'Details' => 'Деталі',
      'Add Field' => 'Додати поле',
      'Add Dashlet' => 'Додати дашлет',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Змінити панель інструментів',
      'Add' => 'Додати',
      'Reset' => 'Скинути',
      'Menu' => 'Меню',
      'More' => 'Більше',
      'Search' => 'Шукати',
      'Only My' => 'Тільки моє',
      'Open' => 'Відкрити',
      'Admin' => 'Адміністратор',
      'About' => 'Про проґраму',
      'Refresh' => 'Оновити',
      'Remove' => 'Видалити',
      'Options' => 'Опції',
      'Username' => 'Ім\'я користувача',
      'Password' => 'Пароль',
      'Login' => 'Увійти',
      'Log Out' => 'Вийти',
      'Preferences' => 'Переваги',
      'State' => 'Реґіон',
      'Street' => 'Вулиця',
      'Country' => 'Країна',
      'City' => 'Місто',
      'PostalCode' => 'Поштовий індекс',
      'Followed' => 'Підписано',
      'Follow' => 'Підписатися',
      'Clear Local Cache' => 'Очистити локальний кеш',
      'Actions' => 'Дії',
      'Delete' => 'Видалити',
      'Update' => 'Оновлення',
      'Save' => 'Зберегти',
      'Edit' => 'Зміни',
      'View' => 'Вигляд',
      'Cancel' => 'Скасувати',
      'Unlink' => 'Розлинвити',
      'Mass Update' => 'Масове оновлення',
      'Export' => 'Експортувати',
      'No Data' => 'Немає даних',
      'No Access' => 'Немає доступу',
      'All' => 'Все',
      'Active' => 'Активний',
      'Inactive' => 'Неактивний',
      'Write your comment here' => 'Залиште свій коментар тут',
      'Post' => 'Піблікувати',
      'Stream' => 'Потік',
      'Show more' => 'Показати більше',
      'Dashlet Options' => 'Опції панелі управління',
      'Full Form' => 'Повна форма',
      'Insert' => 'Вставити',
      'Person' => 'Особа',
      'First Name' => 'Ім\'я',
      'Last Name' => 'Прізвище',
      'Original' => 'Ориґінальний',
      'You' => 'Ви',
      'you' => 'ви',
      'change' => 'змінити',
      'Change' => 'Зміна',
      'Primary' => 'Первинне',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Адміністрування',
      'Run Import' => 'Запустити імпорт',
      'Duplicate' => 'Дуплікат',
      'Notifications' => 'Оповіщення',
      'Mark all read' => 'Помітити усе як прочитане',
      'See more' => 'Дивитися більше',
      'Today' => 'Сьогодні',
      'Tomorrow' => 'Завтра',
      'Yesterday' => 'Вчора',
      'Submit' => 'Подати',
      'Close' => 'Закрити',
      'Yes' => 'Так',
      'No' => 'Немає',
      'Select All Result' => 'Обрати всі результати',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Create InboundEmail' => 'Створити вхідну пошту',
      'Activities' => 'Заходи',
      'History' => 'Історія',
      'Attendees' => 'Учасники',
      'Schedule Meeting' => 'Розклад зустрічей',
      'Schedule Call' => 'Розклад дзвінків',
      'Compose Email' => 'Написати емейл',
      'Log Meeting' => 'Протокол зустрічей',
      'Log Call' => 'Протокол дзвінків',
      'Archive Email' => 'Архівувати листа',
      'Create Task' => 'Створити завдання',
      'Tasks' => 'Завдання',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Будь ласка, зачекайте...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Ви не внесли змін до запису',
      'duplicate' => 'Створений Вами запис був дубльований',
      'fieldIsRequired' => '{field} обов\'язкове',
      'fieldShouldBeEmail' => '{field} мусить бути правильний e-mail',
      'fieldShouldBeFloat' => '{field} мусить бути правильне дробове число',
      'fieldShouldBeInt' => '{field} мусить бути правильне ціле число',
      'fieldShouldBeDate' => '{field} мусить бути правильна дата',
      'fieldShouldBeDatetime' => '{field} мусить бути правильна дата/час',
      'fieldShouldAfter' => '{field} мусить бути після {otherField}',
      'fieldShouldBefore' => '{field} мусить бути до {otherField}',
      'fieldShouldBeBetween' => '{field} мусить бути між {min} і {max}',
      'fieldShouldBeLess' => '{field} мусить бути менше ніж {value}',
      'fieldShouldBeGreater' => '{field} мусить бути більше ніж {value}',
      'fieldBadPasswordConfirm' => 'Правильність {field} не підтверджено',
      'resetPreferencesDone' => 'Налаштування скинуті до значень за замовчуванням',
      'assignmentEmailNotificationSubject' => 'FoxCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} has assigned {entityType} \'{Entity.name}\' to you.

{recordUrl}',
      'confirmation' => 'Ви певні?',
      'resetPreferencesConfirmation' => 'Ви певні, що Ви хочете скинути налаштування за замовчуванням?',
      'removeRecordConfirmation' => 'Ви певні, що Ви хочете видалити запис?',
      'unlinkRecordConfirmation' => 'Ви певні, що Ви хочете прибрати зв\'язок?',
      'removeSelectedRecordsConfirmation' => 'Ви певні, що Ви хочете видалити вибрані записи?',
      'massUpdateResult' => '{count} записи були поновлені',
      'massUpdateResultSingle' => '{count} запис була поновлена',
      'noRecordsUpdated' => 'Запису не були поновлені',
      'massRemoveResult' => '{count} записи були видалені',
      'massRemoveResultSingle' => '{count} запис була видалена',
      'noRecordsRemoved' => 'Жодних записів не було видалено',
      'clickToRefresh' => 'Натисніть, щоби поновити',
      'streamPostInfo' => 'Тип <strong>@username</strong> для згадування користувачів у дописі.
Припустимий синтаксис розмітки:`<code>code</code>`
**<strong>strong text</strong>**
*<em>emphasized text</em>*
~<del>deleted text</del>~
> blockquote
(url)[link]',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Тільки моє',
      'followed' => 'Підписано',
    ),
    'presetFilters' => 
    array (
      'followed' => 'Підписано',
    ),
    'massActions' => 
    array (
      'remove' => 'Видалити',
      'merge' => 'Об\'єднати',
      'massUpdate' => 'Масове оновлення',
      'export' => 'Експортувати',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'firstName' => 'Ім\'я',
      'lastName' => 'Прізвище',
      'salutationName' => 'Привітання',
      'assignedUser' => 'Призначений користувач',
      'emailAddress' => 'Емейл',
      'assignedUserName' => 'Ім\'я призначеного користувача',
      'teams' => 'Команди',
      'createdAt' => 'Створений у',
      'modifiedAt' => 'Змінений у',
      'createdBy' => 'Створено',
      'modifiedBy' => 'Змінено',
      'description' => 'Опис',
      'address' => 'Адреса',
      'phoneNumber' => 'Телефон',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'order' => 'Order',
      'parent' => 'Джерело',
      'children' => 'Children',
      'billingAddressCity' => 'Місто',
      'billingAddressCountry' => 'Країна',
      'billingAddressPostalCode' => 'Поштовий індекс',
      'billingAddressState' => 'Реґіон',
      'billingAddressStreet' => 'Вулиця',
      'addressCity' => 'Місто',
      'addressStreet' => 'Вулиця',
      'addressCountry' => 'Країна',
      'addressState' => 'Реґіон',
      'addressPostalCode' => 'Поштовий індекс',
      'shippingAddressCity' => 'Місто доставки',
      'shippingAddressStreet' => 'Вулиця доставки',
      'shippingAddressCountry' => 'Країна доставки',
      'shippingAddressState' => 'Регіон доставки',
      'shippingAddressPostalCode' => 'Поштовий код доставки',
    ),
    'links' => 
    array (
      'assignedUser' => 'Призначений користувач',
      'createdBy' => 'Створено',
      'modifiedBy' => 'Змінено',
      'team' => 'Команда',
      'roles' => 'Ролі',
      'teams' => 'Команди',
      'users' => 'Користувачі',
      'parent' => 'Джерело',
      'children' => 'Children',
      'contacts' => 'Контакти',
      'opportunities' => 'Угоди',
      'leads' => 'Ліди',
      'meetings' => 'Зустрічі',
      'calls' => 'Дзвінки',
      'tasks' => 'Завдання',
      'emails' => 'Листи',
      'accounts' => 'Контраґенти',
      'cases' => 'Кейси',
      'documents' => 'Документи',
      'account' => 'Контраґент',
      'opportunity' => 'Угода',
      'contact' => 'Контакт',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Потік',
      'Leads' => 'Мої ліди',
      'Opportunities' => 'Мої угоди',
      'Tasks' => 'Мої завдання',
      'Cases' => 'Мої кейси',
      'Calendar' => 'Календар',
      'Calls' => 'Мої дзвінки',
      'Meetings' => 'Мої зустрічі',
      'OpportunitiesByStage' => 'Угоди на стадії',
      'OpportunitiesByLeadSource' => 'Угоди за джерелом лідів',
      'SalesByMonth' => 'Продажі по місяцях',
      'SalesPipeline' => 'Джерела продажу',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} створив {entityType} {entity}',
      'createAssigned' => '{user} створив {entityType} {entity}, призначену {assignee}',
      'assign' => '{користувач} призначив {entityType} {entity} to {assignee}',
      'post' => '{user} опублікований на {entityType} {entity}',
      'attach' => '{user} прикріплений до {entityType} {entity}',
      'status' => '{user} updated {field} of {entityType} {entity}',
      'update' => '{user} поновив {entityType} {entity}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} related to {entityType} {entity}',
      'mentionInPost' => '{user} mentioned {mentioned} in {entityType} {entity}',
      'createThis' => '{user} створив це {entityType}',
      'createAssignedThis' => '{user} створив це {entityType} призначену до {assignee}',
      'assignThis' => '{user} призначив це {entityType} до {assignee}',
      'postThis' => '{user} опублікував',
      'attachThis' => '{користувач} приклав',
      'statusThis' => '{user} поновив {field}',
      'updateThis' => '{user} поновив це {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} related to this {entityType}',
      'emailReceivedFromThis' => 'Email received from {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => 'Email received',
      'emailReceivedInitialThis' => 'Email received, this {entityType} created',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => 'Email received related to {entityType} {entity}',
      'emailReceivedInitial' => 'Email received: {entityType} {entity} created',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} sent email related to {entityType} {entity}',
      'emailSentThis' => '{by} sent email',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Січень',
        1 => 'Жовтень',
        2 => 'Березень',
        3 => 'Квітень',
        4 => 'Травень',
        5 => 'Червень',
        6 => 'Липень',
        7 => 'Серпень',
        8 => 'Вересень',
        9 => 'Жовтень',
        10 => 'Листопад',
        11 => 'Грудень',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Січ',
        1 => 'Лют',
        2 => 'Бер',
        3 => 'Кв',
        4 => 'Тр',
        5 => 'Чер',
        6 => 'Лип',
        7 => 'Сер',
        8 => 'Вер',
        9 => 'Жов',
        10 => 'Лис',
        11 => 'Гр',
      ),
      'dayNames' => 
      array (
        0 => 'Неділя',
        1 => 'Понеділок',
        2 => 'Вівторок',
        3 => 'Середа',
        4 => 'Четвер',
        5 => 'П\'ятниця',
        6 => 'Субота',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Нед',
        1 => 'Пон',
        2 => 'В-т',
        3 => 'Сер',
        4 => 'Чет',
        5 => 'П-т',
        6 => 'Суб',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Нд',
        1 => 'Пн',
        2 => 'Вт',
        3 => 'Ср',
        4 => 'Чт',
        5 => 'Пт',
        6 => 'Сб',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'пан',
        'Mrs.' => 'пані',
        'Ms.' => 'панна',
        'Dr.' => 'доктор',
      ),
      'language' => 
      array (
        'af_ZA' => 'Африкаанс',
        'az_AZ' => 'Азербайджанська',
        'be_BY' => 'Бєларуська',
        'bg_BG' => 'Болгарська',
        'bn_IN' => 'Бенґальська',
        'bs_BA' => 'Боснійська',
        'ca_ES' => 'Каталонська',
        'cs_CZ' => 'Чеська',
        'cy_GB' => 'Валлійська',
        'da_DK' => 'Данська',
        'de_DE' => 'Німецька',
        'el_GR' => 'Ґрецька',
        'en_GB' => 'Анґлійська (UK)',
        'en_US' => 'Анґлійська (US)',
        'es_ES' => 'Іспанська (Іспанія)',
        'et_EE' => 'Естонська',
        'eu_ES' => 'Баскська',
        'fa_IR' => 'Перська',
        'fi_FI' => 'Фінська',
        'fo_FO' => 'Фарерська',
        'fr_CA' => 'Французька (Канада)',
        'fr_FR' => 'Французька (Франція)',
        'ga_IE' => 'Ірландська',
        'gl_ES' => 'Ґальська',
        'gn_PY' => 'Ґуарані',
        'he_IL' => 'Іврит',
        'hi_IN' => 'Гінді',
        'hr_HR' => 'Хорватська',
        'hu_HU' => 'Угорська',
        'hy_AM' => 'Вірменська',
        'id_ID' => 'Індонезійська',
        'is_IS' => 'Ісландська',
        'it_IT' => 'Італійська',
        'ja_JP' => 'Японська',
        'ka_GE' => 'Грузинська',
        'km_KH' => 'Кхмерська',
        'ko_KR' => 'Корейська',
        'ku_TR' => 'Курдська',
        'lt_LT' => 'Литовська',
        'lv_LV' => 'Латвійська',
        'mk_MK' => 'Македонська',
        'ml_IN' => 'Малаялам',
        'ms_MY' => 'Малайська',
        'nb_NO' => 'Норвезька книжна',
        'nn_NO' => 'Норвезька нова',
        'ne_NP' => 'Непальська',
        'nl_NL' => 'Голландська',
        'pa_IN' => 'Панджабі',
        'pl_PL' => 'Польська',
        'ps_AF' => 'Пушту',
        'pt_BR' => 'Портуґальська (Бразилія)',
        'pt_PT' => 'Портуґальська (Портуґалія)',
        'ro_RO' => 'Румунська',
        'ru_RU' => 'Російська',
        'sk_SK' => 'Словацька',
        'sl_SI' => 'Словенська',
        'sq_AL' => 'Албанська',
        'sr_RS' => 'Сербська',
        'sv_SE' => 'Шведська',
        'sw_KE' => 'Суахілі',
        'ta_IN' => 'Тамільська',
        'te_IN' => 'Телугу',
        'th_TH' => 'Тайська',
        'tl_PH' => 'Тагальська',
        'tr_TR' => 'Турецька',
        'uk_UA' => 'Українська',
        'ur_PK' => 'Урду',
        'vi_VN' => 'В\'єтнамська',
        'zh_CN' => 'Спрощена китайська (китай)',
        'zh_HK' => 'Традиційна китайська (Гонконґ)',
        'zh_TW' => 'Традиційна китайська (Тайвань)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'На',
        'notOn' => 'Не на',
        'after' => 'Після',
        'before' => 'До',
        'between' => 'Між',
        'today' => 'Сьогодні',
        'past' => 'Минуле',
        'future' => 'Майбутнє',
        'currentMonth' => 'Поточний місяць',
        'lastMonth' => 'Минулого місяця',
        'currentQuarter' => 'Поточного кварталу',
        'lastQuarter' => 'Минулого Кварталу',
        'currentYear' => 'Поточного року',
        'lastYear' => 'Минулого року',
      ),
      'searchRanges' => 
      array (
        'is' => 'Is',
        'isEmpty' => 'Is Empty',
        'isNotEmpty' => 'Is Not Empty',
      ),
      'varcharSearchRanges' => 
      array (
        'equals' => 'Дорівнює',
        'startsWith' => 'Starts With',
        'contains' => 'Contains',
      ),
      'intSearchRanges' => 
      array (
        'equals' => 'Дорівнює',
        'notEquals' => 'Не дорівнює',
        'greaterThan' => 'Більше ніж',
        'lessThan' => 'Менше ніж',
        'greaterThanOrEquals' => 'Більше ніж або дорівнює',
        'lessThanOrEquals' => 'Менше ніж або дорівнює',
        'between' => 'Між',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Нема',
        '0.5' => '30 секунд',
        1 => '1 хвилина',
        2 => '2 хвилини',
        5 => '5 хвилин',
        10 => '10 хвилин',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Мобільний',
        'Office' => 'Офісний',
        'Fax' => 'Факс',
        'Home' => 'Домашній',
        'Other' => 'Додатково',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Спливаюче вікно',
        'Email' => 'Емейл',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Ви можете знайти переклад тут: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Напівжирний',
          'italic' => 'Курсив',
          'underline' => 'Підкреслений',
          'strike' => 'Закреслений',
          'clear' => 'Прибрати стилі шрифту',
          'height' => 'Висота лінії',
          'name' => 'Родина шрифту',
          'size' => 'Розмір шрифту',
        ),
        'image' => 
        array (
          'image' => 'Картинка',
          'insert' => 'Вставити зображення',
          'resizeFull' => 'Повний розмір',
          'resizeHalf' => 'Половинний розмір',
          'resizeQuarter' => 'Чвертинний розмір',
          'floatLeft' => 'Обтікання зліва',
          'floatRight' => 'Обтікання зправа',
          'floatNone' => 'Без обтікання',
          'dragImageHere' => 'Перетягніть сюди зображення',
          'selectFromFiles' => 'Вибрати з файлів',
          'url' => 'URL зображення',
          'remove' => 'Видалити зображення',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Вставити линву',
          'unlink' => 'Розлинвити',
          'edit' => 'Зміни',
          'textToDisplay' => 'Текст для відображення',
          'url' => 'До якого URL має ця линва вести?',
          'openInNewWindow' => 'Відкрити у новому вікні',
        ),
        'video' => 
        array (
          'video' => 'Відео',
          'videoLink' => 'Линва на відео',
          'insert' => 'Вставити відео',
          'url' => 'URL відео?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, або DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Таблиця',
        ),
        'hr' => 
        array (
          'insert' => 'Вставити горизонтальну лінію',
        ),
        'style' => 
        array (
          'style' => 'Стиль',
          'normal' => 'Нормальний',
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
          'unordered' => 'Маркований список',
          'ordered' => 'Нумерований список',
        ),
        'options' => 
        array (
          'help' => 'Допомога',
          'fullscreen' => 'Повний екран',
          'codeview' => 'Перегляд коду',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Абзац',
          'outdent' => 'Зменшити відступ',
          'indent' => 'Збільшити відступ',
          'left' => 'Вирівняти по лівому краю',
          'center' => 'Вирівняти по центру',
          'right' => 'Вирівняти по правому краю',
          'justify' => 'Розтягнути по ширині',
        ),
        'color' => 
        array (
          'recent' => 'Останній колір',
          'more' => 'Ще кольори',
          'background' => 'Колір тла',
          'foreground' => 'Колір шрифту',
          'transparent' => 'Прозорий',
          'setTransparent' => 'Установити прозорим',
          'reset' => 'Скинути',
          'resetToDefault' => 'Скинути до замовчуваного',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Сполучення клавіш',
          'close' => 'Закрити',
          'textFormatting' => 'Форматування тексту',
          'action' => 'Дія',
          'paragraphFormatting' => 'Форматування абзацу',
          'documentStyle' => 'Стиль документа',
        ),
        'history' => 
        array (
          'undo' => 'Скасувати',
          'redo' => 'Повторити',
        ),
      ),
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Повернутися до імпорту',
      'Run Import' => 'Запустити імпорт',
      'Back' => 'Назад',
      'Field Mapping' => 'Зіставлення полів',
      'Default Values' => 'Замовчувані значення',
      'Add Field' => 'Додати поле',
      'Created' => 'Створено',
      'Updated' => 'Поновлено',
      'Result' => 'Результат',
      'Show records' => 'Показати записи',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
    ),
    'messages' => 
    array (
      'utf8' => 'Мусить бути в кодуванні utf-8',
      'duplicatesRemoved' => 'Duplicates removed',
    ),
    'fields' => 
    array (
      'file' => 'Файл',
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
      'name' => 'Ім\'я',
      'team' => 'Команда',
      'status' => 'статус',
      'assignToUser' => 'Зв\'язатися з користувачем',
      'host' => 'Хост',
      'username' => 'Ім\'я користувача',
      'password' => 'Пароль',
      'port' => 'Порт',
      'monitoredFolders' => 'Відслідковувані теки',
      'trashFolder' => 'Кошик',
      'ssl' => 'SSL',
      'createCase' => 'Створити звернення',
      'reply' => 'Авто-Відповідь',
      'caseDistribution' => 'Розподіл звернень',
      'replyEmailTemplate' => 'Відповісти за зразком',
      'replyFromAddress' => 'Відповісти адреси',
      'replyToAddress' => 'Адреса для отримання відповіді',
      'replyFromName' => 'Від імені відповісти',
      'targetUserPosition' => 'Цільовий Користувач Позиції',
    ),
    'tooltips' => 
    array (
      'reply' => 'Повідомити відправників, що їхні листи були отримані.',
      'createCase' => 'Автоматично створювати звернення з вхідних листів.',
      'replyToAddress' => 'Вкажіть адресу для цього ящика, щоб відповіді приходили до нього.',
      'caseDistribution' => 'Як звернення будуть призначатися: на користувача або серед групи.',
      'assignToUser' => 'Користувач, на якого листи та звернення будуть призначатися.',
      'team' => 'Група, до якої будуть відноситися листи і звернення.',
      'targetUserPosition' => 'Визначити положення користувачів, які будуть розподілені справ.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активний',
        'Inactive' => 'Неактивний',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Пряма завдання',
        'Round-Robin' => 'Циклічна',
        'Least-Busy' => 'Найбільш вільний',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Створити вхідну пошту',
      'IMAP' => 'IMAP',
      'Actions' => 'Дії',
      'Main' => 'Основне',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Не вдається підключитися до сервера IMAP',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Увімкнено',
      'clientId' => 'Клієнтський ID',
      'clientSecret' => 'Секрет Клієнта',
      'redirectUri' => 'URI перенаправлення',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Виберіть інтеграцію з меню.',
      'noIntegrations' => 'Жодних інтеграцій не доступно.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Отримати посвідчення OAuth 2.0 з Google Developers Console.</b></p><p>Відвідайте <a href="https://console.developers.google.com/project">Google Developers Console</a> для отримання посвідчення OAuth 2.0, таких як Клієнтський ID та Секрет Клієнта, що йдуть однаково для Google та FoxCRM додатків.</p>',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Піблікувати',
      'attachments' => 'Вкладення',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Формат дати',
      'timeFormat' => 'Формат часу',
      'timeZone' => 'Часовий пояс',
      'weekStart' => 'Перший день тижня',
      'thousandSeparator' => 'Розділювач ґруп розрядів',
      'decimalMark' => 'Розділювач десяткових',
      'defaultCurrency' => 'Валюта за замовчуванням',
      'currencyList' => 'Список валют',
      'language' => 'Мова',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизація',
      'smtpSecurity' => 'Безпека',
      'smtpUsername' => 'Ім\'я користувача',
      'emailAddress' => 'Емейл',
      'smtpPassword' => 'Пароль',
      'smtpEmailAddress' => 'Поштова скринька',
      'exportDelimiter' => 'Експортувати роздільник даних',
      'receiveAssignmentEmailNotifications' => 'Отримувати повідомлення при призначенні',
      'autoFollowEntityTypeList' => 'Авто-підписка',
      'signature' => 'Підпис емейла',
      'dashboardTabList' => 'Вкладка Список',
      'defaultReminders' => 'Default Reminders',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Неділя',
        1 => 'Понеділок',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Оповіщення',
    ),
    'tooltips' => 
    array (
      'autoFollowEntityTypeList' => 'Користувач буде автоматично підписаний на всі нові записи із вибраних типів сутностей, бачитиме інформацію у потоці й отримувати сповіщення.',
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'roles' => 'Ролі',
      'assignmentPermission' => 'Призначення дозволів',
    ),
    'links' => 
    array (
      'users' => 'Користувачі',
      'teams' => 'Команди',
    ),
    'tooltips' => 
    array (
      'assignmentPermission' => 'Дозволяє обмежити можливість користувачів пов\'язувати записи із іншими користувачами.

всим - без обмежень

команді - можна пов\'язувати із користувачами зі своєї команди

нікому - можна пов\'язувати лише із собою',
    ),
    'labels' => 
    array (
      'Access' => 'Доступ',
      'Create Role' => 'Створити роль',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'не встановлено',
        'enabled' => 'увімкнено',
        'disabled' => 'вимкнено',
      ),
      'levelList' => 
      array (
        'all' => 'всі',
        'team' => 'команда',
        'own' => 'власне',
        'no' => 'немає',
      ),
      'assignmentPermission' => 
      array (
        'all' => 'всі',
        'team' => 'команда',
        'not-set' => 'не встановлено',
      ),
    ),
    'actions' => 
    array (
      'read' => 'Читання',
      'edit' => 'Зміни',
      'delete' => 'Видалити',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Всі зміні у контролі доступом будуть прийняті після того, як кеш буде очищено.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'статус',
      'job' => 'Завдання',
      'scheduling' => 'Планування (оповіщення crontab)',
    ),
    'links' => 
    array (
      'log' => 'Лоґ',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Створити планове завдання',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Почистити',
        'CheckInboundEmails' => 'Перевірити пошту',
        'CheckEmailAccounts' => 'Перевірити особисті емейл-акаунти',
        'SendEmailReminders' => 'Відправити нагадування емейлом',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Замітка: Додайте цей рядок до файлу crontab для запуску Планувальника Завдань Fox:',
        'mac' => 'Замітка: Додайте цей рядок до файлу crontab для запуску Планувальника Завдань Fox:',
        'windows' => 'Замітка: Створити пакетний файл з наступними командами для запуску Планувальника Завдань Fox, використовуючи Планувальник Задач Windows:',
        'default' => 'Замітка: Додайте цю команду до Cron Job (Планувальник Задач):',
      ),
      'status' => 
      array (
        'Active' => 'Активний',
        'Inactive' => 'Неактивний',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'статус',
      'executionTime' => 'Час виконання',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Використовувати кеш',
      'dateFormat' => 'Формат дати',
      'timeFormat' => 'Формат часу',
      'timeZone' => 'Часовий пояс',
      'weekStart' => 'Перший день тижня',
      'thousandSeparator' => 'Розділювач ґруп розрядів',
      'decimalMark' => 'Розділювач десяткових',
      'defaultCurrency' => 'Валюта за замовчуванням',
      'baseCurrency' => 'Базова валюта',
      'currencyRates' => 'Курси обміну',
      'currencyList' => 'Список валют',
      'language' => 'Мова',
      'companyLogo' => 'Лоґотип компанії',
      'smtpServer' => 'Сервер',
      'smtpPort' => 'Порт',
      'smtpAuth' => 'Авторизація',
      'smtpSecurity' => 'Безпека',
      'smtpUsername' => 'Ім\'я користувача',
      'emailAddress' => 'Емейл',
      'smtpPassword' => 'Пароль',
      'outboundEmailFromName' => 'Від імені',
      'outboundEmailFromAddress' => 'З адреси',
      'outboundEmailIsShared' => 'Розшарене',
      'recordsPerPage' => 'Запис на сторінку',
      'recordsPerPageSmall' => 'Запис на сторінку (дрібно)',
      'tabList' => 'Вкладка Список',
      'quickCreateList' => 'Швидке створення списку',
      'exportDelimiter' => 'Експортувати роздільник даних',
      'globalSearchEntityList' => 'Ґлобальний пошук списку сутностей',
      'authenticationMethod' => 'Метод автентифікації',
      'ldapHost' => 'Хост',
      'ldapPort' => 'Порт',
      'ldapAuth' => 'Авторизація',
      'ldapUsername' => 'Ім\'я користувача',
      'ldapPassword' => 'Пароль',
      'ldapBindRequiresDn' => 'Прив\'язка по домену',
      'ldapBaseDn' => 'Базовий домен',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Спробувати відділити ім\'я користувача',
      'ldapCreateFoxUser' => 'Створити користувача в FoxCRM',
      'ldapSecurity' => 'Безпека',
      'ldapUserLoginFilter' => 'Фільтр лоґіну користувача',
      'ldapAccountDomainNameShort' => 'Account Domain Name Short',
      'ldapOptReferrals' => 'Оптові реферали',
      'disableExport' => 'Вимкнути експортування (доступно лише адміністру)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Посилати сповіщення на емейл при назначенні',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify about with Email upon Assignment',
      'b2cMode' => 'Режим В2С',
      'disableAvatars' => 'Вимкнути аватари',
      'followCreatedEntities' => 'Follow Created Entities',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Неділя',
        1 => 'Понеділок',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Число записів в панелях зв\'язків.',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => 'Система',
      'Locale' => 'Локаль',
      'SMTP' => 'Протокол SMTP',
      'Configuration' => 'Конфіґурація',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Установки валюти',
      'Currency Rtes' => 'Курси обміну валют',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'roles' => 'Ролі',
      'positionList' => 'Список посад',
    ),
    'links' => 
    array (
      'users' => 'Користувачі',
    ),
    'tooltips' => 
    array (
      'roles' => 'Ролі доступу. Користувачі цієї команди отримують рівень контролю доступу згідно обраних ролей.',
      'positionList' => 'Наявні посади у цій команді. Наприклад, продажник, менеджер.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Створити команду',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'userName' => 'Ім\'я Користувача',
      'title' => 'Посада',
      'isAdmin' => 'Адміністратор',
      'defaultTeam' => 'Команда за замовчуванням',
      'emailAddress' => 'Емейл',
      'phoneNumber' => 'Телефон',
      'roles' => 'Ролі',
      'teamRole' => 'Посада',
      'password' => 'Пароль',
      'passwordConfirm' => 'Підтвердити пароль',
      'newPassword' => 'Новий пароль',
      'newPasswordConfirm' => 'Підтвердити Новий Пароль',
      'avatar' => 'Аватар',
      'isActive' => 'Активний',
    ),
    'links' => 
    array (
      'teams' => 'Команди',
      'roles' => 'Ролі',
      'targetLists' => 'Цільові списки',
    ),
    'labels' => 
    array (
      'Create User' => 'Створити користувача',
      'Generate' => 'Згенерувати',
      'Access' => 'Доступ',
      'Preferences' => 'Переваги',
      'Change Password' => 'Змінити пароль',
      'Teams and Access Control' => 'Контроль команди і доступу',
      'Forgot Password?' => 'Забули пароль?',
      'Password Change Request' => 'Запит на зміну пароля',
      'Email Address' => 'Поштова скринька',
      'External Accounts' => 'Зовнішні рахунки',
      'Email Accounts' => 'Акаунти емейлів',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Всі записи, створені цим користувачем, відноситимуться до цієї команди за замовчуванням.',
      'userName' => 'Літери A-Z, цифри 0-9 і символ підкреслення - припустимі.',
      'isAdmin' => 'Користувач-адміністратор може отримати доступ до всього.',
      'isActive' => 'Якщо прапорець не встановлений, то користувач не зможе увійти.',
      'teams' => 'Команди, до яких цей користувач належить. Рівень контролю доступу успадковується від команди ролей.',
      'roles' => 'Додаткові ролі доступу. Застосовуйте їх, якщо користувач не належить до жодної команди або Ви потребуєте розширити рівень контролю доступу тільки для цього користувача.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Пароль буде вислано на поштову адресу користувача',
      'accountInfoEmailSubject' => 'Інформація про користувацький доступ FoxCRM',
      'accountInfoEmailBody' => 'Ваша інформація про доступ:

Ім\'я користувача: {userName}
Пароль: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Запит на зміну пароля',
      'passwordChangeLinkEmailBody' => 'Ви можете змінити свій пароль за цим посиланням {link}. Цей унікальний URL буде скоро прострочений.',
      'passwordChanged' => 'Пароль було змінено',
      'userCantBeEmpty' => 'Ім\'я користувача не може бути порожнім',
      'wrongUsernamePasword' => 'Хибне ім\'я користувача / пароль',
      'emailAddressCantBeEmpty' => 'Адреса електронної пошти не може бути порожньою',
      'userNameEmailAddressNotFound' => 'Ім\'я користувача / адресу електронної пошти не знайдено',
      'forbidden' => 'Недоступно, будь ласка, спробуйте пізніше',
      'uniqueLinkHasBeenSent' => 'Унікальне посилання була відправлена на вказану адресу електронної пошти.',
      'passwordChangedByRequest' => 'Пароль було змінено.',
    ),
    'boolFilters' => 
    array (
      'onlyMyTeam' => 'Тільки моя команда',
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'website' => 'Вебсайт',
      'phoneNumber' => 'Телефон',
      'billingAddress' => 'Платіжна адреса',
      'shippingAddress' => 'Поштова адреса',
      'description' => 'Опис',
      'sicCode' => 'Код SIC',
      'industry' => 'Промисловість',
      'type' => 'Тип',
      'contactRole' => 'Посада',
      'campaign' => 'Кампанія',
    ),
    'links' => 
    array (
      'contacts' => 'Контакти',
      'opportunities' => 'Угоди',
      'cases' => 'Кейси',
      'documents' => 'Документи',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Calls (expanded)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Цільові списки',
      'campaignLogRecords' => 'Журнал кампанія',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Замовник',
        'Investor' => 'Інвестор',
        'Partner' => 'Партнер',
        'Reseller' => 'Посередник',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Сільське господарство',
        'Advertising' => 'Реклама',
        'Apparel & Accessories' => 'Одяг та аксесуари',
        'Automotive' => 'Автомобільні',
        'Banking' => 'Банкінґ',
        'Biotechnology' => 'Біотехнології',
        'Chemical' => 'Хемія',
        'Computer' => 'Комп\'ютери',
        'Education' => 'Освіта',
        'Electronics' => 'Електроніка',
        'Entertainment & Leisure' => 'Розваги та дозвілля',
        'Finance' => 'Фінанси',
        'Food & Beverage' => 'Їжа та напої',
        'Grocery' => 'Доставка',
        'Insurance' => 'Страхування',
        'Legal' => 'Право',
        'Publishing' => 'Видавництво',
        'Real Estate' => 'Нерухомість',
        'Service' => 'Сервіс',
        'Sports' => 'Спорт',
        'Software' => 'Проґрамне забезпечення',
        'Technology' => 'Технолоґія',
        'Telecommunications' => 'Телекомунікації',
        'Television' => 'Телебачення',
        'Transportation' => 'Транспорт',
        'Venture Capital' => 'Венчурний капітал',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Створити контраґента',
      'Copy Billing' => 'Копія рахунку',
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
      'month' => 'місяць',
      'week' => 'тиждень',
      'day' => 'день',
      'agendaWeek' => 'тиждень',
      'agendaDay' => 'день',
    ),
    'labels' => 
    array (
      'Today' => 'Сьогодні',
      'Create' => 'Створити',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'parent' => 'Джерело',
      'status' => 'статус',
      'dateStart' => 'Дата початку',
      'dateEnd' => 'Дата закінчення',
      'direction' => 'Напрямок',
      'duration' => 'Тривалість',
      'description' => 'Опис',
      'users' => 'Користувачі',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'reminders' => 'Нагадування',
      'account' => 'Контраґент',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Заплановано',
        'Held' => 'Виконано',
        'Not Held' => 'Не відбулося',
      ),
      'direction' => 
      array (
        'Outbound' => 'Вихідне',
        'Inbound' => 'Вхідне',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нема',
        'Accepted' => 'Прийнято',
        'Declined' => 'Відхилено',
        'Tentative' => 'Попереднє',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Позначити виконаним',
      'setNotHeld' => 'Позначити невиконаним',
    ),
    'labels' => 
    array (
      'Create Call' => 'Створити дзвінок',
      'Set Held' => 'Позначити виконаним',
      'Set Not Held' => 'Позначити невиконаним',
      'Send Invitations' => 'Відправити запрошення',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Заплановано',
      'held' => 'Виконано',
      'todays' => 'Сьогоднішнє',
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'description' => 'Опис',
      'status' => 'статус',
      'type' => 'Тип',
      'startDate' => 'Дата Початку',
      'endDate' => 'Дата Закінчення',
      'targetLists' => 'Цільові списки',
      'sentCount' => 'Відправлено',
      'openedCount' => 'Відкрито',
      'clickedCount' => 'Цикнуте',
      'optedOutCount' => 'Відмовлено',
      'bouncedCount' => 'Відшито',
      'hardBouncedCount' => 'Жорстко відшито',
      'softBouncedCount' => 'М\'яко відшито',
      'leadCreatedCount' => 'Ліди створені',
      'revenue' => 'Виручка',
    ),
    'links' => 
    array (
      'targetLists' => 'Цільові списки',
      'accounts' => 'Контраґенти',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'opportunities' => 'Угоди',
      'campaignLogRecords' => 'Лоґ',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Емейл',
        'Web' => 'Веб',
        'Television' => 'Телебачення',
        'Radio' => 'Радіо',
        'Newsletter' => 'Розсилка',
        'Mail' => 'Пошта',
      ),
      'status' => 
      array (
        'Planning' => 'Планування',
        'Active' => 'Активний',
        'Inactive' => 'Неактивний',
        'Complete' => 'Повне',
      ),
    ),
    'labels' => 
    array (
      'Create Campaign' => 'Створити кампанію',
      'Target Lists' => 'Цільові списки',
      'Statistics' => 'Статистика',
      'hard' => 'жорстко',
      'soft' => 'м\'яко',
    ),
    'presetFilters' => 
    array (
      'active' => 'Активний',
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'action' => 'Дія',
      'actionDate' => 'Дата',
      'data' => 'Дані',
      'campaign' => 'Кампанія',
      'parent' => 'Ціль',
      'object' => 'Об\'єкт',
      'application' => 'Додаток',
    ),
    'options' => 
    array (
      'action' => 
      array (
        'Sent' => 'Відправлено',
        'Opened' => 'Відкрито',
        'Opted Out' => 'Відмовлено',
        'Bounced' => 'Відшито',
        'Clicked' => 'Цикнуте',
        'Lead Created' => 'Лід створено',
      ),
    ),
    'labels' => 
    array (
      'All' => 'Все',
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'number' => 'Нумер',
      'status' => 'статус',
      'account' => 'Контраґент',
      'contact' => 'Контакт',
      'priority' => 'Пріоритет',
      'type' => 'Тип',
      'description' => 'Опис',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новий',
        'Assigned' => 'На розгляді',
        'Pending' => 'Поточне',
        'Closed' => 'Закрито',
        'Rejected' => 'Відмовлено',
        'Duplicate' => 'Дуплікат',
      ),
      'priority' => 
      array (
        'Low' => 'Низько',
        'Normal' => 'Нормальний',
        'High' => 'Високо',
        'Urgent' => 'Терміново',
      ),
      'type' => 
      array (
        'Question' => 'Питання',
        'Incident' => 'Випадок',
        'Problem' => 'Проблема',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Створити кейс',
    ),
    'presetFilters' => 
    array (
      'open' => 'Відкрити',
      'closed' => 'Закрито',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'title' => 'Посада',
      'account' => 'Контраґент',
      'accounts' => 'Контраґенти',
      'phoneNumber' => 'Телефон',
      'accountType' => 'Тип контраґента',
      'doNotCall' => 'Не дзвонити',
      'address' => 'Адреса',
      'opportunityRole' => 'Роль угоди',
      'accountRole' => 'Посада',
      'description' => 'Опис',
      'campaign' => 'Кампанія',
      'targetLists' => 'Цільові списки',
      'targetList' => 'Цільовий список',
    ),
    'links' => 
    array (
      'opportunities' => 'Угоди',
      'cases' => 'Кейси',
      'targetLists' => 'Цільові списки',
      'campaignLogRecords' => 'Журнал кампанія',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Створити контакт',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Немає--',
        'Decision Maker' => 'Приймає рішення',
        'Evaluator' => 'Оцінювач',
        'Influencer' => 'Впливає',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Створити документ',
      'Details' => 'Деталі',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'status' => 'статус',
      'file' => 'Файл',
      'type' => 'Тип',
      'source' => 'Джерело',
      'publishDate' => 'Дата публікації',
      'expirationDate' => 'Термін придатности',
      'description' => 'Опис',
    ),
    'links' => 
    array (
      'accounts' => 'Контраґенти',
      'opportunities' => 'Угоди',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Активний',
        'Draft' => 'Чернетка',
        'Expired' => 'Прострочено',
        'Canceled' => 'Скасовано',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активний',
      'draft' => 'Чернетка',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Перетворено на',
      'Create Lead' => 'Створили лід',
      'Convert' => 'Конвертувати',
    ),
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'title' => 'Посада',
      'website' => 'Вебсайт',
      'phoneNumber' => 'Телефон',
      'accountName' => 'Ім\'я контраґента',
      'doNotCall' => 'Не дзвонити',
      'address' => 'Адреса',
      'status' => 'статус',
      'source' => 'Джерело',
      'opportunityAmount' => 'Сума угоди',
      'opportunityAmountConverted' => 'Сума угоди (конвертована)',
      'description' => 'Опис',
      'createdAccount' => 'Контраґент',
      'createdContact' => 'Контакт',
      'createdOpportunity' => 'Угода',
      'campaign' => 'Кампанія',
      'targetLists' => 'Цільові списки',
      'targetList' => 'Цільовий список',
    ),
    'links' => 
    array (
      'targetLists' => 'Цільові списки',
      'campaignLogRecords' => 'Журнал кампанія',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Новий',
        'Assigned' => 'На розгляді',
        'In Process' => 'У процесі',
        'Converted' => 'Конвертована',
        'Recycled' => 'У кошику',
        'Dead' => 'Мертве',
      ),
      'source' => 
      array (
        'Call' => 'Дзвінок',
        'Email' => 'Емейл',
        'Existing Customer' => 'Існуючі замовники',
        'Partner' => 'Партнер',
        'Public Relations' => 'Зв\'язки із громадськістю',
        'Web Site' => 'Вебсайт',
        'Campaign' => 'Кампанія',
        'Other' => 'Додатково',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Активний',
      'converted' => 'Конвертована',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'parent' => 'Джерело',
      'status' => 'статус',
      'dateStart' => 'Дата початку',
      'dateEnd' => 'Дата закінчення',
      'duration' => 'Тривалість',
      'description' => 'Опис',
      'users' => 'Користувачі',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'reminders' => 'Нагадування',
      'account' => 'Контраґент',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Заплановано',
        'Held' => 'Виконано',
        'Not Held' => 'Не відбулося',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Нема',
        'Accepted' => 'Прийнято',
        'Declined' => 'Відхилено',
        'Tentative' => 'Попереднє',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Позначити виконаним',
      'setNotHeld' => 'Позначити невиконаним',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Створити зустріч',
      'Set Held' => 'Позначити виконаним',
      'Set Not Held' => 'Позначити невиконаним',
      'Send Invitations' => 'Відправити запрошення',
      'on time' => 'на час',
      'before' => 'перед',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Заплановано',
      'held' => 'Виконано',
      'todays' => 'Сьогоднішнє',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'account' => 'Контраґент',
      'stage' => 'Стадія',
      'amount' => 'Сума',
      'probability' => 'Імовірність, %',
      'leadSource' => 'Джерело ліда',
      'doNotCall' => 'Не дзвонити',
      'closeDate' => 'Дата закриття',
      'contacts' => 'Контакти',
      'description' => 'Опис',
      'amountConverted' => 'Сума (конвертирована)',
      'amountWeightedConverted' => 'Зважена сума',
      'campaign' => 'Кампанія',
    ),
    'links' => 
    array (
      'contacts' => 'Контакти',
      'documents' => 'Документи',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Проспектінґ',
        'Qualification' => 'Кваліфікація',
        'Needs Analysis' => 'Вимагає аналізу',
        'Value Proposition' => 'Цінова пропозиція',
        'Id. Decision Makers' => 'Визначення осіб, приймаючих рішення',
        'Perception Analysis' => 'Аналізу сприйняття',
        'Proposal/Price Quote' => 'Квота пропозицій/цін',
        'Negotiation/Review' => 'Заперечення/перегляд',
        'Closed Won' => 'Закрито переможно',
        'Closed Lost' => 'Закрито провалом',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Створити угоду',
    ),
    'presetFilters' => 
    array (
      'open' => 'Відкрити',
      'won' => 'Переможні',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'emailAddress' => 'Емейл',
      'title' => 'Посада',
      'website' => 'Вебсайт',
      'accountName' => 'Ім\'я контраґента',
      'phoneNumber' => 'Телефон',
      'doNotCall' => 'Не дзвонити',
      'address' => 'Адреса',
      'description' => 'Опис',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Створити ціль',
      'Convert to Lead' => 'Конвертувати на лід',
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'description' => 'Опис',
      'entryCount' => 'Облік записа',
      'campaigns' => 'Кампанії',
      'endDate' => 'Дата Закінчення',
      'targetLists' => 'Цільові списки',
    ),
    'links' => 
    array (
      'accounts' => 'Контраґенти',
      'contacts' => 'Контакти',
      'leads' => 'Ліди',
      'campaigns' => 'Кампанії',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Email' => 'Емейл',
        'Web' => 'Веб',
        'Television' => 'Телебачення',
        'Radio' => 'Радіо',
        'Newsletter' => 'Розсилка',
      ),
    ),
    'labels' => 
    array (
      'Create TargetList' => 'Створити цільовий список',
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'name' => 'Ім\'я',
      'parent' => 'Джерело',
      'status' => 'статус',
      'dateStart' => 'Дата початку',
      'dateEnd' => 'Належна дата',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Пріоритет',
      'description' => 'Опис',
      'isOverdue' => 'Прострочено',
      'account' => 'Контраґент',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Вкладення',
    ),
    'links' => 
    array (
      'attachments' => 'Вкладення',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Not Started' => 'Не почалося',
        'Started' => 'Почалося',
        'Completed' => 'Завершено',
        'Canceled' => 'Скасовано',
        'Deferred' => 'Відстрочено',
      ),
      'priority' => 
      array (
        'Low' => 'Низько',
        'Normal' => 'Нормальний',
        'High' => 'Високо',
        'Urgent' => 'Терміново',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Створити завдання',
      'Complete' => 'Повне',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Актуально',
      'completed' => 'Завершено',
      'todays' => 'Сьогоднішнє',
      'overdue' => 'Прострочено',
    ),
  ),
);

?>