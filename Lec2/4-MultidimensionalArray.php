<?php
// url
// http://localhost:8000/4-MultidimensionalArray.php

$dept = array(
    "IT" => array(
        array("name" => "Ahmed", "salary" => 5000),
        array("name" => "Hosam", "salary" => 9000),
        array("name" => "Heba", "salary" => 5000)
    ),
    "HR" => array(
        array("name" => "Ali", "salary" => 4000),
        array("name" => "Tarek", "salary" => 5000),
        array("name" => "Mohamed", "salary" => 2000)
    ),

);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MultidimensionalArray</title>
</head>

<body>
    <pre>
<?php
// print_r($dept);
?>
    </pre>


    <?php
    //Hosam
    // print_r($dept["IT"][1]);
    ?>


    <?php
    foreach ($dept as $key => $value) {
    ?>
        <h1>
            <?php
            echo  $key;
            ?>
        </h1>
        <table>
            <tr>

                <th>
                    Name
                </th>
                <th>
                    Salary
                </th>
            </tr>
            <?php

            foreach ($value as $emp) {
            ?>
                <tr>
                    <td> <?php echo $emp["name"];    ?></td>
                    <td> <?php echo $emp["salary"];       ?></td>
                </tr>

            <?php
            }
            ?>

        </table>
    <?php
    }
    ?>




</body>

</html>