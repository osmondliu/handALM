var prodln = 0;
var columnNum = 7;
var lineno;
if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}

function insertLineHeader_pri(tableid){
  $("#line_items2_label").hide();//隐藏SugarCRM字段

  tablehead = document.createElement("thead");
  tablehead.id = tableid +"_head";
  tablehead.style.display="none";
  document.getElementById(tableid).appendChild(tablehead);

  var x=tablehead.insertRow(-1);
  x.id='Line_head';
  var a=x.insertCell(0);
  a.innerHTML=SUGAR.language.get('HPR_Groups', 'LBL_PRI_MODULE');
  var b=x.insertCell(1);
  b.innerHTML=SUGAR.language.get('HPR_Groups', 'LBL_PRI_GROUP_MEMBER');
  var c=x.insertCell(2);
  c.innerHTML=SUGAR.language.get('HPR_Groups', 'LBL_PRI_NAME');
  var c=x.insertCell(3);
  c.innerHTML=SUGAR.language.get('HPR_Groups', 'LBL_PRI_SQL_STATEMENT_FOR_LISTVIEW');
  var b1=x.insertCell(4);
  b1.innerHTML=SUGAR.language.get('HPR_Groups', 'LBL_PRI_ENABLED_FLAG');
  var d=x.insertCell(5);
  d.innerHTML=SUGAR.language.get('HPR_Groups', 'LBL_PRI_DESCRIPTION');
  var f=x.insertCell(6);
  f.innerHTML='&nbsp;';
}


function insertLineData_pri(line_data ){ //将数据写入到对应的行字段中
  var ln = 0;
  if(line_data.id != '0' && line_data.id !== ''){
    ln = insertLineElements_pri("lineItems1");
    $("#linepri_id".concat(String(ln))).val(line_data.id);
    $("#linepri_privilige_module".concat(String(ln))).val(line_data.privilige_module);
    $("#linepri_member_name".concat(String(ln))).val(line_data.member_name);
    $("#linepri_name".concat(String(ln))).val(line_data.privilige_name);
    $("#linepri_sql_statement_for_listview".concat(String(ln))).val(line_data.sql_statement_for_listview);
    $("#linepri_enabled_flag".concat(String(ln))).attr('checked',line_data.enabled_flag==1?true:false);
    $("#linepri_enabled_flag".concat(String(ln))).val(line_data.enabled_flag);
    $("#linepri_description".concat(String(ln))).val(line_data.description);
    $("#linepri_hpr_group_members_id_c".concat(String(ln))).val(line_data.hpr_group_members_id_c);

    renderLine_pri(ln);
  }
}

