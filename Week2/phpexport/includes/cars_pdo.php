<?php
$mysql = 'mysql:host=localhost;dbname=phpexport';
$sqlite = "sqlite:~/htdocs/SSL/Week2/phpexport/sqlite/phpexport.db";

try{ //password protected
//code we need to execute goes here

    $db = new PDO($mysql, 'exporter', 'root');//passing in argument = Database TableName, username created in Mamp database username table, password for database)
     //#db = new PDO($sqlite);
     $sql = 'SELECT car_id, make, yearmade, mileage, transmission,
                price, description FROM cars
                INNER JOIN makes USING (make_id)
                WHERE yearmade > 2008
                ORDER BY price';
     //submit query and store result
     $result = $db -> query($sql);
     //if anything goes wrong with query we need to store it in the error  method
     $errorInfo = $db -> errorInfo();
     if (isset($errorInfo[2])){ //error is set in the 3rd array index. if there is no error, error doesn't exists
        $error = $errorInfo[2];
     }

} catch (PDOExecption $e){
    $error = $e ->getMessage(); //error messages go here
}
//Testing the error and making sure its set
if (isset($error)){
    echo $error;
}else{
    echo 'ok';
}


