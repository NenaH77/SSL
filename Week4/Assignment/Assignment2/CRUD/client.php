<?php
/*
Name: Angelica M. Dinh
Class: Server-Side Languages
Assignment: Week 4 Project Part 2
Date Nov 21, 2014
*/
    //start session
    session_start();
    //success msgs
    if(isset($_SESSION['message'])){
        //msgs will pop up when you delete, update, or add a client
        echo $_SESSION['message'];
        //rests msg for new info
        unset($_SESSION['message']);
    }

    //access to database
    $user = "root";
    $pass = "root";
    $mysql = 'mysql:host=localhost; dbname=ssl; port=8889';
    $dbh = new PDO($mysql, $user, $pass);

    //if statement that checks to see if the website address is validated
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        if(!filter_var($_POST['website'], FILTER_VALIDATE_URL)){
            echo "<div class='msg2'>Invalid Website</div>";
        }else{
        //if website is valid, it goes to post all my data from the database
        $_SESSION["message"] = "<div class='msg'>Contact successfully added</div>";
        $dbh = new PDO($mysql, $user, $pass);
        //posting variables
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $email =$_POST['email'];
        $website =$_POST['website'];
        //inserting into clients those variables with specific values
        $stmt = $dbh->prepare("INSERT INTO clients(fname, lname, phone, email, website) VALUES(:fname, :lname, :phone, :email, :website);");
        //binding parameters for each value and variable
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':website', $website);

       //executes ea time I post new contact
       $stmt->execute();
       }
    }
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Week 4 Project | Display Contact </title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1><a href="client.php">Contact Manager Application</a></h1>
            <p><img src="images/peace_h.jpg" width="900" height="240" alt="Contacts"</p>
        </header>

        <div class="row">
            <div class="col-md-12">
                <form action="client.php" method="POST">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" name="fname" value="" required=""/>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lname" value="" required=""/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" value="" required=""/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="" required=""/>
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" value="http://" required=""/>
                    </div>
                        <input class="btn btn-default" type="submit" id="submit" name="submit" value="Add" />
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class='table table-hover'>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
<?php

    //prepare the select statement
    $stmt=$dbh->prepare("SELECT * FROM clients ORDER BY id");
    //execute the select statement
    $stmt->execute();
   //fetch an array of results from the database
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    //foreach loop gets all my data from the table
    foreach($result as $row){
        echo "<tr><td>" . $row['fname']. "</td>";
        echo "<td>" . $row['lname']. "</td>";
        echo "<td>" . $row['phone']. "</td>";
        echo "<td>" . $row['email']. "</td>";
        echo "<td>" . $row['website']. "</td>";
        echo '<td><a href="delete.php?id=' .$row['id']. '"><button id="delete" class="btn btn-default"">Delete</button></a></td>';
        echo '<td><a href="update.php?id=' .$row['id']. '"><button id="edit" class="btn btn-default"">Edit</button></a></td>';
    }
?>
                </table>
            </div>
        </div>
    </div>
<!-- jQuery Mini Version -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>
</html>