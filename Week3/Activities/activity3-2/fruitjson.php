<?php
header('Content-Type: application/json');

$user="root";
$pass="root";

$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = $db->prepare('SELECT * FROM fruits;');
$sql->execute();
$result = $sql->fetchall(PDO::FETCH_ASSOC);

$json = json_encode($result, JSON_PRETTY_PRINT);
echo $json;
?>