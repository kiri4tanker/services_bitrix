<?php
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Услуги, Услуга. Заказать, Сервис, О нас");
$APPLICATION->SetPageProperty("description", "О нашем сервисе - Услуги.ru");
$APPLICATION->SetTitle("О нас");
?>

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__heading">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/about-us/inc_about-us_title.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">
                        <div class="about-us">
                            <div class="about-us__content">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about-us/inc_about-us_text.php"
                                    )
                                ); ?>
                            </div>
                            <div class="about-us__img">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/about-us/inc_about-us_img.php"
                                    )
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>