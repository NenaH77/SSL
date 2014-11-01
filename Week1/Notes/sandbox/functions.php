<!DOCTYPE html>
<html>
<head>
    <title>Functions: Defining</title>
</head>
<body>


 <?php

 function say_hello() {
    echo "Hello World!<br />";
 }
 say_hello();



 function say_hello_to($word) {
     echo "What's going on {$word}! <br />";
  }
 say_hello_to("JohnDoe");



 function say_whatup($word) {
      echo "What's going on {$word}! <br />";
   }
  say_whatup("JohnDoe");
  say_whatup("everyone!");


 ?>

</body>
</html>