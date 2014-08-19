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

$label_class = array(
  'NEWPRODUCT'  => 'new-product',
);

if (!empty($arResult)):

  //**** format item, add custom fields ****
  $arResult = formatItem($arResult, $prices_class, $disclamers, $label_class);

endif;
?>