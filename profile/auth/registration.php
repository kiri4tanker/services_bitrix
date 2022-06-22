<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "Регистрация");
$APPLICATION->SetPageProperty("keywords", "Регистрация");
$APPLICATION->SetPageProperty("description", "Регистрация");
$APPLICATION->SetTitle("Регистрация");
?>
    <main class="main">
        <section class="section section_hybrid">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__heading">
                        <h1 class="section__title">Вход в личный кабинет</h1>
                    </div>
                    <div class="section__content">
                        <div class="register">
                            <img alt="register-img" src="/local/templates/main/images/register.png"
                                 class="register__img">
									<?
									if(!$USER->IsAuthorized()){
										$APPLICATION->IncludeComponent(
											"bitrix:main.register",
											"register",
											array(
												"AUTH" => "Y",
												"REQUIRED_FIELDS" => array("EMAIL", "NAME", "SECOND_NAME", "LAST_NAME", "PERSONAL_MOBILE"),
												"SET_TITLE" => "Y",
												"SHOW_FIELDS" => array("EMAIL", "NAME", "SECOND_NAME", "LAST_NAME", "PERSONAL_MOBILE"),
												"SUCCESS_PAGE" => "/profile/",
												"USER_PROPERTY" => array(),
												"USER_PROPERTY_NAME" => "",
												"USE_BACKURL" => "Y"
											)

										);
									}else{
										LocalRedirect(SITE_DIR . 'profile/');
									} ?>
                            <!--<form method="post" action="" class="register__form">
                                            <input name="name" class="input" placeholder="ФИО" type="text" require>
                                            <input name="phone" class="input" placeholder="Телефон" type="tel" id="phone" require>
                                            <input name="email" class="input" placeholder="Email" type="email" require>
                                            <input type="password" name="password" class="input" placeholder="Пароль" require>
                                            <input type="password" name="password_repeat" class="input" placeholder="Повторите пароль" require>
                                            <select class="select" name="user_type" id="" require>
                                                <option class="option" value="">Исполнитель</option>
                                                <option class="option" value="">Заказчик</option>
                                            </select>
                                            <div class="checkbox">
                                                <input class="checkbox__input" type="checkbox" id="checkbox" name="checkbox">
                                                <label class="checkbox__box" for="checkbox"></label>
                                                <label for="checkbox" class="checkbox__text text-muted">Согласен на обработку персональных данных</label>
                                            </div>
                                            <button class="btn">Создать аккаунт</button>
                                        </form>-->
                        </div>
                        <div class="register">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>