<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'last_name' => 'contacts.last_name',
  'account_name' => 'accounts.name',
  'people_type_c' => 'contacts.people_type_c',
  'status_c' => 'contacts.status_c',
),
/*'whereStatement'=>'(("'.$_REQUEST["contract_type"].'"="INNER" and exists (select 1 from accounts_cstm accounts_cstm where accounts_cstm.id_c = accounts.id and accounts_cstm.is_asset_org_c = 1 and accounts_cstm.`org_type_c` in ("INTERNAL"))) or "'.$_REQUEST["contract_type"].'" ="" )',/* AND contacts.id IN
*/
'whereStatement'=>'(("'.$_REQUEST["contract_type"].'"="INNER" and exists (select 1 from accounts_cstm accounts_cstm where accounts_cstm.id_c = accounts.id and accounts_cstm.is_asset_org_c = 0 and accounts_cstm.`org_type_c` in ("INTERNAL"))) or "'.$_REQUEST["contact_type"].'" ="" ) AND contacts.id IN
  (SELECT cc.id_c FROM contacts_cstm cc WHERE cc.`haa_frameworks_id_c` = "'.$_SESSION["current_framework"].'")',
    'searchInputs' => array (
  1 => 'last_name',
  2 => 'account_name',
  4 => 'people_type_c',
  5 => 'status_c',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
),
    'searchdefs' => array (
  'people_type_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PEOPLE_TYPE',
    'id' => 'HAA_CODES_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'people_type_c',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'status_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'id' => 'HAA_CODES_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'status_c',
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'type' => 'varchar',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
    'name' => 'account_name',
  ),
),
);
