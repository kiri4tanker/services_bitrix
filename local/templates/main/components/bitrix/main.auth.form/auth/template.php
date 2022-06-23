<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss(
	'/bitrix/css/main/system.auth/flat/style.css'
);

if($arResult['AUTHORIZED']){
	echo Loc::getMessage('MAIN_AUTH_FORM_SUCCESS');
	return;
} ?>


<div class="bx-authform">
	<? if($arResult['ERRORS']): ?>
       <div class="alert alert-danger">
			 <? foreach($arResult['ERRORS'] as $error){
				 echo $error;
			 } ?>
       </div>
	<? endif; ?>
	<? if($arResult['AUTH_SERVICES']){ ?>
		<? $APPLICATION->IncludeComponent('bitrix:socserv.auth.form',
			'flat',
			array(
				'AUTH_SERVICES' => $arResult['AUTH_SERVICES'],
				'AUTH_URL' => $arResult['CURR_URI']
			),
			$component,
			array('HIDE_ICONS' => 'Y')
		);
	} ?>

    <!--<form method="post" action="" class="login__form">
        <input name="email" class="input" placeholder="Email" type="email">
        <input type="password" name="password" class="input" placeholder="Пароль" id="">
        <select class="select" name="user_type" id="">
            <option class="option" value="">Исполнитель</option>
            <option class="option" value="">Заказчик</option>
        </select>
        <div class="inline inline_lg">
            <button class="btn">Войти</button>
            <a href="" class="link">Забыли пароль?</a>
        </div>
    </form>-->

    <form class="login__form" name="<?= $arResult['FORM_ID']; ?>" method="post" target="_top"
          action="<?= POST_FORM_ACTION_URI; ?>">
        <input class="input"
               placeholder="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_LOGIN'); ?>"
               type="text"
               name="<?= $arResult['FIELDS']['login']; ?>"
               value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']); ?>">
		 <? if($arResult['SECURE_AUTH']){ ?>
           <div class="bx-authform-psw-protected" id="bx_auth_secure" style="display:none">
               <div class="bx-authform-psw-protected-desc"><span></span>
						<?= Loc::getMessage('MAIN_AUTH_FORM_SECURE_NOTE'); ?>
               </div>
           </div>
           <script type="text/javascript">
               document.getElementById('bx_auth_secure').style.display = '';
           </script>
		 <? } ?>
        <input class="input"
               placeholder="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_PASS'); ?>"
               type="password"
               name="<?= $arResult['FIELDS']['password']; ?>">
        <div class="inline inline_lg">
            <input type="submit"
                   class="btn"
                   name="<?= $arResult['FIELDS']['action']; ?>"
                   value="<?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_SUBMIT'); ?>"/>
			  <? if($arResult['STORE_PASSWORD'] == 'Y'){ ?>
               <div class="checkbox">
                   <label class="bx-filter-param-label text-muted">
                       <input type="checkbox"
                              id="USER_REMEMBER"
                              name="<?= $arResult['FIELDS']['remember']; ?>"
                              value="Y"/>
                       <span class="bx-filter-param-text"><?= Loc::getMessage('MAIN_AUTH_FORM_FIELD_REMEMBER'); ?></span>
                   </label>
               </div>
			  <? } ?>
        </div>

		 <? if($arResult['AUTH_FORGOT_PASSWORD_URL'] || $arResult['AUTH_REGISTER_URL']){ ?>
           <div class="inline inline_lg">
				  <? if($arResult['AUTH_FORGOT_PASSWORD_URL']){ ?>
                  <a class="link"
                     href="<?= $arResult['AUTH_FORGOT_PASSWORD_URL']; ?>"
                     rel="nofollow">
							<?= Loc::getMessage('MAIN_AUTH_FORM_URL_FORGOT_PASSWORD'); ?>
                  </a>
				  <? }; ?>
				  <? if($arResult['AUTH_REGISTER_URL']){ ?>
                  <a class="link"
                     href="<?= $arResult['AUTH_REGISTER_URL']; ?>"
                     rel="nofollow">
							<?= Loc::getMessage('MAIN_AUTH_FORM_URL_REGISTER_URL'); ?>
                  </a>
				  <? }; ?>
           </div>
		 <? }; ?>
    </form>
</div>

<script type="text/javascript">
	<?if ($arResult['LAST_LOGIN'] != ''):?>
   try {
       document.<?= $arResult['FORM_ID'];?>.USER_PASSWORD.focus();
   } catch (e) {
   }
	<?else:?>
   try {
       document.<?= $arResult['FORM_ID'];?>.USER_LOGIN.focus();
   } catch (e) {
   }
	<?endif?>
</script>