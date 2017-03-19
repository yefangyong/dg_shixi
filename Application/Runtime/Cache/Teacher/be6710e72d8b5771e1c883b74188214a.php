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
<script src="/Public/teacher/js/jquery-1.11.3.min.js"></script>
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
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
            <span class="pull-right"><a href="<?php echo U('Practice/index');?>">返回</a></span>
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
                            <label for="" class="control-label">企业名称</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p ><a href="#">请选择企业名称</a></p>
                                <div class="ex">
                                    <div class="list">
                                    <?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0);" onclick="selectCor(<?php echo ($v["id"]); ?>);" name="corname" attr-id="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">所在地址</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="address" id="address" style="width: 210px;" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">实习岗位</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="position" id="position" style="width: 210px;" placeholder="请输入实习岗位">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业指导老师</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="guide" id="guide" style="width: 210px;" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">联系电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="telephone" id="telephone" style="width: 210px;" >
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">开始时间</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <!--<p><a href="">请选择实习开始时间</a></p>-->
                                <p><input type="text" class="form-control dtp" name="starttime" id="starttime" style="width: 210px;" placeholder="例XXXX-XX-XX" value=""></p>
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
                                <p><input type="text" class="form-control dtp" name="endtime" id="endtime" style="width: 210px;" placeholder="例XXXX-XX-XX"></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业性质</label>
                        </div>
                        <div class="col-sm-4">
                            <p><input type="text" name="type" id="type" class="form-control" value="" ></p>
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
                    <input type="hidden" name="student" id="studentids" value="<?php echo ($studentids); ?>" />
                    <input type="hidden" name="corid" id="corid" value="" />
                    <input type="hidden" name="teacher" id="teacher" value="" />
                    <input type="hidden" name="action" value="doarrangement" />
                </form>
            </div>
        </div>
    </div>
</main>
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
    $(function(){
        $('button[type=button]').click(function(){
            var cor_id = $('#corid').val();
            var studentids = $('#studentids').val();
            var starttime  =$('#starttime').val();
            var endtime  =$('#endtime').val();
            var address  =$('#address').val();
            var guide  =$('#guide').val();
            var position  =$('#position').val();
            var $url = "<?php echo U('Practice'/arrangement);?>";
            var reg = /^(\d{4})-(\d{2})-(\d{2})$/;
            if(cor_id==""){
                layer.msg("请选择企业",{icon:5});
                return false;
            }
            if (starttime.length>0&&(!reg.test(starttime)||RegExp.$2>=12||RegExp.$3>31)){
                layer.msg("请输入正确的开始时间格式",{icon:5});
                return false;
            }
            if (endtime.length>0&&(!reg.test(endtime)||RegExp.$2>=12||RegExp.$3>31)){
                layer.msg("请输入正确的结束时间格式",{icon:5});
                return false;
            }
            $.ajax({
                url:$url,
                type:"post",
                dataType:'json',
                data:{
                    'cor_id': cor_id,
                    'guide': guide,
                    'studentids': studentids,
                    'starttime': starttime,
                    'endtime': endtime,
                    'position': position,
                    'address' : address,
                    'guide' : guide,
                    'action': 'doarrangement',

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
    function selectCor(v){
        $('#corid').val(v);
        for(var i=1; i< corporation.length; i++){
            if(corporation[i]['id']==v){
                $('#address').val(corporation[i]['address'])
                $('#type').val(corporation[i]['type'])
                $('#contact').val(corporation[i]['contact'])
                $('#telephone').val(corporation[i]['telephone'])
            }
        }
    }
    function selectTea(v){
        $('#teacher').val(v);
    }
    var corporation = new Array();
    var i=0;
    <?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>corporation[<?php echo ($i); ?>] = new Array();
        corporation[<?php echo ($i); ?>]['id'] = <?php echo ($v["id"]); ?>;
        corporation[<?php echo ($i); ?>]['name'] = '<?php echo ($v["name"]); ?>';
        corporation[<?php echo ($i); ?>]['type'] = '<?php echo ($v["type"]); ?>';
        corporation[<?php echo ($i); ?>]['address'] = '<?php echo ($v["address"]); ?>';
        corporation[<?php echo ($i); ?>]['contact'] = '<?php echo ($v["contact"]); ?>';
        corporation[<?php echo ($i); ?>]['telephone'] = '<?php echo ($v["telephone"]); ?>';<?php endforeach; endif; else: echo "" ;endif; ?>
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