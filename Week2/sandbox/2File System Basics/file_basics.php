<!DOCTYPE html>
<html>
<head>
    <title>File System Basics</title>
</head>
<body>

 <?php

 echo __FILE__ . "<br />";
 echo __Line__ . "<br />"; //be careful once you include files
 echo dirname(__FILE__) . "<br />";
 echo __DIR__ . "<br />"; //same as dirname and only works in PHP 5.3 (I have)

 // Functions : Does the file exists

 /** File exists  **/
 // ? is a ternary operator which returns yes or no
 echo file_exists(__FILE__)? "yes" : "no";
 echo "<br />";

 /** Directory Name **/
 //the directory name of this file, when added to basic.html, does that exist?
 echo file_exists(dirname(__FILE__). "/basic.html") ? "yes" : "no";
 echo "<br />";

 //the quirky thing about file_exists is that it also works on just directories
 //Does the directory exists? This is the same thing as file_exists as the one above (/basic.html)
 echo file_exists(dirname(__FILE__)) ? "yes" : "no";
 echo "<br />";

 /** File? **/
 //if we want to know if something is a file
 echo is_file(dirname(__FILE__). "/basic.html" ) ? "yes" : "no";
 echo "<br />";
 echo is_file(dirname(__FILE__)) ? "yes" : "no";
 echo "<br />";

 /** Directory? **/
 //is it a directory?
 echo is_dir(dirname(__FILE__). "/basic.html" ) ? "yes" : "no";
 echo "<br />";
 echo is_dir(dirname(__FILE__)) ? "yes" : "no";
 echo "<br />";

 /** Reference Directory **/
 //reference the directory the file is in
 echo is_dir("..") ? "yes" : "no";
 echo "<br />";

 ?>


</body>
</html>