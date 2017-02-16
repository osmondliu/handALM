<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.edit.php');

class HAT_Counting_BatchsViewEdit extends ViewEdit
{
	function display()
	
	{	
		$snapshot_date;
		$upinterface_flag;
		require_once('modules/HAA_Frameworks/orgSelector_class.php');
		$current_framework_id = empty($this->bean->hat_framework_id)?"":$this->bean->hat_framework_id;
		$current_module = $this->module;
		$current_action = $this->action;
		$beanFramework = BeanFactory::getBean('HAA_Frameworks', $_SESSION["current_framework"]);
		if (isset($beanFramework)) {
			$bean_framework_id = $_SESSION["current_framework"];
			$bean_framework_name = $beanFramework->name;
		}
		$this->ss->assign('FRAMEWORK_C',set_framework_selector($current_framework_id,$current_module,$current_action,'haa_frameworks_id_c'));

		echo "<input id='line_framework' type='hidden' value='".$beanFramework->name."'/>";
		echo "<input id='policy_groups_id' type='hidden' value='".$beanFramework->hat_counting_policy_groups_id_c."'/>";
		echo "<input id='policy_groups_name' type='hidden' value='".$beanFramework->counting_policy_groups."'/>";

		$modules=array(
			'HAT_Counting_Batch_Rules',
			);	
		foreach($modules as $module){
			if(!is_file($GLOBALS['sugar_config']['cache_dir'].'jsLanguage/'.$module.'/'.$GLOBALS['current_language'].'.js')){
				require_once'include/language/jsLanguage.php';
				jsLanguage::createModuleStringsCache($module,$GLOBALS['current_language']);
			}
			echo'<script type="text/javascript"src="'.$GLOBALS['sugar_config']['cache_dir'].'jsLanguage/'.$module.'/'.$GLOBALS['current_language'].'.js?s='.$GLOBALS['js_version_key'].'&c='.$GLOBALS['sugar_config']['js_custom_version'].'&j='.$GLOBALS['sugar_config']['js_lang_version'].'"></script>';
		}
		if($this->bean->id!=''){
			$sql="SELECT 
			hcb.snapshot_date,
			hcb.upinterface_flag
			FROM hat_counting_batchs hcb
			where hcb.id='".$this->bean->id."'";
			$result=$this->bean->db->query($sql);
			$row=$this->bean->db->fetchByAssoc($result);
			$snapshot_date=$row["snapshot_date"];
			$upinterface_flag=$row["upinterface_flag"];
		}
		parent::display();
		$flag=$upinterface_flag==1?"true":"false";
		echo '<script>
			$("#snapshot_date").val("'.$snapshot_date.'");
			$("#upinterface_flag").val("'.$upinterface_flag.'");
			$("#upinterface_flag").attr("checked",'.$flag.');
			</script>';
	}
}