<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Geactiveerd',
      'Disabled' => 'Uitgeschakeld',
      'System' => 'Systeem',
      'Users' => 'Gebruikers',
      'Email' => 'Email',
      'Data' => 'Data',
      'Customization' => 'Aanpassing',
      'Available Fields' => 'Beschikbare Velden',
      'Layout' => 'Layout',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Kader toevoegen',
      'Add Field' => 'Veld toevoegen',
      'Settings' => 'Instellingen',
      'Scheduled Jobs' => 'Geplande Opdrachten',
      'Upgrade' => 'Upgrade',
      'Clear Cache' => 'Cache Opschonen',
      'Rebuild' => 'Herbouwen',
      'Teams' => 'Groepen',
      'Roles' => 'Functies',
      'Outbound Emails' => 'Uitgaande Emails',
      'Inbound Emails' => 'Inkomende Emails',
      'Email Templates' => 'Email Templates',
      'Import' => 'Importeren',
      'Layout Manager' => 'Layout Manager',
      'User Interface' => 'Gebruikers Interface',
      'Auth Tokens' => 'Auth Token',
      'Authentication' => 'Authenticatie',
      'Currency' => 'Valuta',
      'Integrations' => 'Integraties',
      'Extensions' => 'Extensies',
      'Upload' => 'Upload',
      'Installing...' => 'Installeren...',
      'Upgrading...' => 'Bezig met upgraden...',
      'Upgraded successfully' => 'Upgrade voltooid',
      'Installed successfully' => 'Installatie voltooid',
      'Ready for upgrade' => 'Gereed voor upgrade',
      'Run Upgrade' => 'Upgrade uitvoeren',
      'Install' => 'Installeren',
      'Ready for installation' => 'Gereed voor installatie',
      'Uninstalling...' => 'Bezig met deinstalleren...',
      'Uninstalled' => 'Gedeinstalleerd',
      'Create Entity' => 'Create Entity',
      'Edit Entity' => 'Edit Entity',
      'Create Link' => 'Create Link',
      'Edit Link' => 'Edit Link',
      'Notifications' => 'Notifications',
      'Field Manager' => 'Velden Manager',
    ),
    'layouts' => 
    array (
      'list' => 'Lijst',
      'detail' => 'Detail',
      'listSmall' => 'Lijst (klein)',
      'detailSmall' => 'Detail (klein)',
      'filters' => 'Zoek Filters',
      'massUpdate' => 'Massa Update',
      'relationships' => 'Relaties',
      'detailConvert' => 'Omzetten Lead',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Rangschikking',
      'foreign' => 'Buitenland',
      'duration' => 'Duur',
      'password' => 'Wachtwoord',
      'parsonName' => 'Naam Persoon',
      'autoincrement' => 'Auto-vermeerdering',
      'bool' => 'Bool',
      'currency' => 'Valuta',
      'date' => 'Datum',
      'datetime' => 'Datum Tijd',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Email',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Drijvende komma',
      'int' => 'Int',
      'link' => 'Link',
      'linkMultiple' => 'Link Meerdere',
      'linkParent' => 'Link Parent',
      'multienim' => 'Multienum',
      'phone' => 'Telefoon',
      'text' => 'Tekst',
      'url' => 'Url',
      'varchar' => 'Varchar',
      'file' => 'Bestand',
      'image' => 'Afbeelding',
      'multiEnum' => 'Multi-Enum',
    ),
    'fields' => 
    array (
      'type' => 'Type',
      'name' => 'Record Naam',
      'label' => 'Label',
      'required' => 'Verplicht',
      'default' => 'Standaard',
      'maxLength' => 'Max Lengte',
      'options' => 'Opties',
      'after' => 'Achter (veld)',
      'before' => 'Voor (veld)',
      'link' => 'Link',
      'field' => 'Veld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Vertaling',
      'previewSize' => 'Preview Afmeting',
      'noEmptyString' => 'No Empty String',
      'defaultType' => 'Default Type',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Uw EspoCRM wordt geupgrade naar versie <strong>{version}</strong>. Dit kan enige tijd duren.',
      'upgradeDone' => 'Uw EspoCRM is geupgrade naar versie <strong>{version}</strong>. Herstart uw browser scherm.',
      'upgradeBackup' => 'We adviseren om eerst een backup te maken van uw EspoCRM bestanden en data, alvorens te upgraden.',
      'thousandSeparatorEqualsDecimalMark' => 'Het duizendtal scheidingsteken mag niet hetzelfde zijn als het decimaalteken.',
      'userHasNoEmailAddress' => 'Gebruiker heeft geen emailadres.',
      'selectEntityType' => 'Selecteer de eenheid soort in het linker menu.',
      'selectUpgradePackage' => 'Selecteer het upgradebestand',
      'downloadUpgradePackage' => 'Download benodigde upgrade bestanden <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/">hier</a>.',
      'selectLayout' => 'Selecteer de layout in het linker menu en pas deze aan.',
      'selectExtensionPackage' => 'Selecteer extensie bestand',
      'extensionInstalled' => 'Extensie {name} {version} is geinstalleerd.',
      'installExtension' => 'Extensie {name} {version} is gereed voor installatie.',
      'uninstallConfirmation' => 'Extensie definitief verwijderen?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systeem instellingen van het programma.',
      'scheduledJob' => 'Opdrachten die uitgevoerd worden door cron.',
      'upgrade' => 'Upgrade EspoCRM.',
      'clearCache' => 'Verwijder backend cache.',
      'rebuild' => 'Reconstrueer backend en schoon het geheugen.',
      'users' => 'Gebruikers beheer.',
      'teams' => 'Groepen beheer.',
      'roles' => 'Functie beheer.',
      'outboundEmails' => 'SMTP instellingen voor uitgaande emails.',
      'inboundEmails' => 'Groep IMAP email accounts. Email importeren en Email-naar-Casus.',
      'emailTemplates' => 'Templates voor uitgaande emails.',
      'import' => 'Importeer data vanuit CSV bestand.',
      'layoutManager' => 'Bewerk layouts (lijst, detail, bewerk, zoeken, massa update).',
      'entityManager' => 'Create custom entities, edit existing ones. Manage field and relationships.',
      'userInterface' => 'Configureer UI.',
      'authTokens' => 'Actieve bevestigde sessie. IP adres en laatste inlogdatum.',
      'authentication' => 'Verificatie-instellingen',
      'currency' => 'Valuta instellingen en tarieven.',
      'extensions' => 'Extensies (de)installeren.',
      'integrations' => 'Integration with third-party services.',
      'notifications' => 'In-app and email notification settings.',
      'fieldManager' => 'Nieuwe velden aanmaken of bestaande velden bewerken.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Extra klein',
        'small' => 'Klein',
        'medium' => 'Middel',
        'large' => 'Groot',
      ),
    ),
    'layoutManagerDataAttributes' => 
    array (
      'width' => 'Breedte (%)',
      'link' => 'Link',
      'notSortable' => 'Ongesorteerd',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Gebruiker',
      'ipAddress' => 'IP Adres',
      'lastAccess' => 'Datum van laatste toegang',
      'createdAt' => 'Datum Login',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Titel',
      'dateFrom' => 'Datum Vanaf',
      'dateTo' => 'Datum Tot',
      'autorefreshInterval' => 'Automatisch bijwerken interval',
      'displayRecords' => 'Velden weergeven',
      'isDoubleHeight' => 'Hoogte 2x',
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
      'name' => 'Onderwerp',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateSent' => 'Datum verzonden',
      'from' => 'Van',
      'to' => 'Naar',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Is Html',
      'body' => 'Inhoud',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'selectTemplate' => 'Selecteer Template',
      'fromEmailAddress' => 'Van Adres',
      'toEmailAddresses' => 'Naar Adres',
      'emailAddress' => 'Email Adres',
      'deliveryDate' => 'Afleverdatum',
      'account' => 'Account',
      'users' => 'Users',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Concept',
      'Sending' => 'Verzenden',
      'Sent' => 'Verstuur',
      'Archived' => 'Archiveren',
      'Received' => 'Received',
    ),
    'labels' => 
    array (
      'Create Email' => 'Archiveer Email',
      'Archive Email' => 'Archiveer Email',
      'Compose' => 'Maak',
      'Reply' => 'Antwoord',
      'Reply to All' => 'Antwoord allen',
      'Forward' => 'Doorsturen',
      'Original message' => 'Originele bericht',
      'Forwarded message' => 'Doorgestuurd bericht',
      'Email Accounts' => 'Email Accounts',
      'Send Test Email' => 'Stuur een test Email',
      'Send' => 'Versturen',
      'Email Address' => 'Email Adres',
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
      'noSmtpSetup' => 'Geen SMTP setup. {link}.',
      'testEmailSent' => 'Test email is verzonden',
      'emailSent' => 'Email has been sent',
      'savedAsDraft' => 'Saved as draft',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Verstuur',
      'archived' => 'Archiveren',
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
      'name' => 'Record Naam',
      'status' => 'Status',
      'host' => 'Host',
      'username' => 'Gebruikersnaam',
      'password' => 'Wachtwoord',
      'port' => 'Port',
      'monitoredFolders' => 'Gecontroleerde Folders',
      'ssl' => 'SSL',
      'fetchSince' => 'Opgehaald Vanaf',
      'emailAddress' => 'Email Address',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'Email Account Aanmaken',
      'IMAP' => 'IMAP',
      'Main' => 'Hoofd',
      'Test Connection' => 'Test Connection',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kan geen verbinding maken met IMAP server',
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
      'Primary' => 'Primair',
      'Opted Out' => 'Opted Out',
      'Invalid' => 'Onjuist',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'isHtml' => 'Is Html',
      'body' => 'Inhoud',
      'subject' => 'Onderwerp',
      'attachments' => 'Bijlagen',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Email Template Aanmaken',
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
      'name' => 'Record Naam',
      'version' => 'Versie',
      'description' => 'Beschrijving',
      'isInstalled' => 'Geinstalleerd',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstalleren',
      'Install' => 'Installeren',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Extensie {name} is gedeinstalleerd',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Verbinden',
      'Connected' => 'Verbonden',
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
      'User' => 'Gebruiker',
      'Team' => 'Groep',
      'Role' => 'Functie',
      'EmailTemplate' => 'Email Template',
      'EmailAccount' => 'Email Account',
      'EmailAccountScope' => 'Email Account',
      'OutboundEmail' => 'Uitgaande Email',
      'ScheduledJob' => 'Geplande Opdracht',
      'ExternalAccount' => 'Extern Account',
      'Extension' => 'Extensie',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Binnenkomende Email',
      'Stream' => 'Gestroomlijnd',
      'Import' => 'Import',
      'Account' => 'Account',
      'Contact' => 'Contact',
      'Lead' => 'Lead',
      'Target' => 'Target',
      'Opportunity' => 'Kans',
      'Meeting' => 'Vergadering',
      'Calendar' => 'Kalender',
      'Call' => 'Tel. Gesprek',
      'Task' => 'Taak',
      'Case' => 'Kwestie',
      'Document' => 'Document',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Emails',
      'User' => 'Gebruikers',
      'Team' => 'Groepen',
      'Role' => 'Functies',
      'EmailTemplate' => 'Email Templates',
      'EmailAccount' => 'Email Accounts',
      'EmailAccountScope' => 'Email Accounts',
      'OutboundEmail' => 'Uitgaande Emails',
      'ScheduledJob' => 'Geplande Opdrachten',
      'ExternalAccount' => 'Externe Accounts',
      'Extension' => 'Extensies',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Inkomende Emails',
      'Stream' => 'Gestroomlijnd',
      'Import' => 'Import Results',
      'Account' => 'Klanten',
      'Contact' => 'Contacten',
      'Lead' => 'Leads',
      'Target' => 'Targets',
      'Opportunity' => 'Kansen',
      'Meeting' => 'Afspraken',
      'Calendar' => 'Kalender',
      'Call' => 'Tel.gesprekken',
      'Task' => 'Taken',
      'Case' => 'Casus',
      'Document' => 'Documents',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Misc' => 'Versch.',
      'Merge' => 'Samenvoegen',
      'None' => 'Geen',
      'by' => 'door',
      'Saved' => 'Opgeslagen',
      'Error' => 'Fout',
      'Select' => 'Selecteer',
      'Not valid' => 'Ongeldig',
      'Please wait...' => 'Even geduld...',
      'Please wait' => 'Even geduld',
      'Loading...' => 'Laden...',
      'Uploading...' => 'Uploaden...',
      'Sending...' => 'Verzenden...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Verwijderd',
      'Posted' => 'Geplaatst',
      'Linked' => 'Linked',
      'Unlinked' => 'Unlinked',
      'Access denied' => 'Toegang gweigerd',
      'Access' => 'Toegang',
      'Are you sure?' => 'Zeker?',
      'Record has been removed' => 'Record is verwijderd',
      'Wrong username/password' => 'Onjuiste gebruikersnaam/wachtwoord',
      'Post cannot be empty' => 'Veld mag niet leeg zijn',
      'Removing...' => 'Verwijderen...',
      'Unlinking...' => 'Unlinken...',
      'Posting...' => 'Plaatsen...',
      'Username can not be empty!' => 'Gebruikersnaam mag niet leeg zijn!',
      'Cache is not enabled' => 'Cache is niet geactiveerd',
      'Cache has been cleared' => 'Cache is leeg gemaakt',
      'Rebuild has been done' => 'Het reconstrueren is klaar',
      'Saving...' => 'Opslaan...',
      'Modified' => 'Aangepast',
      'Created' => 'Gemaakt',
      'Create' => 'Aanmaken',
      'create' => 'maak',
      'Overview' => 'Overzicht',
      'Details' => 'Details',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Dashlet Toevoegen',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Toevoegen',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Meer',
      'Search' => 'Zoeken',
      'Only My' => 'Alleen mijn',
      'Open' => 'Open',
      'Admin' => 'Admin',
      'About' => 'Over',
      'Refresh' => 'Vernieuwen',
      'Remove' => 'Verwijderen',
      'Options' => 'Opties',
      'Username' => 'Gebruikersnaam',
      'Password' => 'Wachtwoord',
      'Login' => 'Login',
      'Log Out' => 'Uitloggen',
      'Preferences' => 'Voorkeuren',
      'State' => 'Provincie',
      'Street' => 'Straat',
      'Country' => 'Land',
      'City' => 'Plaats',
      'PostalCode' => 'Postcode',
      'Followed' => 'Gevolgd',
      'Follow' => 'Volgen',
      'Clear Local Cache' => 'Lokale Cache Schonen',
      'Actions' => 'Acties',
      'Delete' => 'Verwijder',
      'Update' => 'Update',
      'Save' => 'Opslaan',
      'Edit' => 'Bewerken',
      'View' => 'View',
      'Cancel' => 'Annuleren',
      'Unlink' => 'Unlink',
      'Mass Update' => 'Massa Update',
      'Export' => 'Exporteer',
      'No Data' => 'Geen Data',
      'No Access' => 'Geen toegang',
      'All' => 'Alles',
      'Active' => 'Actief',
      'Inactive' => 'Inactief',
      'Write your comment here' => 'Schrijf hier uw opmerkingen',
      'Post' => 'Post',
      'Stream' => 'Gestroomlijnd',
      'Show more' => 'Toon meer',
      'Dashlet Options' => 'Kader Opties',
      'Full Form' => 'Volledig Formulier',
      'Insert' => 'Voeg in',
      'Person' => 'Persoon',
      'First Name' => 'Voornaam',
      'Last Name' => 'Achternaam',
      'Original' => 'Origineel',
      'You' => 'U',
      'you' => 'u',
      'change' => 'Pas aan',
      'Change' => 'Pas aan',
      'Primary' => 'Primair',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administratie',
      'Run Import' => 'Start Importeren',
      'Duplicate' => 'Dupliceer',
      'Notifications' => 'Meldingen',
      'Mark all read' => 'Markeer als gelezen',
      'See more' => 'Bekijk meer',
      'Today' => 'Vandaag',
      'Tomorrow' => 'Morgen',
      'Yesterday' => 'Gisteren',
      'Submit' => 'Stuur in',
      'Close' => 'Sluit',
      'Yes' => 'Ja',
      'No' => 'Nee',
      'Select All Result' => 'Select All Result',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Create InboundEmail' => 'Email Gebruiker Instellen',
      'Activities' => 'Activiteiten',
      'History' => 'Historie',
      'Attendees' => 'Genodigden',
      'Schedule Meeting' => 'Afspraak Plannen',
      'Schedule Call' => 'Geplande Oproep',
      'Compose Email' => 'Email aanmaken',
      'Log Meeting' => 'Afspraak vastleggen',
      'Log Call' => 'Tel. Gesprek Vastleggen',
      'Archive Email' => 'Archiveer Email',
      'Create Task' => 'Taak Aanmaken',
      'Tasks' => 'Taken',
      'Add Filter' => 'Filter toevoegen',
      'Save Filters' => 'Filters opslaan',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'U heeft niets gewijzigd',
      'duplicate' => 'Het veld dat u maakt lijkt een duplicaat',
      'fieldIsRequired' => '{field} is verplicht',
      'fieldShouldBeEmail' => '{field} moet een geldig mailadres zijn',
      'fieldShouldBeFloat' => '{field} moet een geldige waarde zijn',
      'fieldShouldBeInt' => '{fiels} moet een geldige integer zijn',
      'fieldShouldBeDate' => '{field} moet een geldige datum zijn',
      'fieldShouldBeDatetime' => '{field} moet een geldige datum/tijd zijn',
      'fieldShouldAfter' => '{field} moet na {otherField} komen',
      'fieldShouldBefore' => '{field} moet voor {otherField} komen',
      'fieldShouldBeBetween' => '{field} moet een waarde hebben tussen {min} en {max}',
      'fieldShouldBeLess' => '{field} moet minder zijn dan {value}',
      'fieldShouldBeGreater' => '{field} moet groter zijn dan {value}',
      'fieldBadPasswordConfirm' => '{field} onjuist bevestigd',
      'resetPreferencesDone' => 'Voorkeuren zijn naar standaard waarden terugezet',
      'assignmentEmailNotificationSubject' => 'EspoCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} heeft {entityType} \'{Entity.name}\' toegewezen aan jou

{recordUrl}',
      'confirmation' => 'Zeker?',
      'resetPreferencesConfirmation' => 'Weet u zeker dat u de voorkeuren naar standaard terug wil zetten?',
      'removeRecordConfirmation' => 'Record verwijderen?',
      'unlinkRecordConfirmation' => 'Relatie ontkoppelen?',
      'removeSelectedRecordsConfirmation' => 'Geselecteerde records verwijderen?',
      'massUpdateResult' => '{count} bestanden waren aangepast',
      'massUpdateResultSingle' => '{count} bestanden zijn aangepast ',
      'noRecordsUpdated' => 'Geen bestanden aangepast',
      'massRemoveResult' => '{count} bestanden waren verwijderd',
      'massRemoveResultSingle' => '{count} bestanden zijn verwijderd',
      'noRecordsRemoved' => 'Er werden geen bestanden verwijderd ',
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
      'onlyMy' => 'Alleen mijn',
      'followed' => 'Followed',
      'open' => 'Open',
      'active' => 'Actief',
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
      'name' => 'Record Naam',
      'firstName' => 'Voornaam',
      'lastName' => 'Achternaam',
      'salutationName' => 'Aanhef',
      'assignedUser' => 'Toegewezen Gebruiker',
      'emailAddress' => 'Email',
      'assignedUserName' => 'Toegewezen Gebruikersnaam',
      'teams' => 'Groepen',
      'createdAt' => 'Aangemaakt op',
      'modifiedAt' => 'Aangepast op',
      'createdBy' => 'Aangemaakt door',
      'modifiedBy' => 'Aangepast door',
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
      'billingAddressCity' => 'Plaats',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'Postcode',
      'billingAddressState' => 'Provincie',
      'billingAddressStreet' => 'Straat',
      'addressCity' => 'Plaats',
      'addressStreet' => 'Straat',
      'addressCountry' => 'Land',
      'addressState' => 'Provincie',
      'addressPostalCode' => 'Postcode',
      'shippingAddressCity' => 'Plaats (Verzending)',
      'shippingAddressStreet' => 'Straat (Verzending)',
      'shippingAddressCountry' => 'Land (Verzending)',
      'shippingAddressState' => 'Provincie (Verzending)',
      'shippingAddressPostalCode' => 'Postcode (Verzending)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Toegewezen Gebruiker',
      'createdBy' => 'Aangemaakt door',
      'modifiedBy' => 'Aangepast door',
      'team' => 'Groep',
      'roles' => 'Functies',
      'teams' => 'Groepen',
      'users' => 'Gebruikers',
      'parent' => 'Behorende bij',
      'children' => 'Children',
      'contacts' => 'Contacten',
      'opportunities' => 'Kansen',
      'leads' => 'Leads',
      'meetings' => 'Afspraken',
      'calls' => 'Tel.gesprekken',
      'tasks' => 'Taken',
      'emails' => 'Emails',
      'accounts' => 'Klanten',
      'cases' => 'Casus',
      'documents' => 'Documents',
      'account' => 'Account',
      'opportunity' => 'Kans',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Gestroomlijnd',
      'Leads' => 'Mijn Leads',
      'Opportunities' => 'Mijn Kansen',
      'Tasks' => 'Mijn Taken',
      'Cases' => 'Mijn Casus',
      'Calendar' => 'Kalender',
      'Calls' => 'Mijn Tel.gesprekken',
      'Meetings' => 'Mijn Afspraken',
      'OpportunitiesByStage' => 'Status van Kansen',
      'OpportunitiesByLeadSource' => 'Kansen per Leadbron',
      'SalesByMonth' => 'Verkopen per maand',
      'SalesPipeline' => 'Verkoop mogelijkheden',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} creërde {entityType} {entity} ',
      'createAssigned' => '{user} creërde {entityType} {entity} en wees toe aan {assignee}',
      'assign' => '{user} wees {entityType} {entity} toe aan {assignee}',
      'post' => '{user} geplaatst op {entityType} {entity}',
      'attach' => '{user} toegevoegd aan {entityType} {entity}',
      'status' => '{user} paste {field} aan op {entityType} {entity}',
      'update' => '{user} paste {entityType} {entity} aan',
      'createRelated' => '{user} creërde {relatedEntityType} {relatedEntity} gekoppeld aan {entityType} {entity}',
      'mentionInPost' => '{user} vermeldde {mentioned} op {entityType} {entity}',
      'createThis' => '{user} creërde deze {entityType} ',
      'createAssignedThis' => '{user} maakte deze {entityType} toegewezen aan {assignee}',
      'assignThis' => '{user} wees deze {entityType} toe aan {assignee}',
      'postThis' => '{user} gepost',
      'attachThis' => '{user} toegevoegd',
      'statusThis' => '{user} paste {field} aan',
      'updateThis' => '{user} paste dit {entityType} aan',
      'createRelatedThis' => '{user} maakte {relatedEntityType} {relatedEntity} en koppelde dit aan {entityType}',
      'emailReceivedFromThis' => 'Email received from {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} is ontvangen',
      'emailReceivedInitialThis' => 'Email bericht ontvangen en maakte deze {entityType}',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} is ontvangen voor {entityType} {entity}',
      'emailReceivedInitial' => 'Email is ontvangen en gemaakt met {entityType} {entity}',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} sent email related to {entityType} {entity}',
      'emailSentThis' => '{by} sent email',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Januari',
        1 => 'Februari',
        2 => 'Maart',
        3 => 'April',
        4 => 'Mei',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'Augustus',
        8 => 'September',
        9 => 'October',
        10 => 'November',
        11 => 'December',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Maa',
        3 => 'Apr',
        4 => 'Mei',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dec',
      ),
      'dayNames' => 
      array (
        0 => 'Zondag',
        1 => 'Maandag',
        2 => 'Dinsdag',
        3 => 'Woensdag',
        4 => 'Donderdag',
        5 => 'Vrijdag',
        6 => 'Zaterdag',
      ),
      'dayNamesShort' => 
      array (
        0 => 'Zon',
        1 => 'Maa',
        2 => 'Din',
        3 => 'Woe',
        4 => 'Don',
        5 => 'Vrij',
        6 => 'Zat',
      ),
      'dayNamesMin' => 
      array (
        0 => 'Zo',
        1 => 'Ma',
        2 => 'Di',
        3 => 'Wo',
        4 => 'Do',
        5 => 'Vr',
        6 => 'Za',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Dhr.',
        'Mrs.' => 'Mevr.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbeidzjaans',
        'be_BY' => 'Wit-Russisch',
        'bg_BG' => 'Bulgaars',
        'bn_IN' => 'Bengaals',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Catalaans',
        'cs_CZ' => 'Tsjechisch',
        'cy_GB' => 'Wels',
        'da_DK' => 'Deens',
        'de_DE' => 'Duits',
        'el_GR' => 'Grieks',
        'en_GB' => 'Engels (UK)',
        'en_US' => 'Engels (VS)',
        'es_ES' => 'Spaans (Spanje)',
        'et_EE' => 'Estlands',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Perzisch',
        'fi_FI' => 'Fins',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'Frans (Canada)',
        'fr_FR' => 'Frans (Frankrijk)',
        'ga_IE' => 'Iers',
        'gl_ES' => 'Galicisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebreeuws',
        'hi_IN' => 'Hindies',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Hongaars',
        'hy_AM' => 'Armeens',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'IJslands',
        'it_IT' => 'Italiaans',
        'ja_JP' => 'Japans',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreaans',
        'ku_TR' => 'Koerdisch',
        'lt_LT' => 'Litouws',
        'lv_LV' => 'Lets',
        'mk_MK' => 'Macedonisch',
        'ml_IN' => 'Maleisisch',
        'ms_MY' => 'Maleis',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Noors Nynorsk',
        'ne_NP' => 'Nepalees',
        'nl_NL' => 'Nederlands',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Pools',
        'ps_AF' => 'Pasjtoe',
        'pt_BR' => 'Portugees (Brazilie',
        'pt_PT' => 'Portugees (Portugal)',
        'ro_RO' => 'Roemeens',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowaaks',
        'sl_SI' => 'Sloveens',
        'sq_AL' => 'Albanees',
        'sr_RS' => 'Servisch',
        'sv_SE' => 'Zweeds',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thais',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turks',
        'uk_UA' => 'OekraГЇens',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'ViГ«tnamees',
        'zh_CN' => 'Vereenvoudigd Chinees (China)',
        'zh_HK' => 'Traditioneel Chinees (Hong Kong)',
        'zh_TW' => 'Traditioneel Chinees (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Op',
        'notOn' => 'Niet op',
        'after' => 'Na',
        'before' => 'Voor',
        'between' => 'Tussen',
        'today' => 'Vandaag',
        'past' => 'Verleden',
        'future' => 'Toekomst',
        'currentMonth' => 'Huidige Maand',
        'lastMonth' => 'Vorige Maand',
        'currentQuarter' => 'Dit Kwartaal',
        'lastQuarter' => 'Vorige Kwartaal',
        'currentYear' => 'Huidige Jaar',
        'lastYear' => 'Vorig Jaar',
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
        'equals' => 'Is gelijk aan',
        'notEquals' => 'Is niet gelijk aan',
        'greaterThan' => 'Groter dan',
        'lessThan' => 'Minder dan',
        'greaterThanOrEquals' => 'Groter dan of gelijk aan',
        'lessThanOrEquals' => 'Minder dan of gelijk aan',
        'between' => 'Tussen',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Geen',
        '0.5' => '30 seconden',
        1 => '1 minuut',
        2 => '2 minuten',
        5 => '5 minuten',
        10 => '10 minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobiel',
        'Office' => 'Kantoor',
        'Fax' => 'Fax',
        'Home' => 'Prive',
        'Other' => 'Overig',
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
        'NOTICE' => 'U kunt hier de vertaling vinden: https://github.com/xx',
        'font' => 
        array (
          'bold' => 'Vet',
          'italic' => 'Italic',
          'underline' => 'Onderstreept',
          'strike' => 'Opvallend',
          'clear' => 'Verwijder Opmaak Lettertype',
          'height' => 'Lijn Hoogte',
          'name' => 'Familie Lettertype',
          'size' => 'Lettergrootte',
        ),
        'image' => 
        array (
          'image' => 'Foto',
          'insert' => 'Afbeelding invoegen',
          'resizeFull' => 'Volledig schalen',
          'resizeHalf' => 'Schaal 50%',
          'resizeQuarter' => 'Schaal 25%',
          'floatLeft' => 'Links zweven',
          'floatRight' => 'Rechts zweven',
          'floatNone' => 'Float None',
          'dragImageHere' => 'Sleep afbeelding naar hier',
          'selectFromFiles' => 'Selecteer uit bestanden',
          'url' => 'Afbeelding URL',
          'remove' => 'Afbeelding verwijderen',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link invoegen',
          'unlink' => 'Unlink',
          'edit' => 'Bewerken',
          'textToDisplay' => 'Weer te geven tekst',
          'url' => 'Naar welke URL dient deze link te verwijzen?',
          'openInNewWindow' => 'In nieuw scherm openen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video invoegen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram of DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabel',
        ),
        'hr' => 
        array (
          'insert' => 'Horizontale Regel toevoegen',
        ),
        'style' => 
        array (
          'style' => 'Stijl',
          'normal' => 'Normaal',
          'blockquote' => 'Citaat',
          'pre' => 'Code',
          'h1' => 'Header 1',
          'h2' => 'Header 2',
          'h3' => 'Header 3',
          'h4' => 'Header 4',
          'h5' => 'Header 5',
          'h6' => 'Header 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Ongesorteerde lijst',
          'ordered' => 'Gesorteerde lijst',
        ),
        'options' => 
        array (
          'help' => 'Hulp',
          'fullscreen' => 'Volledig scherm',
          'codeview' => 'Code View',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraaf',
          'outdent' => 'Outdent',
          'indent' => 'Indent',
          'left' => 'Links uitlijnen',
          'center' => 'Centreren',
          'right' => 'Rechts uitlijnen',
          'justify' => 'Rechtsvaardig volledig',
        ),
        'color' => 
        array (
          'recent' => 'Recente kleur',
          'more' => 'Meer kleur',
          'background' => 'Achtergrondkleur',
          'foreground' => 'Tekstkleur',
          'transparent' => 'Transparent',
          'setTransparent' => 'Transparent instellen',
          'reset' => 'Reset',
          'resetToDefault' => 'Standaardinstellingen terugzetten',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Keyboard snelkoppelingen',
          'close' => 'Sluit',
          'textFormatting' => 'Tekstopmaak',
          'action' => 'Actie',
          'paragraphFormatting' => 'Paragraafopmaak',
          'documentStyle' => 'Documentopmaak',
        ),
        'history' => 
        array (
          'undo' => 'Herstel',
          'redo' => 'Opnieuw',
        ),
      ),
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Voor Import geef Enter',
      'Run Import' => 'Start Importeren',
      'Back' => 'Terug',
      'Field Mapping' => 'Velden Overzicht',
      'Default Values' => 'Voorkeur waarden',
      'Add Field' => 'Veld toevoegen',
      'Created' => 'Gemaakt',
      'Updated' => 'Geupdate',
      'Result' => 'Resultaat',
      'Show records' => 'Toon Velden',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
      'Revert' => 'Terugkeren',
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
      'name' => 'Record Naam',
      'team' => 'Groep',
      'status' => 'Status',
      'assignToUser' => 'Toegewezen aan gebruiker',
      'host' => 'Host',
      'username' => 'Gebruikersnaam',
      'password' => 'Wachtwoord',
      'port' => 'Port',
      'monitoredFolders' => 'Gecontroleerde Folders',
      'trashFolder' => 'Prullenbak Folder',
      'ssl' => 'SSL',
      'createCase' => 'Casus Aanmaken',
      'reply' => 'Antwoord',
      'caseDistribution' => 'Verdeling Casus',
      'replyEmailTemplate' => 'Antw. Email Template',
      'replyFromAddress' => 'Antw. van Adres',
      'replyToAddress' => 'Antwoord Naar Adres',
      'replyFromName' => 'Antw. van Naam',
      'targetUserPosition' => 'Gebruikers Doel',
    ),
    'tooltips' => 
    array (
      'reply' => 'Afzenders berichten wanneer de email goed is aangekomen',
      'createCase' => 'Automatisch casus aanmaken van inkomende emails.',
      'replyToAddress' => 'Specifeer het emailadres van deze mailbox waar reacties in worden ontvangen.',
      'caseDistribution' => 'Hoe casus toegewezen worden. Direct toegewezen aan gebruiker of de groep.',
      'assignToUser' => 'Emails/casus gebruiker worden toegewezen aan.',
      'team' => 'Groep email/casus worden gekoppeld aan.',
      'targetUserPosition' => 'Define the position of users which will be destributed with cases.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Directe-Toewijzing',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Minst-Druk',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Email Gebruiker Instellen',
      'IMAP' => 'IMAP',
      'Actions' => 'Acties',
      'Main' => 'Hoofd',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kan geen verbinding maken met IMAP server',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Geactiveerd',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Geheim',
      'redirectUri' => 'Redirect URI',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Selecteer een integratie in het menu.',
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
      'post' => 'Post',
      'attachments' => 'Bijlagen',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datumnotatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijdzone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Decimaal scheidingsteken',
      'defaultCurrency' => 'Standaard Valuta',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Beveiliging',
      'smtpUsername' => 'Gebruikersnaam',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Wachtwoord',
      'smtpEmailAddress' => 'Email Adres',
      'exportDelimiter' => 'Scheidingsteken Export',
      'receiveAssignmentEmailNotifications' => 'Ontvang bevestiging toewijzingen per email.',
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
        0 => 'Zondag',
        1 => 'Maandag',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Meldingen',
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
      'name' => 'Record Naam',
      'roles' => 'Functies',
      'assignmentPermission' => 'Assignment Permission',
    ),
    'links' => 
    array (
      'users' => 'Gebruikers',
      'teams' => 'Groepen',
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
      'Access' => 'Toegang',
      'Create Role' => 'Functie aanmaken',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'niet-actief',
        'enabled' => 'ingeschakeld',
        'disabled' => 'uitgeschakeld',
      ),
      'levelList' => 
      array (
        'all' => 'allemaal',
        'team' => 'team',
        'own' => 'eigen',
        'no' => 'nee',
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
      'read' => 'Lees',
      'edit' => 'Bewerken',
      'delete' => 'Verwijder',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Alle wijzigingen in een toegangscontrolesysteem worden toegepast nadat de cache is geschoond.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'job' => 'Opdracht',
      'scheduling' => 'Scheduling (crontab notatie)',
    ),
    'links' => 
    array (
      'log' => 'Log',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Geplande Opdracht Aanmaken',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Opschonen',
        'CheckInboundEmails' => 'Controleer Binnenkomende Emails',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Stuur Herinnering Email',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Opgelet; Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'mac' => 'Opgelet; Voeg deze regel toe aan uw crontab bestand tbv de geplande Espo opdrachten:',
        'windows' => 'Opgelet: Maak een batch bestand met de volgende commando\'s om de geplande opdrachten voor Espo onder Windows te gebruiken:',
        'default' => 'Opgelet: Voeg deze regel toe aan de Cron Job (geplande opdracht):',
      ),
      'status' => 
      array (
        'Active' => 'Actief',
        'Inactive' => 'Inactief',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Start Tijd',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Gebruik Cache',
      'dateFormat' => 'Datumnotatie',
      'timeFormat' => 'Tijdnotatie',
      'timeZone' => 'Tijdzone',
      'weekStart' => 'Eerste dag van de Week',
      'thousandSeparator' => 'Duizendtal scheidingsteken',
      'decimalMark' => 'Decimaal scheidingsteken',
      'defaultCurrency' => 'Standaard Valuta',
      'baseCurrency' => 'Basisvaluta',
      'currencyRates' => 'Tariefwaarden',
      'currencyList' => 'Valuta Lijst',
      'language' => 'Taal',
      'companyLogo' => 'Bedrijfslogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Beveiliging',
      'smtpUsername' => 'Gebruikersnaam',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Wachtwoord',
      'outboundEmailFromName' => 'Van Naam',
      'outboundEmailFromAddress' => 'Van Adres',
      'outboundEmailIsShared' => 'Is Gedeeld',
      'recordsPerPage' => 'Records per pagina',
      'recordsPerPageSmall' => 'Records per pagina (Klein)',
      'tabList' => 'Tab lijst',
      'quickCreateList' => 'Lijst aanmaken',
      'exportDelimiter' => 'Scheidingsteken Export',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Authenticatie Methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Gebruikersnaam',
      'ldapPassword' => 'Wachtwoord',
      'ldapBindRequiresDn' => 'Bind vereist DN',
      'ldapBaseDn' => 'Basis Dn',
      'ldapAccountCanonicalForm' => 'Standaard Formulier Gebruiker',
      'ldapAccountDomainName' => 'Domeinnaam Account',
      'ldapTryUsernameSplit' => 'Probeer gesplitste Gebruikersnaam',
      'ldapCreateEspoUser' => 'Gebruiker aanmaken in EspoCRM',
      'ldapSecurity' => 'Beveiliging',
      'ldapUserLoginFilter' => 'Gebruikers Login Filter',
      'ldapAccountDomainNameShort' => 'Korte Gebruikers Domein Naam',
      'ldapOptReferrals' => 'Opt Referentie',
      'disableExport' => 'Exporteren Uitschakelen (Uitsluitend toegestaan voor Admin)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'Verzend Email na Toewijzing',
      'assignmentEmailNotificationsEntityList' => 'Entities om over te informeren',
      'b2cMode' => 'B2C Mode',
      'disableAvatars' => 'Avatar uitschakelen',
      'followCreatedEntities' => 'Follow Created Entities',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Zondag',
        1 => 'Maandag',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Aantal records in relatie kaders.',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => 'Systeem',
      'Locale' => 'Lokaal',
      'SMTP' => 'SMTP',
      'Configuration' => 'Configuratie',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Valutainstellingen',
      'Currency Rtes' => 'Valutakoersen',
      'Notifications' => 'Meldingen',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'roles' => 'Functies',
      'positionList' => 'Overzichtlijst',
    ),
    'links' => 
    array (
      'users' => 'Gebruikers',
    ),
    'tooltips' => 
    array (
      'roles' => 'Alle gebruikers van deze groep krijgen de rechten uit de geselecteerde rollen.',
      'positionList' => 'Beschikbare functies in dit team. Zoals Verkoop, Manager ed.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Groep Aanmaken',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'userName' => 'Gebruikesnaam',
      'title' => 'Titel',
      'isAdmin' => 'Is Admin',
      'defaultTeam' => 'Standaardgroep',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Telefoon',
      'roles' => 'Functies',
      'teamRole' => 'Positie',
      'password' => 'Wachtwoord',
      'passwordConfirm' => 'Bevestig Wachtwoord',
      'newPassword' => 'Nieuw Wachtwoord',
      'newPasswordConfirm' => 'Nieuwe Wachtwoord Bevestigen',
      'avatar' => 'Avatar',
      'isActive' => 'Is Active',
    ),
    'links' => 
    array (
      'teams' => 'Groepen',
      'roles' => 'Functies',
      'targetLists' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Create User' => 'Gebruiker Aanmaken',
      'Generate' => 'Genereer',
      'Access' => 'Toegang',
      'Preferences' => 'Voorkeuren',
      'Change Password' => 'Wachtwoord wijzigen',
      'Teams and Access Control' => 'Groeps toegang beheer',
      'Forgot Password?' => 'Wachtwoord vergeten?',
      'Password Change Request' => 'Verzoek voor aanpassen Wachtwoord',
      'Email Address' => 'Email Adres',
      'External Accounts' => 'External Accounts',
      'Email Accounts' => 'Email Accounts',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Alle records aangemaakt door gebruiker worden standaard aan de groep gekoppeld.',
      'userName' => 'Letters a-z, cijfers 0-9 en underscores zijn toegestaan.',
      'isAdmin' => 'Gebruiker admin heeft overal toegang',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Tot welke groep deze gebruiekr behoord. Toegang beheer is afhankelijk van groep regels.',
      'roles' => 'Aanvullende toegangs regels. Gebruik dit als een gebruiker tot geen enkele groep behoord of als er meer rechten gegeven moeten worden.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Wachtwoord wordt naar het emailadres van de gebruiker verzonden.',
      'accountInfoEmailSubject' => 'Informatie Gebruiker',
      'accountInfoEmailBody' => 'Uw gegevens:

Gebruikersnaam: {userName}
Wachtwoord: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Verzoek tot Wachtwoord verandering',
      'passwordChangeLinkEmailBody' => 'U kunt het wachtwoord veranderen via deze link {link}. Deze unieke link (url) wordt spoedig weer opgeheven.',
      'passwordChanged' => 'Het wachtwoord is gewijzigd',
      'userCantBeEmpty' => 'Gebruikersnaam kan niet leeg zijn',
      'wrongUsernamePasword' => 'Onjuiste gebruikersnaam/wachtwoord',
      'emailAddressCantBeEmpty' => 'Email adres kan niet leeg zijn',
      'userNameEmailAddressNotFound' => 'Gebruikersnaam/Email adres niet gevonden',
      'forbidden' => 'Toegang niet juist, probeer later',
      'uniqueLinkHasBeenSent' => 'Een unieke link is naar het gespecificeerde email adres gezonden.',
      'passwordChangedByRequest' => 'Het wachtwoord is aangepast',
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
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'billingAddress' => 'Factuur Adres',
      'shippingAddress' => 'Verzend Adres',
      'description' => 'Beschrijving',
      'sicCode' => 'Sic Code',
      'industry' => 'Industrie',
      'type' => 'Type',
      'contactRole' => 'Functie',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Contacten',
      'opportunities' => 'Kansen',
      'cases' => 'Casus',
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
        'Customer' => 'Klant',
        'Investor' => 'Investeerder',
        'Partner' => 'Partner',
        'Reseller' => 'Reseller',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotive',
        'Banking' => 'Bankwezen',
        'Biotechnology' => 'Biotechnology',
        'Chemical' => 'Chemical',
        'Computer' => 'Computer',
        'Education' => 'Onderwijs',
        'Electronics' => 'Electronica',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finance',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Insurance' => 'Verzekeringen',
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
        'Apparel' => 'Confectie',
        'Computer Software' => 'Computer Software',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Klant Aanmaken',
      'Copy Billing' => 'Kopieer van Factuur',
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
      'month' => 'Maand',
      'week' => 'Week',
      'day' => 'Dag',
      'agendaWeek' => 'Week',
      'agendaDay' => 'Dag',
    ),
    'labels' => 
    array (
      'Today' => 'Vandaag',
      'Create' => 'Aanmaken',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Eind Datum',
      'direction' => 'Richting',
      'duration' => 'Duur',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'reminders' => 'Herineringen',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Gepland',
        'Held' => 'Vasthouden',
        'Not Held' => 'Niet Vasthouden',
      ),
      'direction' => 
      array (
        'Outbound' => 'Uitgaande',
        'Inbound' => 'Binnenkomende',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Geen',
        'Accepted' => 'Geaccepteerd',
        'Declined' => 'Geweigerd',
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
      'Create Call' => 'Tel. Gesprek Aanmaken',
      'Set Held' => 'Vasthouden',
      'Set Not Held' => 'Niet vasthouden',
      'Send Invitations' => 'Uitnodiging versturen',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Gepland',
      'held' => 'Vasthouden',
      'todays' => 'Huidig',
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
      'name' => 'Record Naam',
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Account',
      'contact' => 'Contact',
      'priority' => 'Prioriteit',
      'type' => 'Type',
      'description' => 'Beschrijving',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'Pending' => 'In afwachting',
        'Closed' => 'Gesloten',
        'Rejected' => 'Afgewezen',
        'Duplicate' => 'Dupliceer',
      ),
      'priority' => 
      array (
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent',
      ),
      'type' => 
      array (
        'Question' => 'Vraag',
        'Incident' => 'Incident',
        'Problem' => 'Probleem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Casus Aanmaken',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'closed' => 'Gesloten',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'account' => 'Account',
      'accounts' => 'Klanten',
      'phoneNumber' => 'Telefoon',
      'accountType' => 'Klant Type',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'opportunityRole' => 'Functie Kansen',
      'accountRole' => 'Functie',
      'description' => 'Beschrijving',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Kansen',
      'cases' => 'Casus',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Contact Aanmaken',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Geen--',
        'Decision Maker' => 'Beslisser',
        'Evaluator' => 'Evaluator',
        'Influencer' => 'Beinvloeder',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Document Aanmaken',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'status' => 'Status',
      'file' => 'Bestand',
      'type' => 'Type',
      'source' => 'Bron',
      'publishDate' => 'Publicatiedatum',
      'expirationDate' => 'Vervaldatum',
      'description' => 'Beschrijving',
    ),
    'links' => 
    array (
      'accounts' => 'Klanten',
      'opportunities' => 'Kansen',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Actief',
        'Draft' => 'Concept',
        'Expired' => 'Vervallen',
        'Canceled' => 'Geannuleerd',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Actief',
      'draft' => 'Concept',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Geconverteerd naar',
      'Create Lead' => 'Lead Aanmaken',
      'Convert' => 'Converteren',
    ),
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'website' => 'Website',
      'phoneNumber' => 'Telefoon',
      'accountName' => 'Naam Klant',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'status' => 'Status',
      'source' => 'Bron',
      'opportunityAmount' => 'Bedrag Kansen',
      'opportunityAmountConverted' => 'Bedrag Kans (geconverteerd)',
      'description' => 'Beschrijving',
      'createdAccount' => 'Account',
      'createdContact' => 'Contact',
      'createdOpportunity' => 'Kans',
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
        'New' => 'Nieuw',
        'Assigned' => 'Toegewezen',
        'In Process' => 'In Behandeling',
        'Converted' => 'Geconverteerd',
        'Recycled' => 'Opnieuw verwerkt',
        'Dead' => 'Dood',
      ),
      'source' => 
      array (
        'Call' => 'Tel. Gesprek',
        'Email' => 'Email',
        'Existing Customer' => 'Bestaande Klant',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Webpagina',
        'Campaign' => 'Campagne',
        'Other' => 'Overig',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Actief',
      'converted' => 'Converted',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Eind Datum',
      'duration' => 'Duur',
      'description' => 'Beschrijving',
      'users' => 'Gebruikers',
      'contacts' => 'Contacten',
      'leads' => 'Leads',
      'reminders' => 'Herineringen',
      'account' => 'Account',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Gepland',
        'Held' => 'Vasthouden',
        'Not Held' => 'Niet Vasthouden',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Geen',
        'Accepted' => 'Geaccepteerd',
        'Declined' => 'Geweigerd',
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
      'Create Meeting' => 'Plan Vergadering',
      'Set Held' => 'Vasthouden',
      'Set Not Held' => 'Niet vasthouden',
      'Send Invitations' => 'Uitnodiging versturen',
      'on time' => 'op tijd',
      'before' => 'voordat',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Gepland',
      'held' => 'Vasthouden',
      'todays' => 'Huidig',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'account' => 'Account',
      'stage' => 'Stadium',
      'amount' => 'Aantal',
      'probability' => 'Waarschijnlijkheid, %',
      'leadSource' => 'Leadbron',
      'doNotCall' => 'Niet Bellen',
      'closeDate' => 'Datum gesloten',
      'contacts' => 'Contacten',
      'description' => 'Beschrijving',
      'amountConverted' => 'Bedrag (geconverteerd)',
      'amountWeightedConverted' => 'Afgewogen bedrag',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Contacten',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospectie',
        'Qualification' => 'Kwalificatie',
        'Needs Analysis' => 'Analyse behoefte',
        'Value Proposition' => 'Waarde voorstel',
        'Id. Decision Makers' => 'Id. Beslissers',
        'Perception Analysis' => 'Perceptie Analyse',
        'Proposal/Price Quote' => 'Voorstel/Offerte',
        'Negotiation/Review' => 'Onderhandeling/Beoordeling',
        'Closed Won' => 'Gesloten Gewonnen',
        'Closed Lost' => 'Gesloten Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Kans aanmaken',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'won' => 'Gewonnen',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Record Naam',
      'emailAddress' => 'Email',
      'title' => 'Titel',
      'website' => 'Website',
      'accountName' => 'Naam Klant',
      'phoneNumber' => 'Telefoon',
      'doNotCall' => 'Niet Bellen',
      'address' => 'Adres',
      'description' => 'Beschrijving',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Target Aanmaken',
      'Convert to Lead' => 'Naar Lead converteren',
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
      'name' => 'Record Naam',
      'parent' => 'Behorende bij',
      'status' => 'Status',
      'dateStart' => 'Start Datum',
      'dateEnd' => 'Vervaldatum',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Prioriteit',
      'description' => 'Beschrijving',
      'isOverdue' => 'Te Laat',
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
        'Not Started' => 'Niet Gestart',
        'Started' => 'Gestart',
        'Completed' => 'Voltooid',
        'Canceled' => 'Geannuleerd',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Laag',
        'Normal' => 'Normaal',
        'High' => 'Hoog',
        'Urgent' => 'Urgent',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Taak Aanmaken',
      'Complete' => 'Voltooien',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Werkelijke',
      'completed' => 'Voltooid',
      'todays' => 'Huidig',
      'overdue' => 'Laat',
    ),
  ),
);

?>