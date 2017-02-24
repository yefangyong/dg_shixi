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
                <ul>
                    <li><a href="" class="on">周报</a></li>
                    <li><a href="">月报</a></li>
                    <li><a href="">实习总结</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <a href="" class="home"></a>
            <a href="<?php echo U('Apply/index');?>">实习报告</a>
            >
            <a href="" class="on">未审核</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht15"></div>
            <div class="ui-article">
                <div class="hd">
                    <h3><?php echo ($report["title"]); ?></h3>
                    <p>
                        <?php echo ($report["course"]); ?>
                        <span class="wh30"></span>
                        <?php echo ($report["pubtime"]); ?>
                    </p>
                </div>
                <div class="ct" style="font-size: 15px">
                    <?php echo ($report["content"]); ?>
                </div>
            </div>
            <div class="ht25"></div>
            <div class="ui-form style3">
                <form class="form-horizontal" method="post" id="audit-form">
                    <input type="hidden" name="id" value="<?php echo ($report["rid"]); ?>">
                    <div class="form-group">
                        <div class="col-sm-1">
                            <label for="" class="control-label">意见</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="textarea">
                                <textarea class="form-control" name="suggestion"><?php echo ($report["suggestion"]); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1">
                            <label for="" class="control-label">结果</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="text">
                                <p>
                                <div style="width:400px;">
                                    <div id="star1"></div>
                                </div>
                                <span class="color1" id="result1" style="font-size: 18px !important;"></span>
                                    <input type="hidden" name="res" id="score">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-1">
                            <label for="" class="control-label">定位</label>
                        </div>
                        <div class="col-sm-11">
                            <div class="text">
                                <p><?php echo ($report["address"]); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <div class="col-sm-1">
                            &nbsp;
                        </div>
                        <div class="col-sm-11">
                            <button type="button" id="audit" class="bt-btn1 style1">提交审核</button>
                            <span class="wh40"></span>
                            <button type="reset" class="bt-btn1 style2">取消审核</button>
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
<script src="/Public/teacher/js/jquery.raty.js"></script>
<script type="text/javascript">
    //滑动星星评分组件
    $(function() {
        rat('star1', 'result1');
        function rat(star,result){
            star= '#' + star;
            result= '#' + result;
            $(star).raty({
                hints: ['10','20', '30', '40', '50','60', '70', '80', '90', '100'],
                path: "/Public/teacher/img",
                starOff: 'star-off-big.png',
                starOn: 'star-on-big.png',
                size: 30,
                start: 0,
                showHalf: false,
                target: result,
                targetKeep : true,
                click: function (score, evt) {
                    var text = $(result).text();
                    $('#score').val(text);
                }
            });
        }
    });
</script>
<script>
    $(function(){
        $('#audit').click(function(){
            var $data = $("#audit-form").serialize();
            var $url = "<?php echo U('Report/auditing');?>";
            $.ajax({
                'type':'post',
                'url':$url,
                'data':$data,
                'dataType':'json',
                success:function(msg){
                    if((msg.status==0)||(msg.status==-1)){
                        layer.msg(msg.message,{icon:5});
                    }else{
                        layer.msg(msg.message,{icon:6,time:2000},function(){
                            window.location.href = "/teacher.php/Report";
                        });
                    }
                }
            });
        });
    })
</script>
<!-------------------------------------- 尾部开始 -------------------------------------->
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