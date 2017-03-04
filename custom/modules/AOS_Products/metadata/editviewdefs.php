<?php
$module_name = 'AOS_Products';
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
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'headerTpl' => 'modules/AOS_Products/tpls/EditViewHeader.tpl',
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/AOS_Products/js/products.js',
        ),
        1 => 
        array (
          'file' => 'modules/HAT_Assets/js/editview_icon_picker.js',
        ),
        2 => 
        array (
          'file' => 'custom/modules/AOS_Products/js/products_editview.js',
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'framework_c',
            'studio' => 'visible',
            'label' => 'LBL_FRAMEWORK',
            'customCode' => '{$FRAMEWORK_C}',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'name' => 'product',
                'id' => 'product_id',
                'haa_uom_id_c' => 'uom_id',
                'primary_uom_c' => 'uom_code',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'part_number',
            'label' => 'LBL_PART_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aos_product_category_name',
            'label' => 'LBL_AOS_PRODUCT_CATEGORYS_NAME',
          ),
          1 => 
          array (
            'name' => 'type',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'is_asset_group_c',
            'label' => 'LBL_IS_ASSET_GROUP',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cost',
            'label' => 'LBL_COST',
          ),
          1 => 
          array (
            'name' => 'price',
            'label' => 'LBL_PRICE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'url',
            'label' => 'LBL_URL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'product_image',
            'customCode' => '{$PRODUCT_IMAGE}',
          ),
          1 => 
          array (
            'name' => 'contract_flag_c',
            'label' => 'LBL_CONTRACT_FLAG',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_uom_c',
            'studio' => 'visible',
            'label' => 'LBL_PRIMARY_UOM',
          ),
          1 => 
          array (
            'name' => 'uom_conversions_c',
            'studio' => 'visible',
            'label' => 'LBL_UOM_CONVERSIONS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tracking_uom_c',
            'studio' => 'visible',
            'label' => 'LBL_TRACKING_UOM',
          ),
          1 => 
          array (
            'name' => 'pricing_uom_c',
            'studio' => 'visible',
            'label' => 'LBL_PRICING_UOM',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'secondary_uom_c',
            'studio' => 'visible',
            'label' => 'LBL_SECONDARY_UOM',
          ),
          1 => 
          array (
            'name' => 'secondary_unit_defaulting_c',
            'studio' => 'visible',
            'label' => 'LBL_SECONDARY_UNIT_DEFAULTING',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'asset_name_rule_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_NAME_RULE',
          ),
          1 => 
          array (
            'name' => 'icon_c',
            'label' => 'LBL_ICON',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'asset_num_perfix_c',
            'label' => 'LBL_ASSET_NUM_PERFIX',
          ),
          1 => 
          array (
            'name' => 'asset_num_padding_c',
            'label' => 'LBL_ASSET_NUM_PADDING',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'asset_criticality_c',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_CRITICALITY',
          ),
          1 => 
          array (
            'name' => 'enable_fa_c',
            'label' => 'LBL_ENABLE_FA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'flexform_c',
            'studio' => 'visible',
            'label' => 'LBL_FLEXFORM',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
