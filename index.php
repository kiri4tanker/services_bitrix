<?php
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Услуги, Услуга. Заказать, Каталог");
$APPLICATION->SetPageProperty("description", "Каталог услуг сервиса Услуги.ruг");
$APPLICATION->SetTitle("Главная");
?>
    <main class="main">
        <section id="section-search" class="section section_secondary section_background"
                 style="background-image: url(<?= SITE_TEMPLATE_PATH ?>/images/search-bg.jpg?f4e0d92b96b5b6812b1aa1ed20504e57)">
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
                        <? $APPLICATION->IncludeComponent("bitrix:search.title", "search_index", array(
                            "CATEGORY_0" => array(    // Ограничение области поиска
                                0 => "main",
                                1 => "iblock_catalog",
                            ),
                            "CATEGORY_0_TITLE" => "",    // Название категории
                            "CATEGORY_0_iblock_catalog" => array(    // Искать в информационных блоках типа "iblock_catalog"
                                0 => "all",
                            ),
                            "CATEGORY_0_iblock_other" => array(
                                0 => "all",
                            ),
                            "CATEGORY_0_main" => array(    // Путь к файлу начинается с любого из перечисленных
                                0 => "",
                            ),
                            "CHECK_DATES" => "N",    // Искать только в активных по дате документах
                            "CONTAINER_ID" => "title-search",    // ID контейнера, по ширине которого будут выводиться результаты
                            "INPUT_ID" => "title-search-input",    // ID строки ввода поискового запроса
                            "NUM_CATEGORIES" => "1",    // Количество категорий поиска
                            "ORDER" => "date",    // Сортировка результатов
                            "PAGE" => "#SITE_DIR#search/",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                            "SHOW_INPUT" => "Y",    // Показывать форму ввода поискового запроса
                            "SHOW_OTHERS" => "N",    // Показывать категорию "прочее"
                            "TOP_COUNT" => "5",    // Количество результатов в каждой категории
                            "USE_LANGUAGE_GUESS" => "Y",    // Включить автоопределение раскладки клавиатуры
                        ),
                            false
                        ); ?>
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
                                "PATH" => "/include/main/services/inc_services_btn.php"
                            )
                        ); ?>
                    </div>
                    <div class="section__content">
                        <div class="services">
                            <? $APPLICATION->IncludeComponent("bitrix:news", "catalog", array(
                                "ADD_ELEMENT_CHAIN" => "Y",    // Включать название элемента в цепочку навигации
                                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DETAIL_DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "DETAIL_FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "DETAIL_PAGER_SHOW_ALL" => "Y",    // Показывать ссылку "Все"
                                "DETAIL_PAGER_TEMPLATE" => "",    // Название шаблона
                                "DETAIL_PAGER_TITLE" => "Страница",    // Название категорий
                                "DETAIL_PROPERTY_CODE" => array(    // Свойства
                                    0 => "NAME",
                                    1 => "",
                                ),
                                "DETAIL_SET_CANONICAL_URL" => "N",    // Устанавливать канонический URL
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                                "DISPLAY_NAME" => "N",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "4",    // Инфоблок
                                "IBLOCK_TYPE" => "catalog",    // Тип инфоблока
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "LIST_FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "LIST_PROPERTY_CODE" => array(    // Свойства
                                    0 => "NAME",
                                    1 => "",
                                ),
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "META_DESCRIPTION" => "-",    // Установить описание страницы из свойства
                                "META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства
                                "NEWS_COUNT" => "8",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Услуги",    // Название категорий
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "SEF_FOLDER" => "/catalog/",    // Каталог ЧПУ (относительно корня сайта)
                                "SEF_MODE" => "Y",    // Включить поддержку ЧПУ
                                "SEF_URL_TEMPLATES" => array(
                                    "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
                                    "news" => "",
                                    "section" => "#SECTION_CODE#/",
                                ),
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_STATUS_404" => "Y",    // Устанавливать статус 404
                                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "ID",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела
                                "USE_CATEGORIES" => "N",    // Выводить материалы по теме
                                "USE_FILTER" => "N",    // Показывать фильтр
                                "USE_PERMISSIONS" => "N",    // Использовать дополнительное ограничение доступа
                                "USE_RATING" => "N",    // Разрешить голосование
                                "USE_RSS" => "N",    // Разрешить RSS
                                "USE_SEARCH" => "N",    // Разрешить поиск
                                "USE_SHARE" => "N",    // Отображать панель соц. закладок
                            ),
                                false
                            ); ?>
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
                                        "PATH" => "/include/main/about-us/inc_about-us_text.php"
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
                            <? $APPLICATION->IncludeComponent("bitrix:news.list", "stats", array(
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                                "DISPLAY_DATE" => "N",    // Выводить дату элемента
                                "DISPLAY_NAME" => "Y",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "FILTER_NAME" => "",    // Фильтр
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "3",    // Код информационного блока
                                "IBLOCK_TYPE" => "other",    // Тип информационного блока (используется только для проверки)
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                "INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "NEWS_COUNT" => "4",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Новости",    // Название категорий
                                "PARENT_SECTION" => "",    // ID раздела
                                "PARENT_SECTION_CODE" => "",    // Код раздела
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "PROPERTY_CODE" => array(    // Свойства
                                    0 => "",
                                    1 => "",
                                ),
                                "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
                                "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
                                "SET_STATUS_404" => "N",    // Устанавливать статус 404
                                "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
                            ),
                                false
                            ); ?>
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
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "slider_benefits",
                                array(
                                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                    "ADD_SECTIONS_CHAIN" => "N",
                                    "AJAX_MODE" => "N",
                                    "AJAX_OPTION_ADDITIONAL" => "",
                                    "AJAX_OPTION_HISTORY" => "N",
                                    "AJAX_OPTION_JUMP" => "N",
                                    "AJAX_OPTION_STYLE" => "Y",
                                    "CACHE_FILTER" => "N",
                                    "CACHE_GROUPS" => "Y",
                                    "CACHE_TIME" => "36000000",
                                    "CACHE_TYPE" => "A",
                                    "CHECK_DATES" => "Y",
                                    "DETAIL_URL" => "",
                                    "DISPLAY_BOTTOM_PAGER" => "N",
                                    "DISPLAY_DATE" => "N",
                                    "DISPLAY_NAME" => "Y",
                                    "DISPLAY_PICTURE" => "Y",
                                    "DISPLAY_PREVIEW_TEXT" => "Y",
                                    "DISPLAY_TOP_PAGER" => "N",
                                    "FIELD_CODE" => array("", ""),
                                    "FILTER_NAME" => "",
                                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                    "IBLOCK_ID" => "2",
                                    "IBLOCK_TYPE" => "other",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                    "INCLUDE_SUBSECTIONS" => "N",
                                    "MESSAGE_404" => "",
                                    "NEWS_COUNT" => "10",
                                    "PAGER_BASE_LINK_ENABLE" => "N",
                                    "PAGER_DESC_NUMBERING" => "N",
                                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                    "PAGER_SHOW_ALL" => "N",
                                    "PAGER_SHOW_ALWAYS" => "N",
                                    "PAGER_TEMPLATE" => ".default",
                                    "PAGER_TITLE" => "Новости",
                                    "PARENT_SECTION" => "",
                                    "PARENT_SECTION_CODE" => "",
                                    "PREVIEW_TRUNCATE_LEN" => "",
                                    "PROPERTY_CODE" => array("", ""),
                                    "SET_BROWSER_TITLE" => "N",
                                    "SET_LAST_MODIFIED" => "N",
                                    "SET_META_DESCRIPTION" => "N",
                                    "SET_META_KEYWORDS" => "N",
                                    "SET_STATUS_404" => "N",
                                    "SET_TITLE" => "N",
                                    "SHOW_404" => "N",
                                    "SORT_BY1" => "SORT",
                                    "SORT_BY2" => "SORT",
                                    "SORT_ORDER1" => "ASC",
                                    "SORT_ORDER2" => "ASC",
                                    "STRICT_SECTION_CHECK" => "N"
                                )
                            ); ?>
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
                            <? $APPLICATION->IncludeComponent("bitrix:news", "catalog", array(
                                "ADD_ELEMENT_CHAIN" => "Y",    // Включать название элемента в цепочку навигации
                                "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
                                "AJAX_MODE" => "N",    // Включить режим AJAX
                                "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                                "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                                "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                                "BROWSER_TITLE" => "-",    // Установить заголовок окна браузера из свойства
                                "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",    // Учитывать права доступа
                                "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                                "CACHE_TYPE" => "A",    // Тип кеширования
                                "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                                "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DETAIL_DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "DETAIL_FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "DETAIL_PAGER_SHOW_ALL" => "Y",    // Показывать ссылку "Все"
                                "DETAIL_PAGER_TEMPLATE" => "",    // Название шаблона
                                "DETAIL_PAGER_TITLE" => "Страница",    // Название категорий
                                "DETAIL_PROPERTY_CODE" => array(    // Свойства
                                    0 => "NAME",
                                    1 => "",
                                ),
                                "DETAIL_SET_CANONICAL_URL" => "N",    // Устанавливать канонический URL
                                "DISPLAY_BOTTOM_PAGER" => "Y",    // Выводить под списком
                                "DISPLAY_DATE" => "Y",    // Выводить дату элемента
                                "DISPLAY_NAME" => "N",    // Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",    // Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",    // Выводить текст анонса
                                "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                                "IBLOCK_ID" => "4",    // Инфоблок
                                "IBLOCK_TYPE" => "catalog",    // Тип инфоблока
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                                "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
                                "LIST_FIELD_CODE" => array(    // Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "LIST_PROPERTY_CODE" => array(    // Свойства
                                    0 => "NAME",
                                    1 => "",
                                ),
                                "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                                "META_DESCRIPTION" => "-",    // Установить описание страницы из свойства
                                "META_KEYWORDS" => "-",    // Установить ключевые слова страницы из свойства
                                "NEWS_COUNT" => "8",    // Количество новостей на странице
                                "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                                "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                                "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                                "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
                                "PAGER_TITLE" => "Услуги",    // Название категорий
                                "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                                "SEF_FOLDER" => "/catalog/",    // Каталог ЧПУ (относительно корня сайта)
                                "SEF_MODE" => "Y",    // Включить поддержку ЧПУ
                                "SEF_URL_TEMPLATES" => array(
                                    "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
                                    "news" => "",
                                    "section" => "#SECTION_CODE#/",
                                ),
                                "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                                "SET_STATUS_404" => "Y",    // Устанавливать статус 404
                                "SET_TITLE" => "Y",    // Устанавливать заголовок страницы
                                "SHOW_404" => "N",    // Показ специальной страницы
                                "SORT_BY1" => "ID",    // Поле для первой сортировки новостей
                                "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                                "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                                "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                                "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела
                                "USE_CATEGORIES" => "N",    // Выводить материалы по теме
                                "USE_FILTER" => "N",    // Показывать фильтр
                                "USE_PERMISSIONS" => "N",    // Использовать дополнительное ограничение доступа
                                "USE_RATING" => "N",    // Разрешить голосование
                                "USE_RSS" => "N",    // Разрешить RSS
                                "USE_SEARCH" => "N",    // Разрешить поиск
                                "USE_SHARE" => "N",    // Отображать панель соц. закладок
                            ),
                                false
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section_secondary">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__heading">
                        <h3 class="modal__title" id="modal-feedback-title">Мы здесь, чтобы помочь</h3>
                    </div>
                    <div class="section__content">
                        <div class="feedback">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/feedback.png?dfa60ac6960a221c7c050a5a95d024b0"
                                 alt=""
                                 class="feedback__img">
                            <? $APPLICATION->IncludeComponent("bitrix:iblock.element.add.form", "feedback", array(
                                "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",    // * дата начала *
                                "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",    // * дата завершения *
                                "CUSTOM_TITLE_DETAIL_PICTURE" => "",    // * подробная картинка *
                                "CUSTOM_TITLE_DETAIL_TEXT" => "",    // * подробный текст *
                                "CUSTOM_TITLE_IBLOCK_SECTION" => "",    // * раздел инфоблока *
                                "CUSTOM_TITLE_NAME" => "Ваше имя",    // * наименование *
                                "CUSTOM_TITLE_PREVIEW_PICTURE" => "",    // * картинка анонса *
                                "CUSTOM_TITLE_PREVIEW_TEXT" => "Ваше сообщение",    // * текст анонса *
                                "CUSTOM_TITLE_TAGS" => "",    // * теги *
                                "DEFAULT_INPUT_SIZE" => "30",    // Размер полей ввода
                                "DETAIL_TEXT_USE_HTML_EDITOR" => "N",    // Использовать визуальный редактор для редактирования подробного текста
                                "ELEMENT_ASSOC" => "CREATED_BY",    // Привязка к пользователю
                                "GROUPS" => "",    // Группы пользователей, имеющие право на добавление/редактирование
                                "IBLOCK_ID" => "5",    // Инфоблок
                                "IBLOCK_TYPE" => "form",    // Тип инфоблока
                                "LEVEL_LAST" => "Y",    // Разрешить добавление только на последний уровень рубрикатора
                                "LIST_URL" => "",    // Страница со списком своих элементов
                                "MAX_FILE_SIZE" => "0",    // Максимальный размер загружаемых файлов, байт (0 - не ограничивать)
                                "MAX_LEVELS" => "100000",    // Ограничить кол-во рубрик, в которые можно добавлять элемент
                                "MAX_USER_ENTRIES" => "100000",    // Ограничить кол-во элементов для одного пользователя
                                "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",    // Использовать визуальный редактор для редактирования текста анонса
                                "PROPERTY_CODES" => array("NAME", "10", "11", "PREVIEW_TEXT"), // Свойства, выводимые на редактирование
                                "PROPERTY_CODES_REQUIRED" => array("NAME", "10", "11", "PREVIEW_TEXT"), // Свойства, обязательные для заполнения
                                "RESIZE_IMAGES" => "N",    // Использовать настройки инфоблока для обработки изображений
                                "SEF_MODE" => "N",    // Включить поддержку ЧПУ
                                "STATUS" => "ANY",    // Редактирование возможно
                                "STATUS_NEW" => "N",    // Деактивировать элемент
                                "USER_MESSAGE_ADD" => "Спасибо! Ваша заявка отправлена!",    // Сообщение об успешном добавлении
                                "USER_MESSAGE_EDIT" => "",    // Сообщение об успешном сохранении
                                "USE_CAPTCHA" => "N",    // Использовать CAPTCHA
                                "AJAX_MODE" => "Y"
                            ),
                                false
                            ); ?>
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