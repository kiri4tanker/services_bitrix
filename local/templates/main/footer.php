<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
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
                <form method="post" action="" class="feedback-form">
                    <input name="name" class="input" placeholder="Имя">
                    <input name="company" class="input" placeholder="Ваша компания">
                    <input name="theme" class="input" placeholder="Тема">
                    <input name="email" class="input" placeholder="Email" type="email">
                    <textarea name="comment" placeholder="Сообщение" class="input"></textarea>
                    <button class="btn">Отправить</button>
                </form>
            </main>
        </div>
    </div>
</div>
</body>
</html>