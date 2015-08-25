<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/ajaxChatRoom/thinkphp_3.2.3_full/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/ajaxChatRoom/thinkphp_3.2.3_full/Public/css/signin.css" rel="stylesheet" type=text/css" >


</head>

<body>

<div class="container">

    <form class="form-signin" method="post" action="/ajaxChatRoom/thinkphp_3.2.3_full/index.php/Home/Register/register">
        <h2 class="form-signin-heading">Please register</h2>
        <label for="inputName" class="sr-only">Youraddress</label>
        <input type="name" id="inputName" class="form-control" placeholder="Name" required >
        <label for="inputAddress" class="sr-only">Youraddress</label>
        <input type="address" id="inputAddress" class="form-control" placeholder="Address" required >
        <label for="inputPasswordOne" class="sr-only">Password</label>
        <input type="password" id="inputPasswordOne" class="form-control" placeholder="Password" required onchange="checkPasswords()">
        <label for="inputPasswordTwo" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPasswordTwo" class="form-control" placeholder="Confirm Password" required onchange="checkPasswords()">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block"  id = "ok" type="submit">Register</button>
    </form>

</div> <!-- /container -->
<script>
    function checkPasswords() {
        var passl = document.getElementById("inputPasswordOne");
        var pass2 = document.getElementById("inputPasswordTwo");
        if (passl.value != pass2.value)
            passl.setCustomValidity("两次密码必须输入一致！");
        else
            passl.setCustomValidity('');
    }

    function check() {
        document.getElementById('ok').disabled = 'disabled';
    }
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>