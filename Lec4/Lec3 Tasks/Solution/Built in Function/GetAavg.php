<?php

// this function GetAverage

$number = array(1,2,3,4,5,6,7,8,9,10);

function GetAverage($number){

  $count = count($number);  //GetCount

  $sum  = array_sum($number); //Get Total Array

  $Avg = $sum / $count;       // this avg = Total Array  / Countarray

    return($Avg);             //return value

}

  $average_array = GetAverage($number);

  echo $average_array;
