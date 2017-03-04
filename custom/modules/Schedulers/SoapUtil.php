<?php 
class SoapUtil{
	/*
	*集团8031 WS-Security信息
	*/
	var $username_jt = "ERP_API";
	var $password_jt = "erp123qwe";
	/*var $url_jt = "http://36.110.51.4:1574/8000/webservices/SOAProvider/plsql/cux_ws_eam_basic_info_pkg/";*/
	var $url_jt = "http://111.200.33.205:1574/JT_8033/webservices/SOAProvider/plsql/cux_ws_eam_basic_info_pkg/";
	//var $url_jt = "http://111.200.33.204:1574/8000/webservices/SOAProvider/plsql/cux_ws_eam_basic_info_pkg/";
	var $resp_key_jt="APPLICATION_DEVELOPER";
	var $resp_appl_jt="FND";
	var $security_jt="STANDARD";
	var $language_jt="SIMPLIFIED CHINESE";
	var $org_id_jt="81";
	/*
	*欣润正式环境 WS-Security信息
	*/
	var $username_xr = "XR_API";
	var $password_xr = "asdf1234";
	/*var $url_xr      = "http://111.200.33.204:1574/80000/webservices/SOAProvider/plsql/cux_ws_eam_get_infos_pkg/";*/
	
	var $url_xr      = "http://111.200.33.204:1574/XR_8034/webservices/SOAProvider/plsql/cux_ws_eam_get_infos_pkg/";
	var $resp_key_xr ="CUX_SUPER_RESPKEY";
	var $resp_appl_xr="CUX";
	var $security_xr ="STANDARD";
	var $language_xr ="SIMPLIFIED CHINESE";
	var $org_id_xr   ="81";
	
