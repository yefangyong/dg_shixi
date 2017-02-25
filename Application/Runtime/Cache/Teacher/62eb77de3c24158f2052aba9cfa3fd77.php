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
                <div class="ct">
                    <ul>
                        <li><a href="<?php echo U('Student/index');?>" class="on">学生管理</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <a href="javascript:void(0)" class="home"></a>
            <a href="<?php echo U('Student/index');?>">学生管理</a>
            >
            <a href="javascript:void(0)" class="on">查看学生信息</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht20"></div>
            <div class="pull-left" style="margin-right: 30px;">
                <div class="ui-infbox">
                    <div class="hd">
                        <p>个人信息</p>
                    </div>
                    <div class="ct">
                        <div class="info">
                            <p>
                                <img src="/Public/teacher/img/avatar2.jpg" alt="">
                            </p>
                            <div class="ct">
                                <table>
                                    <tr>
                                        <td><label for="">姓名</label></td>
                                        <td><?php echo ($student["name"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">手机</label></td>
                                        <td><?php echo ($student["phone"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">学号</label></td>
                                        <td><?php echo ($student["studentno"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">电子邮箱</label></td>
                                        <td><?php echo ($student["email"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">联系地址</label></td>
                                        <td><?php echo ($student["address"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">院系</label></td>
                                        <td><?php echo ($student["deptname"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">年级</label></td>
                                        <td><?php echo ($student["grade"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">班级</label></td>
                                        <td><?php echo ($student["classname"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">班主任</label></td>
                                        <td><?php echo ($student["master"]); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-left">
                <div class="ui-infbox">
                    <div class="hd">
                        <p>实习信息</p>
                    </div>
                    <div class="ct">
                        <div class="info">
                            <div class="ct">
                                <table>
                                    <tr>
                                        <td><label for="">实习状态</label></td>
                                        <td><?php echo ($student["ispractice"]); ?></td>
                                    </tr>
                                    <?php if(($student["ispractice"]) == "1"): ?><tr>
                                            <td><label for="">实习企业</label></td>
                                            <td><?php echo ($student["proname"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">实习地址</label></td>
                                            <td><?php echo ($student["city"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">实习岗位</label></td>
                                            <td><?php echo ($student["position"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">实习时间</label></td>
                                            <td><?php echo ($student["starttime"]); ?>~<?php echo ($student["endtime"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">实习导师</label></td>
                                            <td><?php echo ($student["guide"]); ?></td>
                                        </tr>
                                        <tr>
                                            <td><label for="">导师联系方式</label></td>
                                            <td>1689829379</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">住宿地址</label></td>
                                            <td>苏州金龙集团职工宿舍</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">实习小结</label></td>
                                            <td>已提交</td>
                                        </tr><?php endif; ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ht30"></div>
                <?php if(($student["ispractice"]) == "1"): ?><div class="ui-infbox">
                        <div class="hd">
                            <p>日常任务</p>
                        </div>
                        <div class="ct">
                            <div class="info">
                                <div class="ct">
                                    <table>
                                        <tr>
                                            <td><label for="">周报</label></td>
                                            <td>已提交3篇</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">打卡</label></td>
                                            <td>2016-12-01 08;30;00</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">月报</label></td>
                                            <td>已提交3篇</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">实习小结</label></td>
                                            <td>已提交5篇</td>
                                        </tr>
                                        <tr>
                                            <td><label for="">实习申请</label></td>
                                            <td>已提交4篇</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><?php endif; ?>
            </div>
</main>
<!-------------------------------------- 内容结束 -------------------------------------->
<!-------------------------------------- 尾部开始 -------------------------------------->
<footer>
    <div class="container">

    </div>
</footer>
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