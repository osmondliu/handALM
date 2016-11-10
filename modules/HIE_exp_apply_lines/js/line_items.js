var prodln = 0;
var columnNum = 9 ;
if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}

function insertLineHeader(tableid){
  $("#line_items_label").hide();//隐藏SugarCRM字段

  tablehead = document.createElement("thead");
  tablehead.id = tableid +"_head";
  tablehead.style.display="none";
  document.getElementById(tableid).appendChild(tablehead);

  var x=tablehead.insertRow(-1);
  x.id='Line_head';
  var a=x.insertCell(0);
  a.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_LINE_NUM');
  var b=x.insertCell(1);
  b.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_ITEM_TYPE_CODE');
  var c=x.insertCell(2);
  c.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_NAME');
  var b1=x.insertCell(3);
  b1.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_EXP_DETE');
  var d=x.insertCell(4);
  d.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_AMOUNT');
  var e=x.insertCell(5);
  e.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_DESCRIPTION');
  var g=x.insertCell(6);
  g.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_PRODUCT_NAME');
  var h=x.insertCell(7);
  h.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_PRODUCT_NUMBER');
  var i=x.insertCell(8);
  i.innerHTML=SUGAR.language.get('HIE_exp_apply_lines', 'LBL_PRODUCT_CATEGORY');
  var j=x.insertCell(9);
  j.innerHTML='&nbsp;';
}


function insertLineData(line_data ){ //将数据写入到对应的行字段中
  var ln = 0;
  if(line_data.id != '0' && line_data.id !== ''){
    ln = insertLineElements("lineItems");
    $("#line_id".concat(String(ln))).val(line_data.id);
    $("#line_line_num".concat(String(ln))).val(line_data.line_num);
    $("#line_item_type_code".concat(String(ln))).val(line_data.item_type_code);
    $("#line_name".concat(String(ln))).val(line_data.exp_reason);
    $("#line_exp_date".concat(String(ln))).val(line_data.exp_date);
    $("#line_amount".concat(String(ln))).val(line_data.amount);
    $("#line_description".concat(String(ln))).val(line_data.description);
    $("#line_product_name".concat(String(ln))).val(line_data.product_name);
    $("#line_product_number".concat(String(ln))).val(line_data.product_number);
    $("#line_product_category".concat(String(ln))).val(line_data.product_category);
    $("#line_product_id".concat(String(ln))).val(line_data.product_id);
    $("#line_product_category_id".concat(String(ln))).val(line_data.product_category_id);
    renderLine(ln);
  }
}

