$.getScript("modules/HAA_FF/ff_include.js");

$(document).ready(function() {
    //这里可以有其它代码;
 
    //触发FF
    SUGAR.util.doWhen("typeof setFF == 'function'", function(){
        call_ff();
    });
});

//选择合同类型的回调函数
function setTasksTypePopupReturn(popupReplyData){
    set_return(popupReplyData);
    $("#parent_name_label").hide();
    call_ff();
}
 
function call_ff() {
    triger_setFF($("#haa_ff_id").val(),"Tasks");
    var type=$(".moduleTitle>h2").html();
    if (type!="新增") {
        $("#parent_name_label").hide();
    }
    $(".expandLink").click();
}