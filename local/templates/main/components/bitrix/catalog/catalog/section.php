<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);
?>
<div class="filter__catalog">
    <div class="list-group">
		 <? $sectionListParams_two = array(
			 "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			 "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
			 "IBLOCK_ID" => $arParams["IBLOCK_ID"],
			 "TOP_DEPTH" => 1,
			 "CACHE_TYPE" => $arParams["CACHE_TYPE"],
			 "CACHE_TIME" => $arParams["CACHE_TIME"],
			 "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			 "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
			 "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
			 "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
			 "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
			 "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
		 );
		 $APPLICATION->IncludeComponent(
			 "bitrix:catalog.section.list",
			 "catalog_list",
			 $sectionListParams_two,
			 $component,
		 );


		 unset($sectionListParams_two);
		 ?>
    </div>
</div>
<div class="filter__content">
    <div class="list-group list-group_inline">
		 <?
		 $sectionListParams = array(
			 "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
			 "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			 "IBLOCK_ID" => $arParams["IBLOCK_ID"],
			 "CACHE_TYPE" => $arParams["CACHE_TYPE"],
			 "CACHE_TIME" => $arParams["CACHE_TIME"],
			 "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			 "COUNT_ELEMENTS" => $arParams["SECTION_COUNT_ELEMENTS"],
			 "TOP_DEPTH" => $arParams["SECTION_TOP_DEPTH"],
			 "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
			 "VIEW_MODE" => $arParams["SECTIONS_VIEW_MODE"],
			 "SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
			 "HIDE_SECTION_NAME" => (isset($arParams["SECTIONS_HIDE_SECTION_NAME"]) ? $arParams["SECTIONS_HIDE_SECTION_NAME"] : "N"),
			 "ADD_SECTIONS_CHAIN" => (isset($arParams["ADD_SECTIONS_CHAIN"]) ? $arParams["ADD_SECTIONS_CHAIN"] : '')
		 );

		 $APPLICATION->IncludeComponent(
			 "bitrix:catalog.section.list",
			 "catalog_list",
			 $sectionListParams,
			 $component,
		 );

		 unset($sectionListParams);
		 ?>
    </div>
</div>