<?php
// url
// http://localhost:8000/practice2.php?x=20.5
$title = "total cost of electricity";
$cons = $_GET["x"];
$total = 0;
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

    if ($cons >= 0 && $cons <= 10) {
        $total = $cons * 65;
    } elseif ($cons > 10 && $cons <= 20) {
        $total = 10 * 65;
        $total = $total + ($cons - 10) * 160;
    } elseif ($cons > 20 && $cons <= 30) {
        $total = 10 * 65;
        $total = $total + 10 * 160;
        $total = $total + ($cons - 20) * 225;
    } elseif ($cons == 40) {
        $total = 275 * 40;
    } else {
        $total = 315 * $cons;
    }
    ?>
    <h1> your water bill is <?php echo $total ?> </h1>
</body>

</html>