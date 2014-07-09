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