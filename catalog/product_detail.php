<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Карточка товара");
?> 
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.aw-showcase.js"></script>
 
<div class="content detail"> 
<!-- content -->
 <a href="#" class="button-back" >НАЗАД</a> 
  <p class="breadcrumbs"> <a href="#" class="home" ><span></span><i></i></a> <a href="#" >Толстовки<i></i></a> <a href="#" >Chikana<i></i></a> <span>Mexico Chika (Raoul Roudrigez)</span> </p>
<?$APPLICATION->IncludeComponent(
  "bitrix:catalog.element",
  "spunky",
  Array(
    "TEMPLATE_THEME" => "blue",
    "DISPLAY_NAME" => "Y",
    "DETAIL_PICTURE_MODE" => "IMG",
    "ADD_DETAIL_TO_SLIDER" => "N",
    "DISPLAY_PREVIEW_TEXT_MODE" => "E",
    "PRODUCT_SUBSCRIPTION" => "N",
    "SHOW_DISCOUNT_PERCENT" => "N",
    "SHOW_OLD_PRICE" => "N",
    "SHOW_MAX_QUANTITY" => "N",
    "DISPLAY_COMPARE" => "N",
    "MESS_BTN_BUY" => "Купить",
    "MESS_BTN_ADD_TO_BASKET" => "В корзину",
    "MESS_BTN_SUBSCRIBE" => "Подписаться",
    "MESS_NOT_AVAILABLE" => "Нет в наличии",
    "USE_VOTE_RATING" => "N",
    "USE_COMMENTS" => "N",
    "BRAND_USE" => "N",
    "IBLOCK_TYPE" => "catalog",
    "IBLOCK_ID" => "5",
    "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
    "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
    "SECTION_ID" => $_REQUEST["SECTION_ID"],
    "SECTION_CODE" => "",
    "SECTION_URL" => "",
    "DETAIL_URL" => "",
    "SECTION_ID_VARIABLE" => "SECTION_ID",
    "META_KEYWORDS" => "-",
    "META_DESCRIPTION" => "-",
    "BROWSER_TITLE" => "-",
    "SET_TITLE" => "Y",
    "SET_STATUS_404" => "N",
    "ADD_SECTIONS_CHAIN" => "Y",
    "ADD_ELEMENT_CHAIN" => "N",
    "PROPERTY_CODE" => array(),
    "OFFERS_LIMIT" => "0",
    "PRICE_CODE" => array(),
    "USE_PRICE_COUNT" => "N",
    "SHOW_PRICE_COUNT" => "1",
    "PRICE_VAT_INCLUDE" => "Y",
    "PRICE_VAT_SHOW_VALUE" => "N",
    "BASKET_URL" => "/personal/basket.php",
    "ACTION_VARIABLE" => "action",
    "PRODUCT_ID_VARIABLE" => "id",
    "USE_PRODUCT_QUANTITY" => "N",
    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
    "ADD_PROPERTIES_TO_BASKET" => "Y",
    "PRODUCT_PROPS_VARIABLE" => "prop",
    "PARTIAL_PRODUCT_PROPERTIES" => "N",
    "PRODUCT_PROPERTIES" => array(),
    "LINK_IBLOCK_TYPE" => "",
    "LINK_IBLOCK_ID" => "",
    "LINK_PROPERTY_SID" => "",
    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
    "CACHE_TYPE" => "A",
    "CACHE_TIME" => "36000000",
    "CACHE_NOTES" => "",
    "CACHE_GROUPS" => "Y",
    "USE_ELEMENT_COUNTER" => "Y",
    "HIDE_NOT_AVAILABLE" => "N",
    "CONVERT_CURRENCY" => "N"
  ),
  false
);?>
 
  <p class="block-title"><i></i>ПОХОЖИЕ ВЕЩИ<i></i></p>
 
  <div class="content-items"> 
    <div class="item"> 
      <div class="hover"> 
        <div class="name">бейсболка «SPUNKY BOX» 
          <br />
         фирменная</div>
       
        <div class="border"></div>
       
        <div class="price2">2.100</div>
       <a href="#" class="get" >БЕРУ!</a> <a href="#" class="detail" >Подробнее</a> <a href="#" class="fav" ></a> <a href="#" class="backet" ></a> 
        <div class="share-wrap"> <a href="#" class="share" ></a> 
          <div class="wrap-shared-popup"> 
            <div class="shared-popup"> <i></i> <a href="#" class="ico1" ></a> <a href="#" class="ico2" ></a> <a href="#" class="ico3" ></a> <a href="#" class="ico4" ></a> <a href="#" class="ico5" ></a> <a href="#" class="ico6" ></a> <a href="#" class="ico7" ></a> </div>
           </div>
         </div>
       </div>
     <i class="ico label"></i> <img src="pic/tovars/tov1.png"  /> 
      <div class="price"><i></i>2100 руб.</div>
     </div>
   
    <div class="item"> 
      <div class="hover"> 
        <div class="name">бейсболка «SPUNKY BOX» 
          <br />
         фирменная</div>
       
        <div class="border"></div>
       
        <div class="price2">2.100</div>
       <a href="#" class="get" >БЕРУ!</a> <a href="#" class="detail" >Подробнее</a> <a href="#" class="fav" ></a> <a href="#" class="backet" ></a> 
        <div class="share-wrap"> <a href="#" class="share" ></a> 
          <div class="wrap-shared-popup"> 
            <div class="shared-popup"> <i></i> <a href="#" class="ico1" ></a> <a href="#" class="ico2" ></a> <a href="#" class="ico3" ></a> <a href="#" class="ico4" ></a> <a href="#" class="ico5" ></a> <a href="#" class="ico6" ></a> <a href="#" class="ico7" ></a> </div>
           </div>
         </div>
       </div>
     <i class="ico coffe"></i> <img src="pic/tovars/tov2.png"  /> 
      <div class="price new-price"> 
        <div class="old">2100 руб.</div>
       
        <div class="is">1200 руб.</div>
       </div>
     </div>
   
    <div class="item"> 
      <div class="hover"> 
        <div class="name">бейсболка «SPUNKY BOX» 
          <br />
         фирменная</div>
       
        <div class="border"></div>
       
        <div class="price2">2.100</div>
       <a href="#" class="get" >БЕРУ!</a> <a href="#" class="detail" >Подробнее</a> <a href="#" class="fav" ></a> <a href="#" class="backet" ></a> 
        <div class="share-wrap"> <a href="#" class="share" ></a> 
          <div class="wrap-shared-popup"> 
            <div class="shared-popup"> <i></i> <a href="#" class="ico1" ></a> <a href="#" class="ico2" ></a> <a href="#" class="ico3" ></a> <a href="#" class="ico4" ></a> <a href="#" class="ico5" ></a> <a href="#" class="ico6" ></a> <a href="#" class="ico7" ></a> </div>
           </div>
         </div>
       </div>
     <i class="ico coffe"></i> <img src="pic/tovars/tov1.png"  /> 
      <div class="price hot"><i></i>2100 руб.</div>
     </div>
   
    <div class="clr"></div>
   <a href="#" class="more-similar" >Ещё похожих 24 вещи. Показать?</a> </div>
 
  <div class="sep-min"></div>
 
  <p class="about-brand-title">О бренде</p>
 
  <div class="about-brand"> <img src="pic/man.png"  /> 
    <div class="text-w"> 
      <p class="name">raoul roudrigez</p>
     
      <p class="text">— is a sports clothing company located in Philadelphia, Pennsylvania. The company was established in 1904, and is the oldest sporting goods company in Philadelphia. By license agreements with Major League Baseball, the National Basketball Association, National Football League, National Hockey League, and the Collegiate Licensing Company, the company has been producing vintage sports goods such as jerseys, jackets, hats, and wool-felt historic pennants.</p>
     </div>
   
    <div class="clr"></div>
   </div>
 
<!-- content -->
 
  <div class="watched-items"> 
    <div class="sep"></div>
   
    <p class="ttl-watched">просмотренные товары</p>
   
    <div class="swiper-container"> 
      <div class="swiper-wrapper"> 
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> <span class="in-backet"></span> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> <span class="in-backet"></span> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> <span class="in-backet"></span> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav1.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       
        <div class="swiper-slide"> <a href="#" > <img src="pic/carousel-fav/fav2.png"  /> <span class="price"> 2.700 руб. </span> </a> </div>
       </div>
     
      <div class="swiper-scrollbar"></div>
     </div>
   <a href="#" class="all-items" >Все просмотренные товары (94)</a> 
    <div class="sep"></div>
   </div>
 
  <div class="upper-footer"> </div>
 
  <div class="clr"></div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>