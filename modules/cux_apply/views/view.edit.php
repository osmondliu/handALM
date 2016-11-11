<?php
/**
* 
*/
require_once("include/MVC/View/views/view.edit.php");
class Cux_applyViewEdit extends ViewEdit
{
	public function preDisplay()
	{
		echo "<script>";
		echo '	
			$(document).ready(function(e){
				var date=new Date().toLocaleDateString();
				$("#apply_date").val(date.replace(/\//g,"-"));
				$("#apply_date").focusout(function(){
					check_date();
				});
				function check_date(){
					var apply_date=$("#apply_date").val();
					var date_fmt=new Date(apply_date);
					if (date_fmt>new Date()) {
						alert("日期不对");
						return false;
					}
				}
			});
		';
		echo "</script>";
		parent::preDisplay();
	}
}