var prodln=0;
var columnNum=6;
if(typeofsqs_objects=='undefined'){var sqs_objects=newArray;}

function insertLineHeader(tableid){
$("#line_items_label").hide();//隐藏SugarCRM字段

tablehead=document.createElement("thead");
tablehead.id=tableid+"_head";
//tablehead.style.display="none";
document.getElementById(tableid).appendChild(tablehead);

var x=tablehead.insertRow(-1);
x.id='Line_head';
var a=x.insertCell(0);
a.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_DOC_NAME');;
var b=x.insertCell(1);
b.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_FILENAME');
var b1=x.insertCell(2);
b1.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_CATEGORY_VALUE');
var c=x.insertCell(3);
c.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_DOC_STATUS');
var d=x.insertCell(4);
d.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_ACTIVE_DATE');
/*var b1=x.insertCell(3);
b1.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_CATEGORY_VALUE');
var d=x.insertCell(4);
d.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_DOC_STATUS');
var e=x.insertCell(5);
e.innerHTML=SUGAR.language.get('HAOS_Insurances','LBL_FILENAME');*/
var f=x.insertCell(5);
f.innerHTML='&nbsp;';
}


function insertLineData(line_data){//将数据写入到对应的行字段中
	var ln=0;
	//alter(line_data);
	if(line_data.id!='0'&&line_data.id!==''){
		ln=insertLineElements("lineItems");
		//$("#line_id".concat(String(ln))).val(line_data.id);
		$("#line_document_name".concat(String(ln))).val(line_data.document_name);
		$("#line_file_name".concat(String(ln))).val(line_data.file_name);
		$("#line_category_code".concat(String(ln))).val(line_data.category_id);
		$("#line_status_code".concat(String(ln))).val(line_data.status_id);
		$("#line_active_date".concat(String(ln))).val(line_data.active_date);
		$("#line_description".concat(String(ln))).val(line_data.description);
        $("#line_revision".concat(String(ln))).val(line_data.revision);
		renderLine(ln);
	}
}

