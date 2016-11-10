<?php
$module_name = 'HIE_exp_apply_headers';
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => true,
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
            'displayParams' => 
            array (
              'initial_filter' => '&account_type=Competitor',
            ),
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
            'name' => 'apply_person',
            'studio' => 'visible',
            'label' => 'LBL_APPLY_PERSON',
            'displayParams' => 
            array (
              'initial_filter' => '&account_name="+this.form.{$fields.dept_code.name}.value+"',
            ),
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
            'name' => 'status_code',
            'studio' => 'visible',
            'label' => 'LBL_STATUS_CODE',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'studio' => 'visible',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
