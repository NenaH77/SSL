<!--
Name: Angelica M. Dinh
Class: Server-Side Languages
Assignment: Week 3 Project Part 2
Date Nov 13, 2014
-->

<!----- WEEK 3: ADD ON | FRUIT AD CALLS THE API ------>
<?php
//call the API from fruitget.php
$contents = file_get_contents('http://localhost:8888/SSL/Week3/Assignment/Assignment2/fruitget.php');

//decode results
$decoded = json_decode($contents);

//var_dump($decoded);

//loop through the decoded results and set variables
foreach($decoded as $fruit){
    $fruitname = $fruit->fruitname;
    $fruitcolor = $fruit->fruitcolor;
    $fruitimage = $fruit->fruitimage;
}
?>

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

    //grabs the users fruitname, color and image from the input fields
    $fruitname = $_POST['fruitname'];
    $fruitcolor = $_POST['fruitcolor'];
    $fruitimage = $_POST['fruitimage'];

     //prepare an insert statemeent for mySQL 
    $stmt = $dbh->prepare("INSERT INTO fruits (fruitname, fruitcolor, fruitimage) VALUES (:fruitname, :fruitcolor, :fruitimage);");

    //bind the parameters  for the fruitname, color and image to use in this insert statement
    $stmt->bindParam(':fruitname', $fruitname);
    $stmt->bindParam(':fruitcolor', $fruitcolor);
    $stmt->bindParam(':fruitimage', $fruitimage);

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
        <h1>Lets Talk Fruit</h1>

<!----- WEEK 3: DIV ADD ON | PHP INCORPORATED INTO HTML FRUIT  ------>
        <div class="img">
            <p>Fruit of the Day:<span style="color:<?php echo $fruitcolor ?>"><strong><?php echo " ".$fruitcolor . " " . $fruitname ?></strong></span></p>
            <p><img src="<?php echo $fruitimage; ?>" style="border:5px solid <?php echo $fruitcolor; ?>" height="200" width="250" /></p>
        </div>

<!----- FORM AND TABLE  ------>
        <form class="fruitForm" action="fruitsAds.php" method="POST">
            Fruit: <input type="text" name="fruitname" value="" required=""/>
            Color: <input type="text" name="fruitcolor" value="" required=""/>
            Image: <input type="text" name="fruitimage" value="" required=""/>
            <input class="btn" type="submit" name="submit" value="Submit" />
        </form>

        <table class="table">
            <tr>
                <th>Fruit Id</th>
                <th>Fruit Name</th>
                <th>Fruit Color</th>
                <th>Fruit Image</th>
                <th>Remove</th>
            </tr>

<!----- READ DATA ------>
<?php
    //prepare the select statement
    $stmt = $dbh->prepare('SELECT id, fruitname, fruitcolor, fruitimage FROM fruits;');

    //execute the select statement
    $stmt->execute();

    //fetch an array of results from the database
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);

    //loop through the results array
    foreach ($result as $row) {

      //display the table row
      echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fruitname'] .'</td><td>' . $row['fruitcolor'] . '</td><td>' . $row['fruitimage'] . ' </td><td> <a href="deletefruit.php?id=' . $row['id'] . '">Delete</a>' . '<td>';
    }
?></table></section>

</body>
</html>