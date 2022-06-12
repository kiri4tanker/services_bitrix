<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

<? $APPLICATION->IncludeComponent("bitrix:main.auth.form", "auth", array(
    "AUTH_FORGOT_PASSWORD_URL" => "/profile/auth/get_password.php",    // Страница для восстановления пароля
    "AUTH_REGISTER_URL" => "/profile/auth/registration.php",    // Страница для регистрации
    "AUTH_SUCCESS_URL" => "/profile/",    // Страница после успешной авторизации
),
    false
); ?>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>