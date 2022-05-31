<?
include_once($_SERVER[ 'DOCUMENT_ROOT' ] . '/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/header.php");
$APPLICATION->SetTitle("Страница не найдена");
?>
    <main class="main">
        <section class="section section_primary">
            <div class="container">
                <div class="section__wrapper">
                    <div class="section__content">
                        <div class="error">
                            <div class="error__content">
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/404/inc_404_title.php"
                                    )
                                ); ?>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/404/inc_404_subtitle.php"
                                    )
                                ); ?>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/404/inc_404_text.php"
                                    )
                                ); ?>
                                <? $APPLICATION->IncludeComponent(
                                    "bitrix:main.include",
                                    "",
                                    array(
                                        "AREA_FILE_SHOW" => "file",
                                        "AREA_FILE_SUFFIX" => "inc",
                                        "EDIT_TEMPLATE" => "",
                                        "PATH" => "/include/404/inc_404_btn.php"
                                    )
                                ); ?>
                            </div>
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/404/inc_404_img.php"
                                )
                            ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<? require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/footer.php"); ?>