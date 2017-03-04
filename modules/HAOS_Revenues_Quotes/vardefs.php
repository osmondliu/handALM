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

$dictionary['HAOS_Revenues_Quotes'] = array(
	'table'=>'haos_revenues_quotes',
	'audited'=>true,
    'inline_edit'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
      'account_id_c' => 
      array (
        'required' => false,
        'name' => 'account_id_c',
        'vname' => 'LBL_ACCOUNT_NAME_ACCOUNT_ID',
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
      'account_name' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'account_name',
        'vname' => 'LBL_ACCOUNT_NAME',
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
      'haa_frameworks_id_c' => 
      array (
        'required' => false,
        'name' => 'haa_frameworks_id_c',
        'vname' => 'LBL_FRAMEWORKS_HAA_FRAMEWORKS_ID',
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
      'frameworks' => 
      array (
        'required' => true,
        'source' => 'non-db',
        'name' => 'frameworks',
        'vname' => 'LBL_FRAMEWORKS',
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
        'id_name' => 'haa_frameworks_id_c',
        'ext2' => 'HAA_Frameworks',
        'module' => 'HAA_Frameworks',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'period_name' => 
  array (
    'required' => false,
    'name' => 'period_name',
    'vname' => 'LBL_PERIOD_NAME',
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
      'source_code' => 
      array (
        'required' => true,
        'name' => 'source_code',
        'vname' => 'LBL_SOURCE_CODE',
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
        'options' => 'haos_source_code_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'source_reference' => 
      array (
        'required' => false,
        'name' => 'source_reference',
        'vname' => 'LBL_SOURCE_REFERENCE',
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
      'source_id' => 
      array (
        'required' => false,
        'name' => 'source_id',
        'vname' => 'LBL_SOURCE_ID',
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
      'haa_codes_id_c' => 
      array (
        'required' => false,
        'name' => 'haa_codes_id_c',
        'vname' => 'LBL_EXPENSE_GROUP_HAA_CODES_ID',
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
      'expense_group' => 
      array (
        'required' => false,
        'source' => 'non-db', 
        'name' => 'expense_group',
        'vname' => 'LBL_EXPENSE_GROUP',
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
      'haa_codes_id1_c' => 
      array (
        'required' => false,
        'name' => 'haa_codes_id1_c',
        'vname' => 'LBL_EXPENSE_TYPE_HAA_CODES_ID',
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
      'expense_type' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'expense_type',
        'vname' => 'LBL_EXPENSE_TYPE',
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
        'id_name' => 'haa_codes_id1_c',
        'ext2' => 'HAA_Codes',
        'module' => 'HAA_Codes',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'revenue_quote_number' => 
      array (
        'required' => true,
        'name' => 'revenue_quote_number',
        'vname' => 'LBL_REVENUE_QUOTE_NUMBER',
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
      'revenue_quote_name' => 
      array (
        'required' => true,
        'name' => 'revenue_quote_name',
        'vname' => 'LBL_REVENUE_QUOTE_NAME',
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
      'event_date' => 
      array (
        'required' => true,
        'name' => 'event_date',
        'vname' => 'LBL_EVENT_DATE',
        'type' => 'date',
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
        'size' => '20',
        'enable_range_search' => true,
        'options' => 'date_range_search_dom',
        ),
      'due_date' => 
      array (
        'required' => false,
        'name' => 'due_date',
        'vname' => 'LBL_DUE_DATE',
        'type' => 'date',
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
        'size' => '20',
        'enable_range_search' => true,
        'options' => 'date_range_search_dom',
        ),
      'clear_status' => 
      array (
        'required' => true,
        'name' => 'clear_status',
        'vname' => 'LBL_CLEAR_STATUS',
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
        'options' => 'haos_revenue_clear_status_list',
        'studio' => 'visible',
        'dependency' => false,
        ),
      'deposit_flag' => 
      array (
        'required' => false,
        'name' => 'deposit_flag',
        'vname' => 'LBL_DEPOSIT_FLAG',
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
      'prepay_flag' => 
      array (
        'required' => false,
        'name' => 'prepay_flag',
        'vname' => 'LBL_PREPAY_FLAG',
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
      'bill_id' => 
      array (
        'required' => false,
        'name' => 'bill_id',
        'vname' => 'LBL_BILL_ID',
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
      'aos_invoices_id_c' => 
      array (
        'required' => false,
        'name' => 'aos_invoices_id_c',
        'vname' => 'LBL_INVOICE_NUMBER_AOS_INVOICES_ID',
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
      'invoice_number' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'invoice_number',
        'vname' => 'LBL_INVOICE_NUMBER',
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
        'id_name' => 'aos_invoices_id_c',
        'ext2' => 'AOS_Invoices',
        'module' => 'AOS_Invoices',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'aos_products_quotes_id_c' => 
      array (
        'required' => false,
        'name' => 'aos_products_quotes_id_c',
        'vname' => 'LBL_AOS_PRODUCTS_QUOTES_ID_C',
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
      'invoice_line_number'=>
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'invoice_line_number',
        'vname' => 'LBL_INVOICE_LINE_NUMBER',
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
        'id_name' => 'aos_products_quotes_id_c',
        'ext2' => 'AOS_Products_Quotes',
        'module' => 'AOS_Products_Quotes',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'hat_eventtype_id_c' => 
      array (
        'required' => false,
        'name' => 'hat_eventtype_id_c',
        'vname' => 'LBL_EVENT_TYPE_HAT_EVENTTYPE_ID',
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
      'event_type' => 
      array (
        'required' => true,
        'source' => 'non-db',
        'name' => 'event_type',
        'vname' => 'LBL_EVENT_TYPE',
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
        'id_name' => 'hat_eventtype_id_c',
        'ext2' => 'HAT_EventType',
        'module' => 'HAT_EventType',
        'rname' => 'name',
        'quicksearch' => 'enabled',
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
      'attribute6' => 
      array (
        'required' => false,
        'name' => 'attribute6',
        'vname' => 'LBL_ATTRIBUTE6',
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
      'attribute7' => 
      array (
        'required' => false,
        'name' => 'attribute7',
        'vname' => 'LBL_ATTRIBUTE7',
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
      'attribute8' => 
      array (
        'required' => false,
        'name' => 'attribute8',
        'vname' => 'LBL_ATTRIBUTE8',
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
      'attribute9' => 
      array (
        'required' => false,
        'name' => 'attribute9',
        'vname' => 'LBL_ATTRIBUTE9',
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
      'attribute10' => 
      array (
        'required' => false,
        'name' => 'attribute10',
        'vname' => 'LBL_ATTRIBUTE10',
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
      'contact_id_c' => 
      array (
        'required' => false,
        'name' => 'contact_id_c',
        'vname' => 'LBL_CONTRACT_NUMBER_CONTACT_ID',
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
      'contract_name' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'contract_name',
        'vname' => 'LBL_CONTRACT_NAME',
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
        'id_name' => 'contact_id_c',
        'ext2' => 'Contacts',
        'module' => 'Contacts',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'aos_contracts_id_c' => 
      array (
        'required' => false,
        'name' => 'aos_contracts_id_c',
        'vname' => 'LBL_SOURCE_NUMBER_AOS_CONTRACTS_ID',
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
      'source_number' => 
      array (
        'required' => false,
        'source' => 'non-db',
        'name' => 'source_number',
        'vname' => 'LBL_SOURCE_NUMBER',
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
        'id_name' => 'aos_contracts_id_c',
        'ext2' => 'AOS_Contracts',
        'module' => 'AOS_Contracts',
        'rname' => 'name',
        'quicksearch' => 'enabled',
        'studio' => 'visible',
        ),
      'contract_number'=>
      array(
        'required' => false,
        'source' => 'non-db',
        'name' => 'contract_number',
        'vname' => 'LBL_CONTRACT_NUMBER',
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
      'cleared_status'=>
      array(
        'required' => false,
        'source' => 'non-db',
        'name' => 'cleared_status',
        'vname' => 'LBL_CLEARED_STATUS',
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
      'source_name'=>
      array(
        'required' => false,
        'source' => 'non-db',
        'name' => 'source_name',
        'vname' => 'LBL_SOURCE_NAME',
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
      'source_type'=>
      array(
        'required' => false,
        'source' => 'non-db',
        'name' => 'source_type',
        'vname' => 'LBL_SOURCE_TYPE',
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
      'source_class'=>
      array(
        'required' => false,
        'source' => 'non-db',
        'name' => 'source_class',
        'vname' => 'LBL_SOURCE_CLASS',
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
      'hat_assets_id' => array (
            'required' => false,
            'name' => 'hat_assets_id',
            'vname' => 'LBL_HAT_ASSETS_ID',
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
        'asset' => array (
            'required' => false,
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
            'id_name' => 'hat_assets_id',
            'ext2' => 'HAT_Assets',
            'module' => 'HAT_Assets',
            'rname' => 'name',
            'quicksearch' => 'enabled',
            'studio' => 'visible',
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
      ),
'relationships'=>array (
    ),
'optimistic_locking'=>true,
'unified_search'=>true,
);
if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAOS_Revenues_Quotes','HAOS_Revenues_Quotes', array('basic','assignable','security_groups'));
