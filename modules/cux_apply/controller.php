<?php
/**
* 
*/
class Cux_applyController extends SugarController
{
	public function pre_save()
	{
		if(!empty($_POST['assigned_user_id']) && $_POST['assigned_user_id'] != $this->bean->assigned_user_id && $_POST['assigned_user_id'] != $GLOBALS['current_user']->id && empty($GLOBALS['sugar_config']['exclude_notifications'][$this->bean->module_dir])){
			$this->bean->notify_on_save = true;
		}
		$GLOBALS['log']->debug("SugarController:: performing pre_save.");
        require_once('include/SugarFields/SugarFieldHandler.php');
        $sfh = new SugarFieldHandler();
        /*$data=$_POST;
        $checkflag=false;
        foreach ($data as $k => $v) {
        	if ($data['apply_date']>date('Y-m-d')) {
        		$checkflag=true;
        	}
        }
        if ($checkflag) {
        	echo "<script>";
        	echo "alert('日期不能大于当前日期');";
        	echo "window.history.back();";
        	echo "</script>";
        	exit;
        }*/
		foreach($this->bean->field_defs as $field => $properties) {
			$type = !empty($properties['custom_type']) ? $properties['custom_type'] : $properties['type'];
		    $sf = $sfh->getSugarField(ucfirst($type), true);
			if(isset($_POST[$field])) {
				if(is_array($_POST[$field]) && !empty($properties['isMultiSelect'])) {
					if(empty($_POST[$field][0])) {
						unset($_POST[$field][0]);
					}
					$_POST[$field] = encodeMultienumValue($_POST[$field]);
				}
				$this->bean->$field = $_POST[$field];
			} else if(!empty($properties['isMultiSelect']) && !isset($_POST[$field]) && isset($_POST[$field . '_multiselect'])) {
				$this->bean->$field = '';
			}
            if($sf != null){
                $sf->save($this->bean, $_POST, $field, $properties);
            }
		}

		foreach($this->bean->relationship_fields as $field=>$link){
			if(!empty($_POST[$field])){
				$this->bean->$field = $_POST[$field];
			}
		}
		if(!$this->bean->ACLAccess('save')){
			ACLController::displayNoAccess(true);
			sugar_cleanup(true);
		}
		$this->bean->unformat_all_fields();
	}
}