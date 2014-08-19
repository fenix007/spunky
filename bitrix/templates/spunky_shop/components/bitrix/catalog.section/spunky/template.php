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
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
    $strMainID = $this->GetEditAreaId($arItem['ID']);
    $arItemIDs = array(
      'ID'               => $strMainID,
      'PICT'             => $strMainID . '_pict',
      'SECOND_PICT'      => $strMainID . '_secondpict',

      'QUANTITY'         => $strMainID . '_quantity',
      'QUANTITY_DOWN'    => $strMainID . '_quant_down',
      'QUANTITY_UP'      => $strMainID . '_quant_up',
      'QUANTITY_MEASURE' => $strMainID . '_quant_measure',
      'BUY_LINK'         => $strMainID . '_buy_link',
      'SUBSCRIBE_LINK'   => $strMainID . '_subscribe',

      'PRICE'            => $strMainID . '_price',
      'DSC_PERC'         => $strMainID . '_dsc_perc',
      'SECOND_DSC_PERC'  => $strMainID . '_second_dsc_perc',

      'PROP_DIV'         => $strMainID . '_sku_tree',
      'PROP'             => $strMainID . '_prop_',
      'DISPLAY_PROP_DIV' => $strMainID . '_sku_prop',
      'BASKET_PROP_DIV'  => $strMainID . '_basket_prop',
    );
    //logVar($arItem['PRICES']['BASE']);exit;
?>
  <div class="bx_catalog_item_container" id="<? echo $strMainID; ?>">
    <div class="item">
      <div class="hover">
        <?if(isset($arItem['DISCLAIMER']) && $arItem['DISCLAIMER']):?>
          <div class="disclaimer"><?=$arItem['DISCLAIMER']?></div>
          <div class="name name_disclaimer">
        <?else:?>
          <div class="name">
        <?endif;?>
          <?= $arItem['NAME'] ?>
        </div>
        <div class="border"></div>
        <div class="price2"><?= $arItem['PRICE_POINT'] ?></div>
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
      <div class="price <?= $arItem['PRICE_CLASS'] ?>"><i></i>
        <?
          if(in_array('DISCOUNT', $arItem['PRICE_TYPE']))
          {?>
            <div class="old"><?=$arItem['PRICE'] . $arItem['PRICE_CURRENCY']?></div>
            <div class="is"><?=$arItem['DISCOUNT_PRICE'] . $arItem['PRICE_CURRENCY']?></div>
        <?}
          else
          {
            echo $arItem['PRICE'] . $arItem['PRICE_CURRENCY'];
          }
        ?>
      </div>
    </div>
  </div>
<?endforeach;
endif;?>