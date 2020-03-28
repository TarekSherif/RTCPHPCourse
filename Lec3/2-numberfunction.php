
<?php
// http://localhost:8000/2-numberfunction.php

$num1 = 6.8;

echo abs($num1);

echo  "<br>";

function myabs($num)
{
    return ($num < 0) ? $num * -1 : $num;
}
echo myabs($num1);
echo  "<br>";
echo ceil($num1);
echo  "<br>";
echo floor($num1);

echo  "<br>";
echo max($num1, 8);
echo  "<br>";
echo min($num1, min(5, 8));
echo  "<br>";
echo pow(2, 11); //2*2*2

// for ($i = 1; $i < 12; $i++) {
//     echo  pow(3, $i);
//     echo "<br>";
// }

echo "<br>";
$x = 8;
function byval($num1)
{
    $num1++;
}



function byref(&$num1)
{
    $num1++;
}
byval($x);

echo $x;

echo "<br>";

byref($x);

echo $x;
echo "<br>";
// 2*2*2
function mypow($base, $ex)
{
    $pow = $base;
    for ($i = 1; $i < $ex; $i++) {
        $pow *= $base;
    }
    return $pow;
}



echo mypow(2, 3);

// echo pow(2, 3);

echo "<br>";
function mypow1($base, $ex = 1)
{
    if ($ex == 1) {
        return $base;
    }
    return $base * mypow1($base, $ex - 1);
    //  $base * $base * $base 
}




if (function_exists("mypow1")) {
    echo mypow1(2, 7);
} else {
    echo "function not exists";
}
