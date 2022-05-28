<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" defer></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
            defer></script> <? $isIndex = $APPLICATION->GetCurPage() == SITE_DIR; ?>
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
            <a class="logo" href="index.html">
                <img src="/images/header__logo.svg?957ed2dd37d1392dd4edd402ad9a1d36" alt="LOGO">
            </a>
            <nav class="nav">
                <ul class="nav__menu">
                    <li class="nav__item">
                        <a class="nav__link" href="/index.html">Главная</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/services.html">Услуги</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/about-us.html">О сервисе</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="/contacts.html">Контакты</a>
                    </li>
                </ul>
            </nav>
            <div class="inline">
                <a href="/login.html" class="btn">
                    <ion-icon name="person-outline"></ion-icon>
                    Войти
                </a>
                <button class="btn" data-micromodal-trigger="modal-feedback">
                    <ion-icon name="build-outline"></ion-icon>
                </button>
            </div>
        </div>
        <div class="header__bottom">
            <nav class="mobile-nav">
                <ul class="mobile-nav__menu">
                    <li class="mobile-nav__item">
                        <a class="mobile-nav__link active" href="index.html">Главная</a>
                    </li>
                    <li class="mobile-nav__item">
                        <a class="mobile-nav__link" href="services.html">Услуги</a>
                    </li>
                    <li class="mobile-nav__item">
                        <a class="mobile-nav__link" href="about-us.html">О сервисе</a>
                    </li>
                    <li class="mobile-nav__item">
                        <a class="mobile-nav__link" href="contacts.html">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>