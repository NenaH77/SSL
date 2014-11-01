<!--
/*
Name: Angelica Dinh
Class: Server-Side Languages
Assignment: Activity 1-3
Date Oct 29, 2014
*/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Activity 1-3</title>
</head>
<body>

 <?php

 $colors = array (
  0 => "Red",
  1 => "Pink",
  2 => "Blue",
  3 => "Silver",
  4 => "Green",
  5 => "Purple",
  6 => "Black",
  7 => "Grey",
  8 => "Teal",
  9 => "Yellow"
 );

 //Part 1
 foreach($colors as $number => $color){
    $pretty_color = ucwords($color);
    echo "Color {$number} is {$pretty_color}. <br />";
 }
 ?>

 <p>Reverse Colors:</p>
 <?php
 $shades = array (
   0 => "Red",
   1 => "Pink",
   2 => "Blue",
   3 => "Silver",
   4 => "Green",
   5 => "Purple",
   6 => "Black",
   7 => "Grey",
   8 => "Teal",
   9 => "Yellow"
  );

  //Part 2
  $reverse = sizeof($shades); //*sizeof() returns the number of elements in an array
    echo "{$reverse}<br />";

  for($num = $reverse - 1; $num >= 0; $num--){
          echo "{$num} is {$shades[$num]}<br />";
   }
 ?>


 <p>Solid Colors:</p>
  <?php
  $solids = array (
    0 => "Red Hearts",
    1 => "Pink Rose",
    2 => "Blue Sky",
    3 => "Stormy Silver",
    4 => "Lemon Green",
    5 => "Purple Monster",
    6 => "Black poka-dots",
    7 => "Sad Grey",
    8 => "Green Teal",
    9 => "Yellow Sunflowers"
   );

   //Part 3
   foreach($solids as $count => $colors){
        if($count % 2 == 0){
            echo "{$count} is {$colors}<br />";
        }else{

        }
    }
  ?>


</body>
</html>