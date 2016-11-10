<?php
// created: 2016-09-30 10:46:34
$dictionary["app_apply"]["fields"]["app_apply_contacts"] = array (
  'name' => 'app_apply_contacts',
  'type' => 'link',
  'relationship' => 'app_apply_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_APP_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'app_apply_contactscontacts_idb',
);
$dictionary["app_apply"]["fields"]["app_apply_contacts_name"] = array (
  'name' => 'app_apply_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_APP_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'app_apply_contactscontacts_idb',
  'link' => 'app_apply_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["app_apply"]["fields"]["app_apply_contactscontacts_idb"] = array (
  'name' => 'app_apply_contactscontacts_idb',
  'type' => 'link',
  'relationship' => 'app_apply_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_APP_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
);
