<?php
session_start();
$db=mysqli_connect("localhost","admin","1234","an52th9");
mysqli_query($db,"SET NAMES UTF8");
$user=$_SESSION["user"];
$id=$_POST["id"];
$start=$_POST["start"];
$offleft=$_POST["offleft"];
$row=mysqli_query($db,"SELECT * FROM `work` WHERE `id` LIKE '$id'");
$arr=mysqli_fetch_array($row);
$end=$start+($arr[5]-$arr[4]);
mysqli_query($db,"UPDATE `work` SET `start`='$start',`end`='$end',`offleft`='$offleft' WHERE `id` LIKE '$id'");
?>