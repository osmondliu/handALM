<?php
$module_name = 'cux_apply';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'cux_apply_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CUX_APPLY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'CUX_APPLY_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cux_apply_accounts_name',
      ),
      'cux_apply_cux_type_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CUX_APPLY_CUX_TYPE_FROM_CUX_TYPE_TITLE',
        'id' => 'CUX_APPLY_CUX_TYPECUX_TYPE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cux_apply_cux_type_name',
      ),
      'cux_apply_cux_status_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CUX_APPLY_CUX_STATUS_FROM_CUX_STATUS_TITLE',
        'id' => 'CUX_APPLY_CUX_STATUSCUX_STATUS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cux_apply_cux_status_name',
      ),
      'apply_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_APPLY_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'apply_date',
      ),
      'apply_date_to' => 
      array (
        'type' => 'date',
        'label' => 'LBL_APPLY_DATE_TO',
        'width' => '10%',
        'default' => true,
        'name' => 'apply_date_to',
      ),
      'cux_apply_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CUX_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'CUX_APPLY_CONTACTSCONTACTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cux_apply_contacts_name',
      ),
      'cux_apply_project_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CUX_APPLY_PROJECT_FROM_PROJECT_TITLE',
        'id' => 'CUX_APPLY_PROJECTPROJECT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'cux_apply_project_name',
      ),
      'apply_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_APPLY_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'apply_number',
      ),
      'map_search_area' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MAP_SEARCH_AREA',
        'width' => '10%',
        'default' => true,
        'name' => 'map_search_area',
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
    'maxColumns' => '2',
    'maxColumnsBasic' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
