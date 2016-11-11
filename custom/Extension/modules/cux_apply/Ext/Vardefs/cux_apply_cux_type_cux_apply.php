<?php
// created: 2016-09-24 10:08:47
$dictionary["cux_apply"]["fields"]["cux_apply_cux_type"] = array (
  'name' => 'cux_apply_cux_type',
  'type' => 'link',
  'relationship' => 'cux_apply_cux_type',
  'source' => 'non-db',
  'module' => 'cux_type',
  'bean_name' => 'cux_type',
  'vname' => 'LBL_CUX_APPLY_CUX_TYPE_FROM_CUX_TYPE_TITLE',
  'id_name' => 'cux_apply_cux_typecux_type_ida',
);
$dictionary["cux_apply"]["fields"]["cux_apply_cux_type_name"] = array (
  'name' => 'cux_apply_cux_type_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUX_APPLY_CUX_TYPE_FROM_CUX_TYPE_TITLE',
  'save' => true,
  'id_name' => 'cux_apply_cux_typecux_type_ida',
  'link' => 'cux_apply_cux_type',
  'table' => 'cux_type',
  'module' => 'cux_type',
  'rname' => 'name',
);
$dictionary["cux_apply"]["fields"]["cux_apply_cux_typecux_type_ida"] = array (
  'name' => 'cux_apply_cux_typecux_type_ida',
  'type' => 'link',
  'relationship' => 'cux_apply_cux_type',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUX_APPLY_CUX_TYPE_FROM_CUX_APPLY_TITLE',
);