function insertLineElements(tableid) { //创建界面要素
//包括以下内容：1）显示头，2）定义SQS对象，3）定义界面显示的可见字段，4）界面行编辑器界面
if (document.getElementById(tableid + '_head') !== null) {
  document.getElementById(tableid + '_head').style.display = "";
}
sqs_objects["line_product_name[" + prodln + "]"] = {//类似于popu
  "form": "EditView",
  "method": "query",
  "modules": ["AOS_Products"],//值列表来源模块
  "group": "or",
  "field_list": ["name", "id", "part_number","price","aos_product_category_id"],//来源模块的字段（不仅仅是数据库表字段）
  "populate_list": ["line_product_name[" + prodln + "]", "line_product_id[" + prodln + "]","line_product_number[" + prodln + "]","line_amount["+prodln+"]","line_product_category_id[" + prodln + "]"],//返回当前页面记录的对应字段
  "required_list": ["line_product_id[" + prodln + "]"],
  "conditions": [{
    "name": "name",
    "op": "like_custom",
    "end": "%",'begin': '%',
    "value": ""
  }],
  "order": "name",
  "limit": "30",//值列表显示的最大行数
  "post_onblur_function": "resetProduct(" + prodln + ");",//选择后自动触发的函数
  "no_match_text": "No Match"
};

tablebody = document.createElement("tbody");
tablebody.id = "line_body" + prodln;
document.getElementById(tableid).appendChild(tablebody);

var line_item_type_option = document.getElementById("explinetypeidden").value;

var z1 = tablebody.insertRow(-1);
z1.id = 'line1_displayed' + prodln;
z1.className = 'oddListRowS1';
z1.innerHTML  =
"<td><span name='displayed_line_num[" + prodln + "]' id='displayed_line_num" + prodln + "'></span></td>" +
"<td><select disabled='disabled' tabindex='116' name='displayed_line_item_type_code[" + prodln + "]' id='displayed_line_item_type_code" + prodln + "'>" + line_item_type_option +"</select></td>"+
"<td><span name='displayed_line_name[" + prodln + "]' id='displayed_line_name" + prodln + "'></span></td>"+
"<td><span name='displayed_line_exp_date[" + prodln + "]' id='displayed_line_exp_date" + prodln + "'></span></td>"+
"<td><span name='displayed_line_amount[" + prodln + "]' id='displayed_line_amount" + prodln + "'></span></td>"+
"<td><span name='displayed_line_description[" + prodln + "]' id='displayed_line_description" + prodln + "'></span></td>"+
"<td><span name='displayed_line_product_name[" + prodln + "]' id='displayed_line_product_name" + prodln + "'></span></td>"+
"<td><span name='displayed_line_product_number[" + prodln + "]' id='displayed_line_product_number" + prodln + "'></span></td>"+
"<td><span name='displayed_line_product_category[" + prodln + "]' id='displayed_product_category" + prodln + "'></span></td>"+
"<td><input type='button' value='" + SUGAR.language.get('app_strings', 'LBL_EDITINLINE') + "' class='button'  id='btn_edit_line" + prodln +"' onclick='LineEditorShow("+prodln+")'></td>";

  var x = tablebody.insertRow(-1); //以下生成的是Line Editor
  x.id = 'line_editor' + prodln;
  x.style = "display:none";
  var expDateHTML='<span class="input-group date" id="span_line_exp_date'+prodln+'">'+
  "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_EXP_DETE')+" <span class='required'>*</span></label>"+
  '<input class="date_input" autocomplete="off" name="line_exp_date[' + prodln + ']" id="line_exp_date' + prodln + '" value="" title="" tabindex="116" type="text" onclick="CalendarShow(this)">'+
  '<span class="input-group-addon">'+
  '<span class="glyphicon glyphicon-calendar"></span>'+
  '</span>'+
  '</span>';
  //console.log(columnNum);
  x.innerHTML  = "<td colSpan='"+columnNum+"'><div class='lineEditor'>"+
  "<span class='input_group'>"+
  "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_LINE_NUM')+" <span class='required'>*</span></label>"+
  "<input style='width:153px;'  autocomplete='off' type='text' name='line_line_num[" + prodln + "]' id='line_line_num" + prodln + "' maxlength='50' value='' title=''>"+
  "</span>"+
  "<span class='input_group'>"+
  "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_ITEM_TYPE_CODE')+" <span class='required'>*</span></label>"+
  "<select tabindex='116' name='line_item_type_code[" + prodln + "]' id='line_item_type_code" + prodln + "'>" + line_item_type_option + "</select>"+
  "</span>"+expDateHTML+
     "<span class='input_group'>"+
     "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_NAME')+" <span class='required'>*</span></label>"+
     "<input style=' width:153px;' type='text' name='line_name[" + prodln + "]' id='line_name" + prodln + "' maxlength='50' value='' title=''>"+
     "</span>"+
     "<span class='input_group'>"+
     "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_AMOUNT')+" <span class='required'>*</span></label>"+
     "<input style=' width:153px;' type='text' name='line_amount[" + prodln + "]' id='line_amount" + prodln + "' maxlength='50' value='' title='' onChange='validateAmount(this)'>"+
     "</span>"+
     "<span class='input_group'>"+
     "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_DESCRIPTION')+"</label>"+
     "<input style=' width:153px;' type='text' name='line_description[" + prodln + "]' id='line_description" + prodln + "' maxlength='50' value='' title=''>"+
     "</span>"+

     "<span class='input_group'>"+
    "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_PRODUCT_NAME')+"<span class='required'>*</span></label>"+
    "<input class='sqsEnabled' autocomplete='off' type='text' style='width:153px;' name='line_product_name[" + prodln + "]' id='line_product_name" + prodln + "' value='' title='' onblur='resetProduct("+prodln+")'>"+
    "<input type='hidden' name='line_product_id[" + prodln + "]' id='line_product_id" + prodln + "' value=''>"+
    "<button title='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_TITLE') + "' accessKey='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_KEY') + "' type='button' tabindex='116' class='button' value='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "' name='btn1' onclick='openProductPopup(" + prodln + ");'><img src='themes/default/images/id-ff-select.png' alt='" + SUGAR.language.get('app_strings', 'LBL_SELECT_BUTTON_LABEL') + "'></button>"+
    "</span>"+
    "<span class='input_group'>"+
    "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_PRODUCT_NUMBER')+"</label>"+
    "<input readonly='readonly' style=' width:153px;' type='text' name='line_product_number[" + prodln + "]' id='line_product_number" + prodln + "' maxlength='50' value='' title=''>"+
    "</span>"+
    "<span class='input_group'>"+
    "<label>"+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_PRODUCT_CATEGORY')+"</label>"+
    "<input readonly='readonly' style=' width:153px;' type='text' name='line_product_category[" + prodln + "]' id='line_product_category" + prodln + "' maxlength='50' value='' title=''>"+
    "</span>"+

     "<input type='hidden' name='line_deleted[" + prodln + "]' id='line_deleted" + prodln + "' value='0'>"+
     "<input type='hidden' name='line_id[" + prodln + "]' id='line_id" + prodln + "' value=''>"+

     "<input type='button' id='line_delete_line" + prodln + "' class='button btn_del' value='" + SUGAR.language.get('app_strings', 'LBL_DELETE_INLINE') + "' tabindex='116' onclick='btnMarkLineDeleted(" + prodln + ",\"line_\")'>"+
     "<button type='button' id='btn_LineEditorClose" + prodln + "' class='button btn_save' value='" + SUGAR.language.get('app_strings', 'LBL_CLOSEINLINE') + "' tabindex='116' onclick='LineEditorClose(" + prodln + ",\"line_\")'>"+SUGAR.language.get('app_strings', 'LBL_SAVE_BUTTON_LABEL')+" & "+SUGAR.language.get('app_strings', 'LBL_CLOSEINLINE')+" <img src='themes/default/images/id-ff-clear.png' alt='" + SUGAR.language.get(module_sugar_grp1, 'LBL_REMOVE_PRODUCT_LINE') + "'></button>"+

     "</div></td>";
     //console.log(x.innerHTML);
    addToValidate('EditView', 'line_line_num'+ prodln,'int', 'true',SUGAR.language.get('HIE_exp_apply_lines', 'LBL_LINE_NUM'));
    addToValidate('EditView', 'line_exp_date'+ prodln,'date', 'true',SUGAR.language.get('HIE_exp_apply_lines', 'LBL_EXP_DETE'));
    addToValidate('EditView', 'line_item_type_code'+ prodln,'varchar', 'true',SUGAR.language.get('HIE_exp_apply_lines', 'LBL_ITEM_TYPE_CODE'));
    addToValidate('EditView', 'line_amount'+ prodln,'float', 'true',SUGAR.language.get('HIE_exp_apply_lines', 'LBL_AMOUNT'));

    renderLine(prodln);

    prodln++;

    return prodln - 1;
  }

