<?php
//input
$b_salary = $_GET["x"]; //basic salary
$a_salary = $_GET["y"]; //addition salary
$title = "calculate salary & Gains";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>
    <?php
    // http://localhost:8000/practice4.php?x=950&y=1050
    $t_gain = ($b_salary * (26 / 100)) + ($a_salary * (24 / 100)); //total gain
    $t_salary = ($b_salary * (14 / 100)) + ($a_salary * (11 / 100)); //total salary

    ?>
    <!-- output -->
    <h1>
        <?php echo  "total gains of campany are :" . $t_gain; ?>
    </h1>
    <h1>
        <?php echo  "total salary of worker are :" . $t_salary; ?>
    </h1>
</body>

</html>