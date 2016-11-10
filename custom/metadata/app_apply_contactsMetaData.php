<?php
// created: 2016-09-30 10:46:33
$dictionary["app_apply_contacts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'app_apply_contacts' => 
    array (
      'lhs_module' => 'app_apply',
      'lhs_table' => 'app_apply',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'app_apply_contacts_c',
      'join_key_lhs' => 'app_apply_contactsapp_apply_ida',
      'join_key_rhs' => 'app_apply_contactscontacts_idb',
    ),
  ),
  'table' => 'app_apply_contacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'app_apply_contactsapp_apply_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'app_apply_contactscontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'app_apply_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'app_apply_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'app_apply_contactsapp_apply_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'app_apply_contacts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'app_apply_contactscontacts_idb',
      ),
    ),
  ),
);