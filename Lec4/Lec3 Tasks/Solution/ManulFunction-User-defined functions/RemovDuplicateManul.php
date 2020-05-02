<?php
$array = array(1,1,23,45,56,2,1,1,23,4,45);

function remove_duplcaes($array){

$count =count($array); // this get count array

for($i = 0; $i < $count; $i++){
     
        for($j = $i + 1; $j < $count; $j++)
        {
         
            if($array[$i] == $array[$j])
            {
              $array[$j] = 'null'; // duplcates = 'null'

            }
        } // end loop 2 number varible

        if($array[$i] == 'null'){

          unset($array[$i]); // delete duplcates number
        }
        
}//end loop 1 basic number 

return($array); // return value
} // end function

print_r(remove_duplcaes($array));
