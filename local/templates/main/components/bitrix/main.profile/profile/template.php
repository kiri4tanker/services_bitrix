<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 */
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if($arResult["SHOW_SMS_FIELD"] == true){
	CJSCore::Init('phone_auth');
} ?>

<div class="bx-auth-profile">

	<? ShowError($arResult["strProfileError"]); ?>
	<? if($arResult['DATA_SAVED'] == 'Y'){
		ShowNote(GetMessage('PROFILE_DATA_SAVED'));
	} ?>
	<? if($arResult["SHOW_SMS_FIELD"] == true){ ?>
       <form method="post" action="<?= $arResult["FORM_TARGET"] ?>">
			 <?= $arResult["BX_SESSION_CHECK"] ?>
           <input type="hidden"
                  name="lang"
                  value="<?= LANG ?>"/>
           <input type="hidden"
                  name="ID"
                  value=<?= $arResult["ID"] ?>/>
           <input type="hidden"
                  name="SIGNED_DATA"
                  value="<?= htmlspecialcharsbx($arResult["SIGNED_DATA"]) ?>"/>
			 <?= GetMessage("main_profile_code") ?>
           <span class="starrequired">*</span>
           <input size="30" type="text"
                  name="SMS_CODE"
                  value="<?= htmlspecialcharsbx($arResult["SMS_CODE"]) ?>"
                  autocomplete="off"/>
           <p>
               <input type="submit"
                      name="code_submit_button"
                      value="<?= GetMessage("main_profile_send") ?>"/>
           </p>
       </form>

       <script>
           new BX.PhoneAuth({
               containerId: 'bx_profile_resend',
               errorContainerId: 'bx_profile_error',
               interval: <?=$arResult["PHONE_CODE_RESEND_INTERVAL"]?>,
               data:
						<?=CUtil::PhpToJSObject([
							'signedData' => $arResult["SIGNED_DATA"],
						])?>,
               onError:
                   function (response) {
                       var errorDiv = BX('bx_profile_error');
                       var errorNode = BX.findChildByClassName(errorDiv, 'errortext');
                       errorNode.innerHTML = '';
                       for (var i = 0; i < response.errors.length; i++) {
                           errorNode.innerHTML = errorNode.innerHTML + BX.util.htmlspecialchars(response.errors[i].message) + '<br>';
                       }
                       errorDiv.style.display = '';
                   }
           });
       </script>

       <div id="bx_profile_error" style="display:none">
			 <? ShowError("error") ?>
       </div>

       <div id="bx_profile_resend"></div>

	<? }else{ ?>

       <script type="text/javascript">
           var opened_sections = [<?
				  $arResult["opened"] = $_COOKIE[$arResult["COOKIE_PREFIX"] . "_user_profile_open"];
				  $arResult["opened"] = preg_replace("/[^a-z0-9_,]/i", "", $arResult["opened"]);
				  if($arResult["opened"] <> ''){
					  echo "'" . implode("', '", explode(",", $arResult["opened"])) . "'";
				  }else{
					  $arResult["opened"] = "reg";
					  echo "'reg'";
				  }?>];

           var cookie_prefix = '<?=$arResult["COOKIE_PREFIX"]?>';
       </script>

       <form method="post" name="form1" action="<?= $arResult["FORM_TARGET"] ?>" enctype="multipart/form-data">
			 <?= $arResult["BX_SESSION_CHECK"] ?>
           <input type="hidden"
                  name="lang"
                  value="<?= LANG ?>"/>
           <input type="hidden"
                  name="ID"
                  value=<?= $arResult["ID"] ?>/>
           <div class="profile-link profile-user-div-link">
               <a title="<?= GetMessage("REG_SHOW_HIDE") ?>"
                  href="javascript:void(0)"
                  onclick="SectionClick('reg')">
                  <?= GetMessage("REG_SHOW_HIDE") ?>
               </a>
           </div>
           <div class="profile-block-<?= mb_strpos($arResult["opened"], "reg") === false ? "hidden" : "shown" ?>"
                id="user_div_reg">
				  <? if($arResult["ID"] > 0){ ?>
					  <? if($arResult["arUser"]["TIMESTAMP_X"] <> ''){ ?>
						  <?= GetMessage('LAST_UPDATE') ?>
						  <?= $arResult["arUser"]["TIMESTAMP_X"] ?>
					  <? } ?>
					  <? if($arResult["arUser"]["LAST_LOGIN"] <> ''){ ?>
						  <?= GetMessage('LAST_LOGIN') ?>
						  <?= $arResult["arUser"]["LAST_LOGIN"] ?>
					  <? } ?>
				  <? } ?>
				  <?= GetMessage("main_profile_title") ?>
               <input type="text"
                      name="TITLE"
                      value="<?= $arResult["arUser"]["TITLE"] ?>"/>
				  <?= GetMessage('NAME') ?>
               <input type="text"
                      name="NAME"
                      maxlength="50"
                      value="<?= $arResult["arUser"]["NAME"] ?>"/>
				  <?= GetMessage('LAST_NAME') ?>
               <input type="text"
                      name="LAST_NAME"
                      maxlength="50"
                      value="<?= $arResult["arUser"]["LAST_NAME"] ?>"/>
				  <?= GetMessage('SECOND_NAME') ?>
               <input type="text"
                      name="SECOND_NAME"
                      maxlength="50"
                      value="<?= $arResult["arUser"]["SECOND_NAME"] ?>"/>
				  <?= GetMessage('LOGIN') ?><span class="starrequired">*</span>
               <input type="text"
                      name="LOGIN"
                      maxlength="50"
                      value="<?= $arResult["arUser"]["LOGIN"] ?>"/>
				  <?= GetMessage('EMAIL') ?>
				  <? if($arResult["EMAIL_REQUIRED"]){ ?>
                  <span class="starrequired">*</span>
				  <? } ?>
               <input type="text"
                      name="EMAIL"
                      maxlength="50"
                      value="<?= $arResult["arUser"]["EMAIL"] ?>"/>
				  <? if($arResult["PHONE_REGISTRATION"]){ ?>
					  <?= GetMessage("main_profile_phone_number") ?>
					  <? if($arResult["PHONE_REQUIRED"]){ ?>
                      <span class="starrequired">*</span><? } ?>
                  <input type="text"
                         name="PHONE_NUMBER"
                         maxlength="50"
                         value="<?= $arResult["arUser"]["PHONE_NUMBER"] ?>"/>
				  <? } ?>
				  <? if($arResult['CAN_EDIT_PASSWORD']){ ?>
					  <?= GetMessage('NEW_PASSWORD_REQ') ?>
                  <input type="password"
                         name="NEW_PASSWORD"
                         maxlength="50"
                         value=""
                         autocomplete="off"
                         class="bx-auth-input"/>
				  <? if($arResult["SECURE_AUTH"]){ ?>
                  <span class="bx-auth-secure"
                        id="bx_auth_secure"
                        title="<?= GetMessage("AUTH_SECURE_NOTE") ?>"
                        style="display:none"></span>
                  <noscript>
				<span class="bx-auth-secure" title=" <?= GetMessage("AUTH_NONSECURE_NOTE") ?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                  </noscript>

                  <script type="text/javascript">
                      document.getElementById('bx_auth_secure').style.display = 'inline-block';
                  </script>

				  <? } ?>
				  <?= GetMessage('NEW_PASSWORD_CONFIRM') ?>
                  <input type="password"
                         name="NEW_PASSWORD_CONFIRM"
                         maxlength="50"
                         value=""
                         autocomplete="off"/>
				  <? } ?>
				  <? if($arResult["TIME_ZONE_ENABLED"] == true){ ?>
					  <?= GetMessage("main_profile_time_zones") ?>
					  <?= GetMessage("main_profile_time_zones_auto") ?>
                  <select name="AUTO_TIME_ZONE"
                          onchange="this.form.TIME_ZONE.disabled=(this.value != 'N')">
                      <option value="">
                         <?= GetMessage("main_profile_time_zones_auto_def") ?>
                      </option>
                      <option value="Y"<?= ($arResult["arUser"]["AUTO_TIME_ZONE"] == "Y" ? ' SELECTED="SELECTED"' : '') ?>>
                         <?= GetMessage("main_profile_time_zones_auto_yes") ?>
                      </option>
                      <option value="N"<?= ($arResult["arUser"]["AUTO_TIME_ZONE"] == "N" ? ' SELECTED="SELECTED"' : '') ?>>
                         <?= GetMessage("main_profile_time_zones_auto_no") ?>
                      </option>
                  </select>
					  <?= GetMessage("main_profile_time_zones_zones") ?>
                  <select name="TIME_ZONE"<? if($arResult["arUser"]["AUTO_TIME_ZONE"] <> "N") echo ' disabled="disabled"' ?>>
							<? foreach($arResult["TIME_ZONE_LIST"] as $tz => $tz_name){ ?>
                         <option value="<?= htmlspecialcharsbx($tz) ?>"<?= ($arResult["arUser"]["TIME_ZONE"] == $tz ? ' SELECTED="SELECTED"' : '') ?>>
                            <?= htmlspecialcharsbx($tz_name) ?>
                         </option>
							<? } ?>
                  </select>
				  <? } ?>
           </div>
           <div class="profile-link profile-user-div-link">
               <a title="<?= GetMessage("USER_SHOW_HIDE") ?>"
                  href="javascript:void(0)"
                  onclick="SectionClick('personal')">
                  <?= GetMessage("USER_PERSONAL_INFO") ?>
               </a>
           </div>
           <div id="user_div_personal"
                class="profile-block-<?= mb_strpos($arResult["opened"], "personal") === false ? "hidden" : "shown" ?>">
				  <?= GetMessage('USER_PROFESSION') ?>
               <input type="text"
                      name="PERSONAL_PROFESSION"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_PROFESSION"] ?>"/>
				  <?= GetMessage('USER_WWW') ?>
               <input type="text"
                      name="PERSONAL_WWW"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_WWW"] ?>"/>
				  <?= GetMessage('USER_ICQ') ?>
               <input type="text"
                      name="PERSONAL_ICQ"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_ICQ"] ?>"/>
				  <?= GetMessage('USER_GENDER') ?>
               <select name="PERSONAL_GENDER">
                   <option value="">
                      <?= GetMessage("USER_DONT_KNOW") ?>
                   </option>
                   <option value="M"<?= $arResult["arUser"]["PERSONAL_GENDER"] == "M" ? " SELECTED=\"SELECTED\"" : "" ?>>
                      <?= GetMessage("USER_MALE") ?>
                   </option>
                   <option value="F"<?= $arResult["arUser"]["PERSONAL_GENDER"] == "F" ? " SELECTED=\"SELECTED\"" : "" ?>>
                      <?= GetMessage("USER_FEMALE") ?>
                   </option>
               </select>
				  <?= GetMessage("USER_BIRTHDAY_DT") ?> (<?= $arResult["DATE_FORMAT"] ?>):
				  <? $APPLICATION->IncludeComponent(
					  'bitrix:main.calendar',
					  '',
					  array(
						  'SHOW_INPUT' => 'Y',
						  'FORM_NAME' => 'form1',
						  'INPUT_NAME' => 'PERSONAL_BIRTHDAY',
						  'INPUT_VALUE' => $arResult["arUser"]["PERSONAL_BIRTHDAY"],
						  'SHOW_TIME' => 'N'
					  ),
					  null,
					  array('HIDE_ICONS' => 'Y')
				  ); //=CalendarDate("PERSONAL_BIRTHDAY", $arResult["arUser"]["PERSONAL_BIRTHDAY"], "form1", "15")?>
				  <?= GetMessage("USER_PHOTO") ?>
				  <?= $arResult["arUser"]["PERSONAL_PHOTO_INPUT"] ?>
				  <? if($arResult["arUser"]["PERSONAL_PHOTO"] <> ''){ ?>
					  <?= $arResult["arUser"]["PERSONAL_PHOTO_HTML"] ?>
				  <? } ?>
				  <?= GetMessage("USER_PHONES") ?>
				  <?= GetMessage('USER_PHONE') ?>
               <input type="text"
                      name="PERSONAL_PHONE"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_PHONE"] ?>"/>
				  <?= GetMessage('USER_FAX') ?>
               <input type="text"
                      name="PERSONAL_FAX"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_FAX"] ?>"/>
				  <?= GetMessage('USER_MOBILE') ?>
               <input type="text"
                      name="PERSONAL_MOBILE"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_MOBILE"] ?>"/>
				  <?= GetMessage('USER_PAGER') ?>
               <input type="text"
                      name="PERSONAL_PAGER"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_PAGER"] ?>"/>
				  <?= GetMessage("USER_POST_ADDRESS") ?>
				  <?= GetMessage('USER_COUNTRY') ?>
				  <?= $arResult["COUNTRY_SELECT"] ?>
				  <?= GetMessage('USER_STATE') ?>
               <input type="text"
                      name="PERSONAL_STATE"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_STATE"] ?>"/>
				  <?= GetMessage('USER_CITY') ?>
               <input type="text"
                      name="PERSONAL_CITY"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_CITY"] ?>"/>
				  <?= GetMessage('USER_ZIP') ?>
               <input type="text"
                      name="PERSONAL_ZIP"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_ZIP"] ?>"/>
				  <?= GetMessage("USER_STREET") ?>
               <textarea cols="30"
                         rows="5"
                         name="PERSONAL_STREET">
                  <?= $arResult["arUser"]["PERSONAL_STREET"] ?>
               </textarea>
				  <?= GetMessage('USER_MAILBOX') ?>
               <input type="text"
                      name="PERSONAL_MAILBOX"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["PERSONAL_MAILBOX"] ?>"/>
				  <?= GetMessage("USER_NOTES") ?>
               <textarea cols="30"
                         rows="5"
                         name="PERSONAL_NOTES">
                  <?= $arResult["arUser"]["PERSONAL_NOTES"] ?>
               </textarea>
           </div>
           <div class="profile-link profile-user-div-link">
               <a title="<?= GetMessage("USER_SHOW_HIDE") ?>"
                  href="javascript:void(0)"
                  onclick="SectionClick('work')">
						<?= GetMessage("USER_WORK_INFO") ?>
               </a>
           </div>
           <div id="user_div_work"
                class="profile-block-<?= mb_strpos($arResult["opened"], "work") === false ? "hidden" : "shown" ?>">
				  <?= GetMessage('USER_COMPANY') ?>
               <input type="text" name="WORK_COMPANY" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_COMPANY"] ?>"/>
				  <?= GetMessage('USER_WWW') ?>
               <input type="text" name="WORK_WWW" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_WWW"] ?>"/>
				  <?= GetMessage('USER_DEPARTMENT') ?>
               <input type="text" name="WORK_DEPARTMENT" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_DEPARTMENT"] ?>"/>
				  <?= GetMessage('USER_POSITION') ?>
               <input type="text" name="WORK_POSITION" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_POSITION"] ?>"/>
				  <?= GetMessage("USER_WORK_PROFILE") ?>
               <textarea cols="30" rows="5"
                         name="WORK_PROFILE">
                  <?= $arResult["arUser"]["WORK_PROFILE"] ?>
               </textarea>
				  <?= GetMessage("USER_LOGO") ?>
				  <?= $arResult["arUser"]["WORK_LOGO_INPUT"] ?>
				  <? if($arResult["arUser"]["WORK_LOGO"] <> ''){ ?>
					  <?= $arResult["arUser"]["WORK_LOGO_HTML"] ?>
				  <? } ?>
				  <?= GetMessage("USER_PHONES") ?>
				  <?= GetMessage('USER_PHONE') ?>
               <input type="text"
                      name="WORK_PHONE"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_PHONE"] ?>"/>
				  <?= GetMessage('USER_FAX') ?>
               <input type="text" name="WORK_FAX" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_FAX"] ?>"/>
				  <?= GetMessage('USER_PAGER') ?>
               <input type="text" name="WORK_PAGER" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_PAGER"] ?>"/>
				  <?= GetMessage("USER_POST_ADDRESS") ?>
				  <?= GetMessage('USER_COUNTRY') ?>
				  <?= $arResult["COUNTRY_SELECT_WORK"] ?>
				  <?= GetMessage('USER_STATE') ?>
               <input type="text" name="WORK_STATE" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_STATE"] ?>"/>
				  <?= GetMessage('USER_CITY') ?>
               <input type="text" name="WORK_CITY" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_CITY"] ?>"/>
				  <?= GetMessage('USER_ZIP') ?>
               <input type="text" name="WORK_ZIP" maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_ZIP"] ?>"/>
				  <?= GetMessage("USER_STREET") ?>
               <textarea cols="30"
                         rows="5"
                         name="WORK_STREET"><?= $arResult["arUser"]["WORK_STREET"] ?></textarea>
				  <?= GetMessage('USER_MAILBOX') ?>
               <input type="text"
                      name="WORK_MAILBOX"
                      maxlength="255"
                      value="<?= $arResult["arUser"]["WORK_MAILBOX"] ?>"/>
				  <?= GetMessage("USER_NOTES") ?>
               <textarea cols="30" rows="5"
                         name="WORK_NOTES"><?= $arResult["arUser"]["WORK_NOTES"] ?></textarea>
           </div>
			 <? if($arResult["INCLUDE_FORUM"] == "Y"){ ?>
              <div class="profile-link profile-user-div-link">
                  <a title="<?= GetMessage("USER_SHOW_HIDE") ?>"
                     href="javascript:void(0)"
                     onclick="SectionClick('forum')"><?= GetMessage("forum_INFO") ?></a>
              </div>
              <div id="user_div_forum"
                   class="profile-block-<?= mb_strpos($arResult["opened"], "forum") === false ? "hidden" : "shown" ?>">

					  <?= GetMessage("forum_SHOW_NAME") ?>
                  <input type="hidden"
                         name="forum_SHOW_NAME"
                         value="N"/>
                  <input type="checkbox"
                         name="forum_SHOW_NAME"
                         value="Y" <? if($arResult["arForumUser"]["SHOW_NAME"] == "Y") echo "checked=\"checked\""; ?> />
					  <?= GetMessage('forum_DESCRIPTION') ?>
                  <input type="text"
                         name="forum_DESCRIPTION"
                         maxlength="255"
                         value="<?= $arResult["arForumUser"]["DESCRIPTION"] ?>"/>
					  <?= GetMessage('forum_INTERESTS') ?>
                  <textarea cols="30"
                            rows="5"
                            name="forum_INTERESTS"><?= $arResult["arForumUser"]["INTERESTS"]; ?></textarea>

					  <?= GetMessage("forum_SIGNATURE") ?>
                  <textarea cols="30"
                            rows="5"
                            name="forum_SIGNATURE"><?= $arResult["arForumUser"]["SIGNATURE"]; ?></textarea>

					  <?= GetMessage("forum_AVATAR") ?>
					  <?= $arResult["arForumUser"]["AVATAR_INPUT"] ?>
					  <? if($arResult["arForumUser"]["AVATAR"] <> ''){ ?>
						  <?= $arResult["arForumUser"]["AVATAR_HTML"] ?>
					  <? } ?>
              </div>

			 <? } ?>
			 <? if($arResult["INCLUDE_BLOG"] == "Y"){ ?>
              <div class="profile-link profile-user-div-link"><a title="<?= GetMessage("USER_SHOW_HIDE") ?>"
                                                                 href="javascript:void(0)"
                                                                 onclick="SectionClick('blog')"><?= GetMessage("blog_INFO") ?></a>
              </div>
              <div id="user_div_blog"
                   class="profile-block-<?= mb_strpos($arResult["opened"], "blog") === false ? "hidden" : "shown" ?>">

					  <?= GetMessage('blog_ALIAS') ?>
                  <input class="typeinput"
                         type="text"
                         name="blog_ALIAS"
                         maxlength="255"
                         value="<?= $arResult["arBlogUser"]["ALIAS"] ?>"/>
					  <?= GetMessage('blog_DESCRIPTION') ?>
                  <input class="typeinput"
                         type="text"
                         name="blog_DESCRIPTION"
                         maxlength="255"
                         value="<?= $arResult["arBlogUser"]["DESCRIPTION"] ?>"/>
					  <?= GetMessage('blog_INTERESTS') ?>
                  <textarea cols="30"
                            rows="5"
                            class="typearea"
                            name="blog_INTERESTS"><?= $arResult["arBlogUser"]["INTERESTS"]; ?></textarea>
					  <?= GetMessage("blog_AVATAR") ?>
					  <?= $arResult["arBlogUser"]["AVATAR_INPUT"] ?>
					  <? if($arResult["arBlogUser"]["AVATAR"] <> ''){ ?>
						  <?= $arResult["arBlogUser"]["AVATAR_HTML"] ?>
					  <? } ?>
              </div>
			 <? } ?>
			 <? if($arResult["INCLUDE_LEARNING"] == "Y"){ ?>
              <div class="profile-link profile-user-div-link">
                  <a title="<?= GetMessage("USER_SHOW_HIDE") ?>"
                     href="javascript:void(0)"
                     onclick="SectionClick('learning')">
							<?= GetMessage("learning_INFO") ?>
                  </a>
              </div>
              <div id="user_div_learning"
                   class="profile-block-<?= mb_strpos($arResult["opened"], "learning") === false ? "hidden" : "shown" ?>">
					  <?= GetMessage("learning_PUBLIC_PROFILE"); ?>
                  <input type="hidden"
                         name="student_PUBLIC_PROFILE"
                         value="N"/>
                  <input type="checkbox"
                         name="student_PUBLIC_PROFILE"
                         value="Y" <? if($arResult["arStudent"]["PUBLIC_PROFILE"] == "Y"){
							echo "checked=\"checked\"";
						} ?> />
					  <?= GetMessage("learning_RESUME"); ?>
                  <textarea cols="30"
                            rows="5"
                            name="student_RESUME">
                     <?= $arResult["arStudent"]["RESUME"]; ?>
                  </textarea>

					  <?= GetMessage("learning_TRANSCRIPT"); ?>
					  <?= $arResult["arStudent"]["TRANSCRIPT"]; ?>-<?= $arResult["ID"] ?>
              </div>
			 <? }; ?>
			 <? if($arResult["IS_ADMIN"]){ ?>
              <div class="profile-link profile-user-div-link">
                  <a title="<?= GetMessage("USER_SHOW_HIDE") ?>"
                     href="javascript:void(0)"
                     onclick="SectionClick('admin')">
							<?= GetMessage("USER_ADMIN_NOTES") ?>
                  </a>
              </div>
              <div id="user_div_admin"
                   class="profile-block-<?= mb_strpos($arResult["opened"], "admin") === false ? "hidden" : "shown" ?>">
					  <?= GetMessage("USER_ADMIN_NOTES") ?>
                  <textarea cols="30"
                            rows="5"
                            name="ADMIN_NOTES">
                     <?= $arResult["arUser"]["ADMIN_NOTES"] ?>
                  </textarea>
              </div>
			 <? }; ?>
			 <? if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"){ ?>
              <div class="profile-link profile-user-div-link">
                  <a title="<?= GetMessage("USER_SHOW_HIDE") ?>"
                     href="javascript:void(0)"
                     onclick="SectionClick('user_properties')">
							<?= trim($arParams["USER_PROPERTY_NAME"]) <> '' ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB") ?>
                  </a>
              </div>
              <div id="user_div_user_properties"
                   class="profile-block-<?= mb_strpos($arResult["opened"], "user_properties") === false ? "hidden" : "shown" ?>">
					  <? $first = true; ?>
					  <? foreach($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField){ ?>
						  <? if($arUserField["MANDATORY"] == "Y"){ ?>
                         <span class="starrequired">*</span>
						  <? }; ?>
						  <?= $arUserField["EDIT_FORM_LABEL"] ?>:
						  <? $APPLICATION->IncludeComponent(
							  "bitrix:system.field.edit",
							  $arUserField["USER_TYPE"]["USER_TYPE_ID"],
							  array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField), null, array("HIDE_ICONS" => "Y")); ?>
					  <? }; ?>
              </div>
			 <? }; ?>
			 <?= $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"]; ?>
           <input type="submit"
                  name="save"
                  value="<?= (($arResult["ID"] > 0) ? GetMessage("MAIN_SAVE") : GetMessage("MAIN_ADD")) ?>">
           <input type="reset"
                  value="<?= GetMessage('MAIN_RESET'); ?>">
       </form>

		<? if($arResult["SOCSERV_ENABLED"]){
			$APPLICATION->IncludeComponent("bitrix:socserv.auth.split", ".default", array(
				"SHOW_PROFILES" => "Y",
				"ALLOW_DELETE" => "Y"
			),
				false
			);
		} ?>
	<? } ?>
</div>