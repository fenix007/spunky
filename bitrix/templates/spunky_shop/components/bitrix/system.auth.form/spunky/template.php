<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arResult["FORM_TYPE"] == "login"):?>
  <div class="popup login">
    <a href="#" class="close"><span>Отмена</span><i></i></a>
    <a href="#" class="close"><span>Отмена</span><i></i></a>
    <p class="name">CHECK IN </p>
    <div class="spunky_error">
      <?
      if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
        ShowMessage($arResult['ERROR_MESSAGE']);
      ?>
    </div>
    <form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
      <?if($arResult["BACKURL"] <> ''):?>
        <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
      <?endif?>
      <?foreach ($arResult["POST"] as $key => $value):?>
        <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
      <?endforeach?>
      <input type="hidden" name="AUTH_FORM" value="Y" />
      <input type="hidden" name="TYPE" value="AUTH" />
      <input type="text" name="USER_LOGIN" placeholder="<?=GetMessage("AUTH_LOGIN")?>" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" size="17" />
      <input type="password" name="USER_PASSWORD" placeholder="<?=GetMessage("AUTH_PASSWORD")?>" maxlength="50" size="17" />
      <noindex><a class="forget" href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></noindex>
      <!--<a href="#" class="forget">Забыли пароль?</a>-->
      <div class="clr"></div>
      <button><?=GetMessage("AUTH_LOGIN_BUTTON")?></button>
      <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
        <noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a></noindex>
      <?endif;?>
      <a href="#" class="register"><?=GetMessage("AUTH_REGISTRATION_HREF")?></a>
    </form>
  </div>
  <div class="login">
    <div class="not-logged">
      <a href="#" class="login-buton">CHECK IN</a>&nbsp;&nbsp;/&nbsp;&nbsp;
      <a href="#">регистрация</a>
    </div>
  </div>
  <ul class="socials">
    <li><a href="#" style="background-position: 0px 0px;"></a></li>
    <li><a href="#" style="background-position: -27px 0px;"></a></li>
  </ul>
<?
  else:
?>
  <div class="login logged">
    <div class="logged">
      <a href="#" class="nic"><?=$arResult["USER_NAME"]?></a>
      <ul>
        <li>
          <a href="<?=$arResult["PROFILE_URL"]?>"  title="<?=GetMessage("AUTH_PROFILE")?>">
            <i class="i1"></i><?=GetMessage("AUTH_PROFILE")?>
          </a>
        </li>
        <li>
          <a href="#" class="actvie">
            <i class="i2"></i>История покупок</a>
        </li>
        <li>
            <a class="logout_butt" href="#">
              <i class="i3"></i><?=GetMessage("AUTH_LOGOUT_BUTTON")?>
            </a>
        </li>
      </ul>
      <form class="logout_form" action="<?=$arResult["AUTH_URL"]?>">
        <?foreach ($arResult["GET"] as $key => $value):?>
          <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
        <?endforeach?>
        <input type="hidden" name="logout" value="yes" />
      </form>
    </div>
  </div>
<?endif?>