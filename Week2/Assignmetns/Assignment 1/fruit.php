<!--
Name: Angelica M. Dinh
Class: Server-Side Languages
Assignment: Week 2 Project Part 1
Date Nov 5, 2014
-->

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Fruit Database Application</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Kameron' rel='stylesheet' type='text/css'>
</head>
<body>
    <section class="border">
        <h1>Let's Talk Fruit</h1>

        <div class="img">
            <img src="images/fruits.jpg">
        </div>

        <form class="fruitForm" action="fruit.php" method="post">
            Fruit:<input type="text" name="fruitname" required=""/>
            Color:<input type="text" name="fruitcolor" required=""/>
            <input class="btn" type="submit" name="submit" value="Submit" />
        </form>
    </section>
</body>
</html>