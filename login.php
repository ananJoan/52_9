<?php
    session_start();
    $db=mysqli_connect("localhost","admin","1234","an52th9");
    mysqli_query($db,"SET NAMES UTF8");
    if(!empty($_POST)){
        date_default_timezone_set('Asia/Taipei');
        $time = date('Y/m/d H:i:s');
        $ac=$_POST["acc"];
        $pa=$_POST["pas"];
        $cd=$_POST["codes"];
        $an=$_SESSION["code"];
        $row=mysqli_query($db,"SELECT * FROM `adminuser` WHERE `user` LIKE '$ac'");
        $arr=mysqli_fetch_array($row);
        if(empty($arr[0])){
            $_SESSION["die"]=$_SESSION["die"]+1;
            echo "帳號輸入錯誤";
        }else if($arr[2]!=$pa){
            $_SESSION["die"]=$_SESSION["die"]+1;
            echo "密碼輸入錯誤";
        }else if($cd!=$an){
            $_SESSION["die"]=$_SESSION["die"]+1;
            echo "驗證碼輸入錯誤";
        }else{
            mysqli_query($db,"INSERT INTO `time`( `user`, `time`, `types`) VALUES ('$ac','$time','登入')");
            $_SESSION["users"]=$ac;
            if($arr[3]=="管理者"){
                header("location:admin.php");
            }else{
                header("location:user.php");
            }
        }
        if($_SESSION["die"]==3) header("location:die.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.6.0.min.js"></script>
    <title>登入</title>
</head>
<body>
    <form action="login.php" method="post">
        帳號<input type="text" name="acc" ><br>
        密碼<input type="password" name="pas" ><br>
        <img src="code.php" id="code">
        <input type="button" value="更新" id="new"><br>
        驗證碼<input type="text" name="codes" ><br>
        <input type="submit" value="登入">
    </form>
</body>
</html>
<script>
    $("#new").click(function(){
        $("#code").attr("src","code.php");
    });
</script>