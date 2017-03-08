<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    -->
    <title>学生端</title>
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/bootstrap-customize.css">
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/pages.css">
    <link rel="stylesheet" href="/Public/Student/css/party/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/party/uploadify.css">
    <script type="text/javascript" src="/Public/Student/js/html5.js"></script>
    <script type="text/javascript" src="/Public/Student/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/Student/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Student/js/respond.src.js"></script>
    <script type="text/javascript" src="/Public/Student/js/base.js"></script>
    <script type="text/javascript" src="/Public/Student/js/main.js"></script>
    <!--plugin-->
    <script type="text/javascript" src="/Public/Student/js/jquery.event.move.js"></script>
    <!-- jQuery -->
    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script src="/Public/js/common.js"></script>
    <script src="/Public/js/image.js"></script>
    <script src="/Public/js/login.js"></script>
    <script type="text/javascript" src="/Public/Student/js/party/jquery.uploadify.js"></script>
</head>
<nav class="navi">
    <div class="hd">
        <div class="logo">
            <p><a href=""><img src="/Public/Student/img/logo.png" alt=""></a></p>
        </div>
    </div>/
    <div class="ct">
        <div class="ht15"></div>
        <div class="list">
            <ul>
                <li>
                    <div class="i on">
                        <a href="/index.php/student/Report/index">
                            <p><i class="ico1"></i>
                                实习报告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div  class="i">
                        <a href="/index.php/student/Apply/index">
                            <p><i class="ico2"></i>
                                我的申请
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Contact/student">
                            <p><i class="ico3"></i>
                                通讯录
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Notice/index">
                            <p><i class="ico4"></i>
                                消息管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Grade/index">
                            <p><i class="ico5"></i>
                                我的成绩
                            </p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(function(){
        $('.i').click(function(){
            $('.i on').removeClass('on');
            $(this).addClass('on');
        });
    });
</script>

<!-------------------------------------- 头部结束 -------------------------------------->
<!-------------------------------------- 内容开始 -------------------------------------->
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
                <div class="user">
                    <p><img src="img/avatar1.jpg" alt="">
                        <a href=""><?php echo getLoginUsername() ?></a>
                        <i></i>
                    </p>
                    <div class="ex">
                        <p><a href="">个人信息</a></p>
                        <p><a href="">修改密码</a></p>
                        <p><a href="">退出</a></p>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <ul>
                    <li><a href="/index.php?m=student&c=apply">实习申请</a></li>
                    <li><a href="/index.php?m=student&c=apply&a=change">实习变更</a></li>
                    <li><a href="/index.php?m=student&c=apply&a=leave" class="on">请假申请</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ht15"></div>
    <div class="ui-main">

        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" id="yfycms-form">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">请假原因</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="textarea" style="width: 93%;"><label for="">0/2000</label>
                                <textarea class="form-control" name="content" placeholder="请输入详细的请假原因"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">紧急联系人</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="emegencyconcat" id="" style="width: 210px;" placeholder="紧急联系人" value="">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">手机号码</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telephone" id="" style="width: 210px;" placeholder="请输入手机号码" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">开始日期</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control dtp" name="starttime" id="" style="width: 210px;" placeholder="例XXXX-XX-XX" value="">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">结束日期</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control dtp" name="endtime" id="" style="width: 210px;" placeholder="例XXXX-XX-XX">
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <p class="text-center">
                            <a href="javascript:void();" id="yfycms-button-submit" class="bt-btn1 style1">提交</a>
                            <span class="wh40"></span>
                            <a href="/index.php?m=student&c=apply&a=leave" class="bt-btn1 style2">取消</a>
                        </p>
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
<link rel="stylesheet" type="text/css" href="/Public/Student/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="/Public/Student/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/Public/Student/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script>
    $(function(){
        $('.dtp').datetimepicker({
            language: 'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
    });
</script>
</body>
</html>
<style>

</style>
<script>
    var SCOPE = {
        'save_url' : '/index.php?m=student&c=apply&a=addLeave',
        'jump_url' : '/index.php?m=student&c=apply&a=leave',
    };
    $("#yfycms-button-submit").click(function(){
        var data=$("#yfycms-form").serializeArray();
        postData={};
        $(data).each(function(i){
            postData[this.name]=this.value;
        });
        console.log(postData);
        url=SCOPE.save_url;
        jump_url=SCOPE.jump_url;
        $.post(url,postData,function($result){
            if($result.status == 1){
                return dialog.success($result.message,jump_url);
            }else if($result.status == 0){
                return dialog.error($result.message);
            }
        },"JSON");
    });
</script>