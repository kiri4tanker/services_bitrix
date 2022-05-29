<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="section__wrapper">
                    <div class="contacts">
                        <div class="section__heading">
                            <h1 class="section__title">Контакты</h1>
                            <div class="contact">
                                <strong class="contacts__strong">Для партнёров</strong>
                                <p class="contacts__text">Запускаем проекты, которые делают жизнь в городе лучше. Есть
                                    идеи? <a href="mailto:info@yslugi.com">info@yslugi.com</a></p>
                            </div>
                            <div class="contact">
                                <strong class="contacts__strong">Для СМИ и PR-служб</strong>
                                <p class="contacts__text">Запускаем проекты, которые делают жизнь в городе лучше. Есть
                                    идеи? <a href="mailto:info@yslugi.com">info@yslugi.com</a></p>
                            </div>
                        </div>
                        <div class="section__content">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/contact.png?70ff731ec07aa8aa76dc4e040ea69f7b"
                                 alt="contant-img" class="section__img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>