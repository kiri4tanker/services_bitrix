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
									<? if(!$USER->IsAuthorized()){
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
                        </div>
                        <div class="register">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>