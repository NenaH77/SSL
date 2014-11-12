<?
// load external xml from a URL
// load xml file locally
// parse xml

$contents = simplexml_load_file("http://localhost:8888/SSL/Week3/xml/xml.php"); //to load an external url
//$contents = simplexml_load_file("myxml.xml"); //load external file

//var_dump($contents); //its displays a simple xml element and not an array

foreach($contents->feed as $feed){ //feed is the node
    echo $feed->from."</br>";
}

?>