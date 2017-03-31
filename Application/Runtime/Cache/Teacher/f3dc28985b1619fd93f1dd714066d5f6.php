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
            <p><a href="javascript:void(0)">修改密码</a></p>
            <p><a href="/index.php/Home/Login/logOut">退出</a></p>
        </div>
    </div>
</div>
            <div class="tabs">
                <ul>
                    <li><a href="<?php echo U('Student/index');?>">学生管理</a></li>
                    <?php if($_SESSION['adminUser']['type'] == 2): ?><li><a href="<?php echo U('Student/teacher');?>" >教师管理</a></li>
                    <li><a href="<?php echo U('Student/classes');?>" class="on">班级管理</a></li>
                    <li><a href="<?php echo U('Student/department');?>">部门管理</a></li><?php endif; ?>
                </ul>
        </div>
    </div>
    <div class="ht15"></div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-filter">
                <span class="wh10"></span>
                <input type="text" class="text control-form" id="keywords" placeholder="请输入班级名称">
                <span class="wh10"></span>
                <a href="javascript:void(0)" class="bt">查询</a>
            </div>
            <div class="ht30"></div>
            <div class="ui-table">
                <div class="hd">
                    <div class="ui-paging">
                        <div class="pull-left">
                            <a href="" class="cbox" attr-id="0"><i></i>全选</a>
                        </div>
                    </div>
                    <div class="tool">
                        <p>
                            <a href="<?php echo U('Student/addclass');?>">新增</a>
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
                            <td><b>编号</b></td>
                            <td><b>班级名称</b></td>
                            <td><b>年级</b></td>
                            <td><b>系主任</b></td>
                            <td><b>所属系部</b></td>
                            <td><b>班级人数</b></td>
                            <td><b>操作</b></td>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="" class="cbox" attr-id="<?php echo ($v["id"]); ?>"></a></td>
                                <td><?php echo ($v["id"]); ?></td>
                                <td><?php echo ($v["classname"]); ?></td>
                                <td><?php echo ($v["grade"]); ?></td>
                                <td><?php echo ($v["teacher"]); ?></td>
                                <td><?php echo ($v["dname"]); ?></td>
                                <td><?php echo ($v["studentct"]); ?></td>
                                <td>
                                    <a href="/teacher.php/Student/updateclass/id/<?php echo ($v["id"]); ?>">编辑</a>
                                    <a href="javascript:void(0)" class="del" attr-id="<?php echo ($v["id"]); ?>">删除</a>
                                </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ht35"></div>
            <div class="ui-paging">
               <?php echo ($page); ?>
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
            window.location.href="/teacher.php/Student/index/department/"+_department+"/profession/"+_profession+"/class/"+_class+"/keywords/"+$('#keywords').val();

        })

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
                    var $url = "<?php echo U('Student/delclass');?>";
                    $.post($url,{id:ids},function(msg){
                        if(msg.status==1){
                            layer.msg(msg.message,{icon:6},function(){
                                window.location.href="/teacher.php/Student/classes";
                            });
                        }else{
                            layer.msg(msg.message,{icon:5},function(){
                                window.location.href="/teacher.php/Student/classes";
                            });
                        }
                    },'JSON');
                })
        });

        $('.del').click(function(){
            var $data = $(this).attr('attr-id');
            layer.confirm('您真的要删除本条记录吗?', {icon: 3, title:'删除记录'}, function(index){
                var $url = "<?php echo U('Student/delclass');?>";
                $.post($url,{id:$data},function(msg){
                    if(msg.status==1){
                        layer.msg(msg.message,{icon:6},function(){
                            window.location.href="/teacher.php/Student/classes";
                        });
                    }else{
                        layer.msg(msg.message,{icon:5},function(){
                            window.location.href="/teacher.php/Student/classes";
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
</script>