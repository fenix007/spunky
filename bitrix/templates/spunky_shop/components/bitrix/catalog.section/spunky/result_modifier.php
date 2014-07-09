<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

$prices_class = array(
  'BASE'        => '',
  'DISCOUNT'    => 'new-price',
  'SALELEADER'  => 'hot',
  'SPECIAL'     => 'red'
);

$labels_class = array(
  'NEWPRODUCT'  => 'new-product',
);

if (!empty($arResult['ITEMS'])):
  foreach ($arResult['ITEMS'] as $key => $arItem):
    //***default $arItem values***
    $arResult['ITEMS'][$key]['PRICE']         = '';
    $arResult['ITEMS'][$key]['PRICE_POINT']   = '';
    $arResult['ITEMS'][$key]['PRICE_TYPE']    = 'base';
    $arResult['ITEMS'][$key]['PRICE_CLASS']   = $prices_class[$arResult['ITEMS'][$key]['PRICE_TYPE']];
    $arResult['ITEMS'][$key]['LABELS_TYPE']   = array();
    $arResult['ITEMS'][$key]['LABELS_CLASS']  = '';

    //***calculate prices value***
    if(isset($arItem['PRICES']['BASE']['VALUE_VAT']))
    {
      $arResult['ITEMS'][$key]['PRICE'] = $arItem['PRICES']['BASE']['VALUE_VAT'];
    }
    $arResult['ITEMS'][$key]['PRICE_POINT'] = pricePoint($arResult['ITEMS'][$key]['PRICE']);

    //***check prices type and class***
    if(isset($arItem['PROPERTIES']['SALELEADER']) && trim($arItem['PROPERTIES']['SALELEADER']['VALUE']))
    {
      $arResult['ITEMS'][$key]['PRICE_TYPE'] = 'SALELEADER';
    }
    elseif(isset($arItem['PROPERTIES']['SALELEADER']) && trim($arItem['PROPERTIES']['SALELEADER']['VALUE']))
    {

    }
    $arResult['ITEMS'][$key]['PRICE_CLASS'] = $prices_class[$arResult['ITEMS'][$key]['PRICE_TYPE']];

    //***check labels type and class***
    if(isset($arItem['PROPERTIES']['NEWPRODUCT']) && trim($arItem['PROPERTIES']['NEWPRODUCT']['VALUE']))
    {
      $arResult['ITEMS'][$key]['LABELS_TYPE'] = 'NEWPRODUCT';
    }
    elseif(isset($arItem['PROPERTIES']['SALELEADER']) && trim($arItem['PROPERTIES']['SALELEADER']['VALUE']))
    {

    }
    $arResult['ITEMS'][$key]['LABELS_CLASS'] = $labels_class[$arResult['ITEMS'][$key]['LABELS_TYPE']];

    //var_dump(); exit;
    $x = 3;
    //$price = $arItem['PRICE']['VAT_VALUE'];
  endforeach;
endif;
?>