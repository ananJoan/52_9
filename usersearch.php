<?php
    session_start();
    $db=mysqli_connect("localhost","admin","1234","an52th9");
    mysqli_query($db,"SET NAMES UTF8");
    $id=$_POST["id"];
    $row=mysqli_query($db,"SELECT * FROM `adminuser` WHERE `id` LIKE '$id'");
    $arr=mysqli_fetch_array($row);
    $rr=array();
    array_push($rr,$arr[2]);
    array_push($rr,$arr[3]);
    echo json_encode($rr)."##";
?>