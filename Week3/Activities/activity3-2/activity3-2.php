<!--
Angelica M. Dinh
Server-side Languages
Activity 3-2:Create and Read JSON in PHP
Nov 11, 2014
-->
<?php
$username="root";
$password="root";
$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $username, $password);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $fruitname=$_POST['fruitname'];
    $fruitcolor=$_POST['fruitcolor'];
    $sql=$db->prepare("INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");
    $sql->bindParam(':fruitname', $fruitname);
    $sql->bindParam(':fruitcolor', $fruitcolor);
    $sql->execute();
}
?>

<!DOCTYPE hmtl>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Create and Read JSON in PHP | Activity 3-2</title>

<!-- CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- Font -->
<link href='http://fonts.googleapis.com/css?family=Kameron' rel='stylesheet' type='text/css'>

<!-- JS -->
<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
    // Script outputs data in fruitxml
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "fruitjson.php",
            dataType: "json",
            success: jsonParser
        });
    });
    function jsonParser(json){
        $.each(json, function(keys, value){
            $('#container').append('<div>' + value.id + value.fruitname +  value.fruitcolor + '</div>');
        });
    };
    </script>
</head>
    <body>
        <form action="activity3-2.php" method="POST">
            Fruit name: <input name="fruitname" type="text" required />
            Fruit color: <input name="fruitcolor" type="text" required />
            <input type="submit" name="submit" value="Add Fruit" />
        </form>

        <div id="container"></div>
    </body>
</html>