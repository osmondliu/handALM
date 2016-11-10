<?php
$module_name = 'cux_apply';
$listViewDefs [$module_name] = 
array (
  'CUX_APPLY_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUX_APPLY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'CUX_APPLY_ACCOUNTSACCOUNTS_IDA',
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
  'CUX_APPLY_CUX_TYPE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUX_APPLY_CUX_TYPE_FROM_CUX_TYPE_TITLE',
    'id' => 'CUX_APPLY_CUX_TYPECUX_TYPE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CUX_APPLY_CUX_STATUS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUX_APPLY_CUX_STATUS_FROM_CUX_STATUS_TITLE',
    'id' => 'CUX_APPLY_CUX_STATUSCUX_STATUS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CUX_APPLY_PROJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUX_APPLY_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'CUX_APPLY_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CUX_APPLY_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CUX_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'CUX_APPLY_CONTACTSCONTACTS_IDA',
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
  'APPLY_REASON' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_APPLY_REASON',
    'width' => '10%',
    'default' => true,
  ),
  'COMMENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_COMMENT',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
