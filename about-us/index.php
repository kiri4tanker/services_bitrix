<?
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?>

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__heading">
                        <h2 class="section__title">О сервисе</h2>
                    </div>
                    <div class="section__content">
                        <div class="about-us">
                            <div class="about-us__content">
                                <p class="text-muted">Услуги.ру — это сервис, который помогает клиентам и специалистам
                                    встретиться. Клиенты находят здесь профессионалов для решения любых задач —
                                    репетиторов, автоинструкторов, сантехников, парикмахеров.</p>
                                <p class="text-muted">А специалисты, в свою очередь, быстро находят клиентов, ведь с
                                    помощью сайта можно в один клик организовать свой бизнес на дому без вложений.</p>
                                <p class="text-muted">Наш сервис используют по всей России, Вы можете найти нужного вам
                                    специалиста в любом городе. На данной странице вы узнаете, где найти хорошего
                                    специалиста в вашем городе, его контакты и расценки.</p>
                                <p class="text-muted">Мы помогаем найти специалиста в городе и найти ему замену в случае
                                    необходимости.<br>Срочный вызов специалиста на дом – это отличная возможность быстро
                                    решить возникшую проблему и не ожидать долгие часы, когда приедет ремонтная бригада.
                                </p>
                            </div>
                            <div class="about-us__img">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/about-us.png?a14381182c5ab45547e8239b419f8218"
                                     alt="about-us-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>