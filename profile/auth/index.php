<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>

    <main class="main">
        <section class="section section_hybrid">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__heading">
                        <h1 class="section__title">Вход в личный кабинет</h1>
                    </div>
                    <div class="section__content">
                        <div class="login">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/login.png" alt="login-img" class="login__img">
									<? if(!$USER->IsAuthorized()){
										$APPLICATION->IncludeComponent("bitrix:main.auth.form", "auth", array(
											"AUTH_FORGOT_PASSWORD_URL" => "/profile/auth/get_password.php?forgot_password=yes",    // Страница для восстановления пароля
											"AUTH_REGISTER_URL" => "/profile/auth/registration.php",    // Страница для регистрации
											"AUTH_SUCCESS_URL" => "/profile/",    // Страница после успешной авторизации
										),
											false
										);
									}else{
										LocalRedirect(SITE_DIR . 'profile/');
									} ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>