<?php
header("Content-type: text/xml");

$xmlfile = "<?xml version='1.0' encoding='UTF-8'?>";

$xmlfile .=  "<note>";

$xmlfile .=  "<from>Lenny</from>";

$xmlfile .=  "<to>Sonia</to>";

$xmlfile .=  "<message>Remember my birthday this weekend</message>";

$xmlfile .=  "</note>";

echo $xmlfile;

 $dom = new DOMDocument("1.0");
 $dom -> loadXML($xmlfile);
 $dom->save("xml.xml");//creates file in folder

?>

<?php
/*more examples of headers

header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="downloaded.pdf"');
readfile('original.pdf');

*/
?>