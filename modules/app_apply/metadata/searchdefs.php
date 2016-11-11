<?php
$module_name = 'app_apply';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'apply_number' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_APPLY_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'apply_number',
      ),
      'app_apply_contacts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_APP_APPLY_CONTACTS_FROM_CONTACTS_TITLE',
        'id' => 'APP_APPLY_CONTACTSCONTACTS_IDB',
        'width' => '10%',
        'default' => true,
        'name' => 'app_apply_contacts_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
