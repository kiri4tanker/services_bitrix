<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Восстановление пароля");
$APPLICATION->SetPageProperty("keywords", "Восстановление пароля");
$APPLICATION->SetPageProperty("description", "Восстановление пароля");
$APPLICATION->SetTitle("Восстановление пароля");
?>

<? $APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "get_password", array(
    "AUTH_AUTH_URL" => "/profile/auth/",    // Страница для авторизации
    "AUTH_REGISTER_URL" => "/profile/auth/registration.php",    // Страница для регистрации
),
    false
); ?>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>