<?php

//API (XML - JSON)
//Application programming interfaces. This is how one application can talk to another
//Facebook, Ebay, Amazon, Google, etc....-->

 header("Content-Type:text/xml"); //Must start w/ header. Tells browser the contents of the page is xml
 $xmlfile = "<?xml version='1.0' encoding='UTF-8'?>"; //xml tag
 $xmlfile .= "<feeds>";
 $xmlfile .= "<feed>";
 $xmlfile .= "<from> Joe </from>";
 $xmlfile .= "<message> Hello </message>";
 $xmlfile .= "</feed>";
 $xmlfile .= "</feeds>";

 echo $xmlfile;

 $dom = new DOMDocument("1.0");
 $dom -> loadXML($xmlfile);
 $dom->save("myxml.xml"); //creates file in folder
?>


