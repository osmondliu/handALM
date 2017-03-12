<?php
$module_name = 'HIT_VLAN_LIST';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        1 => 
        array (
          'file' => 'modules/HIT_VLAN_LIST/js/HIT_VLAN_LIST_editview.js',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'maint_site',
            'studio' => 'visible',
            'label' => 'LBL_MAINT_SITE',
			'displayParams' => 
            array (
              'initial_filter' => '&site_type=D',
            ),
          ),
          1 => 
          array (
            'name' => 'haa_asset_name',
            'studio' => 'visible',
            'label' => 'LBL_HAA_ASSET_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'vlan_type',
            'studio' => 'visible',
            'label' => 'LBL_VLAN_TYPE',
          ),
          1 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'port',
            'label' => 'LBL_PORT',
          ),
          1 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'comment',
            'label' => 'LBL_COMMENT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
