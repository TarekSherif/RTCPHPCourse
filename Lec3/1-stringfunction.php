
<?php
// http://localhost:8000/stringfunction.php
$s1 = "hi RTC";
echo $s1 . "<br>";
echo "strlen  : " . strlen($s1) . "<br>";
echo "str_word_count  : " . str_word_count($s1) . "<br>";
echo "strrev  : " . strrev($s1) . "<br>";

echo "strpos  : " . strpos($s1, "RTC") . "<br>";

echo "str_replace  : " . str_replace("RTC", "HI", $s1) . "<br>";

echo $s1 . "<br>";
echo "ucwords  : " .  ucwords($s1) . "<br>";



function mystr_word_count($string1)
{
    $count = 0;
    for ($i = 0; $i < strlen($string1); $i++) {
        if ($string1[$i] == " ") {
            $count++;
        }
    }
    return $count + 1;
}


// echo mystrlen($s1);
