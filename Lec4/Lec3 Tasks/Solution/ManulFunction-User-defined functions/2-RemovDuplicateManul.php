<?php
$array = array(1, 1, 23, 45, 56, 2, 23, 4, 45);

function remove_duplcaes($array)
{

  $count = count($array); // this get count array
  $new_array = [];

  for ($i = 0; $i < $count; $i++) {
    $is_exist = false;
    for ($j = 0; $j < count($new_array); $j++) {
      if ($new_array[$j] == $array[$i]) {
        $is_exist = true;
      }
    }

    if ($is_exist == false) {
      $new_array[] = $array[$i];
    }
  }

  return ($new_array); // return new array
} // end function

print_r(remove_duplcaes($array));
