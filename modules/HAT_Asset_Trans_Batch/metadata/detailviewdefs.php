<?php
$module_name = 'HAT_Asset_Trans_Batch';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/HAA_FF/ff_include.js',
        ),
        1 => 
        array (
          'file' => 'modules/HAT_Asset_Trans_Batch/js/HAT_Asset_Trans_Batch_detailview.js',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 
          array (
            'customCode' => '<input type="button" class="button" onClick="GenerateDoc();" value="{$MOD.LBL_GENERATE_DOC}">',
          ),
          2 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createToRevenues\';" value="{$MOD.LBL_CREATE_REVENUE}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_REVENUE}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'create_to_revenue_button',
                'title' => '{$MOD.LBL_CREATE_REVENUE}',
                'onclick' => 'this.form.action.value=\'createToRevenues\';',
                'name' => 'Create to Revenue',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          0 => '<input type="hidden" name="source_woop_id" id="source_woop_id" value="{$SOURCE_WOOP_ID}">',
          1 => '<input type="hidden" name="source_wo_id"  id="source_wo_id" value="{$SOURCE_WO_ID}">',
          2 => '<input type="hidden" name="source_wo_org"  id="source_wo_org" value="{$SOURCE_WO_ORG}">',
          3 => '<input type="hidden" name="source_wo_account"  id="source_wo_account" value="{$SOURCE_WO_ACCOUNT}">',
          4 => '<input type="hidden" name="source_wo_account_id"  id="source_wo_account_id" value="{$SOURCE_WO_ACCOUNT_ID}">',
          5 => '<input type="hidden" name="source_wo_contact"  id="source_wo_contact" value="{$SOURCE_WO_CONTACT}">',
          6 => '<input type="hidden" name="source_wo_contact_id"  id="source_wo_contact_id" value="{$SOURCE_WO_CONTACT}">',
          11 => '<input type="hidden" name="eventOptions" id="eventOptions">',
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
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'framework',
            'studio' => 'visible',
            'label' => 'LBL_FRAMEWORKS',
          ),
          1 => 
          array (
            'name' => 'asset_trans_status',
            'studio' => 'visible',
            'label' => 'LBL_ASSET_TRANS_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'current_owning_org',
            'studio' => 'visible',
            'label' => 'LBL_CURRENT_OWNING_ORG',
          ),
          1 => 'owner_contacts',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'target_owning_org',
            'studio' => 'visible',
            'label' => 'LBL_TARGET_OWNING_ORG',
          ),
          1 => 
          array (
            'name' => 'target_using_org',
            'studio' => 'visible',
            'label' => 'LBL_TARGET_USING_ORG',
          ),
        ),
        3 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'tracking_number',
            'label' => 'LBL_TRACKING_NUMBER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'planned_execution_date',
            'label' => 'LBL_PLANNED_EXECUTION_DATE',
          ),
          1 => 
          array (
            'name' => 'planned_complete_date',
            'label' => 'LBL_PLANNED_COMPLETE_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'source_wo',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE_WO',
          ),
          1 => 
          array (
            'name' => 'source_woop',
            'studio' => 'visible',
            'label' => 'LBL_SOURCE_WOOP',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'attribute1',
            'label' => 'LBL_ATTRIBUTE1',
          ),
          1 => 
          array (
            'name' => 'attribute2',
            'label' => 'LBL_ATTRIBUTE2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'attribute3',
            'label' => 'LBL_ATTRIBUTE3',
          ),
          1 => 
          array (
            'name' => 'attribute4',
            'label' => 'LBL_ATTRIBUTE4',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'attribute5',
            'label' => 'LBL_ATTRIBUTE5',
          ),
          1 => 
          array (
            'name' => 'attribute6',
            'label' => 'LBL_ATTRIBUTE6',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 'wo_lines',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
      ),
    ),
  ),
);
?>
