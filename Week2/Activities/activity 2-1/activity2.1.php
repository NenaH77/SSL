<?php
/*
Angelica M. Dinh
Server-side Languages
Activity 2-1:File System Functions
Nov 4, 2014
*/

$data = file_get_contents('http://www.omdbapi.com/?t=goodfellas');//access json api from internet and open contents from the api
echo $data . "<br>"; //echo out

$dictionary = file_get_contents('dictionary.txt');//create file with txt that contains the 5 words.
$arr = explode(" ", $dictionary);//reading file into an array
foreach($arr as $days){ //loop through array
    echo $days . "<br>"; //display
}
?>