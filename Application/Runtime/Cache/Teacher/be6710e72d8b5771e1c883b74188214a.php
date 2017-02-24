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
<script src="/Public/teacher/js/jquery-1.11.3.min.js"></script>
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
                    <li><a href="<?php echo U('Practice/index');?>" class="on">学生实习安排</a></li>
                    <li><a href="<?php echo U('Practice/corporation');?>">实习企业管理</a></li>
                    <li><a href="">合同管理</a></li>
                    <li><a href="">学生考评设置</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <a href="" class="home"></a>
            <a href="<?php echo U('Practice/index');?>">学生实习安排</a>
            >
            <a href="" class="on">安排岗位</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" method="post" id="arrangement">
                    <input type="hidden" name="stuno" value="<?php echo ($_GET['id']); ?>">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">所在地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="address"><a href="">请选择企业所在地址</a></p>
                                <div class="ex">
                                    <?php if(is_array($addr)): $i = 0; $__LIST__ = $addr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)"><?php echo ($v["city"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业名称</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="name"><a href="">请选择企业名称</a></p>
                                <div class="ex">
                                    <?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">实习岗位</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="position" style="width: 210px;" placeholder="请输入实习岗位">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">指导老师</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="guide"><a href="">请选择企业指导老师</a></p>
                                <div class="ex">
                                    <?php if(is_array($guide)): $i = 0; $__LIST__ = $guide;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)"><?php echo ($v["guide"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">联系电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telephone" style="width: 210px;" >
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">开始时间</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <!--<p><a href="">请选择实习开始时间</a></p>-->
                                <p><input type="text" name="starttime" class=" form-control timer" value="" ></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">结束时间</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <!--<p><a href="">请选择实习开始时间</a></p>-->
                                <p><input type="text" name="endtime" class="form-control timer" value="" ></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业性质</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="type"><a href="">请选择企业性质</a></p>
                                <div class="ex">
                                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href=""><?php echo ($v["type"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <p class="text-center">
                               <button type="button" class="bt-btn1 style1">保存</button>
                                <span class="wh40"></span>
                                <button type="reset" class="bt-btn1 style2">取消</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="/Public/teacher/js/foundation-datepicker.min.js"></script>
<script src="/Public/teacher/js/foundation-datepicker.zh-CN.js"></script>
<script src="/Public/teacher/js/timer.js"></script><!-- 日期插件所用 -->
<script>
    $(function(){
       $('button[type=button]').click(function(){
         var $address = $('#address').text();
         var $guide = $('#guide').text();
         var $name  =$('#name').text();
         var $type = $('#type').text();
         var $data = $('#arrangement').serialize();
         var $url = "<?php echo U('Practice'/arrangement);?>";
           $.ajax({
                url:$url,
                type:"post",
                dataType:'json',
                data:{
                    'address': $address,
                    'name':$name,
                    'guide': $guide,
                    'type' : $type,
                    'data' : $data,
                },
               success:function(msg){
                    if(msg.status==0){
                        layer.msg(msg.message,{icon:5});
                    }else if(msg.status==1){
                        layer.msg(msg.message,{icon:6},function(){
                            window.location.href="/teacher.php/Practice";
                        });
                    }
               }
           });
       });
    });
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