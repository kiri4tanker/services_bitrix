<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 * @global CUser $USER
 * @global CMain $APPLICATION
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if($arResult["SHOW_SMS_FIELD"] == true){
	CJSCore::Init('phone_auth');
}
?>

<!--<form method="post" action="" class="register__form">
    <input name="name" class="input" placeholder="ФИО" type="text" require>
    <input name="phone" class="input" placeholder="Телефон" type="tel" id="phone" require>
    <input name="email" class="input" placeholder="Email" type="email" require>
    <input type="password" name="password" class="input" placeholder="Пароль" require>
    <input type="password" name="password_repeat" class="input" placeholder="Повторите пароль" require>
    <select class="select" name="user_type" id="" require>
        <option class="option" value="">Исполнитель</option>
        <option class="option" value="">Заказчик</option>
    </select>
    <div class="checkbox">
        <input class="checkbox__input" type="checkbox" id="checkbox" name="checkbox">
        <label class="checkbox__box" for="checkbox"></label>
        <label for="checkbox" class="checkbox__text text-muted">Согласен на обработку персональных данных</label>
    </div>
    <button class="btn">Создать аккаунт</button>
</form>-->


<div class="bx-auth-reg">

	<? if($USER->IsAuthorized()): ?>

       <p><?= GetMessage("MAIN_REGISTER_AUTH") ?></p>

	<? else: ?>
	<? if(count($arResult["ERRORS"]) > 0):
		foreach($arResult["ERRORS"] as $key => $error)
			if(intval($key) == 0 && $key !== 0)
				$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;" . GetMessage("REGISTER_FIELD_" . $key) . "&quot;", $error);

		ShowError(implode("<br />", $arResult["ERRORS"]));

   elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"): ?>
       <p><?= GetMessage("REGISTER_EMAIL_WILL_BE_SENT") ?></p>
	<? endif ?>

	<? if($arResult["SHOW_SMS_FIELD"] == true): ?>

       <form method="post" action="<?= POST_FORM_ACTION_URI ?>" name="regform">
			 <? if($arResult["BACKURL"] <> ''): ?>
              <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
			 <? endif; ?>
           <input class="input" type="hidden" name="SIGNED_DATA"
                  value="<?= htmlspecialcharsbx($arResult["SIGNED_DATA"]) ?>"/>
			 <?= GetMessage("main_register_sms") ?><span class="starrequired">*</span><input size="30" type="text"
                                                                                          name="SMS_CODE"
                                                                                          value="<?= htmlspecialcharsbx($arResult["SMS_CODE"]) ?>"
                                                                                          autocomplete="off"/>
           <input type="submit" name="code_submit_button"
                  value="<?= GetMessage("main_register_sms_send") ?>"/>
       </form>

       <script>
           new BX.PhoneAuth({
               containerId: 'bx_register_resend',
               errorContainerId: 'bx_register_error',
               interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
               data:
						<?=CUtil::PhpToJSObject([
							'signedData' => $arResult["SIGNED_DATA"],
						])?>,
               onError:
                   function (response) {
                       var errorDiv = BX('bx_register_error');
                       var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
                       errorNode.innerHTML = '';
                       for (var i = 0; i < response.errors.length; i++) {
                           errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
                       }
                       errorDiv.style.display = '';
                   }
           });
       </script>

       <div id="bx_register_error" style="display:none"><? ShowError("error") ?></div>

       <div id="bx_register_resend"></div>

	<? else: ?>

       <form class="register__form" method="post" action="<?= POST_FORM_ACTION_URI ?>" name="regform"
             enctype="multipart/form-data">
			 <? foreach($arResult["SHOW_FIELDS"] as $FIELD): ?>
				 <? if($FIELD == "AUTO_TIME_ZONE" && $arResult["TIME_ZONE_ENABLED"] == true): ?>
					 <?= GetMessage("main_profile_time_zones_auto") ?>
					 <? if($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"): ?>
                  <span class="starrequired">*</span>
				 <? endif ?>
				 <? else: ?>
					 <?= GetMessage("REGISTER_FIELD_" . $FIELD) ?>
                  :<? if($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"): ?>
                  <span class="starrequired">*</span><? endif ?>
				 <? switch($FIELD){
				 case "PASSWORD":
				 ?>
              <input class="input" type="password" name="REGISTER[<?= $FIELD ?>]"
                     value="<?= $arResult["VALUES"][$FIELD] ?>" autocomplete="off"/>
				 <? if($arResult["SECURE_AUTH"]): ?>
                  <span class="bx-auth-secure" id="bx_auth_secure"
                        title="<? echo GetMessage("AUTH_SECURE_NOTE") ?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                  <noscript>
				<span class="bx-auth-secure" title="<? echo GetMessage("AUTH_NONSECURE_NOTE") ?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                  </noscript>
                  <script type="text/javascript">
                      document.getElementById('bx_auth_secure').style.display = 'inline-block';
                  </script>
				 <? endif ?>
				 <? break;
				 case "CONFIRM_PASSWORD": ?>
              <input class="input" type="password" name="REGISTER[<?= $FIELD ?>]"
                     value="<?= $arResult["VALUES"][$FIELD] ?>" autocomplete="off"/>
					 <? break; ?>
				 <? } ?>
				 <? endif ?>
			 <? endforeach ?>

			 <? if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"): ?>
				 <?= trim($arParams["USER_PROPERTY_NAME"]) <> '' ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB") ?>
				 <? foreach($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField): ?>
					 <?= $arUserField["EDIT_FORM_LABEL"] ?>:<? if($arUserField["MANDATORY"] == "Y"): ?>
                      <span class="starrequired">*</span><? endif; ?>
					 <? $APPLICATION->IncludeComponent(
						 "bitrix:system.field.edit",
						 $arUserField["USER_TYPE"]["USER_TYPE_ID"],
						 array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "regform"), null, array("HIDE_ICONS" => "Y")); ?>
				 <? endforeach; ?>
			 <? endif; ?>

           <input class="btn" type="submit" name="register_submit_button" value="<?= GetMessage("AUTH_REGISTER") ?>"/>
       </form>
	<? endif //$arResult["SHOW_SMS_FIELD"] == true ?>
	<? endif ?>
</div>