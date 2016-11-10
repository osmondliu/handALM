<?php
// created: 2016-09-24 10:08:47
$dictionary["cux_apply"]["fields"]["cux_apply_cux_status"] = array (
  'name' => 'cux_apply_cux_status',
  'type' => 'link',
  'relationship' => 'cux_apply_cux_status',
  'source' => 'non-db',
  'module' => 'cux_status',
  'bean_name' => 'cux_status',
  'vname' => 'LBL_CUX_APPLY_CUX_STATUS_FROM_CUX_STATUS_TITLE',
  'id_name' => 'cux_apply_cux_statuscux_status_ida',
);
$dictionary["cux_apply"]["fields"]["cux_apply_cux_status_name"] = array (
  'name' => 'cux_apply_cux_status_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUX_APPLY_CUX_STATUS_FROM_CUX_STATUS_TITLE',
  'save' => true,
  'id_name' => 'cux_apply_cux_statuscux_status_ida',
  'link' => 'cux_apply_cux_status',
  'table' => 'cux_status',
  'module' => 'cux_status',
  'rname' => 'name',
);
$dictionary["cux_apply"]["fields"]["cux_apply_cux_statuscux_status_ida"] = array (
  'name' => 'cux_apply_cux_statuscux_status_ida',
  'type' => 'link',
  'relationship' => 'cux_apply_cux_status',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUX_APPLY_CUX_STATUS_FROM_CUX_APPLY_TITLE',
);
