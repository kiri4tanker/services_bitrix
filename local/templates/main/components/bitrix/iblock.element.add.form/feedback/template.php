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

$arResult[ "PROPERTY_LIST" ] = $arParams[ "PROPERTY_CODES" ];
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
    <? if (is_array($arResult[ "PROPERTY_LIST" ]) && !empty($arResult[ "PROPERTY_LIST" ])) { ?>
        <? foreach ($arResult[ "PROPERTY_LIST" ] as $propertyID) { ?>
            <? if (intval($propertyID) > 0) $title = ["PROPERTY_LIST_FULL"][ $propertyID ][ "NAME" ];
            else $title = !empty($arParams[ "CUSTOM_TITLE_" . $propertyID ]) ? $arParams[ "CUSTOM_TITLE_" . $propertyID ] : GetMessage("IBLOCK_FIELD_" . $propertyID);

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

            if ($arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "GetPublicEditHTML" ]) $INPUT_TYPE = "USER_TYPE";
            else $INPUT_TYPE = $arResult[ "PROPERTY_LIST_FULL" ][ $propertyID ][ "PROPERTY_TYPE" ];

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

                        $type = "text";
                        if ($arResult[ "PROPERTY_LIST_FULL" ][ $propertyID[ "CODE" ] == "EMAIL" ]) $type = "email";
                        else if ($arResult[ "PROPERTY_LIST_FULL" ][ $propertyID[ "CODE" ] == "PHONE" ]) $type = "tel";
                        ?>
                        <input <? if ($isRequired) echo "required" ?>
                                placeholder="<?= $title ?>" class="input"
                                type="<?= $type ?>"
                                name="PROPERTY[<?= $propertyID ?>][<?= $i ?>]"
                                value="<?= $value ?>"/>
                        <?
                    }
            }; ?>
        <? } ?>
        <input type="submit" class="btn" name="iblock_submit" value="<?= GetMessage("IBLOCK_FORM_SUBMIT") ?>"/>
    <? } ?>
</form>