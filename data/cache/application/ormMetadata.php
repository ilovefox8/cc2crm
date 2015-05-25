<?php

return array (
  'Attachment' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 36,
      ),
      'size' => 
      array (
        'type' => 'int',
        'len' => 11,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'contents' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'role' => 
      array (
        'type' => 'varchar',
        'len' => 36,
      ),
      'global' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'parent' => 
      array (
        'columns' => 
        array (
          0 => 'parentType',
          1 => 'parentId',
        ),
      ),
    ),
  ),
  'AuthToken' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'token' => 
      array (
        'type' => 'varchar',
        'len' => '36',
        'index' => true,
      ),
      'hash' => 
      array (
        'type' => 'varchar',
        'len' => 150,
        'index' => true,
      ),
      'userId' => 
      array (
        'type' => 'foreignId',
        'len' => '24',
        'index' => true,
        'dbType' => 'varchar',
        'notNull' => false,
      ),
      'ipAddress' => 
      array (
        'type' => 'varchar',
        'len' => '36',
      ),
      'lastAccess' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'token' => 
      array (
        'columns' => 
        array (
          0 => 'token',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'Currency' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rate' => 
      array (
        'type' => 'float',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Email' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'fromName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'fromString' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'replyToString' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'from' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'to' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'cc' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'bcc' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'personStringData' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'isRead' => 
      array (
        'type' => 'bool',
        'notStorable' => true,
        'default' => true,
      ),
      'nameHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'typeHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'idHash' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'messageId' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'messageIdInternal' => 
      array (
        'type' => 'varchar',
        'len' => 300,
        'index' => true,
      ),
      'emailAddress' => 
      array (
        'type' => 'base',
        'notStorable' => true,
      ),
      'bodyPlain' => 
      array (
        'type' => 'text',
      ),
      'body' => 
      array (
        'type' => 'text',
      ),
      'isHtml' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Archived',
        'len' => 255,
      ),
      'dateSent' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deliveryDate' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'fromEmailAddressId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'fromEmailAddressName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'fromEmailAddress',
        'foreign' => 'name',
      ),
      'toEmailAddressesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'toEmailAddressesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'ccEmailAddressesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'ccEmailAddressesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'bccEmailAddressesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'bccEmailAddressesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'bccEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'emailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'bcc',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'ccEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'emailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'cc',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'toEmailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'emailAddressId',
        ),
        'relationName' => 'emailEmailAddress',
        'conditions' => 
        array (
          'addressType' => 'to',
        ),
        'additionalColumns' => 
        array (
          'addressType' => 
          array (
            'type' => 'varchar',
            'len' => '4',
          ),
        ),
      ),
      'fromEmailAddress' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailAddress',
        'key' => 'fromEmailAddressId',
        'foreignKey' => 'id',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'relationName' => 'attachments',
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'emailUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'emailId',
          1 => 'userId',
        ),
        'additionalColumns' => 
        array (
          'isRead' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Email',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'dateSentAssignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'dateSent',
          1 => 'assignedUserId',
        ),
      ),
      'dateSent' => 
      array (
        'columns' => 
        array (
          0 => 'dateSent',
          1 => 'deleted',
        ),
      ),
      'dateSentStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateSent',
          1 => 'status',
          2 => 'deleted',
        ),
      ),
    ),
  ),
  'EmailAccount' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'host' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'port' => 
      array (
        'type' => 'varchar',
        'default' => '143',
        'len' => 255,
      ),
      'ssl' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'password' => 
      array (
        'type' => 'password',
      ),
      'monitoredFolders' => 
      array (
        'type' => 'varchar',
        'default' => 'INBOX',
        'len' => 255,
      ),
      'fetchSince' => 
      array (
        'type' => 'date',
      ),
      'fetchData' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'EmailAddress' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'lower' => 
      array (
        'type' => 'varchar',
        'index' => true,
        'len' => 255,
      ),
      'invalid' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'optOut' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'EmailTemplate' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'subject' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'body' => 
      array (
        'type' => 'text',
      ),
      'isHtml' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'EmailTemplate',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
    ),
  ),
  'Extension' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'version' => 
      array (
        'type' => 'varchar',
        'len' => 50,
      ),
      'fileList' => 
      array (
        'type' => 'jsonArray',
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'isInstalled' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'ExternalAccount' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'enabled' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Import' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'importedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'duplicateCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'updatedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'fileName' => 
      array (
        'type' => 'foreign',
        'relation' => 'file',
        'foreign' => 'name',
        'notStorable' => false,
      ),
      'fileId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'file' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'fileId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'InboundEmail' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'host' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'port' => 
      array (
        'type' => 'varchar',
        'default' => '143',
        'len' => 255,
      ),
      'ssl' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'username' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'password' => 
      array (
        'type' => 'password',
      ),
      'monitoredFolders' => 
      array (
        'type' => 'varchar',
        'default' => 'INBOX',
        'len' => 255,
      ),
      'fetchData' => 
      array (
        'type' => 'text',
      ),
      'createCase' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'caseDistribution' => 
      array (
        'type' => 'varchar',
        'default' => 'Direct-Assignment',
        'len' => 255,
      ),
      'targetUserPosition' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'reply' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'replyFromAddress' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'replyToAddress' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'replyFromName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignToUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignToUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignToUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'teamName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'team',
        'foreign' => 'name',
      ),
      'replyEmailTemplateId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'replyEmailTemplateName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'replyEmailTemplate',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'replyEmailTemplate' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'EmailTemplate',
        'key' => 'replyEmailTemplateId',
        'foreignKey' => 'id',
      ),
      'team' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'teamId',
        'foreignKey' => 'id',
      ),
      'assignToUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignToUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Integration' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'enabled' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Job' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Pending',
        'len' => 255,
      ),
      'executeTime' => 
      array (
        'type' => 'datetime',
      ),
      'serviceName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'method' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'attempts' => 
      array (
        'type' => 'int',
        'len' => 11,
      ),
      'failedAttempts' => 
      array (
        'type' => 'int',
        'len' => 11,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'scheduledJobId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'scheduledJobName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'scheduledJob',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'scheduledJob' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'executeTime' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'executeTime',
        ),
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'Note' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'post' => 
      array (
        'type' => 'text',
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'len' => 11,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'relatedId' => 
      array (
        'type' => 'foreignId',
        'index' => 'related',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'relatedType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'related',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'relatedName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'superParentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'superParent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'superParentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'superParent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'superParentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'related' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'relatedId',
      ),
      'superParent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'superParentId',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'relationName' => 'attachments',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'createdAt',
        ),
      ),
      'parent' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'parentId',
          1 => 'parentType',
        ),
      ),
      'parentAndSuperParent' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'parentId',
          1 => 'parentType',
          2 => 'superParentId',
          3 => 'superParentType',
        ),
      ),
    ),
  ),
  'Notification' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'len' => 11,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'noteData' => 
      array (
        'type' => 'jsonObject',
        'notStorable' => true,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'read' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'createdAt',
        ),
      ),
      'user' => 
      array (
        'type' => 'index',
        'columns' => 
        array (
          0 => 'userId',
          1 => 'createdAt',
        ),
      ),
    ),
  ),
  'PasswordChangeRequest' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'requestId' => 
      array (
        'type' => 'varchar',
        'len' => 24,
        'index' => true,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'userName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'user',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'user' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'userId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'PhoneNumber' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Preferences' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'timeZone' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'dateFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'MM/DD/YYYY',
        'len' => 255,
      ),
      'timeFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'HH:mm',
        'len' => 255,
      ),
      'weekStart' => 
      array (
        'type' => 'int',
        'default' => '0',
        'len' => 11,
      ),
      'thousandSeparator' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'decimalMark' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
      ),
      'defaultCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'len' => 255,
      ),
      'dashboardLayout' => 
      array (
        'type' => 'text',
      ),
      'dashletOptions' => 
      array (
        'type' => 'text',
      ),
      'presetFilters' => 
      array (
        'type' => 'text',
      ),
      'smtpEmailAddress' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'smtpServer' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => 'en_US',
        'len' => 255,
      ),
      'exportDelimiter' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'receiveAssignmentEmailNotifications' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'autoFollowEntityTypeList' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
      ),
      'signature' => 
      array (
        'type' => 'text',
      ),
      'defaultReminders' => 
      array (
        'type' => 'jsonArray',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Role' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 150,
      ),
      'assignmentPermission' => 
      array (
        'type' => 'varchar',
        'default' => 'not-set',
        'len' => 255,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'roleId',
          1 => 'teamId',
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'roleId',
          1 => 'userId',
        ),
      ),
    ),
  ),
  'ScheduledJob' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'job' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'scheduling' => 
      array (
        'type' => 'varchar',
        'default' => '* * * * *',
        'len' => 255,
      ),
      'lastRun' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'logIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'logNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'log' => 
      array (
        'type' => 'hasMany',
        'entity' => 'ScheduledJobLogRecord',
        'foreignKey' => 'scheduledJobId',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'ScheduledJobLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'executionTime' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'scheduledJobId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'scheduledJobName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'scheduledJob',
        'foreign' => 'name',
      ),
    ),
    'relations' => 
    array (
      'scheduledJob' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'ScheduledJob',
        'key' => 'scheduledJobId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Settings' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'useCache' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'recordsPerPage' => 
      array (
        'type' => 'int',
        'default' => '20',
        'len' => 11,
      ),
      'recordsPerPageSmall' => 
      array (
        'type' => 'int',
        'default' => '10',
        'len' => 11,
      ),
      'timeZone' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'dateFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'MM/DD/YYYY',
        'len' => 255,
      ),
      'timeFormat' => 
      array (
        'type' => 'varchar',
        'default' => 'HH:mm',
        'len' => 255,
      ),
      'weekStart' => 
      array (
        'type' => 'int',
        'default' => '0',
        'len' => 11,
      ),
      'thousandSeparator' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'decimalMark' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => '.',
      ),
      'currencyList' => 
      array (
        'type' => 'jsonArray',
        'default' => '["USD","EUR"]',
      ),
      'defaultCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'len' => 255,
      ),
      'baseCurrency' => 
      array (
        'type' => 'varchar',
        'default' => 'USD',
        'len' => 255,
      ),
      'currencyRates' => 
      array (
        'type' => 'base',
        'notStorable' => true,
      ),
      'outboundEmailIsShared' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'outboundEmailFromName' => 
      array (
        'type' => 'varchar',
        'default' => 'EspoCRM',
        'len' => 255,
      ),
      'outboundEmailFromAddress' => 
      array (
        'type' => 'varchar',
        'default' => 'crm@example.com',
        'len' => 255,
      ),
      'smtpServer' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPort' => 
      array (
        'type' => 'int',
        'default' => '25',
        'len' => 11,
      ),
      'smtpAuth' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'smtpSecurity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpUsername' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'smtpPassword' => 
      array (
        'type' => 'password',
      ),
      'tabList' => 
      array (
        'type' => 'jsonArray',
      ),
      'quickCreateList' => 
      array (
        'type' => 'jsonArray',
      ),
      'language' => 
      array (
        'type' => 'varchar',
        'default' => 'en_US',
        'len' => 255,
      ),
      'globalSearchEntityList' => 
      array (
        'type' => 'jsonArray',
      ),
      'exportDelimiter' => 
      array (
        'type' => 'varchar',
        'len' => 1,
        'default' => ',',
      ),
      'authenticationMethod' => 
      array (
        'type' => 'varchar',
        'default' => 'Espo',
        'len' => 255,
      ),
      'ldapHost' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapPort' => 
      array (
        'type' => 'int',
        'default' => '389',
        'len' => 11,
      ),
      'ldapSecurity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAuth' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapUsername' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapPassword' => 
      array (
        'type' => 'password',
      ),
      'ldapBindRequiresDn' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapBaseDn' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapUserLoginFilter' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountCanonicalForm' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountDomainName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountDomainNameShort' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapAccountFilterFormat' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'ldapTryUsernameSplit' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapOptReferrals' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'ldapCreateEspoUser' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'disableExport' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignmentEmailNotifications' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'assignmentEmailNotificationsEntityList' => 
      array (
        'type' => 'jsonArray',
      ),
      'assignmentNotificationsEntityList' => 
      array (
        'type' => 'jsonArray',
      ),
      'b2cMode' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'disableAvatars' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'followCreatedEntities' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'companyLogoName' => 
      array (
        'type' => 'foreign',
        'relation' => 'companyLogo',
        'foreign' => 'name',
        'notStorable' => false,
      ),
      'companyLogoId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'companyLogo' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'companyLogoId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Team' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'positionList' => 
      array (
        'type' => 'jsonArray',
      ),
      'userRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'rolesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rolesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'roles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleTeam',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'roleId',
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'teamId',
          1 => 'userId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
    ),
  ),
  'UniqueId' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'index' => true,
        'len' => 255,
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
    ),
    'relations' => 
    array (
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'User' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(user.first_name, \'\'), \' \', IFNULL(user.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(user.first_name LIKE {value} OR user.last_name LIKE {value} OR CONCAT(user.first_name, \' \', user.last_name) LIKE {value} OR CONCAT(user.last_name, \' \', user.first_name) LIKE {value})',
          '=' => '(user.first_name = {value} OR user.last_name = {value} OR CONCAT(user.first_name, \' \', user.last_name) = {value} OR CONCAT(user.last_name, \' \', user.first_name) = {value})',
        ),
        'orderBy' => 'user.first_name {direction}',
      ),
      'isAdmin' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'userName' => 
      array (
        'type' => 'varchar',
        'len' => 50,
      ),
      'password' => 
      array (
        'type' => 'password',
        'len' => 150,
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'isActive' => 
      array (
        'type' => 'bool',
        'default' => true,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'emailAddresses.name',
        'where' => 
        array (
          'LIKE' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'User\' AND
                                    email_address.deleted = 0 AND email_address.name LIKE {value}
                            )',
          '=' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'User\' AND
                                    email_address.deleted = 0 AND email_address.name = {value}
                            )',
          '<>' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'User\' AND
                                    email_address.deleted = 0 AND email_address.name <> {value}
                            )',
        ),
        'orderBy' => 'emailAddresses.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phoneNumbers.name',
        'where' => 
        array (
          'LIKE' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
                                    phone_number.deleted = 0 AND phone_number.name = {value}
                            )',
          '<>' => 'user.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'User\' AND
                                    phone_number.deleted = 0 AND phone_number.name <> {value}
                            )',
        ),
        'orderBy' => 'phoneNumbers.name {direction}',
      ),
      'token' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'teamRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'defaultTeamId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'defaultTeamName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'defaultTeam',
        'foreign' => 'name',
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rolesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'rolesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'avatarName' => 
      array (
        'type' => 'foreign',
        'relation' => 'avatar',
        'foreign' => 'name',
        'notStorable' => false,
      ),
      'avatarId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'User',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'User',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'targetListUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'targetListId',
        ),
      ),
      'emails' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Email',
        'relationName' => 'emailUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'emailId',
        ),
        'additionalColumns' => 
        array (
          'isRead' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'callId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'meetingId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'roles' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Role',
        'relationName' => 'roleUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'roleId',
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'teamUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'userId',
          1 => 'teamId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'defaultTeam' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Team',
        'key' => 'defaultTeamId',
        'foreignKey' => 'id',
      ),
      'avatar' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'avatarId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Account' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'emailAddresses.name',
        'where' => 
        array (
          'LIKE' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Account\' AND
                                    email_address.deleted = 0 AND email_address.name LIKE {value}
                            )',
          '=' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Account\' AND
                                    email_address.deleted = 0 AND email_address.name = {value}
                            )',
          '<>' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Account\' AND
                                    email_address.deleted = 0 AND email_address.name <> {value}
                            )',
        ),
        'orderBy' => 'emailAddresses.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phoneNumbers.name',
        'where' => 
        array (
          'LIKE' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
                                    phone_number.deleted = 0 AND phone_number.name = {value}
                            )',
          '<>' => 'account.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Account\' AND
                                    phone_number.deleted = 0 AND phone_number.name <> {value}
                            )',
        ),
        'orderBy' => 'phoneNumbers.name {direction}',
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'industry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'sicCode' => 
      array (
        'type' => 'varchar',
        'len' => 40,
      ),
      'contactRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'billingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'billingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'billingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'billingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'billingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'shippingAddressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'campaignId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksPrimaryIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksPrimaryNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsPrimaryIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsPrimaryNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsPrimaryIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsPrimaryNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsPrimaryIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsPrimaryNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'documentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'documentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'accountTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'targetListId',
        ),
      ),
      'campaignLogRecords' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'noJoin' => true,
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasksPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Task',
        'foreignKey' => 'accountId',
      ),
      'callsPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Call',
        'foreignKey' => 'accountId',
      ),
      'emailsPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Email',
        'foreignKey' => 'accountId',
      ),
      'meetingsPrimary' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Meeting',
        'foreignKey' => 'accountId',
      ),
      'documents' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'accountDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'documentId',
        ),
      ),
      'cases' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'accountId',
      ),
      'opportunities' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'accountId',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'accountId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Account',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'name',
          1 => 'deleted',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'Call' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planned',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
      ),
      'duration' => 
      array (
        'type' => 'int',
        'default' => '300',
        'len' => 11,
      ),
      'reminders' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
      ),
      'direction' => 
      array (
        'type' => 'varchar',
        'default' => 'Outbound',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'leadId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'callUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'callId',
          1 => 'userId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Call',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'dateStartStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'status',
        ),
      ),
      'dateStart' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'deleted',
        ),
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
      ),
    ),
  ),
  'Campaign' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planning',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'startDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
      ),
      'endDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'sentCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'openedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'clickedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'optedOutCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'bouncedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'hardBouncedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'softBouncedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'leadCreatedCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'revenue' => 
      array (
        'type' => 'float',
        'notStorable' => true,
        'orderBy' => 'revenueConverted {direction}',
      ),
      'revenueCurrency' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'campaignLogRecords' => 
      array (
        'type' => 'hasMany',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'campaignId',
      ),
      'opportunities' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'campaignId',
        'noJoin' => true,
      ),
      'leads' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Lead',
        'foreignKey' => 'campaignId',
        'noJoin' => true,
      ),
      'contacts' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Contact',
        'foreignKey' => 'campaignId',
        'noJoin' => true,
      ),
      'accounts' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Account',
        'foreignKey' => 'campaignId',
        'noJoin' => true,
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'campaignTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'campaignId',
          1 => 'targetListId',
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Campaign',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'CampaignLogRecord' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'action' => 
      array (
        'type' => 'varchar',
        'len' => 50,
      ),
      'actionDate' => 
      array (
        'type' => 'datetime',
      ),
      'data' => 
      array (
        'type' => 'jsonObject',
      ),
      'stringData' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'stringAdditionalData' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'application' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'default' => 'Espo',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'campaignId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'objectId' => 
      array (
        'type' => 'foreignId',
        'index' => 'object',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'objectType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'object',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'objectName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'object' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'objectId',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'actionDate' => 
      array (
        'columns' => 
        array (
          0 => 'actionDate',
          1 => 'deleted',
        ),
      ),
      'action' => 
      array (
        'columns' => 
        array (
          0 => 'action',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'Case' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'number' => 
      array (
        'type' => 'int',
        'autoincrement' => true,
        'unique' => true,
        'index' => true,
        'len' => 11,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'New',
        'len' => 255,
      ),
      'priority' => 
      array (
        'type' => 'varchar',
        'default' => 'Normal',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'contactId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'contactName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'contact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'inboundEmailId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'inboundEmailName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'inboundEmail',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'contact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'contactId',
        'foreignKey' => 'id',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'inboundEmail' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'InboundEmail',
        'key' => 'inboundEmailId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Case',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
      ),
    ),
  ),
  'Contact' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(contact.first_name, \'\'), \' \', IFNULL(contact.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(contact.first_name LIKE {value} OR contact.last_name LIKE {value} OR CONCAT(contact.first_name, \' \', contact.last_name) LIKE {value} OR CONCAT(contact.last_name, \' \', contact.first_name) LIKE {value})',
          '=' => '(contact.first_name = {value} OR contact.last_name = {value} OR CONCAT(contact.first_name, \' \', contact.last_name) = {value} OR CONCAT(contact.last_name, \' \', contact.first_name) = {value})',
        ),
        'orderBy' => 'contact.first_name {direction}',
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'where' => 
        array (
          '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND account_id = {value})',
        ),
        'len' => '24',
        'index' => true,
        'dbType' => 'varchar',
        'notNull' => false,
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 50,
        'notStorable' => true,
        'select' => 'accountContact.role',
        'orderBy' => 'accountContact.role {direction}',
        'where' => 
        array (
          'LIKE' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND role LIKE {value})',
          '=' => 'contact.id IN (SELECT contact_id FROM account_contact WHERE deleted = 0 AND role = {value})',
        ),
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'emailAddresses.name',
        'where' => 
        array (
          'LIKE' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Contact\' AND
                                    email_address.deleted = 0 AND email_address.name LIKE {value}
                            )',
          '=' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Contact\' AND
                                    email_address.deleted = 0 AND email_address.name = {value}
                            )',
          '<>' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Contact\' AND
                                    email_address.deleted = 0 AND email_address.name <> {value}
                            )',
        ),
        'orderBy' => 'emailAddresses.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phoneNumbers.name',
        'where' => 
        array (
          'LIKE' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
                                    phone_number.deleted = 0 AND phone_number.name = {value}
                            )',
          '<>' => 'contact.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Contact\' AND
                                    phone_number.deleted = 0 AND phone_number.name <> {value}
                            )',
        ),
        'orderBy' => 'phoneNumbers.name {direction}',
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'accountRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'accountType' => 
      array (
        'type' => 'foreign',
        'relation' => 'account',
        'foreign' => 'type',
      ),
      'opportunityRole' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'accountsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListId' => 
      array (
        'type' => 'foreignId',
        'index' => 'targetList',
        'notStorable' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'targetListName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'casesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'contactTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'targetListId',
        ),
      ),
      'campaignLogRecords' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'noJoin' => true,
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'callId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'meetingId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'cases' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Case',
        'foreignKey' => 'contactId',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'opportunityId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountContact',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'contactId',
          1 => 'accountId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Contact',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'firstName' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'deleted',
        ),
      ),
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'lastName',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'Document' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'source' => 
      array (
        'type' => 'varchar',
        'default' => 'Espo',
        'len' => 255,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'publishDate' => 
      array (
        'type' => 'date',
      ),
      'expirationDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'fileName' => 
      array (
        'type' => 'foreign',
        'relation' => 'file',
        'foreign' => 'name',
        'notStorable' => false,
      ),
      'fileId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
    ),
    'relations' => 
    array (
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Document',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'opportunities' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Opportunity',
        'relationName' => 'documentOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'documentId',
          1 => 'opportunityId',
        ),
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountDocument',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'documentId',
          1 => 'accountId',
        ),
      ),
      'file' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Attachment',
        'key' => 'fileId',
        'foreignKey' => 'id',
      ),
    ),
  ),
  'Lead' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(lead.first_name, \'\'), \' \', IFNULL(lead.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(lead.first_name LIKE {value} OR lead.last_name LIKE {value} OR CONCAT(lead.first_name, \' \', lead.last_name) LIKE {value} OR CONCAT(lead.last_name, \' \', lead.first_name) LIKE {value})',
          '=' => '(lead.first_name = {value} OR lead.last_name = {value} OR CONCAT(lead.first_name, \' \', lead.last_name) = {value} OR CONCAT(lead.last_name, \' \', lead.first_name) = {value})',
        ),
        'orderBy' => 'lead.first_name {direction}',
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'New',
        'len' => 255,
      ),
      'source' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'opportunityAmount' => 
      array (
        'type' => 'float',
        'orderBy' => 'opportunityAmountConverted {direction}',
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'emailAddresses.name',
        'where' => 
        array (
          'LIKE' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Lead\' AND
                                    email_address.deleted = 0 AND email_address.name LIKE {value}
                            )',
          '=' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Lead\' AND
                                    email_address.deleted = 0 AND email_address.name = {value}
                            )',
          '<>' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Lead\' AND
                                    email_address.deleted = 0 AND email_address.name <> {value}
                            )',
        ),
        'orderBy' => 'emailAddresses.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phoneNumbers.name',
        'where' => 
        array (
          'LIKE' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
                                    phone_number.deleted = 0 AND phone_number.name = {value}
                            )',
          '<>' => 'lead.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Lead\' AND
                                    phone_number.deleted = 0 AND phone_number.name <> {value}
                            )',
        ),
        'orderBy' => 'phoneNumbers.name {direction}',
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'opportunityAmountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'opportunityAmountConverted' => 
      array (
        'type' => 'float',
        'select' => 'lead.opportunity_amount * opportunity_amount_currency_alias.rate',
        'where' => 
        array (
          '=' => 'lead.opportunity_amount * opportunity_amount_currency_alias.rate = {value}',
          '>' => 'lead.opportunity_amount * opportunity_amount_currency_alias.rate > {value}',
          '<' => 'lead.opportunity_amount * opportunity_amount_currency_alias.rate < {value}',
          '>=' => 'lead.opportunity_amount * opportunity_amount_currency_alias.rate >= {value}',
          '<=' => 'lead.opportunity_amount * opportunity_amount_currency_alias.rate <= {value}',
          '<>' => 'lead.opportunity_amount * opportunity_amount_currency_alias.rate <> {value}',
        ),
        'notStorable' => true,
        'orderBy' => 'opportunityAmountConverted {direction}',
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'createdAccountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdAccountName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'createdAccount',
        'foreign' => 'name',
      ),
      'createdContactId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdContactName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'createdContact',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'createdOpportunityId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdOpportunityName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'createdOpportunity',
        'foreign' => 'name',
      ),
      'targetListsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'targetListId' => 
      array (
        'type' => 'foreignId',
        'index' => 'targetList',
        'notStorable' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'targetListName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignLogRecordsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'opportunitiesNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'targetLists' => 
      array (
        'type' => 'manyMany',
        'entity' => 'TargetList',
        'relationName' => 'leadTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'targetListId',
        ),
      ),
      'campaignLogRecords' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'CampaignLogRecord',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'noJoin' => true,
      ),
      'createdOpportunity' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Opportunity',
        'key' => 'createdOpportunityId',
        'foreignKey' => 'id',
        'noJoin' => true,
      ),
      'createdContact' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Contact',
        'key' => 'createdContactId',
        'foreignKey' => 'id',
        'noJoin' => true,
      ),
      'createdAccount' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'createdAccountId',
        'foreignKey' => 'id',
        'noJoin' => true,
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Call',
        'relationName' => 'callLead',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'callId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'meetings' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Meeting',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'leadId',
          1 => 'meetingId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'opportunities' => 
      array (
        'type' => 'hasMany',
        'entity' => 'Opportunity',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Lead',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'firstName' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'deleted',
        ),
      ),
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'lastName',
        ),
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
      ),
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
      ),
      'createdAtStatus' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'status',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
      ),
    ),
  ),
  'Meeting' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Planned',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
      ),
      'duration' => 
      array (
        'type' => 'int',
        'default' => '3600',
        'len' => 11,
      ),
      'reminders' => 
      array (
        'type' => 'jsonArray',
        'notStorable' => true,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'acceptanceStatus' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'len' => 255,
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'leadMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'leadId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactMeeting',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'meetingUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'meetingId',
          1 => 'userId',
        ),
        'additionalColumns' => 
        array (
          'status' => 
          array (
            'type' => 'varchar',
            'len' => '36',
            'default' => 'None',
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Meeting',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'dateStartStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'status',
        ),
      ),
      'dateStart' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'deleted',
        ),
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
      ),
    ),
  ),
  'Opportunity' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'amount' => 
      array (
        'type' => 'float',
        'orderBy' => 'amountConverted {direction}',
      ),
      'amountWeightedConverted' => 
      array (
        'type' => 'float',
        'notNull' => false,
        'notStorable' => true,
        'select' => 'opportunity.amount * amount_currency_alias.rate * opportunity.probability / 100',
        'orderBy' => 'amountWeightedConverted {direction}',
        'where' => 
        array (
          '=' => '(opportunity.amount * amount_currency_alias.rate * opportunity.probability / 100) = {value}',
          '<' => '(opportunity.amount * amount_currency_alias.rate * opportunity.probability / 100) < {value}',
          '>' => '(opportunity.amount * amount_currency_alias.rate * opportunity.probability / 100) > {value}',
          '<=' => '(opportunity.amount * amount_currency_alias.rate * opportunity.probability / 100) <= {value}',
          '>=' => '(opportunity.amount * amount_currency_alias.rate * opportunity.probability / 100) >= {value}',
          '<>' => '(opportunity.amount * amount_currency_alias.rate * opportunity.probability / 100) <> {value}',
        ),
      ),
      'stage' => 
      array (
        'type' => 'varchar',
        'default' => 'Prospecting',
        'len' => 255,
      ),
      'probability' => 
      array (
        'type' => 'int',
        'len' => 11,
      ),
      'leadSource' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'closeDate' => 
      array (
        'type' => 'date',
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'amountCurrency' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'amountConverted' => 
      array (
        'type' => 'float',
        'select' => 'opportunity.amount * amount_currency_alias.rate',
        'where' => 
        array (
          '=' => 'opportunity.amount * amount_currency_alias.rate = {value}',
          '>' => 'opportunity.amount * amount_currency_alias.rate > {value}',
          '<' => 'opportunity.amount * amount_currency_alias.rate < {value}',
          '>=' => 'opportunity.amount * amount_currency_alias.rate >= {value}',
          '<=' => 'opportunity.amount * amount_currency_alias.rate <= {value}',
          '<>' => 'opportunity.amount * amount_currency_alias.rate <> {value}',
        ),
        'notStorable' => true,
        'orderBy' => 'amountConverted {direction}',
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsColumns' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'campaignName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'relation' => 'campaign',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'isFollowed' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'documentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'documentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'emailsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'tasksNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'callsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'meetingsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'campaign' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Campaign',
        'key' => 'campaignId',
        'foreignKey' => 'id',
        'noJoin' => true,
      ),
      'documents' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Document',
        'relationName' => 'documentOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'documentId',
        ),
      ),
      'emails' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Email',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'tasks' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Task',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'calls' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Call',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'meetings' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Meeting',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactOpportunity',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'opportunityId',
          1 => 'contactId',
        ),
        'additionalColumns' => 
        array (
          'role' => 
          array (
            'type' => 'varchar',
            'len' => 50,
          ),
        ),
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Opportunity',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'stage' => 
      array (
        'columns' => 
        array (
          0 => 'stage',
          1 => 'deleted',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
      ),
      'createdAtStage' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'stage',
        ),
      ),
      'assignedUserStage' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'stage',
        ),
      ),
    ),
  ),
  'Reminder' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'remindAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'index' => true,
      ),
      'startAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
        'index' => true,
      ),
      'type' => 
      array (
        'type' => 'varchar',
        'len' => 36,
        'index' => true,
        'default' => 'Popup',
      ),
      'seconds' => 
      array (
        'type' => 'int',
        'default' => '0',
        'len' => 11,
      ),
      'entityType' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'entityId' => 
      array (
        'type' => 'varchar',
        'len' => 50,
      ),
      'userId' => 
      array (
        'type' => 'varchar',
        'len' => 50,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
    ),
    'relations' => 
    array (
    ),
  ),
  'Target' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
        'select' => 'TRIM(CONCAT(IFNULL(target.first_name, \'\'), \' \', IFNULL(target.last_name, \'\')))',
        'where' => 
        array (
          'LIKE' => '(target.first_name LIKE {value} OR target.last_name LIKE {value} OR CONCAT(target.first_name, \' \', target.last_name) LIKE {value} OR CONCAT(target.last_name, \' \', target.first_name) LIKE {value})',
          '=' => '(target.first_name = {value} OR target.last_name = {value} OR CONCAT(target.first_name, \' \', target.last_name) = {value} OR CONCAT(target.last_name, \' \', target.first_name) = {value})',
        ),
        'orderBy' => 'target.first_name {direction}',
      ),
      'salutationName' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'firstName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'lastName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
        'default' => '',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'accountName' => 
      array (
        'type' => 'varchar',
        'len' => 100,
      ),
      'website' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressStreet' => 
      array (
        'type' => 'text',
        'dbType' => 'varchar',
        'len' => 255,
      ),
      'addressCity' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressState' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressCountry' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'addressPostalCode' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'emailAddress' => 
      array (
        'type' => 'email',
        'notStorable' => true,
        'select' => 'emailAddresses.name',
        'where' => 
        array (
          'LIKE' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Target\' AND
                                    email_address.deleted = 0 AND email_address.name LIKE {value}
                            )',
          '=' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Target\' AND
                                    email_address.deleted = 0 AND email_address.name = {value}
                            )',
          '<>' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_email_address
                                JOIN email_address ON email_address.id = entity_email_address.email_address_id
                                WHERE
                                    entity_email_address.deleted = 0 AND entity_email_address.entity_type = \'Target\' AND
                                    email_address.deleted = 0 AND email_address.name <> {value}
                            )',
        ),
        'orderBy' => 'emailAddresses.name {direction}',
      ),
      'phoneNumber' => 
      array (
        'type' => 'phone',
        'notStorable' => true,
        'select' => 'phoneNumbers.name',
        'where' => 
        array (
          'LIKE' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
                                    phone_number.deleted = 0 AND phone_number.name LIKE {value}
                            )',
          '=' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
                                    phone_number.deleted = 0 AND phone_number.name = {value}
                            )',
          '<>' => 'target.id IN (
                                SELECT entity_id
                                FROM entity_phone_number
                                JOIN phone_number ON phone_number.id = entity_phone_number.phone_number_id
                                WHERE
                                    entity_phone_number.deleted = 0 AND entity_phone_number.entity_type = \'Target\' AND
                                    phone_number.deleted = 0 AND phone_number.name <> {value}
                            )',
        ),
        'orderBy' => 'phoneNumbers.name {direction}',
      ),
      'doNotCall' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'emailAddressData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'phoneNumberData' => 
      array (
        'type' => 'text',
        'notStorable' => true,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'emailAddresses' => 
      array (
        'type' => 'manyMany',
        'entity' => 'EmailAddress',
        'relationName' => 'entityEmailAddress',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'email_address_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'phoneNumbers' => 
      array (
        'type' => 'manyMany',
        'entity' => 'PhoneNumber',
        'relationName' => 'entityPhoneNumber',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'phone_number_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
          'primary' => 
          array (
            'type' => 'bool',
            'default' => false,
          ),
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Target',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'firstName' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'deleted',
        ),
      ),
      'name' => 
      array (
        'columns' => 
        array (
          0 => 'firstName',
          1 => 'lastName',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'TargetList' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'entryCount' => 
      array (
        'type' => 'int',
        'notStorable' => true,
        'len' => 11,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignsId' => 
      array (
        'type' => 'foreignId',
        'index' => 'campaigns',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'campaignsName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'usersNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'leadsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'contactsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'campaignsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'users' => 
      array (
        'type' => 'manyMany',
        'entity' => 'User',
        'relationName' => 'targetListUser',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'userId',
        ),
      ),
      'leads' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Lead',
        'relationName' => 'leadTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'leadId',
        ),
      ),
      'contacts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Contact',
        'relationName' => 'contactTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'contactId',
        ),
      ),
      'accounts' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Account',
        'relationName' => 'accountTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'accountId',
        ),
      ),
      'campaigns' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Campaign',
        'relationName' => 'campaignTargetList',
        'key' => 'id',
        'foreignKey' => 'id',
        'midKeys' => 
        array (
          0 => 'targetListId',
          1 => 'campaignId',
        ),
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'TargetList',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'createdAt' => 
      array (
        'columns' => 
        array (
          0 => 'createdAt',
          1 => 'deleted',
        ),
      ),
    ),
  ),
  'Task' => 
  array (
    'fields' => 
    array (
      'id' => 
      array (
        'type' => 'id',
        'dbType' => 'varchar',
        'len' => '24',
      ),
      'name' => 
      array (
        'type' => 'varchar',
        'len' => 255,
      ),
      'status' => 
      array (
        'type' => 'varchar',
        'default' => 'Not Started',
        'len' => 255,
      ),
      'priority' => 
      array (
        'type' => 'varchar',
        'default' => 'Normal',
        'len' => 255,
      ),
      'dateStart' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'dateEnd' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'dateStartDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
      ),
      'dateEndDate' => 
      array (
        'type' => 'date',
        'notNull' => false,
      ),
      'dateCompleted' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'isOverdue' => 
      array (
        'type' => 'bool',
        'notStorable' => true,
        'default' => false,
      ),
      'description' => 
      array (
        'type' => 'text',
      ),
      'createdAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'modifiedAt' => 
      array (
        'type' => 'datetime',
        'notNull' => false,
      ),
      'deleted' => 
      array (
        'type' => 'bool',
        'default' => false,
      ),
      'parentId' => 
      array (
        'type' => 'foreignId',
        'index' => 'parent',
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'parentType' => 
      array (
        'type' => 'foreignType',
        'notNull' => false,
        'index' => 'parent',
        'len' => 100,
        'dbType' => 'varchar',
      ),
      'parentName' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'accountId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'accountName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'account',
        'foreign' => 'name',
      ),
      'createdById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'createdByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'createdBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'modifiedById' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'modifiedByName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'modifiedBy',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'assignedUserId' => 
      array (
        'type' => 'foreignId',
        'index' => true,
        'dbType' => 'varchar',
        'len' => '24',
        'notNull' => false,
      ),
      'assignedUserName' => 
      array (
        'type' => 'foreign',
        'notStorable' => false,
        'relation' => 'assignedUser',
        'foreign' => 
        array (
          0 => 'firstName',
          1 => ' ',
          2 => 'lastName',
        ),
      ),
      'teamsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'teamsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsIds' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsNames' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
      'attachmentsTypes' => 
      array (
        'type' => 'varchar',
        'notStorable' => true,
      ),
    ),
    'relations' => 
    array (
      'attachments' => 
      array (
        'type' => 'hasChildren',
        'entity' => 'Attachment',
        'foreignKey' => 'parentId',
        'foreignType' => 'parentType',
        'relationName' => 'attachments',
      ),
      'account' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'Account',
        'key' => 'accountId',
        'foreignKey' => 'id',
      ),
      'parent' => 
      array (
        'type' => 'belongsToParent',
        'key' => 'parentId',
      ),
      'teams' => 
      array (
        'type' => 'manyMany',
        'entity' => 'Team',
        'relationName' => 'entityTeam',
        'midKeys' => 
        array (
          0 => 'entity_id',
          1 => 'team_id',
        ),
        'conditions' => 
        array (
          'entityType' => 'Task',
        ),
        'additionalColumns' => 
        array (
          'entityType' => 
          array (
            'type' => 'varchar',
            'len' => 100,
          ),
        ),
      ),
      'assignedUser' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'assignedUserId',
        'foreignKey' => 'id',
      ),
      'modifiedBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'modifiedById',
        'foreignKey' => 'id',
      ),
      'createdBy' => 
      array (
        'type' => 'belongsTo',
        'entity' => 'User',
        'key' => 'createdById',
        'foreignKey' => 'id',
      ),
    ),
    'indexes' => 
    array (
      'dateStartStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'status',
        ),
      ),
      'dateEndStatus' => 
      array (
        'columns' => 
        array (
          0 => 'dateEnd',
          1 => 'status',
        ),
      ),
      'dateStart' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'deleted',
        ),
      ),
      'dateEnd' => 
      array (
        'columns' => 
        array (
          0 => 'dateStart',
          1 => 'deleted',
        ),
      ),
      'status' => 
      array (
        'columns' => 
        array (
          0 => 'status',
          1 => 'deleted',
        ),
      ),
      'assignedUser' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'deleted',
        ),
      ),
      'assignedUserStatus' => 
      array (
        'columns' => 
        array (
          0 => 'assignedUserId',
          1 => 'status',
        ),
      ),
    ),
  ),
);

?>