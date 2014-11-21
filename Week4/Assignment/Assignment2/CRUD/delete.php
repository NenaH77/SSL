<?php
/*
Name: Angelica M. Dinh
Class: Server-Side Languages
Assignment: Week 4 Project Part 2
Date Nov 21, 2014
*/
$user = "root";
$pass = "root";

//create PDO database connection
$dbh = new PDO('mysql:host=localhost; dbname=ssl; port=8889', $user, $pass);

//getting specific client id
$id = $_GET['id'];
//delete from client where id is = to id
$stmt=$dbh->prepare('DELETE FROM clients WHERE id = :id');
$stmt->bindParam(':id', $id);
$stmt->execute();
header('Location: client.php');
die();
?>