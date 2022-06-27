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
$this->setFrameMode(true);

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<? if('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID']){
	$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
}
if(0 < $arResult["SECTIONS_COUNT"]){ ?>
    <div class="filter__content">
        <div class="list-group list-group_inline">
			  <?
			  $intCurrentDepth = 1;
			  foreach($arResult['SECTIONS'] as &$arSection){
				  if($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL']){
					  if(0 < $intCurrentDepth){
						  ?>
                     <a id="<?= $this->GetEditAreaId($arSection['ID']); ?>"
                        class="list-group__item"
                        href="<?= $arSection["SECTION_PAGE_URL"]; ?>"><?= $arSection["NAME"]; ?>
								<? if($arParams["COUNT_ELEMENTS"] && $arSection['RELATIVE_DEPTH_LEVEL'] !== null){ ?>
									<?= $arSection["RELATIVE_DEPTH_LEVEL"]; ?>
								<? } ?>
                     </a>
					  <? }
				  } ?>
			  <? } ?>
        </div>
    </div>
<? } ?>
