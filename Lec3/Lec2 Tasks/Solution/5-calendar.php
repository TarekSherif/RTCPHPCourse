<?php

// url
// http://localhost:8000/5-calendar.php
//input
$url =  $_SERVER["PHP_SELF"] . "?m=";
// $manth_index = ($_GET["m"] == '') ? 1 : $_GET["m"];
if ($_GET["m"] == '') {
    $manth_index = 1;
} else {
    $manth_index = $_GET["m"];
}
$year = ($_GET["y"] == '') ? date("yy") : $_GET["y"];


$manths_by_index = array(
    1 => array("name" => "Jan", "days" => 31),
    2 => array("name" => "Feb", "days" => 28),
    3 => array("name" => "Mar", "days" => 31),
    4 => array("name" => "Apr", "days" => 30),
    5 => array("name" => "May", "days" => 31),
    6 => array("name" => "Jun", "days" => 30),
    7 => array("name" => "Jul", "days" => 31),
    8 => array("name" => "Aug", "days" => 31),
    9 => array("name" => "Sep", "days" => 30),
    10 => array("name" => "Oct", "days" => 31),
    11 => array("name" => "Nov", "days" => 30),
    12 => array("name" => "Dec", "days" => 31),
);

$days_name = array("Sat" => 1, "Sun" => 2, "Mon" => 3, "Tue" => 4, "Wed" => 5, "Thu" => 6, "Fri" => 7);
$manth_name = $manths_by_index[$manth_index]["name"];
$days = $manths_by_index[$manth_index]["days"];

$previous = ($manth_index == 1 ? 12 : $manth_index - 1);
$next = ($manth_index == 12 ? 1 : $manth_index + 1);

$previousURL = $url . $previous . '&y=';
$previousURL .= ($manth_index == 1) ? strval($year - 1) : strval($year);

$nextURL = $url . $next . '&y=';
$nextURL .= ($manth_index == 12) ? strval($year + 1) : strval($year);
?>
<!DOCTYPE html>
<html>

<head>
    <title>calendar</title>
    <style type="text/css" media="screen">
        body {
            text-align: center;
        }

        thead tr {
            background-color: #F7931F
        }

        tbody tr:nth-of-type(odd) {
            background-color: #FDEEE7
        }

        td:hover {
            background-color: #F7931F
        }

        input {
            width: 80px;
        }
    </style>

</head>

<body>

    <table>
        <thead>
            <tr>
                <th>

                    <a href="<?php echo  $previousURL ?>">&lt;</a>
                </th>
                <th colspan="3">

                    <?php echo $manth_name ?>

                </th>
                <th colspan="2">

                    <?php echo $year ?>

                </th>
                <th>

                    <a href="<?php echo $nextURL ?>">&gt;</a>
                </th>
            </tr>
            <tr>
                <?php

                foreach ($days_name as $key => $value) { ?>
                    <th>
                        <?php echo  $key; ?>
                    </th>
                <?php
                }

                ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php


                $whitespace = $days_name[date("D", mktime(0, 0, 0, $manth_index, 1, $year))];
                $cell = 1;

                for ($i = 1; $i < $whitespace; $i++, $cell++) { ?>
                    <td> </td>
                <?php }
                for ($i = 1; $i <= $days; $i++, $cell++) { ?>
                    <td><?php echo $i ?></td>
                    <?php if ($cell % 7 == 0) { ?>
            </tr>
            <tr>
        <?php
                    }
                }
        ?>
            </tr>
        </tbody>
    </table>


</body>

</html>