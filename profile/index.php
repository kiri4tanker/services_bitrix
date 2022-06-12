<?php
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Услуги, Услуга. Заказать, Сервис, Профиль, Личный Кабинет");
$APPLICATION->SetPageProperty("description", "Личный кабинет - Услуги.ru");
$APPLICATION->SetTitle("Личный кабинет");
?>

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__content">
                        <? $APPLICATION->IncludeComponent("bitrix:main.profile", "profile", array(
                            "CHECK_RIGHTS" => "N",    // Проверять права доступа
                            "SEND_INFO" => "N",    // Генерировать почтовое событие
                            "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                            "USER_PROPERTY" => "",    // Показывать доп. свойства
                            "USER_PROPERTY_NAME" => "",    // Название закладки с доп. свойствами
                        ),
                            false
                        ); ?>
                        <!--<div class="profile">
                            <img src="/images/avatar.png?3ba42f88bca9ea4135380efe1bb939d7" alt="avatar"
                                 class="profile__img">
                            <div class="profile__text">
                                <h2 class="profile__name">Анастасия Кубрак</h2>
                                <strong class="profile__city">Северск</strong>
                                <a href="tel:81000710007" class="profile_phone">+7 100 071-00-07</a>
                                <p class="profile__description text-muted">За время моей работы были выявлены основные
                                    источники финансирования, главные направления работы и причины, почему их аудитория
                                    держится столь длительное время. </p>
                            </div>
                            <div class="profile__line"></div>
                            <div class="profile__tabs">
                                <div class="list-group">
                                    <button class="list-group__item list-group__item_active">Мои заказы</button>
                                    <button class="list-group__item">Анкета</button>
                                    <button class="list-group__item">Настройки</button>
                                </div>
                            </div>
                            <div class="profile__orders">
                                <div class="orders">
                                    <a href="#" class="order">
                                        <img src="/images/services-1.png?bc90bc2dfe1bc9692c231a7e445148f8"
                                             alt="service-img" class="order__img">
                                        <div class="order__text">
                                            <strong class="order__name">Психолог Вероника Степанова</strong>
                                            <p class="order__city text-muted">Калининград</p>
                                        </div>
                                    </a>
                                    <a href="#" class="order">
                                        <img src="/images/services-1.png?bc90bc2dfe1bc9692c231a7e445148f8"
                                             alt="service-img" class="order__img">
                                        <div class="order__text">
                                            <strong class="order__name">Психолог Вероника Степанова</strong>
                                            <p class="order__city text-muted">Калининград</p>
                                        </div>
                                    </a>
                                    <a href="#" class="order">
                                        <img src="/images/services-1.png?bc90bc2dfe1bc9692c231a7e445148f8"
                                             alt="service-img" class="order__img">
                                        <div class="order__text">
                                            <strong class="order__name">Психолог Вероника Степанова</strong>
                                            <p class="order__city text-muted">Калининград</p>
                                        </div>
                                    </a>
                                    <a href="#" class="order">
                                        <img src="/images/services-1.png?bc90bc2dfe1bc9692c231a7e445148f8"
                                             alt="service-img" class="order__img">
                                        <div class="order__text">
                                            <strong class="order__name">Психолог Вероника Степанова</strong>
                                            <p class="order__city text-muted">Калининград</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>