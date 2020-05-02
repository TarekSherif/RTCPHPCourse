<?php

//  this function Get Total

$number = array(2,4,6,8,10);

function GetTotal($number){

   return(array_sum($number));    //return value
}

$sumation = GetTotal($number);



echo $sumation;
