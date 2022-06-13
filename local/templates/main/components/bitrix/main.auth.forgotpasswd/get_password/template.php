<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

\Bitrix\Main\Page\Asset::getInstance()->addCss('/bitrix/css/main/system.auth/flat/style.css');

if ($arResult[ 'AUTHORIZED' ]) {
    echo Loc::getMessage('MAIN_AUTH_PWD_SUCCESS');
    return;
}
?>

<div class="bx-authform">
    <? if ($arResult[ 'ERRORS' ]): ?>
        <div class="alert alert-danger">
            <? foreach ($arResult[ 'ERRORS' ] as $error) {
                echo $error;
            }
            ?>
        </div>
    <? elseif ($arResult[ 'SUCCESS' ]): ?>
        <div class="alert alert-success">
            <?= $arResult[ 'SUCCESS' ]; ?>
        </div>
    <? endif; ?>

    <form class="login__form" name="bform" method="post" target="_top" action="<?= POST_FORM_ACTION_URI; ?>">
        <input class="input" placeholder="<?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_EMAIL'); ?>" type="text"
               name="<?= $arResult[ 'FIELDS' ][ 'email' ]; ?>" maxlength="255" value="">
        <input type="submit" class="btn" name="<?= $arResult[ 'FIELDS' ][ 'action' ]; ?>"
               value="<?= Loc::getMessage('MAIN_AUTH_PWD_FIELD_SUBMIT'); ?>">
        <? if ($arResult[ 'AUTH_AUTH_URL' ] || $arResult[ 'AUTH_REGISTER_URL' ]) { ?>
            <div class="inline inline_lg">
                <? if ($arResult[ 'AUTH_AUTH_URL' ]) { ?>
                    <a class="link" href="<?= $arResult[ 'AUTH_AUTH_URL' ]; ?>" rel="nofollow">
                        <?= Loc::getMessage('MAIN_AUTH_PWD_URL_AUTH_URL'); ?>
                    </a>
                <? }; ?>
                <? if ($arResult[ 'AUTH_REGISTER_URL' ]) { ?>
                    <a class="link" href="<?= $arResult[ 'AUTH_REGISTER_URL' ]; ?>" rel="nofollow">
                        <?= Loc::getMessage('MAIN_AUTH_PWD_URL_REGISTER_URL'); ?>
                    </a>
                <? }; ?>
            </div>
        <? }; ?>
    </form>
</div>

<script type="text/javascript">
    document.bform.<?= $arResult[ 'FIELDS' ][ 'login' ];?>.focus();
</script>
