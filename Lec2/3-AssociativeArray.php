<?php
// url
// http://localhost:8000/3-AssociativeArray.php

$months = array(
    "jan" => 31,
    "feb" => 29,
    "mar" => 31,
    "apr" => 30,
    "may" => 31,
    "jun" => 30,
    "jul" => 31,
    "aug" => 31,
    "sep" => 30,
    "Oct" => 31,
    "nov" => 30,
    "Dec" => 31
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AssociativeArray</title>
</head>

<body>
    <!--  

    // foreach ($months as $key => $value) {
    //     # code...
    // }


    print_r($months)
      -->
    <table>
        <tr>
            <th>
                months
            </th>
            <th>
                #of Days
            </th>
        </tr>
        <?php
        foreach ($months as $key => $value) {
        ?>
            <tr>
                <th> <?php echo  $key ?> </th>
                <td> <?php echo   $value ?></td>
            </tr>
        <?php
        }
        ?>
    </table>




</body>

</html>