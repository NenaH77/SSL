<!DOCTYPE html>
<html>
<head>
    <title>Else and Elseif</title>
</head>
<body>

 Else:
 <?php
 $a = 4;
 $b = 10;

 if ($a > $b) {
    echo "a is larger than b";
 }else{
    echo "a is not larger than b";
 }
 ?>

 <br />

 Elseif:
 <?php
 $a = 4;
 $b = 3;

 if ($a > $b) {
    echo "a is larger than b";
 }elseif ($a < $b) {
    echo "a is smaller than b";
 }
 ?>

 <br />

 Combine Else and ElseIf:
 <?php
 $a = 4;
 $b = 4;

 if ($a > $b) {
    echo "a is larger than b";
 } elseif ($a < $b) {
    echo "a is smaller than b";
 } else {
    echo "a is equal to b";
 }

 ?>

</body>
</html>