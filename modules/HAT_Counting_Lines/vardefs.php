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

$dictionary['HAT_Counting_Lines'] = array(
    'table'=>'hat_counting_lines',
    'audited'=>true,
    'inline_edit'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
      'hat_assets_id_c' => 
      array (
        'required' => false,
        'name' => 'hat_assets_id_c',
        'vname' => 'LBL_ASSET_HAT_ASSETS_ID',
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
      'user_contacts_id_c' => 
      array (
        'required' => false,
        'name' => 'user_contacts_id_c',
        'vname' => 'LBL_USER_PERSON_CONTACTS_ID',
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
      'user_person' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'user_person',
        'vname' => 'LBL_USER_PERSON',
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
        'id_name' => 'user_contacts_id_c',
        'ext2' => 'Contacts',
        'module' => 'Contacts',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'own_contacts_id_c' => 
      array (
        'required' => false,
        'name' => 'own_contacts_id_c',
        'vname' => 'LBL_OWN_PERSON_CONTACTS_ID',
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
      'own_person' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'own_person',
        'vname' => 'LBL_OWN_PERSON',
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
        'id_name' => 'own_contacts_id_c',
        'ext2' => 'Contacts',
        'module' => 'Contacts',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'line_asset_items' =>
      array(
        'required' => false,
        'name' => 'line_asset_items',
        'vname' => 'LBL_LINE_ASSET_ITEMS',
        'type' => 'varchar',
        'source' => 'non-db',
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
      'line_items_detail' =>
              array (
                'required' => false,
                'name' => 'line_items_detail',
                'vname' => 'LBL_LINE_ITEMS_DETAIL',
                'type' => 'function',
                'source' => 'non-db',
                'massupdate' => 0,
                'importable' => 'false',
                'duplicate_merge' => 'disabled',
                'duplicate_merge_dom_value' => 0,
                'audited' => false,
                'reportable' => false,
                'function' =>
                array(
                    'name' => 'display_lines',
                    'returns' => 'html',
                    'include' => 'modules/HAT_Counting_Lines/Line_Items.php'
                    ),
                ),
      'line_items' =>
      array(
        'required' => false,
        'name' => 'line_items',
        'vname' => 'LBL_LINE_ITEMS',
        'type' => 'varchar',
        'source' => 'non-db',
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
      'line_doc_items' =>
      array(
        'required' => false,
        'name' => 'line_doc_items',
        'vname' => 'LBL_LINE_DOC_ITEMS',
        'type' => 'varchar',
        'source' => 'non-db',
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
      'asset' => 
      array (
        'required' => true,
        'source' => 'non-db',
        'name' => 'asset',
        'vname' => 'LBL_ASSET',
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
        'id_name' => 'hat_assets_id_c',
        'ext2' => 'HAT_Assets',
        'module' => 'HAT_Assets',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'location' => 
      array (
        'required' => false,
        'name' => 'location',
        'vname' => 'LBL_LOCATION',
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
      'counting_person' =>
      array (
        'source' => 'non-db', 
        'name' => 'counting_person',
        'vname' => 'LBL_COUNTING_PERSON',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'studio' => 'visible'
        ),
      'part_number' =>
      array (
        'source' => 'non-db', 
        'name' => 'part_number',
        'vname' => 'LBL_PART_NUMBER',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'studio' => 'visible'
        ),
      'asset_desc' =>
      array (
        'name' => 'asset_desc',
        'vname' => 'LBL_ASSET_DESC',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'studio' => 'visible'
        ),
      'attribute1' =>
      array ( 
        'name' => 'attribute1',
        'vname' => 'LBL_ATTRIBUTE1',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute2' =>
      array ( 
        'name' => 'attribute2',
        'vname' => 'LBL_ATTRIBUTE2',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute3' =>
      array ( 
        'name' => 'attribute3',
        'vname' => 'LBL_ATTRIBUTE3',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute4' =>
      array ( 
        'name' => 'attribute4',
        'vname' => 'LBL_ATTRIBUTE4',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute5' =>
      array ( 
        'name' => 'attribute5',
        'vname' => 'LBL_ATTRIBUTE5',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute6' =>
      array ( 
        'name' => 'attribute6',
        'vname' => 'LBL_ATTRIBUTE6',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute7' =>
      array ( 
        'name' => 'attribute7',
        'vname' => 'LBL_ATTRIBUTE7',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute8' =>
      array ( 
        'name' => 'attribute8',
        'vname' => 'LBL_ATTRIBUTE8',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute9' =>
      array ( 
        'name' => 'attribute9',
        'vname' => 'LBL_ATTRIBUTE9',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute10' =>
      array ( 
        'name' => 'attribute10',
        'vname' => 'LBL_ATTRIBUTE10',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute11' =>
      array ( 
        'name' => 'attribute11',
        'vname' => 'LBL_ATTRIBUTE11',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute12' =>
      array ( 
        'name' => 'attribute12',
        'vname' => 'LBL_ATTRIBUTE12',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute13' =>
      array ( 
        'name' => 'attribute13',
        'vname' => 'LBL_ATTRIBUTE13',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute14' =>
      array ( 
        'name' => 'attribute14',
        'vname' => 'LBL_ATTRIBUTE14',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'attribute15' =>
      array ( 
        'name' => 'attribute15',
        'vname' => 'LBL_ATTRIBUTE15',
        'type' => 'varchar',
        'default'=>'',
        'reportable' => true,
        'len' => '600',
        'studio' => 'visible'
        ),
      'counting_status' => 
      array (
        'required' => true,
        'name' => 'counting_status',
        'vname' => 'LBL_COUNTING_STATUS',
        'type' => 'enum',
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
        'len' => 100,
        'size' => '20',
        'options' => 'hat_counting_line_status_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'asset_status' => 
      array (
        'required' => false,
        'name' => 'asset_status',
        'vname' => 'LBL_ASSET_STATUS',
        'type' => 'enum',
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
        'len' => 100,
        'size' => '20',
        'options' => 'hat_asset_status_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'aos_products_id_c' => 
      array (
        'required' => false,
        'name' => 'aos_products_id_c',
        'vname' => 'LBL_PRODUCT_AOS_PRODUCTS_ID',
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
      'product' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'product',
        'vname' => 'LBL_PRODUCT',
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
        'id_name' => 'aos_products_id_c',
        'ext2' => 'AOS_Products',
        'module' => 'AOS_Products',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'haa_codes_id_c' => 
      array (
        'required' => false,
        'name' => 'haa_codes_id_c',
        'vname' => 'LBL_ASSET_MAJOR_HAA_CODES_ID',
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
      'asset_major' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'asset_major',
        'vname' => 'LBL_ASSET_MAJOR',
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
        'id_name' => 'haa_codes_id_c',
        'ext2' => 'HAA_Codes',
        'module' => 'HAA_Codes',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'account_id_c' => 
      array (
        'required' => false,
        'name' => 'account_id_c',
        'vname' => 'LBL_ORANIZATION_ACCOUNT_ID',
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
      'oranization' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'oranization',
        'vname' => 'LBL_ORANIZATION',
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
        'id_name' => 'account_id_c',
        'ext2' => 'Accounts',
        'module' => 'Accounts',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'hat_counting_tasks_id_c' => 
      array (
        'required' => false,
        'name' => 'hat_counting_tasks_id_c',
        'vname' => 'LBL_COUNTING_TASK_HAT_COUNTING_TASKS_ID',
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
      'counting_task' => 
      array (
        'required' => true,
        'source' => 'non-db',
        'name' => 'counting_task',
        'vname' => 'LBL_COUNTING_TASK',
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
        'id_name' => 'hat_counting_tasks_id_c',
        'ext2' => 'HAT_Counting_Tasks',
        'module' => 'HAT_Counting_Tasks',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'hat_asset_locations_id_c' => 
      array (
        'required' => false,
        'name' => 'hat_asset_locations_id_c',
        'vname' => 'LBL_ASSET_LOCATION_HAT_ASSET_LOCATIONS_ID',
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
      'fixed_asset_id'=> array (
          'required' => false,
          'name' => 'fixed_asset_id',
          'vname' => 'LBL_FIXED_ASSET_ID',
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
      'fixed_asset' => array (
          'required' => false,
          'source' => 'non-db',
          'name' => 'fixed_asset',
          'vname' => 'LBL_FIXED_ASSET',
          'type' => 'relate',
          'massupdate' => 0,
          'no_default' => false,
          'comments' => '',
          'help' => '',
          'importable' => 'true',
          'duplicate_merge' => 'disabled',
          'duplicate_merge_dom_value' => '0',
          'audited' => false,
          'inline_edit' => '',
          'reportable' => true,
          'unified_search' => false,
          'merge_filter' => 'disabled',
          'len' => '255',
          'size' => '20',
          'id_name' => 'fixed_asset_id',
          'ext2' => 'HFA_Fixed_Assets',
          'module' => 'HFA_Fixed_Assets',
          'rname' => 'name',
          'quicksearch' => 'enabled',
          'studio' => 'visible',
          ),
      'asset_location' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'asset_location',
        'vname' => 'LBL_ASSET_LOCATION',
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
        'id_name' => 'hat_asset_locations_id_c',
        'ext2' => 'HAT_Asset_Locations',
        'module' => 'HAT_Asset_Locations',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'snapshot_quantity' =>
      array(
        'required' => false,
        'name' => 'snapshot_quantity',
        'vname' => 'LBL_SNAPSHOT_QUANTITY',
        'type' => 'int',
        'massupdate' => 0,
        'comments' => '',
        'help' => '',
        'importable' => 'true',
        'duplicate_merge' => 'disabled',
        'duplicate_merge_dom_value' => '0',
        'audited' => 0,
        'reportable' => true,
        'len' => '11',
        'disable_num_format' => '',
        ),
      'is_correct' => 
      array (
        'required' => false,
        'name' => 'is_correct',
        'vname' => 'LBL_IS_CORRECT',
        'type' => 'bool',
        'massupdate' => 0,
        'default' => '0',
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
    ),
'optimistic_locking'=>true,
'unified_search'=>true,
);
if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAT_Counting_Lines','HAT_Counting_Lines', array('basic','assignable','security_groups'));
