<?php
$popupMeta = array (
    'moduleMain' => 'HAT_Asset_Locations',
    'varName' => 'HAT_Asset_Locations',
    'orderBy' => 'hat_asset_locations.name',
    'whereClauses' => array (
  'name' => 'hat_asset_locations.name',
  'location_title' => 'hat_asset_locations.location_title',
  'asset_node' => 'hat_asset_locations.asset_node',
  'maint_node' => 'hat_asset_locations.maint_node',
  'maint_site' => 'hat_asset_locations.maint_site',
  'code_asset_location_type' => 'hat_asset_locations.code_asset_location_type',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'location_title',
  5 => 'asset_node',
  6 => 'maint_node',
  7 => 'maint_site',
  8 => 'code_asset_location_type',
),
    'searchdefs' => array (
  'maint_site' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_MAINT_SITE',
    'id' => 'HAM_MAINT_SITES_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'maint_site',
  ),
  'code_asset_location_type' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ASSET_LOCATION_TYPE',
    'id' => 'CODE_ASSET_LOCATION_TYPE_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'code_asset_location_type',
  ),
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'location_title' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION_TITLE',
    'width' => '10%',
    'name' => 'location_title',
  ),
  'asset_node' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_ASSET_NODE',
    'width' => '10%',
    'name' => 'asset_node',
  ),
  'maint_node' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_MAINT_NODE',
    'width' => '10%',
    'name' => 'maint_node',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'LOCATION_TITLE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOCATION_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'ASSET_NODE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ASSET_NODE',
    'width' => '10%',
  ),
  'MAINT_NODE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_MAINT_NODE',
    'width' => '10%',
  ),
  'HAT_ASSET_LOCATIONS_HAT_ASSET_LOCATIONS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_HAT_ASSET_LOCATIONS_HAT_ASSET_LOCATIONS_FROM_HAT_ASSET_LOCATIONS_L_TITLE',
    'id' => 'HAT_ASSET_LOCATIONS_HAT_ASSET_LOCATIONSHAT_ASSET_LOCATIONS_IDA',
    'width' => '10%',
    'default' => true,
  ),
),
);
