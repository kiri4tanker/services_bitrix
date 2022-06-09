<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><? $APPLICATION->IncludeComponent(
    "bitrix:main.register",
    "",
    array(
        "AUTH" => "Y",
        "REQUIRED_FIELDS" => array("EMAIL", "NAME", "SECOND_NAME", "LAST_NAME", "PERSONAL_PHONE"),
        "SET_TITLE" => "Y",
        "SHOW_FIELDS" => array("EMAIL", "NAME", "SECOND_NAME", "LAST_NAME", "PERSONAL_PHONE"),
        "SUCCESS_PAGE" => "",
        "USER_PROPERTY" => array(),
        "USER_PROPERTY_NAME" => "",
        "USE_BACKURL" => "N"
    )
); ?>

    <main class="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs__content">
                    <a href="index.html" class="breadcrumbs__link">Главная</a>
                    <ion-icon name="chevron-forward-outline" class="breadcrumbs__arrow"></ion-icon>
                    <span class="breadcrumbs__link breadcrumbs__link_static">Регистрация</span>
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
                        <div class="register">
                            <img src="/images/register.png?55b302987ba1da763b7cf04a5d0a41bf" alt=""
                                 class="register__img">
                            <form method="post" action="" class="register__form">
                                <input name="name" class="input" placeholder="ФИО" require="">
                                <input name="phone" class="input" placeholder="Телефон" type="tel" id="phone"
                                       require="">
                                <input name="email" class="input" placeholder="Email" type="email" require="">
                                <input type="password" name="password" class="input" placeholder="Пароль" require="">
                                <input type="password" name="password_repeat" class="input"
                                       placeholder="Повторите пароль" require="">
                                <select class="select" name="user_type" id="" require="">
                                    <option class="option" value="">Исполнитель</option>
                                    <option class="option" value="">Заказчик</option>
                                </select>
                                <div class="checkbox">
                                    <input class="checkbox__input" type="checkbox" id="checkbox" name="checkbox">
                                    <label class="checkbox__box" for="checkbox"></label>
                                    <label for="checkbox" class="checkbox__text text-muted">Согласен на обработку
                                        персональных данных</label>
                                </div>
                                <button class="btn">Создать аккаунт</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>