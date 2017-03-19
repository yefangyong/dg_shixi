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
                    <div class="i on">
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
                    <li><a href="<?php echo U('Report/index');?>" >周报</a></li>
                    <li><a href="<?php echo U('Report/month');?>" class="on">月报</a></li>
                    <li><a href="">实习总结</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ht15"></div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-filter">
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="#">院系</a></p>
                    <div class="ex">
                        <div class="list">
                            <?php if(is_array($department)): $i = 0; $__LIST__ = $department;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)" name="department" attr-id="<?php echo ($v["id"]); ?>"><?php echo ($v["dname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="#">专业</a></p>
                    <div class="ex">
                        <div class="list">
                        <?php if(is_array($profession)): $i = 0; $__LIST__ = $profession;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="" name="profession" attr-id="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="#">班级</a></p>
                    <div class="ex">
                        <div class="list">
                            <?php if(is_array($class)): $i = 0; $__LIST__ = $class;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="" name="class" attr-id="<?php echo ($v["id"]); ?>"><?php echo ($v["classname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="#">实习单位</a></p>
                    <div class="ex">
                        <div class="list">
                            <?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="" name="corporation" attr-id="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
                <div class="select">
                    <p><a href="#">批阅情况</a></p>
                    <div class="ex">
                        <div class="list">
                            <p><a name="status" attr-id="1" href="">未审核</a></p>
                            <p><a name="status" attr-id="2" href="">已批准</a></p>
                            <p><a name="status" attr-id="0" href="">未批准</a></p>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <input type="text" class="text control-form" id="keywords" placeholder="请输入学号/姓名">
                <span class="wh10"></span>
                <a href="javascript:void(0)" class="bt">查询</a>
            </div>
            <div class="ht30"></div>
            <div class="ui-table">
                <div class="hd">
                    <div class="tool">
                        <p>
                            <a href="<?php echo U('Report/exportMonth');?>">导出</a>
                            &nbsp;
                            <a href="javascript:void(0)" id="deleteall">删除</a>
                        </p>
                    </div>
                </div>
                <div class="ct">
                    <table>
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>学号</b></td>
                            <td><b>提交人</b></td>
                            <td><b>班级</b></td>
                            <td><b>提交时间</b></td>
                            <td><b>实习单位</b></td>
                            <td><b>评审结果</b></td>
                            <td><b>操作</b></td>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="" class="cbox"></a></td>
                                <td><?php echo ($v["studentno"]); ?></td>
                                <td><?php echo ($v["name"]); ?></td>
                                <td><?php echo ($v["classname"]); ?></td>
                                <td><?php echo (substr($v["pubtime"],0,10)); ?></td>
                                <td>&nbsp;</td>
                                <td><?php echo (setReportStatus($v["status"])); ?></td>
                                <td>
                                    <a href="javascript:void(0)" class="edit" attr-id="<?php echo ($v["rid"]); ?>" attr-status="<?php echo ($v["status"]); ?>">查看</a>
                                    <a href="javascript:void(0)" class="del" attr-id="<?php echo ($v["rid"]); ?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ht35"></div>
            <div class="ui-paging">
                <?php echo ($page); ?> 
                <div class="pull-left">
                    <a href="" class="cbox"><i></i>全选</a>
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
<script>
    $(function(){
        $('.bt').click(function(){
            var _department = 0;
            var _profession = 0;
            var _class = 0;
            var _corporation = 0;
            var _status = 0;
            $("a[name^='department']").each(function(i){
                if($(this).attr('class')=='on'){
                    _department = $(this).attr('attr-id');
                }
            })
            $("a[name^='profession']").each(function(i){
                if($(this).attr('class')=='on'){
                    _profession = $(this).attr('attr-id');
                }
            })
            $("a[name^='class']").each(function(i){
                if($(this).attr('class')=='on'){
                    _class = $(this).attr('attr-id');
                }
            })
            $("a[name^='corporation']").each(function(i){
                if($(this).attr('class')=='on'){
                    _corporation = $(this).attr('attr-id');
                }
            })
            $("a[name^='status']").each(function(i){
                if($(this).attr('class')=='on'){
                    _status = $(this).attr('attr-id');
                }
            })
            window.location.href="/teacher.php/Report/month/department/"+_department+"/profession/"+_profession+"/class/"+_class+"/corporation/"+_corporation+"/status/"+_status+"/keywords/"+$('#keywords').val();
        });

        $('.edit').click(function(){
            var $url = "<?php echo U('Report/edit');?>";
            var $id = $(this).attr('attr-id');
            var $status = $(this).attr('attr-status');
            $.post($url,{rid:$id,status:$status},function(msg){
                window.location.href = msg;
            },'JSON');
        });

        $('#deleteall').click(function(){
            var ids = new Array();
            $('.cbox').each(function(i){
                if($(this).attr('class')=='cbox on'){
                    if($(this).attr('attr-id')>0)
                    ids[ids.length]=$(this).attr('attr-id');
                }
            });
            if(ids.length>0)
                layer.confirm('您真的要删除选中记录吗?', {icon: 3, title:'删除记录'}, function(index){
                    var $url = "<?php echo U('Report/del');?>";
                    $.post($url,{id:ids},function(msg){
                        if(msg.status==1){
                            layer.msg(msg.message,{icon:6},function(){
                                window.location.href="/teacher.php/Report/month";
                            });
                        }else{
                            layer.msg(msg.message,{icon:5},function(){
                                window.location.href="/teacher.php/Report/month";
                            });
                        }
                    },'JSON');
                })
        });

        //删除
        $('.del').click(function(){
            var $data = $(this).attr('attr-id');
            layer.confirm('您真的要删除本条记录吗?', {icon: 3, title:'删除记录'}, function(index){
                var $url = "<?php echo U('Report/del');?>";
                $.post($url,{id:$data},function(msg){
                    if(msg.status==1){
                        layer.msg(msg.message,{icon:6},function(){
                            window.location.href="/teacher.php/Report/month";
                        });
                    }else{
                        layer.msg(msg.message,{icon:5},function(){
                            window.location.href="/teacher.php/Report/month";
                        });
                    }
                },'JSON');
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