<?php
function display_lines($focus, $field, $value, $view){
    global $sugar_config, $locale, $app_list_strings, $mod_strings;
    $html = '';
    if($view == 'EditView'){
        $html .= '<script src="modules/HIE_exp_apply_lines/js/line_items.js"></script>';

        $html .= "<table border='0' cellspacing='4' width='37.5%' id='lineItems' class='list view table'></table>";
        $html .='<input type="hidden" name="explinetypeidden" id="explinetypeidden" value="'.get_select_options_with_id($app_list_strings['hie_exp_line_type_list'], '').'">';
        $html .= '<script>insertLineHeader(\'lineItems\');</script>';
         if($focus->id != '') { //如果不是新增（即如果是编辑已有记录）
			/*$sql = "SELECT
				eal.id,
				eal.line_num,
				ehr.hie_exp_ap7509headers_ida header_id,
				eal.item_type_code,
				eal.`name` exp_reason,
				eal.exp_date,
				eal.amount,
				eal.description
			FROM
				hie_exp_apply_lines eal,
				hie_exp_apply_headers_hie_exp_apply_lines_c ehr
			WHERE
				eal.id = ehr.hie_exp_apply_headers_hie_exp_apply_lineshie_exp_apply_lines_idb
			AND eal.deleted = 0
			AND ehr.hie_exp_ap7509headers_ida ='".$focus->id."'";*/
			$sql = "SELECT eal.id,eal.line_num,ehr.hie_exp_ap7509headers_ida header_id,eal.item_type_code,eal.`name` exp_reason,eal.exp_date,eal.amount,eal.description,eal.product_id,apd.`name` product_name,apd.part_number product_number,apd.aos_product_category_id  product_category_id,apc.`name` product_category FROM(hie_exp_apply_lines eal LEFT JOIN aos_products apd ON eal.product_id = apd.id)LEFT JOIN aos_product_categories apc ON apc.id = apd.aos_product_category_id,hie_exp_apply_headers_hie_exp_apply_lines_c ehr WHERE eal.id = ehr.hie_exp_apply_headers_hie_exp_apply_lineshie_exp_apply_lines_idb AND eal.deleted = 0 AND ehr.hie_exp_ap7509headers_ida ='".$focus->id."'";
            $result = $focus->db->query($sql);
			while ($row = $focus->db->fetchByAssoc($result)) {
				$line_data = json_encode($row);
				$html .= "<script>insertLineData(" . $line_data . ");</script>";
			}
      }
	  $html .= '<script>insertLineFootor(\'lineItems\');</script>';
    }else if($view == 'DetailView'){
    	
	}
    return $html;
}
