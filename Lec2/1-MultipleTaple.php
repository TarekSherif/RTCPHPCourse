<?php
// url
// http://localhost:8000/1-MultipleTaple.php?x=4

//input
$num =  $_GET["x"];
$page_title = "table of multiple of :" . $num;


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
</head>

<body>
    <h1><?php echo $page_title; ?></h1>

    <?php
    //output
    for ($i = 0; $i <= 12; $i++) {
    ?>
        <h3>
            <?php
            echo   strval($num) . "X" .  strval($i) . "=" .  strval($i * $num);
            ?>
        </h3>
    <?php
    }
    ?>

</body>

</html>