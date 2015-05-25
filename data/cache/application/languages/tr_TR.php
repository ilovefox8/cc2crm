<?php

return array (
  'Admin' => 
  array (
    'labels' => 
    array (
      'Enabled' => 'Etkin',
      'Disabled' => 'Devre Dışı',
      'System' => 'Sistem',
      'Users' => 'Kullanıcılar',
      'Email' => 'Eposta',
      'Data' => 'Veri',
      'Customization' => 'Özelleştirme',
      'Available Fields' => 'Uygun Alanlar',
      'Layout' => 'Yerleşim',
      'Entity Manager' => 'Entity Manager',
      'Add Panel' => 'Pano Ekle',
      'Add Field' => 'Alan Ekle',
      'Settings' => 'Ayarlar',
      'Scheduled Jobs' => 'Planlanmış İşler',
      'Upgrade' => 'Yükselt',
      'Clear Cache' => 'Önbelleği Temizle',
      'Rebuild' => 'Onar',
      'Teams' => 'Takımlar',
      'Roles' => 'Görevler',
      'Outbound Emails' => 'Giden Epostalar',
      'Inbound Emails' => 'Gelen Epostalar',
      'Email Templates' => 'Eposta Şablonları',
      'Import' => 'İçeri Aktar',
      'Layout Manager' => 'Yerleşim Yönetimi',
      'User Interface' => 'Kullanıcı Arayüzü',
      'Auth Tokens' => 'Auth Tokens',
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
      'Field Manager' => 'Alan Yönetimi',
    ),
    'layouts' => 
    array (
      'list' => 'Liste',
      'detail' => 'Detay',
      'listSmall' => 'List (Small)',
      'detailSmall' => 'Detail (Small)',
      'filters' => 'Arama Filtreleri',
      'massUpdate' => 'Çoklu Güncelleme',
      'relationships' => 'İlişkiler',
      'detailConvert' => 'Convert Lead',
      'listForAccount' => 'List (for Account)',
    ),
    'fieldTypes' => 
    array (
      'address' => 'Adres',
      'array' => 'Sıralama',
      'foreign' => 'Yabancı',
      'duration' => 'Süre',
      'password' => 'Şifre',
      'parsonName' => 'Kişi Adı',
      'autoincrement' => 'Otomatik Arttırım',
      'bool' => 'XXXX',
      'currency' => 'Para Birimi',
      'date' => 'Tarih',
      'datetime' => 'TarihSaat',
      'datetimeOptional' => 'Date/DateTime',
      'email' => 'Eposta',
      'enum' => 'Sıralama',
      'enumInt' => 'Tamsayı Sıralama',
      'enumFloat' => 'XXXX Sıralama',
      'float' => 'Hizalama',
      'int' => 'Int',
      'link' => 'Bağlantı',
      'linkMultiple' => 'Çoklu Bağlantı',
      'linkParent' => 'Üst Bağlantı',
      'multienim' => 'Çoklu Sıralama',
      'phone' => 'Telefon',
      'text' => 'Metin',
      'url' => 'Url',
      'varchar' => 'Değişken Karakter',
      'file' => 'Dosya',
      'image' => 'Resim',
      'multiEnum' => 'Multi-Enum',
    ),
    'fields' => 
    array (
      'type' => 'Tür',
      'name' => 'İsim',
      'label' => 'Etiket',
      'required' => 'Gerekli',
      'default' => 'Varsayılan',
      'maxLength' => 'Maks Uzunluk',
      'options' => 'Options (raw values, not translated)',
      'after' => 'After (field)',
      'before' => 'Before (field)',
      'link' => 'Bağlantı',
      'field' => 'Alan',
      'min' => 'Min',
      'max' => 'Maks',
      'translation' => 'Çeviri',
      'previewSize' => 'Önizlme Boyutu',
      'noEmptyString' => 'No Empty String',
      'defaultType' => 'Default Type',
    ),
    'messages' => 
    array (
      'upgradeVersion' => 'EspoCRM yazılımınız <strong>{version}</strong> sürümüne yükseltilecektir. Bu işlem birkaç dakika sürebilir.',
      'upgradeDone' => 'EspoCRM yazılımınız <strong>{version}</strong> sürümüne yükseltilmiştir. Tarayıcı pencerenizi lütfen yenileyin..',
      'upgradeBackup' => 'Yükseltmeden önce EspoCRM dosya ve verilerinizi yedeklemenizi öneririz.',
      'thousandSeparatorEqualsDecimalMark' => 'Binlik ayraç ondalık ayraç ile aynı olamaz.',
      'userHasNoEmailAddress' => 'Kullanıcı eposta adresi tanımlamamıştır.',
      'selectEntityType' => 'Soldaki menüden birim türünü seçin.',
      'selectUpgradePackage' => 'Yükseltme paketini seçin.',
      'downloadUpgradePackage' => 'Download needed upgrade package(s) <a href="https://sourceforge.net/projects/espocrm/files/Upgrades/">here</a>.',
      'selectLayout' => 'Gerekli yerleşim düzenini sol menüden seçin ve düzenleyin.',
      'selectExtensionPackage' => 'Select extension package',
      'extensionInstalled' => 'Extension {name} {version} has been installed.',
      'installExtension' => 'Extension {name} {version} is ready for an installation.',
      'uninstallConfirmation' => 'Are you really want to uninstall the extension?',
    ),
    'descriptions' => 
    array (
      'settings' => 'Uygulamanın sistem ayarları.',
      'scheduledJob' => 'Cron tarafından gerçekleştirilmiş işler.',
      'upgrade' => 'EspoCRM i yükselt.',
      'clearCache' => 'Tüm sunucu önbelleğini temizle.',
      'rebuild' => 'Sunucuyu onar ve önbelleği temizle.',
      'users' => 'Kullanıcı Yönetimi.',
      'teams' => 'Takım Yönetimi.',
      'roles' => 'Görev Yönetimi.',
      'outboundEmails' => 'Giden epostalar için SMTP ayarları.',
      'inboundEmails' => 'IMAP eposta hesaplarını grupla. Eposta içe aktarımı ve dizinleme',
      'emailTemplates' => 'Giden eposta şablonları.',
      'import' => 'CSV dosyasından veri aktar.',
      'layoutManager' => 'Customize layouts (list, detail, edit, search, mass update).',
      'entityManager' => 'Create custom entities, edit existing ones. Manage field and relationships.',
      'userInterface' => 'Kullanıcı Arayğzünü ayarla.',
      'authTokens' => 'Active auth sessions. IP address and last access date.',
      'authentication' => 'Authentication settings.',
      'currency' => 'Currency settings and rates.',
      'extensions' => 'Install or uninstall extensions.',
      'integrations' => 'Integration with third-party services.',
      'notifications' => 'In-app and email notification settings.',
      'fieldManager' => 'Yeni alan ekle yada varolanı düzenle.',
    ),
    'options' => 
    array (
      'previewSize' => 
      array (
        'x-small' => 'Çok Küçük',
        'small' => 'Küçük',
        'medium' => 'Orta',
        'large' => 'Büyük',
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
      'user' => 'User',
      'ipAddress' => 'IP Address',
      'lastAccess' => 'Last Access Date',
      'createdAt' => 'Login Date',
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
      'name' => 'Konu',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateSent' => 'Gönderilen Tariht',
      'from' => 'Kimden',
      'to' => 'Kime',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'isHtml' => 'Html olarak gönder',
      'body' => 'Mesaj',
      'subject' => 'Konu',
      'attachments' => 'Dosya Ekle',
      'selectTemplate' => 'Şablonu Seçin',
      'fromEmailAddress' => 'Gönderen Adresi',
      'toEmailAddresses' => 'Alıcı Adresi',
      'emailAddress' => 'Eposta Adresi',
      'deliveryDate' => 'Delivery Date',
      'account' => 'Account',
      'users' => 'Users',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'Draft' => 'Taslak',
      'Sending' => 'Gönderiyor',
      'Sent' => 'Gönderildi',
      'Archived' => 'Arşivlendi',
      'Received' => 'Received',
    ),
    'labels' => 
    array (
      'Create Email' => 'Epostayı Arşivle',
      'Archive Email' => 'Archive Email',
      'Compose' => 'Yeni Eposta',
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
      'sent' => 'Sent',
      'archived' => 'Archived',
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
      'Primary' => 'Öncelikli',
      'Opted Out' => 'SeçildiXXX',
      'Invalid' => 'Geçersiz',
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'status' => 'Durum',
      'isHtml' => 'Html olarak gönder',
      'body' => 'Mesaj',
      'subject' => 'Konu',
      'attachments' => 'Dosya Ekle',
      'insertField' => '',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create EmailTemplate' => 'Eposta Şablonu Oluştur',
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
      'Email' => 'Eposta',
      'User' => 'Kullanıcı',
      'Team' => 'Takım',
      'Role' => 'Görev',
      'EmailTemplate' => 'Eposta Şablonu',
      'EmailAccount' => 'Email Account',
      'EmailAccountScope' => 'Email Account',
      'OutboundEmail' => 'Giden Eposta',
      'ScheduledJob' => 'Zamanlanmış İşler',
      'ExternalAccount' => 'External Account',
      'Extension' => 'Extension',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gelen Eposta',
      'Stream' => 'Stream',
      'Import' => 'Import',
      'Account' => 'Hesap',
      'Contact' => 'Bağlantı',
      'Lead' => 'Müşteri Adayı',
      'Target' => 'Target',
      'Opportunity' => 'Fırsat',
      'Meeting' => 'Toplantı',
      'Calendar' => 'Takvim',
      'Call' => 'Arama',
      'Task' => 'Görev',
      'Case' => 'Dosya',
      'Document' => 'Document',
      'Campaign' => 'Campaign',
      'TargetList' => 'Target List',
      'Prospect' => 'Beklenti',
    ),
    'scopeNamesPlural' => 
    array (
      'Email' => 'Epostalar',
      'User' => 'Kullanıcılar',
      'Team' => 'Takımlar',
      'Role' => 'Görevler',
      'EmailTemplate' => 'Eposta Şablonları',
      'EmailAccount' => 'Email Accounts',
      'EmailAccountScope' => 'Email Accounts',
      'OutboundEmail' => 'Giden Epostalar',
      'ScheduledJob' => 'Planlanmış İşler',
      'ExternalAccount' => 'External Accounts',
      'Extension' => 'Extensions',
      'Dashboard' => 'Dashboard',
      'InboundEmail' => 'Gelen Epostalar',
      'Stream' => 'Stream',
      'Import' => 'Import Results',
      'Account' => 'Hesaplar',
      'Contact' => 'Bağlantılar',
      'Lead' => 'Müşteri Adayları',
      'Target' => 'Targets',
      'Opportunity' => 'Fırsatlar',
      'Meeting' => 'Toplantılar',
      'Calendar' => 'Takvim',
      'Call' => 'Aramalar',
      'Task' => 'Görevler',
      'Case' => 'Dosyalar',
      'Document' => 'Documents',
      'Campaign' => 'Campaigns',
      'TargetList' => 'Target Lists',
      'Prospect' => 'Beklentiler',
    ),
    'labels' => 
    array (
      'Misc' => 'Misc',
      'Merge' => 'Birleştir',
      'None' => 'Hiç',
      'by' => 'tarafından',
      'Saved' => 'Kaydedildi',
      'Error' => 'hata',
      'Select' => 'Seç',
      'Not valid' => 'Geçerli Değil',
      'Please wait...' => 'Lütfen bekleyin...',
      'Please wait' => 'Lütfen bekleyin',
      'Loading...' => 'Yükleniyor...',
      'Uploading...' => 'Yükleniyor...',
      'Sending...' => 'Gönderiliyor...',
      'Merging...' => 'Merging...',
      'Merged' => 'Merged',
      'Removed' => 'Removed',
      'Posted' => 'Yayınlandı',
      'Linked' => 'Bağlantı Kuruldu',
      'Unlinked' => 'Bağlantı Kesildi',
      'Access denied' => 'Erişim engellendi',
      'Access' => 'Giriş',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'Kayıt silindi',
      'Wrong username/password' => 'Yanlış kullanıcı adı/şifre',
      'Post cannot be empty' => 'Yorum alanı boş bırakılamaz',
      'Removing...' => 'Kaldırılıyor...',
      'Unlinking...' => 'Bağlantı kesiliyor...',
      'Posting...' => 'Yayınlanıyor...',
      'Username can not be empty!' => 'Kullanıcı adı boş bırakılamaz!',
      'Cache is not enabled' => 'Önbelleğe erişilemiyor',
      'Cache has been cleared' => 'Önbellek temizlendi',
      'Rebuild has been done' => 'Onarım tamamlandı',
      'Saving...' => 'Kaydediliyor...',
      'Modified' => 'Değişiklik uygulandı',
      'Created' => 'Oluşturuldu',
      'Create' => 'Oluştur',
      'create' => 'oluştur',
      'Overview' => 'Genel Bakış',
      'Details' => 'Detaylar',
      'Add Field' => 'Add Field',
      'Add Dashlet' => 'Önizleme Alanı Ekle',
      'Filter' => 'Filter',
      'Edit Dashboard' => 'Edit Dashboard',
      'Add' => 'Ekle',
      'Reset' => 'Sıfırla',
      'Menu' => 'Menü',
      'More' => 'Daha Fazla',
      'Search' => 'Arama',
      'Only My' => 'Sadece Ben',
      'Open' => 'Aç',
      'Admin' => 'Yönetici',
      'About' => 'Hakkında',
      'Refresh' => 'Yenile',
      'Remove' => 'Kaldır',
      'Options' => 'Seçenekler',
      'Username' => 'Kullanıcı Adı',
      'Password' => 'Şifre',
      'Login' => 'Giriş',
      'Log Out' => 'Çıkış',
      'Preferences' => 'Seçenekler',
      'State' => 'Semt',
      'Street' => 'Sokak',
      'Country' => 'Ülke',
      'City' => 'Şehir',
      'PostalCode' => 'Posta Kodu',
      'Followed' => 'Takip Ediliyor',
      'Follow' => 'Takip Et',
      'Clear Local Cache' => 'Önbelleği Temizle',
      'Actions' => 'Hareketler',
      'Delete' => 'Sil',
      'Update' => 'Güncelle',
      'Save' => 'Kaydet',
      'Edit' => 'Düzenle',
      'View' => 'View',
      'Cancel' => 'İptal Et',
      'Unlink' => 'Bağlantıyı Kes',
      'Mass Update' => 'Çoklu Güncelleme',
      'Export' => 'Dışa Aktar',
      'No Data' => 'Veri Yok',
      'No Access' => 'No Access',
      'All' => 'Tümü',
      'Active' => 'Aktif',
      'Inactive' => 'Pasif',
      'Write your comment here' => 'Yorumlarınızı buraya yazın',
      'Post' => 'Yayınla',
      'Stream' => 'Hareket',
      'Show more' => 'Daha fazla göster',
      'Dashlet Options' => 'Önizleme Alanı Seçenekleri',
      'Full Form' => 'Tam Form',
      'Insert' => 'Ekle',
      'Person' => 'Kişi',
      'First Name' => 'isim',
      'Last Name' => 'Soyisim',
      'Original' => 'Orjinal',
      'You' => 'Siz',
      'you' => 'Sen',
      'change' => 'Değiştir',
      'Change' => 'Change',
      'Primary' => 'Primary',
      'Save Filter' => 'Save Filter',
      'Administration' => 'Administration',
      'Run Import' => 'Run Import',
      'Duplicate' => 'Duplicate',
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
      'Create InboundEmail' => 'Gelen Eposta Oluştur',
      'Activities' => 'Aktiviteler',
      'History' => 'Geçmiş',
      'Attendees' => 'Katılımcılar',
      'Schedule Meeting' => 'Toplantı Ayarla',
      'Schedule Call' => 'Arama Ayarla',
      'Compose Email' => 'Eposta Gönder',
      'Log Meeting' => 'Günlük Toplantı',
      'Log Call' => 'Günlük Arama',
      'Archive Email' => 'Epostayı Arşivle',
      'Create Task' => 'Görev Oluştur',
      'Tasks' => 'Görevler',
      'Add Filter' => 'Filtre Ekle',
    ),
    'messages' => 
    array (
      'pleaseWait' => 'Please wait...',
      'confirmLeaveOutMessage' => 'Are you sure you want to leave the form?',
      'notModified' => 'Kayıdı değiştirmediniz',
      'duplicate' => 'Oluşturmaya çalıştığınız kaydın benzer bir kopyası var',
      'fieldIsRequired' => '{field} gerekli',
      'fieldShouldBeEmail' => '{field} geçerli bir eposta adresi olmalı',
      'fieldShouldBeFloat' => '{field} geçerli bir FLOAT olmalı',
      'fieldShouldBeInt' => '{field} geçerli bir tamsayı olmalı',
      'fieldShouldBeDate' => '{field} geçerli bir tarih olmalı',
      'fieldShouldBeDatetime' => '{field} geçerli bir tarih/saat olmalı',
      'fieldShouldAfter' => '{field} şu değerden sonra gelmeli: {otherField}',
      'fieldShouldBefore' => '{field} şu değerden önce gelmeli: {otherField}',
      'fieldShouldBeBetween' => '{field} şu iki değer arasında olmalı: {min} ve {max}',
      'fieldShouldBeLess' => '{field} şu değerden daha az olmalı: {value}',
      'fieldShouldBeGreater' => '{field} şu değerden daha büyük olmalı: {value}',
      'fieldBadPasswordConfirm' => '{field} hatalı olarak onaylandı',
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
      'onlyMy' => 'Sadece Ben',
      'followed' => 'Followed',
      'open' => 'Aç',
      'active' => 'Aktif',
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
      'name' => 'İsim',
      'firstName' => 'isim',
      'lastName' => 'Soyisim',
      'salutationName' => 'Hitap',
      'assignedUser' => 'Atanan Kişi',
      'emailAddress' => 'Eposta',
      'assignedUserName' => 'Atanan Kişi Kullanıcı Adı',
      'teams' => 'Takımlar',
      'createdAt' => 'Oluşturuldu:',
      'modifiedAt' => 'Değiştirildi:',
      'createdBy' => 'Tarafından Oluşturuldu',
      'modifiedBy' => 'tarafından Değiştirildi:',
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
      'billingAddressCity' => 'Şehir',
      'billingAddressCountry' => 'Ülke',
      'billingAddressPostalCode' => 'Posta Kodu',
      'billingAddressState' => 'Semt',
      'billingAddressStreet' => 'Sokak',
      'addressCity' => 'Şehir',
      'addressStreet' => 'Sokak',
      'addressCountry' => 'Ülke',
      'addressState' => 'Semt',
      'addressPostalCode' => 'Posta Kodu',
      'shippingAddressCity' => 'City (Shipping)',
      'shippingAddressStreet' => 'Street (Shipping)',
      'shippingAddressCountry' => 'Country (Shipping)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
      'title' => 'Başlık',
      'dateFrom' => 'Başlangıç Tarihi',
      'dateTo' => 'Bitiş Tarihi',
      'autorefreshInterval' => 'Otomatik Yenileme Süresi',
      'displayRecords' => 'Kayıtları Göster',
    ),
    'links' => 
    array (
      'assignedUser' => 'Assigned User',
      'createdBy' => 'Created By',
      'modifiedBy' => 'Modified By',
      'team' => 'Team',
      'roles' => 'Roles',
      'teams' => 'Takımlar',
      'users' => 'Kullanıcılar',
      'parent' => 'Parent',
      'children' => 'Children',
      'contacts' => 'Bağlantılar',
      'opportunities' => 'Fırsatlar',
      'leads' => 'Müşteri Adayları',
      'meetings' => 'Toplantılar',
      'calls' => 'Aramalar',
      'tasks' => 'Görevler',
      'emails' => 'Epostalar',
      'accounts' => 'Accounts',
      'cases' => 'Cases',
      'documents' => 'Documents',
      'account' => 'Account',
      'opportunity' => 'Opportunity',
      'contact' => 'Contact',
    ),
    'dashlets' => 
    array (
      'Stream' => 'Hareket',
      'Leads' => 'Müşteri Adaylarım',
      'Opportunities' => 'Fırsatlarım',
      'Tasks' => 'Görevleri',
      'Cases' => 'Dosyalarım',
      'Calendar' => 'Takvim',
      'Calls' => 'My Calls',
      'Meetings' => 'My Meetings',
      'OpportunitiesByStage' => 'Aşamaya Göre Fırstalar',
      'OpportunitiesByLeadSource' => 'Aday Müşterilere Göre Fırsatlar',
      'SalesByMonth' => 'Aylık Satışlar',
      'SalesPipeline' => 'Satış Öngörüleri',
    ),
    'notificationMessages' => 
    array (
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email received from {from}',
    ),
    'streamMessages' => 
    array (
      'create' => '{user} oluşturdu: {entityType} {entity}',
      'createAssigned' => '{user} oluşturdu: {entityType} {entity} ve şuna atandı: {assignee}',
      'assign' => '{user} şunu: {entityType} {entity} şuna ataadı: {assignee}',
      'post' => '{user} {entityType} {entity} yayınladı.',
      'attach' => '{user} {entityType} {entity} yi ekledi.',
      'status' => '{user} {field}  {entityType} {entity} yi güncelledi',
      'update' => '{user} {entityType} {entity} güncelledi.',
      'createRelated' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType} {entity}',
      'mentionInPost' => '{user} mentioned {mentioned} in {entityType} {entity}',
      'createThis' => '{user} oluşturdu: {entityType}',
      'createAssignedThis' => '{user} oluşturdu: {entityType} ve şuna atandı: {assignee}',
      'assignThis' => '{user} şunu: {entityType} şuna atadı: {assignee}',
      'postThis' => '{user} yayınladı',
      'attachThis' => '{user} ekledi',
      'statusThis' => '{user} güncelledi: {field}',
      'updateThis' => '{user} güncelledi: {entityType}',
      'createRelatedThis' => '{user} şunu oluşturdu: {relatedEntityType} {relatedEntity} ve şuna bağladı: {entityType}',
      'emailReceivedFromThis' => 'Email received from {from}',
      'emailReceivedInitialFromThis' => 'Email received from {from}, this {entityType} created',
      'emailReceivedThis' => '{entity} alındı',
      'emailReceivedInitialThis' => 'Email received, this {entityType} created',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} şunun için alındı: {entityType} {entity}',
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
        'Mr.' => 'Bay.',
        'Mrs.' => 'Bayan.',
        'Ms.' => 'Ms.',
        'Dr.' => 'Dr.',
        'Drs.' => 'Drs.',
      ),
      'language' => 
      array (
        'af_ZA' => 'Afrikaca',
        'az_AZ' => 'Azeri Türkçesi',
        'be_BY' => 'Rusça',
        'bg_BG' => 'Bulgarca',
        'bn_IN' => 'Bengalcw',
        'bs_BA' => 'Boşnakça',
        'ca_ES' => 'Katalanca',
        'cs_CZ' => 'Çekce',
        'cy_GB' => 'Galce',
        'da_DK' => 'Danca',
        'de_DE' => 'Almanca',
        'el_GR' => 'Yunanca',
        'en_GB' => 'English (UK)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonca',
        'eu_ES' => 'Baskça',
        'fa_IR' => 'Farsça',
        'fi_FI' => 'Fince',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'İrlandaca',
        'gl_ES' => 'Galce',
        'gn_PY' => 'Guarani',
        'he_IL' => 'İbranice',
        'hi_IN' => 'Hintçe',
        'hr_HR' => 'Hırvatça',
        'hu_HU' => 'Macarca',
        'hy_AM' => 'Ermenice',
        'id_ID' => 'Indonesian',
        'is_IS' => 'İzlandaca',
        'it_IT' => 'İtalyanca',
        'ja_JP' => 'Japonca',
        'ka_GE' => 'Gürcüce',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korece',
        'ku_TR' => 'Kürtçe',
        'lt_LT' => 'Litvanca',
        'lv_LV' => 'Letonca',
        'mk_MK' => 'Makedonca',
        'ml_IN' => 'Malay',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norveç Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepalce',
        'nl_NL' => 'Flemenkçe',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polca',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Rumence',
        'ru_RU' => 'Rusça',
        'sk_SK' => 'Slovakça',
        'sl_SI' => 'Slovence',
        'sq_AL' => 'Arnavutça',
        'sr_RS' => 'Sırpça',
        'sv_SE' => 'İsveççe',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Taicei',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Türkçe',
        'uk_UA' => 'Ukraynaca',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Vietnamca',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)',
      ),
      'dateSearchRanges' => 
      array (
        'on' => 'Da',
        'notOn' => 'NOT ON',
        'after' => 'Sonra',
        'before' => 'Önce',
        'between' => 'Arasında',
        'today' => 'Today',
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
        'equals' => 'Eşit',
        'notEquals' => 'Eşit Değil',
        'greaterThan' => 'den Büyük',
        'lessThan' => 'den Küçük',
        'greaterThanOrEquals' => 'den Büyük ya da Eşit',
        'lessThanOrEquals' => 'den Küçük ya da Eşit',
        'between' => 'Arasında',
      ),
      'autorefreshInterval' => 
      array (
        0 => 'Hiç',
        '0.5' => '30 saniye',
        1 => '1 dakika',
        2 => '2 dakika',
        5 => '5 dakika',
        10 => '10 dakika',
      ),
      'phoneNumber' => 
      array (
        'Mobile' => 'Mobile',
        'Office' => 'Office',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Other',
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
        'NOTICE' => 'Çeviriyi bu adreste bulabilirsiniz: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => 
        array (
          'bold' => 'Kalın',
          'italic' => 'İtalik',
          'underline' => 'Altı Çizili',
          'strike' => 'Üstü Çizili',
          'clear' => 'Yazı Karakterini Kaldır',
          'height' => 'Satır Yüksekliği',
          'name' => 'Yazı Karakteri',
          'size' => 'YazıKarakteri Boyutu',
        ),
        'image' => 
        array (
          'image' => 'Resim',
          'insert' => 'Resim Ekle',
          'resizeFull' => 'Orjinal Boyut',
          'resizeHalf' => '1/2 Boyut',
          'resizeQuarter' => '1/4 Boyut',
          'floatLeft' => 'Sola Hizala',
          'floatRight' => 'Sağa Hizala',
          'floatNone' => 'Hizalamayı Kaldır',
          'dragImageHere' => 'Resmi buraya sürükle',
          'selectFromFiles' => 'Dosya seç',
          'url' => 'Resim URL',
          'remove' => 'Resmi Kaldır',
        ),
        'link' => 
        array (
          'link' => 'Bağlantı',
          'insert' => 'Bağlantı Ekle',
          'unlink' => 'Bağlantıyı Kes',
          'edit' => 'Düzenle',
          'textToDisplay' => 'Gösterilecek Metin',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Yeni Pencerede Aç',
        ),
        'video' => 
        array (
          'video' => 'Video',
          'videoLink' => 'Video Bağlantısı',
          'insert' => 'Video Ekle',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)',
        ),
        'table' => 
        array (
          'table' => 'Tablo',
        ),
        'hr' => 
        array (
          'insert' => 'Yatay Cetvel Ekle',
        ),
        'style' => 
        array (
          'style' => 'Stil',
          'normal' => 'Normal',
          'blockquote' => 'QUOTE',
          'pre' => 'Kod',
          'h1' => 'Başlık 1',
          'h2' => 'Başlık 2',
          'h3' => 'Başlık 3',
          'h4' => 'Başlık 4',
          'h5' => 'Başlık 5',
          'h6' => 'Başlık 6',
        ),
        'lists' => 
        array (
          'unordered' => 'Düzenlenmemiş Liste',
          'ordered' => 'Düzenlenmiş Liste',
        ),
        'options' => 
        array (
          'help' => 'Yardım',
          'fullscreen' => 'Tam Ekran',
          'codeview' => 'Kod Görünümü',
        ),
        'paragraph' => 
        array (
          'paragraph' => 'Paragraf',
          'outdent' => 'Girintiyi arttır',
          'indent' => 'Girintiyi azalt',
          'left' => 'Sola hizala',
          'center' => 'Ortaya hizala',
          'right' => 'Sağa hizala',
          'justify' => 'Tam Yasla',
        ),
        'color' => 
        array (
          'recent' => 'Son Kullanılan Renk',
          'more' => 'Daha Fazla Renk',
          'background' => 'Arkaplan Rengi',
          'foreground' => 'Yazı Karakteri Rengi',
          'transparent' => 'Şeffaflık',
          'setTransparent' => 'Şeffaflığı Ayarla',
          'reset' => 'Sıfırla',
          'resetToDefault' => 'Varsayılana Sıfırla',
        ),
        'shortcut' => 
        array (
          'shortcuts' => 'Klavye Kısayolları',
          'close' => 'Kapat',
          'textFormatting' => 'Metin Biçimlendirme',
          'action' => 'Eylem',
          'paragraphFormatting' => 'Paragraf Biçimlendirme',
          'documentStyle' => 'Döküman Stili',
        ),
        'history' => 
        array (
          'undo' => 'Geri Al',
          'redo' => 'Tekrrar Yap',
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
      'name' => 'İsim',
      'team' => 'Takım',
      'status' => 'Durum',
      'assignToUser' => 'Kullanıcıya Ata',
      'host' => 'Sunucu',
      'username' => 'Kullanıcı Adı',
      'password' => 'Şifre',
      'port' => 'Bağlantı Noktası',
      'monitoredFolders' => 'İzlenen Klasörler',
      'trashFolder' => 'Çöp Kutusu',
      'ssl' => 'SSL',
      'createCase' => 'Dosya Oluştur',
      'reply' => 'Cevapla',
      'caseDistribution' => 'Dosya Dağılımı',
      'replyEmailTemplate' => 'Cevaplama Eposta Şablonu',
      'replyFromAddress' => 'Adresten Cevapla',
      'replyToAddress' => 'Reply To Address',
      'replyFromName' => 'İsimden Cevapla',
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
        'Active' => 'Aktif',
        'Inactive' => 'Pasif',
      ),
      'caseDistribution' => 
      array (
        'Direct-Assignment' => 'DIRECT-ASSIGNMENTXXXX',
        'Round-Robin' => 'ROUND-ROBINXXXX',
        'Least-Busy' => 'LEAST-BUSYXXXX',
      ),
    ),
    'labels' => 
    array (
      'Create InboundEmail' => 'Gelen Eposta Oluştur',
      'IMAP' => 'IMAP',
      'Actions' => 'Hareketler',
      'Main' => 'Ana',
    ),
    'messages' => 
    array (
      'couldNotConnectToImap' => 'IMAP sunucusuna bağlanamadı',
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
      'post' => 'Yayınla',
      'attachments' => 'Dosya Ekle',
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Binlik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'currencyList' => 'para Birimi Listesi',
      'language' => 'Dil',
      'smtpServer' => 'Sunucu',
      'smtpPort' => 'Bağlantı Noktası',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Güvenlik',
      'smtpUsername' => 'Kullanıcı Adı',
      'emailAddress' => 'Eposta',
      'smtpPassword' => 'Şifre',
      'smtpEmailAddress' => 'Eposta Adresi',
      'exportDelimiter' => 'Export Delimiter',
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
        0 => 'Pazar',
        1 => 'Pazartesi',
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
      'name' => 'İsim',
      'roles' => 'Görevler',
      'assignmentPermission' => 'Assignment Permission',
    ),
    'links' => 
    array (
      'users' => 'Kullanıcılar',
      'teams' => 'Takımlar',
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
      'Access' => 'Giriş',
      'Create Role' => 'Görev Oluştur',
    ),
    'options' => 
    array (
      'accessList' => 
      array (
        'not-set' => 'ayarlanmadı',
        'enabled' => 'etkinleştirildi',
        'disabled' => 'devre dışı bırakıldı',
      ),
      'levelList' => 
      array (
        'all' => 'tümü',
        'team' => 'takım',
        'own' => 'kendi',
        'no' => 'NO',
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
      'read' => 'Oku',
      'edit' => 'Düzenle',
      'delete' => 'Sil',
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
      'name' => 'İsim',
      'status' => 'Durum',
      'job' => 'İş',
      'scheduling' => 'Scheduling (crontab notation)',
    ),
    'links' => 
    array (
      'log' => 'Kayıt',
    ),
    'labels' => 
    array (
      'Create ScheduledJob' => 'Create Scheduled Job',
    ),
    'options' => 
    array (
      'job' => 
      array (
        'Cleanup' => 'Temizle',
        'CheckInboundEmails' => 'Gelen Epostaları Kontrol T',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Send Email Reminders',
      ),
      'cronSetup' => 
      array (
        'linux' => 'Not: Espo Planlanmış İşleri çalıştırabilmek için şu kodları crontab dosyasına ekleyin:',
        'mac' => 'Not: Espo Planlanmış İşleri çalıştırabilmek için şu kodları crontab dosyasına ekleyin:',
        'windows' => 'Not: Espo Planlanmış İşleri Windows Scheduled Task ile kullanabilmek için şu kodlarla bir BATCH dosyası oluşturun: ',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):',
      ),
      'status' => 
      array (
        'Active' => 'Aktif',
        'Inactive' => 'Pasif',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'status' => 'Durum',
      'executionTime' => 'Çalışma Süresi',
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'useCache' => 'Önbelleği Kullan',
      'dateFormat' => 'Tarih Biçimi',
      'timeFormat' => 'Saat Biçimi',
      'timeZone' => 'Zaman Dilimi',
      'weekStart' => 'Hafta Başlangıç Günü',
      'thousandSeparator' => 'Binlik Ayraç',
      'decimalMark' => 'Ondalık Ayraç',
      'defaultCurrency' => 'Varsayılan Para Birimi',
      'baseCurrency' => 'Base Currency',
      'currencyRates' => 'Rate Values',
      'currencyList' => 'para Birimi Listesi',
      'language' => 'Dil',
      'companyLogo' => 'Company Logo',
      'smtpServer' => 'Sunucu',
      'smtpPort' => 'Bağlantı Noktası',
      'smtpAuth' => 'Auth',
      'smtpSecurity' => 'Güvenlik',
      'smtpUsername' => 'Kullanıcı Adı',
      'emailAddress' => 'Eposta',
      'smtpPassword' => 'Şifre',
      'outboundEmailFromName' => 'Kimden',
      'outboundEmailFromAddress' => 'Gönderen Adresi',
      'outboundEmailIsShared' => 'Paylaşıldı',
      'recordsPerPage' => 'Sayfa Başına Kayıtlar',
      'recordsPerPageSmall' => 'Records Per Page (Small)',
      'tabList' => 'Sekme Listesi',
      'quickCreateList' => 'Çabuk Oluşturma Listesi',
      'exportDelimiter' => 'Export Delimiter',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Authentication Method',
      'ldapHost' => 'Host',
      'ldapPort' => 'Port',
      'ldapAuth' => 'Auth',
      'ldapUsername' => 'Username',
      'ldapPassword' => 'Password',
      'ldapBindRequiresDn' => 'Bind Requires Dn',
      'ldapBaseDn' => 'Base Dn',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Account Domain Name',
      'ldapTryUsernameSplit' => 'Try Username Split',
      'ldapCreateEspoUser' => 'Create User in EspoCRM',
      'ldapSecurity' => 'Security',
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
        0 => 'Pazar',
        1 => 'Pazartesi',
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
      'Locale' => 'Yerel',
      'SMTP' => 'SMTP',
      'Configuration' => 'Yapılandırma',
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
      'name' => 'İsim',
      'roles' => 'Görevler',
      'positionList' => 'Position List',
    ),
    'links' => 
    array (
      'users' => 'Kullanıcılar',
    ),
    'tooltips' => 
    array (
      'roles' => 'Access Roles. Users of this team obtain access control level from selected roles.',
      'positionList' => 'Available positions in this team. E.g. Salesperson, Manager.',
    ),
    'labels' => 
    array (
      'Create Team' => 'Takım Oluştur',
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'userName' => 'Kullanıcı Adı',
      'title' => 'Başlık',
      'isAdmin' => 'Yönetici',
      'defaultTeam' => 'Varsayılan Takım',
      'emailAddress' => 'Eposta',
      'phoneNumber' => 'Phone',
      'roles' => 'Görevler',
      'teamRole' => 'Position',
      'password' => 'Şifre',
      'passwordConfirm' => 'Şifreyi Doğrulayın',
      'newPassword' => 'New Password',
      'newPasswordConfirm' => 'Confirm New Password',
      'avatar' => 'Avatar',
      'isActive' => 'Is Active',
      'phone' => 'Telefon',
    ),
    'links' => 
    array (
      'teams' => 'Takımlar',
      'roles' => 'Görevler',
      'targetLists' => 'Target Lists',
    ),
    'labels' => 
    array (
      'Create User' => 'Kullanıcı Oluştur',
      'Generate' => 'Generate',
      'Access' => 'Giriş',
      'Preferences' => 'Seçenekler',
      'Change Password' => 'Change Password',
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
      'passwordWillBeSent' => 'Password will be sent to user\'s email address.',
      'accountInfoEmailSubject' => 'Account info',
      'accountInfoEmailBody' => 'Your account information:

Username: {userName}
Password: {password}

{siteUrl}',
      'passwordChangeLinkEmailSubject' => 'Change Password Request',
      'passwordChangeLinkEmailBody' => 'You can change your password by this link {link}. This unique url will be exprired soon.',
      'passwordChanged' => 'Password has been changed',
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
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'billingAddress' => 'Fatura Adresi',
      'shippingAddress' => 'Teslimat Adresi',
      'description' => 'açıklama',
      'sicCode' => 'Firma Kodu',
      'industry' => 'Sektör',
      'type' => 'Tür',
      'contactRole' => 'Title',
      'campaign' => 'Campaign',
      'phone' => 'Telefon',
      'fax' => 'Faks',
    ),
    'links' => 
    array (
      'contacts' => 'Bağlantılar',
      'opportunities' => 'Fırsatlar',
      'cases' => 'Dosyalar',
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
        'Customer' => 'Müşteri',
        'Investor' => 'Yatırımcı',
        'Partner' => 'Ortak',
        'Reseller' => 'Satıcı',
      ),
      'industry' => 
      array (
        'Agriculture' => 'Agriculture',
        'Advertising' => 'Advertising',
        'Apparel & Accessories' => 'Apparel & Accessories',
        'Automotive' => 'Automotive',
        'Banking' => 'Bankacılık',
        'Biotechnology' => 'Biotechnology',
        'Chemical' => 'Chemical',
        'Computer' => 'Computer',
        'Education' => 'Eğitim',
        'Electronics' => 'Elektronik',
        'Entertainment & Leisure' => 'Entertainment & Leisure',
        'Finance' => 'Finans',
        'Food & Beverage' => 'Food & Beverage',
        'Grocery' => 'Grocery',
        'Insurance' => 'Sigortacılık',
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
        'Apparel' => 'Konfeksiyon',
        'Computer Software' => 'Bilgisayar Yazılımı',
      ),
    ),
    'labels' => 
    array (
      'Create Account' => 'Hesap Oluştur',
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
      'month' => 'Ay',
      'week' => 'hafta',
      'day' => 'Gün',
      'agendaWeek' => 'hafta',
      'agendaDay' => 'Gün',
    ),
    'labels' => 
    array (
      'Today' => 'Bugün',
      'Create' => 'Oluştur',
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'direction' => 'Yönlendirme',
      'duration' => 'Süre',
      'description' => 'açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Bağlantılar',
      'leads' => 'Müşteri Adayları',
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
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar',
      ),
      'direction' => 
      array (
        'Outbound' => 'Giden',
        'Inbound' => 'Gelen',
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
      'Create Call' => 'Arama Oluştur',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetleri Gönder',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
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
      'name' => 'İsim',
      'number' => 'Numara',
      'status' => 'Durum',
      'account' => 'Hesap',
      'contact' => 'Bağlantı',
      'priority' => 'Öncelik',
      'type' => 'Tür',
      'description' => 'açıklama',
    ),
    'links' => 
    array (
    ),
    'options' => 
    array (
      'status' => 
      array (
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'Pending' => 'Beklemede',
        'Closed' => 'Kapandı',
        'Rejected' => 'Reddedildi',
        'Duplicate' => 'Kopyala',
      ),
      'priority' => 
      array (
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil',
      ),
      'type' => 
      array (
        'Question' => 'Soru',
        'Incident' => 'Olay',
        'Problem' => 'sorun',
      ),
    ),
    'labels' => 
    array (
      'Create Case' => 'Dosya Oluştur',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'closed' => 'Closed',
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'account' => 'Hesap',
      'accounts' => 'Accounts',
      'phoneNumber' => 'Phone',
      'accountType' => 'Hesap Türü',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'opportunityRole' => 'Opportunity Role',
      'accountRole' => 'Title',
      'description' => 'açıklama',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
    ),
    'links' => 
    array (
      'opportunities' => 'Fırsatlar',
      'cases' => 'Dosyalar',
      'targetLists' => 'Target Lists',
      'campaignLogRecords' => 'Campaign Log',
    ),
    'labels' => 
    array (
      'Create Contact' => 'Bağlantı Oluştur',
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
      'Converted To' => 'Çevrildi',
      'Create Lead' => 'Müşteri Adayı Oluştur',
      'Convert' => 'Çevir',
    ),
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Website',
      'phoneNumber' => 'Phone',
      'accountName' => 'Hesap Adı',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'status' => 'Durum',
      'source' => 'Kaynak',
      'opportunityAmount' => 'Fırsat Tutarı',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'açıklama',
      'createdAccount' => 'Hesap',
      'createdContact' => 'Bağlantı',
      'createdOpportunity' => 'Fırsat',
      'campaign' => 'Campaign',
      'targetLists' => 'Target Lists',
      'targetList' => 'Target List',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
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
        'New' => 'Yeni',
        'Assigned' => 'Atanmış',
        'In Process' => 'İşlemde',
        'Converted' => 'Çevrildi',
        'Recycled' => 'Geri Dönüştürüldü',
        'Dead' => 'Ölü',
      ),
      'source' => 
      array (
        'Call' => 'Arama',
        'Email' => 'Eposta',
        'Existing Customer' => 'Varolan Müşteri',
        'Partner' => 'Ortak',
        'Public Relations' => 'Halkla İlişkiler',
        'Web Site' => 'Web Site',
        'Campaign' => 'Kampanya',
        'Other' => 'Diğer',
      ),
    ),
    'presetFilters' => 
    array (
      'active' => 'Active',
      'converted' => 'Converted',
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Bitiş Tarihi',
      'duration' => 'Süre',
      'description' => 'açıklama',
      'users' => 'Kullanıcılar',
      'contacts' => 'Bağlantılar',
      'leads' => 'Müşteri Adayları',
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
        'Planned' => 'Planlanmış',
        'Held' => 'Elde Tutulanlar',
        'Not Held' => 'Elde Tutulmayanlar',
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
      'Create Meeting' => 'Toplantı Oluştur ',
      'Set Held' => 'SET HELDXXX',
      'Set Not Held' => 'SET NOT HELD XXXX',
      'Send Invitations' => 'Davetleri Gönder',
      'on time' => 'on time',
      'before' => 'before',
    ),
    'presetFilters' => 
    array (
      'planned' => 'Planned',
      'held' => 'Held',
      'todays' => 'Today\'s',
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'account' => 'Hesap',
      'stage' => 'Aşama',
      'amount' => 'Tutar',
      'probability' => 'Olasılık, %',
      'leadSource' => 'Aday Müşteri Kaynağı',
      'doNotCall' => 'Arama Yapma',
      'closeDate' => 'Kapanış Tarii',
      'contacts' => 'Contacts',
      'description' => 'açıklama',
      'amountConverted' => 'Amount (converted)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Campaign',
    ),
    'links' => 
    array (
      'contacts' => 'Bağlantılar',
      'documents' => 'Documents',
    ),
    'options' => 
    array (
      'stage' => 
      array (
        'Prospecting' => 'Araştırma',
        'Qualification' => 'Yeterlilik',
        'Needs Analysis' => 'Analiz Yapılmalı',
        'Value Proposition' => 'Değer Önerisi',
        'Id. Decision Makers' => 'Id. Karar Vericiler',
        'Perception Analysis' => 'Algı Analizi',
        'Proposal/Price Quote' => 'Proposal/Price Quote',
        'Negotiation/Review' => 'Görüşme/İnceleme',
        'Closed Won' => 'Kapalı Kazanç',
        'Closed Lost' => 'Kapalı Kayıp',
      ),
      'leadSource' => 
      array (
        'Call' => 'Arama',
        'Email' => 'Eposta',
        'Existing Customer' => 'Varolan Müşteri',
        'Partner' => 'Ortak',
        'Public Relations' => 'Halkla İlişkiler',
        'Web Site' => 'Web Site',
        'Campaign' => 'Kampanya',
        'Other' => 'Diğer',
      ),
    ),
    'labels' => 
    array (
      'Create Opportunity' => 'Fırsat Oluştur',
    ),
    'presetFilters' => 
    array (
      'open' => 'Open',
      'won' => 'Won',
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'name' => 'Name',
      'emailAddress' => 'Email',
      'title' => 'Title',
      'website' => 'Website',
      'accountName' => 'Account Name',
      'phoneNumber' => 'Phone',
      'doNotCall' => 'Do Not Call',
      'address' => 'Address',
      'description' => 'Description',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Target' => 'Create Target',
      'Convert to Lead' => 'Convert to Lead',
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
      'name' => 'İsim',
      'parent' => 'Üst Seçenek',
      'status' => 'Durum',
      'dateStart' => 'Başlangıç Tarihi',
      'dateEnd' => 'Vade Tarihi',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Öncelik',
      'description' => 'açıklama',
      'isOverdue' => 'Vadesi Geçmiş',
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
        'Not Started' => 'başlamadı',
        'Started' => 'Başladı',
        'Completed' => 'Tamamlandı',
        'Canceled' => 'İptal edildi',
        'Deferred' => 'Deferred',
      ),
      'priority' => 
      array (
        'Low' => 'Düşük',
        'Normal' => 'Normal',
        'High' => 'Yüksek',
        'Urgent' => 'Acil',
      ),
    ),
    'labels' => 
    array (
      'Create Task' => 'Görev Oluştur',
      'Complete' => 'Complete',
    ),
    'presetFilters' => 
    array (
      'actual' => 'Actual',
      'completed' => 'Completed',
      'todays' => 'Today\'s',
      'overdue' => 'Overdue',
    ),
  ),
  'Prospect' => 
  array (
    'fields' => 
    array (
      'name' => 'İsim',
      'emailAddress' => 'Eposta',
      'title' => 'Başlık',
      'website' => 'Website',
      'accountName' => 'Hesap Adı',
      'phone' => 'Telefon',
      'phoneOffice' => 'Phone (Office)',
      'fax' => 'Faks',
      'doNotCall' => 'Arama Yapma',
      'address' => 'Adres',
      'description' => 'açıklama',
    ),
    'links' => 
    array (
    ),
    'labels' => 
    array (
      'Create Prospect' => 'Beklenti Oluştur',
      'Convert to Lead' => 'Müşteri Adayına Dönüştür',
    ),
  ),
);

?>