function insertLineElements_pri(tableid) { //创建界面要素
//包括以下内容：1）显示头，2）定义SQS对象，3）定义界面显示的可见字段，4）界面行编辑器界面
if (document.getElementById(tableid + '_head') !== null) {
  document.getElementById(tableid + '_head').style.display = "";
}

tablebody = document.createElement("tbody");
tablebody.id = "linepri_body" + prodln;
document.getElementById(tableid).appendChild(tablebody);

var line_item_module_option = document.getElementById("modulehidden").value;

var z1 = tablebody.insertRow(-1);
z1.id = 'linepri_displayed' + prodln;
z1.className = 'oddListRowS1';
z1.innerHTML  =
"<td><span name='displayed_linepri_privilige_module[" + prodln + "]' id='displayed_linepri_privilige_module" + prodln + "'></span></td>" +
//"<td><select disabled='disabled' tabindex='116' name='displayed_linepri_privilige_module[" + prodln + "]' id='displayed_linepri_privilige_module" + prodln + "'>" + moduleList +"</select></td>"+
"<td><span name='displayed_linepri_member_name[" + prodln + "]' id='displayed_linepri_member_name" + prodln + "'></span></td>"+
"<td><span name='displayed_linepri_name[" + prodln + "]' id='displayed_linepri_name" + prodln + "'></span></td>"+
"<td><span name='displayed_linepri_sql_statement_for_listview[" + prodln + "]' id='displayed_linepri_sql_statement_for_listview" + prodln + "'></span></td>"+
"<td><span name='displayed_linepri_enabled_flag[" + prodln + "]' id='displayed_linepri_enabled_flag" + prodln + "'></span></td>"+
"<td><span name='displayed_linepri_description[" + prodln + "]' id='displayed_linepri_description" + prodln + "'></span></td>"+
"<td><input type='button' value='" + SUGAR.language.get('app_strings', 'LBL_EDITINLINE') + "' class='button'  id='btn_edit_linepri" + prodln +"' onclick='LineEditorShow_pri("+prodln+")'></td>";

  var x = tablebody.insertRow(-1); //以下生成的是Line Editor
  x.id = 'linepri_editor' + prodln;
  x.style = "display:none";

   //var expDateHTML='<script type="text/javascript" src="custom/resources/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>'+
  // '<link rel="stylesheet" type="text/css" href="custom/resources/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">'+
  // '<span class="input-group date" id="span_line_exp_date'+prodln+'">'+
  // "<label>"+SUGAR.language.get('hie_exp_apply_lines', 'LBL_EXP_DATE')+" <span class='required'>*</span></label>"+
  // '<input class="date_input" autocomplete="off" name="line_exp_date[' + prodln + ']" id="line_exp_date' + prodln + '" value="" title="" tabindex="116" type="text" onclick="CalendarShow(this)">'+
  // '<span class="input-group-addon">'+
  // '<span class="glyphicon glyphicon-calendar"></span>'+
  // '</span>'+
  // '</span>';

  x.innerHTML  = "<td colSpan='"+columnNum+"'><table id='privilige' width='100%'>"+
  "<tr>"+
    "<input name='linepri_id["+prodln+"]' id='linepri_id"+prodln+"' value='' type='hidden'>"+
    "<td>"+SUGAR.language.get('HPR_Groups', 'LBL_PRI_MODULE')+"<span class='required'>*</span></td>"+
    "<td><select tabindex='116' name='linepri_privilige_module[" + prodln + "]' id='displayed_line_item_type_code" + prodln + "'onchange='setDefaultName("+prodln+")'>" + line_item_module_option +"</select></td>"+
    //"<td><input name='linepri_privilige_module["+prodln+"]' class='sqsEnabled yui-ac-input' tabindex='0' id='linepri_privilige_module"+prodln+"' size='' value='' title='' autocomplete='off' accesskey='7' type='text'></td>"+
    "<td>"+SUGAR.language.get('HPR_Groups', 'LBL_PRI_GROUP_MEMBER')+"<span class='required'>*</span></td>"+
    "<td><input name='linepri_member_name["+prodln+"]' class='sqsEnabled yui-ac-input' tabindex='0' id='linepri_member_name"+prodln+"' size='' value='' title='' autocomplete='off' type='text' 'onchange='setDefaultName("+prodln+")'>"+
    "<input name='linepri_hpr_group_members_id_c["+prodln+"]' id='linepri_hpr_group_members_id_c"+prodln+"' type='hidden' value=''>"+
    "<button title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' tabindex='116' class='button' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' name='btn1' onclick='openMemberNamePopup(" + prodln + ");'><img src='themes/default/images/id-ff-select.png' alt='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "'></button>"+
    "</td>"+
  "</tr>"+
  "<tr>"+
    "<td>"+SUGAR.language.get('HPR_Groups', 'LBL_PRI_NAME')+"<span class='required'>*</span></td>"+
    "<td><input name='linepri_name["+prodln+"]' class='sqsEnabled yui-ac-input' tabindex='0' id='linepri_name"+prodln+"' size='' value='' title='' autocomplete='off' accesskey='7' type='text'></td>"+
    "<td>"+SUGAR.language.get('HPR_Groups', 'LBL_PRI_SQL_STATEMENT_FOR_LISTVIEW')+
    "<td><input name='linepri_sql_statement_for_listview["+prodln+"]' class='sqsEnabled yui-ac-input' tabindex='0' id='linepri_sql_statement_for_listview"+prodln+"' size='' value='' title='' autocomplete='off' type='text'></td>"+
  "</tr>"+
  "<tr>"+
    "<td>"+SUGAR.language.get('HPR_Groups', 'LBL_PRI_ENABLED_FLAG')+"<span class='required'>*</span></td>"+
    "<td><input name='linepri_enabled_flag["+prodln+"]'  id='linepri_enabled_flag"+prodln+"'  title='' value='' type='checkbox' checked></td>"+
    "<td>"+SUGAR.language.get('HPR_Groups', 'LBL_PRI_DESCRIPTION')+"</td>"+
    "<td><textarea id='linepri_description"+prodln+"' name='linepri_description["+prodln+"]' rows='2' cols='50' title='' tabindex='0' style='overflow: hidden;'></textarea></td>"+
    "</tr>"+
  "<tr>"+
    "<td><input type='hidden' id='linepri_deleted"+prodln+"' name='linepri_deleted["+prodln+"]'></td>"+
    "<td><input type='button' id='linepri_delete_line" + prodln + "' class='button btn_del' value='" + SUGAR.language.get('app_strings', 'LBL_DELETE_INLINE') + "' tabindex='116' onclick='btnMarkLineDeleted_pri(" + prodln + ",\"linepri_\")'>"+
    "<button type='button' id='btn_LineEditorClose_pri" + prodln + "' class='button btn_save' value='" + SUGAR.language.get('app_strings', 'LBL_CLOSEINLINE') + "' tabindex='116' onclick='LineEditorClose_pri(" + prodln + ",\"linepri_\")'>"+SUGAR.language.get('app_strings', 'LBL_SAVE_BUTTON_LABEL')+" & "+SUGAR.language.get('app_strings', 'LBL_CLOSEINLINE')+" <img src='themes/default/images/id-ff-clear.png' alt='" + SUGAR.language.get(module_sugar_grp1, 'LBL_REMOVE_PRODUCT_LINE') + "'></button></td>"+
  
  "</tr>"+
  "</table></td>";
    // console.log(x.innerHTML);
    addToValidate('EditView', 'linepri_privilige_module'+ prodln,'varchar', 'true',SUGAR.language.get('HPR_Groups', 'LBL_PRI_MODULE'));
    addToValidate('EditView', 'linepri_hpr_group_members_id_c'+ prodln,'id', 'true',SUGAR.language.get('HPR_Groups', 'LBL_PRI_GROUP_MEMBER'));
    addToValidate('EditView', 'linepri_name'+ prodln,'varchar', 'true',SUGAR.language.get('HPR_Groups', 'LBL_PRI_NAME'));
    addToValidate('EditView', 'linepri_enabled_flag'+ prodln,'bool', 'true',SUGAR.language.get('HPR_Groups', 'LBL_PRI_ENABLED_FLAG'));
    //addToValidate('EditView', 'line_amount'+ prodln,'float', 'true',SUGAR.language.get('hie_exp_apply_lines', 'LBL_AMOUNT'));

    renderLine_pri(prodln);
    setDefaultName(prodln);
    prodln++;

    return prodln - 1;
  }

