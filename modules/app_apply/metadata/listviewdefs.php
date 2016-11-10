<?php
$module_name = 'app_apply';
$listViewDefs [$module_name] = 
array (
  'APP_APPLY_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_APP_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'APP_APPLY_CONTACTSCONTACTS_IDB',
    'width' => '10%',
    'default' => true,
  ),
  'APPLY_NUMBER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APPLY_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'APPLY_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_APPLY_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'APPLY_DES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APPLY_DES',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
