	function setProductPopupReturn(popupReplyData){
		set_return(popupReplyData);//标准Popup-Return函数
		var line_description=$("#product_name").val()+' '+$("#amount").val();
		popupReplyData['name_to_value_array']['description']=line_description;
		//console.log(popupReplyData);
		set_return(popupReplyData);
	}

	function validateAmount(amounts) {
		var amount=$(amounts).val();
		$(amounts).css('background','#FFFFFF');
		if (amount>5000) {
			$(amounts).css('background','red');
		}else if(amount<=0){
			$(amounts).css('background','red');
		}
		return;
	}

	function changeDate(argument) {
		alert("修改了日期");
	}

	function CalendarShow(field) {//显示日历
	  var field_name='#span_'+field.getAttribute("id");
	  console.log(field_name);
	  var Datetimepicker=$(field_name);
	  var dateformat="Y-m-d";
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
