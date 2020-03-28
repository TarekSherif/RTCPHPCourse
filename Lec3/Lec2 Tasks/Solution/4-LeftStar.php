<?php

// url
// http://localhost:8000/4-LeftStar.php?x=5
//input


?>
<!DOCTYPE html>
<html>

<head>
    <title>Left Stars</title>

</head>

<body>

    <?php
    $number = $_GET["x"];
    for ($i = 1; $i <= $number; $i++) {
        for ($j = 1; $j <= ($number - $i) * 2; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "<br/>";
    }

    ?>

</body>

</html>