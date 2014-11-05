<?php
//Create JSON

    header("Content-type:application/json");
/*
    $jsonfile = '{';
    $jsonfile .= '"feeds":['; //REQUIRES '"DOUBLE QUOTES"'
    $jsonfile .= '{"from":"joe", "message" : "hello"},'; //this will be an array inside of my array(). EXAMPLE: array(array)
    $jsonfile .= '{"from":"mike", "message" : "hello"},';
    $jsonfile .= '{"from":"lacy", "message" : "hello"},';
    $jsonfile .= ']';
    $jsonfile .= '}';
*/

    $jsonfile = array("feeds"=>array(array("from"=>"joe", "message" =>"hello"),
                               array("from"=>"mike", "message" =>"hello"),
                               array("from"=>"lucy", "message" =>"hello") ) );




    //php will leave this into an array so we need to convert into a json
    $myjson = json_encode($jsonfile);
    //write into file
    file_put_contents('myjson.json', $myjson);

?>
