<?php
    session_start();
    $db=mysqli_connect("localhost","admin","1234","an52th9");
    mysqli_query($db,"SET NAMES UTF8");
    $user=$_GET["user"];
    mysqli_query($db,"DELETE FROM `adminuser` WHERE `user` LIKE '$user'");
    mysqli_query($db,"DELETE FROM `time` WHERE `user` LIKE '$user'");
    mysqli_query($db,"DELETE FROM `work` WHERE `user` LIKE '$user'");
    header("location:admin.php");
?>