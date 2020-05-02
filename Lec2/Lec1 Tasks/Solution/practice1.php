<?php

// url
// http://localhost:8000/practice1.php?x=4
//input
$title = "odd or even";
$num = $_GET["x"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?php $title; ?></title>
</head>

<body>
    <?php
    $output = "";

    if ($num % 2 == 0) {
        $output = $num . " is even number";
    } else {
        $output = $num . " is odd number";
    }

    ?>
    <!-- output -->
    <h1>
        <?php
        echo $output
        ?>
    </h1>
</body>

</html>