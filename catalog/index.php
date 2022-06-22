<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
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
<? $APPLICATION->IncludeComponent("bitrix:news.list", "catalog_index", array(
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
	"DISPLAY_NAME" => "N",    // Выводить название элемента
	"DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
	"DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
	"DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
	"FIELD_CODE" => array(    // Поля
		0 => "",
		1 => "",
	),
	"FILTER_NAME" => "",    // Фильтр
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
	"IBLOCK_ID" => "4",    // Код информационного блока
	"IBLOCK_TYPE" => "catalog",    // Тип информационного блока (используется только для проверки)
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
	"INCLUDE_SUBSECTIONS" => "N",    // Показывать элементы подразделов раздела
	"MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
	"NEWS_COUNT" => "16",    // Количество новостей на странице
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
	"SORT_BY1" => "ID",    // Поле для первой сортировки новостей
	"SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
	"SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
	"SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
	"STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
),
	false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>