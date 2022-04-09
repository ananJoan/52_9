<?php
session_start();
$db=mysqli_connect("localhost","admin","1234","an52th9");
mysqli_query($db,"SET NAMES UTF8");
$can="qwertyuiopasdfghjklzxcvbnm0987654321";
$code=$can[rand(0,strlen($can)-1)].$can[rand(0,strlen($can)-1)].$can[rand(0,strlen($can)-1)].$can[rand(0,strlen($can)-1)];
$image=imagecreate(100,30);
$back=imagecolorallocate($image,200,200,200);
$font=imagecolorallocate($image,255,0,0);
imagestring($image,100,35,5,$code,$font);
$_SESSION["code"]=$code;
imagepng($image);
?>