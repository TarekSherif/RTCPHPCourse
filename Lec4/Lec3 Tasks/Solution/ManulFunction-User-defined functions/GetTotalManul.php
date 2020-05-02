<?php

$array = array(5,9,8,7,5,6,8);

function gettotal($array){

for($i = 0 ; $i < count($array); $i++){ //loop count array

$sum += $array[$i]; // plus value every time loop

}
return($sum); // return value 
}

echo gettotal($array); // print 

?>