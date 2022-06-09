<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?><? $APPLICATION->IncludeComponent(
    "bitrix:main.auth.form",
    "",
    array(
        "AUTH_FORGOT_PASSWORD_URL" => "/recovery/index.php",
        "AUTH_REGISTER_URL" => "/registration/index.php",
        "AUTH_SUCCESS_URL" => "/profile/index.php"
    )
); ?>

    <main class="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__content">
                    <a href="index.html" class="breadcrumbs__link">Главная</a>
                    <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
                    <span class="breadcrumbs__link breadcrumbs__link_static">Вход</span>
                </div>
            </div>
        </section>
        <section class="section section_hybrid">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__heading">
                        <h1 class="section__title">Вход в личный кабинет</h1>
                    </div>
                    <div class="section__content">
                        <div class="login">
                            <img src="../img/section/login.png" alt="login-img" class="login__img">
                            <form method="post" action="" class="login__form">
                                <input name="email" class="input" placeholder="Email" type="email">
                                <input type="password" name="password" class="input" placeholder="Пароль" id="">
                                <select class="select" name="user_type" id="">
                                    <option class="option" value="">Исполнитель</option>
                                    <option class="option" value="">Заказчик</option>
                                </select>
                                <div class="inline inline_lg">
                                    <button class="btn">Войти</button>
                                    <a href="" class="link">Забыли пароль?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>