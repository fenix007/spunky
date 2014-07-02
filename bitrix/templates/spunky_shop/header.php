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
  <?$APPLICATION->ShowHead();?>
  <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="wrapper">
<div class="screenBlock"></div>
<div class="popup login">
  <a href="#" class="close"><span>Отмена</span><i></i></a>
  <p class="name">CHECK IN </p>
  <form action="login">
    <input type="text" placeholder="Логин">
    <input type="text" placeholder="Пароль">
    <a href="#" class="forget">Забыли пароль?</a>
    <div class="clr"></div>
    <button>Готово!</button>
    <a href="#" class="register">Регистрация</a>
  </form>
</div>
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
      <div class="login"> <!-- добавить клас logged если пользователь залогинен-->
        <div class="not-logged">
          <a href="#" class="login-buton">CHECK IN</a>&nbsp;&nbsp;/&nbsp;&nbsp;
          <a href="#">регистрация</a>
        </div>
        <div class="logged">
          <a href="#" class="nic">andreano_chelentano1986</a>
          <ul>
            <li><a href="#"><i class="i1"></i>Профиль</a></li>
            <li><a href="#" class="actvie"><i class="i2"></i>История покупок</a></li>
            <li><a href="#"><i class="i3"></i>Выйти</a></li>
          </ul>
        </div>
      </div>
      <ul class="socials">
        <li><a href="#" style="background-position: 0px 0px;"></a></li>
        <li><a href="#" style="background-position: -27px 0px;"></a></li>
      </ul>
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
<div class="content main">
  <div class="slider">
    <div class="slides_container">
      <div>
        <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide1.png" alt="">
        <div class="caption">
          <p class="p1">проспишь все  <span>скидки!</span></p>
          <p class="p2">А ну ка ходи <a href="#">сюда</a></p>
        </div>
      </div>
      <div>
        <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide2.png" alt="">
        <div class="caption">
          <p class="p1">проспишь все  <span>скидки 2!</span></p>
          <p class="p2">А ну ка ходи <a href="#">сюда</a></p>
        </div>
      </div>
      <div>
        <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide1.png" alt="">
        <div class="caption">
          <p class="p1">проспишь все  <span>скидки 3!</span></p>
          <p class="p2">А ну ка ходи <a href="#">сюда</a></p>
        </div>
      </div>
      <div>
        <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide2.png" alt="">
        <div class="caption">
          <p class="p1">проспишь все  <span>скидки 4!</span></p>
          <p class="p2">А ну ка ходи <a href="#">сюда</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
  <p class="page-title"><i></i>НОВИНКИ<i></i></p>
  <form action="filter" class="filters">
    <div class="group">
      <div class="filt type">
        <p class="name">Тип:</p>
        <div class="item cap"><i></i></div>
        <div class="item t-shirt"><i></i></div>
        <div class="item jacket"><i></i></div>
        <div class="item shoes"><i></i></div>
      </div>
      <div class="filt size">
        <p class="name">Размер:</p>
        <div class="item cap">
          <span>XS</span>
          <div class="dr-down">
            <i></i>
            <ul>
              <li>
                <a href="javascript:void(0)" class="active">
                  <span>XS</span>
                  <input type="radio" name="rad1" value="XS" checked>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>S</span>
                  <input type="radio" name="rad1" value="S">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>M</span>
                  <input type="radio" name="rad1" value="M">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>L</span>
                  <input type="radio" name="rad1" value="L">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>XL</span>
                  <input type="radio" name="rad1" value="XL">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>XXL</span>
                  <input type="radio" name="rad1" value="XXL">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item t-shirt">
          <span>L</span>
          <div class="dr-down">
            <i></i>
            <ul>
              <li>
                <a href="javascript:void(0)">
                  <span>XS</span>
                  <input type="radio" name="rad1" value="XS">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>S</span>
                  <input type="radio" name="rad1" value="S">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>M</span>
                  <input type="radio" name="rad1" value="M">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="active">
                  <span>L</span>
                  <input type="radio" name="rad1" value="L" checked>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>XL</span>
                  <input type="radio" name="rad1" value="XL">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>XXL</span>
                  <input type="radio" name="rad1" value="XXL">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item jacket">
          <span>L</span>
          <div class="dr-down">
            <i></i>
            <ul>
              <li>
                <a href="javascript:void(0)">
                  <span>XS</span>
                  <input type="radio" name="rad1" value="XS">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>S</span>
                  <input type="radio" name="rad1" value="S">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>M</span>
                  <input type="radio" name="rad1" value="M">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="active">
                  <span>L</span>
                  <input type="radio" name="rad1" value="L" checked>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>XL</span>
                  <input type="radio" name="rad1" value="XL">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>XXL</span>
                  <input type="radio" name="rad1" value="XXL">
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="item shoes">
          <span>44</span>
          <div class="dr-down">
            <i></i>
            <ul>
              <li>
                <a href="javascript:void(0)">
                  <span>40</span>
                  <input type="radio" name="rad1" value="40">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>41</span>
                  <input type="radio" name="rad1" value="41">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>42</span>
                  <input type="radio" name="rad1" value="42">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>43</span>
                  <input type="radio" name="rad1" value="43">
                </a>
              </li>
              <li>
                <a href="javascript:void(0)" class="active">
                  <span>44</span>
                  <input type="radio" name="rad1" value="44" checked>
                </a>
              </li>
              <li>
                <a href="javascript:void(0)">
                  <span>45</span>
                  <input type="radio" name="rad1" value="45">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="color">
      <div class="wisible-part">
        <i class="col"></i>
        <p>Цвет:</p>
      </div>
      <a href="#" class="addColorv"><i></i></a>
      <div class="drop">
        <div class="in">
          <p class="ttl">Выберите цвета</p>
          <a href="#" class="side1">Выбрать все</a>
          <a href="#" class="side2">Любой</a>
          <div class="clr"></div>
          <a href="#" class="item-color no-gr" style="background-color: #fff;"><i class="bgw"></i><input type="checkbox"></a>
          <a href="#" class="item-color no-gr" style="background-color: #aaa;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color no-gr" style="background-color: #888;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color no-gr" style="background-color: #444;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color no-gr" style="background-color: #111;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #ffa100;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #ff0000;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color selected" style="background-color: #ffed00;"><i></i><input type="checkbox" checked></a>
          <a href="#" class="item-color" style="background-color: #9dff00;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #009bff;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #b1ff00;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color selected" style="background-color: #00ffae;"><i></i><input type="checkbox" checked></a>
          <a href="#" class="item-color" style="background-color: #009bff;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color selected" style="background-color: #0012ff;"><i></i><input type="checkbox" checked></a>
          <a href="#" class="item-color" style="background-color: #ff00e8;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #ffa100;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #ff0000;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #ffed00;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #9dff00;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #009bff;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #b1ff00;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #00ffae;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #009bff;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #0012ff;"><i></i><input type="checkbox"></a>
          <a href="#" class="item-color" style="background-color: #ff00e8;"><i></i><input type="checkbox"></a>
          <div class="clr"></div>
        </div>
      </div>
    </div>
    <a href="#" class="reset"><i></i>Сбросить</a>
  </form>

  <div class="content-items">