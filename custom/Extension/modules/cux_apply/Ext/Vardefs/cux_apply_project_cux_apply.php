<?php
// created: 2016-09-24 10:08:47
$dictionary["cux_apply"]["fields"]["cux_apply_project"] = array (
  'name' => 'cux_apply_project',
  'type' => 'link',
  'relationship' => 'cux_apply_project',
  'source' => 'non-db',
  'module' => 'Project',
  'bean_name' => 'Project',
  'vname' => 'LBL_CUX_APPLY_PROJECT_FROM_PROJECT_TITLE',
  'id_name' => 'cux_apply_projectproject_ida',
);
$dictionary["cux_apply"]["fields"]["cux_apply_project_name"] = array (
  'name' => 'cux_apply_project_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CUX_APPLY_PROJECT_FROM_PROJECT_TITLE',
  'save' => true,
  'id_name' => 'cux_apply_projectproject_ida',
  'link' => 'cux_apply_project',
  'table' => 'project',
  'module' => 'Project',
  'rname' => 'name',
);
$dictionary["cux_apply"]["fields"]["cux_apply_projectproject_ida"] = array (
  'name' => 'cux_apply_projectproject_ida',
  'type' => 'link',
  'relationship' => 'cux_apply_project',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CUX_APPLY_PROJECT_FROM_CUX_APPLY_TITLE',
);
