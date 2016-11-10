<?php
// created: 2016-09-30 10:46:34
$dictionary["Contact"]["fields"]["app_apply_contacts"] = array (
  'name' => 'app_apply_contacts',
  'type' => 'link',
  'relationship' => 'app_apply_contacts',
  'source' => 'non-db',
  'module' => 'app_apply',
  'bean_name' => 'app_apply',
  'vname' => 'LBL_APP_APPLY_CONTACTS_FROM_APP_APPLY_TITLE',
  'id_name' => 'app_apply_contactsapp_apply_ida',
);
$dictionary["Contact"]["fields"]["app_apply_contacts_name"] = array (
  'name' => 'app_apply_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_APP_APPLY_CONTACTS_FROM_APP_APPLY_TITLE',
  'save' => true,
  'id_name' => 'app_apply_contactsapp_apply_ida',
  'link' => 'app_apply_contacts',
  'table' => 'app_apply',
  'module' => 'app_apply',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["app_apply_contactsapp_apply_ida"] = array (
  'name' => 'app_apply_contactsapp_apply_ida',
  'type' => 'link',
  'relationship' => 'app_apply_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_APP_APPLY_CONTACTS_FROM_APP_APPLY_TITLE',
);
