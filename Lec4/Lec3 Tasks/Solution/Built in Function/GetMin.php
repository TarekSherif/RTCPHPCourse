<?php

// this function Get min number

$number = array(1,2,3,5,4,8,6);

function GetMinNumber($number){


    $min = min($number); // select max number

    return($min);   // return value
}

$min_number  = getMinnumber($number);

echo $min_number;
