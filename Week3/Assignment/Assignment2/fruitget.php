<?php
//mysql username and password
$user = 'root';
$pass = 'root';

//create a new database connection
$dbh = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass);

//create a sql select statement to get a random fruit
$sql = ('SELECT fruitname, fruitcolor, fruitimage FROM fruits ORDER BY RAND() LIMIT 1');

//prepare the statement
$stmnt = $dbh->prepare($sql);

//execute the statement
$stmnt->execute();

//fetch the results of the statement
$result = $stmnt->fetchAll();

//encode the results
$json = json_encode($result);

//echo the JSON data
echo $json;
?>