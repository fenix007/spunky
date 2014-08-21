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
  $COLOR_GROUPS     = array();
  $COLOR_GROUPS_REF = array();
  $COLORS           = array();
  $SIZES            = array('american' => array(), 'clothes' => array());

  if(isset($ITEM['OFFERS']))
  {
    foreach($ITEM['OFFERS'] as $OFFER):

      //*********COLOR GROUPS************
      $color_group_iblock_id = $OFFER['PROPERTIES']['COLOR_GROUP_REF']['LINK_IBLOCK_ID'];
      $color_group_id        = $OFFER['PROPERTIES']['COLOR_GROUP_REF']['VALUE'];

      if(isset($COLOR_GROUPS_REF[$color_group_id]))
      {
        $colors_cur = $COLOR_GROUPS_REF[$color_group_id];
      }
      else
      {
        $cg_res = CIBlockElement::GetByID($color_group_id);
        if($ar_cg_res = $cg_res->getNext())
        {
          $color_group_name = $ar_cg_res['NAME'];
        }

        $colors_cur = getColors($color_group_iblock_id, $color_group_id);

        $COLOR_GROUPS_REF[$color_group_id]  = $colors_cur;
        $COLOR_GROUPS [$color_group_id]     = array(
          'name'    => $color_group_name,
          'colors'  => $colors_cur
        );
        foreach($colors_cur as $color_cur):
          $COLORS[$color_cur['name']] = $color_cur['hex'];
        endforeach;
      }

      //*********  SIZES  ************
      $american_size     = $OFFER['PROPERTIES']['SIZES_AMERICAN']['VALUE'];
      $clothes_size      = $OFFER['PROPERTIES']['SIZES_CLOTHES']['VALUE'];
      $SIZES['american'] = array_merge($SIZES['american'], array_diff($SIZES['american'], $american_size));
      $SIZES['clothes']  = array_merge($SIZES['clothes'], array_diff($SIZES['clothes'], $clothes_size));

      $sizes_cur = array('american_size' => $american_size, 'clothes_size' => $clothes_size);

      $sizes_cur = formatPrices(
        $sizes_cur,
        $OFFER['PRICES']['BASE']['DISCOUNT_VALUE'],
        $OFFER['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT'],
        $OFFER['PRICES']['BASE']['VALUE_VAT'],
        $prices_class,
        $label_class,
        $disclamers
      );

      $COLOR_GROUPS [$color_group_id]['sizes'] = $sizes_cur;
    endforeach;
  }

  $section_type = getSectionUfValue($ITEM['IBLOCK_ID'], $ITEM['IBLOCK_SECTION_ID'], 'UF_CLOTHES_TYPE');
  if($section_type)
  {
    $ITEM['SECTION_TYPE']  = $section_type['name'];
    $ITEM['SECTION_CLASS'] = $section_type['class'];
  }

  //***check prices type and class***
  if(isset($ITEM['PROPERTIES']['SALELEADER']) && trim($ITEM['PROPERTIES']['SALELEADER']['VALUE']))
  {
    $ITEM['PRICE_TYPE'][]   = 'SALELEADER';
  }
  elseif(isset($ITEM['PROPERTIES']['SPECIALOFFER']) && trim($ITEM['PROPERTIES']['SPECIALOFFER']['VALUE']))
  {
    $ITEM['PRICE_TYPE'][]   = 'SPECIALOFFER';
  }

  //***check labels type and class***
  if(isset($ITEM['PROPERTIES']['NEWPRODUCT']) && trim($ITEM['PROPERTIES']['NEWPRODUCT']['VALUE']))
  {
    $ITEM['LABEL_TYPE'][] = 'NEWPRODUCT';
  }

  //***calculate prices value***
  if(isset($ITEM['OFFERS']) && isset($ITEM['OFFERS'][0]) && isset($ITEM['OFFERS'][0]['PRICES']['BASE']['VALUE_VAT']))
  {
    $ITEM = formatPrices(
      $ITEM,
      $ITEM['OFFERS'][0]['PRICES']['BASE']['DISCOUNT_VALUE'],
      $ITEM['OFFERS'][0]['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT'],
      $ITEM['OFFERS'][0]['PRICES']['BASE']['VALUE_VAT'],
      $prices_class,
      $label_class,
      $disclamers
    );
  }
  elseif(isset($ITEM['PRICES']['BASE']['VALUE_VAT']))
  {
    $ITEM = formatPrices(
      $ITEM,
      $ITEM['PRICES']['BASE']['DISCOUNT_VALUE'],
      $ITEM['PRICES']['BASE']['DISCOUNT_DIFF_PERCENT'],
      $ITEM['PRICES']['BASE']['VALUE_VAT'],
      $prices_class,
      $label_class,
      $disclamers
    );
  }

  return $ITEM;
}

function formatPrices($ITEM, $discount_price, $percent, $price, $prices_class, $label_class, $disclamers)
{
  $ITEM['DISCOUNT_PRICE']  = $discount_price;
  $ITEM['DISCOUNT_PERC']   = $percent;
  $ITEM['PRICE']           = $price;

  if($ITEM['DISCOUNT_PRICE'] !== $ITEM['PRICE'])
  {
    $ITEM['PRICE_TYPE'][]   = 'DISCOUNT';
  }

  $ITEM['PRICE_POINT'] = pricePoint($ITEM['DISCOUNT_PRICE']);

  $ITEM['PRICE_CLASS'] = formatArrayClasses($ITEM['PRICE_TYPE'], $prices_class);

  $ITEM['LABEL_CLASS'] = formatArrayClasses($ITEM['LABEL_TYPE'], $label_class);

  if(!isset($ITEM['LABEL_TYPE']))
  {
    $ITEM['LABEL_TYPE'] = array();
  }

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

function getColors($color_group_iblock_id, $color_group_id)
{
  $arFilter = Array("IBLOCK_ID"=>$color_group_iblock_id, "ID"=>$color_group_id);
  $res      = CIBlockElement::GetList(array(), $arFilter, false, false, array('PROPERTY_colors', 'PROPERTY_preview'));

  $ress = false;

  while($ar_res = $res->GetNext())
  {
    $sub_arFilter = Array("ID"=>$ar_res['PROPERTY_COLORS_VALUE']);
    $sub_res      = CIBlockElement::GetList(array(), $sub_arFilter, false, false, array('ID', 'NAME', 'PROPERTY_code'));
    //$sub_res = CIBlockElement::GetByID($ar_res['PROPERTY_COLORS_VALUE']);
    if($ar_sub_res = $sub_res->GetNext())
    {
      $ress[] = array(
        'id'   => $ar_sub_res['ID'],
        'name' => $ar_sub_res['NAME'],
        'hex'  => $ar_sub_res['PROPERTY_CODE_VALUE'],
      );
    }
  }

  return $ress;
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
 *Функция форматирует цену, разделяя триады точкой:
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