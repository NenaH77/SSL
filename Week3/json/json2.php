<?php
header('Content-Type: application/json');

//another way to read file as json.php
$jf = array("feeds"=>array(array("from"=>"joe", "message"=>"hello"),
                                 array("from"=>"mike", "message"=>"hello")));

//echo json_encode($jf); //convert into a json

$myjson = json_encode($jf);
echo $myjson;

//write to file
file_put_contents('myjson.json', $myjson);
?>

