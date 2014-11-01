<!--/*
Name: Angelica Dinh
Class: Server-Side Languages
Assignment: Activity 2-2
Date Oct 31, 2014
*/-->

<?php
$personal= $_POST["personal"];
$school= $_POST["school"];
echo $personal . '<br />';
echo $school . '<br />';

if (filter_var($personal, FILTER_VALIDATE_EMAIL)) {
  echo $personal . " email address is considered valid. <br />";
}else{
  echo $personal . " email address is not valid. <br />";
}

$subject = "fullsail.edu";
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$result = preg_match( $pattern, $subject );
    if($result == 1){
         echo $subject . " is a valid email. We can accept it. <br />";
    } else {
         echo $subject . " is an invalid email. Please try again. <br />";
    }
?>