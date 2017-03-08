<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="ch-ZN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>教师端</title>
    <link rel="stylesheet" type="text/css" href="/Public/teacher/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/teacher/css/bootstrap-customize.css">
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
    <script type="text/javascript" src="/Public/js/dialog.js"></script>
</head>
<body class="full-height">
<!-------------------------------------- 头部开始 -------------------------------------->
<header>
    <div class="container">

    </div>
</header>
<!--<nav class="navi">-->
    <!--<div class="hd">-->
        <!--<div class="logo">-->
            <!--<p><a href=""><img src="/Public/teacher/img/logo.png" alt=""></a></p>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="ct">-->
        <!--<div class="ht15"></div>-->
        <!--<div class="list">-->
            <!--<ul>-->
                <!--<li>-->
                    <!--<div class="i on">-->
                        <!--<a href="<?php echo U('Report/index');?>">-->
                            <!--<p><i class="ico1"></i>-->
                                <!--实习报告-->
                            <!--</p>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="i">-->
                        <!--<a href="<?php echo U('Apply/index');?>">-->
                            <!--<p><i class="ico2"></i>-->
                                <!--我的申请-->
                            <!--</p>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="i">-->
                        <!--<a href="<?php echo U('Practice/index');?>">-->
                            <!--<p><i class="ico6"></i>-->
                                <!--实习管理-->
                            <!--</p>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="i">-->
                        <!--<a href="<?php echo U('Notice/index');?>">-->
                            <!--<p><i class="ico7"></i>-->
                                <!--通知公告-->
                            <!--</p>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="i">-->
                        <!--<a href="<?php echo U('Count/index');?>">-->
                            <!--<p><i class="ico8"></i>-->
                                <!--统计分析-->
                            <!--</p>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="i ">-->
                        <!--<a href="<?php echo U('Student/index');?>">-->
                            <!--<p><i class="ico9"></i>-->
                                <!--学生管理-->
                            <!--</p>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</li>-->
                <!--<li>-->
                    <!--<div class="i">-->
                        <!--<a href="<?php echo U('Contact/index');?>">-->
                            <!--<p><i class="ico3"></i>-->
                                <!--通讯录-->
                            <!--</p>-->
                        <!--</a>-->
                    <!--</div>-->
                <!--</li>-->
            <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
<!--</nav>-->
    <nav class="navi">
    <div class="hd">
        <div class="logo">
            <p><a href=""><img src="/Public/teacher/img/logo.png" alt=""></a></p>
        </div>
    </div>
    <div class="ct">
        <div class="ht15"></div>
        <div class="list">
            <ul>
                <li>
                    <div class="i ">
                        <a href="<?php echo U('Report/index');?>">
                            <p><i class="ico1"></i>
                                实习报告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="<?php echo U('Apply/index');?>">
                            <p><i class="ico2"></i>
                                申请审核
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i on">
                        <a href="<?php echo U('Practice/index');?>">
                            <p><i class="ico6"></i>
                                实习管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i ">
                        <a href="<?php echo U('Notice/index');?>">
                            <p><i class="ico7"></i>
                                通知公告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="">
                            <p><i class="ico8"></i>
                                统计分析
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i ">
                        <a href="<?php echo U('Student/index');?>">
                            <p><i class="ico9"></i>
                                学生管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="<?php echo U('Contact/index');?>">
                            <p><i class="ico3"></i>
                                通讯录
                            </p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-------------------------------------- 头部结束 -------------------------------------->
<!-------------------------------------- 内容开始 -------------------------------------->
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
                <div class="pull-right">
    <div class="user">
        <p><img src="/Public/teacher/img/avatar1.jpg" alt="">
            <a href=""><?php echo ($_SESSION['adminUser']['username']); ?></a>
            <i></i>
        </p>
        <div class="ex">
            <p><a href="">个人信息</a></p>
            <p><a href="javascript:void(0)">修改密码</a></p>
            <p><a href="<?php echo U('Login/loginOut');?>">退出</a></p>
        </div>
    </div>
</div>
            </div>
            <div class="tabs">
                <ul>
                    <li><a href="<?php echo U('Practice/index');?>">学生实习安排</a></li>
                    <li><a href="<?php echo U('Practice/corporation');?>" class="on">实习企业管理</a></li>
                    <li><a href="">合同管理</a></li>
                    <li><a href="">学生考评设置</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <span class="pull-right"><a href="<?php echo U('Practice/corporation');?>">返回</a></span>
            <a href="" class="home"></a>
            <a href="<?php echo U('Practice/corporation');?>">实习企业管理</a>
            >
            <a href="" class="on">查看企业</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <p class="control-label">企业名称：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <p><?php echo ($info["name"]); ?></p>
                        </div>
                        <div class="col-sm-2">
                            <p class="control-label">企业地址：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4  select">
                                <p><?php echo ($info["city"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <p class="control-label" >企业性质：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4  select">
                                <p><?php echo ($info["type"]); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <p class="control-label">企业联系人：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4  select">
                                <p><?php echo ($info["contact"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <p class="control-label">部门：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <p><?php echo ($info["department"]); ?></p>
                        </div>
                        <div class="col-sm-2">
                            <p class="control-label">职务：</p>
                        </div>
                        <div class="col-sm-4 viewcor ">
                            <div class="col-sm-4 select">
                                <p><?php echo ($info["postion"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <p class="control-label">联系电话：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4">
                                <p><?php echo ($info["telephone"]); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <p class="control-label">移动电话：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4 select">
                                <p><?php echo ($info["phone"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <p class="control-label">企业邮箱：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4">
                                <p><?php echo ($info["email"]); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <p class="control-label">企业邮编：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4 select">
                                <p><?php echo ($info["zipcode"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <p class="control-label">企业传真：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4 ">
                                <p><?php echo ($info["fax"]); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">详细地址：</label>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4 select">
                                <p><?php echo ($info["address"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <p class="control-label">企业网址：</p>
                        </div>
                        <div class="col-sm-4 viewcor">
                            <div class="col-sm-4">
                                <p><?php echo ($info["website"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <div class="col-sm-11 col-sm-offset-1">
                            <p class="control-label" style="text-align: left;margin-left:-35px">企业介绍：</p>
                        </div>
                        <div class="col-sm-10">
                            <div class="viewcor" style="width: 93%;">
                                <?php echo ($info["introduction"]); ?>
                            </div>
                        </div>
                    </div>
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
</html>
<script>
    $(function(){
       $('.i').click(function(){
           $('.i').removeClass('on');
           $(this).addClass('on');
       });
    });
</script>