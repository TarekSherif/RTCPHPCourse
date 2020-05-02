<?php

$array = array(5,8,6,14,8,4,8,3,2,12);


function  getmax($array){

$cheack= 0;  // this number cheack in array

for($i = 0;$i < count($array);$i++)  // this loop count array for cheack
{

if ($array[$i] > $cheack){

    $max = $array[$i]; // this maxumium number
    $cheack = $array[$i]; // this number cheak 

}

}
return($max); // ruturn value
}

echo getmax($array) ; // print max number
 
?>