﻿/*function setAssetReturn(popupReplyData){
	set_return(popupReplyData);
	if($("#quantity").val()==""){
		$("#quantity").val("1.00");
	}
}
*/
function getQuantity(popupReplyData){
	console.log("getQuantity");
	console.log(popupReplyData);
	set_return(popupReplyData);
	/*$("#product").val(popupReplyData.name_to_value_array['product']);
    $("#product_id").val(popupReplyData.name_to_value_array['product_id']);
    $("#uom_id").val(popupReplyData.name_to_value_array['uom_id']);
    $("#uom_code").val(popupReplyData.name_to_value_array['uom_code']);*/

	if ( $("#product").val()!="" && $("#contract").val()!="") {
			$.ajax({//
				url : 'index.php?to_pdf=true&module=HAM_WO_Lines&action=getQuantity&contract_id='
						+ $("#contract_id").val()+'&product_id='+$("#product_id").val(),
				type:"POST",
				success : function(data) {
				    $("#quantity").val(data);
				},
				error : function() { // 失败
					$("#quantity").val("1.00");
					//alert('Error loading document');
				}
			});

		}
}

function getContract(popupReplyData){
	console.log("getContract");
	console.log(popupReplyData);
	set_return(popupReplyData);
	/*$("#product").val(popupReplyData.name_to_value_array['product']);
    $("#product_id").val(popupReplyData.name_to_value_array['product_id']);
    $("#uom_id").val(popupReplyData.name_to_value_array['uom_id']);
    $("#uom_code").val(popupReplyData.name_to_value_array['uom_code']);*/
    //选中合同之后,产品和数量要设置为空
    $("#product").val("");
	$("#product_id").val("");
	$("#quantity").val("");
	$("#uom_code").val("");
	$("#uom_id").val("");
	
}
/**
* 保存前验证
*/
function preValidateFunction(async_bool = false) {
		var result = true;
		var quantity_val=$("#quantity").val();
		if (quantity_val==''||parseInt(quantity_val)==0){
			result=false;
			var error_msg='数量不可为空并且不能为0';
			BootstrapDialog.alert({
								type : BootstrapDialog.TYPE_DANGER,
								title : SUGAR.language.get('app_strings',
										'LBL_EMAIL_ERROR_GENERAL_TITLE'),
								message : error_msg
							});
		}
		return result;
}

$(document).ready(function(){
	SUGAR.util.doWhen("typeof OverwriteSaveBtn == 'function'", function(){
                OverwriteSaveBtn(preValidateFunction);
            });

	$("#contract").blur(function(){
		if ($("#contract").val()=="") {

			$("#product").val("");
			$("#product_id").val("");
			$("#quantity").val("");
		}
	});

	$("#product").blur(function(){
		if ($("#product").val()!="" && $("#contract").val()!="") {
			$.ajax({//
				url : 'index.php?to_pdf=true&module=HAM_WO_Lines&action=getQuantity&contract_id='
						+ $("#contract_id").val()+'&product_id='+$("#product_id").val(),
				async : false,
				success : function(data) {
				    $("#quantity").val(data);
				},
				error : function() { // 失败
					$("#quantity").val("1.00");
					//alert('Error loading document');
				}
			});

		}
	});


});
