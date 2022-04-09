<?php
    session_start();
    $db=mysqli_connect("localhost","admin","1234","an52th9");
    mysqli_query($db,"SET NAMES UTF8");
    $id=$_GET["id"];
    mysqli_query($db,"DELETE FROM `work` WHERE `id` LIKE '$id'");
    header("location:user.php");
?>