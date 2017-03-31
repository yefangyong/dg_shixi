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
                    <div class="i <?php echo getActive('report')?>" >
                        <a href="/index.php/student/Report/index">
                            <p><i class="ico1"></i>
                                实习报告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div  class="i <?php echo getActive('Apply')?>">
                        <a href="/index.php/student/Apply/index">
                            <p><i class="ico2"></i>
                                我的申请
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i <?php echo getActive('Contact')?>">
                        <a href="/index.php/student/Contact/student">
                            <p><i class="ico3"></i>
                                通讯录
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i <?php echo getActive('Notice')?>">
                        <a href="/index.php/student/Notice/index">
                            <p><i class="ico4"></i>
                                消息管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i <?php echo getActive('Personal')?>">
                        <a href="/index.php/student/Personal/index">
                            <p><i class="ico5"></i>
                                个人中心
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
            $('.i on').removeClass('on');
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
                    <p><img src="/Public/teacher/img/avatar1.jpg" alt="">
                        <a href=""><?php echo getLoginUsername() ?></a>
                        <i></i>
                    </p>
                    <div class="ex">
                        <p><a href="/index.php/Student/Common/password">修改密码</a></p>
                        <p><a href="/index.php/Home/Login/logOut">退出</a></p>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <ul>
                    <li><a href="" class="on">个人中心</a>/li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <a href="" class="home"></a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht20"></div>
            <div class="pull-left" style="margin-right: 30px;">
                <div class="ui-infbox" style="width:450px;">
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
                                        <td width="80"><label for="">姓　　名</label></td>
                                        <td><?php echo ($student['name']); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">手　　机</label></td>
                                        <td><?php echo ($student['phone']); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">学　　号</label></td>
                                        <td><?php echo ($student["studentno"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">电子邮箱</label></td>
                                        <td><?php echo ($student["email"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">联系地址</label></td>
                                        <td title="<?php echo ($student["address"]); ?>"><div style="overflow: hidden;height: 30px;"><?php echo ($student["address"]); ?></div></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">院　　系</label></td>
                                        <td><?php echo ($student["dname"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">年　　级</label></td>
                                        <td><?php echo ($student["grade"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">班　　级</label></td>
                                        <td><?php echo ($student["classname"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">班 主 任</label></td>
                                        <td><?php echo ($student["teacher_name"]); ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-left" style="margin-right: 30px;">
                <div class="ui-infbox">
                    <div class="hd">
                        <p>实习信息</p>
                    </div>
                    <div class="ct" style="width:350px;">
                        <div class="info">
                                <table>
                                    <tr>
                                        <td><label for="">实习状态</label></td>
                                        <td><?php echo (getPracticeStatus($practice["ispractice"])); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">实习企业</label></td>
                                        <td><?php echo ($practice["cname"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">实习地址</label></td>
                                        <td><?php echo ($practice["address"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">实习岗位</label></td>
                                        <td><?php echo ($practice["position"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">实习时间</label></td>
                                        <td><?php echo (substr($practice["starttime"],0,10)); ?>~<?php echo (substr($practice["endtime"],0,10)); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">实习导师</label></td>
                                        <td><?php echo ($practice["guide"]); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">导师联系方式</label></td>
                                        <td><?php echo ($practice["phone"]); ?></td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pull-left">
                <div class="ui-infbox">
                    <div class="hd">
                        <p>日常任务</p>
                    </div>
                    <div class="ct" style="width:350px;">
                        <div class="info">
                                <table>
                                    <tr>
                                        <td><label for="">周　　报</label></td>
                                        <td>已提交<?php echo ($weekReportCount); ?>篇</td>
                                    </tr>
                                    <tr>
                                        <td><label for="">打　　卡</label></td>
                                        <td><?php echo ($signin['pubtime']); ?></td>
                                    </tr>
                                    <tr>
                                        <td><label for="">月　　报</label></td>
                                        <td>已提交<?php echo ($monthReportCount); ?>篇</td>
                                    </tr>
                                    <tr>
                                        <td><label for="">实习小结</label></td>
                                        <td>已提交<?php echo ($reportSum); ?>篇</td>
                                    </tr>
                                    <tr>
                                        <td><label for="">实习申请</label></td>
                                        <td>已提交1篇</td>
                                    </tr>
                                    <tr>
                                        <td><label for="">总 成 绩</label></td>
                                        <td><?php echo ($grade['score']); ?>分</td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
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