<?php
    $im = imagecreatefromjpeg("laughing.jpg"); //create image source
    header('Content-Type: image/jpeg');
    //$im = imagecreate(200, 140); //image text
    $blue = imagecolorallocate($im, 0, 255, 255);
    $font = "Mutlu__Ornamental.ttf";
    $message = "Alexandra Elise";
    imagefttext($im, 42, 0, 1080, 700, $blue, $font, $message);//Would draw Hello World! in black Arial 12pt, horizontal (0 angle), starting at x=10 y=20
    imagejpeg($im, null, 80); //the null sends to HTTP output stream. Saves in file helloworld.png as PNG type
    imagedestroy($im); //empty image resource canvas when we are done
?>



/*
Once you have mastered outputting the original image, can you resize it to 50% of its original size, and output that instead?
DID NOT WORK
KEEP GETTING ERROR ON $IMAGECOPYRESAMPLED

<?php
  $original = imagecreatefromjpeg("laughing.jpg");
  $small = imagecreatetruecolor(400, 225); //make new small 400x225 24bpp the 0,0,0,0 is the starting x/y coordinate for thumbnail and original the last 4 values are the size of the thumbnail and original
  $imagecopyresampled($small, $original, 0, 0, 0, 0, 400, 225, 1500, 840); //we now have a scaled down copy of the original in the thumbnail image resource
  $blue = imagecolorallocate($small, 0, 255, 255);
  $font = "Mutlu__Ornamental.ttf";
  $message = "Alexandra Elise";
  imagefttext($small, 42, 0, 300, 170, $blue, $font, $message);//Would draw Hello World! in black Arial 12pt, horizontal (0 angle), starting at x=10 y=20
  imagejpeg($small, null, 80); //the null sends to HTTP output stream. Saves in file helloworld.png as PNG type
  imagedestroy($original); //empty image resource canvas when we are done
  imagedestroy($small);
?>
*/