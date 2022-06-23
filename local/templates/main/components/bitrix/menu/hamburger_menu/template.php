<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if(!empty($arResult)){ ?>
    <ul class="mobile-nav__menu">
		 <? foreach($arResult as $arItem){
			 if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1){
				 continue;
			 } ?>
			 <? if($arItem["SELECTED"]){ ?>
               <li class="mobile-nav__item">
                   <a href="<?= $arItem["LINK"] ?>"
                      class="mobile-nav__link active"><?= $arItem["TEXT"] ?>
                   </a>
               </li>
			 <? }else{ ?>
               <li class="mobile-nav__item">
                   <a href="<?= $arItem["LINK"] ?>"
                      class="mobile-nav__link"><?= $arItem["TEXT"] ?>
                   </a>
               </li>
			 <? } ?>
		 <? } ?>
    </ul>
<? } ?>