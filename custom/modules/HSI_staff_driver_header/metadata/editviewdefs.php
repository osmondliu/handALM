<?php
$module_name = 'HSI_staff_driver_header';
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
            'name' => 'driver_num',
            'studio' => 'visible',
            'label' => 'LBL_DRIVER_NUM',
          ),
          1 => 
          array (
            'name' => 'name',
            'studio' => 'visible',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'get_type',
            'studio' => 'visible',
            'label' => 'LBL_GET_TYPE',
          ),
          1 => 
          array (
            'name' => 'id_car',
            'studio' => 'visible',
            'label' => 'LBL_ID_CAR',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone',
            'studio' => 'visible',
            'label' => 'LBL_PHONE',
          ),
          1 => 
          array (
            'name' => 'contact_date',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT_DATE',
          ),
        ),
      ),
    ),
  ),
);
?>
