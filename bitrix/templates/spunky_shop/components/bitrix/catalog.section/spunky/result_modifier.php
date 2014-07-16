<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

$prices_class = array(
  'BASE'          => '',
  'DISCOUNT'      => 'new-price',
  'SALELEADER'    => 'hot',
  'SPECIALOFFER'  => 'red'
);

//учитывается только один самый последний дисклэймер
$disclamers = array(
  'NEWPRODUCT'    =>  'новинка!',
  'SPECIALOFFER'  =>  'специальное предложение!',
  'SALELEADER'    =>  'хит продаж!',
  'DISCOUNT'      =>  'скидка',
);

$labels_class = array(
  'NEWPRODUCT'  => 'new-product',
);

if (!empty($arResult['ITEMS'])):
  foreach ($arResult['ITEMS'] as $key => $arItem):
    //***default $arItem values***
    $arResult['ITEMS'][$key]['DISCOUNT_PRICE']  = ''; //Актуальная цена (учитывается скидка)
    $arResult['ITEMS'][$key]['DISCOUNT_PERC']   = '';
    $arResult['ITEMS'][$key]['PRICE']           = ''; //Цена без учета скидки
    $arResult['ITEMS'][$key]['PRICE_POINT']     = '';
    $arResult['ITEMS'][$key]['PRICE_TYPE']      = array('base');
    $arResult['ITEMS'][$key]['PRICE_CURRENCY']  = 'руб.';
    $arResult['ITEMS'][$key]['PRICE_CLASS']     = '';
    $arResult['ITEMS'][$key]['LABELS_TYPE']     = array();
    $arResult['ITEMS'][$key]['LABELS_CLASS']    = '';
    $arResult['ITEMS'][$key]['TYPES']           = '';
    $arResult['ITEMS'][$key]['DISCLAIMER']      = '';

    //***calculate prices value***
    if(isset($arItem['OFFERS']) && isset($arItem['OFFERS'][0]) && isset($arItem['OFFERS'][0]['PRICES']['BASE']['VALUE_VAT']))
    {
      $arResult['ITEMS'][$key]['DISCOUNT_PRICE']  = $arItem['OFFERS'][0]['PRICES']['BASE']['DISCOUNT_VALUE'];
      $arResult['ITEMS'][$key]['DISCOUNT_PERC']   = $arItem['OFFERS'][0]['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT'];
      $arResult['ITEMS'][$key]['PRICE']           = $arItem['OFFERS'][0]['PRICES']['BASE']['VALUE_VAT'];
    }
    elseif(isset($arItem['PRICES']['BASE']['VALUE_VAT']))
    {
      $arResult['ITEMS'][$key]['DISCOUNT_PRICE']  = $arItem['PRICES']['BASE']['DISCOUNT_VALUE'];
      $arResult['ITEMS'][$key]['DISCOUNT_PERC']   = $arItem['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT'];
      $arResult['ITEMS'][$key]['PRICE']           = $arItem['PRICES']['BASE']['VALUE_VAT'];
    }
    $arResult['ITEMS'][$key]['PRICE_POINT'] = pricePoint($arResult['ITEMS'][$key]['DISCOUNT_PRICE']);

    //***check prices type and class***
    if(isset($arItem['PROPERTIES']['SALELEADER']) && trim($arItem['PROPERTIES']['SALELEADER']['VALUE']))
    {
      $arResult['ITEMS'][$key]['PRICE_TYPE'][]   = 'SALELEADER';
    }
    elseif(isset($arItem['PROPERTIES']['SPECIALOFFER']) && trim($arItem['PROPERTIES']['SPECIALOFFER']['VALUE']))
    {
      $arResult['ITEMS'][$key]['PRICE_TYPE'][]   = 'SPECIALOFFER';
    }

    if($arResult['ITEMS'][$key]['DISCOUNT_PRICE'] !== $arResult['ITEMS'][$key]['PRICE'])
    {
      $arResult['ITEMS'][$key]['PRICE_TYPE'][]   = 'DISCOUNT';
    }

    $arResult['ITEMS'][$key]['PRICE_CLASS'] = formatArrayClasses($arResult['ITEMS'][$key]['PRICE_TYPE'], $prices_class);


    //***check labels type and class***
    if(isset($arItem['PROPERTIES']['NEWPRODUCT']) && trim($arItem['PROPERTIES']['NEWPRODUCT']['VALUE']))
    {
      $arResult['ITEMS'][$key]['LABELS_TYPE'][] = 'NEWPRODUCT';
    }

    $arResult['ITEMS'][$key]['LABELS_CLASS'] = formatArrayClasses($arResult['ITEMS'][$key]['LABELS_TYPE'], $labels_class);

    $arResult['ITEMS'][$key]['TYPES'] = array_merge($arResult['ITEMS'][$key]['PRICE_TYPE'], $arResult['ITEMS'][$key]['LABELS_TYPE']);

    //***disclamers***
    foreach($disclamers as $d_key => $disclamer):
      if($d_key === 'DISCOUNT')
      {
        $disclamer .= ' ' . $arResult['ITEMS'][$key]['DISCOUNT_PERC'] . '%';
      }
      if(in_array($d_key, $arResult['ITEMS'][$key]['TYPES']))
      {
        $arResult['ITEMS'][$key]['DISCLAIMER'] = $disclamer;
      }
    endforeach;

    //var_dump(); exit;
    $x = 3;
    //$price = $arItem['PRICE']['VAT_VALUE'];
  endforeach;
endif;
?>