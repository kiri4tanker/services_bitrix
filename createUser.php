<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$user = new CUser;
$arFields = [
    "EMAIL" => "i.miroshin@bk.ru",
    "LOGIN" => "IMP_ADMIN",
    "ACTIVE" => "Y",
    "GROUP_ID" => [1],
    "PASSWORD" => "147963",
    "CONFIRM_PASSWORD" => "147963",
];
$ID = $user->Add($arFields);
if (intval($ID) > 0) {
    echo "<pre>";
    echo "Пользователь " . $ID . " успешно добавлен.";
    echo "</pre>";
} else {
    echo "<pre>";
    echo $user->LAST_ERROR;
    echo "</pre>";
}