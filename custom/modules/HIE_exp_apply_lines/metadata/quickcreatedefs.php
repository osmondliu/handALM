<?php
$module_name = 'HIE_exp_apply_lines';
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/HIE_exp_apply_lines/js/hie_exp_apply_lines_editview.js',
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
          0 => 'name',
          1 => 
          array (
            'name' => 'exp_dete',
            'label' => 'LBL_EXP_DETE',
            'customCode'=>'<script type="text/javascript" src="custom/resources/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
            <link rel="stylesheet" type="text/css" href="custom/resources/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
            <span id="span_exp_dete" class="input-group date">
            <input id="exp_dete" class="date_input" autocomplete="off" name="exp_dete" tabindex="0" type="text" onClick="CalendarShow(this)" onChange="changeDate(this)"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></span>',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
            'customCode' => '<input id="amount" class="amonut" type="text" onChange="validateAmount(this);" size="30" maxlength="18">'
          ),
          1 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'product_name',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_NAME',
            'displayParams' => 
            array (
              'field_to_name_array' => 
              array (
                'name' => 'product_name',
                'id' => 'product_id',
                'aos_product_category_name' => 'product_category',
                'price'=>'amount',
                'part_number'=>'product_number',
              ),
              'call_back_function' => 'setProductPopupReturn',
            ),
          ),
          1 => 
          array (
            'name' => 'product_category',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_CATEGORY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'product_number',
            'studio' => 'visible',
            'label' => 'LBL_PRODUCT_NUMBER',
          ),  
        ),
      ),
    ),
  ),
);
?>
