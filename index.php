<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
$lineCount = (COption::GetOptionString("main", "wizard_template_id", "eshop_adapt_horizontal", SITE_ID) == "eshop_adapt_vertical" ? "3" : "4");
?>
<div class="content main"> 
  <div class="slider"> 
    <div class="slides_container"> 
      <div> <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide1.png"  /> 
        <div class="caption"> 
          <p class="p1">проспишь все <span>скидки!</span></p>
         
          <p class="p2">А ну ка ходи <a href="#" >сюда</a></p>
         </div>
       </div>
     
      <div> <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide2.png"  /> 
        <div class="caption"> 
          <p class="p1">проспишь все <span>скидки 2!</span></p>
         
          <p class="p2">А ну ка ходи <a href="#" >сюда</a></p>
         </div>
       </div>
     
      <div> <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide1.png"  /> 
        <div class="caption"> 
          <p class="p1">проспишь все <span>скидки 3!</span></p>
         
          <p class="p2">А ну ка ходи <a href="#" >сюда</a></p>
         </div>
       </div>
     
      <div> <img src="<?=SITE_TEMPLATE_PATH?>/pic/slider/slide2.png"  /> 
        <div class="caption"> 
          <p class="p1">проспишь все <span>скидки 4!</span></p>
         
          <p class="p2">А ну ка ходи <a href="#" >сюда</a></p>
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
       
        <div class="item cap"> <span>XS</span> 
          <div class="dr-down"> <i></i> 
            <ul> 
              <li> <a href="javascript:void(0)" class="active" > <span>XS</span> <input type="radio" name="rad1" value="XS" checked="" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>S</span> <input type="radio" name="rad1" value="S" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>M</span> <input type="radio" name="rad1" value="M" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>L</span> <input type="radio" name="rad1" value="L" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>XL</span> <input type="radio" name="rad1" value="XL" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>XXL</span> <input type="radio" name="rad1" value="XXL" /> </a> </li>
             </ul>
           </div>
         </div>
       
        <div class="item t-shirt"> <span>L</span> 
          <div class="dr-down"> <i></i> 
            <ul> 
              <li> <a href="javascript:void(0)" > <span>XS</span> <input type="radio" name="rad1" value="XS" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>S</span> <input type="radio" name="rad1" value="S" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>M</span> <input type="radio" name="rad1" value="M" /> </a> </li>
             
              <li> <a href="javascript:void(0)" class="active" > <span>L</span> <input type="radio" name="rad1" value="L" checked="" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>XL</span> <input type="radio" name="rad1" value="XL" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>XXL</span> <input type="radio" name="rad1" value="XXL" /> </a> </li>
             </ul>
           </div>
         </div>
       
        <div class="item jacket"> <span>L</span> 
          <div class="dr-down"> <i></i> 
            <ul> 
              <li> <a href="javascript:void(0)" > <span>XS</span> <input type="radio" name="rad1" value="XS" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>S</span> <input type="radio" name="rad1" value="S" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>M</span> <input type="radio" name="rad1" value="M" /> </a> </li>
             
              <li> <a href="javascript:void(0)" class="active" > <span>L</span> <input type="radio" name="rad1" value="L" checked="" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>XL</span> <input type="radio" name="rad1" value="XL" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>XXL</span> <input type="radio" name="rad1" value="XXL" /> </a> </li>
             </ul>
           </div>
         </div>
       
        <div class="item shoes"> <span>44</span> 
          <div class="dr-down"> <i></i> 
            <ul> 
              <li> <a href="javascript:void(0)" > <span>40</span> <input type="radio" name="rad1" value="40" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>41</span> <input type="radio" name="rad1" value="41" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>42</span> <input type="radio" name="rad1" value="42" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>43</span> <input type="radio" name="rad1" value="43" /> </a> </li>
             
              <li> <a href="javascript:void(0)" class="active" > <span>44</span> <input type="radio" name="rad1" value="44" checked="" /> </a> </li>
             
              <li> <a href="javascript:void(0)" > <span>45</span> <input type="radio" name="rad1" value="45" /> </a> </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   
    <div class="color"> 
      <div class="wisible-part"> <i class="col"></i> 
        <p>Цвет:</p>
       </div>
     <a href="#" class="addColorv" ><i></i></a> 
      <div class="drop"> 
        <div class="in"> 
          <p class="ttl">Выберите цвета</p>
         <a href="#" class="side1" >Выбрать все</a> <a href="#" class="side2" >Любой</a> 
          <div class="clr"></div>
         <a href="#" class="item-color no-gr" style="background-color: #fff;" ><i class="bgw"></i><input type="checkbox" /></a> <a href="#" class="item-color no-gr" style="background-color: #aaa;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color no-gr" style="background-color: #888;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color no-gr" style="background-color: #444;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color no-gr" style="background-color: #111;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #ffa100;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #ff0000;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color selected" style="background-color: #ffed00;" ><i></i><input type="checkbox" checked="" /></a> <a href="#" class="item-color" style="background-color: #9dff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #b1ff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color selected" style="background-color: #00ffae;" ><i></i><input type="checkbox" checked="" /></a> <a href="#" class="item-color" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color selected" style="background-color: #0012ff;" ><i></i><input type="checkbox" checked="" /></a> <a href="#" class="item-color" style="background-color: #ff00e8;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #ffa100;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #ff0000;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #ffed00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #9dff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #b1ff00;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #00ffae;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #009bff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #0012ff;" ><i></i><input type="checkbox" /></a> <a href="#" class="item-color" style="background-color: #ff00e8;" ><i></i><input type="checkbox" /></a> 
          <div class="clr"></div>
         </div>
       </div>
     </div>
   <a href="#" class="reset" ><i></i>Сбросить</a> </form> 
  <div class="content-items">
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "spunky", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "5",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "UF_KEYWORDS",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"FILTER_NAME" => "arrFilter",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"HIDE_NOT_AVAILABLE" => "N",
	"PAGE_ELEMENT_COUNT" => "12",
	"LINE_ELEMENT_COUNT" => "3",
	"PROPERTY_CODE" => array(
		0 => "ARTNUMBER",
		1 => "COLOR",
		2 => "",
	),
	"OFFERS_FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_PROPERTY_CODE" => array(
		0 => "",
		1 => "",
	),
	"OFFERS_SORT_FIELD" => "sort",
	"OFFERS_SORT_ORDER" => "asc",
	"OFFERS_SORT_FIELD2" => "id",
	"OFFERS_SORT_ORDER2" => "desc",
	"OFFERS_LIMIT" => "0",
	"TEMPLATE_THEME" => "blue",
	"PRODUCT_DISPLAY_MODE" => "N",
	"ADD_PICT_PROP" => "-",
	"LABEL_PROP" => "-",
	"PRODUCT_SUBSCRIPTION" => "N",
	"SHOW_DISCOUNT_PERCENT" => "N",
	"SHOW_OLD_PRICE" => "Y",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",
	"MESS_BTN_SUBSCRIBE" => "Подписаться",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_NOT_AVAILABLE" => "Нет в наличии",
	"SECTION_URL" => "",
	"DETAIL_URL" => "#CODE#-#ID#.html",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "Y",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "N",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N",
	"SET_META_KEYWORDS" => "Y",
	"META_KEYWORDS" => "-",
	"SET_META_DESCRIPTION" => "Y",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"ADD_SECTIONS_CHAIN" => "N",
	"DISPLAY_COMPARE" => "N",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "N",
	"CACHE_FILTER" => "N",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"CONVERT_CURRENCY" => "N",
	"BASKET_URL" => "/personal/basket.php",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"USE_PRODUCT_QUANTITY" => "Y",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"ADD_PROPERTIES_TO_BASKET" => "Y",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"PARTIAL_PRODUCT_PROPERTIES" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"OFFERS_CART_PROPERTIES" => array(
	),
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
  </div><!-- content-items -->
  <div class="watched-items">
  <div class="sep"></div>
  <p class="ttl-watched">просмотренные товары</p>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    <span class="in-backet"></span>
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    <span class="in-backet"></span>
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    <span class="in-backet"></span>
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav1.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pic/carousel-fav/fav2.png" alt="">
                  <span class="price">
                    2.700 руб.
                  </span>
        </a>
      </div>
    </div>
    <div class="swiper-scrollbar"></div>
  </div>
  <a href="#" class="all-items">Все просмотренные товары (94)</a>
  <div class="sep"></div>
</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>