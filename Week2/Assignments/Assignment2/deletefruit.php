<?php
$user = "root";
$pass = "root";

//create PDO database connection
$dbh = new PDO('mysql:host=localhost; dbname=ssl; port=8889', $user, $pass);

//get the fruit id
$id = $_GET['id'];

//prepare the delete statement
$stmt = $dbh->prepare("DELETE FROM fruits WHERE id IN (:id)");

//bind the parameter
$stmt->bindParam(':id', $id);

//execute the prepared statement 
$stmt->execute();

//send user back to fruits.php page
header('Location: fruits.php');

//disconnect from database
die();
?>