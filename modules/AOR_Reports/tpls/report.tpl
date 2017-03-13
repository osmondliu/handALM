<script src="modules/AOR_Conditions/conditionLines.js"></script>
<script src="modules/HAOR_Parameters/parameterLines.js"></script>
<script src="include/javascript/jquery/jquery.form.js"></script> 
<script src="custom/resources/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> 
<link rel="stylesheet" type="text/css" href="custom/resources/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">

<script>
    report_module = '{$report_module}';
</script>

<div>
    {$charts_content}
</div>
<!--Add By ling.zhang01 20161227-->
 <input type="hidden" id="report_type" name="report_type" value="">
 <div class="modal" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:100%">
      <div class="modal-dialog">
        <div class="modal-content" style="width: 250px; height:90px; margin:250px 50px 40px 250px ; ">
          <img src="themes/SuiteR_HANDALM/images/img_loading.gif?v=6T2wqZkzRRtQXSbbOJRC2A" align="absmiddle" style="margin:40px 0px 40px 50px ; "> 
                <b>数据生成中, 请等待...</b>
        </div>
      </div>
</div>
<!--Add Instance By ling.zhang01 20161227 End-->
<div id='detailpanel_parameters' class='detail view  detail508 expanded hidden'>
    <form onsubmit="return false" id="EditView" name="EditView">
    <h4>
        <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel('parameters');">
            <img border="0" id="detailpanel_parameters_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
        <a href="javascript:void(0)" class="expandLink" onclick="expandPanel('parameters');">
            <img border="0" id="detailpanel_parameters_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
        {sugar_translate label='LBL_PARAMETERS' module='AOR_Reports'}
        <script>
            document.getElementById('detailpanel_parameters').className += ' expanded';
        </script>
    </h4>
    <div id="conditionLines" class="panelContainer" style="min-height: 50px;">
    </div>
    <input id='updateParametersButton' class="panelContainer" type="button" value="{sugar_translate label='LBL_UPDATE_PARAMETERS' module='AOR_Reports'}"/>
        <script>
            {literal}
            $("#report_type").val(reportType);
            //Update By ling.zhang01 20170110
            if (reportType == 'Custom'){
                loadCParameterHead();
                $.each(reportParameters,function(key,val){
                   loadCParameterLine(val);
                });
            }else{
                $.each(reportParameters,function(key,val){
                  loadConditionLine(val, 'EditView');
                });
            }
            //Update Instance By ling.zhang01 20161227 End
            $(document).ready(function() {
                $('#updateParametersButton').click(function(){
                    //Update the Detail view form to have the parameter info and reload the page
                    var _form = $('#formDetailView');
                    _form.find('input[name=action]').val('DetailView');
                    //Add each parameter to the form in turn
                    $('.aor_conditions_id').each(function(index, elem){
                        $elem = $(elem);
                        var ln = $elem.attr('id').substr(17);
                        var id = $elem.val();
                        _form.append('<input type="hidden" name="parameter_id[]" value="'+id+'">');
                        var operator = $("#aor_conditions_operator\\["+ln+"\\]").val();
                        _form.append('<input type="hidden" name="parameter_operator[]" value="'+operator+'">');
                        var fieldType = $('#aor_conditions_value_type\\['+ln+'\\]').val();
                        _form.append('<input type="hidden" name="parameter_type[]" value="'+fieldType+'">');
                        var fieldInput = $('#aor_conditions_value\\['+ln+'\\]').val();

                        // Fix for issue #1272 - AOR_Report module cannot update Date type parameter.
                        if($('#aor_conditions_value\\['+ln+'\\]\\[0\\]').length){
                            var fieldValue = $('#aor_conditions_value\\['+ln+'\\]\\[0\\]').val();
                            var fieldSign = $('#aor_conditions_value\\['+ln+'\\]\\[1\\]').val();
                            var fieldNumber = $('#aor_conditions_value\\['+ln+'\\]\\[2\\]').val();
                            var fieldTime = $('#aor_conditions_value\\['+ln+'\\]\\[3\\]').val();                            _form.append('<input type="hidden" name="parameter_value[]" value="'+fieldValue+'">');
                            _form.append('<input type="hidden" name="parameter_value[]" value="'+fieldSign+'">');
                            _form.append('<input type="hidden" name="parameter_value[]" value="'+fieldNumber+'">');
                            _form.append('<input type="hidden" name="parameter_value[]" value="'+fieldTime+'">');
                        }
                        // Fix for issue #1082 - change local date format to db date format
                        if($('#aor_conditions_value\\['+index+'\\]').hasClass('date_input')) { // only change to DB format if its a date
                            if ($('#aor_conditions_value\\[' + ln + '\\]').hasClass('date_input')) {
                                fieldInput = $.datepicker.formatDate('yy-mm-dd', new Date(fieldInput));
                            }
                        }
                        _form.append('<input type="hidden" name="parameter_value[]" value="'+fieldInput+'">');
                    });
                    _form.submit();
                });

                // Make sure to change dates back to the user format
                $('.aor_conditions_id').each(function(index, elem){
                    if($('#aor_conditions_value\\['+index+'\\]').hasClass('date_input')) {
                        var dateValue = new Date( $('#aor_conditions_value\\['+index+'\\]').val() );
                        var dateValueinUserFormat = dateValue.toLocaleFormat(cal_date_format);
                        $('#aor_conditions_value\\['+index+'\\]').val(dateValueinUserFormat)
                    }
                });
            });
            {/literal}
        </script>
    <script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel('parameters', 'expanded'); {rdelim}); </script>
    </form>
</div>
 
<div id='detailpanel_report' class='detail view  detail508 expanded'>
    {counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
    <h4>
        <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel('report');">
            <img border="0" id="detailpanel_report_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
        <a href="javascript:void(0)" class="expandLink" onclick="expandPanel('report');">
            <img border="0" id="detailpanel_report_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
        {sugar_translate label='LBL_REPORT' module='AOR_Reports'}
        <script>
            document.getElementById('detailpanel_report').className += ' expanded';
        </script>
    </h4>
    <table id='FIELDS' class="panelContainer" cellspacing='{$gridline}'>
        {counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
        {counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
        {capture name="tr" assign="tableRow"}
            <tr>
                {counter name="fieldsUsed"}
                <td width='37.5%' colspan='4' >
                    {if !$fields.field_lines.hidden}
                        {counter name="panelFieldCount"}
                        <span id='field_lines_span'>
{$fields.field_lines.value}
                            {$report_content}
</span>
                    {/if}
                </td>
            </tr>
        {/capture}
        {if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
            {$tableRow}
        {/if}
    </table>
    <script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel('report', 'expanded'); {rdelim}); </script>
</div>

<script src="modules/AOR_Reports/Dashlets/AORReportsDashlet/AORReportsDashlet.js"></script>
