<?php
//input
$xaxis = $_GET["x"]; //x-axis
$yaxis = $_GET["y"]; //y-axis
$title = "coordinates";

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
     // http://localhost:8000/practice5.php?x=3&y=2
     $output = "";
     if ($xaxis > 0 && $yaxis > 0) {
          $output = "x= " . $xaxis . " and " . "y= " . $yaxis . " are positive values in First Quarter [I]";
     } elseif ($xaxis < 0 && $yaxis < 0) {
          $output = "x= " . $xaxis . " and" . "y= " . $yaxis . " are negative values in third Quarter [IV] ";
     } elseif ($xaxis > 0 && $yaxis < 0) {
          $output = "x= " . $xaxis . " is positive value " . "y= " . $yaxis . " is negative value in forth Quarter [III] ";
     } elseif ($xaxis < 0 && $yaxis > 0) {
          $output = "y= " . $yaxis . " is positive value " . "x= " . $xaxis . " is negative value in second Quarter [II] ";
     } else {
          $output = "y= " . $yaxis . " and " . "x= " . $xaxis . " are zero value";
     }

     ?>
     <h1>
          <?php echo  $output ?>
     </h1>
</body>

</html>