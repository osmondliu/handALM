<?php
$module_name = 'HIE_exp_apply_headers';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'dept_code' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DEPT_CODE',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'dept_code',
      ),
      'exp_doc_num' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EXP_DOC_NUM',
        'width' => '10%',
        'default' => true,
        'name' => 'exp_doc_num',
      ),
      'exp_type_code' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_EXP_TYPE_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'exp_type_code',
      ),
      'status_code' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUS_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'status_code',
      ),
      'apply_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_APPLY_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'apply_date',
      ),
      'apply_person' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_APPLY_PERSON',
        'id' => 'CONTACT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'apply_person',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
