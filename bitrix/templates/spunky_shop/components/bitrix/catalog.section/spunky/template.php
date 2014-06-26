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
setlocale(LC_MONETARY, 'ru_RU');
if (!empty($arResult['ITEMS'])):
  foreach ($arResult['ITEMS'] as $key => $arItem):
    $price      = '';
    $price_ex   = '';
    if (!empty($arItem['MIN_PRICE']))
    {
      if ('N' == $arParams['PRODUCT_DISPLAY_MODE'] && isset($arItem['OFFERS']) && !empty($arItem['OFFERS']))
      {
        $price = GetMessage(
          'CT_BCS_TPL_MESS_PRICE_SIMPLE_MODE',
          array(
            '#PRICE#' => $arItem['MIN_PRICE']['PRINT_DISCOUNT_VALUE'],
            '#MEASURE#' => GetMessage(
              'CT_BCS_TPL_MESS_MEASURE_SIMPLE_MODE',
              array(
                '#VALUE#' => $arItem['MIN_PRICE']['CATALOG_MEASURE_RATIO'],
                '#UNIT#' => $arItem['MIN_PRICE']['CATALOG_MEASURE_NAME']
              )
            )
          )
        );
      }
      else
      {
        $price = money_format('%.2n', $arItem['MIN_PRICE']['PRINT_DISCOUNT_VALUE']);
      }
      if ('Y' == $arParams['SHOW_OLD_PRICE'] && $arItem['MIN_PRICE']['DISCOUNT_VALUE'] < $arItem['MIN_PRICE']['VALUE'])
      {
        $price_ex = $price . '<span>' . money_format('%.2n', $arItem['MIN_PRICE']['PRINT_VALUE']) . '</span>';
      }
      else{
        $price_ex = $price;
      }
    }?>

    <div class="item">
      <div class="hover">
        <div class="name"><?= $arItem['NAME'] ?></div>
        <div class="border"></div>
        <div class="price2"><?= $price ?></div>
        <a href="<?= $arItem['BUY_URL']?>" class="get">БЕРУ!</a>
        <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>" class="detail">Подробнее</a>
        <a href="#" class="fav"></a>
        <a href="<?= $arItem['BUY_URL']?>" class="basket"></a>
        <div class="share-wrap">
          <a href="#" class="share"></a>
          <div class="wrap-shared-popup">
            <div class="shared-popup">
              <i></i>
              <a href="#" class="ico1"></a>
              <a href="#" class="ico2"></a>
              <a href="#" class="ico3"></a>
              <a href="#" class="ico4"></a>
              <a href="#" class="ico5"></a>
              <a href="#" class="ico6"></a>
              <a href="#" class="ico7"></a>
            </div>
          </div>
        </div>
      </div>
      <i class="ico label"></i>
      <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'];?>" alt="">
      <div class="price"><i></i><?= $price_ex ?> руб.</div>
    </div>
<?endforeach;
endif;?>