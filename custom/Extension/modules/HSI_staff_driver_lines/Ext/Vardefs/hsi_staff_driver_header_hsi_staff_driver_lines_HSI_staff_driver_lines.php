<?php
// created: 2016-10-10 15:07:06
$dictionary["HSI_staff_driver_lines"]["fields"]["hsi_staff_driver_header_hsi_staff_driver_lines"] = array (
  'name' => 'hsi_staff_driver_header_hsi_staff_driver_lines',
  'type' => 'link',
  'relationship' => 'hsi_staff_driver_header_hsi_staff_driver_lines',
  'source' => 'non-db',
  'module' => 'HSI_staff_driver_header',
  'bean_name' => 'HSI_staff_driver_header',
  'vname' => 'LBL_HSI_STAFF_DRIVER_HEADER_HSI_STAFF_DRIVER_LINES_FROM_HSI_STAFF_DRIVER_HEADER_TITLE',
  'id_name' => 'hsi_staff_e340_header_ida',
);
$dictionary["HSI_staff_driver_lines"]["fields"]["hsi_staff_driver_header_hsi_staff_driver_lines_name"] = array (
  'name' => 'hsi_staff_driver_header_hsi_staff_driver_lines_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_HSI_STAFF_DRIVER_HEADER_HSI_STAFF_DRIVER_LINES_FROM_HSI_STAFF_DRIVER_HEADER_TITLE',
  'save' => true,
  'id_name' => 'hsi_staff_e340_header_ida',
  'link' => 'hsi_staff_driver_header_hsi_staff_driver_lines',
  'table' => 'hsi_staff_driver_header',
  'module' => 'HSI_staff_driver_header',
  'rname' => 'name',
);
$dictionary["HSI_staff_driver_lines"]["fields"]["hsi_staff_e340_header_ida"] = array (
  'name' => 'hsi_staff_e340_header_ida',
  'type' => 'link',
  'relationship' => 'hsi_staff_driver_header_hsi_staff_driver_lines',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_HSI_STAFF_DRIVER_HEADER_HSI_STAFF_DRIVER_LINES_FROM_HSI_STAFF_DRIVER_LINES_TITLE',
);
