<!--
Name: Angelica M. Dinh
Class: Server-Side Languages
Assignment: Week 2 Project Part 2
Date Nov 7, 2014
-->

<!----- INSERT DATA THAT ADDS TO MY DATABASE ------>
<?php
//mysql username
$user="root";

//mysql password
$pass="root";

//create PDO database connection
$dbh = new PDO('mysql:host=localhost; dbname=ssl; port:8889', $user, $pass);

//CONNECT TO DATABASE AND SETUP PDO

//user clicks submit on the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //get POST values 
    $fruitname = $_POST['fruitname'];
    $fruitcolor = $_POST['fruitcolor'];

     //prepare the SQL statement 
    $stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor) VALUES (:fruitname, :fruitcolor);");

    //bind the parameters 
    $stmt->bindParam(':fruitname', $fruitname);
    $stmt->bindParam(':fruitcolor', $fruitcolor);

    //execute the prepared statement 
    $stmt->execute();
}
?>

<!----- HTML FORM ------>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fruit Database Application</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Kameron' rel='stylesheet' type='text/css'>
</head>
<body>
    <section class="border">
        <h1>Let's Talk Fruit</h1>

        <div class="img">
            <img src="images/fruitVar.jpg">
        </div>

        <form class="fruitForm" action="fruits.php" method="POST">
            Fruit:<input type="text" name="fruitname" value="" required=""/>
            Color:<input type="text" name="fruitcolor" value="" required=""/>
            <input class="btn" type="submit" name="submit" value="Submit" />
        </form>

        <table class="table">
            <tr>
                <th>Fruit ID</th>
                <th>Fruit Name</th>
                <th>Fruit Color</th>
                <th>Remove</th>
            </tr>

<!----- READ DATA ------>
<?php
    //prepare the select statement
    $stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor FROM fruits;');

    //execute the select statement
    $stmt->execute();

    //fetch an array of results from the database
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);

    //loop through the results array
    foreach ($result as $row) {

      //display the table row
      echo '<tr><td>' . $row['id'] . '</td><td>'. $row['fruitname'].'</td><td>' . $row['fruitcolor'] . ' </td><td> <a href="deletefruit.php?id=' . $row['id'] . '">Delete</a>' . '<td>' ;
    }
?></table></section>

</body>
</html>
