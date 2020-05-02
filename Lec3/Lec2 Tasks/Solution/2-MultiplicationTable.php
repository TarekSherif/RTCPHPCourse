<?php

// url
// http://localhost:8000/2-MultiplicationTable.php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication table</title>
    <style>
        body {
            text-align: center;
        }

        td {
            border: 1px solid
        }

        td.none-border {
            border: none;
        }

        span {
            color: red;
        }

        div {
            color: blue;
        }
    </style>



</head>

<body>
    <table>
        <?php


        for ($i = 10; $i >= 1; $i--) {
        ?>
            <tr>

                <?php
                echo   "<td class='none-border' colspan='$i'   ></td>";
                for ($j = $i; $j <= 10; $j++) {
                    echo "<td> <div>$i X $j=</div><span>" . $i * $j . "</span></td>";
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>