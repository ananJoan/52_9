<?php
    session_start();
    $db=mysqli_connect("localhost","admin","1234","an52th9");
    mysqli_query($db,"SET NAMES UTF8");
    $user=$_SESSION["users"];
    $work=$_POST["work"];
    $nows=$_POST["nows"];
    $types=$_POST["types"];
    $start=$_POST["start"];
    $end=$_POST["end"];
    $content=$_POST["content"];
    mysqli_query($db,"INSERT INTO `work`(`work`, `nows`, `types`, `start`, `end`, `content`, `user`) VALUES ('$work','$nows','$types','$start','$end','$content','$user')");
    header("location:user.php");
?>