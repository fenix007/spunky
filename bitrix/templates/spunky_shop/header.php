<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/".SITE_TEMPLATE_ID."/header.php");
//$wizTemplateId = COption::GetOptionString("main", "wizard_template_id", "eshop_adapt_horizontal", SITE_ID);
CUtil::InitJSCore();
CJSCore::Init(array("fx"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>/favicon.ico" />
  <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
  <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery1.11.0-min.js"></script>
  <!-- Slider -->
  <script src="<?=SITE_TEMPLATE_PATH?>/js/slides.min.jquery.js"></script>
  <!-- Carousel -->
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/idangerous.swiper.css">
  <script src="<?=SITE_TEMPLATE_PATH?>/js/idangerous.swiper.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/js/base.js"></script>
  <script>
    $(function() {
      /*setTimeout(function() {
        showPopup2.call($(".popup.to-catalog"),false,false)
      },2000)*/
    })
  </script>

  <!--php to javascript vars-->
  <?
    $php_to_js = array(
      'login',
      'AUTH_FORM',
      'AUTH_ERROR'
    );
  ?>
  <script type="text/javascript">
    <?foreach($php_to_js as $key => $val):?>
        _<?=$val?>=false;
    <?endforeach;?>
    <?if(isset($APPLICATION->arAuthResult) && $APPLICATION->arAuthResult['TYPE'] === 'ERROR'):?>
      _AUTH_ERROR= true;
    <?endif;?>
    <?foreach($_POST as $key => $val):?>
      <?if(in_array($key, $php_to_js)):?>
        _<?=$key?>=<?='"' . $val . '"'?>;
      <?endif;?>
    <?endforeach;?>
    <?foreach($_GET as $key => $val):?>
      <?if(in_array($key, $php_to_js)):?>
        _<?=$key?>=<?='"' . $val . '"'?>;
      <?endif;?>
    <?endforeach;?>
  </script>
  <?$APPLICATION->ShowHead();?>
  <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="wrapper">
<div class="screenBlock"></div>

<div class="popup to-catalog">
  <a href="#" class="close"><span>Позже</span><i></i></a>
  <p>В каталоге много <br>нового! <a href="#">Пойдём?</a> </p>
</div>

<!-- Хедер-->
<header>
  <div class="line1">
    <div class="in">
      <ul class="menu">
        <li><a href="#" class="actve">первая</a></li>
        <li><a href="#">КАТАЛОГ</a></li>
        <li><a href="#">ДОСТАВКА и оплата</a></li>
        <li><a href="#">О SPUNKY BOX</a></li>
        <li><a href="#">КОНТАКТЫ</a></li>
        <li><a href="#">FEEDBACK</a></li>
      </ul>
      <?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "spunky", array(
          "REGISTER_URL" => "",
          "FORGOT_PASSWORD_URL" => "",
          "PROFILE_URL" => "",
          "SHOW_ERRORS" => "Y"
        ),
        false
      );?>
    </div>
  </div>
  <div class="line2">
    <div class="in">
      <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
          "AREA_FILE_SHOW" => "page",
          "AREA_FILE_SUFFIX" => "header_top",
          "EDIT_TEMPLATE" => ""
        ),
        false
      );?>
    </div>
  </div>
  <div class="line3">
    <div class="in">
      <div class="brands">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_SHOW" => "page",
            "AREA_FILE_SUFFIX" => "icons_on_main",
            "EDIT_TEMPLATE" => ""
          )
        );?>
      </div>
      <form action="search" class="search">
        <input type="text" placeholder="Что будем искать?">
        <button></button>
      </form>
    </div>
  </div>
  <div class="line4">
    <div class="in">
      <ul>
        <li><a href="#" class="active">НОВИНКИ</a></li>
        <li><a href="#">БЕЙСБОЛКИ</a></li>
        <li><a href="#">ТОЛСТОВКИ</a></li>
        <li><a href="#">ЖИЛЕТЫ</a></li>
        <li><a href="#">NBA</a></li>
        <li><a href="#">NHL</a></li>
        <li><a href="#">NFL</a></li>
        <li><a href="#">MLB</a></li>
        <li class="last"><a href="#">NCAA</a></li>
      </ul>
    </div>
  </div>
</header>
<!-- Хедер закончился-->