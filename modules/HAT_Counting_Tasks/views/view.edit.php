<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.edit.php');
require_once('modules/HAT_Counting_Tasks/populateLineCountInfo.php');
class HAT_Counting_TasksViewEdit extends ViewEdit
{
	/*function HAT_Counting_TasksViewEdit(){
		parent::ViewEdit();
	}*/
	
	function display()
	{	
		$this->populateBatchInfo();
		require_once('modules/HAA_Frameworks/orgSelector_class.php');
		$current_framework_id = empty($this->bean->hat_framework_id)?"":$this->bean->hat_framework_id;
		$current_module = $this->module;
		$current_action = $this->action;
		$beanFramework = BeanFactory::getBean('HAA_Frameworks', $_SESSION["current_framework"]);
		if (isset($beanFramework)) {
			$bean_framework_id = $_SESSION["current_framework"];
			$bean_framework_name = $beanFramework->name;
			if($this->bean->id==''){
				$this->bean->hat_counting_task_templates_id_c=$beanFramework->hat_counting_task_templates_id_c;
				$this->bean->task_templates=$beanFramework->task_templates;
			}
		}
		$this->ss->assign('FRAMEWORK_C',set_framework_selector($current_framework_id,$current_module,$current_action,'haa_frameworks_id_c'));
		
		parent::display();
		/*if($this->bean->id){
			var_dump("expression");
			$this->getAttrValue($this->bean->id);
		}*/
		$countInfo= new CountInfo();
		$count=$countInfo->populateLineCountInfo($this->bean->id);
		$flag=$this->bean->upinterface_flag==1?"true":"false";
		echo "<script>
		$('#total_counting').val('".$count['total_counting']."');
		$('#actual_counting').val('".$count['actual_counting']."');
		$('#amt_actual_counting').val('".$count['matched_count']."');
		$('#profit_counting').val('".$count['overage_count']."');
		$('#loss_counting').val('".$count['loss_count']."');
		$('#diff_counting').val('".$count['different_count']."');
		$('#actual_adjust_count').val('".$count['processed_count']."');
		$('#un_actual_counting').val('".$count['un_actual_counting']."');
	</script>";
	echo "<script>
	$('#task_number').val('".$this->bean->task_number."');
	$('#planed_start_date').val('".$this->bean->planed_start_date."');
	$('#planed_complete_date').val('".$this->bean->planed_complete_date."');
	$('#snapshot_date').val('".$this->bean->snapshot_date."');
</script>";
if($this->bean->id==''){
	echo "<script>
	$('#manual_add_flag').val(1);
	$('#manual_add_flag').attr('checked',true);
</script>";
}
echo '<script>
$("#upinterface_flag").val("'.$this->bean->upinterface_flag.'");
$("#upinterface_flag").attr("checked",'.$flag.');
</script>';
echo '<input  id="location_attr" value="" type="hidden">';
echo '<input  id="oranization_attr"  type="hidden" value="">';
echo '<input  id="major_attr"  type="hidden" value="">';
echo '<input  id="category_attr"  type="hidden" value="">';

}

function populateBatchInfo(){

	if($_REQUEST['hat_counting_batchs_id']){
		$bean_request=BeanFactory::getBean("HAT_Counting_Batchs",$_REQUEST['hat_counting_batchs_id']);

		$this->bean->name=$bean_request->name ;
		$this->bean->hat_counting_batchs_id_c=$bean_request->id ;
		$this->bean->counting_batch_name=$bean_request->name ;
		$this->bean->task_number=$bean_request->batch_number ;
		$this->bean->planed_start_date=$bean_request->planed_start_date ;
		$this->bean->planed_complete_date=$bean_request->planed_complete_date ;
		$this->bean->snapshot_date=$bean_request->snapshot_date ;
		$this->bean->objects_type=$bean_request->objects_type ;
		$this->bean->counting_by_location=$bean_request->counting_by_location ;
		$this->bean->counting_mode=$bean_request->counting_mode ;
		$this->bean->counting_scene=$bean_request->counting_scene ;
		$this->bean->offline_flag=$bean_request->offline_flag;
	}
}

/*function getAttrValue($id){
	$bean_task=BeanFactory::getBean("HAT_Counting_Tasks",$id);
	for ($i=1; $i<16 ; $i++) { 
		$att="attribute".$i;
		$attr=$bean_task->$att;
		echo '<script>
		$("#attribute'.$i.'").val("'.$attr.'");
	</script>';
}
}*/

}