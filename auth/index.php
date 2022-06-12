<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
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
                            <img alt="login-img" src="<?= SITE_TEMPLATE_PATH ?>/img/section/login.png"
                                 class="login__img">
                            <? $APPLICATION->IncludeComponent("bitrix:main.auth.form", "auth", array(
                                "AUTH_FORGOT_PASSWORD_URL" => "/profile/auth/get_password.php",    // Страница для восстановления пароля
                                "AUTH_REGISTER_URL" => "/profile/auth/registration.php",    // Страница для регистрации
                                "AUTH_SUCCESS_URL" => "/profile/",    // Страница после успешной авторизации
                            ),
                                false
                            ); ?>
                            <!--<form method="post" action="" class="login__form">
                                <input name="email" class="input" placeholder="Email" type="email"> <input
                                        type="password" name="password" class="input" placeholder="Пароль" id="">
                                <select class="select" name="user_type" id="">
                                    <option class="option" value="">Исполнитель</option>
                                    <option class="option" value="">Заказчик</option>
                                </select>
                                <div class="inline inline_lg">
                                    <button class="btn">Войти</button>
                                    <a href="" class="link">Забыли пароль?</a>
                                </div>
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>