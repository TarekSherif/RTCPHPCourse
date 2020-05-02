<?php
$array = array(1, 1, 23, 45, 56, 2, 23, 4, 45);

function remove_duplcaes($array)
{

  $exist_in_array = function ($array, $value) {
    $is_exist = false;
    for ($j = 0; $j < count($array); $j++) {
      if ($array[$j] == $value) {
        $is_exist = true;
      }
    }
    return $is_exist;
  };
  $count = count($array); // this get count array
  $new_array = [];

  for ($i = 0; $i < $count; $i++) {


    if (!$exist_in_array($new_array, $array[$i])) {
      $new_array[] = $array[$i];
    }
  }



  return ($new_array); // return value
} // end function
echo "<pre>";
print_r(remove_duplcaes($array));
print_r($array);
echo "<pre>";
