<?PHP 

$array = array(1,5,3,6,8,7,9,8,9,2,5,9,3,5,5);

function GetCount($array){

    
    for($i = 0 ; $i < count($array);$i++ ){ // this loop  To find out count array

        $cheak = $array[$i]; // get value array inside in cheak

        if($cheak == null){  // cheack data null or not null

            return($i); // return value count array
             
            $i = 0; // change number $i for stop array
        }

    }

    

}

echo GetCount($array); // print count
