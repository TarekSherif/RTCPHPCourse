<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Lec 1
        Input_output

    </title>
</head>

<body>
    <h1>
        <?php
        // To Run this Page
        // http://localhost:8000/Input_output.php?x=5&y=6

        // input
        $num1 = $_GET["x"];
        $num2 = $_GET["y"];

        //prosses
        $result = $num1 + $num2;

        //outPut
        echo $result;
        ?>
    </h1>
</body>

</html>