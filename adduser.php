<?php
    session_start();
    $db=mysqli_connect("localhost","admin","1234","an52th9");
    mysqli_query($db,"SET NAMES UTF8");
    $ac=$_POST["acc"];
    $pa=$_POST["pas"];
    $ty=$_POST["types"];
    mysqli_query($db,"INSERT INTO `adminuser` (`user`, `password`, `types`) VALUES ( '$ac', '$pa', '$ty')");
    header("location:admin.php");
?>