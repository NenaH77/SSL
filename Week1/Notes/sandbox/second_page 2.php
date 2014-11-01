<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Second Page</title>
  </head>
  <body>

<p>To send a value from 1 page to the next is by using a query parameter. The query parameters are part of the URL that comes after the question mark.</p>
      <ul>example:
        <li><strong> somepage.php?page=2</strong></li>
        <li><strong>somepage.php?category=7&page=3</strong></li>
        <li><em>http://google.com/search?q=php</em></li>
      </ul>

    <pre>
        <?php
        // print_r($_GET);
        ?>
    </pre>

    <?php
        $id = $_GET['id'];
        echo $id;
    ?>
    <br />
    <?php
        $company = $_GET['company'];
        echo $company;
    ?>

  </body>
</html>
