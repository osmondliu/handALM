<?php
// created: 2016-10-08 16:06:28
$dictionary["hie_exp_apply_headers_hie_exp_apply_lines"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'hie_exp_apply_headers_hie_exp_apply_lines' => 
    array (
      'lhs_module' => 'HIE_exp_apply_headers',
      'lhs_table' => 'hie_exp_apply_headers',
      'lhs_key' => 'id',
      'rhs_module' => 'HIE_exp_apply_lines',
      'rhs_table' => 'hie_exp_apply_lines',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'hie_exp_apply_headers_hie_exp_apply_lines_c',
      'join_key_lhs' => 'hie_exp_ap5837headers_ida',
      'join_key_rhs' => 'hie_exp_apply_headers_hie_exp_apply_lineshie_exp_apply_lines_idb',
    ),
  ),
  'table' => 'hie_exp_apply_headers_hie_exp_apply_lines_c',
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
      'name' => 'hie_exp_ap5837headers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'hie_exp_apply_headers_hie_exp_apply_lineshie_exp_apply_lines_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'hie_exp_apply_headers_hie_exp_apply_linesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'hie_exp_apply_headers_hie_exp_apply_lines_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'hie_exp_ap5837headers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'hie_exp_apply_headers_hie_exp_apply_lines_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'hie_exp_apply_headers_hie_exp_apply_lineshie_exp_apply_lines_idb',
      ),
    ),
  ),
);