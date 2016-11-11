<?php
$module_name = 'app_apply';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'app_apply_contacts_name',
          ),
          1 => 
          array (
            'name' => 'apply_number',
            'label' => 'LBL_APPLY_NUMBER',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'apply_date',
            'label' => 'LBL_APPLY_DATE',
          ),
          1 => 
          array (
            'name' => 'apply_des',
            'label' => 'LBL_APPLY_DES',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'apply_status_c',
            'studio' => 'visible',
            'label' => 'LBL_APPLY_STATUS',
          ),
          1 => 
          array (
            'name' => 'apply_type_c',
            'studio' => 'visible',
            'label' => 'LBL_APPLY_TYPE',
          ),
        ),
      ),
    ),
  ),
);
?>
