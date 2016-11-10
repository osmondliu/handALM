<?php
$module_name = 'HIE_exp_apply_headers';
$listViewDefs [$module_name] = 
array (
  'DEPT_CODE' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DEPT_CODE',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'EXP_DOC_NUM' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EXP_DOC_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'EXP_TYPE_CODE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_EXP_TYPE_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS_CODE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS_CODE',
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
  'APPLY_PERSON' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_APPLY_PERSON',
    'id' => 'CONTACT_ID_C',
    'link' => true,
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
?>
