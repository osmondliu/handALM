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

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/HAA_Integration_Mapping_Headers/HAA_Integration_Mapping_Headers_sugar.php');
class HAA_Integration_Mapping_Headers extends HAA_Integration_Mapping_Headers_sugar {
	
	function __construct(){
		parent::__construct();
	}
	function save($check_notify = FALSE){
        global $current_user;/*
        require_once('modules/AOS_Products_Quotes/AOS_Utils.php');
        perform_aos_save($this);*/
        $this->id=parent::save($check_notify);
        $post_data=$_POST;
        $key="line_";
        $line_count = isset($post_data[$key . 'deleted']) ? count($post_data[$key . 'deleted']) : 0;
        $j = 0;
        /*var_dump($post_data);
        exit();*/
        for ($i = 0; $i < $line_count; ++$i) {
            $lines = new HAA_Integration_Mapping_Lines();
            if ($post_data[$key . 'deleted'][$i] == 1) {
                $lines->mark_deleted($post_data[$key . 'id'][$i]);
            } else {
                foreach ($lines->field_defs as $field_def) {
                    $field_name = $field_def['name'];
                    if (isset($post_data[$key . $field_name][$i])) {
                        $lines->$field_name = $post_data[$key . $field_name][$i];
                    }
                }
                $lines->currency_id=$this->currency_id;
                $lines->assigned_user_id=$current_user->id;

                $lines->haa_integration_mapping_headers_id_c=$this->id;

                $lines->save($check_notify);
                /*if (!$post_data['line_id'][$i]) {//新建才加关联关系
                    $table='haa_integrbaeddef_lines_c';
                    $relate_values = array(
                    'deleted' =>0 ,
                    'haa_integrc471headers_ida'=>$this->id,
                    'haa_integrd80ef_lines_idb'=>$lines->id
                    );
                }*/
                parent::set_relationship($table,$relate_values);
            }
        }
    }

}
?>