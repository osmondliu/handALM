<?php
// created: 2016-09-24 10:08:46
$dictionary["cux_apply"]["fields"]["cux_apply_contacts"] = array (
  'name' => 'cux_apply_contacts',
  'type' => 'link',
  'relationship' => 'cux_apply_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CUX_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'cux_apply_contactscontacts_ida',
);
$dictionary["cux_apply"]["fields"]["cux_apply_contacts_name"] = array (
  'name' => 'cux_apply_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUX_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'cux_apply_contactscontacts_ida',
  'link' => 'cux_apply_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["cux_apply"]["fields"]["cux_apply_contactscontacts_ida"] = array (
  'name' => 'cux_apply_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'cux_apply_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUX_APPLY_CONTACTS_FROM_CUX_APPLY_TITLE',
);
