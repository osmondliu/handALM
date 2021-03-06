<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2016-02-08 10:53:31

//人员上显示的资产相关Subpanel
$layout_defs["Contacts"]["subpanel_setup"]['hat_assets_contacts_owningperson'] = array (
            'order' => 100,
            'module' => 'HAT_Assets',
            //'sort_order' => 'asc',
            'sort_by' => 'name asc',
            'subpanel_name' => 'forContacts',
            'title_key' => 'LBL_ASSETS_OWNING_SUBPANEL',
            'get_subpanel_data' => 'function:get_assets_by_owningperson',
            'generate_select' => true,
/*            'top_buttons'  => array (
                0 => array (
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode'         => 'MultiSelect',
                ),
            ),*/
            'function_parameters' => array(
                'import_function_file' => 'modules/HAT_Assets/ContactsAssetsSubpanel.php',
                'contact_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);


 // created: 2016-02-08 10:53:31

//人员上显示的资产相关Subpanel
$layout_defs["Contacts"]["subpanel_setup"]['hat_assets_contacts_usingperson'] = array (
            'order' => 100,
            'module' => 'HAT_Assets',
            //'sort_order' => 'asc',
            'sort_by' => 'name asc',
            'subpanel_name' => 'forContacts',
            'title_key' => 'LBL_ASSETS_USING_SUBPANEL',
            'get_subpanel_data' => 'function:get_assets_by_usingperson',
            'generate_select' => true,
/*            'top_buttons'  => array (
                0 => array (
                    'widget_class' => 'SubPanelTopSelectButton',
                    'mode'         => 'MultiSelect',
                ),
            ),*/
            'function_parameters' => array(
                'import_function_file' => 'modules/HAT_Assets/ContactsAssetsSubpanel.php',
                'contact_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);


 // created: 2016-02-08 10:53:31

//人员上显示的资产相关Subpanel
$layout_defs["Contacts"]["subpanel_setup"]['hat_assets_trans_contacts'] = array (
            'order' => 100,
            'module' => 'HAT_Asset_Trans',
            'sort_order' => 'desc',
            'sort_by' => 'acctual_complete_date',
            'subpanel_name' => 'forContact',
            'title_key' => 'LBL_ASSETS_TRANS_SUBPANEL',
            'get_subpanel_data' => 'function:get_asset_trans',
            'generate_select' => true,
            'function_parameters' => array(
                'import_function_file' => 'modules/HAT_Asset_Trans/TransAssetsSubpanel.php',
                'contact_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);


 // created: 2016-02-09 00:45:28
$layout_defs["Contacts"]["subpanel_setup"]['hpr_am_roles_contacts'] = array (
  'order' => 100,
  'module' => 'HPR_AM_Roles',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_HPR_AM_ROLES_CONTACTS_FROM_HPR_AM_ROLES_TITLE',
  'get_subpanel_data' => 'hpr_am_roles_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['Contacts']['subpanel_setup']['hpr_am_roles_contacts']['override_subpanel_name'] = 'Contact_subpanel_hpr_am_roles_contacts';

?>