<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? ShowMessage($arParams["~AUTH_RESULT"]); ?>
<form class="login__form" name="bform" method="post" target="_top" action="<?= $arResult["AUTH_URL"] ?>">
	<? if(strlen($arResult["BACKURL"]) > 0){ ?>
       <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
	<? } ?>
    <input class="input" type="hidden" name="AUTH_FORM" value="Y">
    <input class="input" type="hidden" name="TYPE" value="SEND_PWD">
    <h3>Введите вашу почту</h3>
    <input class="input" placeholder="<?= GetMessage("AUTH_EMAIL") ?>" type="text" name="USER_EMAIL" maxlength="255"/>
    <div class="inline inline_lg">
        <input class="btn" type="submit" name="send_account_info" value="<?= GetMessage("AUTH_SEND") ?>"/>
        <a class="btn" href="/">На главную</a>
    </div>
</form>
<script type="text/javascript">
    document.bform.USER_LOGIN.focus();
</script>