<?php
 // created: 2016-09-24 10:08:44
$layout_defs["Project"]["subpanel_setup"]['cux_apply_project'] = array (
  'order' => 100,
  'module' => 'cux_apply',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CUX_APPLY_PROJECT_FROM_CUX_APPLY_TITLE',
  'get_subpanel_data' => 'cux_apply_project',
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
