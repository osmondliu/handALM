<?php
$module_name = 'HIE_exp_apply_lines';
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
            'name' => 'line_num',
            'label' => 'LBL_LINE_NUM',
          ),
          1 => 
          array (
            'name' => 'item_type_code',
            'studio' => 'visible',
            'label' => 'LBL_ITEM_TYPE_CODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'exp_dete',
            'label' => 'LBL_EXP_DETE',
          ),
          1 => 'name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 'description',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'product_name',
            'label' => 'LBL_PRODUCT_NAME',
            ),
          1 => 
          array (
            'name' => 'product_category',
            'label' => 'LBL_PRODUCT_CATEGORY',
            ),
          ),
      4 => 
        array (
          0 => 
          array (
            'name' => 'product_number',
            'label' => 'LBL_PRODUCT_NUMBER',
            ),
          ),
          
      ),
    ),
  ),
);
?>
