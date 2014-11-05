<?php
 $db = new mysqli('localhost', 'exporter', 'root', 'phpexport');
 if ($db->connect_erro){ //error here means fail to make connection
     $error = $db->connect_error;
 }else{
     $sql =
     'SELECT car_id, make, yearmade, mileage, transmission,
     price, description
     FROM cars
     INNER JOIN makes USING (make_id)
     WHERE yearmade > 2008
     ORDER BY price';
     $result = $db->query($sql);
     if($db->error){ //error here means problem with SQL query
         $error = $db->error;
     }
 }
 //test our page. Once you see it working delete code below like I have in flowers_mysqli.php
 if(isset($error)){
     echo $error;
 }else{
     echo 'ok';
 }