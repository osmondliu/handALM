<?php
// created: 2016-10-10 16:34:08
$subpanel_layout['list_fields'] = array (
  'interview_num' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_INTERVIEW_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'interviewer_num' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_INTERVIEWER_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'conclusion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_CONCLUSION',
    'width' => '10%',
    'default' => true,
  ),
  'agree_in_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_AGREE_IN_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'in_store' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_IN_STORE',
    'width' => '10%',
  ),
  'sign_type' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_SIGN_TYPE',
    'width' => '10%',
  ),
  'sign_pattern' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_SIGN_PATTERN',
    'width' => '10%',
    'default' => true,
  ),
  'get_car' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_GET_CAR',
    'width' => '10%',
  ),
  'comment' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_COMMENT',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'result' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_RESULT',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'HSI_staff_driver_lines',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'HSI_staff_driver_lines',
    'width' => '5%',
    'default' => true,
  ),
);