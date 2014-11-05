<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Session</title>
</head>
<body>

 <?php
 /*
     $_SESSION["name"] = "Angelica";
     $_SESSION["city"] = "Orlando";
     $_SESSION["state"] = "FL";
     $_SESSION["zip"] = "32806";

     echo $name . "<br />";
     echo $city . "<br />";
     echo $state . "<br />";
     echo $zip . "<br />";

  */

    $_SESSION["name"] = $_GET["name"];
    $name = "Angelica";
    $_SESSION["city"] = $_GET["city"];
    $city = "orlando";
    $_SESSION["state"] = $_GET["state"];
    $state = "FL";
    $_SESSION["zip"] = $_GET["zip"];
    $zip = "32706";

    echo $name . "<br />";
    echo $city . "<br />";
    echo $state . "<br />";
    echo $zip . "<br />";

 ?>


</body>
</html>