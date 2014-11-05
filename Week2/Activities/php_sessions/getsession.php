<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Get Session</title>
</head>
<body>

 <?php
 $name = $_SESSION["name"];
 $city = $_SESSION["city"];
 $state = $_SESSION["state"];
 $zip = $_SESSION["zip"];

 echo $name . "<br />";
 echo $city . "<br />";
 echo $state . "<br />";
 echo $zip . "<br />";

 print_r($_SESSION);

?>

</body>
</html>