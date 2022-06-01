<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);
?>

<? if (!empty($arResult[ "ERRORS" ])) {
    ShowError(implode("<br />", $arResult[ "ERRORS" ]));
};
if ($arResult[ "MESSAGE" ] <> '') {
    ShowNote($arResult[ "MESSAGE" ]);
}
?>

<form class="feedback-form" name="iblock_add" action="<?= POST_FORM_ACTION_URI ?>" method="post"
      enctype="multipart/form-data">
    <?= bitrix_sessid_post() ?>
    <? if ($arParams[ "MAX_FILE_SIZE" ] > 0) { ?>
        <input class="input" type="hidden" name="MAX_FILE_SIZE" value="<?= $arParams[ "MAX_FILE_SIZE" ] ?>"/>
    <? } ?>
    <? if (is_array($arResult[ "PROPERTY_LIST" ]) && !empty($arResult[ "PROPERTY_LIST" ])) { ?>
        <? foreach ($arResult[ "PROPERTY_LIST" ] as $propertyID) { ?>
            <? if (intval($propertyID) > 0)
                $title = ["PROPERTY_LIST_FULL"][ $propertyID ][ "NAME" ];
            else
                $title = !empty($arParams[ "CUSTOM_TITLE_" . $propertyID ]) ? $arParams[ "CUSTOM_TITLE_" . $propertyID ] : GetMessage("IBLOCK_FIELD_" . $propertyID);

            $isRequired = false;
            if (in_array($propertyID, $arResult[ "PROPERTY_REQUIRED" ])) {
                $title .= "*";
                $isRequired = true;
            }

            if ($arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "MULTIPLE" ] == "Y") {
                $inputNum = ($arParams[ "ID" ] > 0 || count($arResult[ "ERRORS" ]) > 0) ? count($arResult[ "ELEMENT_PROPERTIES" ][ $propertyID ]) : 0;
                $inputNum += $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "MULTIPLE_CNT" ];
            } else
                $inputNum = 1;

            if ($arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "GetPublicEditHTML" ])
                $INPUT_TYPE = "USER_TYPE";
            else
                $INPUT_TYPE = $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "PROPERTY_TYPE" ];

            switch ($INPUT_TYPE) {
                case "USER_TYPE":
                    for ($i = 0; $i < $inputNum; $i++) {
                        if ($arParams[ "ID" ] > 0 || count($arResult[ "ERRORS" ]) > 0) {
                            $value = intval($propertyID) > 0 ? $arResult[ "ELEMENT_PROPERTIES" ][ $propertyID ][ $i ][ "~VALUE" ] : $arResult[ "ELEMENT" ][ $propertyID ];
                            $description = intval($propertyID) > 0 ? $arResult[ "ELEMENT_PROPERTIES" ][ $propertyID ][ $i ][ "DESCRIPTION" ] : "";
                        } elseif ($i == 0) {
                            $value = intval($propertyID) <= 0 ? "" : $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "DEFAULT_VALUE" ];
                            $description = "";
                        } else {
                            $value = "";
                            $description = "";
                        }
                        echo call_user_func_array($arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "GetPublicEditHTML" ],
                            array(
                                $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ],
                                array(
                                    "VALUE" => $value,
                                    "DESCRIPTION" => $description,
                                ),
                                array(
                                    "VALUE" => "PROPERTY[" . $propertyID . "][" . $i . "][VALUE]",
                                    "DESCRIPTION" => "PROPERTY[" . $propertyID . "][" . $i . "][DESCRIPTION]",
                                    "FORM_NAME" => "iblock_add",
                                ),
                            ));
                    }
                    break;
                case "TAGS":
                    $APPLICATION->IncludeComponent(
                        "bitrix:search.tags.input",
                        "",
                        array(
                            "VALUE" => $arResult[ "ELEMENT" ][ $propertyID ],
                            "NAME" => "PROPERTY[" . $propertyID . "][0]",
                            "TEXT" => 'size="' . $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "COL_COUNT" ] . '"',
                        ), null, array("HIDE_ICONS" => "Y")
                    );
                    break;
                case "HTML":
                    $LHE = new CHTMLEditor;
                    $LHE->Show(array(
                        'name' => "PROPERTY[" . $propertyID . "][0]",
                        'id' => preg_replace("/[^a-z0-9]/i", '', "PROPERTY[" . $propertyID . "][0]"),
                        'inputName' => "PROPERTY[" . $propertyID . "][0]",
                        'content' => $arResult[ "ELEMENT" ][ $propertyID ],
                        'width' => '100%',
                        'minBodyWidth' => 350,
                        'normalBodyWidth' => 555,
                        'height' => '200',
                        'bAllowPhp' => false,
                        'limitPhpAccess' => false,
                        'autoResize' => true,
                        'autoResizeOffset' => 40,
                        'useFileDialogs' => false,
                        'saveOnBlur' => true,
                        'showTaskbars' => false,
                        'showNodeNavi' => false,
                        'askBeforeUnloadPage' => true,
                        'bbCode' => false,
                        'siteId' => SITE_ID,
                        'controlsMap' => array(
                            array('id' => 'Bold', 'compact' => true, 'sort' => 80),
                            array('id' => 'Italic', 'compact' => true, 'sort' => 90),
                            array('id' => 'Underline', 'compact' => true, 'sort' => 100),
                            array('id' => 'Strikeout', 'compact' => true, 'sort' => 110),
                            array('id' => 'RemoveFormat', 'compact' => true, 'sort' => 120),
                            array('id' => 'Color', 'compact' => true, 'sort' => 130),
                            array('id' => 'FontSelector', 'compact' => false, 'sort' => 135),
                            array('id' => 'FontSize', 'compact' => false, 'sort' => 140),
                            array('separator' => true, 'compact' => false, 'sort' => 145),
                            array('id' => 'OrderedList', 'compact' => true, 'sort' => 150),
                            array('id' => 'UnorderedList', 'compact' => true, 'sort' => 160),
                            array('id' => 'AlignList', 'compact' => false, 'sort' => 190),
                            array('separator' => true, 'compact' => false, 'sort' => 200),
                            array('id' => 'InsertLink', 'compact' => true, 'sort' => 210),
                            array('id' => 'InsertImage', 'compact' => false, 'sort' => 220),
                            array('id' => 'InsertVideo', 'compact' => true, 'sort' => 230),
                            array('id' => 'InsertTable', 'compact' => false, 'sort' => 250),
                            array('separator' => true, 'compact' => false, 'sort' => 290),
                            array('id' => 'Fullscreen', 'compact' => false, 'sort' => 310),
                            array('id' => 'More', 'compact' => true, 'sort' => 400)
                        ),
                    ));
                    break;
                case "T":
                    for ($i = 0; $i < $inputNum; $i++) {

                        if ($arParams[ "ID" ] > 0 || count($arResult[ "ERRORS" ]) > 0) {
                            $value = intval($propertyID) > 0 ? $arResult[ "ELEMENT_PROPERTIES" ][ $propertyID ][ $i ][ "VALUE" ] : $arResult[ "ELEMENT" ][ $propertyID ];
                        } elseif ($i == 0) {
                            $value = intval($propertyID) > 0 ? "" : $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "DEFAULT_VALUE" ];
                        } else {
                            $value = "";
                        }
                        ?>
                        <textarea <? if ($isRequired) echo "required" ?> placeholder="<?= $title ?>" class="input"
                                                                         name="PROPERTY[<?= $propertyID ?>][<?= $i ?>]"><?= $value ?></textarea>
                        <?
                    }
                    break;
                case "S":
                case "N":
                    for ($i = 0; $i < $inputNum; $i++) {
                        if ($arParams[ "ID" ] > 0 || count($arResult[ "ERRORS" ]) > 0) {
                            $value = intval($propertyID) > 0 ? $arResult[ "ELEMENT_PROPERTIES" ][ $propertyID ][ $i ][ "VALUE" ] : $arResult[ "ELEMENT" ][ $propertyID ];
                        } elseif ($i == 0) {
                            $value = intval($propertyID) <= 0 ? "" : $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "DEFAULT_VALUE" ];

                        } else {
                            $value = "";
                        }
                        ?>
                        <input <? if ($isRequired) echo "required" ?> placeholder="<?= $title ?>" class="input"
                                                                      type="text"
                                                                      name="PROPERTY[<?= $propertyID ?>][<?= $i ?>]"
                                                                      value="<?= $value ?>"/>
                        <?
                    }
            }; ?>
        <? } ?>
        <button class="btn">Отправить</button>
    <? } ?>
</form>