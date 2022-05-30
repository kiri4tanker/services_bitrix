<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true);
?>
<? foreach ($arResult[ "ITEMS" ] as $arItem) { ?>
    <div class="stats__item" id="<?= $this->GetEditAreaId($arItem[ 'ID' ]); ?>">
        <?
        $this->AddEditAction($arItem[ 'ID' ], $arItem[ 'EDIT_LINK' ], CIBlock::GetArrayByID($arItem[ "IBLOCK_ID" ], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem[ 'ID' ], $arItem[ 'DELETE_LINK' ], CIBlock::GetArrayByID($arItem[ "IBLOCK_ID" ], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <h3 class="stats__number"><?= $arItem[ "NAME" ] ?></h3>
        <p class="stats__text"><?= $arItem[ "PREVIEW_TEXT" ]; ?></p>
    </div>
<? } ?>