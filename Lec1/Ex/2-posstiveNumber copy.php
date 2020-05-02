<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        lec1
        2-posstiveNumber
    </title>
</head>

<body>
    <h1>
        <?php
        // http://localhost:8000/2-posstiveNumber.php?x=-9
        //input
        $num1 = $_GET["x"];

        //Prosses
        $result = "";
        if ($num1 >= 0) {
            $result = "posstive";
        } else {
            $result = "Not posstive";
        }
        //output
        echo $result;
        ?>
    </h1>

</body>

</html>