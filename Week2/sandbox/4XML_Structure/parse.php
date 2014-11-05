<?php
$content = file_get_contents("http://localhost/json.php");
$content = file_get_contents("myjson.json");

$encoded = json_decode($content);

var_dump($encoded);

foreach($encoded->feeds as $feed){
    echo $feed->from."<br>";
}


?>