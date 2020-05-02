<?php

$array = array(5,8,6,14,8,4,8,3,2,12);


function getmin($array){

$cheack= $array[0];  // this number cheack in array

for($i = 0;$i < count($array);$i++) // this loop count array for cheack
{

if ($array[$i] < $cheack){

    $min = $array[$i];  // this minumium number
    $cheack = $array[$i]; // this number cheak 

}

}

return($min); // ruturn value

}
echo getmin($array); // print min number
 
?>