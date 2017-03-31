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
            <?php if($_SESSION['adminUser']['type'] == 2 or $_SESSION['adminUser']['type'] == 1): ?><li>
                    <div class="i<?=' '.getActive('Notice')?>">
                        <a href="<?php echo U('Notice/index');?>">
                            <p><i class="ico7"></i>
                                通知公告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Statistics')?>">
                        <a href="<?php echo U('Statistics/index');?>">
                            <p><i class="ico8"></i>
                                统计分析
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Practice')?>">
                        <a href="<?php echo U('Practice/index');?>">
                            <p><i class="ico6"></i>
                                实习管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Student')?>">
                        <a href="<?php echo U('Student/index');?>">
                            <p><i class="ico9"></i>
                                学生管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Contact')?>">
                        <a href="<?php echo U('Contact/index');?>">
                            <p><i class="ico3"></i>
                                通讯录
                            </p>
                        </a>
                    </div>
                </li>
            <?php else: ?>
                <li>
                    <div class="i<?=' '.getActive('Report')?>">
                        <a href="<?php echo U('Report/index');?>">
                            <p><i class="ico1"></i>
                                实习报告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Apply')?>">
                        <a href="<?php echo U('Apply/index');?>">
                            <p><i class="ico2"></i>
                                申请审核
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Practice')?>">
                        <a href="<?php echo U('Practice/index');?>">
                            <p><i class="ico6"></i>
                                实习管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Notice')?>">
                        <a href="<?php echo U('Notice/index');?>">
                            <p><i class="ico7"></i>
                                通知公告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Statistics')?>">
                        <a href="<?php echo U('Statistics/index');?>">
                            <p><i class="ico8"></i>
                                统计分析
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Student')?>">
                        <a href="<?php echo U('Student/index');?>">
                            <p><i class="ico9"></i>
                                <?php if($_SESSION['adminUser']['type'] == 0): ?>学生<?php else: ?>用户<?php endif; ?>管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i<?=' '.getActive('Contact')?>">
                        <a href="<?php echo U('Contact/index');?>">
                            <p><i class="ico3"></i>
                                通讯录
                            </p>
                        </a>
                    </div>
                </li><?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-------------------------------------- 内容开始 -------------------------------------->
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
                <div class="user">
    <p><img src="/Public/teacher/img/avatar1.jpg" alt="">
        <a href=""><?php echo getLoginUsername()?></a>
        <i></i>
    </p>
    <div class="ex">
        <p><a href="">个人信息</a></p>
        <p><a href="">修改密码</a></p>
        <p><a href="<?php echo U('Login/loginOut');?>">退出</a></p>
    </div>
</div>
            </div>
            <div class="tabs">
                <ul>
                    <li><a href="<?php echo U('Notice/index');?>" class="on">公告</a></li>
                    <li><a href="">系统消息</a></li>
                    <li><a href="">预警信息</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <span class="pull-right"><a href="<?php echo U('Notice/index');?>">返回</a></span>
            <a href="javascript:void(0)" class="home"></a>
            <a href="<?php echo U('Notice/index');?>">公告</a>
            >
            <a href="javascript:void(0)" class="on">新增公告</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" id="yfycms-form">
                    <div class="form-group">
                        
                        <div class="col-sm-2">
                            <label for="" class="control-label">标题</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control" id="" style="width: 210px;" placeholder="请输入公告标题信息">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">发布至</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p><a href="javascript:void();"><?php if($_SESSION['adminUser']['type'] == 0): echo ($_SESSION['adminUser']['classname']); else: ?>请选择您的发送对象<?php endif; ?></a></p>
                                <input type="hidden" id="school" name="school" value="0" />
                                <input type="hidden" id="class_id" name="class_id" value="<?php if($_SESSION['adminUser']['type'] == 0): echo ($_SESSION['adminUser']['class_id']); else: ?>0<?php endif; ?>" />
                                <input type="hidden" id="dep_id" name="dep_id" value="0" />
                                <div class="ex">
                                    <?php if($THINK.session.adminUser.type == 2): ?><p><a href="javascript:void();" onclick="setAll();">所有人</a></p><?php endif; ?>
                                    <?php if(is_array($department)): $i = 0; $__LIST__ = $department;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void();" onclick="setDep(<?php echo ($v["id"]); ?>);"><?php echo ($v["dname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <hr />
                                    <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void();" onclick="setCla(<?php echo ($v["id"]); ?>);"><?php echo ($v["classname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p><a href="javascript:void();"><?php if($_SESSION['adminUser']['type'] == 0): ?>不限<?php else: ?>请选择您的发送对象类型<?php endif; ?></a></p>
                                <input type="hidden" id="type" name="type" value="<?php if($_SESSION['adminUser']['type'] == 0): echo ($_SESSION['adminUser']['class_id']); else: ?>0<?php endif; ?>" />
                                <div class="ex">
                                    <p><a href="javascript:void();" onclick="setType(0);">不限</a></p>
                                    <p><a href="javascript:void();" onclick="setType(2);">教师</a></p>
                                    <p><a href="javascript:void();" onclick="setType(1);">学生</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">内容</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="textarea" style="width: 93%;"><label for="">0/2000</label>
                                <textarea class="form-control" name="content" placeholder="请输入公告内容"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            &nbsp;
                        </div>
                        <div class="col-sm-10">
                            <p>
                                <a href="javascript:void();" id="yfycms-button-submit" class="bt-btn1 style1">保存</a>
                                <span class="wh40"></span>
                                <a href="<?php echo U('Notice/index');?>" class="bt-btn1 style2">取消</a>
                            </p>
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
<link rel="stylesheet" type="text/css" href="/Public/Student/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="/Public/Student/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/Public/Student/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script>
    $(function(){
        $('.dtp').datetimepicker({
            language: 'zh-CN',
            minView: "month",//设置只显示到月份
            format : "yyyy-mm-dd",//日期格式
            autoclose:true,//选中关闭
            todayBtn: true//今日按钮
        });
    });
    function setAll(){
        $('#school').val(1);
    }
    function setDep(i){
        $('#dep_id').val(i);
    }
    function setCla(i){
        $('#class_id').val(i);
    }
    function setType(i){
        $('#type').val(i);
    }

    var SCOPE = {
        'save_url' : '/index.php?m=teacher&c=notice&a=add',
        'jump_url' : '/index.php?m=teacher&c=notice&a=index',
        'set_status_url':'/index.php?m=teacher&c=notice&a=del',
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
</body>
</body>
</html>
<script>
</script>