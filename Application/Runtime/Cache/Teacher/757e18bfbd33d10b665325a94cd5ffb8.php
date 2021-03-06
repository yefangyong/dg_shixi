<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="ch-ZN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>教师端</title>
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/bootstrap-customize.css">
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/style.css">
    <link rel="stylesheet" type="text/css" href="/shixi/Public/teacher/css/pages.css">
    <script type="text/javascript" src="/shixi/Public/teacher/js/html5.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/jquery.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/bootstrap.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/respond.src.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/base.js"></script>
    <script type="text/javascript" src="/shixi/Public/teacher/js/main.js"></script>
    <!--plugin-->
    <script type="text/javascript" src="/shixi/Public/teacher/js/jquery.event.move.js"></script>
    <script type="text/javascript" src="/shixi/Public/js/dialog/layer.js"></script>
    <script type="text/javascript" src="/shixi/Public/js/dialog.js"></script>
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
            <p><a href=""><img src="/shixi/Public/teacher/img/logo.png" alt=""></a></p>
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
                    <div class="i on">
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
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
                <div class="user">
                    <p><img src="/shixi/Public/teacher/img/avatar1.jpg" alt="">
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
                        <ul>
                            <li><a href="<?php echo U('Apply/index');?>" >实习申请</a></li>
                            <li><a href="<?php echo U('Apply/corporation');?>" class="on">实习单位变更</a></li>
                            <li><a href="<?php echo U('Apply/position');?>">实习岗位变更</a></li>
                            <li><a href="">请假申请</a></li>
                        </ul>
                    </ul>
                </div>
                <a href="javascript:;" class="aw prev"></a><a href="javascript:;" class="aw next"></a>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <a href="<?php echo U('Apply/index');?>" class="home">实习管理</a>
            &gt;
            <a href="<?php echo U('Apply/corporation');?>">实习单位变更</a>
            &gt;
            <a href="javascript:void(0)" class="on">实习变更批阅</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht15"></div>
            <div class="ui-article">
                <div class="hd">
                    <h3>董嘉耀的单位变更申请</h3>
                    <table>
                        <input type="hidden" name="id" value="<?php echo ($apply["chid"]); ?>">
                        <tr>
                            <td align="left">单位名称：<?php echo ($apply["corname"]); ?></td>
                            <td align="center">电话：<?php echo ($apply["phone"]); ?></td>
                            <td align="center">专业：<?php echo ($apply["proname"]); ?></td>
                            <td align="center">保险：<?php echo ($apply["insurance"]); ?></td>
                            <td align="right">岗位名称：<?php echo ($apply["position"]); ?></td>
                        </tr>
                    </table>
                    <p>
                <span class="pull-left">
                  详细地址：<?php echo ($apply["address"]); ?>
                  <span class="wh40"></span>
                  校外老师：<?php echo ($apply["guide"]); ?>
                </span>
                        &nbsp;
                    </p>
                    <div class="ht15"></div>
                </div>
                <div class="ct">
                    <p style="text-indent: 0;">变更原因：</p>
                    <div><?php echo ($apply["reason"]); ?></div>
                </div>
            </div>
            <div class="ht90"></div>
            <p class="text-center">
                <button type='button' class="bt-btn1 style1" attr-opinion="1">同意</button>
                <span class="wh40"></span>
                <button  type="button" class="bt-btn1 style2" attr-opinion ="-1">不同意</button>
            </p>
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
        $('button').click(function(){
            var $id = $('input[type=hidden]').val();
            var $data = $(this).attr('attr-opinion');
            var $url = "<?php echo U('Apply/editCor');?>";
            $.post($url,{'opinion':$data,'id':$id},function(msg){
                if(msg.status==0){
                    layer.msg(msg.message,{icon:5,time:2000},function(){
                        window.location.href="/teacher.php/Apply/corporation";//跳转到列表页面
                    });
                }else{
                    layer.msg(msg.message,{icon:6,time:2000},function(){
                        window.location.href="/teacher.php/Apply/corporation";//跳转到列表页面
                    });
                }
            },'JSON');
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