<!DOCTYPE html>
<html>
<head>
    <title>Functions Arguments</title>
</head>
<body>

 <?php

 function say_hello_to($word) {
    echo "Hello {$word}!<br />";
 }
 //doesn't have to have matching $word or $name
 $name = "John Doe";
 say_hello_to($name);

 ?>
 <!-- /*
 str_replace("quick", "super-fast", $third);

      will be similar to the function setup as well....

 function str_replace($find, $replace, $target) {
        statement goes here
 };
 */
 -->

 <?php

 function better_hello($greeting, $target, $punct){
    echo $greeting . " " . $target . $punct . "<br />";
 }

 better_hello("Hello", $name, "!");
 better_hello("Greetings", $name, "!!!");
 better_hello("What's up", "SuzyQ", "?");
 better_hello("Greetings", $name, null);

 ?>


</body>
</html>