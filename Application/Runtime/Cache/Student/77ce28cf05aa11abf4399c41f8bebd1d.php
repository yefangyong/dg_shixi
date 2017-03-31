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

<style type="text/css">
    .suofang {MARGIN: auto;WIDTH: 200px;}
    .suofang img{}

.img-square{
/*border: 1px solid red;*/
margin-left: 30px;
margin-top: 10px;
MAX-WIDTH: 100%!important;
HEIGHT: auto!important;width:expression(this.width > 200 ? "200px" :     this.width)!important;
}

.closeLayer{

/*display: none;*/

z-index: 99;

position:absolute; /*绝对定位*/

left:230px; /*位置自己看着调整，在图片上方*/

top:5px; 

/*border: 1px solid red;*/

}
</style>
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
                    <li><a href="" class="on">周报</a></li>
                    <li><a href="">月报</a></li>
                    <li><a href="">实习总结</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p><span class="pull-right"><a href="/index.php/student/report/index" style="font-size: 15px">返回</a></span>
            <a href="/index.php/student/report/index" class="home"></a>
            <a href="/index.php/student/report/index" style="font-size: 15px">实习报告</a>
            >
            <a href="" class="on" style="font-size: 15px">实习状态</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht15"></div>
            <div class="ui-article">
                <div class="hd">
                    <h3><?php echo getLoginUsername();?>的实习报告
                        
                        <small><?php echo ($list['course']); ?><span class="wh30"></span><?php echo ($list['pubtime']); ?></small>
                    </h3>
                </div>
                <div class="ct" style="font-size: 20px;">
                    <?php echo ($list['content']); ?>
                </div>
                <hr>
                <div class="ct">
                    <div class="row">
                    <?php if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v): ?><div class="col-xs-3" >
                        <img class="img-square" src="<?php echo ($v); ?>">
                    </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
            <div class="ht25"></div>
            <div class="ui-form style3">
                <form class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-1">
                            <label for="" class="control-label">意见</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="text">
                                <p><span class="color1"><?php echo ($list['suggestion']); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1">
                            <label for="" class="control-label">状态</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="text">
                                <p><span class="color1"><?php echo (getReportStatus($list['status'])); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1">
                            <label for="" class="control-label">定位</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="text">
                                <p><?php echo ($list['address']); ?></p>
                            </div>
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
</body>
</html>
<style>

</style>
<script>
function delcfm(){

}
    $(function(){

    });
</script>