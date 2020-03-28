<?php

// url
// http://localhost:8000/1-HierarchicalMultiplicationTable.php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hierarchical multiplication table</title>
    <style>
        body {
            text-align: center;
        }

        span {
            border: 1px solid black;
        }

        span.question {
            border: none;
            color: blue;
        }

        span.answer {
            border: none;
            color: red;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 10; $i >= 1; $i--) {
    ?>
        <div>
            <?php
            for ($j = $i; $j <= 10; $j++) {
                echo " <span ><span class='question'>$i X $j=  <span class='answer'>" . $i * $j . "</span></span> </span >";
            }
            ?>
        </div>
    <?php
    }
    ?>

</body>

</html>