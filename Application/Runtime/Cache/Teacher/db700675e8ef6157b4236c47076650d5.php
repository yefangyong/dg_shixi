<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>教师端</title>
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/bootstrap-customize.css">
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/style.css">
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/pages.css">
    <script type="text/javascript" src="/shixi/Public/teacher/js/html5.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/jquery.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/bootstrap.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/respond.src.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/base.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/main.js"></script>
    <!--plugin-->
    <script type="text/javascript" src="/shixi/Public/teacher/js/jquery.event.move.js"></script>
    <script type="text/javascript" src="/shixi/Public/js/dialog/layer.js"></script>
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
            <p><img src="/shixi/Public/teacher/img/login-logo.png" alt=""></p>
        </div>
        <div class="ct">
            <div class="form" >
                <form class="form-horizontal" method="post" action="" id="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="邮箱地址">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="密码">
                    </div>
                    <div class="form-group">
                        <p>
                            <a href="javascript:void(0)" class="forget" id="forget">忘记密码？</a>
                        </p>
                    </div>
                    <div class="form-group">
                        <button type="button" class="bt">登录</button>
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
    $(function(){
        $('.bt').click(function(){
            var $data = $('#login-form').serialize();
            var $url = "<?php echo U('login/index');?>";
            $.ajax({
                'url':$url,
                'type':'post',
                'data':$data,
                'dataType':'json',
                success:function(msg){
                   switch(msg.status){
                       case -1:
                       case 0:
                           layer.msg(msg.message,{icon: 5});
                           break;
                       case 1:
                           layer.msg(msg.message,{icon:6},function(){
                               window.location.href="/teacher.php/Report/index";
                           });
                   }
                }
            });
        });

        $('#forget').click(function(){
            layer.msg('预留phpmailer发送找回密码邮件功能');
        });
    });
</script>
</html>