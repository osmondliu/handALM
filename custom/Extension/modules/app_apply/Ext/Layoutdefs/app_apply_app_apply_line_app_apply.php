<?php
 // created: 2016-09-30 10:46:33
$layout_defs["app_apply"]["subpanel_setup"]['app_apply_app_apply_line'] = array (
  'order' => 100,
  'module' => 'app_apply_line',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_APP_APPLY_APP_APPLY_LINE_FROM_APP_APPLY_LINE_TITLE',
  'get_subpanel_data' => 'app_apply_app_apply_line',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
