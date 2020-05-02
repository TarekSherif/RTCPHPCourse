<?php

// this function Remove Duplicates

$number = array(1, 1, 'a', 'a', 'm', 5, 9); //1,'a','m',5,9

function RemoveDuplicates($number)
{

    $remove = array_unique($number); //remove

    return ($remove);     //return value
}

$remove_duplicates = RemoveDuplicates($number);

echo print_r($remove_duplicates);
