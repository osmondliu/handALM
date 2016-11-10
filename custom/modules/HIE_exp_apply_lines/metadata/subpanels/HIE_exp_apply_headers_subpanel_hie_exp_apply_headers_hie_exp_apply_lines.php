<?php
// created: 2016-10-09 15:17:45
$subpanel_layout['list_fields'] = array (
  'line_num' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_LINE_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'item_type_code' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_ITEM_TYPE_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'exp_dete' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_EXP_DETE',
    'width' => '10%',
    'default' => true,
  ),
  'amount' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'product_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT_NAME',
    'id' => 'PRODUCT_ID',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'product_id',
  ),
  'product_number' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT_CATEGORY',
    'width' => '10%',
    'default' => true,
  ),
  'product_category' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '15%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'HIE_exp_apply_lines',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'HIE_exp_apply_lines',
    'width' => '5%',
    'default' => true,
  ),
);