<!DOCTYPE html>
<html>
<head>
    <title>Read Files</title>
</head>
<body>

 <?php
 $file = "filetest.txt";
 if($handle = fopen($file, "r")){ //read
    $content = fread($handle, 3); //each character is 1 byte
    fclose($handle);
 }
    echo $content;
    echo "<br />";
 ?>

<p>nl2br means creating new lines</p>
 <?php
  $file = "filetest.txt";
  if($handle = fopen($file, "r")){ //read
     $content = fread($handle, 6); //comes back from browser as 1 line
     fclose($handle);
  }
     echo $content;
     echo "<br />";
     echo nl2br($content);//nl2br says we're taking ea new line & turning it into a br tag
     echo "<hr />";
  ?>

<p>use filesize() to read the whole file</p>
  <?php
    $file = "filetest.txt";
    if($handle = fopen($file, "r")){ //read
       $content = fread($handle, filesize($file)); //filesize() reads the whole file
       fclose($handle);
    }
       echo nl2br($content);
       echo "<hr />";
  ?>

<p>file_get_contents(): shortcut for fopen/fread/fclose</p>
<p>companion to shortcut file_put_contents()</p>
  <?php
      //file_get_contents(): shortcut for fopen/fread/fclose
      //companion to shortcut file_put_contents()
       $content = file_get_contents($file);

       echo $content;
       echo "<hr />";
  ?>

  <p>incremental reading</p>
    <?php
        //incremental reading
         $file = 'filetest.txt';
         $content = " "; //we need content to build so make into empty string first
         if($handle = fopen($file, 'r')){ //read
            while(!feof($handle)){ //!=not, f=file, eof= end of file
                $content .= fgets($handle); //gets 1 line of the file
            }
            fclose($handle);
         }
         echo $content;
         echo "<hr />";
    ?>


</body>
</html>