<?php
// created: 2016-10-10 15:07:06
$dictionary["hsi_staff_driver_header_hsi_staff_driver_lines"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'hsi_staff_driver_header_hsi_staff_driver_lines' => 
    array (
      'lhs_module' => 'HSI_staff_driver_header',
      'lhs_table' => 'hsi_staff_driver_header',
      'lhs_key' => 'id',
      'rhs_module' => 'HSI_staff_driver_lines',
      'rhs_table' => 'hsi_staff_driver_lines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'hsi_staff_driver_header_hsi_staff_driver_lines_c',
      'join_key_lhs' => 'hsi_staff_e340_header_ida',
      'join_key_rhs' => 'hsi_staff_0275r_lines_idb',
    ),
  ),
  'table' => 'hsi_staff_driver_header_hsi_staff_driver_lines_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'hsi_staff_e340_header_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'hsi_staff_0275r_lines_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'hsi_staff_driver_header_hsi_staff_driver_linesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'hsi_staff_driver_header_hsi_staff_driver_lines_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'hsi_staff_e340_header_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'hsi_staff_driver_header_hsi_staff_driver_lines_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'hsi_staff_0275r_lines_idb',
      ),
    ),
  ),
);