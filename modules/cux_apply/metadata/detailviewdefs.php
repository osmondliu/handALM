<?php
$module_name = 'cux_apply';
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
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        2 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'cux_apply_accounts_name',
          ),
        ),
        3 => 
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
        4 => 
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
      ),
    ),
  ),
);
?>
