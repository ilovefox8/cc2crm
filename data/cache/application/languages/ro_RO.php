<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Activat',
      'Disabled' => 'Dezactivat',
      'System' => 'Sistem',
      'Users' => 'Utilizatori',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Personalizare',
      'Available Fields' => 'Campuri valabile',
      'Layout' => 'Aspect',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Adauga Panou',
      'Add Field' => 'Adauga Camp',
      'Settings' => 'Setari',
      'Scheduled Jobs' => 'Activitati Planificate',
      'Upgrade' => 'Actualizare',
      'Clear Cache' => 'Sterge Cache',
      'Rebuild' => 'Recontruire',
      'Teams' => 'Echipe',
      'Roles' => 'Roluri',
      'Outbound Emails' => 'Email-uri trimise',
      'Inbound Emails' => 'Email-uri intrate',
      'Email Templates' => 'Template-uri Email',
      'Import' => 'Importare',
      'Layout Manager' => 'Manager Aspect',
      'User Interface' => 'Interfata Utilizator',
      'Auth Tokens' => 'Token-uri Autentificare',
      'Authentication' => 'Authentication',
      'Currency' => 'Currency',
      'Integrations' => 'Integrations',
      'Extensions' => 'Extensions',
      'Upload' => 'Upload',
      'Installing...' => 'Installing...',
      'Upgrading...' => 'Upgrading...',
      'Upgraded successfully' => 'Upgraded successfully',
      'Installed successfully' => 'Installed successfully',
      'Ready for upgrade' => 'Ready for upgrade',
      'Run Upgrade' => 'Run Upgrade',
      'Install' => 'Install',
      'Ready for installation' => 'Ready for installation',
      'Uninstalling...' => 'Uninstalling...',
      'Uninstalled' => 'Uninstalled',
      'Create Entity' => 'Create Entity',
      'Edit Entity' => 'Edit Entity',
      'Create Link' => 'Create Link',
      'Edit Link' => 'Edit Link',
      'Notifications' => 'Notifications',
      'Field Manager' => 'Manager Campuri',
    ),
    'layouts' => 
    array (
      'list' => 'Lista',
      'detail' => 'Detalii',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Filtre Cautare',
      'massUpdate' => 'Actualizeaza tot',
      'relationships' => 'Relatii',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresa',
      'array' => 'Array',
      'foreign' => 'Foreign',
      'duration' => 'Durata',
      'password' => 'Parola',
      'parsonName' => 'Numele Persoanei',
      'autoincrement' => 'Auto-incrementare',
      'bool' => 'Bool',
      'currency' => 'Valuta',
      'date' => 'Data',
      'datetime' => 'DataTimp',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Multiplu',
      'linkParent' => 'Link Parinte',
      'multienim' => 'Multienum',
      'phone' => 'Telefon',
      'text' => 'Text',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Fisier',
      'image' => 'Imagine',
      'multiEnum' => 'Multi-Enum',
    ),
    'fields' => 
    array (
      'type' => 'Tip',
      'name' => 'Nume',
      'label' => 'Eticheta',
      'required' => 'Obligatoriu',
      'default' => 'Initial',
      'maxLength' => 'Lungime Maxima',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Link',
      'field' => 'Camp',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Tranducere',
      'previewSize' => 'Previzualizare Marime',
      'noEmptyString' => 'No Empty String',
      'defaultType' => 'Default Type',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Aplicatia se va actualiza la versiunea <strong>{version}</strong>. S-ar putea sa dureze putin...',
      'upgradeDone' => 'Aplicatia a fost actualizata la versiunea <strong>{version}</strong>. Va rugam sa faceti Refresh.',
      'upgradeBackup' => 'Va rugam sa faceti backup bazei de date si aplicatiei inainte de a face actualizarea.',
      'thousandSeparatorEqualsDecimalMark' => 'Separatorul de mii nu poate fi acelasi cu separatorul de zecimale',
      'userHasNoEmailAddress' => 'Utilizatorul nu are adresa de email.',
      'selectEntityType' => 'Selectati tipul entitatii din meniul din stanga.',
      'selectUpgradePackage' => 'Selectati packetul de actualizare',
      'downloadUpgradePackage' => 'Download needed upgrade package(s) <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/">here</a>.',
      'selectLayout' => 'Selectati aspectul dorit din meniul din stanga si editati-l.',
      'selectExtensionPackage' => 'Select extension package',
      'extensionInstalled' => 'Extension {name} {version} has been installed.',
      'installExtension' => 'Extension {name} {version} is ready for an installation.',
      'uninstallConfirmation' => 'Are you really want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Setarile de sistem ale aplicatiei.',
      'scheduledJob' => 'Activitati care sunt executate de cron.',
      'upgrade' => 'Actualizare aplicatie.',
      'clearCache' => 'Stergeti tot cache-ul din backend.',
      'rebuild' => 'Reconstruire backend si stergere cache.',
      'users' => 'Management Utilizatori.',
      'teams' => 'Management Echipe.',
      'roles' => 'Management Roluri.',
      'outboundEmails' => 'Setari SMTP pentru trimitere email-uri.',
      'inboundEmails' => 'Grup conturi de email IMAP. Import email și email-la-caz.',
      'emailTemplates' => 'Template-uri pentru email-urile trimise.',
      'import' => 'Importare din fisier CSV.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => 'Create custom entities, edit existing ones. Manage field and relationships.',
      'userInterface' => 'Configurare UI.',
      'authTokens' => 'Sesiuni Auth Active. Adresa IP si data ultimei accesari.',
      'authentication' => 'Authentication setttings.',
      'currency' => 'Currency settings and rates.',
      'extensions' => 'Install or uninstall extensions.',
      'integrations' => 'Integration with third-party services.',
      'notifications' => 'In-app and email notification settings.',
      'fieldManager' => 'Creaza campuri noi, sau personalizeaza-le pe cele existente.',
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
      'user' => 'Utilizator',
      'ipAddress' => 'Adresa IP',
      'lastAccess' => 'Data ultimei accesari',
      'createdAt' => 'Data conectarii',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Title',
      'dateFrom' => 'Date From',
      'dateTo' => 'Date To',
      'autorefreshInterval' => 'Auto-refresh Interval',
      'displayRecords' => 'Display Records',
      'isDoubleHeight' => 'Height 2x',
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
      'name' => 'Subiect',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateSent' => 'Data trimiterii',
      'from' => 'De la',
      'to' => 'Catre',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'In format Html',
      'body' => 'Corp',
      'subject' => 'Subiect',
      'attachments' => 'Atasamente',
      'selectTemplate' => 'Selecteaza Template',
      'fromEmailAddress' => 'De la adresa',
      'toEmailAddresses' => 'La adresa',
      'emailAddress' => 'Adresa Email',
      'deliveryDate' => 'Delivery Date',
      'account' => 'Account',
      'users' => 'Users',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Ciorna',
      'Sending' => 'Se trimite',
      'Sent' => 'Trimis',
      'Archived' => 'Arhivat',
      'Received' => 'Received',
    ),
    'labels' => 
    array (
      'Create Email' => 'Arhiveaza Email',
      'Archive Email' => 'Archive Email',
      'Compose' => 'Compune',
      'Reply' => 'Reply',
      'Reply to All' => 'Reply to All',
      'Forward' => 'Forward',
      'Original message' => 'Original message',
      'Forwarded message' => 'Forwarded message',
      'Email Accounts' => 'Email Accounts',
      'Send Test Email' => 'Send Test Email',
      'Send' => 'Send',
      'Email Address' => 'Email Address',
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
      'sent' => 'Trimis',
      'archived' => 'Arhivat',
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
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Username',
      'password' => 'Password',
      'port' => 'Port',
      'monitoredFolders' => 'Monitored Folders',
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
        'Active' => 'Active',
        'Inactive' => 'Inactive',
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
      'couldNotConnectToImap' => 'Could not connect to IMAP server',
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
      'Primary' => 'Primar',
      'Opted Out' => 'Optat',
      'Invalid' => 'Invalid',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Status',
      'isHtml' => 'In format Html',
      'body' => 'Corp',
      'subject' => 'Subiect',
      'attachments' => 'Atasamente',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Creare Template Email',
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
      'version' => 'Version',
      'description' => 'Description',
      'isInstalled' => 'Installed',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Uninstall',
      'Install' => 'Install',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Extension {name} has been uninstalled',
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
      'User' => 'Utilizator',
      'Team' => 'Echipa',
      'Role' => 'Rol',
      'EmailTemplate' => 'Template Email',
      'EmailAccount' => 'Email Account',
      'EmailAccountScope' => 'Email Account',
      'OutboundEmail' => 'Email iesit ',
      'ScheduledJob' => 'Activitati programate',
      'ExternalAccount' => 'External Account',
      'Extension' => 'Extension',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Intrari Email',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Account' => 'Cont',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Tinta',
      'Opportunity' => 'Oportunitate',
      'Meeting' => 'Intalnire',
      'Calendar' => 'Calendar',
      'Call' => 'Apel',
      'Task' => 'Activitate',
      'Case' => 'Caz',
      'Document' => 'Document',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Email-uri',
      'User' => 'Utilizatori',
      'Team' => 'Echipe',
      'Role' => 'Roluri',
      'EmailTemplate' => 'Template-uri Email',
      'EmailAccount' => 'Email Accounts',
      'EmailAccountScope' => 'Email Accounts',
      'OutboundEmail' => 'Email-uri trimise',
      'ScheduledJob' => 'Activitati Planificate',
      'ExternalAccount' => 'External Accounts',
      'Extension' => 'Extensions',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Email-uri intrate',
      'Stream' => 'Stream',
      'Import' => 'Import Results',
      'Account' => 'Conturi',
      'Contact' => 'Contacte',
      'Lead' => 'Lead-uri',
      'Target' => 'Tinte',
      'Opportunity' => 'Oportunitati',
      'Meeting' => 'Intalniri',
      'Calendar' => 'Calendar',
      'Call' => 'Apeluri',
      'Task' => 'Activitati',
      'Case' => 'Cazuri',
      'Document' => 'Documents',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Misc' => 'Miscibil',
      'Merge' => 'Imbina',
      'None' => 'Nici unul',
      'by' => 'de',
      'Saved' => 'Salvat',
      'Error' => 'Eroare',
      'Select' => 'Selecteaza',
      'Not valid' => 'Invalid',
      'Please wait...' => 'Va rugam asteptati...',
      'Please wait' => 'Va rugam asteptati',
      'Loading...' => 'Se incarca...',
      'Uploading...' => 'Se incarca...',
      'Sending...' => 'Se trimite...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Sters',
      'Posted' => 'Publicat',
      'Linked' => 'Conectat',
      'Unlinked' => 'Deconectat',
      'Access denied' => 'Acces refuzat',
      'Access' => 'Acces',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Inregistrarea a fost stearsa',
      'Wrong username/password' => 'Numele de utilizator, sau parola nu sunt corecte',
      'Post cannot be empty' => 'Aticolul nu poate fi gol',
      'Removing...' => 'Se sterge...',
      'Unlinking...' => 'Se deconecteaza...',
      'Posting...' => 'Se publica...',
      'Username can not be empty!' => 'Numele de utilizator nu poate fi gol!',
      'Cache is not enabled' => 'Cache-ul nu este activat',
      'Cache has been cleared' => 'Cache-ul a fost sters',
      'Rebuild has been done' => 'Reconstruit cu succes',
      'Saving...' => 'Se salveaza...',
      'Modified' => 'Modificat',
      'Created' => 'Creat',
      'Create' => 'Creaza',
      'create' => 'creaza',
      'Overview' => 'Prezentare generala',
      'Details' => 'Detalii',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Adauga Dashlet',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Adauga',
      'Reset' => 'Reset',
      'Menu' => 'Meniu',
      'More' => 'More',
      'Search' => 'Cautare',
      'Only My' => 'Doar eu',
      'Open' => 'Deschide',
      'Admin' => 'Admin',
      'About' => 'Despre',
      'Refresh' => 'Reimprospatare',
      'Remove' => 'Sterge',
      'Options' => 'Optiuni',
      'Username' => 'Nume Utilizator',
      'Password' => 'Parola',
      'Login' => 'Conectare',
      'Log Out' => 'Deconectare',
      'Preferences' => 'Preferinte',
      'State' => 'Stat',
      'Street' => 'Strada',
      'Country' => 'Tara',
      'City' => 'Oras',
      'PostalCode' => 'Code Postal ',
      'Followed' => 'Urmarit',
      'Follow' => 'Urmareste',
      'Clear Local Cache' => 'Stergere Cache Local',
      'Actions' => 'Actiuni',
      'Delete' => 'Sterge',
      'Update' => 'Actualizare',
      'Save' => 'Salveaza',
      'Edit' => 'Editare',
      'View' => 'View',
      'Cancel' => 'Renunta',
      'Unlink' => 'Dezleaga',
      'Mass Update' => 'Actualizeaza tot',
      'Export' => 'Export',
      'No Data' => 'Nu sunt date',
      'No Access' => 'No Access',
      'All' => 'Toate',
      'Active' => 'Activ',
      'Inactive' => 'Inactiv',
      'Write your comment here' => 'Scrie comentariul aici',
      'Post' => 'Publica',
      'Stream' => 'Curent',
      'Show more' => 'Afiseaza mai mult',
      'Dashlet Options' => 'Optiuni Dashlet',
      'Full Form' => 'Forma intreaga',
      'Insert' => 'Inserare',
      'Person' => 'Persoana',
      'First Name' => 'Prenume',
      'Last Name' => 'Nume',
      'Original' => 'Original',
      'You' => 'Tu',
      'you' => 'tu',
      'change' => 'schimba',
      'Change' => 'Change',
      'Primary' => 'Primar',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicat',
      'Notifications' => 'Notifications',
      'Mark all read' => 'Mark all read',
      'See more' => 'See more',
      'Today' => 'Today',
      'Tomorrow' => 'Tomorrow',
      'Yesterday' => 'Yesterday',
      'Submit' => 'Submit',
      'Close' => 'Close',
      'Yes' => 'Yes',
      'No' => 'No',
      'Select All Result' => 'Select All Result',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Create InboundEmail' => 'Creare Email intrare',
      'Activities' => 'Activitati',
      'History' => 'Istoric',
      'Attendees' => 'Participanti',
      'Schedule Meeting' => 'Programeaza Intalnire',
      'Schedule Call' => 'Programeaza Apel',
      'Compose Email' => 'Compune Email',
      'Log Meeting' => 'Log Intalnire',
      'Log Call' => 'Log Apel',
      'Archive Email' => 'Arhiveaza Email',
      'Create Task' => 'Creaza Activitate',
      'Tasks' => 'Activitati',
      'Add Filter' => 'Adauga Filtru',
      'Save Filters' => 'Save Filters',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Nu ai modificat inregistrarea',
      'duplicate' => 'Inregistrarea pe care o creezi pare sa fie duplicat',
      'fieldIsRequired' => '{field} este obligatoriu',
      'fieldShouldBeEmail' => '{field} trebuie sa fie o adresa de email valida',
      'fieldShouldBeFloat' => '{field} trebuie sa fie float valid',
      'fieldShouldBeInt' => '{field} trebuie sa fie intreg valid',
      'fieldShouldBeDate' => '{field} trebuie sa fie data valida',
      'fieldShouldBeDatetime' => '{field} trebuie sa fie data/timp valid',
      'fieldShouldAfter' => '{field} trebuie sa fie dupa {otherField}',
      'fieldShouldBefore' => '{field} trebuie sa fie inainte de {otherField}',
      'fieldShouldBeBetween' => '{field} trebuie sa fie intre {min} si  {max}',
      'fieldShouldBeLess' => '{field} trebuie sa fie mai putin de {value}',
      'fieldShouldBeGreater' => '{field} trebuie sa fie mai mare de {value}',
      'fieldBadPasswordConfirm' => '{field} confirmat in mod necorespunzator',
      'resetPreferencesDone' => 'Preferences has been reset to defaults',
      'assignmentEmailNotificationSubject' => 'EspoCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} has assigned {entityType} \'{Entity.name}\' to you.

{recordUrl}',
      'confirmation' => 'Are you sure?',
      'resetPreferencesConfirmation' => 'Are you sure you want to reset preferences to defaults?',
      'removeRecordConfirmation' => 'Are you sure you want to remove the record?',
      'unlinkRecordConfirmation' => 'Are you sure you want to unlink relationship?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected records?',
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
      'onlyMy' => 'Doar eu',
      'followed' => 'Followed',
      'open' => 'Deschide',
      'active' => 'Activ',
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
      'name' => 'Nume',
      'firstName' => 'Prenume',
      'lastName' => 'Nume',
      'salutationName' => 'Salut',
      'assignedUser' => 'Utilizator alocat',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Nume utilizator alocat',
      'teams' => 'Echipe',
      'createdAt' => 'Creat la',
      'modifiedAt' => 'Modificat la',
      'createdBy' => 'Creat de',
      'modifiedBy' => 'Modificat de',
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
      'billingAddressCity' => 'Oras',
      'billingAddressCountry' => 'Tara',
      'billingAddressPostalCode' => 'Code Postal ',
      'billingAddressState' => 'Stat',
      'billingAddressStreet' => 'Strada',
      'addressCity' => 'Oras',
      'addressStreet' => 'Strada',
      'addressCountry' => 'Tara',
      'addressState' => 'Stat',
      'addressPostalCode' => 'Code Postal ',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
      'title' => 'Titlu',
      'dateFrom' => 'Data - de la',
      'dateTo' => 'Data - pana la',
      'autorefreshInterval' => 'Interval Auto-reinprospatare',
      'displayRecords' => 'Afisare inregistrari',
    ),
    'links' => 
    array (
      'assignedUser' => 'Assigned User',
      'createdBy' => 'Created By',
      'modifiedBy' => 'Modified By',
      'team' => 'Team',
      'roles' => 'Roles',
      'teams' => 'Echipe',
      'users' => 'Utilizatori',
      'parent' => 'Parent',
      'children' => 'Children',
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunitati',
      'leads' => 'Lead-uri',
      'meetings' => 'Intalniri',
      'calls' => 'Apeluri',
      'tasks' => 'Activitati',
      'emails' => 'Email-uri',
      'accounts' => 'Accounts',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Curent',
      'Leads' => 'Lead-urile mele',
      'Opportunities' => 'Oportunitatile mele',
      'Tasks' => 'Activitatile mele',
      'Cases' => 'Cazurile mele',
      'Calendar' => 'Calendar',
      'Calls' => 'My Calls',
      'Meetings' => 'My Meetings',
      'OpportunitiesByStage' => 'Oportunitati in functie de stadiu',
      'OpportunitiesByLeadSource' => 'Oportunitati in functie de Sursal Lead-ului',
      'SalesByMonth' => 'Vanzari pe luna',
      'SalesPipeline' => 'Flux Vanzari',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} creat {entityType} {entity}',
      'createAssigned' => '{user} creat {entityType} {entity} si alocat lui {assignee}',
      'assign' => '{user} alocat {entityType} {entity} lui {assignee}',
      'post' => '{user} publicat la {entityType} {entity}',
      'attach' => '{user} atasat la {entityType} {entity}',
      'status' => '{user} actualizat {field} pe {entityType} {entity}',
      'update' => '{user} actualizat {entityType} {entity}',
      'createRelated' => '{user} creat {relatedEntityType} {relatedEntity} si conectat cu {entityType} {entity}',
      'mentionInPost' => '{user} mentioned {mentioned} in {entityType} {entity}',
      'createThis' => '{user} a creat acest {entityType}',
      'createAssignedThis' => '{user} a creat acest {entityType} alocat lui {assignee}',
      'assignThis' => '{user} a alocat acest {entityType} lui {assignee}',
      'postThis' => '{user} publicat',
      'attachThis' => '{user} atasat',
      'statusThis' => '{user} a actualizat {field}',
      'updateThis' => '{user} a actualizat acest {entityType}',
      'createRelatedThis' => '{user} a creat {relatedEntityType} {relatedEntity} si l-a conectat cu {entityType}',
      'emailReceivedFromThis' => 'Email received from {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} a fost primit',
      'emailReceivedInitialThis' => 'Email received, this {entityType} created',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} a fost primit pentru {entityType} {entity}',
      'emailReceivedInitial' => 'Email received: {entityType} {entity} created',
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
        'Mr.' => 'Dl.',
        'Mrs.' => 'D-na.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Dr.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romana',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamese',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Pornit',
        'notOn' => 'Oprit',
        'after' => 'Dupa',
        'before' => 'Inainte',
        'between' => 'Intre',
        'today' => 'Astazi',
        'past' => 'Past',
        'future' => 'Future',
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
        'equals' => 'Egal',
        'notEquals' => 'Inegal',
        'greaterThan' => 'Mai mare de',
        'lessThan' => 'Mai mic de',
        'greaterThanOrEquals' => 'Mai mare sau egal',
        'lessThanOrEquals' => 'Mai mic sau egal',
        'between' => 'Intre',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Nici unul',
        '0.5' => '30 secunde',
        1 => '1 minut',
        2 => '2 minute',
        5 => '5 minute',
        10 => '10 minute',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Altele',
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
        'NOTICE' => 'Puteti gasi traducerea aici: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Bold',
          'italic' => 'Italic',
          'underline' => 'Subliniat',
          'strike' => 'Strike',
          'clear' => 'Sterge stil font',
          'height' => 'Inaltime linie',
          'name' => 'Familie Font ',
          'size' => 'Marime Font',
        ),
        'image' => 
        array (
          'image' => 'Imagine',
          'insert' => 'Inserare Imagine',
          'resizeFull' => 'Redimensionare completa',
          'resizeHalf' => 'Redimensionare la jumatate',
          'resizeQuarter' => 'Redimensionare la sfert',
          'floatLeft' => 'Aliniere la stanga',
          'floatRight' => 'Aliniere la dreapta',
          'floatNone' => 'Fara aliniere',
          'dragImageHere' => 'Trage imaginea aici',
          'selectFromFiles' => 'Selecteaza din fisiere',
          'url' => 'URL Imagine',
          'remove' => 'Stergere imagine',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Inserare Link',
          'unlink' => 'Dezleaga',
          'edit' => 'Editare',
          'textToDisplay' => 'Text de afisat',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Deschidere in fereastra noua',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Link Video ',
          'insert' => 'Inserare Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabel',
        ),
        'hr' => 
        array (
          'insert' => 'Inserare Linie Orizontala',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Citat',
          'pre' => 'Cod',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Lista neordonata',
          'ordered' => 'Lista ordonata',
        ),
        'options' => 
        array (
          'help' => 'Ajutor',
          'fullscreen' => 'Ecran complet',
          'codeview' => 'Vizualizare cod',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Neindentat',
          'indent' => 'Indentat',
          'left' => 'Aliniere stanga',
          'center' => 'Aliniere centru',
          'right' => 'Aliniere dreapta',
          'justify' => 'Justify complet',
        ),
        'color' => 
        array (
          'recent' => 'Culoarea recenta',
          'more' => 'Mai multe culori',
          'background' => 'Culoare fundal',
          'foreground' => 'Culoare font',
          'transparent' => 'Transparent',
          'setTransparent' => 'Setare transparenta',
          'reset' => 'Reset',
          'resetToDefault' => 'Reinitializare setari',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Scurtaturi taste',
          'close' => 'Inchide',
          'textFormatting' => 'Formatare Text',
          'action' => 'Actiune',
          'paragraphFormatting' => 'Formatare Paragraf',
          'documentStyle' => 'Stil Document ',
        ),
        'history' => 
        array (
          'undo' => 'Undo',
          'redo' => 'Redo',
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
      'Run Import' => 'Run Import',
      'Back' => 'Back',
      'Field Mapping' => 'Field Mapping',
      'Default Values' => 'Default Values',
      'Add Field' => 'Add Field',
      'Created' => 'Created',
      'Updated' => 'Updated',
      'Result' => 'Result',
      'Show records' => 'Show records',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
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
      'name' => 'Nume',
      'team' => 'Echipa',
      'status' => 'Status',
      'assignToUser' => 'Atribuie utilizatorului',
      'host' => 'Gazda',
      'username' => 'Nume Utilizator',
      'password' => 'Parola',
      'port' => 'Port',
      'monitoredFolders' => 'Directoare Monitorizate',
      'trashFolder' => 'Gunoi',
      'ssl' => 'SSL',
      'createCase' => 'Creare Caz',
      'reply' => 'Raspunde',
      'caseDistribution' => 'Distribuire Caz',
      'replyEmailTemplate' => 'Template Raspuns Email ',
      'replyFromAddress' => 'Raspunde cu Adresa',
      'replyToAddress' => 'Reply To Address',
      'replyFromName' => 'Raspunde cu Numele',
      'targetUserPosition' => 'Target User Position',
    ),
    'tooltips' => 
    array (
      'reply' => 'Notify email senders that their emails has been received.',
      'createCase' => 'Automatically create case from incoming emails.',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User emails/cases will be assigned to.',
      'team' => 'Team emails/cases will be related to.',
      'targetUserPosition' => 'Define the position of users which will be destributed with cases.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Atribuire directa',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Cel putin, Ocupat',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Creare Email intrare',
      'IMAP' => 'IMAP',
      'Actions' => 'Actiuni',
      'Main' => 'Principal',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Could neconectat la server-ul IMAP',
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
      'selectIntegration' => 'Select an integration from menu.',
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
      'post' => 'Publica',
      'attachments' => 'Atasamente',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Format Data ',
      'timeFormat' => 'Format Timp',
      'timeZone' => 'Zone Timp',
      'weekStart' => 'Prima zi a saptamanii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Semn zecimal',
      'defaultCurrency' => 'Valuta initiala',
      'currencyList' => 'Lista valute',
      'language' => 'Limba',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parola',
      'smtpEmailAddress' => 'Adresa Email',
      'exportDelimiter' => 'Delimitator Export',
      'receiveAssignmentEmailNotifications' => 'Receive Email Notifications upon Assignment',
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
        0 => 'Duminica',
        1 => 'Luni',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Notifications',
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
      'name' => 'Nume',
      'roles' => 'Roluri',
      'assignmentPermission' => 'Assignment Permission',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
      'teams' => 'Echipe',
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
      'Access' => 'Acces',
      'Create Role' => 'Creare Rol',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'ne setat',
        'enabled' => 'activat',
        'disabled' => 'dezactivat',
      ),
      'levelList' => 
      array (
        'all' => 'toate',
        'team' => 'echipa',
        'own' => 'personal',
        'no' => 'nu',
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
      'read' => 'Citeste',
      'edit' => 'Editare',
      'delete' => 'Sterge',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'All changes in an access control will be applied after cache will be cleared.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'status' => 'Status',
      'job' => 'Activitate',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Creare activiate programata',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Curatare',
        'CheckInboundEmails' => 'Verificare Intrari Email',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Send Email Reminders',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Nota: Adauga acesta linie in fisierul crontab pentru a rula Activitatile programate:',
        'mac' => 'Nota: Adauga acesta linie in fisierul crontab pentru a rula Activitatile programate:',
        'windows' => 'Nota: Creaza un fisier batch care sa contina urmatoarele comenzi pentru a rula Activitatile programate, folosind Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Timp Executie',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Foloseste Cache',
      'dateFormat' => 'Format Data ',
      'timeFormat' => 'Format Timp',
      'timeZone' => 'Zone Timp',
      'weekStart' => 'Prima zi a saptamanii',
      'thousandSeparator' => 'Separator mii',
      'decimalMark' => 'Semn zecimal',
      'defaultCurrency' => 'Valuta initiala',
      'baseCurrency' => 'Base Currency',
      'currencyRates' => 'Rate Values',
      'currencyList' => 'Lista valute',
      'language' => 'Limba',
      'companyLogo' => 'Logo Companie',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorizare',
      'smtpSecurity' => 'Securitate',
      'smtpUsername' => 'Nume Utilizator',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Parola',
      'outboundEmailFromName' => 'De la',
      'outboundEmailFromAddress' => 'De la adresa',
      'outboundEmailIsShared' => 'Este Partajat',
      'recordsPerPage' => 'Inregistrari pe pagina',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Lista Tab-uri',
      'quickCreateList' => 'Creare lista rapida',
      'exportDelimiter' => 'Delimitator Export',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Authentication Method',
      'ldapHost' => 'Gazda',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorizare',
      'ldapUsername' => 'Nume Utilizator',
      'ldapPassword' => 'Parola',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapCreateEspoUser' => 'Create User in EspoCRM',
      'ldapSecurity' => 'Securitate',
      'ldapUserLoginFilter' => 'User Login Filter',
      'ldapAccountDomainNameShort' => 'Account Domain Name Short',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => 'Disable Export (only admin is allowed)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Send Email Notifications upon Assignment',
      'assignmentEmailNotificationsEntityList' => 'Entities to Notify about with Email upon Assignment',
      'b2cMode' => 'B2C Mode',
      'disableAvatars' => 'Disable Avatars',
      'followCreatedEntities' => 'Follow Created Entities',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Duminica',
        1 => 'Luni',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Count of records in relatinship panels.',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => 'Sistem',
      'Locale' => 'Localizare',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuratie',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Currency Settings',
      'Currency Rtes' => 'Currency Rates',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'roles' => 'Roluri',
      'positionList' => 'Position List',
    ),
    'links' => 
    array (
      'users' => 'Utilizatori',
    ),
    'tooltips' => 
    array (
      'roles' => 'Access Roles. Users of this team obtain access control level from selected roles.',
      'positionList' => 'Available positions in this team. E.g. Salesperson, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Creare Echipa',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'userName' => 'Nume Utilizator',
      'title' => 'Titlu',
      'isAdmin' => 'Este Admin',
      'defaultTeam' => 'Echipa Initiala',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefon',
      'roles' => 'Roluri',
      'teamRole' => 'Position',
      'password' => 'Parola',
      'passwordConfirm' => 'Confirmare Parola',
      'newPassword' => 'Parola Noua',
      'newPasswordConfirm' => 'Confirm New Password',
      'avatar' => 'Avatar',
      'isActive' => 'Is Active',
    ),
    'links' => 
    array (
      'teams' => 'Echipe',
      'roles' => 'Roluri',
      'targetLists' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Create User' => 'Creare Utilizator',
      'Generate' => 'Generare',
      'Access' => 'Acces',
      'Preferences' => 'Preferinte',
      'Change Password' => 'Schimbare Parola',
      'Teams and Access Control' => 'Teams and Access Control',
      'Forgot Password?' => 'Forgot Password?',
      'Password Change Request' => 'Password Change Request',
      'Email Address' => 'Email Address',
      'External Accounts' => 'External Accounts',
      'Email Accounts' => 'Email Accounts',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'All records created by this user will be related to this team by default.',
      'userName' => 'Letters a-z, numbers 0-9 and underscores are allowed.',
      'isAdmin' => 'Admin user can access everything.',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Teams which this user belongs to. Access control level is inherited from team\'s roles.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level only for this user.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Parola va fi trimisa in email-ul utilizatorului.',
      'accountInfoEmailSubject' => 'Informatii cont',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Change Password Request',
      'passwordChangeLinkEmailBody' => 'You can change your password by this link {link}. This unique url will be exprired soon.',
      'passwordChanged' => 'Parola a fost schimbata',
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
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Adresa de Facturare',
      'shippingAddress' => 'Adresa de Transport',
      'description' => 'Descriere',
      'sicCode' => 'Cod Sic',
      'industry' => 'Industrie',
      'type' => 'Tip',
      'contactRole' => 'Rol',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Contacte',
      'opportunities' => 'Oportunitati',
      'cases' => 'Cazuri',
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
        'Customer' => 'Client',
        'Investor' => 'Investitor',
        'Partner' => 'Partener',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotive',
        'Banking' => 'Banking',
        'Biotechnology' => 'Biotechnology',
        'Chemical' => 'Chemical',
        'Computer' => 'Computer',
        'Education' => 'Educatie',
        'Electronics' => 'Electronice',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finante',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Insurance' => 'Asigurari',
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
        'Apparel' => 'Haine',
        'Computer Software' => 'Software Computer',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Creare cont',
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
      'month' => 'Luna',
      'week' => 'Saptamana',
      'day' => 'Zi',
      'agendaWeek' => 'Saptamana',
      'agendaDay' => 'Zi',
    ),
    'labels' => 
    array (
      'Today' => 'Astazi',
      'Create' => 'Creaza',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateStart' => 'Data inceput',
      'dateEnd' => 'Data terminare',
      'direction' => 'Directie',
      'duration' => 'Durata',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'reminders' => 'Reminders',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planificat',
        'Held' => 'Detinut',
        'Not Held' => 'Nedetinut',
      ),
      'direction' => 
      array (
        'Outbound' => 'Iesire',
        'Inbound' => 'Intrare',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
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
      'Create Call' => 'Creare Apelare',
      'Set Held' => 'Setare detinere',
      'Set Not Held' => 'Setare nedetinere',
      'Send Invitations' => 'Trimite invitatii',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planificat',
      'held' => 'Detinut',
      'todays' => 'Today\'s',
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
      'name' => 'Nume',
      'number' => 'Numar',
      'status' => 'Status',
      'account' => 'Cont',
      'contact' => 'Contact',
      'priority' => 'Prioritate',
      'type' => 'Tip',
      'description' => 'Descriere',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nou',
        'Assigned' => 'Alocat',
        'Pending' => 'In asteptare',
        'Closed' => 'Inchis',
        'Rejected' => 'Respins',
        'Duplicate' => 'Duplicat',
      ),
      'priority' => 
      array (
        'Low' => 'Scazut',
        'Normal' => 'Normal',
        'High' => 'Inalt',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Intrebare',
        'Incident' => 'Incident',
        'Problem' => 'Problema',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Creare Caz',
    ),
    'presetFilters' => 
    array (
      'open' => 'Deschide',
      'closed' => 'Inchis',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'account' => 'Cont',
      'accounts' => 'Conturi',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Tip cont',
      'doNotCall' => 'Nu sunati',
      'address' => 'Adresa',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Rol',
      'description' => 'Descriere',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Oportunitati',
      'cases' => 'Cazuri',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Creare Contact',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--None--',
        'Decision Maker' => 'Decision Maker',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Influencer',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Create Document',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'file' => 'File',
      'type' => 'Type',
      'source' => 'Source',
      'publishDate' => 'Publish Date',
      'expirationDate' => 'Expiration Date',
      'description' => 'Description',
    ),
    'links' => 
    array (
      'accounts' => 'Accounts',
      'opportunities' => 'Opportunities',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Active',
        'Draft' => 'Draft',
        'Expired' => 'Expired',
        'Canceled' => 'Canceled',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'draft' => 'Draft',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Convertit la',
      'Create Lead' => 'Creare Lead',
      'Convert' => 'Converteste',
    ),
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'website' => 'Site Web',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Nume Cont',
      'doNotCall' => 'Nu sunati',
      'address' => 'Adresa',
      'status' => 'Status',
      'source' => 'Sursa',
      'opportunityAmount' => 'Suma Oportunitate',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Descriere',
      'createdAccount' => 'Cont',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Oportunitate',
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
        'New' => 'Nou',
        'Assigned' => 'Alocat',
        'In Process' => 'In Proces',
        'Converted' => 'Convertit',
        'Recycled' => 'Reciclat',
        'Dead' => 'Inactiv',
      ),
      'source' => 
      array (
        'Call' => 'Apel',
        'Email' => 'Email',
        'Existing Customer' => 'Client Existent',
        'Partner' => 'Partener',
        'Public Relations' => 'Relatii Publice',
        'Web Site' => 'Site Web',
        'Campaign' => 'Campanie',
        'Other' => 'Altele',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Activ',
      'converted' => 'Converted',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateStart' => 'Data inceput',
      'dateEnd' => 'Data terminare',
      'duration' => 'Durata',
      'description' => 'Descriere',
      'users' => 'Utilizatori',
      'contacts' => 'Contacte',
      'leads' => 'Lead-uri',
      'reminders' => 'Reminders',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Planificat',
        'Held' => 'Detinut',
        'Not Held' => 'Nedetinut',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'None',
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
      'Create Meeting' => 'Creare Intalnire',
      'Set Held' => 'Setare detinere',
      'Set Not Held' => 'Setare nedetinere',
      'Send Invitations' => 'Trimite invitatii',
      'on time' => 'on time',
      'before' => 'before',
      'Saved as Held' => 'Saved as Held',
      'Saved as Not Held' => 'Saved as Not Held',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planificat',
      'held' => 'Detinut',
      'todays' => 'Today\'s',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'account' => 'Cont',
      'stage' => 'Stadiu',
      'amount' => 'Suma',
      'probability' => 'Probabilitate, %',
      'leadSource' => 'Sursa Lead',
      'doNotCall' => 'Nu sunati',
      'closeDate' => 'Data Inchiderii',
      'contacts' => 'Contacte',
      'description' => 'Descriere',
      'amountConverted' => 'Amount (converted)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Contacte',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectare',
        'Qualification' => 'Calificari',
        'Needs Analysis' => 'Necesita Analiza',
        'Value Proposition' => 'Valoare Propunere',
        'Id. Decision Makers' => 'Id. Factori de Decizie',
        'Perception Analysis' => 'Analiza Perceptiei',
        'Proposal/Price Quote' => 'Propunere/Oferta Pret',
        'Negotiation/Review' => 'Negociere/Revizuire',
        'Closed Won' => 'Inchide ca Castigat',
        'Closed Lost' => 'Inchide ca Pierdut',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Creare Oportunitate',
    ),
    'presetFilters' => 
    array (
      'open' => 'Deschide',
      'won' => 'Won',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Nume',
      'emailAddress' => 'Email',
      'title' => 'Titlu',
      'website' => 'Site Web',
      'accountName' => 'Nume Cont',
      'phoneNumber' => 'Telefon',
      'doNotCall' => 'Nu sunati',
      'address' => 'Adresa',
      'description' => 'Descriere',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Creare Tinta',
      'Convert to Lead' => 'Converteste la Lead',
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
      'name' => 'Nume',
      'parent' => 'Parinte',
      'status' => 'Status',
      'dateStart' => 'Data inceput',
      'dateEnd' => 'Data scadenta',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Prioritate',
      'description' => 'Descriere',
      'isOverdue' => 'Este Restant',
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
        'Not Started' => 'Ne inceput',
        'Started' => 'Inceput',
        'Completed' => 'Completat',
        'Canceled' => 'Anulat',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Scazut',
        'Normal' => 'Normal',
        'High' => 'Inalt',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Creaza Activitate',
      'Complete' => 'Complete',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Completat',
      'todays' => 'Today\'s',
      'overdue' => 'Overdue',
      'active' => 'Activ',
    ),
  ),
);

?>