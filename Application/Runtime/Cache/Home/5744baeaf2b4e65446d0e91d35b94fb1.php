<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>修改密码</title>
    <link rel="stylesheet" type="text/css" href="/Public/teacher/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/teacher/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Public/teacher/css/pages.css">
    <script type="text/javascript" src="/Public/teacher/js/html5.js"></script>
    <script type="text/javascript" src="/Public/teacher/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/teacher/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/teacher/js/respond.src.js"></script>
    <script type="text/javascript" src="/Public/teacher/js/base.js"></script>
    <script type="text/javascript" src="/Public/teacher/js/main.js"></script>
    <!--plugin-->
    <script type="text/javascript" src="/Public/teacher/js/jquery.event.move.js"></script>
    <script type="text/javascript" src="/Public/js/dialog/layer.js"></script>
</head>
<body class="full-height page-login">
<!-------------------------------------- 头部开始 -------------------------------------->
<header>
    <div class="container">
    </div>
</header>
<!-------------------------------------- 头部结束 -------------------------------------->
<!-------------------------------------- 内容开始 -------------------------------------->
<main>
    <div class="ui-login">
        <div class="hd">
            <p><img src="/Public/teacher/img/login-logo.png" alt=""></p>
        </div>
        <div class="ct">
            <div class="form" >
                <form class="form-horizontal" method="post" action="" id="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="user" id="user" placeholder="学号或工号">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="oldpassword" id="oldpassword" placeholder="旧密码">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="新密码">
                    </div>
                    <div class="form-group">
                        <p>
                            <a href="/index.php?m=home&c=login" target="_self" class="forget" id="forget">返回登录</a>
                        </p>
                    </div>
                    <div class="form-group">
                        <button type="button" class="bt" id="change_password">修改密码</button>
                        <!--<a href="" class="bt">登录</a>-->
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-------------------------------------- 内容结束 -------------------------------------->
<!-------------------------------------- 尾部开始 -------------------------------------->
<footer>
    <div class="container">

    </div>
</footer>
<!-------------------------------------- 尾部开始 -------------------------------------->
</body>
<script>

    $('#change_password').click(function(){

        var user = $('#user').val();
        if (!$.trim(user)) {
            layer.msg('学号或工号不能为空！');
            return false;
        };
        var old_password = $('#oldpassword').val();
        if (!$.trim(old_password)) {
            layer.msg('旧密码不能为空！');
            return false;
        };
        var new_password = $('#newpassword').val();
        if (!$.trim(new_password)) {
            layer.msg('新密码不能为空！');
            return false;
        };

        var contactUrl = '/index.php/Home/Passwordchange/change_password?user='+user+'&old_password='+old_password+'&new_password='+new_password;
        $.get(contactUrl,function(rjson){
            if (rjson.code == 200) {
                console.log(rjson);
                layer.msg(rjson.info);
            }else{
                console.log(rjson);
                layer.msg(rjson.info);
            }
        })


    })
        



</script>
</html>