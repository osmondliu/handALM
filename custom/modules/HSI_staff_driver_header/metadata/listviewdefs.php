<?php
$module_name = 'HSI_staff_driver_header';
$listViewDefs [$module_name] = 
array (
  'DRIVER_NUM' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DRIVER_NUM',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'int',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'GET_TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GET_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACT_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_CONTACT_DATE',
    'width' => '10%',
    'default' => true,
  ),
);
?>
