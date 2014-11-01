/*
Name: Angelica Dinh
Class: Server-Side Languages
Assignment: Activity 1-1
Date Oct 29, 2014
*/

<!DOCTYPE html>
<html>
<head>
    <title>Activity 1</title>
</head>
<body>

 <?php
 $name = (string) "Angelica";
 $age = (integer) 37;
 ?>
 <br />

 Quotes:
 <br />
 <?php echo "Double: My name is " . $name  . " and I am " . $age . " years old"; ?><br />
 <?php echo 'Single: My name is ' . $name  . ' and I am ' . $age . ' years old'; ?><br />
 <br />

 Arrays:
 <?php $person = array($name, $age); ?><br />
 <?php echo $person[0]. " is " . $person[1]; ?><br />
 <br />

 Key-Value Pairs:
 <?php $person = array("name" => "Angelica", "age" => 37); ?><br />
 <?php echo $person["name"]. " ".$person["age"]; ?><br />
 <br />

 Nulls:
 <?php $age = null; ?><br />
 <?php echo is_null($age); ?>
 <br />

 Unset:
 <?php

 unset($name);
 echo "My name is " .$name;

 ?>


</body>
</html>