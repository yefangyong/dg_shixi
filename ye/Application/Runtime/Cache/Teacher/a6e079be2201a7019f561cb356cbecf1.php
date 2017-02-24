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
                                我的申请
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
                    <div class="i">
                        <a href="">
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
                        <a href="">
                            <p><i class="ico9"></i>
                                学生管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="">
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
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
                <div class="user">
                    <p><img src="img/avatar1.jpg" alt="">
                        <a href="">董嘉耀</a>
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
                    <li><a href="<?php echo U('Practice/index');?>">学生实习安排</a></li>
                    <li><a href="<?php echo U('Corporation/index');?>" class="on">实习企业管理</a></li>
                    <li><a href="">合同管理</a></li>
                    <li><a href="">学生考评设置</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <a href="" class="home"></a>
            <a href="">实习报告</a>
            >
            <a href="" class="on">新增企业</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" id="yfycms-form">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>企业名称</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name" style="width: 210px;" placeholder="请输入企业名称">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>企业地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;" name="city">
                                <p><a href="">请选择企业所在地址</a></p>
                                <div class="ex">
                                    <p value="1"><a href="">苏州</a></p>
                                    <p value="2"><a href="">南京</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业性质</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;" name="type">
                                <p><a href="">请选择企业性质</a></p>
                                <div class="ex">
                                    <p><a href="">外资</a></p>
                                    <p><a href="">股份制</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>企业联系人</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入企业联系人">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">部门</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入工作部门">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">职务</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入工作职务">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>联系电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入联系电话">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">移动电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入手机号码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业邮箱</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入企业邮箱">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业邮编</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px; color: #78a9e6;" placeholder="请输入企业邮编" value="225653">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业传真</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入传真号码">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>详细地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p><a href="" class="addr">江苏省南京市鼓楼区广州路</span></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业网址</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入企业网址">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业介绍</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="textarea" style="width: 93%;"><label for="">0/2000</label>
                                <textarea class="form-control" placeholder="请输入企业详细介绍"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <p class="text-center">
                            <button type="button"></button>
                            <a href="" class="bt-btn1 style1">保存</a>
                            <span class="wh40"></span>
                            <a href="" class="bt-btn1 style2">取消</a>
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