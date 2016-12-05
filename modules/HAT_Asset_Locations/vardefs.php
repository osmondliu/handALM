<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['HAT_Asset_Locations'] = array(
	'table'=>'hat_asset_locations',
	'audited'=>true,
	'inline_edit'=>true,
	'duplicate_merge'=>true,
	'fields'=>array (
/*		'name' =>
		array (
			'name' => 'name',
			'vname' => 'LBL_NAME',
			'type' => 'name',
			'link' => true,
			'dbType' => 'varchar',
			'len' => '255',
			'unified_search' => false,
			'full_text_search' =>
			array (
				'boost' => 3,
				),
			'required' => false,
			'importable' => 'required',
			'duplicate_merge' => 'enabled',
			'merge_filter' => 'disabled',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'duplicate_merge_dom_value' => '1',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'size' => '20',
			),*/
		'location_title' =>
		array (
			'required' => false,
			'name' => 'location_title',
			'vname' => 'LBL_LOCATION_TITLE',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'enabled',
			'duplicate_merge_dom_value' => '1',
			'audited' => true,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
		'asset_node' =>
		array (
			'required' => false,
			'name' => 'asset_node',
			'vname' => 'LBL_ASSET_NODE',
			'type' => 'bool',
			'massupdate' => 0,
			'default' => '1',
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
		'maint_node' =>
		array (
			'required' => false,
			'name' => 'maint_node',
			'vname' => 'LBL_MAINT_NODE',
			'type' => 'bool',
			'massupdate' => 0,
			'default' => '1',
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
		'inventory_mode' =>
		array (
			'required' => true,
			'default' => "NONE",
			'name' => 'inventory_mode',
			'vname' => 'LBL_INVENTORY_MODE',
			'type' => 'enum',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'options' => 'hat_inventory_node_list',
			),
		'ham_maint_sites_id' =>
		array (
			'inline_edit' => 1,
			'required' => false,
			'name' => 'ham_maint_sites_id',
			'vname' => 'LBL_MAINT_SITE_HAM_MAINT_SITES_ID',
			'type' => 'id',
			'massupdate' => '0',
			'default' => NULL,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '36',
			'size' => '20',
			'id' => 'HAT_Asset_Locationsham_maint_sites_id',
			),
		'maint_site' =>
		array (
			'inline_edit' => '',
			'labelValue' => 'Maint Site',
			'required' => true,
			'source' => 'non-db',
			'name' => 'maint_site',
			'vname' => 'LBL_MAINT_SITE',
			'type' => 'relate',
			'massupdate' => '0',
			'default' => NULL,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'ham_maint_sites_id',
			'ext2' => 'HAM_Maint_Sites',
			'module' => 'HAM_Maint_Sites',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			'id' => 'HAT_Asset_Locationsmaint_site',
			),
		'code_asset_location_type_id' =>
		array (
			'inline_edit' => 1,
			'required' => false,
			'name' => 'code_asset_location_type_id',
			'vname' => 'LBL_ASSET_LOCATION_TYPE_ID',
			'type' => 'id',
			'massupdate' => '0',
			'default' => NULL,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '36',
			'size' => '20',
			'id' => 'code_asset_location_type_id',
			),
		'code_asset_location_type' =>
		array (
			'inline_edit' => '',
			'required' => true,
			'source' => 'non-db',
			'name' => 'code_asset_location_type',
			'vname' => 'LBL_ASSET_LOCATION_TYPE',
			'type' => 'relate',
			'massupdate' => '0',
			'default' => NULL,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'code_asset_location_type_id',
			'ext2' => 'HAA_Codes',
			'module' => 'HAA_Codes',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			'id' => 'code_asset_location_type_id',
			),		
		'map_type' =>
		array (
			'required' => true,
			'default' => "NONE",
			'name' => 'map_type',
			'vname' => 'LBL_MAP_TYPE',
			'type' => 'enum',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'options' => 'cux_map_type_list',
			),
		'map_lat' =>
		array (
			'required' => true,
			'name' => 'map_lat',
			'vname' => 'LBL_MAP_LAT_C',
			'type' => 'float',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'default' => '0.00000000',
			'len' => '11',
			'size' => '20',
			'enable_range_search' => false,
			'precision' => '8',
			),
		'map_lng' =>
		array (
			'required' => true,
			'name' => 'map_lng',
			'vname' => 'LBL_MAP_LNG_C',
			'type' => 'float',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'default' => '0.00000000',
			'len' => '11',
			'size' => '20',
			'enable_range_search' => false,
			'precision' => '8',
			),
		'map_zoom' =>
		array (
			'required' => true,
			'name' => 'map_zoom',
			'vname' => 'LBL_MAP_ZOOM',
			'type' => 'int',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'default' => '13',
			),
		'map_enabled' =>
		array (
			'required' => false,
			'name' => 'map_enabled',
			'vname' => 'LBL_MAP_ENABLED',
			'type' => 'bool',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'address_country' =>
		array (
			'required' => false,
			'name' => 'address_country',
			'vname' => 'LBL_ADD_COUNTRY',
			'type' => 'enum',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'options'=>'countries_dom',
			),
		'address_province' =>
		array (
			'required' => false,
			'name' => 'address_province',
			'vname' => 'LBL_PROVINCE',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'address_zip' =>
		array (
			'required' => false,
			'name' => 'address_zip',
			'vname' => 'LBL_ZIP',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'address_contact1' =>
		array (
			'required' => false,
			'name' => 'address_contact1',
			'vname' => 'LBL_CONTACT1',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'address_contact2' =>
		array (
			'required' => false,
			'name' => 'address_contact2',
			'vname' => 'LBL_CONTACT2',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'map_address' =>
		array (
			'required' => false,
			'name' => 'map_address',
			'vname' => 'LBL_MAP_ADDRESS',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'map_search_area' =>
		array (
			'name' => 'map_search_area',
			'vname' => 'LBL_MAP_SEARCH_AREA',
			'source' => 'non-db',
			'type' => 'varchar',
			'massupdate' => 0,

			),
		'map_display_area' =>
		array (
			'name' => 'map_display_area',
			'vname' => 'LBL_MAP_DISPLAY_AREA',
			'source' => 'non-db',
			'type' => 'varchar',
			'massupdate' => 0,

			),
		'treeview_display_area' =>
		array (
			'name' => 'treeview_display_area',
			'vname' => 'LBL_TREEVIEW',
			'source' => 'non-db',
			'type' => 'varchar',
			'massupdate' => 0,

			),
		'location_icon' =>
		array (
			'required' => false,
			'name' => 'location_icon',
			'vname' => 'LBL_ICON',
			'type' => 'varchar',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			),
		'parent_location_id' => 
		array (
			'required' => false,
			'name' => 'parent_location_id',
			'vname' => 'LBL_PARENT_LOCATION_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'parent_location' => 
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'parent_location',
			'vname' => 'LBL_PARENT_LOCATION',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'parent_location_id',
			'ext2' => 'HAT_Asset_Locations',
			'module' => 'HAT_Asset_Locations',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'map_layer_id' => 
		array (
			'required' => false,
			'name' => 'map_layer_id',
			'vname' => 'LBL_MAP_LAYER_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => false,
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'map_layer' => 
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'map_layer',
			'vname' => 'LBL_MAP_LAYER',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => false,
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'map_layer_id',
			'ext2' => 'HAA_Maps',
			'module' => 'HAA_Maps',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'using_org_id' => 
		array (
			'required' => false,
			'name' => 'using_org_id',
			'vname' => 'LBL_USING_ORG_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),
		'service_org' => 
		array (
			'required' => false,
			'source' => 'non-db',
			'name' => 'service_org',
			'vname' => 'LBL_SERVICE_ORG',
			'type' => 'relate',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			'id_name' => 'service_org_id',
			'ext2' => 'Accounts',
			'module' => 'Accounts',
			'rname' => 'name',
			'quicksearch' => 'enabled',
			'studio' => 'visible',
			),
		'service_org_id' => 
		array (
			'required' => false,
			'name' => 'service_org_id',
			'vname' => 'LBL_SERVICE_ORG_ID',
			'type' => 'id',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => 0,
			'audited' => false,
			'inline_edit' => true,
			'reportable' => false,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 36,
			'size' => '20',
			),

		'map_layer_url' =>
		array (
			'name' => 'map_layer_url',
			'id_name' => 'map_layer_id',
			'type' => 'relate',
    		'rname' => 'map_file',//which points to the field name in the related module record
    		'vname' => 'LBL_MAP_LAYER_URL',
            'link' => 'map_layer',//'map_layer_link',
            'module' => 'HAA_Maps',
            'source' => 'non-db', //HAA_Maps
            'dbType' => 'non-db', //HAA_Maps
            'studio' => 'visible',
            ),
		'attribute1' => 
		array (
			'required' => false,
			'name' => 'attribute1',
			'vname' => 'LBL_ATTRIBUTE1',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
		'attribute2' => 
		array (
			'required' => false,
			'name' => 'attribute2',
			'vname' => 'LBL_ATTRIBUTE2',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
		'attribute3' => 
		array (
			'required' => false,
			'name' => 'attribute3',
			'vname' => 'LBL_ATTRIBUTE3',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
		'attribute4' => 
		array (
			'required' => false,
			'name' => 'attribute4',
			'vname' => 'LBL_ATTRIBUTE4',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			), 
		'attribute5' => 
		array (
			'required' => false,
			'name' => 'attribute5',
			'vname' => 'LBL_ATTRIBUTE5',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),
      'hat_meters_hat_asset_locations_link' =>
      array(
        'name' => 'hat_meters_hat_asset_locations_link',
        'type' => 'link',
        'relationship' => 'hat_meters_hat_asset_locations',
        'link_type' => 'many',
        'module' => 'HAT_Asset_Locations',
        'bean_name' => 'HAT_Asset_Locations',
        'source' => 'non-db',
        ),
		'map_marker_type' =>
		array (
			'required' => true,
			'default' => "NONE",
			'name' => 'map_marker_type',
			'vname' => 'LBL_MAP_MARKER_TYPE',
			'type' => 'enum',
			'massupdate' => 0,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'options' => 'hat_map_marker_type_list',
		),
		'map_marker_data' => 
		array (
			'required' => false,
			'name' => 'map_marker_data',
			'vname' => 'LBL_MAP_MARKER_DATA',
			'type' => 'varchar',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
			),	
),
'relationships'=>array (

	'hat_asset_locations_haa_maps' => 
	array (
		'lhs_module' => 'HAA_Maps',
		'lhs_table' => 'haa_maps',
		'lhs_key' => 'id',
		'rhs_module' => 'HAT_Asset_Locations',
		'rhs_table' => 'hat_asset_locations',
		'rhs_key' => 'map_layer_id',
		'relationship_type' => 'one-to-many',
		),
    'hat_meters_hat_asset_locations' => 
    array (
        'lhs_module' => 'HAT_Asset_Locations',
        'lhs_table' => 'hat_asset_locations',
        'lhs_key' => 'id',
        'rhs_module' => 'HAT_Meters',
        'rhs_table' => 'hat_meters',
        'rhs_key' => 'hat_asset_location_id',
        'relationship_type' => 'one-to-many',
        ),

	),
'optimistic_locking'=>true,
'unified_search'=>true,
);
if (!class_exists('VardefManager')){
	require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAT_Asset_Locations','HAT_Asset_Locations', array('basic','security_groups'));