<?php
AddEventHandler("iblock", "OnAfterIBlockElementAdd", "OnAfterIBlockElementAddHandler");
function OnAfterIBlockElementAddHandler(&$arFields)
{
	CModule::IncludeModule('iblock');

	$arSelect = ['NAME', 'PREVIEW_TEXT', 'PROPERTY_PHONE', 'PROPERTY_EMAIL'];
	$arElement = CIBlockElement::GetList([], ['IBLOCK_ID' => $arFields['IBLOCK_ID'], 'ID' => $arFields['ID']], false, false, $arSelect)->fetch();
	$arEventFields = array(
		"NAME" => $arElement['NAME'],
		"PREVIEW_TEXT" => $arElement['PREVIEW_TEXT'],
		"PHONE" => $arElement['PROPERTY_PHONE_VALUE'],
		"EMAIL" => $arElement['PROPERTY_EMAIL_VALUE'],
	);
	CEvent::Send("FEEDBACK", SITE_ID, $arEventFields);
}

?>