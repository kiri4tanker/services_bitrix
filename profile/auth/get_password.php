<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Восстановление пароля");
$APPLICATION->SetPageProperty("keywords", "Восстановление пароля");
$APPLICATION->SetPageProperty("description", "Восстановление пароля");
$APPLICATION->SetTitle("Восстановление пароля");
?>

<main class="main">
    <section class="section section_hybrid">
        <div class="container">
            <div class="section__wrapper">
                <div class="section__heading">
                    <h1 class="section__title">Восстановление пароля</h1>
                </div>
            </div>
            <div class="section__content">
                <div class="login">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/login.png" alt="login-img" class="login__img">
                    <? $APPLICATION->IncludeComponent("bitrix:main.auth.forgotpasswd", "get_password", array(
                        "AUTH_AUTH_URL" => "/profile/auth/",    // Страница для авторизации
                        "AUTH_REGISTER_URL" => "/profile/auth/registration.php",    // Страница для регистрации
                    ),
                        false
                    ); ?>
                </div>
            </div>
        </div>>
    </section>
</main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>