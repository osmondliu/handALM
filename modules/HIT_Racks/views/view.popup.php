<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.popup.php');

class HIT_RacksViewPopup extends ViewPopup
{


    function Display() {

 		global $mod_strings, $app_strings, $app_list_strings;
        global $db;
        global $popupMeta;

        
       if (isset($_REQUEST['current_mode'])&&$_REQUEST['current_mode']!="") {
        	//如果当前没有current_mode就按常规的列表显示
        	echo '<script src="modules/HAT_Assets/js/popup_view.js"></script>';
			echo 'owning_org_id= '.$_REQUEST['target_owning_org_id_advanced'];
			//if (isset($_REQUEST['target_owning_org_id_advanced'])&&$_REQUEST['target_owning_org_id_advanced']!="") {
				//echo '<script>var owning_org_id="'.$_REQUEST['target_owning_org_id_advanced'].'"</script>';
			//}
	       parent::Display();
        }
         else {
         	
         	//require_once('include/Popups/PopupSmarty.php');
        	insert_popup_header(null, false);

       		 require_once('modules/HAT_Asset_Locations/selector.php');
      		 //parent::Display();
      		 
        	
	    }
    }
}
