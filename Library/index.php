<?php
include ('waf.php');

session_start();
if(isset($_SESSION['userid']))
{
    unset($_SESSION['userid']);
}
if(isset($_SESSION['captcha']))
{
    unset($_SESSION['captcha']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书馆 || 请登陆</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body{
            width: 100%;
            overflow: hidden;
            background: url("1.jpg") no-repeat;
            background-size:cover;
            color: black;
        }
    </style>

</head>
<body>
<h1 style="text-align: center"><strong>图书馆登陆</strong></h1>

<div style="padding: 130px 550px 10px;text-align: center">
    <form  action="login_check.php" method="POST" class="bs-example bs-example-form" role="form">
        <div id="login">
            <div class="input-group">
                <span class="input-group-addon">账户</span>
                <input  name="account" type="text" placeholder="请输入账号" class="form-control">
            </div>
            <br><br>

            <div class="input-group">
                <span class="input-group-addon">密码</span>
                <input  name="pass" type="password" placeholder="请输入密码" class="form-control">
            </div>
            <br>

            <img src="captcha_create.php"  width="180" height="50">
            <br><br>

            <div class="input-group">
                <span class="input-group-addon">验证码</span>
                <input  name="captcha" type="text" placeholder="请输入验证码" class="form-control">
            </div>
            <br><br><br>

            <input type="submit" value="登陆" class="btn btn-default">
            <input type="reset" value="重置" class="btn btn-default">
        </div>
    </form>
</div>
</body>
</html>