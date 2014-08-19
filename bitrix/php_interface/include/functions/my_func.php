<?php
$res = pricePoint(9000123);
$x =1;
function logVar($var)
{
  $log_file_name  = $_SERVER["DOCUMENT_ROOT"] . "/log.txt";
  $log_file       = fopen($log_file_name, 'a+');
  fwrite($log_file, var_export($var, true) . Chr(13));
  fclose($log_file);
}

/*
 * format item, add custom fields
 * ['DISCOUNT_PRICE']
 * ['DISCOUNT_PERC']
 * ['PRICE']
 * ['PRICE_POINT']
 * ['PRICE_TYPE']
 * ['PRICE_CURRENCY']
 * ['PRICE_CLASS']
 * ['LABEL_TYPE']
 * ['LABEL_CLASS']
 * ['TYPES']
 * ['DISCLAIMER']
 */
function formatItem($ITEM, $prices_class, $disclamers, $label_class)
{
  //***default $ITEM values***
  $ITEM['SECTION_TYPE']   = false;
  $ITEM['SECTION_CLASS']  = '';
  $ITEM['DISCOUNT_PRICE'] = ''; //Актуальная цена (учитывается скидка)
  $ITEM['DISCOUNT_PERC']  = '';
  $ITEM['PRICE']          = ''; //Цена без учета скидки
  $ITEM['PRICE_POINT']    = '';
  $ITEM['PRICE_TYPE']     = array( 'BASE' );
  $ITEM['PRICE_CURRENCY'] = 'руб.';
  $ITEM['PRICE_CLASS']    = '';
  $ITEM['LABEL_TYPE']     = array();
  $ITEM['LABEL_CLASS']    = '';
  $ITEM['TYPES']          = '';
  $ITEM['DISCLAIMER']     = '';

  //TODO:
  /*
   * $ITEM['COLOR_GROUPS']=>array(0 => array('name' => '', 'id' => '', 'colors' => array(), 'sizes' => array('price' => ...)))
   * $ITEM['COLORS']
   */

  $section_type = getSectionUfValue($ITEM['IBLOCK_ID'], $ITEM['IBLOCK_SECTION_ID'], 'UF_CLOTHES_TYPE');
  if($section_type)
  {
    $ITEM['SECTION_TYPE']  = $section_type['name'];
    $ITEM['SECTION_CLASS'] = $section_type['class'];
  }

  //***calculate prices value***
  if(isset($ITEM['OFFERS']) && isset($ITEM['OFFERS'][0]) && isset($ITEM['OFFERS'][0]['PRICES']['BASE']['VALUE_VAT']))
  {
    $ITEM['DISCOUNT_PRICE']  = $ITEM['OFFERS'][0]['PRICES']['BASE']['DISCOUNT_VALUE'];
    $ITEM['DISCOUNT_PERC']   = $ITEM['OFFERS'][0]['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT'];
    $ITEM['PRICE']           = $ITEM['OFFERS'][0]['PRICES']['BASE']['VALUE_VAT'];
  }
  elseif(isset($ITEM['PRICES']['BASE']['VALUE_VAT']))
  {
    $ITEM['DISCOUNT_PRICE']  = $ITEM['PRICES']['BASE']['DISCOUNT_VALUE'];
    $ITEM['DISCOUNT_PERC']   = $ITEM['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT'];
    $ITEM['PRICE']           = $ITEM['PRICES']['BASE']['VALUE_VAT'];
  }
  $ITEM['PRICE_POINT'] = pricePoint($ITEM['DISCOUNT_PRICE']);

  //***check prices type and class***
  if(isset($ITEM['PROPERTIES']['SALELEADER']) && trim($ITEM['PROPERTIES']['SALELEADER']['VALUE']))
  {
    $ITEM['PRICE_TYPE'][]   = 'SALELEADER';
  }
  elseif(isset($ITEM['PROPERTIES']['SPECIALOFFER']) && trim($ITEM['PROPERTIES']['SPECIALOFFER']['VALUE']))
  {
    $ITEM['PRICE_TYPE'][]   = 'SPECIALOFFER';
  }

  if($ITEM['DISCOUNT_PRICE'] !== $ITEM['PRICE'])
  {
    $ITEM['PRICE_TYPE'][]   = 'DISCOUNT';
  }

  $ITEM['PRICE_CLASS'] = formatArrayClasses($ITEM['PRICE_TYPE'], $prices_class);


  //***check labels type and class***
  if(isset($ITEM['PROPERTIES']['NEWPRODUCT']) && trim($ITEM['PROPERTIES']['NEWPRODUCT']['VALUE']))
  {
    $ITEM['LABEL_TYPE'][] = 'NEWPRODUCT';
  }

  $ITEM['LABEL_CLASS'] = formatArrayClasses($ITEM['LABEL_TYPE'], $label_class);

  $ITEM['TYPES'] = array_merge($ITEM['PRICE_TYPE'], $ITEM['LABEL_TYPE']);

  //***disclamers***
  foreach($disclamers as $d_key => $disclamer):
    if($d_key === 'DISCOUNT')
    {
      $disclamer .= ' ' . $ITEM['DISCOUNT_PERC'] . '%';
    }
    if(in_array($d_key, $ITEM['TYPES']))
    {
      $ITEM['DISCLAIMER'] = $disclamer;
    }
  endforeach;

  return $ITEM;
}

function getSectionUfValue($iblock_id, $section_id, $uf_code)
{
  $result = false;

  $ar_result=CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID"=>$iblock_id, "ID"=>$section_id), false, Array($uf_code));
  if($res = $ar_result->GetNext())
  {
    $section_type_id =  $res["UF_CLOTHES_TYPE"];

    global $USER_FIELD_MANAGER;
    $arFields = $USER_FIELD_MANAGER->GetUserFields("IBLOCK_" . $iblock_id . "_SECTION");

    if(isset($arFields[$uf_code]) && isset($arFields[$uf_code]['SETTINGS']) && isset($arFields[$uf_code]['SETTINGS']['IBLOCK_ID']))
    {
      $result_db = CIBlockElement::GetProperty($arFields[$uf_code]['SETTINGS']['IBLOCK_ID'], $section_type_id);
      while($res_prop = $result_db->GetNext())
      {
        $result[$res_prop['CODE']] = $res_prop['VALUE'];
      }
    }
  }

  return $result;
}

/**
 *Функция форматирует цену, разделя триады точкой:
 *  9000212=> 9.000.212
 *
 * @param int $price
 * @return string
 */
function pricePoint($price)
{
  $price_format = preg_replace( "/(\d(?=(?:\d{3})+(?!\d)))/s", "\\1.", $price );

  return $price_format;
}

/**
 * Функция форматирует строку классов через пробел согласно массиву $array_classes:
 * $array_result = array('S', 'L'); $array_classes = array('S' => 'small', 'M' => 'middle', 'L' => 'large')
 * result=> "small large"
 *
 * @param array $array_result
 * @param array $array_classes
 * @return string
 */
function formatArrayClasses($array_result, $array_classes)
{
  $str_classes = '';

  if($array_result && count($array_result))
  {
    foreach($array_result as $val):
      if(isset($array_classes[$val]))
      {
        $str_classes .= ' ' . $array_classes[$val];
      }
    endforeach;
  }

  return trim($str_classes);
}
?>