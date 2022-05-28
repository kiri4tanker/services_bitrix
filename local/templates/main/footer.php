<footer class="footer">
    <div class="container">
        <div class="footer__wrapper">
            <a class="logo" href="#">
                <img src="/images/footer__logo.svg?17deb9b072d7979e720c31b98ce8ad1e" alt="LOGO">
            </a>
            <nav class="nav">
                <ul class="nav__menu">
                    <li class="nav__item">
                        <a class="nav__link active" href="index.html">Главная</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="services.html">Услуги</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="about-us.html">О сервисе</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="contacts.html">Контакты</a>
                    </li>
                </ul>
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