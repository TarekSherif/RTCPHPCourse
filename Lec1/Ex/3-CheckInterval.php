<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        lec1
        3-CheckInterval
    </title>
</head>

<body>
    <h1>
        <?php
        // http://localhost:8000/3-CheckInterval.php?x=-9
        //input
        $num1 = $_GET["x"];

        //Prosses
        $result = "";
        if ($num1 >= 5 and $num1 < 10) {
            $result = "true";
        } else {
            $result = "false";
        }
        //output
        echo $result;
        ?>
    </h1>

</body>

</html>