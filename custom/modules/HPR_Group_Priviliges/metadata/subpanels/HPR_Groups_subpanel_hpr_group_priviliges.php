<?php
// created: 2017-02-28 18:45:05
$subpanel_layout['list_fields'] = array (
  'privilige_module' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_MODULE',
    'width' => '10%',
    'default' => true,
  ),
  'group_member' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_GROUP_MEMBER',
    'id' => 'HPR_GROUP_MEMBERS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'HPR_Group_Members',
    'target_record_key' => 'hpr_group_members_id_c',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'sql_statement_for_listview' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_SQL_STATEMENT_FOR_LISTVIEW',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'enabled_flag' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_ENABLED_FLAG',
    'width' => '10%',
  ),
  'popup_global_flag' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_POPUP_GLOBAL_FLAG',
    'width' => '10%',
  ),
  'sql_statement_for_popup' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'vname' => 'LBL_SQL_STATEMENT_FOR_POPUP',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'HPR_Group_Priviliges',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'HPR_Group_Priviliges',
    'width' => '5%',
    'default' => true,
  ),
);