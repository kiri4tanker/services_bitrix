<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <a class="logo" href="index.php">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/footer/inc_footer_logo.php"
						)
					); ?>
            </a>
            <nav class="nav">
					<? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", array(
						"ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
						"CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
						"DELAY" => "N",    // Откладывать выполнение шаблона меню
						"MAX_LEVEL" => "1",    // Уровень вложенности меню
						"MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
							0 => "",
						),
						"MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
						"MENU_CACHE_TYPE" => "A",    // Тип кеширования
						"MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
						"ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
						"USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
					),
						false
					); ?>
            </nav>
            <button class="footer__feedback btn" data-micromodal-trigger="modal-feedback">
                <ion-icon name="build-outline"></ion-icon>
            </button>
            <div class="footer__line"></div>
            <p class="footer__copyright text-muted">© ООО "Услуги.ру" Все права защищены 2022</p>
        </div>
    </div>
</footer>

<div class="modal micromodal-slide" id="modal-feedback" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close="">
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-feedback-title">
            <header class="modal__header">
                <h3 class="modal__title" id="modal-feedback-title">Мы здесь, чтобы помочь</h3>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close=""></button>
            </header>
            <main class="modal__content" id="modal-feedback-content">
					<? $APPLICATION->IncludeComponent(
						"bitrix:iblock.element.add.form",
						"feedback",
						array(
							"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
							"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
							"CUSTOM_TITLE_DETAIL_PICTURE" => "",
							"CUSTOM_TITLE_DETAIL_TEXT" => "",
							"CUSTOM_TITLE_IBLOCK_SECTION" => "",
							"CUSTOM_TITLE_NAME" => "Ваше имя",
							"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
							"CUSTOM_TITLE_PREVIEW_TEXT" => "Ваше сообщение",
							"CUSTOM_TITLE_TAGS" => "",
							"CUSTOM_TITLE_PHONE" => "Телефон",
							"CUSTOM_TITLE_EMAIL" => "Email",
							"DEFAULT_INPUT_SIZE" => "30",
							"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
							"ELEMENT_ASSOC" => "CREATED_BY",
							"GROUPS" => array(
								0 => "2",
							),
							"IBLOCK_ID" => "5",
							"IBLOCK_TYPE" => "form",
							"LEVEL_LAST" => "Y",
							"LIST_URL" => "",
							"MAX_FILE_SIZE" => "0",
							"MAX_LEVELS" => "100000",
							"MAX_USER_ENTRIES" => "100000",
							"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
							"PROPERTY_CODES" => array(
								0 => "10",
								1 => "11",
								2 => "NAME",
								3 => "PREVIEW_TEXT",
							),
							"PROPERTY_CODES_REQUIRED" => array(
								0 => "10",
								1 => "11",
								2 => "NAME",
								3 => "PREVIEW_TEXT",
							),
							"RESIZE_IMAGES" => "N",
							"SEF_MODE" => "N",
							"STATUS" => "ANY",
							"STATUS_NEW" => "N",
							"USER_MESSAGE_ADD" => "Спасибо! Ваша заявка отправлена!",
							"USER_MESSAGE_EDIT" => "",
							"USE_CAPTCHA" => "N",
							"AJAX_MODE" => "Y",
							"COMPONENT_TEMPLATE" => "feedback"
						),
						false
					); ?>
            </main>
        </div>
    </div>
</div>
</body>
</html>