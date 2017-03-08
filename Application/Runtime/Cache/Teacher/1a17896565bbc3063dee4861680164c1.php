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
                <div class="user">
                    <p><img src="/Public/teacher/img/avatar1.jpg" alt="">
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
                    <li><a href="<?php echo U('Practice/corporation');?>" class="on">实习企业管理</a></li>
                    <li><a href="">合同管理</a></li>
                    <li><a href="">学生考评设置</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <a href="" class="home"></a>
            <a href="<?php echo U('Practice/corporation');?>">实习企业管理</a>
            >
            <a href="" class="on">编辑企业</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" method="post" id="corporationForm">
                    <input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>企业名称</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control"  name="name" style="width: 210px;" value="<?php echo ($info["name"]); ?>" id="name" onblur="isEmpty(this.id)">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>企业地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <!--<p id="city"><a href="">请选择企业所在地址</a></p>-->
                                <!--<div class="ex">-->
                                    <!--<p><a href="javascript:void(0)">苏州</a></p>-->
                                    <!--<p><a href="javascript:void(0)">南京</a></p>-->
                                    <!--<p><a href="javascript:void(0)">上海</a></p>-->
                                <!--</div>-->
                            </div>
                            <input type="hidden" name="city" value="<?php echo ($info["city"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">

                            <label for="" class="control-label" ><i></i> 企业性质</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="type"><a href="">请选择企业性质</a></p>
                                <div class="ex">
                                    <p><a href="javascript:void(0)">国资</a></p>
                                    <p><a href="javascript:void(0)">外资</a></p>
                                    <p><a href="javascript:void(0)">股份制</a></p>
                                </div>
                                <input type="hidden" name="type" value="<?php echo ($info["type"]); ?>">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>企业联系人</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="contact" style="width: 210px;" value="<?php echo ($info["contact"]); ?>" id="contact" onblur="isEmpty(this.id)">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">部门</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" deptment="" style="width: 210px;" value="<?php echo ($info["department"]); ?>">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">职务</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="position" style="width: 210px;" value="<?php echo ($info["postion"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>联系电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telephone" style="width: 210px;" value="<?php echo ($info["telephone"]); ?>" id="telephone" onblur="isEmpty(this.id)">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">移动电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="mobile" maxlength='11' style="width: 210px;" value="<?php echo ($info["phone"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业邮箱</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="email" style="width: 210px;" value="<?php echo ($info["email"]); ?>">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业邮编</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="zipcode" style="width: 210px; color: #78a9e6;"  value="225653">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业传真</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="fax" style="width: 210px;" value="<?php echo ($info["fax"]); ?>">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>详细地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <input type="text" class="form-control" name="address" style="width: 210px; color: #78a9e6;" value="<?php echo ($info["address"]); ?>" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业网址</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="website" style="width: 210px;" value="<?php echo ($info["website"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业介绍</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="textarea" style="width: 93%;"><label for="">0/2000</label>
                                <textarea class="form-control"  name="introduction"><?php echo ($info["introduction"]); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <p class="text-center">
                            <button type="button" class="bt-btn1 style1">保存</button>
                            <span class="wh40"></span>
                            <button type="reset" class="bt-btn1 style2">取消</button>
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
<script>
    $(function(){
        $('button[type=button]').click(function(){
//            $('input[name=city]').val($('#city').text());
//            $('input[name=type]').val($('#type').text());
            var $data = $('#corporationForm').serialize();
            var $url = "<?php echo U('Practice/editCor');?>";
            $.ajax({
                'type':"post",
                'url':$url,
                'data':$data,
                'dataType':"json",
                success:function(msg){
                    if(msg.status == 0){
                        layer.msg(msg.message,{icon:5});
                    }else{
                        layer.msg(msg.message,{icon:6,time:2000}, function (msg){
                            window.location.href = '/teacher.php/Practice/corporation';
                        });
                    }
                }
            });
        });
    });

    function isEmpty(x)
    {
        var y = document.getElementById(x).value;
        if(y==''){
            layer.msg('此项为必填项',{icon:5});
        }
    }

</script>

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