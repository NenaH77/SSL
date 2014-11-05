<?php
//PARSE XML
//load external xml from a URL
//load xml file locally

$contents = simplexml_load_file("http://localhost/XML/xml.php");

//$contents = simplexml_load_file("myxml.xml");

//var_dump($contents); //making sure we get the results we're expecting

foreach($contents ->feed as $feed){
echo $feed->from."<br />";
  }
?>