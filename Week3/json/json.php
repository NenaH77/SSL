<?php
//API (XML - JSON)
//Application programming interfaces. This is how one application can talk to another
//Facebook, Ebay, Amazon, Google, etc...

header("Content-type:application/json");//To write a json file, 1st write header
$jsonfile = '{';
$jsonfile .= '"feeds": [';
$jsonfile .= '{"from":"joe", "message":"hello"},';
$jsonfile .= '{"from":"mike", "message":"hello"}';
$jsonfile .= ']';
$jsonfile .= '}';

echo $jsonfile;
?>

