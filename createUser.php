<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$user = new CUser;
$arFields = [
    "EMAIL" => "kiri4tankerofficial@gmail.com",
    "LOGIN" => "admin",
    "ACTIVE" => "Y",
    "GROUP_ID" => [1],
    "PASSWORD" => "admin1707",
    "CONFIRM_PASSWORD" => "admin1707",
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