<?php

// this function GetCount

    $number = array(2,8,7,5,4,5,2,8,7,5,4,5,5,5,5,'a','b','c');


  function GetCount($number){


      return(count ($number))  ;// return value
  }  


$count = GetCount($number);
     
   echo     $count;