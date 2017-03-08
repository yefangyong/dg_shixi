<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    -->
    <title>学生端</title>
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/bootstrap-customize.css">
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/pages.css">
    <link rel="stylesheet" href="/Public/Student/css/party/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Student/css/party/uploadify.css">
    <script type="text/javascript" src="/Public/Student/js/html5.js"></script>
    <script type="text/javascript" src="/Public/Student/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/Student/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Student/js/respond.src.js"></script>
    <script type="text/javascript" src="/Public/Student/js/base.js"></script>
    <script type="text/javascript" src="/Public/Student/js/main.js"></script>
    <!--plugin-->
    <script type="text/javascript" src="/Public/Student/js/jquery.event.move.js"></script>

    <!-- jQuery -->
    <script src="/Public/js/dialog/layer.js"></script>
    <script src="/Public/js/dialog.js"></script>
    <script src="/Public/js/common.js"></script>
    <script src="/Public/js/image.js"></script>
    <script src="/Public/js/login.js"></script>
    <script type="text/javascript" src="/Public/Student/js/party/jquery.uploadify.js"></script>
</head>
<nav class="navi">
    <div class="hd">
        <div class="logo">
            <p><a href=""><img src="/Public/Student/img/logo.png" alt=""></a></p>
        </div>
    </div>/
    <div class="ct">
        <div class="ht15"></div>
        <div class="list">
            <ul>
                <li>
                    <div class="i on">
                        <a href="/index.php/student/Report/index">
                            <p><i class="ico1"></i>
                                实习报告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div  class="i">
                        <a href="/index.php/student/Apply/index">
                            <p><i class="ico2"></i>
                                我的申请
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Contact/student">
                            <p><i class="ico3"></i>
                                通讯录
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Notice/index">
                            <p><i class="ico4"></i>
                                消息管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Grade/index">
                            <p><i class="ico5"></i>
                                我的成绩
                            </p>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    $(function(){
        $('.i').click(function(){
            $('.i').removeClass('on');
            $(this).addClass('on');
        });
    });
</script>

<!-------------------------------------- 头部结束 -------------------------------------->
<!-------------------------------------- 内容开始 -------------------------------------->
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
                <div class="user">
                    <p><img src="img/avatar1.jpg" alt="">
                        <a href=""><?php echo getLoginUsername() ?></a>
                        <i></i>
                    </p>
                    <div class="ex">
                        <p><a href="">个人信息</a></p>
                        <p><a href="">修改密码</a></p>
                        <p><a href="/index.php?m=student&c=login&a=logout">退出</a></p>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <div class="ct">
                    <ul>
                        <li><a href="/index.php?m=student&c=apply">实习申请</a></li>
                        <li><a href="/index.php?m=student&c=apply&a=change" class="on">实习变更</a></li>
                        <li><a href="/index.php?m=student&c=apply&a=leave">请假申请</a></li>
                    </ul>
                </div>
                <a href="javascript:;" class="aw prev"></a><a href="javascript:;" class="aw next"></a>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p><span class="pull-right"><a href="/index.php?m=student&c=apply&a=change" style="font-size: 15px">返回</a></span>
            <a href="" class="home"></a>
            <a href="/index.php?m=student&c=apply&a=change" style="font-size: 15px">实习变更</a>
            &gt;
            <a href="" class="on" style="font-size: 15px" >实习变更状态</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht15"></div>
            <div class="ui-article">
                <div class="hd">
                    <h3><?php echo getLoginUsername()?>的单位变更申请</h3>
                </div>
                <div class="ht20"></div>
                <div class="ui-head1">
                    <p>个人信息</p>
                </div>
                <div class="ht15"></div>
                <div class="ui-article">
                    <div class="hd">
                        <table>
                            <tr>
                                <td align="left">学号：<?php echo ($student['studentno']); ?></td>
                                <td align="center">姓名：<?php echo ($student['name']); ?></td>
                                <td align="right">联系方式：<?php echo ($student['phone']); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="ht25"></div>
                <div class="ui-head1">
                    <p>变更信息</p>
                </div>
                <div class="ht15"></div>
                <div class="hd">
                    <table>
                        <tr>
                            <td>原单位：<?php echo ($practice['name']); ?></td>
                            <td>现单位：<?php echo ($change['cname']); ?></td>
                            <td>岗位：<?php echo ($change['position']); ?></td>
                        </tr>
                        <tr>
                            <td>所在地址：<?php echo ($change['detailaddress']); ?></td>
                            <td>企业指导老师：<?php echo ($change['guide']); ?></td>
                            <td>联系电话：<?php echo ($change['phone']); ?></td>
                        </tr>
                    </table>
                    <div class="ht15"></div>
                </div>
                <div class="ct">
                    <p style="text-indent: 0;">变更原因：</p>
                        <?php echo ($change['reason']); ?>
                </div>
            </div>
            <div class="ht90"></div>
            <div class="ui-state">
                <p class="text-center" style="font-size: 20px;">
                    <b>当前状态：</b><?php echo (getChangeStatus($change['status'])); ?>
                </p>
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
<style>

</style>
<script>
    $(function(){

    });
</script>