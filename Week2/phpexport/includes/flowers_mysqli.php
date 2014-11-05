<?php
$db = new mysqli('localhost', 'exporter', 'root', 'phpexport');
if ($db->connect_erro){ //error here means fail to make connection
    $error = $db->connect_error;
}else{
    $sql ='SELECT * FROM arrangements';
    $result = $db->query($sql);
    if($db->error){ //error here means problem with SQL query
        $error = $db->error;
    }
}
