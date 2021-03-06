<?php
$module_name = 'HAA_Shortcuts';
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
          'file' => 'modules/HAT_Assets/js/editview_icon_picker.js',
          ),
        2 => 
        array (
          'file' => 'modules/HAA_Shortcuts/js/editview_HAA_Shortcuts.js',
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
            'name' => 'framework',
            'customCode' => '{$FRAMEWORK}',
            ),
          1 => 
          array (
            'name' => 'code_shortcut_scenario',
            'studio' => 'visible',
            'label' => 'LBL_SCENARIO',
            ),
          ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'shortcut_icon',
            'label' => 'LBL_ICON',
            ),
          ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'shortcut_module',
            'studio' => 'visible',
            'label' => 'LBL_MODULE',
            ),
          1 => 
          array (
            'name' => 'shortcut_action',
            'studio' => 'visible',
            'label' => 'LBL_action',
            ),
          ),
        3 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'sequence_number',
            'label' => 'LBL_SEQUENCE_NUMBER',
            ),
          ),
        4 => 
        array (
          0 => 'url',
          1 => 'parameters',
          ),
        ),
      ),
    ),
  );
  ?>
