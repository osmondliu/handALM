<?php
//Notes：本文件被view.popup.php引用;
//include/Popups/PopupSmarty.php文件中定义了_get_where_clause在_get_where_clause中会直接注入$popup->_popupMeta['whereStatement']
//所以本文件就是客户化$popup->_popupMeta['whereStatement']，以被后续调用。

if ($_REQUEST['account_locked']=='ture') {//锁定联系人所在的组织，不允许用户手工修改，不进行模糊搜索
	$popup->_popupMeta['whereStatement'] = "account_name ='".$_REQUEST['account_name_advanced']."'";
	echo '<script>$(document).ready(function(){$("#account_name_advanced").attr("disabled",true);$("#account_name_advanced").attr("style","background-color:#eeeeee");})</script>';
}


?>