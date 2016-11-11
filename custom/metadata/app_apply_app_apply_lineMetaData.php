<?php
// created: 2016-09-30 10:46:33
$dictionary["app_apply_app_apply_line"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'app_apply_app_apply_line' => 
    array (
      'lhs_module' => 'app_apply',
      'lhs_table' => 'app_apply',
      'lhs_key' => 'id',
      'rhs_module' => 'app_apply_line',
      'rhs_table' => 'app_apply_line',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'app_apply_app_apply_line_c',
      'join_key_lhs' => 'app_apply_app_apply_lineapp_apply_ida',
      'join_key_rhs' => 'app_apply_app_apply_lineapp_apply_line_idb',
    ),
  ),
  'table' => 'app_apply_app_apply_line_c',
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
      'name' => 'app_apply_app_apply_lineapp_apply_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'app_apply_app_apply_lineapp_apply_line_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'app_apply_app_apply_linespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'app_apply_app_apply_line_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'app_apply_app_apply_lineapp_apply_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'app_apply_app_apply_line_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'app_apply_app_apply_lineapp_apply_line_idb',
      ),
    ),
  ),
);