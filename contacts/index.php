<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Услуги, Услуга. Заказать, Контакты");
$APPLICATION->SetPageProperty("description", "Контакты сервиса Услуги.ru");
$APPLICATION->SetTitle("Контакты");
?>

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="section__wrapper">
                    <div class="contacts">
                        <div class="section__heading">
									<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/contacts/inc_contacts_title.php"
										)
									); ?>
                            <div class="contact">
										 <? $APPLICATION->IncludeComponent(
											 "bitrix:main.include",
											 "",
											 array(
												 "AREA_FILE_SHOW" => "file",
												 "AREA_FILE_SUFFIX" => "inc",
												 "EDIT_TEMPLATE" => "",
												 "PATH" => "/include/contacts/inc_contacts_text-top.php"
											 )
										 ); ?>
                            </div>
                            <div class="contact">
										 <? $APPLICATION->IncludeComponent(
											 "bitrix:main.include",
											 "",
											 array(
												 "AREA_FILE_SHOW" => "file",
												 "AREA_FILE_SUFFIX" => "inc",
												 "EDIT_TEMPLATE" => "",
												 "PATH" => "/include/contacts/inc_contacts_text-bottom.php"
											 )
										 ); ?>
                            </div>
                        </div>
                        <div class="section__content">
									<? $APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										array(
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/include/contacts/inc_contacts_img.php"
										)
									); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>