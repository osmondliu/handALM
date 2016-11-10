<?php
// created: 2016-10-08 16:06:29
$dictionary["HIE_exp_apply_lines"]["fields"]["hie_exp_apply_headers_hie_exp_apply_lines"] = array (
  'name' => 'hie_exp_apply_headers_hie_exp_apply_lines',
  'type' => 'link',
  'relationship' => 'hie_exp_apply_headers_hie_exp_apply_lines',
  'source' => 'non-db',
  'module' => 'HIE_exp_apply_headers',
  'bean_name' => 'HIE_exp_apply_headers',
  'vname' => 'LBL_HIE_EXP_APPLY_HEADERS_HIE_EXP_APPLY_LINES_FROM_HIE_EXP_APPLY_HEADERS_TITLE',
  'id_name' => 'hie_exp_ap5837headers_ida',
);
$dictionary["HIE_exp_apply_lines"]["fields"]["hie_exp_apply_headers_hie_exp_apply_lines_name"] = array (
  'name' => 'hie_exp_apply_headers_hie_exp_apply_lines_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_HIE_EXP_APPLY_HEADERS_HIE_EXP_APPLY_LINES_FROM_HIE_EXP_APPLY_HEADERS_TITLE',
  'save' => true,
  'id_name' => 'hie_exp_ap5837headers_ida',
  'link' => 'hie_exp_apply_headers_hie_exp_apply_lines',
  'table' => 'hie_exp_apply_headers',
  'module' => 'HIE_exp_apply_headers',
  'rname' => 'name',
);
$dictionary["HIE_exp_apply_lines"]["fields"]["hie_exp_ap5837headers_ida"] = array (
  'name' => 'hie_exp_ap5837headers_ida',
  'type' => 'link',
  'relationship' => 'hie_exp_apply_headers_hie_exp_apply_lines',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_HIE_EXP_APPLY_HEADERS_HIE_EXP_APPLY_LINES_FROM_HIE_EXP_APPLY_LINES_TITLE',
);