function renderLine_pri(ln) { //将编辑器中的内容显示于正常行中
  $("#displayed_linepri_privilige_module"+ln).html($("#displayed_line_item_type_code"+ln).find("option:selected").html());
  $("#displayed_linepri_member_name"+ln).html($("#linepri_member_name"+ln).val());
  $("#displayed_linepri_name"+ln).html($("#linepri_name"+ln).val());
  $("#displayed_linepri_sql_statement_for_listview"+ln).html($("#linepri_sql_statement_for_listview"+ln).val());
  var flag=$("#linepri_enabled_flag"+ln).is(':checked')?"是":"否";
  $("#linepri_enabled_flag"+ln).val($("#linepri_enabled_flag"+ln).is(':checked')?"1":"0");
  $("#displayed_linepri_enabled_flag"+ln).html(flag);
  $("#displayed_linepri_description"+ln).html($("#linepri_description"+ln).val());
}

function insertLineFootor_pri(tableid)
{
  tablefooter = document.createElement("tfoot");
  document.getElementById(tableid).appendChild(tablefooter);

  var footer_row=tablefooter.insertRow(-1);
  var footer_cell = footer_row.insertCell(0);

  footer_cell.scope="row";
  footer_cell.colSpan=columnNum;
  footer_cell.innerHTML="<input id='btnAddNewLine_pri' type='button' class='button btn_del' onclick='addNewLine_pri(\"" +tableid+ "\")' value='+ "+SUGAR.language.get('HPR_Groups', 'LBL_BTN_ADD_LINE')+"' />";
}

