<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME']
);

$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
	'ID' => $strMainID,
	'PICT' => $strMainID.'_pict',
	'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
	'STICKER_ID' => $strMainID.'_sticker',
	'BIG_SLIDER_ID' => $strMainID.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
	'SLIDER_LIST' => $strMainID.'_slider_list',
	'SLIDER_LEFT' => $strMainID.'_slider_left',
	'SLIDER_RIGHT' => $strMainID.'_slider_right',
	'OLD_PRICE' => $strMainID.'_old_price',
	'PRICE' => $strMainID.'_price',
	'DISCOUNT_PRICE' => $strMainID.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
	'QUANTITY' => $strMainID.'_quantity',
	'QUANTITY_DOWN' => $strMainID.'_quant_down',
	'QUANTITY_UP' => $strMainID.'_quant_up',
	'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
	'BUY_LINK' => $strMainID.'_buy_link',
	'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
	'COMPARE_LINK' => $strMainID.'_compare_link',
	'PROP' => $strMainID.'_prop_',
	'PROP_DIV' => $strMainID.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
	'OFFER_GROUP' => $strMainID.'_set_group_',
	'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
);
$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);
$templateData['JS_OBJ'] = $strObName;

$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && '' != $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && '' != $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);
?>
<div class="bx_item_detail <? echo $templateData['TEMPLATE_CLASS']; ?>" id="<? echo $arItemIDs['ID']; ?>">
  <div class="detail-item">
    <div class="left-side">
      <div class="tov-type"><i class="jacket">
          <!--.cap, .t-shirt, .jacket, .shoes-->
        </i></div>

      <p class="price"><i></i>2.100 руб.</p>

      <div class="color"> <i></i>
        <div class="select">
          <div class="sel-visible">
            <div style="background-color: rgb(77, 255, 208);"></div>
          </div>
          <i class="trigger"></i>
          <div class="sel-list-wr">
            <div class="col1">
              <div class="co1"> <a href="#" class="item-col2" style="background-color: #ff0000;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col2" style="background-color: #ffed00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col2" style="background-color: #9dff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col2" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col2" style="background-color: #b1ff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col2" style="background-color: #00ffae;" ><i></i><input type="checkbox" /></a> </div>

              <div class="co2"> <a href="#" class="item-col2 selected" style="background-color: #ffed00;" ><i></i><input type="checkbox" checked="" /></a> <a href="#" class="item-col2" style="background-color: #9dff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col2" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col2" style="background-color: #b1ff00;" ><i></i><input type="checkbox" /></a> </div>
            </div>

            <div class="clr"></div>
          </div>
        </div>
      </div>

      <div id="showcase" class="showcase">
        <div class="showcase-slide">
          <div class="showcase-content"> <img src="pic/item-slider/slide1.png" alt="01"  /> </div>

          <div class="showcase-thumbnail" style="background-image: url(http://spunky.local/catalog/pic/item-slider/slide1.png);"></div>
        </div>

        <div class="showcase-slide">
          <div class="showcase-content"> <img src="pic/item-slider/slide2.png" alt="02"  /> </div>

          <div class="showcase-thumbnail" style="background-image: url(http://spunky.local/catalog/pic/item-slider/slide2.png);"></div>
        </div>

        <div class="showcase-slide">
          <div class="showcase-content"> <img src="pic/item-slider/slide1.png" alt="01"  /> </div>

          <div class="showcase-thumbnail" style="background-image: url(http://spunky.local/catalog/pic/item-slider/slide1.png);"></div>
        </div>

        <div class="showcase-slide">
          <div class="showcase-content"> <img src="pic/item-slider/slide2.png" alt="02"  /> </div>

          <div class="showcase-thumbnail" style="background-image: url(http://spunky.local/catalog/pic/item-slider/slide2.png);"></div>
        </div>

        <div class="showcase-slide">
          <div class="showcase-content"> <img src="pic/item-slider/slide1.png" alt="01"  /> </div>

          <div class="showcase-thumbnail" style="background-image: url(http://spunky.local/catalog/pic/item-slider/slide1.png);"></div>
        </div>
      </div>
    </div>

    <div class="right-side"> <a href="#" class="fav" ></a>
      <div class="share-wrap"> <a href="#" class="share" ></a>
        <div class="wrap-shared-popup">
          <div class="shared-popup"> <i></i> <a href="#" class="ico1" ></a> <a href="#" class="ico2" ></a> <a href="#" class="ico3" ></a> <a href="#" class="ico4" ></a> <a href="#" class="ico5" ></a> <a href="#" class="ico6" ></a> <a href="#" class="ico7" ></a> </div>
        </div>
      </div>

      <p class="type">ТОЛСТОВКА CHIKANA </p>

      <p class="name">MEXICO CHIKA</p>

      <p class="by-who">by raoul roudrigez</p>

      <div class="sep-min"></div>

      <p class="text">Толстовка, из коллекции Chikana личной работы
        <br />
        известного мексиканского дизайнера и члена
        <br />
        картеля &laquo;ZazaParaza&raquo; &mdash; Рауля Радригеза </p>

      <div class="sep-min"></div>

      <div class="params">
        <div class="select">
          <div class="sel-visible">
            <div class="color"> <i></i>
              <div style="background-color: rgb(77, 255, 208);"></div>
            </div>

            <div class="size"> <i></i> <span><span>L</span> (50 cm)</span> </div>
            <i class="trigger"></i>
            <div class="clr"></div>
          </div>

          <div class="sel-list-wr">
            <div class="col1">
              <div class="co1"> <a href="#" class="item-col" style="background-color: #ff0000;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col" style="background-color: #ffed00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col" style="background-color: #9dff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col" style="background-color: #b1ff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col" style="background-color: #00ffae;" ><i></i><input type="checkbox" /></a> </div>

              <div class="co2"> <a href="#" class="item-col selected" style="background-color: #ffed00;" ><i></i><input type="checkbox" checked="" /></a> <a href="#" class="item-col" style="background-color: #9dff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-col" style="background-color: #b1ff00;" ><i></i><input type="checkbox" /></a> </div>
            </div>

            <div class="col2">
              <ul>
                <li> <a href="javascript:void(0)" > <span class="tp" data-sm="(50cm)">XS</span> <i class="isOffer is"></i> <span class="price">1.500 руб.</span> <input type="radio" name="rad1" value="XS" /> </a> </li>

                <li> <a href="javascript:void(0)" > <span class="tp" data-sm="(50cm)">S</span> <i class="isOffer"></i> <span class="price">1.500 руб.</span> <input type="radio" name="rad1" value="S" /> </a> </li>

                <li> <a href="javascript:void(0)" > <span class="tp" data-sm="(70cm)">M</span> <i class="isOffer"></i> <span class="price">1.500 руб.</span> <input type="radio" name="rad1" value="M" /> </a> </li>

                <li> <a href="javascript:void(0)" class="active" > <span class="tp" data-sm="(80cm)">L</span> <i class="isOffer"></i> <span class="price">1.500 руб.</span> <input type="radio" name="rad1" value="L" checked="" /> </a> </li>

                <li> <a href="javascript:void(0)" > <span class="tp" data-sm="(90cm)">XL</span> <i class="isOffer is"></i> <span class="price">1.500 руб.</span> <input type="radio" name="rad1" value="XL" /> </a> </li>

                <li> <a href="javascript:void(0)" > <span class="tp" data-sm="(100cm)">XXL</span> <i class="isOffer"></i> <span class="price">1.500 руб.</span> <input type="radio" name="rad1" value="XXL" /> </a> </li>
              </ul>
            </div>

            <div class="clr"></div>
          </div>
        </div>
      </div>

      <div class="by">
        <div class="in-order"><i></i>под заказ</div>
        <a href="#" class="backet" ></a> <a href="#" class="get" >БЕРУ!</a>
        <div class="clr"></div>
      </div>

      <div class="contain">
        <p class="ttl">СОСТАВ:</p>

        <div class="col col1">
          <p> <span class="sp1">Хлопок</span> <span class="bb"></span> <span class="sp2">80%</span> </p>

          <p> <span class="sp1">Хлопок</span> <span class="bb"></span> <span class="sp2">80%</span> </p>
        </div>

        <div class="col col2">
          <p> <span class="sp1">Хлопок</span> <span class="bb"></span> <span class="sp2">80%</span> </p>

          <p> <span class="sp1">Хлопок</span> <span class="bb"></span> <span class="sp2">80%</span> </p>
        </div>
      </div>
    </div>

    <div class="clr"></div>
  </div>
