<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        lec1
        4-get_Degree
    </title>
</head>

<body>
    <h1>
        <?php
        // http://localhost:8000/4-get_Degree.php?x=-9
        //input
        $num1 = $_GET["x"];
        //E >=90%
        //VG >=80%
        //G >=70%
        //D >=70%
        //F <50%


        //Prosses
        $result = "";
        if ($num1 >= 90) {
            $result = "E";
        } elseif ($num1 >= 80) {
            $result = "VG";
        } elseif ($num1 >= 70) {
            $result = "G";
        } elseif ($num1 >= 50) {
            $result = "D";
        } else {
            $result = "F";
        }
        //output
        echo $result;
        ?>
    </h1>

</body>

</html>