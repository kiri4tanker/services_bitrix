<?php
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Услуги, Услуга. Заказать, Каталог");
$APPLICATION->SetPageProperty("description", "Каталог услуг сервиса Услуги.ruг");
$APPLICATION->SetTitle("Каталог");
?>
    <main class="main">
        <section id="section-search" class="section section_secondary section_background">
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
                                "PATH" => "/include/main/search/inc_search_title.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/main/search/inc_search_subtitle.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">
                        <form method="post" action="" class="search-form">
                            <input name="search" class="search-form__input" placeholder="Поиск">
                            <button class="search-form__btn">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_primary">
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
                                "PATH" => "/include/main/services/inc_services_title.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/main/services/inc_services_subtitle.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">
                        <div class="services">
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/1.png?abc714a94271a24679db82fd226e5549" alt=""
                                         class="service__img">
                                    <p class="service__text">Уборка</p>
                                </a>
                            </div>
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/2.png?c369db928eaba21add1dda007aace39b" alt=""
                                         class="service__img">
                                    <p class="service__text">Электрика</p>
                                </a>
                            </div>
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/3.png?7994d848b7332c6fa2dfcebac5e391a7" alt=""
                                         class="service__img">
                                    <p class="service__text">Тренировки</p>
                                </a>
                            </div>
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/4.png?a0ae0bfd0b19a5e679c822f8fef258b2" alt=""
                                         class="service__img">
                                    <p class="service__text">Перевозка вещей</p>
                                </a>
                            </div>
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/5.png?a067d8cf11b53ada1e5b73ffd5a67f1d" alt=""
                                         class="service__img">
                                    <p class="service__text">Юристы</p>
                                </a>
                            </div>
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/6.png?8ed85f4c8703ee9273848daf64fa3b97" alt=""
                                         class="service__img">
                                    <p class="service__text">Дизайнеры</p>
                                </a>
                            </div>
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/7.png?a1233defe5c951a54ff411cb2ece3896" alt=""
                                         class="service__img">
                                    <p class="service__text">Репетиторство</p>
                                </a>
                            </div>
                            <div class="service">
                                <a href="#" class="service__card">
                                    <img src="/images/8.png?e5c91b0f8886faf9491d785acef1ddca" alt=""
                                         class="service__img">
                                    <p class="service__text">Психологи</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_secondary">
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
                                "PATH" => "/include/main/about-us/inc_about-us_title.php"
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
                                        "PATH" => "/include/main/about-us/inc_about-us_subtitle.php"
                                    )
                                ); ?>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/main/about-us/inc_about-us_btn.php"
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
                                        "PATH" => "/include/main/about-us/inc_about-us_img.php"
                                    )
                                ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_primary">
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
                                "PATH" => "/include/main/stats/inc_stats_title.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/main/stats/inc_stats_subtitle.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">
                        <div class="stats">
                            <div class="stats__item">
                                <h3 class="stats__number">5928</h3>
                                <p class="stats__text">Пользователей с нами</p>
                            </div>
                            <div class="stats__item">
                                <h3 class="stats__number">3638</h3>
                                <p class="stats__text">Довольных пользователей</p>
                            </div>
                            <div class="stats__item">
                                <h3 class="stats__number">847</h3>
                                <p class="stats__text">Специалистов на сайте</p>
                            </div>
                            <div class="stats__item">
                                <h3 class="stats__number">9842</h3>
                                <p class="stats__text">Выполнено заказов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_secondary">
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
                                "PATH" => "/include/main/benefits/inc_benefits_title.php"
                            )
                        ); ?>
                    </div>
                </div>
                <div class="section__content">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="reason">
                                    <img src="/images/reason-1.png?7821a94566bdb4f73796b765078eebc8" alt=""
                                         class="reason__img">
                                    <strong class="reason__title">Ответственность</strong>
                                    <small class="reason__text">Проверяем каждый отзыв. Если заказ спорный, мы узнаем
                                        подробности.</small>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="reason">
                                    <img src="/images/reason-2.png?db133027c3d866113ec761ebccc9fb9c" alt=""
                                         class="reason__img">
                                    <strong class="reason__title">Продуктивность</strong>
                                    <small class="reason__text">Находим специалистов, которые точно готовы взяться за
                                        дело.</small>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="reason">
                                    <img src="/images/reason-3.png?29a51ca209eab12afbc9f9b3c63e417b" alt=""
                                         class="reason__img">
                                    <strong class="reason__title">Качество</strong>
                                    <small class="reason__text">В рейтинге мы учитываем опыт специалиста, качество
                                        работы,
                                        культуру общения и пунктуальность.</small>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="reason">
                                    <img src="/images/reason-4.png?c63ff48bad6b128ada3658f3af57eef6" alt=""
                                         class="reason__img">
                                    <strong class="reason__title">Скорость</strong>
                                    <small class="reason__text">Предлагаем специалистов, которые соответствуют вашему
                                        заказу -
                                        выбирайте подходящего!</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-custom-pagination"></div>
                </div>
            </div>
        </section>
        <section class="section section_primary">
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
                                "PATH" => "/include/main/popular_services/inc_popular_services_title.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/main/popular_services/inc_popular_services_btn.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">

                        <div class="services">
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/1.png?abc714a94271a24679db82fd226e5549" alt=""
                                         class="service__img">
                                    <p class="service__text">Уборка</p>
                                </a>
                            </div>
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/9.png?a2be5c50e793f57062477bd5e58d34d8" alt=""
                                         class="service__img">
                                    <p class="service__text">Электрика</p>
                                </a>
                            </div>
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/10.png?995f2c491da2f60df5f418216b5444d9" alt=""
                                         class="service__img">
                                    <p class="service__text">Тренировки</p>
                                </a>
                            </div>
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/11.png?0dbdcb3d4ad2dc5f2ee3362e90984047" alt=""
                                         class="service__img">
                                    <p class="service__text">Перевозка вещей</p>
                                </a>
                            </div>
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/12.png?9108fc27abecb9e321a769b73d329713" alt=""
                                         class="service__img">
                                    <p class="service__text">Юристы</p>
                                </a>
                            </div>
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/13.png?0fb281cd3ddb91c5c545e39363b58769" alt=""
                                         class="service__img">
                                    <p class="service__text">Дизайнеры</p>
                                </a>
                            </div>
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/14.png?79bac2f39cf24fbcecb1f92392db8c3c" alt=""
                                         class="service__img">
                                    <p class="service__text">Репетиторство</p>
                                </a>
                            </div>
                            <div class="service service_popular">
                                <a href="#" class="service__card">
                                    <img src="/images/15.png?b7c1df4522b124603f0a712ebbbb6e63" alt=""
                                         class="service__img">
                                    <p class="service__text">Психологи</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_secondary">
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
                                "PATH" => "/include/feedback/inc_feedback_title.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">
                        <div class="feedback">
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/feedback/inc_feedback_img.php"
                                )
                            ); ?>
                            <form method="post" action="" class="feedback-form">
                                <input name="name" class="input" placeholder="Имя">
                                <input name="company" class="input" placeholder="Ваша компания">
                                <input name="theme" class="input" placeholder="Тема">
                                <input name="email" class="input" placeholder="Email" type="email">
                                <textarea name="comment" placeholder="Сообщение" class="input"></textarea>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/feedback/inc_feedback_btn.php"
                                    )
                                ); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_primary">
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
                                "PATH" => "/include/main/map/inc_map_title.php"
                            )
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/main/map/inc_map_text.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/main/map/inc_map_img.php"
                            )
                        ); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>