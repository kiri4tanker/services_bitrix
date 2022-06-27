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

//<div class="list-group">
//			<button class="list-group__item list-group__item_active">Психология</button>
//			<button class="list-group__item">Ремонт авто</button>
//			<button class="list-group__item">Уборка</button>
//			<button class="list-group__item">Перевозка вещей</button>
//			<button class="list-group__item">Тренировки</button>
//		</div>

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'list-group',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'list-group__item',
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="<?= $arCurView['CONT']; ?>">
	<? if('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID']){
		$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
		$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
	}
	if(0 < $arResult["SECTIONS_COUNT"]){ ?>
       <ul class="<?= $arCurView['LIST']; ?>">
			 <?
			 switch($arParams['VIEW_MODE']){
			 case 'LIST':
			 $intCurrentDepth = 1;
			 $boolFirst = true;
			 foreach($arResult['SECTIONS'] as &$arSection){
			 $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			 $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

			 if($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL']){
				 if(0 < $intCurrentDepth){
					 echo "\n", str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']), '<ul>';
				 }
			 }elseif($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL']){
				 if(!$boolFirst){
					 echo '</li>';
				 }
			 }else{
				 while($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL']){
					 echo '</li>', "\n", str_repeat("\t", $intCurrentDepth), '</ul>', "\n", str_repeat("\t", $intCurrentDepth - 1);
					 $intCurrentDepth--;
				 }
				 echo str_repeat("\t", $intCurrentDepth - 1), '</li>';
			 }
			 echo(!$boolFirst ? "\n" : ''), str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
			 ?>
           <li id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
               <h2 class="list-group__item">
                   <a class="list-group__item" href="<?= $arSection["SECTION_PAGE_URL"]; ?>"><?= $arSection["NAME"]; ?>
							 <? if($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null){ ?>
                          <span>(<?= $arSection["ELEMENT_CNT"]; ?>)</span>
							 <? } ?>
                   </a>
               </h2>
				  <?
				  $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
				  $boolFirst = false;
				  }
				  unset($arSection);
				  while($intCurrentDepth > 1){
					  echo '</li>', "\n", str_repeat("\t", $intCurrentDepth), '</ul>', "\n", str_repeat("\t", $intCurrentDepth - 1);
					  $intCurrentDepth--;
				  }
				  if($intCurrentDepth > 0){
					  echo '</li>', "\n";
				  }
				  break;
				  }
				  ?>
       </ul>
	<? } ?>
</div>