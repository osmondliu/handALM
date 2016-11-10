<?php
$module_name = 'HIE_exp_apply_headers';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          //1 => 'DUPLICATE',
          2 => 'DELETE',
          //3 => 'FIND_DUPLICATES',
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'exp_doc_num',
            'label' => 'LBL_EXP_DOC_NUM',
          ),
          1 => 
          array (
            'name' => 'dept_code',
            'studio' => 'visible',
            'label' => 'LBL_DEPT_CODE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'exp_type_code',
            'studio' => 'visible',
            'label' => 'LBL_EXP_TYPE_CODE',
          ),
          1 => 
          array (
            'name' => 'apply_date',
            'label' => 'LBL_APPLY_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status_code',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_CODE',
          ),
          1 => 
          array (
            'name' => 'apply_person',
            'studio' => 'visible',
            'label' => 'LBL_APPLY_PERSON',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
