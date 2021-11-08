<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('bitlate.proshop');
CModule::IncludeModule("iblock");
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

	 $postData = BitlateProUtils::prepareRequest($_POST);

	$id = (isset($postData["id"])) ? trim($postData["id"]) : '';
	$name = (isset($postData["NAME"])) ? trim($postData["NAME"]) : '';
    $phone = (isset($postData["PHONE"])) ? trim($postData["PHONE"]) : '';
    $email = (isset($postData["MAIL"])) ? trim($postData["MAIL"]) : '';
    	

   
    $dbRes = CIBlockElement::GetByID($id);
    $arFields = [];
       if ($arRes = $dbRes->GetNext()) {

       	 		$arFields = [
			       	 		"USER_NAME"=>$name,
			       	 		"USER_PHONE"=> $phone,
			       	 		"USER_EMAIL"=>$email,
			       	 		"NAME"=>'товар: '.$arRes['NAME'],
			       	 		'DETAIL_PAGE_URL'=>$arRes['DETAIL_PAGE_URL']

 
			       	 ];
       }


     CEvent::Send('GoodsOnOrder', SITE_ID, $arFields, "Y");


}