
<?php
session_start();
$db=mysqli_connect("localhost","admin","1234","an52th9");
mysqli_query($db,"SET NAMES UTF8");
$id=$_POST["id"];
$pas=$_POST["pas"];
$type=$_POST["types"];
mysqli_query($db,"UPDATE `adminuser` SET `password`='$pas',`types`='$type' WHERE `id` LIKE '$id'");
header("location:admin.php");
?>