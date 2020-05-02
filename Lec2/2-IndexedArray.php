<?php
// url
// http://localhost:8000/2-IndexedArray.php

//input
$manths = array("jan", "feb", "mar", "apr", "may", "jun", "jul", "aug", "sep", "oct", "nov");
//To add $manths[11] = dec
$manths[] = "dec";
//To replace $manths[0] to يناير
$manths[0] = "يناير";


$page_tiltle = "IndexedArray";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $page_tiltle; ?>

    </title>
</head>

<body>
    <h1>
        <?php
        for ($i = 0; $i < count($manths); $i++) {
            echo $manths[$i] . "<br>";
        }

        ?>
    </h1>



</body>

</html>