<?php
session_start();
$db=mysqli_connect("localhost","admin","1234","an52th9");
mysqli_query($db,"SET NAMES UTF8");
$user=$_SESSION["user"];
$id=$_POST["id"];
$work=$_POST["work"];
$content=$_POST["content"];
$nows=$_POST["nows"];
$types=$_POST["types"];
$start=$_POST["start"];
$end=$_POST["end"];
mysqli_query($db,"UPDATE `work` SET `work`='$work',`nows`='$nows',`types`='$types',`start`='$start',`end`='$end',`content`='$content' WHERE `id` LIKE '$id'");
header("location:user.php");
?>