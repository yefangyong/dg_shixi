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
    
<!-------------------------------------- 头部结束 -------------------------------------->
<!-------------------------------------- 内容开始 -------------------------------------->
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
                    <div class="i">
                        <a href="<?php echo U('Practice/index');?>">
                            <p><i class="ico6"></i>
                                实习管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
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
                    <div class="i on">
                        <a href="<?php echo U('Student/index');?>">
                            <p><i class="ico9"></i>
                                用户管理
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
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
    <div class="user">
        <p><img src="/Public/teacher/img/avatar1.jpg" alt="">
            <a href=""><?php echo ($_SESSION['adminUser']['name']); ?></a>
            <i></i>
        </p>
        <div class="ex">
            <p><a href="">个人信息</a></p>
            <p><a href="javascript:void(0)">修改密码</a></p>
            <p><a href="/index.php/Home/Login/logOut">退出</a></p>
        </div>
    </div>
</div>
            <div class="tabs">
                <ul>
                    <li><a href="<?php echo U('Student/index');?>" class="on">学生管理</a></li>
                    <li><a href="<?php echo U('Student/teacher');?>" >教师管理</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <span class="pull-right"><a href="<?php echo U('Student/index');?>">返回</a></span>
            <a href="" class="home"></a>
            <a href="<?php echo U('Student/index');?>">学生管理</a>
            >
            <a href="javascript:void(0)" class="on">编辑学生信息</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" method="post" id="studentForm">
                    <input type="hidden" name="id" id="id" value="<?php echo ($info["id"]); ?>">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>姓名</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="name" style="width: 210px;" value="<?php echo ($info["name"]); ?>">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>学号</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="studentno" style="width: 210px;" value="<?php echo ($info["studentno"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>手机</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" maxlength="11" id="phone" name="phone" style="width: 210px;" value="<?php echo ($info["stuphone"]); ?>">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>密码</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" name="password" style="width: 210px;" value="<?php echo ($info["password"]); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>院系</label>
                        </div>
                        <div class="col-sm-4">
                            <!--<input type="text" class="form-control" name="dept" value="<?php echo ($info["deptname"]); ?>">-->
                            <div class="select" style="width: 210px;">
                                <p id="dept"><a href="" style="color:#78a9e6"><?php echo ($info["deptname"]); ?></a></p>
                                <div class="ex">
                                    <?php if(is_array($dept)): $i = 0; $__LIST__ = $dept;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <input type="hidden" name="dept">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>年级</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="grade" value="<?php echo ($info["grade"]); ?>">
                            <!--<div class="select" style="width: 210px;">-->
                                <!--<p id="grade"><a href="">请选择所在年级</a></p>-->
                                <!--<div class="ex">-->
                                    <!--<p><a href="">2015级</a></p>-->
                                    <!--<p><a href="">2016级</a></p>-->
                                <!--</div>-->
                                <!--<input type="hidden" name="grade">-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>班级</label>
                        </div>
                        <div class="col-sm-4">
                            <!--<input type="text"name="class" value="<?php echo ($info["classname"]); ?>">-->
                            <div class="select" style="width: 210px;">
                                <p id="class"><a href="" style="color:#78a9e6"><?php echo ($info["classname"]); ?></a></p>
                                <div class="ex">
                                    <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)" class="class"><?php echo ($v["classname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <input type="hidden" name="class" value="<?php echo ($info["classno"]); ?>">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>班主任</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="master" value="<?php echo ($info["master"]); ?>" style="width: 210px; color: #000000; background-color: #fff;" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">实习课程</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="course" style="width: 210px;" value="<?php echo ($info["course"]); ?>">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">性别</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="text">
                                <p>
                                    <a href="javascript:void(0)" class="rbox <?php if($info["sex"] == 1): ?>on<?php endif; ?>" attr-gender="1"><i></i>男</a>
                                    <span class="wh50"></span>
                                    <a href="javascript:void(0)"  class="rbox <?php if($info["sex"] == 0): ?>on<?php endif; ?>" attr-gender="0"><i></i>女</a>
                                    <input type="hidden" name="sex" value="<?php echo ($info["sex"]); ?>">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">电子邮件</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="email" style="width: 210px;" value="<?php echo ($info["email"]); ?>">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">紧急联系人</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="emegencyconcat" style="width: 210px; color: #000000; background-color: #fff;" id="emegencyconcat" value="<?php echo ($info["emegencyconcat"]); ?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">紧急联系人电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="emegencyphone" name="emegencyphone" style="width: 210px;" value="<?php echo ($info["emegencyphone"]); ?>" placeholder="">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">地址</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="address" name="address" style="width: 210px;" value="<?php echo ($info["address"]); ?>" placeholder="">
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            &nbsp;
                        </div>
                        <div class="col-sm-10">
                            <button type='button' class="bt-btn1 style1">保存</button>
                            <span class="wh40"></span>
                            <button type="reset" class="bt-btn1 style2">取消</button>
                        </div>
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
        $('.class').click(function(){
            var $class = $('#class').text();
            var $url = "<?php echo U('Student/getMaster');?>";
            $.post($url,{'class':$class},function(msg){
                $('input[name=master]').val(msg);
            },'JSON');
        });

        $('.rbox').click(function(){
            var $gender = $(this).attr('attr-gender');
            $('input[name=sex]').val($gender);
        });

        $('button[type=button]').click(function(){
//            var $dept = $('#dept').text();
            var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
            if(!myreg.test($("#phone").val())) 
            { 
                layer.msg('请输入有效的手机号码！',{icon:5});
                return false; 
            } 
            var $class = $('#class').text();
//            var $grade = $('#grade').text();
            var $url = "<?php echo U('Student/update');?>";
//            $('input[name=dept]').val($dept);
            $('input[name=class]').val($class);
//            $('input[name=grade]').val($grade);
            $data = $('#studentForm').serialize();
            $.ajax({
                'url':$url,
                'type':'post',
                'data':$data,
                'dataType':'json',
                success:function(msg){
                    if(msg.status==0){
                        layer.msg(msg.message,{icon:5});
                        window.location.href="/teacher.php/Student/update/id/"+$('#id').val();
                    }else{
                        layer.msg(msg.message,{icon:6},function(msg){
//                            window.location.href="/teacher.php/Student";
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