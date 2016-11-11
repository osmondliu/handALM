<?php
 // created: 2016-10-10 15:07:06
$layout_defs["HSI_staff_driver_header"]["subpanel_setup"]['hsi_staff_driver_header_hsi_staff_driver_lines'] = array (
  'order' => 100,
  'module' => 'HSI_staff_driver_lines',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_HSI_STAFF_DRIVER_HEADER_HSI_STAFF_DRIVER_LINES_FROM_HSI_STAFF_DRIVER_LINES_TITLE',
  'get_subpanel_data' => 'hsi_staff_driver_header_hsi_staff_driver_lines',
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
