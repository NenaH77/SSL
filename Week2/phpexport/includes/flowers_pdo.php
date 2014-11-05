<?php
$mysql = 'mysql:host=localhost;dbname=phpexport';
$sqlite = "sqlite:~/htdocs/SSL/Week2/phpexport/sqlite/phpexport.db";

try {
	 $db = new PDO($mysql, 'exporter', 'root');//passing in argument = Database TableName, username created in Mamp database username table, password for database)
         //#db = new PDO($sqlite);
	$sql = 'SELECT * FROM arrangements';
	$result = $db->query($sql);
	$errorInfo = $db->errorInfo();
	if (isset($errorInfo[2])){
		$error = $errorInfo[2];
	}
} catch (PDOException $e) {
	$error = $e->getMessage();
}
