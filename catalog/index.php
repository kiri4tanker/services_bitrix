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
							  <? $APPLICATION->IncludeComponent(
								  "bitrix:search.title",
								  "search_index",
								  array(
									  "CATEGORY_0" => array(0 => "main", 1 => "iblock_catalog",),
									  "CATEGORY_0_TITLE" => "",
									  "CATEGORY_0_iblock_catalog" => array(0 => "all",),
									  "CATEGORY_0_iblock_other" => array(0 => "all",),
									  "CATEGORY_0_main" => array(0 => "",),
									  "CHECK_DATES" => "N",
									  "CONTAINER_ID" => "title-search",
									  "INPUT_ID" => "title-search-input",
									  "NUM_CATEGORIES" => "1",
									  "ORDER" => "date",
									  "PAGE" => "#SITE_DIR#search/",
									  "SHOW_INPUT" => "Y",
									  "SHOW_OTHERS" => "N",
									  "TOP_COUNT" => "5",
									  "USE_LANGUAGE_GUESS" => "Y"
								  )
							  ); ?>
							  <? $APPLICATION->IncludeComponent(
								  "bitrix:catalog",
								  "",
								  array(
									  "ACTION_VARIABLE" => "action",
									  "ADD_ELEMENT_CHAIN" => "Y",
									  "ADD_PICT_PROP" => "GALLERY",
									  "ADD_PROPERTIES_TO_BASKET" => "Y",
									  "ADD_SECTIONS_CHAIN" => "Y",
									  "AJAX_MODE" => "N",
									  "AJAX_OPTION_ADDITIONAL" => "",
									  "AJAX_OPTION_HISTORY" => "N",
									  "AJAX_OPTION_JUMP" => "N",
									  "AJAX_OPTION_STYLE" => "Y",
									  "BASKET_URL" => "/personal/basket.php",
									  "CACHE_FILTER" => "N",
									  "CACHE_GROUPS" => "Y",
									  "CACHE_TIME" => "36000000",
									  "CACHE_TYPE" => "A",
									  "COMPARE_ELEMENT_SORT_FIELD" => "sort",
									  "COMPARE_ELEMENT_SORT_ORDER" => "asc",
									  "COMPARE_FIELD_CODE" => array("", ""),
									  "COMPARE_NAME" => "CATALOG_COMPARE_LIST",
									  "COMPARE_POSITION" => "top left",
									  "COMPARE_POSITION_FIXED" => "Y",
									  "COMPATIBLE_MODE" => "N",
									  "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
									  "DETAIL_BACKGROUND_IMAGE" => "-",
									  "DETAIL_BRAND_USE" => "N",
									  "DETAIL_BROWSER_TITLE" => "-",
									  "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
									  "DETAIL_DETAIL_PICTURE_MODE" => array("POPUP"),
									  "DETAIL_DISPLAY_NAME" => "Y",
									  "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
									  "DETAIL_IMAGE_RESOLUTION" => "16by9",
									  "DETAIL_META_DESCRIPTION" => "-",
									  "DETAIL_META_KEYWORDS" => "-",
									  "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
									  "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
									  "DETAIL_SET_CANONICAL_URL" => "Y",
									  "DETAIL_SHOW_POPULAR" => "Y",
									  "DETAIL_SHOW_SLIDER" => "N",
									  "DETAIL_SHOW_VIEWED" => "N",
									  "DETAIL_STRICT_SECTION_CHECK" => "Y",
									  "DETAIL_USE_COMMENTS" => "N",
									  "DETAIL_USE_VOTE_RATING" => "N",
									  "DISABLE_INIT_JS_IN_COMPONENT" => "N",
									  "DISPLAY_BOTTOM_PAGER" => "N",
									  "DISPLAY_ELEMENT_SELECT_BOX" => "N",
									  "DISPLAY_TOP_PAGER" => "N",
									  "ELEMENT_SORT_FIELD" => "sort",
									  "ELEMENT_SORT_FIELD2" => "id",
									  "ELEMENT_SORT_ORDER" => "asc",
									  "ELEMENT_SORT_ORDER2" => "desc",
									  "FILTER_FIELD_CODE" => array("", ""),
									  "FILTER_HIDE_ON_MOBILE" => "Y",
									  "FILTER_NAME" => "",
									  "FILTER_PRICE_CODE" => array(),
									  "FILTER_PROPERTY_CODE" => array("CITY", "PRIVATE_PERSON", "ORGANISATION", "WORK_NOW", ""),
									  "FILTER_VIEW_MODE" => "VERTICAL",
									  "IBLOCK_ID" => "4",
									  "IBLOCK_TYPE" => "catalog",
									  "INCLUDE_SUBSECTIONS" => "Y",
									  "INSTANT_RELOAD" => "Y",
									  "LABEL_PROP" => array("DEPARTURE", "PRIVATE_PERSON", "ORGANISATION", "WORK_NOW"),
									  "LABEL_PROP_MOBILE" => array("DEPARTURE", "PRIVATE_PERSON", "ORGANISATION", "WORK_NOW"),
									  "LABEL_PROP_POSITION" => "top-right",
									  "LAZY_LOAD" => "Y",
									  "LINE_ELEMENT_COUNT" => "3",
									  "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
									  "LINK_IBLOCK_ID" => "",
									  "LINK_IBLOCK_TYPE" => "",
									  "LINK_PROPERTY_SID" => "",
									  "LIST_BROWSER_TITLE" => "-",
									  "LIST_ENLARGE_PRODUCT" => "STRICT",
									  "LIST_META_DESCRIPTION" => "-",
									  "LIST_META_KEYWORDS" => "-",
									  "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
									  "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':true},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':true},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false}]",
									  "LIST_SHOW_SLIDER" => "Y",
									  "LIST_SLIDER_INTERVAL" => "3000",
									  "LIST_SLIDER_PROGRESS" => "N",
									  "LOAD_ON_SCROLL" => "N",
									  "MESSAGE_404" => "",
									  "MESS_BTN_ADD_TO_BASKET" => "Заказать",
									  "MESS_BTN_BUY" => "Заказать",
									  "MESS_BTN_COMPARE" => "Сравнение",
									  "MESS_BTN_DETAIL" => "Подробнее",
									  "MESS_BTN_LAZY_LOAD" => "Показать ещё",
									  "MESS_BTN_SUBSCRIBE" => "Уведомить",
									  "MESS_NOT_AVAILABLE" => "Услуга не доступна",
									  "PAGER_BASE_LINK_ENABLE" => "N",
									  "PAGER_DESC_NUMBERING" => "N",
									  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									  "PAGER_SHOW_ALL" => "N",
									  "PAGER_SHOW_ALWAYS" => "N",
									  "PAGER_TEMPLATE" => ".default",
									  "PAGER_TITLE" => "Товары",
									  "PAGE_ELEMENT_COUNT" => "30",
									  "PARTIAL_PRODUCT_PROPERTIES" => "N",
									  "PRICE_CODE" => array(),
									  "PRICE_VAT_INCLUDE" => "Y",
									  "PRICE_VAT_SHOW_VALUE" => "N",
									  "PRODUCT_ID_VARIABLE" => "id",
									  "PRODUCT_PROPS_VARIABLE" => "prop",
									  "PRODUCT_QUANTITY_VARIABLE" => "quantity",
									  "SEARCH_CHECK_DATES" => "Y",
									  "SEARCH_NO_WORD_LOGIC" => "Y",
									  "SEARCH_PAGE_RESULT_COUNT" => "50",
									  "SEARCH_RESTART" => "N",
									  "SEARCH_USE_LANGUAGE_GUESS" => "Y",
									  "SEARCH_USE_SEARCH_RESULT_ORDER" => "Y",
									  "SECTIONS_SHOW_PARENT_NAME" => "Y",
									  "SECTIONS_VIEW_MODE" => "LIST",
									  "SECTION_BACKGROUND_IMAGE" => "-",
									  "SECTION_COUNT_ELEMENTS" => "N",
									  "SECTION_ID_VARIABLE" => "SECTION_ID",
									  "SECTION_TOP_DEPTH" => "2",
									  "SEF_FOLDER" => "/catalog/",
									  "SEF_MODE" => "Y",
									  "SEF_URL_TEMPLATES" => array("compare" => "compare.php?action=#ACTION_CODE#", "element" => "#SECTION_CODE#/#ELEMENT_CODE#/", "section" => "#SECTION_CODE#/", "sections" => "", "smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/"),
									  "SET_LAST_MODIFIED" => "Y",
									  "SET_STATUS_404" => "Y",
									  "SET_TITLE" => "N",
									  "SHOW_404" => "N",
									  "SHOW_DEACTIVATED" => "N",
									  "SHOW_PRICE_COUNT" => "1",
									  "SHOW_SKU_DESCRIPTION" => "N",
									  "SHOW_TOP_ELEMENTS" => "Y",
									  "SIDEBAR_DETAIL_SHOW" => "N",
									  "SIDEBAR_PATH" => "",
									  "SIDEBAR_SECTION_SHOW" => "N",
									  "TEMPLATE_THEME" => "",
									  "TOP_ELEMENT_COUNT" => "9",
									  "TOP_ELEMENT_SORT_FIELD" => "sort",
									  "TOP_ELEMENT_SORT_FIELD2" => "id",
									  "TOP_ELEMENT_SORT_ORDER" => "asc",
									  "TOP_ELEMENT_SORT_ORDER2" => "desc",
									  "TOP_ENLARGE_PRODUCT" => "STRICT",
									  "TOP_LINE_ELEMENT_COUNT" => "3",
									  "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
									  "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false},{'VARIANT':'6','BIG_DATA':false}]",
									  "TOP_SHOW_SLIDER" => "N",
									  "TOP_SLIDER_INTERVAL" => "3000",
									  "TOP_SLIDER_PROGRESS" => "N",
									  "TOP_VIEW_MODE" => "SECTION",
									  "USER_CONSENT" => "N",
									  "USER_CONSENT_ID" => "0",
									  "USER_CONSENT_IS_CHECKED" => "N",
									  "USER_CONSENT_IS_LOADED" => "N",
									  "USE_COMPARE" => "N",
									  "USE_ELEMENT_COUNTER" => "Y",
									  "USE_ENHANCED_ECOMMERCE" => "N",
									  "USE_FILTER" => "Y",
									  "USE_MAIN_ELEMENT_SECTION" => "Y",
									  "USE_PRICE_COUNT" => "N",
									  "USE_PRODUCT_QUANTITY" => "N",
									  "USE_STORE" => "N"
								  )
							  ); ?>
                        <div class="filter__line">
                        </div>
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
                                <a href="#" class="list-group__item">Психолог</a> <a href="#" class="list-group__item">Психотерапевт</a>
                                <a href="#" class="list-group__item">Психиатр</a> <a href="#" class="list-group__item">Клинический
                                    психолог</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>