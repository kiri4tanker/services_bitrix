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
    <div class="service" id="<?= $this->GetEditAreaId($arItem[ 'ID' ]); ?>">
        <?
        $this->AddEditAction($arItem[ 'ID' ], $arItem[ 'EDIT_LINK' ], CIBlock::GetArrayByID($arItem[ "IBLOCK_ID" ], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem[ 'ID' ], $arItem[ 'DELETE_LINK' ], CIBlock::GetArrayByID($arItem[ "IBLOCK_ID" ], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <a href="<?= $arItem[ "DETAIL_OAGE_URL" ] ?>" class="service__card">
            <? $img = !empty($arItem[ "PREVIEW_PICTURE" ]) ? $arItem[ "PREVIEW_PICTURE" ][ "SRC" ] : ""; ?>
            <img src="<?= $img ?>" alt="" class="service__img">
            <p class="service__text"><?= $arItem[ "NAME" ] ?></p>
        </a>
    </div>
<? } ?>