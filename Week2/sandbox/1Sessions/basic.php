<?php
    //Sessions use coookies which use headers
    //Must start before any HTML output
    //unless output buffering is turned on.
    session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sessions</title>
</head>
<body>

    <h2>3 ways to get data from our users:</h2>
        <ul>
            <li>URLs/Links GET</li>
            <li>Forms POST </li>
            <li>Cookies COOKIE</li>
        </ul>
    <p>Session are related to cookies. Session is a file that&#39s stored on the web server.
    Sessions are stored server side and not file side. Pro: more storage, smaller request size,
    conceals data values, more secure, less hackable. CONs: slower to access, expire when browser is closed,
    session files accumulate</p>

    <h3>Let&#39s get started and start working with sessions</h3>

<?php
    $_SESSION ["first_name"] = "Angelica";
    $name = $_SESSION["first_name"];
     echo $name;
?>

<?php
    $_SESSION ["first_name"] = null;
    $name = $_SESSION["first_name"];
     echo $name;
?>

</body>
</html>