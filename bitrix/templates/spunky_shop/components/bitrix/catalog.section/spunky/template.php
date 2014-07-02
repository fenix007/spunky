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
    if($arItem['PRICES'] && isset($arItem['PRICES']['BASE']) && isset($arItem['PRICES']['BASE']['PRINT_VALUE']))
    {
      $price = $arItem['PRICES']['BASE']['PRINT_VALUE'];
    }
    //var_dump($arItem['PRICES']['BASE']);
?>
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