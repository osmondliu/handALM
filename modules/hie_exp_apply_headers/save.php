<?php
//****************** START: Save the header normally 写入头信息******************//
$sugarbean = new HIE_exp_apply_headers();
$sugarbean->retrieve($_POST['record']);

if(!$sugarbean->ACLAccess('Save')){//确认访问权限
    ACLController::displayNoAccess(true);
    sugar_cleanup(true);
}

if (!empty($_POST['assigned_user_id']) && ($focus->assigned_user_id != $_POST['assigned_user_id']) && ($_POST['assigned_user_id'] != $current_user->id)) {
    $check_notify = TRUE; //如果指定了负责人，并且与当前录入人不同，就通知对应的人员进行处理。
}else {
    $check_notify = FALSE;
}

require_once('include/formbase.php');
$sugarbean = populateFromPost('', $sugarbean);//调用populateFromPost写入POST的数据

$GLOBALS['log']->infor("Header Saved");
$sugarbean->save($check_notify);
$return_id = $sugarbean->id;
$GLOBALS['log']->debug("Saved header record with id of ".$return_id);
//****************** END: Save the header normally******************//

if (isset($_REQUEST['duplicateSave']) && $_REQUEST['duplicateSave'] === "true"){
    $base_header_id = $_REQUEST['relate_id'];//复制一个记录
}else{
    $base_header_id = $sugarbean->id;
}
$transLine = array();
save_lines($_POST,$sugarbean, 'line_');
handleRedirect($return_id, 'HIE_exp_apply_headers');

function save_lines($post_data, $parent, $key = ''){
    $line_count = isset($post_data[$key.'line_num']) ? count($post_data[$key.'line_num']) : 0; //判断记录的行数
    for ($i = 0; $i < $line_count; ++$i) {
        if ($post_data[$key.'line_num'][$i]!='' &&$post_data[$key.'item_type_code'][$i]!='') {
            if($post_data[$key.'deleted'][$i] == 1){//删除行
                $trans_line = new HIE_exp_apply_lines();
                $trans_line -> retrieve($post_data[$key.'id'][$i]);
                $trans_line -> mark_deleted($post_data[$key.'id'][$i]);
            } else {//新增或修改行
                if($post_data[$key.'id'][$i] == ''){//新增行
                    $trans_line = new HIE_exp_apply_lines();
                    $trans_line = BeanFactory::getBean('HIE_exp_apply_lines');
                } else {//修改行
                    $trans_line = new HIE_exp_apply_lines();
                    $trans_line -> retrieve($post_data[$key.'id'][$i]);
                }
                foreach($trans_line->field_defs as $field_def) { //循环对所有要素
                    $trans_line->$field_def['name'] = $post_data[$key.$field_def['name']][$i];
                    echo "<br/>".$field_def[name].'='. $post_data[$key.$field_def['name']][$i];
                }
                $trans_line->hie_exp_ap7509headers_ida = $parent->id;//父ID
            }
            $trans_line->save();
            $GLOBALS['log']->infor("transLine Saved");
        } else {
            //empty line jumped
        }
    }
}