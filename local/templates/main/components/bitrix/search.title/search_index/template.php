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
$this->setFrameMode(true); ?>
<?
$INPUT_ID = trim($arParams[ "~INPUT_ID" ]);
if ($INPUT_ID == '')
    $INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams[ "~CONTAINER_ID" ]);
if ($CONTAINER_ID == '')
    $CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if ($arParams[ "SHOW_INPUT" ] !== "N") {
    ?>
    <form id="<? echo $CONTAINER_ID ?>" method="post" action="<? echo $arResult[ "FORM_ACTION" ] ?>"
          class="search-form">
        <input id="<? echo $INPUT_ID ?>" name="search"
               class="search-form__input" placeholder="<?= GetMessage("CT_BST_SEARCH_PLACEHOLDER") ?>">
        <button class="search-form__btn">
            <ion-icon name="arrow-forward-outline"></ion-icon>
        </button>
    </form>
<? } ?>
<script>
    BX.ready(function () {
        new JCTitleSearch({
            'AJAX_PAGE': '<?echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
            'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
            'INPUT_ID': '<?echo $INPUT_ID?>',
            'MIN_QUERY_LEN': 2
        });
    });
</script>
