<?php

// this function Get max number

$number = array(1,2,3,5,4,8,6);

function GetMaxNumber($number){


    $max = max($number); // select max number

    return($max);   // return value
}

$max_number  = getmaxnumber($number);

echo $max_number;
