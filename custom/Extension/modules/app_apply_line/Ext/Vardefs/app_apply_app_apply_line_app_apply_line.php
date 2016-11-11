<?php
// created: 2016-09-30 10:46:34
$dictionary["app_apply_line"]["fields"]["app_apply_app_apply_line"] = array (
  'name' => 'app_apply_app_apply_line',
  'type' => 'link',
  'relationship' => 'app_apply_app_apply_line',
  'source' => 'non-db',
  'module' => 'app_apply',
  'bean_name' => 'app_apply',
  'vname' => 'LBL_APP_APPLY_APP_APPLY_LINE_FROM_APP_APPLY_TITLE',
  'id_name' => 'app_apply_app_apply_lineapp_apply_ida',
);
$dictionary["app_apply_line"]["fields"]["app_apply_app_apply_line_name"] = array (
  'name' => 'app_apply_app_apply_line_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_APP_APPLY_APP_APPLY_LINE_FROM_APP_APPLY_TITLE',
  'save' => true,
  'id_name' => 'app_apply_app_apply_lineapp_apply_ida',
  'link' => 'app_apply_app_apply_line',
  'table' => 'app_apply',
  'module' => 'app_apply',
  'rname' => 'name',
);
$dictionary["app_apply_line"]["fields"]["app_apply_app_apply_lineapp_apply_ida"] = array (
  'name' => 'app_apply_app_apply_lineapp_apply_ida',
  'type' => 'link',
  'relationship' => 'app_apply_app_apply_line',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_APP_APPLY_APP_APPLY_LINE_FROM_APP_APPLY_LINE_TITLE',
);
