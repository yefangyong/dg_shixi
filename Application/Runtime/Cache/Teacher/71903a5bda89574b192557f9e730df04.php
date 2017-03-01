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
<main>
    <div class="ui-head">
        <div class="container">
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
            <div class="tabs">
                <ul>
                    <li><a href="<?php echo U('Report/index');?>" class="on">周报</a></li>
                    <li><a href="<?php echo U('Report/month');?>">月报</a></li>
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
                <div class="select">
                    <select name="" id="">
                        <option value="">提交人</option>
                        <option value="">董嘉耀</option>
                        <option value="">侯震</option>
                        <option value="">郭德纲</option>
                        <option value="">董嘉耀</option>
                    </select>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="">批阅情况</a></p>
                    <div class="ex">
                        <div class="list">
                            <p><a href="">已批阅</a></p>
                            <p><a href="">未批阅</a></p>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="">班级</a></p>
                    <div class="ex">
                        <div class="list">
                            <p><a href="">机设011</a></p>
                            <p><a href="">自动化002</a></p>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="">实习单位</a></p>
                    <div class="ex">
                        <div class="list">
                            <p><a href="">金龙集团</a></p>
                            <p><a href="">安溪太阳能</a></p>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <a href="" class="bt">查询</a>
            </div>
            <div class="ht30"></div>
            <div class="ui-table">
                <div class="hd">
                    <div class="tool">
                        <p>
                            <a href="">导出</a>
                            &nbsp;
                            <a href="JavaScript:void(0)" id="delall">删除</a>
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
                                <input type="hidden" name="id" value="<?php echo ($v["id"]); ?>">
                                <td><?php echo ($v["studentno"]); ?></td>
                                <td><?php echo ($v["name"]); ?></td>
                                <td><?php echo ($v["classname"]); ?></td>
                                <td><?php echo ($v["pubtime"]); ?></td>
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
            <?php if(is_array($allClass)): $i = 0; $__LIST__ = $allClass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; echo ($v["classname"]); endforeach; endif; else: echo "" ;endif; ?>
            <div class="ht35"></div>
            <div class="ui-paging">
                <span>共<?php echo ($num); ?>页，共<?php echo ($count); ?>条记录</span>
                &nbsp;
                <ul>
                    <li><a href=""><</a></li>
                    <li><a href="" class="on">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">></a></li>
                </ul>
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
        //查询
//        $(".bt").click(function(){
//            var $data = $('#query-form').serialize();
//            var $url = "<?php echo U('Report/index');?>";
//            $.ajax({
//                'url':$url,
//                'type':'post',
//                'data': $data,
//                'dataType':'json',
//                success:function(msg){
//                    var $table = $('.ct:eq(1) table');
//                    $table.html('');
//                    var content = '<tr>';
//                    content += '<td><b>ID</b></td>';
//                    content += '<td><b>学号</b></td>';
//                    content += '<td><b>提交人</b></td>';
//                    content += '<td><b>班级</b></td>';
//                    content += '<td><b>提交时间</b></td>';
//                    content += '<td><b>实习单位</b></td>';
//                    content += '<td><b>评审结果</b></td>';
//                    content += '<td><b>操作</b></td>';
//                    content += '</tr>';
//                    for(var $i=0;$i<msg.length;$i++){
//                        content += '<tr>';
//                        content += '<td>'+msg[$i].rid+'</td>';
//                        content += '<td>'+msg[$i].studentno+'</td>';
//                        content += '<td>'+msg[$i].name+'</td>';
//                        content += '<td>'+msg[$i].classname+'</td>';
//                        content += '<td>'+msg[$i].pubtime+'</td>';
//                        content += '<td>'+' '+'</td>';
//                        content += '<td>'+msg[$i].result+'</td>';
//                        content += '<td><a href="javascript:void(0)" class="edit" attr-id="'+msg[$i].rid+'" attr-status="'+msg[$i].status+'">编辑</a>&nbsp;&nbsp;<a href="javascript:void(0)" class="del" attr-id="'+msg[$i].rid+'">删除</a> </td>';
//                        content += '</tr>';
//                    }
//                    $table.html(content);
//                }
//            });
//        });

        //编辑
        $('.edit').click(function(){
            var $url = "<?php echo U('Report/edit');?>";
            var $id = $(this).attr('attr-id');
            var $status = $(this).attr('attr-status');
            $.post($url,{rid:$id,status:$status},function(msg){
                window.location.href = msg;
            },'JSON');
        });

        //删除
        $('.del').click(function(){
            var $data = $(this).attr('attr-id');
            layer.confirm('您真的要删除本条记录吗?', {icon: 3, title:'删除记录'}, function(index){
                var $url = "<?php echo U('Report/del');?>";
                $.post($url,{id:$data},function(msg){
                    if(msg.status==1){
                        layer.msg(msg.message,{icon:6},function(){
                            window.location.href="/teacher.php/Report/index";
                        });
                    }else{
                        layer.msg(msg.message,{icon:5},function(){
                            window.location.href="/teacher.php/Report/index";
                        });
                    }
                },'JSON');
            });
        });

        $('#delall').click(function(){
            var $allBtn = $('.cbox:last');
            var $ids = new Array();
            if($allBtn.hasClass('on')){
                var $items = $('.cbox:not(.cbox:last)');
                for(var $i=0;$i<$items.length;$i++){
                    console.log($items[$i].closest());
                }

            }
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