	function call_soap_ws($ws_type_code,$ws_env){
		$timetoday = strtotime(date("Y-m-d",time()));
		$last_day = date('Y-m-d H:i:s',$timetoday-1);
	    $today    = date('Y-m-d H:i:s',$timetoday+3600*24-1);
	    $GLOBALS['log']->infor("call_soap_ws call_soap_ws call_soap_ws call_soap_ws");
	    $soap_do = curl_init();
		if($ws_env=='JT'){
		     curl_setopt($soap_do, CURLOPT_URL, $url_jt);

			/*$postAllString = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
									<soap:Header xmlns:ns1="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_basic_info_pkg/">
										<ns1:SOAHeader>
											<ns1:Responsibility>'.$this->resp_key_jt.'</ns1:Responsibility>
											<ns1:RespApplication>'.$this->resp_appl_jt.'</ns1:RespApplication>
											<ns1:SecurityGroup>'.$this->security_jt.'</ns1:SecurityGroup>
											<ns1:NLSLanguage>'.$this->language_jt.'</ns1:NLSLanguage>
											<ns1:Org_Id>81</ns1:Org_Id>
										</ns1:SOAHeader>
										<wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" 
													   xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" 
													   xmlns:env="http://schemas.xmlsoap.org/soap/envelope/" soap:mustUnderstand="1">
											<wsse:UsernameToken xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" 
																xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
											   <wsse:Username>ERP_API</wsse:Username>
											   <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">qazwsx12345</wsse:Password>
											</wsse:UsernameToken>
										</wsse:Security>
								    </soap:Header>
									<soap:Body xmlns:ns2="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_basic_info_pkg/get_basic_info/">
										<ns2:InputParameters>
											<ns2:P_START_DATE>'.$last_day.'</ns2:P_START_DATE>
											<ns2:P_END_DATE>'.$today.'</ns2:P_END_DATE>
											<ns2:P_TYPE_CODE>'.$ws_type_code.'</ns2:P_TYPE_CODE>
										</ns2:InputParameters>
									</soap:Body>
								</soap:Envelope>';*/
												$postAllString = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
									    <soap:Header xmlns:ns1="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_basic_info_pkg/">
									        <ns1:SOAHeader>
									            <ns1:Responsibility>APPLICATION_DEVELOPER</ns1:Responsibility>
									            <ns1:RespApplication>FND</ns1:RespApplication>
									            <ns1:SecurityGroup>STANDARD</ns1:SecurityGroup>
									            <ns1:NLSLanguage>SIMPLIFIED CHINESE</ns1:NLSLanguage>
									            <ns1:Org_Id>81</ns1:Org_Id>
									        </ns1:SOAHeader>
									    <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:env="http://schemas.xmlsoap.org/soap/envelope/" soap:mustUnderstand="1"><wsse:UsernameToken xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd"><wsse:Username>ERP_API</wsse:Username><wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">erp123qwe</wsse:Password></wsse:UsernameToken></wsse:Security></soap:Header>
									    <soap:Body xmlns:ns2="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_basic_info_pkg/get_basic_info/">
									        <ns2:InputParameters>
									            <ns2:P_START_DATE>2016-01-01</ns2:P_START_DATE>
									            <ns2:P_END_DATE>2017-02-14</ns2:P_END_DATE>
									            <ns2:P_TYPE_CODE>'.$ws_type_code.'</ns2:P_TYPE_CODE>
									        </ns2:InputParameters>
									    </soap:Body>
									</soap:Envelope>';
		}
		else if($ws_env=='XR'){
			    $GLOBALS['log']->infor("XRXRXRXRXRXRXRXRXRXR22222222222222");
			    $GLOBALS['log']->infor($this->url_xr);
				echo "XR"."<br>";
				echo "ws_env=".$ws_type_code."<br>";
				echo "ws_env=".$this->username_xr."<br>";
				echo "url = ".$this->password_xr."<br>";

		        curl_setopt($soap_do, CURLOPT_URL, $this->url_xr);
				//欣润模拟登陆的 报文
				/*$postAllString = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
									<soap:Header xmlns:ns1="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_get_infos_pkg/">
										<ns1:SOAHeader>
											<ns1:Responsibility>CUX_SUPER_RESPKEY</ns1:Responsibility>
											<ns1:RespApplication>CUX</ns1:RespApplication>
											<ns1:SecurityGroup>STANDARD</ns1:SecurityGroup>
											<ns1:NLSLanguage>SIMPLIFIED CHINESE</ns1:NLSLanguage>
											<ns1:Org_Id>81</ns1:Org_Id>
										</ns1:SOAHeader>
										<wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" 
														xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" 
														xmlns:env="http://schemas.xmlsoap.org/soap/envelope/" soap:mustUnderstand="1">
											<wsse:UsernameToken xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" 
																xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
												<wsse:Username>XR_API</wsse:Username>
												<wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">asdf1234</wsse:Password>
										   </wsse:UsernameToken>
										</wsse:Security>
									</soap:Header>
									<soap:Body xmlns:ns2="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_get_infos_pkg/get_info/">
										<ns2:InputParameters>
											<ns2:P_START_DATE>'.$last_day.'</ns2:P_START_DATE>
											<ns2:P_END_DATE>'.$today.'</ns2:P_END_DATE>
											<ns2:P_TYPE_CODE>'.$ws_type_code.'</ns2:P_TYPE_CODE>
										</ns2:InputParameters>
									</soap:Body>
								</soap:Envelope>';*/
									    $postAllString ='<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
							    <soap:Header xmlns:ns1="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_get_infos_pkg/">
							        <ns1:SOAHeader>
							            <ns1:Responsibility>CUX_SUPER_RESPKEY</ns1:Responsibility>
							            <ns1:RespApplication>CUX</ns1:RespApplication>
							            <ns1:SecurityGroup>STANDARD</ns1:SecurityGroup>
							            <ns1:NLSLanguage>SIMPLIFIED CHINESE</ns1:NLSLanguage>
							            <ns1:Org_Id>81</ns1:Org_Id>
							        </ns1:SOAHeader>
							    <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns:env="http://schemas.xmlsoap.org/soap/envelope/" soap:mustUnderstand="1"><wsse:UsernameToken xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd" xmlns="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd"><wsse:Username>XR_API</wsse:Username><wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">asdf1234</wsse:Password></wsse:UsernameToken></wsse:Security></soap:Header>
							    <soap:Body xmlns:ns2="http://xmlns.oracle.com/apps/cux/soaprovider/plsql/cux_ws_eam_get_infos_pkg/get_info/">
							        <ns2:InputParameters>
							            <ns2:P_START_DATE>2015-01-01</ns2:P_START_DATE>
							            <ns2:P_END_DATE>2017-02-14</ns2:P_END_DATE>
							            <ns2:P_TYPE_CODE>'.$ws_type_code.'</ns2:P_TYPE_CODE>
							        </ns2:InputParameters>
							    </soap:Body>
							</soap:Envelope>
							';
			}
		
		
				//$soap_do = curl_init();  原来初始化是这个位置
				if($ws_env=='JT'){
					$url = $this->url_jt;
					 
				}else{
					$url=$this->url_xr;
				}
				
				$GLOBALS['log']->infor($postAllString);
				$GLOBALS['log']->infor($url);
				curl_setopt($soap_do, CURLOPT_URL, $url);

				curl_setopt($soap_do, CURLOPT_CONNECTTIMEOUT, 0);//10

				curl_setopt($soap_do, CURLOPT_TIMEOUT, 0);//600

				curl_setopt($soap_do, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($soap_do, CURLOPT_SSL_VERIFYPEER, false);

				curl_setopt($soap_do, CURLOPT_SSL_VERIFYHOST, false);

				curl_setopt($soap_do, CURLOPT_POST, true);

				curl_setopt($soap_do, CURLOPT_POSTFIELDS, $postAllString);

				curl_setopt($soap_do, CURLOPT_HTTPHEADER, array (
					'Content-Type: text/xml; charset=utf-8',
					'Content-Length: ' . strlen($postAllString)
				));
				
				$result = curl_exec($soap_do);
				//$GLOBALS['log']->infor($result);
				if (curl_errno($soap_do)) {
					$GLOBALS['log']->infor("NO NO NO NO NO NO NO NO NO ");
					echo 'Curl error: ' . curl_error($soap_do);
					$GLOBALS['log']->infor(curl_error($soap_do));
					$GLOBALS['log']->infor("------------------");
					$info  = curl_getinfo( $soap_do ); 
					$GLOBALS['log']->infor($info);
				} else {
					$GLOBALS['log']->infor("YES YES YES YES YES");
					$p = xml_parser_create();
					xml_parse_into_struct($p, $result, $vals, $indexs);
					xml_parser_free($p);
					
					
					$xml = new DOMDocument();
					$xml->loadXML($result);
					$result_clob_dom = $xml->getElementsByTagName("X_RESULT_CLOB");
					$x_return_status = $xml->getElementsByTagName("X_RETURN_STATUS");
					$x_msg_data = $xml->getElementsByTagName("X_MSG_DATA");
					$GLOBALS['log']->infor("x_msg_data x_msg_data x_msg_data");
					$GLOBALS['log']->infor($x_msg_data);
					echo "x_return_status = " . $x_return_status->item(0)->nodeValue . "<br>";
					echo "x_msg_data = " . $x_msg_data->item(0)->nodeValue . "<br>";
					$GLOBALS['log']->infor("x_return_status=".$x_return_status->item(0)->nodeValue);
					$GLOBALS['log']->infor("x_msg_data=".$x_msg_data->item(0)->nodeValue);
					$xml_array = simplexml_load_string($result);
					$json_array = json_decode($result_clob_dom->item(0)->nodeValue, true);
					}
					return $json_array;
			}
}
?>