</div>
<script type="text/javascript">
var <? echo $strObName; ?> = new JCCatalogElement(<? echo CUtil::PhpToJSObject($arJSParams, false, true); ?>);
BX.message({
	MESS_BTN_BUY: '<? echo ('' != $arParams['MESS_BTN_BUY'] ? CUtil::JSEscape($arParams['MESS_BTN_BUY']) : GetMessageJS('CT_BCE_CATALOG_BUY')); ?>',
	MESS_BTN_ADD_TO_BASKET: '<? echo ('' != $arParams['MESS_BTN_ADD_TO_BASKET'] ? CUtil::JSEscape($arParams['MESS_BTN_ADD_TO_BASKET']) : GetMessageJS('CT_BCE_CATALOG_ADD')); ?>',
	MESS_NOT_AVAILABLE: '<? echo ('' != $arParams['MESS_NOT_AVAILABLE'] ? CUtil::JSEscape($arParams['MESS_NOT_AVAILABLE']) : GetMessageJS('CT_BCE_CATALOG_NOT_AVAILABLE')); ?>',
	TITLE_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR') ?>',
	TITLE_BASKET_PROPS: '<? echo GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS') ?>',
	BASKET_UNKNOWN_ERROR: '<? echo GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR') ?>',
	BTN_SEND_PROPS: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS'); ?>',
	BTN_MESSAGE_CLOSE: '<? echo GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE') ?>',
	SITE_ID: '<? echo SITE_ID; ?>'
});
</script>