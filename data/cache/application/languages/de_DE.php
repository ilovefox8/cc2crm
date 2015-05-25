<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Aktiv',
      'Disabled' => 'Inaktiv',
      'System' => 'System',
      'Users' => 'Benutzer',
      'Email' => 'E-Mail',
      'Data' => 'Daten',
      'Customization' => 'Anpassung',
      'Available Fields' => 'Verfügbare Felder',
      'Layout' => 'Aktuelles Layout',
      'Entity Manager' => 'Entitäts-/Modulmanager',
      'Add Panel' => 'Panel hinzufügen',
      'Add Field' => 'Feld hinzufügen',
      'Settings' => 'Einstellungen',
      'Scheduled Jobs' => 'Geplante Jobs',
      'Upgrade' => 'Aktualisierung',
      'Clear Cache' => 'Cache leeren',
      'Rebuild' => 'Neu aufbauen',
      'Teams' => 'Teams',
      'Roles' => 'Rollen',
      'Outbound Emails' => 'Ausgehende E-Mails',
      'Inbound Emails' => 'Eingehende E-Mails',
      'Email Templates' => 'E-Mail Vorlagen',
      'Import' => 'Import',
      'Layout Manager' => 'Layouts anpassen',
      'User Interface' => 'Benutzeroberfläche',
      'Auth Tokens' => 'Auth Tokens',
      'Authentication' => 'Authentifizierung',
      'Currency' => 'Währung',
      'Integrations' => 'Integrationen',
      'Extensions' => 'Erweiterungen',
      'Upload' => 'Hochladen',
      'Installing...' => 'Installiere...',
      'Upgrading...' => 'Aktualisiere....',
      'Upgraded successfully' => 'Erfolgreich aktualisiert',
      'Installed successfully' => 'Erfolgreich installiert',
      'Ready for upgrade' => 'Bereit für Aktualisierung',
      'Run Upgrade' => 'Aktualisierung duchführen',
      'Install' => 'Installieren',
      'Ready for installation' => 'Bereit für Installation',
      'Uninstalling...' => 'Deinstalliere...',
      'Uninstalled' => 'Deinstalliert',
      'Create Entity' => 'Entität/Modul erstellen',
      'Edit Entity' => 'Entität/Modul bearbeiten',
      'Create Link' => 'Relation erstellen',
      'Edit Link' => 'Relation bearbeiten',
      'Notifications' => 'Notifications',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detail',
      'listSmall' => 'Liste (Klein)',
      'detailSmall' => 'Detail (Klein)',
      'filters' => 'Suchfilter',
      'massUpdate' => 'Massenänderung',
      'relationships' => 'Beziehungen',
      'detailConvert' => 'Interessent umwandeln',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adresse',
      'array' => 'Mehrfachauswahl',
      'foreign' => 'Fremdbezug',
      'duration' => 'Dauer',
      'password' => 'Passwort',
      'parsonName' => 'Person Name',
      'autoincrement' => 'Automatisch hochzählen',
      'bool' => 'Bool',
      'currency' => 'Währung',
      'date' => 'Datum',
      'datetime' => 'Datum/Zeit',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'E-Mail',
      'enum' => 'Einfachauswahl',
      'enumInt' => 'Einfachauswahl Ganzzahlwerte',
      'enumFloat' => 'Einfachauswahl Fließkommawerte',
      'float' => 'Fließkomma',
      'int' => 'Ganzzahl',
      'link' => 'Link',
      'linkMultiple' => 'Mehrfachlinks',
      'linkParent' => 'Übergeordneter Link',
      'multienim' => 'Mehrfachauswahl',
      'phone' => 'Telefon',
      'text' => 'Textbox',
      'url' => 'URL',
      'varchar' => 'Text (max. 255)',
      'file' => 'Datei',
      'image' => 'Bild',
      'multiEnum' => 'Mehrfachauswahl',
    ),
    'fields' => 
    array (
      'type' => 'Typ',
      'name' => 'Name',
      'label' => 'Bezeichnung',
      'required' => 'Erforderlich',
      'default' => 'Standard',
      'maxLength' => 'Maximallänge',
      'options' => 'Optionen',
      'after' => 'Nach (Feld)',
      'before' => 'Vor (Feld)',
      'link' => 'Link',
      'field' => 'Feld',
      'min' => 'Min',
      'max' => 'Max',
      'translation' => 'Übersetzung',
      'previewSize' => 'Vorschau Größe',
      'noEmptyString' => 'No Empty String',
      'defaultType' => 'Default Type',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'Ihr EspoCRM wird nun auf Version <strong>{version}</strong> aktualisiert. Dies kann einige Zeit dauern.',
      'upgradeDone' => 'Ihr EspoCRM wurde auf Version <strong>{version}</strong> aktualisiert. Laden Sie Sie Ihr Browser Fenster neu.',
      'upgradeBackup' => 'Wir empfehlen, vor der Aktualisierung von EspoCRM das Programmverzeichnis sowie die Datenbank zu sichern.',
      'thousandSeparatorEqualsDecimalMark' => 'Das Tausendertrennzeichen kann nicht gleich dem Dezimaltrennzeichen sein',
      'userHasNoEmailAddress' => 'Der Benutzer hat keine E-Mail Adresse.',
      'selectEntityType' => 'Modul/Entität links auswählen',
      'selectUpgradePackage' => 'Aktualisierungspaket auswählen',
      'downloadUpgradePackage' => 'Benötigte Aktualisierungs Paket(e) <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/">hier</a> herunterladen.',
      'selectLayout' => 'Layout zum Editieren links auswählen',
      'selectExtensionPackage' => 'Erweiterungspaket auswählen',
      'extensionInstalled' => 'Erweiterung {name} {version} wurde installiert.',
      'installExtension' => 'Erweiterung {name} {version} ist bereit für die Installation',
      'uninstallConfirmation' => 'Wollen Sie die Erweiterung wirklich deinstallieren?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Systemeinstellungen der Applikation.',
      'scheduledJob' => 'Aufgaben die durch einen Cronjob ausgeführt werden.',
      'upgrade' => 'EspoCRM aktualisieren.',
      'clearCache' => 'Alle Cache Dateien leeren.',
      'rebuild' => 'Wiederherstellung des Backends und Leeren des Cache.',
      'users' => 'Benutzerverwaltung.',
      'teams' => 'Teamverwaltung.',
      'roles' => 'Rollenverwaltung.',
      'outboundEmails' => 'SMTP Einstellungen für ausgehende E-Mails.',
      'inboundEmails' => 'IMAP Gruppenkonten. E-Mail Import und E-Mails für Fälle.',
      'emailTemplates' => 'Vorlagen für ausgehende E-Mails.',
      'import' => 'Datenimport aus CSV Datei.',
      'layoutManager' => 'Layouts anpassen (Liste, Detailansicht, Bearbeitungsansicht, Suche, Massenaktualisierung).',
      'entityManager' => 'Module/Entitäten selbst erstellen, existente bearbeiten, Felder und Relationen verwalten.',
      'userInterface' => 'Benutzeroberfläche anpassen.',
      'authTokens' => 'Aktive Auth Sessions. IP Adresse und letztes Zugriffsdatum,',
      'authentication' => 'Authentifizierungs Einstellungen.',
      'currency' => 'Währungseinstellungen und Kurse',
      'extensions' => 'Erweiterungen installieren oder deinstallieren',
      'integrations' => 'Integration mit Drittanbietern ',
      'notifications' => 'In-app and email notification settings.',
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
      'width' => 'Breite (%)',
      'link' => 'Link',
      'notSortable' => 'Nicht sortierbar',
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'user' => 'Benutzer',
      'ipAddress' => 'IP Adresse',
      'lastAccess' => 'Letztes Zugriffsdatum',
      'createdAt' => 'Login Datum',
    ),
  ),
  'DashletOptions' => 
  array (
    'fields' => 
    array (
      'title' => 'Funktion',
      'dateFrom' => 'Von Datum',
      'dateTo' => 'Bis Datum',
      'autorefreshInterval' => 'Aktualisierungsintervall',
      'displayRecords' => 'Sätze anzeigen',
      'isDoubleHeight' => 'Zweifache Höhe',
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
      'name' => 'Betreff',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateSent' => 'Sendedatum',
      'from' => 'Von',
      'to' => 'An',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'selectTemplate' => 'Vorlage wählen',
      'fromEmailAddress' => 'Von Adresse',
      'toEmailAddresses' => 'An Adresse',
      'emailAddress' => 'E-Mail Adresse',
      'deliveryDate' => 'Zustelldatum',
      'account' => 'Account',
      'users' => 'Users',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Entwurf',
      'Sending' => 'Wird gesendet',
      'Sent' => 'Gesendet',
      'Archived' => 'Archiviert',
      'Received' => 'Received',
    ),
    'labels' => 
    array (
      'Create Email' => 'E-Mail archivieren',
      'Archive Email' => 'E-Mail archivieren',
      'Compose' => 'Erstellen',
      'Reply' => 'Antworten',
      'Reply to All' => 'Allen antworten',
      'Forward' => 'Weiterleiten',
      'Original message' => 'Originalnachricht',
      'Forwarded message' => 'Weitergeleitete Nachricht:',
      'Email Accounts' => 'E-Mail Konten',
      'Send Test Email' => 'Test E-Mail senden',
      'Send' => 'Senden',
      'Email Address' => 'E-Mail Adresse',
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
      'noSmtpSetup' => 'Keine SMTP Einstellungen {link}.',
      'testEmailSent' => 'Eine Test E-Mail wurde gesendet',
      'emailSent' => 'Email has been sent',
      'savedAsDraft' => 'Saved as draft',
    ),
    'presetFilters' => 
    array (
      'sent' => 'Gesendet',
      'archived' => 'Archiviert',
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
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachte Ordner',
      'ssl' => 'SSL',
      'fetchSince' => 'Holen seit',
      'emailAddress' => 'Email Address',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
    'labels' => 
    array (
      'Create EmailAccount' => 'E-Mail Konto erstellen',
      'IMAP' => 'IMAP',
      'Main' => 'Wichtig',
      'Test Connection' => 'Test Connection',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
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
      'Primary' => 'Primär',
      'Opted Out' => 'Keine E-Mails',
      'Invalid' => 'Ungültig',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'isHtml' => 'Ist HTML',
      'body' => 'Inhalt',
      'subject' => 'Betreff',
      'attachments' => 'Anhänge',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'E-Mail Vorlage erstellen',
    ),
  ),
  'EntityManager' => 
  array (
    'labels' => 
    array (
      'Fields' => 'Felder',
      'Relationships' => 'Beziehungen',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'type' => 'Typ',
      'labelSingular' => 'Bezeichnung Einzahl',
      'labelPlural' => 'Bezeichnung Mehrzahl',
      'stream' => 'Vorgänge',
      'label' => 'Bezeichnung',
      'linkType' => 'Relationstyp',
      'entityForeign' => 'Fremdentität/-modul',
      'linkForeign' => 'Remdrelation/-modul',
      'link' => 'Link',
      'labelForeign' => 'Fremdbezeichnung',
      'sortBy' => 'Default Order (field)',
      'sortDirection' => 'Default Order (direction)',
    ),
    'options' => 
    array (
      'type' => 
      array (
        '' => 'Kein(e)',
        'Base' => 'Basis',
        'Person' => 'Person',
        'CategoryTree' => 'Category Tree',
      ),
      'linkType' => 
      array (
        'manyToMany' => 'Viele zu Viele',
        'oneToMany' => 'Eins zu Viele',
        'manyToOne' => 'Viele zu EIns',
        'parentToChildren' => 'Vater zu KInd',
        'childrenToParent' => 'Kind zu Vater',
      ),
      'sortDirection' => 
      array (
        'asc' => 'Ascending',
        'desc' => 'Descending',
      ),
    ),
    'messages' => 
    array (
      'entityCreated' => 'Entität wurde erstellt',
      'linkAlreadyExists' => 'Konflikt: Relation besteht bereits',
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'version' => 'Version',
      'description' => 'Beschreibung',
      'isInstalled' => 'Installiert',
    ),
    'labels' => 
    array (
      'Uninstall' => 'Deinstallieren',
      'Install' => 'Installieren',
    ),
    'messages' => 
    array (
      'uninstalled' => 'Erweiterung {name} wurde deinstalliert',
    ),
  ),
  'ExternalAccount' => 
  array (
    'labels' => 
    array (
      'Connect' => 'Verbinden',
      'Connected' => 'Verbunden',
    ),
    'help' => 
    array (
    ),
  ),
  'Global' => 
  array (
    'scopeNames' => 
    array (
      'Email' => 'E-Mail',
      'User' => 'Benutzer',
      'Team' => 'Team',
      'Role' => 'Rolle',
      'EmailTemplate' => 'E-Mail Vorlage',
      'EmailAccount' => 'E-Mail Konto',
      'EmailAccountScope' => 'E-Mail Konto',
      'OutboundEmail' => 'Ausgehende E-Mail',
      'ScheduledJob' => 'Geplante Aufgabe',
      'ExternalAccount' => 'Externes Konto',
      'Extension' => 'Erweiterung',
      'Dashboard' => 'Übersicht',
      'InboundEmail' => 'Eingehende E-Mails',
      'Stream' => 'Vorgänge',
      'Import' => 'Import',
      'Account' => 'Firma',
      'Contact' => 'Kontakt',
      'Lead' => 'Interessent',
      'Target' => 'Zielkontakt',
      'Opportunity' => 'Verkaufschance',
      'Meeting' => 'Meeting',
      'Calendar' => 'Kalender',
      'Call' => 'Anruf',
      'Task' => 'Aufgabe',
      'Case' => 'Fall',
      'Document' => 'Dokument',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'E-Mails',
      'User' => 'Benutzer',
      'Team' => 'Teams',
      'Role' => 'Rollen',
      'EmailTemplate' => 'E-Mail Vorlagen',
      'EmailAccount' => 'E-Mail Konten',
      'EmailAccountScope' => 'E-Mail Konten',
      'OutboundEmail' => 'Ausgehende E-Mails',
      'ScheduledJob' => 'Geplante Jobs',
      'ExternalAccount' => 'Externe Konten',
      'Extension' => 'Erweiterungen',
      'Dashboard' => 'Übersicht',
      'InboundEmail' => 'Eingehende E-Mails',
      'Stream' => 'Vorgänge',
      'Import' => 'Import Results',
      'Account' => 'Firmen',
      'Contact' => 'Kontakte',
      'Lead' => 'Interessenten',
      'Target' => 'Zielkontakte',
      'Opportunity' => 'Verkaufschancen',
      'Meeting' => 'Meetings',
      'Calendar' => 'Kalender',
      'Call' => 'Anrufe',
      'Task' => 'Aufgaben',
      'Case' => 'Fälle',
      'Document' => 'Dokumente',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Misc' => 'Verschiedenes',
      'Merge' => 'Zusammenführen',
      'None' => 'Kein(e)',
      'by' => 'von',
      'Saved' => 'Gespeichert.',
      'Error' => 'Fehler',
      'Select' => 'Auswählen',
      'Not valid' => 'Ungültig',
      'Please wait...' => 'Bitte warten...',
      'Please wait' => 'Bitte warten',
      'Loading...' => 'Lade...',
      'Uploading...' => 'Lade hoch...',
      'Sending...' => 'Wird gesendet...',
      'Merging...' => 'Zusammenführen',
      'Merged' => 'Zusammengeführt',
      'Removed' => 'Gelöscht',
      'Posted' => 'Geposted',
      'Linked' => 'Verlinkt',
      'Unlinked' => 'Verknüpfung gelöscht',
      'Access denied' => 'Zugriff verweigert',
      'Access' => 'Zugang',
      'Are you sure?' => 'Sind Sie sicher?',
      'Record has been removed' => 'Datensatz wurde gelöscht',
      'Wrong username/password' => 'Falscher Benutzername/Passwort',
      'Post cannot be empty' => 'Notiz darf nicht leer sein',
      'Removing...' => 'Lösche...',
      'Unlinking...' => 'Lösche Verknüpfung...',
      'Posting...' => 'Poste...',
      'Username can not be empty!' => 'Der Benutzername darf nicht leer sein!',
      'Cache is not enabled' => 'Cache ist nicht aktiviert',
      'Cache has been cleared' => 'Der Cache wurde geleert',
      'Rebuild has been done' => 'Wiederherstellen wurde durchgeführt',
      'Saving...' => 'Speichere...',
      'Modified' => 'Verändert',
      'Created' => 'Erstellt',
      'Create' => 'Erstellen',
      'create' => 'erstellen',
      'Overview' => 'Überblick',
      'Details' => 'Details',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Dashlet hinzufügen',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Hinzufügen',
      'Reset' => 'Zurücksetzen',
      'Menu' => 'Menü',
      'More' => 'Mehr',
      'Search' => 'Suchen',
      'Only My' => 'Nur Meine',
      'Open' => 'Offen',
      'Admin' => 'Admin',
      'About' => 'Über',
      'Refresh' => 'Aktualisieren',
      'Remove' => 'Löschen',
      'Options' => 'Optionen',
      'Username' => 'Benutzername',
      'Password' => 'Passwort',
      'Login' => 'Anmelden',
      'Log Out' => 'Abmelden',
      'Preferences' => 'Benutzereinstellungen',
      'State' => 'Bundesland/Kanton',
      'Street' => 'Straße',
      'Country' => 'Land',
      'City' => 'Ort',
      'PostalCode' => 'PLZ',
      'Followed' => 'Beobachtet',
      'Follow' => 'Beobachten',
      'Clear Local Cache' => 'Lokalen Cache leeren',
      'Actions' => 'Aktionen',
      'Delete' => 'Löschen',
      'Update' => 'Aktualisieren',
      'Save' => 'Speichern',
      'Edit' => 'Bearbeiten',
      'View' => 'View',
      'Cancel' => 'Abbrechen',
      'Unlink' => 'Link entfernen',
      'Mass Update' => 'Massenänderung',
      'Export' => 'Exportieren',
      'No Data' => 'Keine Daten',
      'No Access' => 'Kein Zugriff',
      'All' => 'Alle',
      'Active' => 'Aktiv',
      'Inactive' => 'Inaktiv',
      'Write your comment here' => 'Notiz hier einfügen',
      'Post' => 'Senden',
      'Stream' => 'Vorgänge',
      'Show more' => 'Mehr anzeigen',
      'Dashlet Options' => 'Dashlet Optionen',
      'Full Form' => 'Komplettes Formular',
      'Insert' => 'Einfügen',
      'Person' => 'Person',
      'First Name' => 'Vorname',
      'Last Name' => 'Nachname',
      'Original' => 'Original',
      'You' => 'Sie',
      'you' => 'Sie',
      'change' => 'ändern',
      'Change' => 'Ändern',
      'Primary' => 'Primär',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administration',
      'Run Import' => 'Import durchführen',
      'Duplicate' => 'Duplizieren',
      'Notifications' => 'Benachrichtigungen',
      'Mark all read' => 'Alle als gelesen markieren',
      'See more' => 'Mehr anzeigen',
      'Today' => 'Heute',
      'Tomorrow' => 'Morgen',
      'Yesterday' => 'Gestern',
      'Submit' => 'Ausführen',
      'Close' => 'Schließen',
      'Yes' => 'Ja',
      'No' => 'Nein',
      'Select All Result' => 'Select All Result',
      'Value' => 'Value',
      'Current version' => 'Current version',
      'List View' => 'List View',
      'Tree View' => 'Tree View',
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'Activities' => 'Aktivitäten',
      'History' => 'Verlauf',
      'Attendees' => 'Teilnehmer',
      'Schedule Meeting' => 'Meeting planen',
      'Schedule Call' => 'Anruf planen',
      'Compose Email' => 'E-Mail erstellen',
      'Log Meeting' => 'Meeting erfassen',
      'Log Call' => 'Anruf erfassen',
      'Archive Email' => 'E-Mail archivieren',
      'Create Task' => 'Neue Aufgabe',
      'Tasks' => 'Aufgaben',
      'Add Filter' => 'Filter hinzufügen',
      'Save Filters' => 'Filter speichern',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Sie haben den Datensatz nicht geändert',
      'duplicate' => 'Der Datensatz den Sie erstellen wollen, könnte eine Dublette sein',
      'fieldIsRequired' => '{field} wird benötigt',
      'fieldShouldBeEmail' => '{field} muss eine gültige E-Mail sein',
      'fieldShouldBeFloat' => '{field} muss eine gültige Fließkomma Zahl sein',
      'fieldShouldBeInt' => '{field} muss eine gültige Ganzzahl sein',
      'fieldShouldBeDate' => '{field} muss ein gültiges Datum sein',
      'fieldShouldBeDatetime' => '{field} muss ein gültiges Datum/Zeit Feld sein',
      'fieldShouldAfter' => '{field} muss nach {otherField} sein',
      'fieldShouldBefore' => '{field} muss vor {otherField} sein',
      'fieldShouldBeBetween' => '{field} muss zwischen {min} und {max} sein',
      'fieldShouldBeLess' => '{field} muss kleiner als {value} sein',
      'fieldShouldBeGreater' => '{field} muss größer als {value} sein',
      'fieldBadPasswordConfirm' => '{field} falsch bestätigt',
      'resetPreferencesDone' => 'Die Einstellungen wurden auf Standardwerte zurückgesetzt',
      'assignmentEmailNotificationSubject' => 'EspoCRM {entityType}: {Entity.name}',
      'assignmentEmailNotificationBody' => '{assignerUserName} hat {entityType} \'{Entity.name}\' an Sie zugewiesen {recordUrl}',
      'confirmation' => 'Sind Sie sicher?',
      'resetPreferencesConfirmation' => 'Sind Sie sicher dass Sie die Einstellungen auf Standardwerte zurücksetzen wollen?',
      'removeRecordConfirmation' => 'Sind Sie sicher, dass Sie den Eintrag löschen wollen?',
      'unlinkRecordConfirmation' => 'Sind Sie sicher dass Sie diese Beziehung lösen möchten?',
      'removeSelectedRecordsConfirmation' => 'Sind Sie sicher dass Sie die ausgewählten Sätze löschen möchten?',
      'massUpdateResult' => '{count} Einträge wurden aktualisiert',
      'massUpdateResultSingle' => '{count} Eintrag wurde aktualisiert',
      'noRecordsUpdated' => 'Es wurden keine Einträge aktualisiert',
      'massRemoveResult' => '{count} Einträge wurden gelöscht',
      'massRemoveResultSingle' => '{count} Eintrag wurde gelöscht',
      'noRecordsRemoved' => 'Es wurden keine Einträge gelöscht',
      'clickToRefresh' => 'Klicken um zu aktualisieren',
      'streamPostInfo' => 'Schreiben Sie <strong>@username</strong> um Benutzer in der Notiz hervorzuheben.

Verfügbare Syntax:
`<code>Code</code>`
**<strong>fetter Text</strong>**
*<em>Hervorgehobener Text</em>*
~<del>Durchgestrichen</del>~
> blockquote
(url)[link]',
    ),
    'boolFilters' => 
    array (
      'onlyMy' => 'Nur Meine',
      'followed' => 'Followed',
      'open' => 'Offen',
      'active' => 'Aktiv',
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
      'name' => 'Name',
      'firstName' => 'Vorname',
      'lastName' => 'Nachname',
      'salutationName' => 'Anrede',
      'assignedUser' => 'Zugewiesener Benutzer',
      'emailAddress' => 'E-Mail',
      'assignedUserName' => 'Zugewiesener Benutzername',
      'teams' => 'Teams',
      'createdAt' => 'Erstellt am',
      'modifiedAt' => 'Geändert am',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'description' => 'Beschreibung',
      'address' => 'Adresse',
      'phoneNumber' => 'Telefon',
      'phoneNumberMobile' => 'Phone (Mobile)',
      'phoneNumberHome' => 'Phone (Home)',
      'phoneNumberFax' => 'Phone (Fax)',
      'phoneNumberOffice' => 'Phone (Office)',
      'phoneNumberOther' => 'Phone (Other)',
      'order' => 'Order',
      'parent' => 'Parent',
      'children' => 'Children',
      'billingAddressCity' => 'Ort',
      'billingAddressCountry' => 'Land',
      'billingAddressPostalCode' => 'PLZ',
      'billingAddressState' => 'Bundesland/Kanton',
      'billingAddressStreet' => 'Straße',
      'addressCity' => 'Ort',
      'addressStreet' => 'Straße',
      'addressCountry' => 'Land',
      'addressState' => 'Bundesland/Kanton',
      'addressPostalCode' => 'PLZ',
      'shippingAddressCity' => 'Ort (Lieferadresse)',
      'shippingAddressStreet' => 'Straße (Lieferadresse)',
      'shippingAddressCountry' => 'Land (Lieferadresse)',
      'shippingAddressState' => 'Bundesland/Kanton (Lieferadresse)',
      'shippingAddressPostalCode' => 'PLZ (Lieferadresse)',
    ),
    'links' => 
    array (
      'assignedUser' => 'Zugewiesener Benutzer',
      'createdBy' => 'Erstellt von',
      'modifiedBy' => 'Geändert von',
      'team' => 'Team',
      'roles' => 'Rollen',
      'teams' => 'Teams',
      'users' => 'Benutzer',
      'parent' => 'Bezieht sich auf',
      'children' => 'Children',
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'leads' => 'Interessenten',
      'meetings' => 'Meetings',
      'calls' => 'Anrufe',
      'tasks' => 'Aufgaben',
      'emails' => 'E-Mails',
      'accounts' => 'Firmen',
      'cases' => 'Fälle',
      'documents' => 'Dokumente',
      'account' => 'Firma',
      'opportunity' => 'Verkaufschance',
      'contact' => 'Kontakt',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Vorgänge',
      'Leads' => 'Meine Interessenten',
      'Opportunities' => 'Meine Verkaufschancen',
      'Tasks' => 'Meine Aufgaben',
      'Cases' => 'Meine Fälle',
      'Calendar' => 'Kalender',
      'Calls' => 'Meine Anrufe',
      'Meetings' => 'Meine Meetings',
      'OpportunitiesByStage' => 'Verkaufschancen nach Verkaufsphase',
      'OpportunitiesByLeadSource' => 'Verkaufschancen nach Quelle',
      'SalesByMonth' => 'Umsätze nach Monat',
      'SalesPipeline' => 'Verkaufspipeline',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} hat {entityType} {entity} erstellt',
      'createAssigned' => '{user} hat {entityType} {entity} erstellt und an {assignee} zugewiesen',
      'assign' => '{user} hat {entityType} {entity} an {assignee} zugewiesen',
      'post' => '{user} hat zu {entityType} {entity} notiert',
      'attach' => '{user} hat zu {entityType} {entity} hinzugefügt',
      'status' => '{user} hat {field} von {entityType} {entity} aktualisiert',
      'update' => '{user} hat {entityType} {entity} aktualisiert',
      'createRelated' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit {entityType} {entity} erstellt',
      'mentionInPost' => '{user} erwähnte {mentioned} zu {entityType} {entity}',
      'createThis' => '{user} hat {entityType} erstellt',
      'createAssignedThis' => '{user} hat {entityType} erstellt und an {assignee} zugewiesen',
      'assignThis' => '{user} hat {entityType} an {assignee} zugewiesen',
      'postThis' => '{user} hat notiert',
      'attachThis' => '{user} hat hinzugefügt',
      'statusThis' => '{user} hat {field} aktualisiert',
      'updateThis' => '{user} hat diese(s/n) {entityType} aktualisiert',
      'createRelatedThis' => '{user} hat {relatedEntityType} {relatedEntity} verbunden mit diesem (r) {entityType} hinzugefügt',
      'emailReceivedFromThis' => 'E-Mail wurde empfangen von {from}',
      'emailReceivedInitialFromThis' => 'E-Mail wurde empfangen von {from} und {entityType} wurde erstellt',
      'emailReceivedThis' => '{entity} wurde empfangen',
      'emailReceivedInitialThis' => 'E-Mail wurde empfangen und {entityType} wurde erstellt',
      'emailReceivedFrom' => 'E-Mail verbunden mit {entityType} {entity} wurde von {from} empfangen',
      'emailReceivedFromInitial' => 'E-Mail wurde empfangen von {from} und hat {entityType} {entity} erstellt',
      'emailReceived' => 'E-Mail verbunden mit {entityType} {entity} wurde empfangen',
      'emailReceivedInitial' => 'E-Mail wurde empfangen und hat {entityType} {entity} erstellt',
      'emailReceivedInitialFrom' => 'E-Mail wurde empfangen von {from} und hat {entityType} {entity} erstellt',
      'emailSent' => '{by} hat E-Mail  verbunden mit {entityType} {entity} gesendet',
      'emailSentThis' => '{by} hat E-Mail gesendet',
    ),
    'lists' => 
    array (
      'monthNames' => 
      array (
        0 => 'Januar',
        1 => 'Februar',
        2 => 'März',
        3 => 'April',
        4 => 'Mai',
        5 => 'Juni',
        6 => 'Juli',
        7 => 'August',
        8 => 'September',
        9 => 'Oktober',
        10 => 'November',
        11 => 'Dezember',
      ),
      'monthNamesShort' => 
      array (
        0 => 'Jan',
        1 => 'Feb',
        2 => 'Mär',
        3 => 'Apr',
        4 => 'Mai',
        5 => 'Jun',
        6 => 'Jul',
        7 => 'Aug',
        8 => 'Sep',
        9 => 'Okt',
        10 => 'Nov',
        11 => 'Dez',
      ),
      'dayNames' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
        2 => 'Dienstag',
        3 => 'Mittwoch',
        4 => 'Donnerstag',
        5 => 'Freitag',
        6 => 'Samstag',
      ),
      'dayNamesShort' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
      'dayNamesMin' => 
      array (
        0 => 'So',
        1 => 'Mo',
        2 => 'Di',
        3 => 'Mi',
        4 => 'Do',
        5 => 'Fr',
        6 => 'Sa',
      ),
    ),
    'options' => 
    array (
      'salutationName' => 
      array (
        'Mr.' => 'Mr.',
        'Mrs.' => 'Mrs.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Dr.',
        'Hr.' => 'Hr.',
        'Fr.' => 'Fr.',
        'Prof.' => 'Prof.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Aserbaidschanisch',
        'be_BY' => 'Weissrussisch',
        'bg_BG' => 'Bulgarisch',
        'bn_IN' => 'Benglaisch',
        'bs_BA' => 'Bosnisch',
        'ca_ES' => 'Katalanisch',
        'cs_CZ' => 'Tschechisch',
        'cy_GB' => 'Walisisch',
        'da_DK' => 'Dänisch',
        'de_DE' => 'Deutsch',
        'el_GR' => 'Griechisch',
        'en_GB' => 'Englisch (UK)',
        'en_US' => 'Englisch (US)',
        'es_ES' => 'Spanisch (ES)',
        'et_EE' => 'Estnisch',
        'eu_ES' => 'Baskisch',
        'fa_IR' => 'Persisch',
        'fi_FI' => 'Finnisch',
        'fo_FO' => 'Färöisch',
        'fr_CA' => 'Französisch (CN)',
        'fr_FR' => 'Französisch (FR)',
        'ga_IE' => 'Irisch',
        'gl_ES' => 'Galizisch',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebräisch',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Kroatisch',
        'hu_HU' => 'Ungarisch',
        'hy_AM' => 'Armenisch',
        'id_ID' => 'Indonesisch',
        'is_IS' => 'Isländisch',
        'it_IT' => 'Italienisch',
        'ja_JP' => 'Japanisch',
        'ka_GE' => 'Georgisch',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Koreanisch',
        'ku_TR' => 'Kurdisch',
        'lt_LT' => 'Litauisch',
        'lv_LV' => 'Lettisch',
        'mk_MK' => 'Mazedonisch',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malaiisch',
        'nb_NO' => 'Norwegisch Bokmál',
        'nn_NO' => 'Norwegisch Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Niederländisch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polnisch',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portugiesisch (BR)',
        'pt_PT' => 'Portugiesisch (PT)',
        'ro_RO' => 'Rumänisch',
        'ru_RU' => 'Russisch',
        'sk_SK' => 'Slowakisch',
        'sl_SI' => 'Slowenisch',
        'sq_AL' => 'Albanisch',
        'sr_RS' => 'Serbisch',
        'sv_SE' => 'Schwedisch',
        'sw_KE' => 'Suaheli',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thailändisch',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Tükisch',
        'uk_UA' => 'Ukrainisch',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamesisch',
        'zh_CN' => 'Chinesisch vereinfacht (CN)',
        'zh_HK' => 'Chinesisch traditionell (HK)',
        'zh_TW' => 'Chinesisch traditionell (TW)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Am',
        'notOn' => 'Nicht am',
        'after' => 'Nach',
        'before' => 'Vor',
        'between' => 'Zwischen',
        'today' => 'Heute',
        'past' => 'Vergangenheit',
        'future' => 'Zukunft',
        'currentMonth' => 'Aktuelles Monat',
        'lastMonth' => 'Letzten Monat',
        'currentQuarter' => 'Aktuelles Quartal',
        'lastQuarter' => 'Letztes Quartal',
        'currentYear' => 'Aktuelles Jahr',
        'lastYear' => 'Letztes Jahr',
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
        'equals' => 'Gleich',
        'notEquals' => 'Nicht gleich',
        'greaterThan' => 'Größer als',
        'lessThan' => 'Weniger als',
        'greaterThanOrEquals' => 'Größer oder gleich als',
        'lessThanOrEquals' => 'Weniger oder gleich als',
        'between' => 'Zwischen',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Kein(e)',
        '0.5' => '30 Sekunden',
        1 => '1 Minute',
        2 => '2 Minuten',
        5 => '5 Minuten',
        10 => '10 Minuten',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Telefon Mobil',
        'Office' => 'Telefon Büro',
        'Fax' => 'Fax',
        'Home' => 'Telefon Privat',
        'Other' => 'Andere',
      ),
      'reminderTypes' => 
      array (
        'Popup' => 'Popup',
        'Email' => 'E-Mail',
      ),
    ),
    'sets' => 
    array (
      'summernote' => 
      array (
        'NOTICE' => 'Sie finden die Übersetzung hier: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Fett',
          'italic' => 'Kursiv',
          'underline' => 'Unterstrichen',
          'strike' => 'Durchgestrichen',
          'clear' => 'Font Stil entfernen',
          'height' => 'Zeilenhöhe',
          'name' => 'Schriftfamilie',
          'size' => 'Schriftgröße',
        ),
        'image' => 
        array (
          'image' => 'Bild',
          'insert' => 'Bild einfügen',
          'resizeFull' => 'Originalgröße',
          'resizeHalf' => 'Größe 1/2',
          'resizeQuarter' => 'Größe 1/4',
          'floatLeft' => 'Linksbündig',
          'floatRight' => 'Rechtsbündig',
          'floatNone' => 'Kein Textfluss',
          'dragImageHere' => 'Ziehen Sie ein Bild mit der Maus hierher',
          'selectFromFiles' => 'Wählen Sie eine Datei aus',
          'url' => 'Grafik URL',
          'remove' => 'Grafik entfernen',
        ),
        'link' => 
        array (
          'link' => 'Link',
          'insert' => 'Link einfügen',
          'unlink' => 'Link entfernen',
          'edit' => 'Bearbeiten',
          'textToDisplay' => 'Anzeigetext',
          'url' => 'Ziel des Links?',
          'openInNewWindow' => 'In einem neuen Fenster öffnen',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Link',
          'insert' => 'Video einfügen',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram oder DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tabelle',
        ),
        'hr' => 
        array (
          'insert' => 'Eine horizontale Linie einfügen',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'Zitat',
          'pre' => 'Quellcode',
          'h1' => 'Überschrift 1',
          'h2' => 'Überschrift 2',
          'h3' => 'Überschrift 3',
          'h4' => 'Überschrift 4',
          'h5' => 'Überschrift 5',
          'h6' => 'Überschrift 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Unsortierte Liste',
          'ordered' => 'Nummerierte Liste',
        ),
        'options' => 
        array (
          'help' => 'Hilfe',
          'fullscreen' => 'Vollbild',
          'codeview' => 'HTML-Code anzeigen',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Absatz',
          'outdent' => 'Ausrückung',
          'indent' => 'Einrückung',
          'left' => 'Links ausrichten',
          'center' => 'Zentriert ausrichten',
          'right' => 'Rechts ausrichten',
          'justify' => 'Blocksatz',
        ),
        'color' => 
        array (
          'recent' => 'Letzte Farbe',
          'more' => 'Mehr Farben',
          'background' => 'Hintergrundfarbe',
          'foreground' => 'Schriftfarbe',
          'transparent' => 'Transparenz',
          'setTransparent' => 'Transparenz setzen',
          'reset' => 'Zurücksetzen',
          'resetToDefault' => 'Zurücksetzen auf Standard',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Tastaturkürzel',
          'close' => 'Schließen',
          'textFormatting' => 'Textformatierung',
          'action' => 'Aktion',
          'paragraphFormatting' => 'Absatzformatierung',
          'documentStyle' => 'Dokumentenstil',
        ),
        'history' => 
        array (
          'undo' => 'Rückgängig',
          'redo' => 'Wiederholen',
        ),
      ),
    ),
  ),
  'Import' => 
  array (
    'labels' => 
    array (
      'Revert Import' => 'Revert Import',
      'Return to Import' => 'Zurück zum Import',
      'Run Import' => 'Import durchführen',
      'Back' => 'Zurück',
      'Field Mapping' => 'Feldzuordnung',
      'Default Values' => 'Standardwerte',
      'Add Field' => 'Feld hinzufügen',
      'Created' => 'Erstellt',
      'Updated' => 'Aktualisiert',
      'Result' => 'Resultat',
      'Show records' => 'Datensätze zeigen',
      'Remove Duplicates' => 'Remove Duplicates',
      'importedCount' => 'Imported (count)',
      'duplicateCount' => 'Duplicates (count)',
      'updatedCount' => 'Updated (count)',
      'Revert' => 'Zurückkehren',
    ),
    'messages' => 
    array (
      'utf8' => 'Sollte UTF-8 kodiert sein',
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
      'team' => 'Team',
      'status' => 'Status',
      'assignToUser' => 'Mit Benutzer verknüpfen',
      'host' => 'Host',
      'username' => 'Benutzername',
      'password' => 'Passwort',
      'port' => 'Port',
      'monitoredFolders' => 'Überwachte Ordner',
      'trashFolder' => 'Papierkorb Ordner',
      'ssl' => 'SSL',
      'createCase' => 'Fall erstellen',
      'reply' => 'Autoantwort',
      'caseDistribution' => 'Fall Verteilung',
      'replyEmailTemplate' => 'Vorlage E-Mail Antwort',
      'replyFromAddress' => 'Von Adresse antworten',
      'replyToAddress' => 'Antwort an Adresse',
      'replyFromName' => 'Von Name antworten',
      'targetUserPosition' => 'Position Zielbenutzer',
    ),
    'tooltips' => 
    array (
      'reply' => 'Absender informieren, dass die E-Mail empfangen wurde.',
      'createCase' => 'Fall aus eingehender E-Mail automatisch erstellen.',
      'replyToAddress' => 'Geben Sie die E-Mail Adresse dieser Mailbox an um Antworten hier zu empfangen.',
      'caseDistribution' => 'Wie Fälle zugewiesen werden. Entweder direkt dem Benutzer oder im Team.',
      'assignToUser' => 'Benutzer E-Mails/Fälle werden zugewiesen an',
      'team' => 'Team E-Mails/Fälle werden verknüpft mit',
      'targetUserPosition' => 'Bestimmen Sie die Position der Benutzer die Fälle zugewiesen bekommen.',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'Direkte Zuordnung',
        'Round-Robin' => 'Umlauf-Verfahren',
        'Least-Busy' => 'Geringste Auslastung',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Eingehende E-Mail erstellen',
      'IMAP' => 'IMAP',
      'Actions' => 'Aktionen',
      'Main' => 'Wichtig',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'Kann keine Verbindung zum IMAP Server herstellen',
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'enabled' => 'Aktiv',
      'clientId' => 'Client ID',
      'clientSecret' => 'Client Geheimnis',
      'redirectUri' => 'Redirect URI',
    ),
    'messages' => 
    array (
      'selectIntegration' => 'Wählen Sie eine Integration aus dem Menü.',
      'noIntegrations' => 'Keine Integration verfügbar.',
    ),
    'help' => 
    array (
      'Google' => '<p><b>Holen Sie die OAuth 2.0 Credentials über die Google Developers Console.</b></p><p>Visit <a href="https://console.developers.google.com/project">Google Developers Console</a> um OAuth 2.0 Credentials wie eine Client ID und Client Geheimnis zu erhalten die sowohl Google als auch EspoCRM bekannt sind.</p>',
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'post' => 'Senden',
      'attachments' => 'Anhänge',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'smtpEmailAddress' => 'E-Mail Adresse',
      'exportDelimiter' => 'Export Trennzeichen',
      'receiveAssignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen erhalten',
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
        0 => 'Sonntag',
        1 => 'Montag',
      ),
    ),
    'labels' => 
    array (
      'Notifications' => 'Benachrichtigungen',
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
      'name' => 'Name',
      'roles' => 'Rollen',
      'assignmentPermission' => 'Assignment Permission',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
      'teams' => 'Teams',
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
      'Access' => 'Zugang',
      'Create Role' => 'Rolle erstellen',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'nicht gesetzt',
        'enabled' => 'Aktiv',
        'disabled' => 'Inaktiv',
      ),
      'levelList' => 
      array (
        'all' => 'Alle',
        'team' => 'Team',
        'own' => 'Eigene',
        'no' => 'Nein',
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
      'read' => 'Lesen',
      'edit' => 'Bearbeiten',
      'delete' => 'Löschen',
    ),
    'messages' => 
    array (
      'changesAfterClearCache' => 'Alle Änderungen werden erst nach Leeren des Caches wirksam.',
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'job' => 'Job',
      'scheduling' => 'Planung (in Crontab Notation)',
    ),
    'links' => 
    array (
      'log' => 'Protokoll',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Geplante Aufgabe erstellen',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Aufräumen',
        'CheckInboundEmails' => 'Eingehende E-Mail prüfen',
        'CheckEmailAccounts' => 'Persönliche E-Mail Konten prüfen',
        'SendEmailReminders' => 'E-Mail Erinnerungen senden',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'mac' => 'Hinweis: Fügen Sie diese Zeile zu Ihrer Crontab Datei hinzu, um geplante Aufgaben durchführen zu können:',
        'windows' => 'Hinweis: Erstellen Sie eine Stapeldatei mit den folgenden Kommandos um geplante Aufgaben mit dem Windows Aufgabenplaner durchzuführen:',
        'default' => 'Hinweis: fügen Sie dieses Kommando zum CronJob hinzu (Geplante Aufgaben):',
      ),
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Status',
      'executionTime' => 'Ausführungszeit',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Benutzer Cache',
      'dateFormat' => 'Datumsformat',
      'timeFormat' => 'Zeitformat',
      'timeZone' => 'Zeitzone',
      'weekStart' => 'Erster Tag der Woche',
      'thousandSeparator' => 'Tausender Trennzeichen',
      'decimalMark' => 'Dezimaltrennzeichen',
      'defaultCurrency' => 'Standardwährung',
      'baseCurrency' => 'Basiswährung',
      'currencyRates' => 'Wechselkurse',
      'currencyList' => 'Währungsliste',
      'language' => 'Sprache',
      'companyLogo' => 'Firmenlogo',
      'smtpServer' => 'Server',
      'smtpPort' => 'Port',
      'smtpAuth' => 'Autorisierung',
      'smtpSecurity' => 'Sicherheit',
      'smtpUsername' => 'Benutzername',
      'emailAddress' => 'E-Mail',
      'smtpPassword' => 'Passwort',
      'outboundEmailFromName' => 'Von Name',
      'outboundEmailFromAddress' => 'Von Adresse',
      'outboundEmailIsShared' => 'Kann von allen Benutzern verwendet werden',
      'recordsPerPage' => 'Datensätze pro Seite',
      'recordsPerPageSmall' => 'Datensätze pro Seite (Klein)',
      'tabList' => 'Reiter Liste',
      'quickCreateList' => 'Liste Schnellerstellung',
      'exportDelimiter' => 'Export Trennzeichen',
      'globalSearchEntityList' => 'Modul-/Entitätsliste globale Suche',
      'authenticationMethod' => 'Authentifizierungs Methode',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Autorisierung',
      'ldapUsername' => 'Benutzername',
      'ldapPassword' => 'Passwort',
      'ldapBindRequiresDn' => 'Bind erfordert Dn',
      'ldapBaseDn' => 'Basis Dn',
      'ldapAccountCanonicalForm' => 'Kanonische Form Konto',
      'ldapAccountDomainName' => 'Domain Name Konto',
      'ldapTryUsernameSplit' => 'Benutzernamen Split versuchen',
      'ldapCreateEspoUser' => 'Benutzer in EspoCRM erstellen',
      'ldapSecurity' => 'Sicherheit',
      'ldapUserLoginFilter' => 'Login Filter benutzen',
      'ldapAccountDomainNameShort' => 'Domain Name Konto kurz',
      'ldapOptReferrals' => 'Opt Referrals',
      'disableExport' => 'Export deaktivieren (nur Admin ist berechtigt)',
      'assignmentNotificationsEntityList' => 'Entities to Notify about upon Assignment',
      'assignmentEmailNotifications' => 'E-Mail Nachrichten bei Zuweisungen senden',
      'assignmentEmailNotificationsEntityList' => 'Module für Benachrichtigungen',
      'b2cMode' => 'B2C Modus',
      'disableAvatars' => 'Avatare deaktivieren',
      'followCreatedEntities' => 'Follow Created Entities',
    ),
    'options' => 
    array (
      'weekStart' => 
      array (
        0 => 'Sonntag',
        1 => 'Montag',
      ),
    ),
    'tooltips' => 
    array (
      'recordsPerPageSmall' => 'Anzahl Sätze in Beziehungssubpanels',
      'outboundEmailIsShared' => 'Allow users to sent emails via this SMTP.',
      'followCreatedEntities' => 'If user created a record he/she will follow it automatically.',
    ),
    'labels' => 
    array (
      'System' => 'System',
      'Locale' => 'Lokale Einstellungen',
      'SMTP' => 'SMTP',
      'Configuration' => 'Konfiguration',
      'In-app Notifications' => 'In-app Notifications',
      'Email Notifications' => 'Email Notifications',
      'Currency Settings' => 'Währunsgseinstellungen',
      'Currency Rtes' => 'Währungskurse',
      'Notifications' => 'Benachrichtigungen',
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'roles' => 'Rollen',
      'positionList' => 'Stellungen',
    ),
    'links' => 
    array (
      'users' => 'Benutzer',
    ),
    'tooltips' => 
    array (
      'roles' => 'Zugriffsrollen Benutzer dieses Teams erhalten Zugriffsberechtigung von ausgewählten Rollen',
      'positionList' => 'Verfügbare Positionen in diesem Team Z.B. Verkäufer, Manager etc.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Team erstellen',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'userName' => 'Benutzername',
      'title' => 'Funktion',
      'isAdmin' => 'Ist Admin',
      'defaultTeam' => 'Standard Team',
      'emailAddress' => 'E-Mail',
      'phoneNumber' => 'Telefon',
      'roles' => 'Rollen',
      'teamRole' => 'Position',
      'password' => 'Passwort',
      'passwordConfirm' => 'Passwort bestätigen',
      'newPassword' => 'Neues Passwort',
      'newPasswordConfirm' => 'Neues Passwort bestätigen',
      'avatar' => 'Avatar',
      'isActive' => 'Ist aktiv',
    ),
    'links' => 
    array (
      'teams' => 'Teams',
      'roles' => 'Rollen',
      'targetLists' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Create User' => 'Benutzer erstellen',
      'Generate' => 'Erzeugen',
      'Access' => 'Zugang',
      'Preferences' => 'Benutzereinstellungen',
      'Change Password' => 'Passwort ändern',
      'Teams and Access Control' => 'Teams und Zugriffsberechtigung',
      'Forgot Password?' => 'Passwort vergessen?',
      'Password Change Request' => 'Anforderung zur Passwortänderung',
      'Email Address' => 'E-Mail Adresse',
      'External Accounts' => 'Externe Konten',
      'Email Accounts' => 'E-Mail Konten',
    ),
    'tooltips' => 
    array (
      'defaultTeam' => 'Alle Datensätze dieses Benutzers werden standardmäßig seinem Team zugeordnet.',
      'userName' => 'Buchstaben a-z, Zahlen 0-9 und Unterstriche sind erlaubt.',
      'isAdmin' => 'Der Admin Benutzer hat vollen Zugriff auf alle Funktionen.',
      'isActive' => 'Wenn nicht markiert kann der Benutzer nicht einloggen',
      'teams' => 'Das Team zu dem dieser Benutzer gehört. Die Zugriffsberechtigung wird von der Team Rolle vererbt.',
      'roles' => 'Zusätzliche Zugriffsrollen. Wenn ein Benutzer zu keinem Team gehört oder wenn Sie die Zugriffsberechtigung nur für diesen Benutzer erweitern wollen.',
    ),
    'messages' => 
    array (
      'passwordWillBeSent' => 'Das Passwort wird an die E-Mail Adresse des Benutzers gesendet',
      'accountInfoEmailSubject' => 'EspoCRM Benutzerzugriffsinfo',
      'accountInfoEmailBody' => 'Ihre EspoCRM Zugriffsinformation:

Benutzername: {userName}
Passwort: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Anforderung zur Passwortänderung',
      'passwordChangeLinkEmailBody' => 'Sie können Ihr Passwort über diesen Link {link} ändern Diese eindeutige URL ist nur für kurze Zeit gültig.',
      'passwordChanged' => 'Das Passwort wurde geändert',
      'userCantBeEmpty' => 'Der Benutzername darf nicht leer sein!',
      'wrongUsernamePasword' => 'Falscher Benutzername/Passwort',
      'emailAddressCantBeEmpty' => 'E-Mail Adresse darf nicht leer sein',
      'userNameEmailAddressNotFound' => 'Benutzername oder E-Mail Adresse nicht gefunden',
      'forbidden' => 'Verboten, bitte später nochmals versuchen',
      'uniqueLinkHasBeenSent' => 'Ein einmaliger Link wurde an die angegebene E-Mail Adresse gesendet.',
      'passwordChangedByRequest' => 'Das Passwort wurde geändert',
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
      'emailAddress' => 'E-Mail',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'billingAddress' => 'Rechnungsadresse',
      'shippingAddress' => 'Lieferadresse',
      'description' => 'Beschreibung',
      'sicCode' => 'WKN Nummer',
      'industry' => 'Branche',
      'type' => 'Typ',
      'contactRole' => 'Rolle',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
      'documents' => 'Dokumente',
      'meetingsPrimary' => 'Meetings (intern)',
      'callsPrimary' => 'Anrufe (intern)',
      'tasksPrimary' => 'Aufgaben (intern)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'options' => 
    array (
      'type' => 
      array (
        'Customer' => 'Kunde',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Reseller' => 'Wiederverkäufer',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Landwirtschaft',
        'Advertising' => 'Werbewirtschaft',
        'Apparel & Accessories' => 'Bekleidungsindustrie',
        'Automotive' => 'Automobilindustrie',
        'Banking' => 'Bankwesen',
        'Biotechnology' => 'Biotechnologie',
        'Chemical' => 'Chemieindustrie',
        'Computer' => 'Informationstechnologie',
        'Education' => 'Bildungswesen',
        'Electronics' => 'Elektronik',
        'Entertainment & Leisure' => 'Freizeit- und Unterhaltungsindustrie',
        'Finance' => 'Finanzsektor',
        'Food & Beverage' => 'Speisen und Getränke',
        'Grocery' => 'Einzelhandel',
        'Insurance' => 'Versicherung',
        'Legal' => 'Rechtswesen',
        'Publishing' => 'Medien',
        'Real Estate' => 'Immobilien',
        'Service' => 'Dienstleistung',
        'Sports' => 'Sport',
        'Software' => 'Software',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Telekommunikation',
        'Television' => 'Fernsehen',
        'Transportation' => 'Transportwesen',
        'Venture Capital' => 'Risikokapital',
        'Sofware' => 'Software',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Firma erstellen',
      'Copy Billing' => 'Rechnungsadresse kopieren',
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
      'month' => 'Monat',
      'week' => 'Woche',
      'day' => 'Tag',
      'agendaWeek' => 'Woche',
      'agendaDay' => 'Tag',
    ),
    'labels' => 
    array (
      'Today' => 'Heute',
      'Create' => 'Erstellen',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'direction' => 'Richtung',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'reminders' => 'Erinnerungen',
      'account' => 'Firma',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'direction' => 
      array (
        'Outbound' => 'Ausgehend',
        'Inbound' => 'Eingehend',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Kein(e)',
        'Accepted' => 'Akzeptiert',
        'Declined' => 'Abgelehnt',
        'Tentative' => 'Mit Vorbehalt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Call' => 'Anruf erstellen',
      'Set Held' => 'Auf gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Durchgeführt',
      'todays' => 'Heutige',
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
      'number' => 'Nummer',
      'status' => 'Status',
      'account' => 'Firma',
      'contact' => 'Kontakt',
      'priority' => 'Priorität',
      'type' => 'Typ',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'Pending' => 'Schwebend',
        'Closed' => 'Abgeschlossen',
        'Rejected' => 'Abgelehnt',
        'Duplicate' => 'Duplizieren',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
      'type' => 
      array (
        'Question' => 'Frage',
        'Incident' => 'Vorfall',
        'Problem' => 'Problem',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Fall erstellen',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'closed' => 'Abgeschlossen',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'account' => 'Firma',
      'accounts' => 'Firmen',
      'phoneNumber' => 'Telefon',
      'accountType' => 'Firmentyp',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'opportunityRole' => 'Verkaufschance Rolle',
      'accountRole' => 'Rolle',
      'description' => 'Beschreibung',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
    ),
    'links' => 
    array (
      'opportunities' => 'Verkaufschancen',
      'cases' => 'Fälle',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Kontakt erstellen',
    ),
    'options' => 
    array (
      'opportunityRole' => 
      array (
        '' => '--Kein(e)--',
        'Decision Maker' => 'Entscheider',
        'Evaluator' => 'Vorentscheider',
        'Influencer' => 'Einflussreiche Person',
      ),
    ),
  ),
  'Document' => 
  array (
    'labels' => 
    array (
      'Create Document' => 'Dokument erstellen',
      'Details' => 'Details',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'status' => 'Status',
      'file' => 'Datei',
      'type' => 'Typ',
      'source' => 'Quelle',
      'publishDate' => 'Veröffentlichungsdatum',
      'expirationDate' => 'Ablaufdatum',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
      'accounts' => 'Firmen',
      'opportunities' => 'Verkaufschancen',
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Active' => 'Aktiv',
        'Draft' => 'Entwurf',
        'Expired' => 'Abgelaufen',
        'Canceled' => 'Storniert',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'draft' => 'Entwurf',
    ),
  ),
  'Lead' => 
  array (
    'labels' => 
    array (
      'Converted To' => 'Umgewandelt zu',
      'Create Lead' => 'Interessent erstellen',
      'Convert' => 'Umwandeln',
    ),
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'phoneNumber' => 'Telefon',
      'accountName' => 'Firmenname',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'status' => 'Status',
      'source' => 'Quelle',
      'opportunityAmount' => 'Verkaufschance Betrag',
      'opportunityAmountConverted' => 'Verkaufschance Betrag (konvertiert)',
      'description' => 'Beschreibung',
      'createdAccount' => 'Firma',
      'createdContact' => 'Kontakt',
      'createdOpportunity' => 'Verkaufschance',
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
        'New' => 'Neu',
        'Assigned' => 'Zugewiesen',
        'In Process' => 'In Arbeit',
        'Converted' => 'Umgewandelt',
        'Recycled' => 'Wiedereröffnet',
        'Dead' => '\'Gestorben\'',
      ),
      'source' => 
      array (
        'Call' => 'Anruf',
        'Email' => 'E-Mail',
        'Existing Customer' => 'Bestehender Kunde',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Web Site' => 'Web Seite',
        'Campaign' => 'Kampagne',
        'Other' => 'Andere',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Aktiv',
      'converted' => 'Converted',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Enddatum',
      'duration' => 'Dauer',
      'description' => 'Beschreibung',
      'users' => 'Benutzer',
      'contacts' => 'Kontakte',
      'leads' => 'Interessenten',
      'reminders' => 'Erinnerungen',
      'account' => 'Firma',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'Planned' => 'Geplant',
        'Held' => 'Durchgeführt',
        'Not Held' => 'Nicht durchgeführt',
      ),
      'acceptanceStatus' => 
      array (
        'None' => 'Kein(e)',
        'Accepted' => 'Akzeptiert',
        'Declined' => 'Abgelehnt',
        'Tentative' => 'Mit Vorbehalt',
      ),
    ),
    'massActions' => 
    array (
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held',
    ),
    'labels' => 
    array (
      'Create Meeting' => 'Meeting erstellen',
      'Set Held' => 'Auf gehalten setzen',
      'Set Not Held' => 'Auf nicht gehalten setzen',
      'Send Invitations' => 'Einladungen versenden',
      'on time' => 'Aktuelle Zeit',
      'before' => 'Bevor',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Geplant',
      'held' => 'Durchgeführt',
      'todays' => 'Heutige',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'account' => 'Firma',
      'stage' => 'Verkaufsphase',
      'amount' => 'Betrag',
      'probability' => 'Wahrscheinlichkeit (%)',
      'leadSource' => 'Quelle',
      'doNotCall' => 'Nicht anrufen',
      'closeDate' => 'Abschlussdatum',
      'contacts' => 'Kontakte',
      'description' => 'Beschreibung',
      'amountConverted' => 'Betrag (konvertiert)',
      'amountWeightedConverted' => 'Betrag gewichtet',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Kontakte',
      'documents' => 'Dokumente',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Qualifikation',
        'Needs Analysis' => 'Bedarfserhebung',
        'Value Proposition' => 'Richtangebot',
        'Id. Decision Makers' => 'Entscheider ident.',
        'Perception Analysis' => 'Analyse Sichtweise',
        'Proposal/Price Quote' => 'Preisangebot',
        'Negotiation/Review' => 'Verhandlung/Überarbeitung',
        'Closed Won' => 'Gewonnen',
        'Closed Lost' => 'Verloren',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Verkaufschance erstellen',
    ),
    'presetFilters' => 
    array (
      'open' => 'Offen',
      'won' => 'Gewonnen',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'E-Mail',
      'title' => 'Funktion',
      'website' => 'Webseite',
      'accountName' => 'Firmenname',
      'phoneNumber' => 'Telefon',
      'doNotCall' => 'Nicht anrufen',
      'address' => 'Adresse',
      'description' => 'Beschreibung',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Zielkontakt erstellen',
      'Convert to Lead' => 'Zu Interessent umwandeln',
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
      'name' => 'Name',
      'parent' => 'Bezieht sich auf',
      'status' => 'Status',
      'dateStart' => 'Startdatum',
      'dateEnd' => 'Fällig am',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Priorität',
      'description' => 'Beschreibung',
      'isOverdue' => 'Ist überfällig',
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
        'Not Started' => 'Nicht begonnen',
        'Started' => 'In Bearbeitung',
        'Completed' => 'Abgeschlossen',
        'Canceled' => 'Storniert',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Niedrig',
        'Normal' => 'Normal',
        'High' => 'Hoch',
        'Urgent' => 'Dringend',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Neue Aufgabe',
      'Complete' => 'Fertig',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Tatsächlich',
      'completed' => 'Abgeschlossen',
      'todays' => 'Heutige',
      'overdue' => 'Überfällig',
    ),
  ),
);

?>