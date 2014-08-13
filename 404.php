<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

<?$APPLICATION->SetTitle("Страница не найдена");?>

<div class="content main error_404">
  <?
  /*$APPLICATION->IncludeComponent("bitrix:main.map", ".default", array(
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "SET_TITLE" => "Y",
    "LEVEL"	=>	"3",
    "COL_NUM"	=>	"2",
    "SHOW_DESCRIPTION" => "Y"
    ),
    false
  );*/
  ?>
  <div class="error_404_wrap">
    <div class="error_404_left">
      <a href="//<?=SITE_SERVER_NAME?>" class="col1" ><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png"  /></a>
    </div>
    <div class="error_404_right">
      <div>404 страница не найдена</div>
      <div class="error_404_onmain"><a href="//<?=SITE_SERVER_NAME?>" class="col1" >На главную</a></div>
    </div>
  </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
