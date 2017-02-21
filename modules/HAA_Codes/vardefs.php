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

$dictionary['HAA_Codes'] = array(
	'table'=>'haa_codes',
	'audited'=>true,
  'inline_edit'=>true,
  'duplicate_merge'=>true,
  'fields'=>array (
    'haa_frameworks_id' =>
    array (
      'required' => false,
      'name' => 'haa_frameworks_id',
      'vname' => 'LBL_FRAMEWORK_ID',
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
    'framework' =>
    array (
      'required' => true,
      'source' => 'non-db',
      'name' => 'framework',
      'vname' => 'LBL_FRAMEWORK',
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
      'id_name' => 'haa_frameworks_id',
      'ext2' => 'HAA_Frameworks',
      'module' => 'HAA_Frameworks',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      ),
    'haa_ff_id' =>
    array (
      'inline_edit' => 1,
      'required' => false,
      'name' => 'haa_ff_id',
      'vname' => 'LBL_HAA_FF_ID',
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
    'haa_ff' =>
    array (
      'inline_edit' => '',
      'required' => false,
      'source' => 'non-db',
      'name' => 'haa_ff',
      'vname' => 'LBL_HAA_FF',
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
      'id_name' => 'haa_ff_id',
      'ext2' => 'HAA_FF',
      'module' => 'HAA_FF',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      ),
    'code_tag' =>
    array (
      'required' => false,
      'name' => 'code_tag',
      'vname' => 'LBL_CODE_TAG',
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
    'lookup_code' =>
    array (
      'required' => true,
      'name' => 'lookup_code',
      'vname' => 'LBL_LOOKUP_CODE',
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
    'code_module' =>
    array (
      'required' => true,
      'name' => 'code_module',
      'vname' => 'LBL_CODE_MODULE',
      'type' => 'enum',
      'massupdate' => 0,
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
      'len' => 100,
      'size' => '20',
      'options' => 'haa_code_module_list',
      'studio' => 'visible',
      'dependency' => false,
      ),
    'code_type' =>
    array (
      'required' => true,
      'name' => 'code_type',
      'vname' => 'LBL_CODE_TYPE',
      'type' => 'dynamicenum',
      'dbType' => 'enum',
      'massupdate' => 0,
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
      'len' => 100,
      'options' => 'haa_code_type_list',
      'studio' => 'visible',
      'dependency' => false,
      'parentenum' => 'code_module',
      ),
    'parent_type_value_id' => 
    array (
      'required' => false,
      'name' => 'parent_type_value_id',
      'vname' => 'LBL_PARENT_TYPE_VALUE_ID',
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
    'parent_type_value' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'parent_type_value',
      'vname' => 'LBL_PARENT_TYPE_VALUE',
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
      'len' => '100',
      'size' => '20',
      'id_name' => 'parent_type_value_id',
      'ext2' => 'HAA_Codes',
      'module' => 'HAA_Codes', 
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
      ),
    ),


'indices'=>array (
  array (
    'name' => 'haa_codesspk',
    'type' => 'primary',
    'fields' => 
    array (
      0 => 'id',
      ),
    ),
  array (
    'name' => 'idx_id_del',
    'type' => 'index',
    'fields' => 
    array (
      0 => 'id',
      1 => 'deleted',
      ),
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
VardefManager::createVardef('HAA_Codes','HAA_Codes', array('basic','assignable','security_groups'));