<?php

$img = imagecreate(80,40);

imagecolorallocate($img,243,251,254);

$code = 'ABCD' ;
$char_color = imagecolorallocate($img,random_int(1,255),random_int(1,255),random_int(1,255));
imagechar($img,7,20,10,$code,$char_color);

header('Content-type:image/jpeg');

imagejpeg($img);