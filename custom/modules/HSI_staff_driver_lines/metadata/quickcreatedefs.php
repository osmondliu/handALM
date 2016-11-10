<?php
$module_name = 'HSI_staff_driver_lines';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'interview_num',
            'studio' => 'visible',
            'label' => 'LBL_INTERVIEW_NUM',
          ),
          1 => 
          array (
            'name' => 'interviewer_name',
            'studio' => 'visible',
            'label' => 'LBL_INTERVIEWER_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'conclusion',
            'studio' => 'visible',
            'label' => 'LBL_CONCLUSION',
          ),
          1 => 
          array (
            'name' => 'agree_in_date',
            'label' => 'LBL_AGREE_IN_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'in_store',
            'label' => 'LBL_IN_STORE',
          ),
          1 => 
          array (
            'name' => 'sign_type',
            'label' => 'LBL_SIGN_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sign_pattern',
            'studio' => 'visible',
            'label' => 'LBL_SIGN_PATTERN',
          ),
          1 => 
          array (
            'name' => 'get_car',
            'label' => 'LBL_GET_CAR',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'result',
            'label' => 'LBL_RESULT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