function renderLine(ln) { //将编辑器中的内容显示于正常行中
  
  $("#displayed_line_num"+ln).html($("#line_line_num"+ln).val());
  $("#displayed_line_item_type_code"+ln).val($("#line_item_type_code"+ln).val());
  $("#displayed_line_name"+ln).html($("#line_name"+ln).val());
  $("#displayed_line_exp_date"+ln).html($("#line_exp_date"+ln).val());
  $("#displayed_line_amount"+ln).html($("#line_amount"+ln).val());
  $("#displayed_line_description"+ln).html($("#line_description"+ln).val());
  $("#displayed_line_product_name"+ln).html($("#line_product_name"+ln).val());
  $("#displayed_line_product_number"+ln).html($("#line_product_number"+ln).val());
  $("#displayed_line_product_category"+ln).html($("#line_product_category"+ln).val());
}

function insertLineFootor(tableid)
{
  tablefooter = document.createElement("tfoot");
  document.getElementById(tableid).appendChild(tablefooter);

  var footer_row=tablefooter.insertRow(-1);
  var footer_cell = footer_row.insertCell(0);

  footer_cell.scope="row";
  footer_cell.colSpan=columnNum;
  footer_cell.innerHTML="<input id='btnAddNewLine' type='button' class='button btn_del' onclick='addNewLine(\"" +tableid+ "\")' value='+ "+SUGAR.language.get('HIE_exp_apply_lines', 'LBL_BTN_ADD_LINE')+"' />";
}

