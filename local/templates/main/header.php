<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addString('<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>');
$asset->addString(' <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" defer></script>');
$asset->addCss(SITE_TEMPLATE_PATH . '/css/main.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/js/main.js');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><? $APPLICATION->ShowTitle(); ?></title>
	<? $APPLICATION->ShowHead(); ?>
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/manifest.webmanifest">
	<? $isIndex = $APPLICATION->GetCurPage() == SITE_DIR; ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header class="header">
    <div class="container">
        <div class="header__content">
            <button class="hamburger">
                <span class="hamburger__line"></span>
                <span class="hamburger__line"></span>
            </button>
            <a class="logo" href="../index.php">
					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "inc",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/include/header/inc_header_logo.php"
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
            <div class="inline">
					<? if(!$USER->IsAuthorized()){ ?>
                   <a href="/profile/auth/index.php" class="btn">
                       <ion-icon name="person-outline"></ion-icon>
                       Войти
                   </a>
					<? }else{ ?>
                   <a href="/profile/" class="btn">
                       <ion-icon name="person-outline"></ion-icon>
                       Профиль
                   </a>
					<? } ?>
                <button class="btn" data-micromodal-trigger="modal-feedback">
                    <ion-icon name="build-outline"></ion-icon>
                </button>
            </div>
        </div>
        <div class="header__bottom">
            <nav class="mobile-nav">
					<? $APPLICATION->IncludeComponent("bitrix:menu", "hamburger_menu", array(
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
        </div>
    </div>
</header>
<section class="breadcrumbs">
    <div class="container">
		 <? if(!$isIndex): ?>
			 <? $APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumbs", array(
				 "PATH" => "",    // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
				 "SITE_ID" => "s1",    // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
				 "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
			 ),
				 false
			 ); ?>
		 <? endif; ?>
    </div>
</section>