function addNewLine_pri(tableid) {
  if (check_form('EditView')) {//只有必须填写的字段都填写了才可以新增
    insertLineElements_pri(tableid);//加入新行
    LineEditorShow_pri(prodln - 1);       //打开行编辑器
  }
}

// function CalendarShow(field) {//显示日历
//   var field_name='#span_'+field.getAttribute("id");
//   var Datetimepicker=$(field_name);
//   var dateformat="Y-m-d H:M";
//   dateformat = dateformat.replace(/Y/,"yyyy");
//   dateformat = dateformat.replace(/m/,"mm");
//   dateformat = dateformat.replace(/d/,"dd");
//   dateformat = dateformat.split(" ",1);
//   Datetimepicker.datetimepicker({
//    language: 'zh_CN',
//    format: dateformat[0],
//    showMeridian: true,
//    minView: 2,
//    todayBtn: true,
//    autoclose: true,
//  });
// }

function btnMarkLineDeleted_pri(ln, key) {//删除当前行
  if(confirm(SUGAR.language.get('app_strings','NTC_DELETE_CONFIRMATION'))) {
    markLineDeleted_pri(ln, key);
    LineEditorClose_pri(ln); 
  }
  else
  {
    return false;
  }
}
function markLineDeleted_pri(ln, key) {//删除当前行

  // collapse line; update deleted value
  document.getElementById(key + 'body' + ln).style.display = 'none';
  document.getElementById(key + 'deleted' + ln).value = '1';
  document.getElementById(key + 'delete_line' + ln).onclick = '';

  if (typeof validate != "undefined" && typeof validate['EditView'] != "undefined") {
    removeFromValidate('EditView','linepri_privilige_module'+ ln);
    removeFromValidate('EditView','linepri_hpr_group_members_id_c'+ ln);
    removeFromValidate('EditView','linepri_name'+ ln);
    removeFromValidate('EditView','linepri_enabled_flag'+ ln);
   // removeFromValidate('EditView','line_amount'+ ln);
  }
  resetLineNum_Bold_pri();

}

function LineEditorShow_pri(ln){ //显示行编辑器（先自动关闭所有的行编辑器，再打开当前行）
  if (prodln>1) {
    for (var i=0;i<prodln;i++) {
      LineEditorClose_pri(i);
    }
  }
  $("#linepri_displayed"+ln).hide();
  $("#linepri_editor"+ln).show();

}

function LineEditorClose_pri(ln) {//关闭行编辑器（显示为正常行）
  if (check_form('EditView')) {
    $("#linepri_editor"+ln).hide();
    $("#linepri_displayed"+ln).show();
    renderLine_pri(ln);
    resetLineNum_Bold_pri();
  }
}

function resetLineNum_Bold_pri() {//数行号
  var j=0;
  for (var i=0;i<prodln;i++) {
    if ($("#linepri_deleted"+i).val()!=1) {//跳过已经删除的行（实际数据还没有删除，只是从界面隐藏）
      j=j+1;
      $("#displayed_linepri_num" + i).text(j);
    }
  }
}

function openMemberNamePopup(ln){
  lineno=ln;
  var popupRequestData = {
    "call_back_function" : "setMemberNameReturn",
    "form_name" : "EditView",
    "field_to_name_array" : {
      "id":"linepri_hpr_group_members_id_c"+ln,
      "name" : "linepri_member_name" + ln,
    }
  };
  var member='&hpr_groups_hpr_group_members_name_advanced='+$("#name").val();
  open_popup('HPR_Group_Members', 800, 850, member, true, true, popupRequestData);
}

function setMemberNameReturn(popupReplyData){
  set_return(popupReplyData);
  setDefaultName(lineno);
}

function setDefaultName(ln){

var privilige_name=$("#displayed_line_item_type_code"+ln).find("option:selected").html();

  if ($("#linepri_member_name"+ln).val()) {
     privilige_name=$("#linepri_member_name"+ln).val();
  }
  $("#linepri_name"+ln).val(privilige_name);
}