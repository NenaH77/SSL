<?php
$user = "root";
$pass = "root";
$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = $db->prepare('SELECT * FROM fruits;');
$sql->execute();
$result = $sql->fetchall(PDO::FETCH_ASSOC);

$doc = new DOMDocument('1.0');
$doc->preserveWhiteSpace = false;
$doc->formatOutput = true;

$root = $doc->createElement('fruits');
$root = $doc->appendChild($root);

foreach($result as $row){
    $fruit = $doc->createElement('fruit');
    $fruit = $root->appendChild($fruit);
    $id = $doc->createElement('id', $row['id']);
    $fruitname = $doc->createElement('fruitname', $row['fruitname']);
    $fruitcolor = $doc->createElement('fruitcolor', $row['fruitcolor']);
    $fruit->appendChild($id);
    $fruit->appendChild($fruitname);
    $fruit->appendChild($fruitcolor);
}
$xml = $doc->saveXML();
header('Content-Type: text/xml');
echo $xml;
?>