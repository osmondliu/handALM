<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');

class HAM_WOOPViewList extends ViewList
{
    function Display() {
        global $app_list_strings;
        $this->ss->assign('APP_LIST', $app_list_strings);
        parent::Display();
    }

    function processSearchForm(){
      parent::processSearchForm();
      $haa_frameworks_id=$_SESSION["current_framework"];
        if ($this->where) { 
          $this->where.=" AND EXISTS( SELECT 1 FROM ham_wo w,ham_maint_sites h WHERE w.id = ham_woop.ham_wo_id AND ham_woop.ham_wo_id = w.id AND w.ham_maint_sites_id = h.id AND h.haa_frameworks_id ='".$haa_frameworks_id."')";
        }else{
          $this->where=" EXISTS( SELECT 1 FROM ham_wo w,ham_maint_sites h WHERE w.id = ham_woop.ham_wo_id AND ham_woop.ham_wo_id = w.id AND w.ham_maint_sites_id = h.id AND h.haa_frameworks_id ='".$haa_frameworks_id."')";
        }
    }
}
