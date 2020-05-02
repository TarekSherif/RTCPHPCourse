<?php

$array = [2,4,1,6,8,1];

function sort_manoul($array){
$count = count($array); // this get count array

for($i = 0; $i < $count; $i++){
      
        for($j = $i + 1; $j < $count; $j++)
        {
          
            if($array[$i] > $array[$j])
            {
                $x         = $array[$i]; // saved number basic in   $x = number basic => $array[$i]
                $y         = $array[$j];   // saved number variable in  $y = number varible => $array[$j]
                $array[$j] = $x; // change Variable number = $array[$j] with number basic = $x 
                $array[$i] = $y; // change basic number = $array[$i] with variable number = $y 
            }
        } // end loop 2 
} // end loop 1 

return ($array); // reurn value

} // end function

print_r (sort_manoul($array));  


?>