function insertLineElements(tableid){//创建界面要素
//包括以下内容：1）显示头，2）定义SQS对象，3）定义界面显示的可见字段，4）界面行编辑器界面
if(document.getElementById(tableid+'_head')!==null){
	document.getElementById(tableid+'_head').style.display="";
}

tablebody=document.createElement("tbody");
tablebody.id="line_body"+prodln;
document.getElementById(tableid).appendChild(tablebody);

var line_status_option=document.getElementById("documentstatus").value;
var line_category_option=document.getElementById("documentcategory").value;

var z1=tablebody.insertRow(-1);
z1.id='line1_displayed'+prodln;
z1.className='oddListRowS1';
z1.innerHTML=
"<td><span name='displayed_line_document_name["+prodln+"]'id='displayed_line_document_name"+prodln+"'></span></td>"+
"<td><span name='displayed_line_file_name["+prodln+"]'id='displayed_line_file_name"+prodln+"'></span></td>"+
"<td><select disabled='disabled'tabindex='116'name='displayed_line_category_code["+prodln+"]'id='displayed_line_category_code"+prodln+"'>"+line_category_option+"</select></td>"+
"<td><select disabled='disabled'tabindex='116'name='displayed_line_status_code["+prodln+"]'id='displayed_line_status_code"+prodln+"'>"+line_status_option+"</select></td>"+
//"<td><span name='displayed_line_status_code["+prodln+"]'id='displayed_line_status_code"+prodln+"'></span></td>"+
"<td><span name='displayed_line_active_date["+prodln+"]'id='displayed_line_active_date"+prodln+"'></span></td>"+
"<td><input type='button'value='"+SUGAR.language.get('app_strings','LBL_EDITINLINE')+"'class='button'id='btn_edit_line"+prodln+"'onclick='LineEditorShow("+prodln+")'></td>";

var x=tablebody.insertRow(-1);//以下生成的是LineEditor
x.id='line_editor'+prodln;
x.style="display:none";

var expDateHTML='<script type="text/javascript" src="custom/resources/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>'+
'<link rel="stylesheet" type="text/css" href="custom/resources/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">'+
'<span class="input-groupdate" id="span_line_active_date'+prodln+'">'+
"<label>"+SUGAR.language.get('HAOS_Insurances','LBL_ACTIVE_DATE')+"<span class='required'>*</span></label>"+
'<input class="date_input" autocomplete="off" name="line_active_date['+prodln+']" id="line_active_date'+prodln+'"value=""title=""tabindex="116"type="text"onclick="CalendarShow(this)">'+
'<span class="input-group-addon">'+
'<span class="glyphicon glyphicon-calendar"></span>'+
'</span>'+
'</span>';

x.innerHTML="<tdcolSpan='"+columnNum+"'><div class='lineEditor'>"+
"<span class='input_group'>"+
"<label>"+SUGAR.language.get('HAOS_Insurances','LBL_DOC_NAME')+"<span class='required'>*</span></label>"+
"<input style='width:153px;'type='text'name='line_document_name["+prodln+"]'id='line_document_name"+prodln+"'maxlength='50'value=''title=''>"+
"</span>"+
"<span class='input_group'>"+
"<label>"+SUGAR.language.get('HAOS_Insurances','LBL_FILENAME')+"<span class='required'>*</span></label>"+
"<input style='width:153px;'type='text'name='line_file_name["+prodln+"]'id='line_file_name"+prodln+"'maxlength='50'value=''title='呵呵'>"+
"</span>"+
"<span class='input_group'>"+
"<label>"+SUGAR.language.get('HAOS_Insurances','LBL_CATEGORY_VALUE')+"</label>"+
"<select tabindex='116'name='line_category_code["+prodln+"]'id='line_category_code"+prodln+"'>"+line_category_option+"</select>"+
"</span>"+
"<span class='input_group'>"+
"<label>"+SUGAR.language.get('HAOS_Insurances','LBL_DOC_STATUS')+"<span class='required'>*</span></label>"+
"<select tabindex='116'name='line_status_code["+prodln+"]'id='line_status_code"+prodln+"'>"+line_status_option+"</select>"+
"</span>"+
expDateHTML+
"<span class='input_group'>"+
"<label>"+SUGAR.language.get('HAOS_Insurances','LBL_DOC_VERSION')+"<span class='required'>*</span></label>"+
"<input style='width:153px;'type='text'name='line_revision["+prodln+"]'id='line_revision"+prodln+"'maxlength='50'value=''title=''>"+
"</span>"+
"<span class='input_group'>"+
"<label>"+SUGAR.language.get('HAOS_Insurances','LBL_DOC_DESCRIPTION')+"</label>"+
"<input style='width:153px;'type='text'name='line_description["+prodln+"]'id='line_description"+prodln+"'maxlength='50'value=''title=''>"+
"</span>"+
"<input type='hidden'name='line_deleted["+prodln+"]'id='line_deleted"+prodln+"'value='0'>"+
"<input type='hidden'name='line_id["+prodln+"]'id='line_id"+prodln+"'value=''>"+

"<input type='button'id='line_delete_line"+prodln+"'class='buttonbtn_del'value='"+SUGAR.language.get('app_strings','LBL_DELETE_INLINE')+"'tabindex='116'onclick='btnMarkLineDeleted("+prodln+",\"line_\")'>"+
"<button type='button'id='btn_LineEditorClose"+prodln+"'class='buttonbtn_save'value='"+SUGAR.language.get('app_strings','LBL_CLOSEINLINE')+"'tabindex='116'onclick='LineEditorClose("+prodln+",\"line_\")'>"+SUGAR.language.get('app_strings','LBL_SAVE_BUTTON_LABEL')+"&"+SUGAR.language.get('app_strings','LBL_CLOSEINLINE')+"<imgsrc='themes/default/images/id-ff-clear.png'alt='"+SUGAR.language.get(module_sugar_grp1,'LBL_REMOVE_PRODUCT_LINE')+"'></button>"+

"</div></td>";
console.log(x.innerHTML);
addToValidate('EditView','line_status_code'+prodln,'varchar','true',SUGAR.language.get('HAOS_Insurances','LBL_DOC_STATUS'));

/*addToValidate('EditView','line_line_num'+prodln,'int','true',SUGAR.language.get('hie_exp_apply_lines','LBL_LINE_NUM'));
addToValidate('EditView','line_exp_date'+prodln,'date','true',SUGAR.language.get('hie_exp_apply_lines','LBL_EXP_DATE'));
addToValidate('EditView','line_status_code'+prodln,'varchar','true',SUGAR.language.get('HAOS_Insurances','LBL_DOC_STATUS'));
addToValidate('EditView','line_amount'+prodln,'float','true',SUGAR.language.get('hie_exp_apply_lines','LBL_AMOUNT'));
*/
renderLine(prodln);

prodln++;

return prodln-1;
}

