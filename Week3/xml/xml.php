<?php
header("Content-type:text/xml"); //You have to start w/ header. Tells browser the contents of the page (xml in this case)
$xmlfile = "<?xml version='1.0' encoding='UTF-8'?>";
$xmlfile .= "<feeds>";
$xmlfile .= "<feed>";
$xmlfile .= "<from>Joe</from>";
$xmlfile .= "<message>Hello</message>";
$xmlfile .= "</feed>";

$xmlfile .= "<feed>";
$xmlfile .= "<from>Mike</from>";
$xmlfile .= "<message>Hello</message>";
$xmlfile .= "</feed>";
$xmlfile .= "</feeds>";


echo $xmlfile;
?>