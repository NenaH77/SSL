<?php
$user = "root";
$pass = "root";

//create PDO database connection
$dbh = new PDO('mysql:host=localhost; dbname=ssl; port=8889', $user, $pass);

//grab the id value from the url
$id = $_GET['id'];

//prepare the delete statement
$stmt = $dbh->prepare("DELETE FROM fruits WHERE id IN (:id)");

//bind the parameter
$stmt->bindParam(':id', $id);

//execute the prepared statement 
$stmt->execute();

//send user back to fruitAds.php page
header('Location: fruitsAds.php');

//disconnect from database
die();
?>