<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.popup.php');

class HAT_Asset_LocationsViewPopup extends ViewPopup
{

    function Display() {

      global $mod_strings, $app_strings, $app_list_strings;
        global $db;
       //如果是HAT_Counting_Tasks模块，则做树形结构
       if(/*$_GET['module_name'] =='HAT_Counting_Tasks'||*/ $_GET['module_name'] =='HAT_Counting_Batchs'){
        //var_dump($_SESSION["location_attr_id"]);
/*        if(($this->bean instanceOf SugarBean) && !$this->bean->ACLAccess('list')){
            ACLController::displayNoAccess();
            sugar_cleanup(true);
        }
*/     /* if (isset($_REQUEST['allnodes']) &&($_REQUEST['allnodes']=='1'||$_REQUEST['allnodes']=='true')){
            echo "<script>var allnodes=true;</script>";
        }else {
            echo "<script>var allnodes=false;</script>";
        }*/
        echo "<script>var allnodes=true;</script>";
        /***************************************************************/
        /* 以下为自定义的界面 
        /*****************************************************************/
        echo ('<script type="text/javascript" src="include/javascript/popup_helper.js"></script>');
        echo '<form id="popup_query_form" name="popup_query_form">';
        echo '<h3>'.$mod_strings['LBL_SEARCH_FORM_TITLE'].'</h3>';
        //'.$_REQUEST['basic_type_advanced'].'
        echo ('<div style="font-size:larger" id="PopupView" eventtype="AT_MOVE" eventtype_name="'.$mod_strings['LBL_MODULE_NAME'].'"></div>');
        //这个是放置树型控件的容器

        echo '<input type="text" name="eventtype_selected"  tabindex="0" id="eventtype_selected" size="" value="" title="" autocomplete="off">';
        echo '<input type="button" name="btn_submit" id="btn_submit" value="'.$app_strings['LBL_ID_FF_SELECT'].'" class="yui-ac-input" onclick="btn_submit_clicked()">';
        //以上是选择框

        echo '<input type="hidden" name="module" value="HAT_Asset_Locations">';
        echo '<input type="hidden" name="action" value="Popup">';
        echo '<input type="hidden" name="request_data" >'; //所有的参数都存在在这里，参数会被自动填充

        echo '</form>';


        /***************************************************************/
        /* 以下为加载数据 
        /*****************************************************************/
        $txt_jason='{name:"'.$mod_strings['LBL_MODULE_NAME'].'", open:false, isParent:true,pId:0,id:"ROOT"},';
       /* $txt_jason='{name:"'.$_SESSION["location_attr_name"].'", open:false, isParent:true,pId:0,id:"'.$_SESSION["location_attr_id"].'"},';*/
        $sql="SELECT
        hms.haa_frameworks_id,
        hal.*
        FROM
        ham_maint_sites hms,
        hat_asset_locations hal
        WHERE
        hal.ham_maint_sites_id = hms.id
        AND hms.haa_frameworks_id='".$_SESSION["current_framework"]."'
        AND hal.asset_node=1
        AND hal.deleted = 0
        AND hms.deleted = 0";
        $result=$db->query($sql);
        $resArr="";
        while($row=$db->fetchByAssoc($result)){
            $txt_jason.="{";
            foreach ($row as $k => $v) {
                if ($k == 'parent_location_id'){
                            //Parent_eventtype_id需要特别处理
                    $txt_jason .= 'pId:"'.($v==""?"'ROOT'":$v).'",';
                }else {
                    if (isset($k)) {
                        $txt_jason .=$k.':"'.$v.'",';
                    }
                }
            }
            $txt_jason  = substr($txt_jason,0,strlen($txt_jason)-1);
            $txt_jason.="},";
        }
            $txt_jason  = substr($txt_jason,0,strlen($txt_jason)-1);//去除最后一个,
            $txt_jason .= "}";
            $txt_jason=substr($txt_jason,0,strlen($txt_jason)-1);
            $txt_jason='['.$txt_jason.']';
            echo('<script>var zNodes = '.$txt_jason.'</script>');
            echo ('<script type="text/javascript" src="modules/HAT_Asset_Locations/js/Locations_popupview.js"></script>');//
       }else{
            echo '<script src="modules/HAT_Asset_Locations/js/popup_view.js"></script>';
            if(!empty($_REQUEST["site_type"])){
                echo '<script> var site_type="'.$_REQUEST["site_type"].'";</script>';
            }
            parent::Display();
        }
    }
    
    
    function process() {

        global $mod_strings, $app_strings, $app_list_strings;
        global $db;
        global $popupMeta;

        //$popupMeta["whereStatement"].='access_assets_id="'.$_REQUEST["access_assets_id_advanced"].'"';
        //if(isset($_REQUEST["access_assets_name_advanced"])&&!empty($_REQUEST["access_assets_name_advanced"])){
        //  $popupMeta["whereStatement"].='(access_assets_name="'.$_REQUEST["hat_asset_name_advanced"].'" or hat_asset_name="'.$_REQUEST["hat_asset_name_advanced"].'")';
        //}
        //$popupMeta["whereStatement"].=' 2=1';
        //$_SESSION['Accounts2_QUERY'].=" AND 1=2";
        parent::process();
        //echo $popupMeta["whereStatement"];
        //echo "where".$popupMeta->_get_where_clause();
        //echo "REQUEST".var_dump($_SESSION);
        
        
        //echo  $_REQUEST["access_assets_name_advanced"];
        
        //echo var_dump(file_exists('modules/' . $this->module . '/Popup_picker.php'));
        //echo print_r($_SESSION);
        

        //echo print_r($_SESSION['HAT_Asset_Locations2_QUERY']);
        //echo print_r($_REQUEST);
    }

}