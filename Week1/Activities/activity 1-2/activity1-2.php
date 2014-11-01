<!--
/*
Name: Angelica Dinh
Class: Server-Side Languages
Assignment: Activity 1-2
Date Oct 29, 2014
*/
-->

<!DOCTYPE html>
<html>
<head>
    <title>Activity 1-2</title>
</head>
<body>

 <?php

 $grade = array(94, 54, 89.9, 60.01, 102.1);

 function student_grades($numbers) {
     if ($numbers >= 90) {
         echo "You received an A in this class";
      }elseif ($numbers >= 80) {
         echo "You received a B in this class";
      }elseif ($numbers >= 70) {
         echo "You received a C in this class";
      }elseif ($numbers >= 60) {
         echo "You received a D in this class";
      }elseif ($numbers > 59) {
         echo "You received an E in this class";
      }else {
        echo "You have not taken the course yet";
      }
 }
 student_grades($grade[0]);
 echo "<br />";
 student_grades($grade[1]);
 echo "<br />";
 student_grades($grade[2]);
 echo "<br />";
 student_grades($grade[3]);
 echo "<br />";
 student_grades($grade[4]);
 ?>


</body>
</html>