function addNewLine(tableid) {  
  if (check_form('EditView')) {//只有必须填写的字段都填写了才可以新增
    insertLineElements(tableid);//加入新行
    LineEditorShow(prodln - 1);       //打开行编辑器
  }
}

function CalendarShow(field) {//显示日历
  var field_name='#span_'+field.getAttribute("id");
  var Datetimepicker=$(field_name);
  var dateformat="Y-m-d H:M";
  dateformat = dateformat.replace(/Y/,"yyyy");
  dateformat = dateformat.replace(/m/,"mm");
  dateformat = dateformat.replace(/d/,"dd");
  dateformat = dateformat.split(" ",1);
  Datetimepicker.datetimepicker({
   language: 'zh_CN',
   format: dateformat[0],
   showMeridian: true,
   minView: 2,
   todayBtn: true,
   autoclose: true,
 });
}

function btnMarkLineDeleted(ln, key) {//删除当前行
  if(confirm(SUGAR.language.get('app_strings','NTC_DELETE_CONFIRMATION'))) {
    markLineDeleted(ln, key);
    LineEditorClose(ln); 
  }
  else
  {
    return false;
  }
}
function markLineDeleted(ln, key) {//删除当前行

  // collapse line; update deleted value
  document.getElementById(key + 'body' + ln).style.display = 'none';
  document.getElementById(key + 'deleted' + ln).value = '1';
  document.getElementById(key + 'delete_line' + ln).onclick = '';

  if (typeof validate != "undefined" && typeof validate['EditView'] != "undefined") {
    removeFromValidate('EditView','line_line_num'+ ln);
    removeFromValidate('EditView','line_exp_date'+ ln);
    removeFromValidate('EditView','line_item_type_code'+ ln);
    removeFromValidate('EditView','line_amount'+ ln);
  }
  resetLineNum_Bold();

}

function LineEditorShow(ln){ //显示行编辑器（先自动关闭所有的行编辑器，再打开当前行）
  if (prodln>1) {
    for (var i=0;i<prodln;i++) {
      LineEditorClose(i);
    }
  }
  $("#line1_displayed"+ln).hide();
  $("#line_editor"+ln).show();

}

function LineEditorClose(ln) {//关闭行编辑器（显示为正常行）
  if (check_form('EditView')) {
    $("#line_editor"+ln).hide();
    $("#line1_displayed"+ln).show();
    renderLine(ln);
    resetLineNum_Bold();
  }
}

function resetLineNum_Bold() {//数行号
  var j=0;
  for (var i=0;i<prodln;i++) {
    if ($("#line_deleted"+i).val()!=1) {//跳过已经删除的行（实际数据还没有删除，只是从界面隐藏）
      j=j+1;
      $("#displayed_line_num" + i).text(j);
    }
  }
}
function openProductPopup(ln){
  var popupRequestData = {
    "call_back_function" : "setProductReturn",//回调函数
    "form_name" : "EditView",
    "field_to_name_array" : {
      "id" : "line_product_id" + ln,
      "name" : "line_product_name" + ln,
      "part_number" : "line_product_number" + ln,
      "aos_product_category_name" : "line_product_category" + ln,
      "aos_product_category_id" : "line_product_category_id" + ln,
      "description":"line_description"+ln,
      "price":"line_amount"+ln,
    }
  };
  open_popup('AOS_Products', 600, 650, '', true, true, popupRequestData);
}

function setProductReturn(popupReplyData){
  popupReplyData["name_to_value_array"]["line_description0"]=popupReplyData["name_to_value_array"]["line_product_name0"]+popupReplyData["name_to_value_array"]["line_amount0"];
  set_return(popupReplyData);//标准的POPUP 返回函数
  //console.log(popupReplyData);
  resetProduct(lineno);
}
//在用户重新选择产品之后，需要联动更新相关的字段信息
function resetProduct(ln){  
//如果产品字段为空，则将所有关联的字段全部清空
if ($("#line_product_name"+ln).val()=== '') { 
    $("#line_product_id"+ln).val("");
    $("#line_product_number"+ln).val("");
    $("#line_product_category"+ln).val("");
    $("#line_product_category_id"+ln).val("");
    $("#line_description"+ln).val("");
  }
}

