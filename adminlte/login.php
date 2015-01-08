<?php
require("../config.php");
$msg = "";

// 注销
if(isset($_GET["c"]) && $_GET["c"]=="out"){
    unset($_SESSION["uid"]);
    $msg = "请重新登录！";
}else{
    // 是否已经登录
    if(isset($_SESSION['uid']) && $_SESSION['uid']>0){
        header("Location: index.php");
        exit;
    }
    // 登录动作
    $account = isset($_POST["account"])?$_POST["account"]:"";
    $password = isset($_POST["password"])?$_POST["password"]:"";
    if($account=="admin"){
        $_SESSION['uid'] = 1;
        header("Location: index.php");
        exit;
    }else{
        $msg = "请重试！";
    }
}
?>
<!DOCTYPE html>
<html class="bg-black">
<head>
    <meta charset="UTF-8">
    <title>系统管理 | 登录</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-black">

<div class="form-box" id="login-box">
    <div class="header">登录</div>
    <form action="login.php" method="post">
        <div class="body bg-gray">
            <div class="form-group">
                <input type="text" name="account" class="form-control" placeholder="帐号"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码"/>
            </div>
            <!--div class="form-group">
                <input type="checkbox" name="remember_me"/> Remember me
            </div-->
        </div>
        <div class="footer">
            <button type="submit" class="btn bg-olive btn-block">登录</button>
            <p style="color:red;"><?php echo $msg;?></p>
            <!--p><a href="#">I forgot my password</a></p-->

            <!--a href="register.html" class="text-center">Register a new membership</a-->
        </div>
    </form>

    <div class="margin text-center">
        <span>Sign in using social networks is not work yet.</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src="/assets/jquery/2.1.3/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>