<?php
$dbh = new PDO("mysql:host=localhost; dbname=ssl; port=8889", "root", "root");

$sql = "select fruitname, fruitcolor from fruits order by name";

$stmnt = $dbh->prepare($sql);

$stmnt->execute();

$result = $stmnt->fetchAll();

//var_dump($result);
/*
foreach($result as $fruit){
    echo $fruit["fruitname"]. "</br>";
};
*/

//JSON
header("Content-type:application/json");
echo json_encode($result);

/*
//XML
header("Content-type:text/xml");
$xmlfile = '<?xml version="1.0" encoding="UTF-8"?>';
$xmlfile .= '<fruits>';
foreach($result as $fruit){
    $xmlfile .= '<fruit>';
    $xmlfile .= "<name>" .$fruit["name"]."</name>";
    $xmlfile .= '</fruit>';
};
$xmlfile .= '</fruits>';
echo $xmlfile;
*/

?>