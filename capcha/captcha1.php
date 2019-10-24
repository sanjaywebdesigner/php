<?php 
session_start(); // start a session
$image = imagecreate(50, 20); //create blank image (width, height)
$bgcolor = imagecolorallocate($image, 0, 0, 0); //add background color with RGB.
$textcolor = imagecolorallocate($image, 255, 255, 255); //add text/code color with RGB.
$num1=rand(1,9); //Generate First number between 1 and 9  
$num2=rand(1,9); //Generate Second number between 1 and 9  
$code=$num1+$num2;
$code1=$num1."+".$num2;
$_SESSION['code'] = ($code); //add the random number to session 'code'
imagestring($image, 10, 8, 3, $code1, $textcolor); //create image with all the settings above.
//font size,x,y
header ("Content-type: image/png"); // define image type
imagepng($image); //display image as PNG
?>