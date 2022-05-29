<?php
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
$APPLICATION->SetPageProperty("keywords", "Услуги, Услуга. Заказать");
$APPLICATION->SetPageProperty("description", "Услуги.ru - сервис заказа услуг");
$APPLICATION->SetTitle("Каталог");
?>

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="section__wrapper">
                    <div class="filter">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/services/inc_services_title.php"
                            )
                        ); ?>
                        <form method="post" action="" class="search-form">
                            <input name="search" class="search-form__input" placeholder="Поиск">
                            <button class="search-form__btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </button>
                        </form>
                        <div class="filter__line"></div>
                        <div class="filter__catalog">
                            <div class="list-group">
                                <button class="list-group__item list-group__item_active">Психология</button>
                                <button class="list-group__item">Ремонт авто</button>
                                <button class="list-group__item">Уборка</button>
                                <button class="list-group__item">Перевозка вещей</button>
                                <button class="list-group__item">Тренировки</button>
                            </div>
                        </div>
                        <div class="filter__content">
                            <div class="list-group list-group_inline">
                                <a href="#" class="list-group__item">Психолог</a>
                                <a href="#" class="list-group__item">Психотерапевт</a>
                                <a href="#" class="list-group__item">Психиатр</a>
                                <a href="#" class="list-group__item">Клинический психолог</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>