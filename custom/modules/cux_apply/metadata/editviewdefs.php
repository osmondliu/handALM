<?php
$module_name = 'cux_apply';
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
            'name' => 'cux_apply_accounts_name',
          ),
          1 => 
          array (
            'name' => 'apply_number',
            'label' => 'LBL_APPLY_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cux_apply_contacts_name',
          ),
          1 => 
          array (
            'name' => 'cux_apply_project_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'apply_date',
            'label' => 'LBL_APPLY_DATE',
          ),
          1 => 
          array (
            'name' => 'apply_reason',
            'label' => 'LBL_APPLY_REASON',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cux_apply_cux_type_name',
          ),
          1 => 
          array (
            'name' => 'cux_apply_cux_status_name',
            'label' => 'LBL_CUX_APPLY_CUX_STATUS_FROM_CUX_STATUS_TITLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'comment',
            'label' => 'LBL_COMMENT',
          ),
          /*1 => 
          array (
            'name' => 'map_search_area',
            'studio' => 'visible',
            'label' => 'LBL_MAP_SEARCH_AREA',
            'customCode' => '<input type="submit" value="搜索"/>',
          ),*/
        ),
      ),
    ),
  ),
);
?>
