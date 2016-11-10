<?php  
	if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class HIE_exp_apply_linesViewEdit extends ViewEdit {
	
	function HIE_exp_apply_linesViewEdit(){
 		parent::ViewEdit();
 	}
	
	function display(){
		$this->populateProductInfo();
		parent::display();
	}

	function populateProductInfo(){
	//逻辑和detailview相同，省略
		$bean_product= BeanFactory::getBean('AOS_Products', $this->bean->product_id);
		if ($bean_product) { 
			$this->bean->product_number = isset($bean_product->part_number)?$bean_product->part_number:'';
	        $bean_category = BeanFactory::getBean('AOS_Product_Categories', $bean_product->aos_product_category_id);
	        if ($bean_category) { 
	            $this->bean->product_category = isset($bean_category->name)?$bean_category->name:'';
			}
		}
	}
}
?>