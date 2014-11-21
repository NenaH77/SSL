<?php
/*
Name: Angelica M. Dinh
Class: Server-Side Languages
Assignment: Week 4 Project Part 2
Date Nov 21, 2014
*/
session_start();
$_SESSION["message"] = "<div class='msg'>Edit was Successful</div>";

$user="root";
$pass="root";
$mysql='mysql:host=localhost;dbname=ssl;port=8889';
$dbh = new PDO($mysql, $user, $pass);


$clientid = $_GET['id'];
//pulling all info from clients
$stmt=$dbh->prepare("SELECT * FROM clients where id = :id");
$stmt->bindParam(':id', $clientid);
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

//if statement that checks to see if the website address is validated
if(isset($_POST['submit'])){
    if(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
        echo "<div class='msg'>Invalid Website</div>";
    }else{
    //getting specific id
    $clientid = $_GET['id'];
    //posting new variables
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $website=$_POST['website'];
    //update client id
    $stmt=$dbh->prepare("UPDATE clients SET fname='".$fname."', lname='".$lname."', phone='".$phone."',email='".$email."', website='".$website ."' WHERE id ='$clientid'");
    $stmt->execute();
    header('Location: client.php');
    die();
    }
}
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Week 4 Project | Update Contact </title>
</head>
<body>
    <header>
        <h1><a href="client.php">Update Contact Information</a></h1>
        <p><img src="images/peace_h.jpg" width="900" height="240" alt="Contacts"</p>
    </header>

    <form class="add" action="" method="POST">
        <h3>First Name:</h3><input type="text" name="fname" value=<?php echo '"' .$result[0]['fname']. '"';  ?> required /><br>
        <h3>Last Name:</h3><input type="text" name="lname" value=<?php echo '"' .$result[0]['lname']. '"';  ?> required /><br>
        <h3>Phone:</h3><input type="text" name="phone" value=<?php echo '"' .$result[0]['phone']. '"';  ?> required /><br>
        <h3>Email:</h3><input type="text" name="email" value=<?php echo '"' .$result[0]['email']. '"';  ?> required /><br>
        <h3>Website:</h3><input type="text" name="website" value=<?php echo '"' .$result[0]['website']. '"';  ?> required /><br>
        <input type="submit" name="submit" value="Save" /><br>
    </form>

</body>
</html>