function renderLine(ln){//将编辑器中的内容显示于正常行中

	$("#displayed_line_document_name"+ln).html($("#line_document_name"+ln).val());
	$("#displayed_line_file_name"+ln).html($("#line_file_name"+ln).val());
	$("#displayed_line_category_code"+ln).val($("#line_category_code"+ln).val());
	$("#displayed_line_status_code"+ln).val($("#line_status_code"+ln).val());
	$("#displayed_line_active_date"+ln).html($("#line_active_date"+ln).val());
}

function insertLineFootor(tableid)
{
	tablefooter=document.createElement("tfoot");
	document.getElementById(tableid).appendChild(tablefooter);

	var footer_row=tablefooter.insertRow(-1);
	var footer_cell=footer_row.insertCell(0);

	footer_cell.scope="row";
	footer_cell.colSpan=columnNum;
	footer_cell.innerHTML="<input id='btnAddNewLine'type='button'class='buttonbtn_del'onclick='addNewLine(\""+tableid+"\")'value='+"+SUGAR.language.get('HAOS_Insurances','LBL_NEW_LINE')+"'/>";
}

function addNewLine(tableid){
if(check_form('EditView')){//只有必须填写的字段都填写了才可以新增
insertLineElements(tableid);//加入新行
LineEditorShow(prodln-1);//打开行编辑器
}
}

function CalendarShow(field){//显示日历
	var field_name='#span_'+field.getAttribute("id");
	var Datetimepicker=$(field_name);
	//var dateformat="Y-m-d H:M";
	var dateformat = "yyyy-mm-dd";
	/*dateformat=dateformat.replace(/Y/,"yyyy");
	dateformat=dateformat.replace(/m/,"mm");
	dateformat=dateformat.replace(/d/,"dd");
	dateformat=dateformat.split(" ",1);*/
	Datetimepicker.datetimepicker({
		language:'zh_CN',
		format:dateformat,
		showMeridian:true,
		minView:2,
		todayBtn:true,
		autoclose:true,
	});
}

function btnMarkLineDeleted(ln,key){//删除当前行
	if(confirm(SUGAR.language.get('app_strings','NTC_DELETE_CONFIRMATION'))){
		markLineDeleted(ln,key);
		LineEditorClose(ln);
	}
	else
	{
		return false;
	}
}
function markLineDeleted(ln,key){//删除当前行

//collapseline;updatedeletedvalue
document.getElementById(key+'body'+ln).style.display='none';
document.getElementById(key+'deleted'+ln).value='1';
document.getElementById(key+'delete_line'+ln).onclick='';

if(typeofvalidate!="undefined"&&typeofvalidate['EditView']!="undefined"){
	//removeFromValidate('EditView','line_line_num'+ln);
	//removeFromValidate('EditView','line_exp_date'+ln);
	removeFromValidate('EditView','line_status_code'+ln);
	//removeFromValidate('EditView','line_amount'+ln);
}
resetLineNum_Bold();

}

function LineEditorShow(ln){//显示行编辑器（先自动关闭所有的行编辑器，再打开当前行）
	if(prodln>1){
		for(vari=0;i<prodln;i++){
			LineEditorClose(i);
		}
	}
	$("#line1_displayed"+ln).hide();
	$("#line_editor"+ln).show();

}

function LineEditorClose(ln){//关闭行编辑器（显示为正常行）
	if(check_form('EditView')){
		$("#line_editor"+ln).hide();
		$("#line1_displayed"+ln).show();
		renderLine(ln);
		resetLineNum_Bold();
	}
}

function resetLineNum_Bold(){//数行号
	var j=0;
	for(var i=0;i<prodln;i++){
if($("#line_deleted"+i).val()!=1){//跳过已经删除的行（实际数据还没有删除，只是从界面隐藏）
	j=j+1;
	$("#displayed_line_num"+i).text(j);
}
}
}

