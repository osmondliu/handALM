<?php
$module_name = 'HIE_exp_apply_lines';
$listViewDefs [$module_name] = 
array (
  'LINE_NUM' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LINE_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'ITEM_TYPE_CODE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ITEM_TYPE_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'EXP_DETE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_EXP_DETE',
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
  'AMOUNT' => 
  array (
    'type' => 'float',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'PRODUCT_NAME' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_NAME',
    'id' => 'PRODUCT_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PRODUCT_CATEGORY' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'PRODUCT_NUMBER' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_PRODUCT_NUMBER',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
?>
