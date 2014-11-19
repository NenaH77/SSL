<!--
Name: Angelica M. Dinh
Class: Server-Side Languages
Assignment: Week 4 Project Part 1
Date Nov 18, 2014
-->
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Week 4 Project | Contact Manager Application</title>
</head>
<body>
    <h1>Contact Manager Application</h1>

    <div>
    <button class="add_btn">Add Client</button>
    </div>

    <form class="add" action="client.php" method="POST">
        First Name:<input type="text" name="fname" value="" required=""/><br />
        Last Name:<input type="text" name="lname" value="" required=""/><br />
        Phone:<input type="text" name="phone" value="" required=""/><br />
        Email:<input type="text" name="email" value="" required=""/><br />
        Website:<input type="text" name="website" value="http://" required=""/><br />
        <input class="btn" type="submit" name="submit" value="Save" /><br />
    </form>
</body>
</html>

