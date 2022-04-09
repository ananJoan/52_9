<?php
    session_start();
    $db=mysqli_connect("localhost","admin","1234","an52th9");
    mysqli_query($db,"SET NAMES UTF8");
    $user=$_GET["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登入/出時間</title>
    <style>
    table{
        border-collapse: collapse;
    }
    </style>
</head>
<body>
<table border="1">
<tr>
<th>帳號</th>
<th>動作</th>
<th>時間</th>
</tr>
<?php
$row=mysqli_query($db,"SELECT * FROM `time` WHERE `user` LIKE '$user'");
while($arr=mysqli_fetch_array($row)){
    echo "
    <tr>
    <td>$arr[1]</td>
    <td>$arr[3]</td>
    <td>$arr[2]</td>
    </tr> 
    ";
}  
?>
</table>
</body>
</html>
