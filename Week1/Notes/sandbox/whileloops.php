<!DOCTYPE html>
<html>
<head>
    <title>Loops: While</title>
</head>
<body>

 <!-- While Loops: -->
 <?php
 $count = 0;
 while ($count <= 10) {
    echo $count . ", ";
    $count++; //increment by 1
 }
 echo "<br />";
 echo "Count: {$count}";
 ?>

<br />

<!-- If Statement with While Loops:-->
<?php
 $more = 0;
 while ($more <= 10) {
    if ($more == 5) {
        echo $more . ", ";
    }

    $more++; //increment by 1
 }
 echo "<br />";
 echo "Numbers range from: ";



 "<br />";


  $num = 10;
  while ($num <= 20) {
     if ($num == 15) {
        echo " FIFTEEN, ";
     }else{
        echo $num . ", ";
     }
     $num++; //increment by 1
  }
  echo "<br />";
  echo "We end at {$num}";
 ?>

</body>
</html>