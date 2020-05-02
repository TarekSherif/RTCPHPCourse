<?php

// url
// http://localhost:8000/calendar.php?x=Feb
//input
//  "http://localhost:8000/3-RightStar.php?x=";
$lines = $_GET["x"];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Right Stars</title>

</head>

<body>
    <span>
        <?php
        $stars = '*';
        echo $stars . '<br>';
        for ($i = 1; $i < $lines; $i++) {
            $stars .= '**';
            echo $stars . '<br>';
        }
        ?>
    </span>


</body>

</html>