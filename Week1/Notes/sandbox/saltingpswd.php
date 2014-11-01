<!DOCTYPE html>
<html>
<head>
    <title>Salting Passwords</title>
</head>
<body>

 <?php

 echo md5("mysalt" . "mypassword");

 ?>


</body>
</html>