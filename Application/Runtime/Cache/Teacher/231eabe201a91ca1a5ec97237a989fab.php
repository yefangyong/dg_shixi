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
    <style type="text/css">
    .suofang {MARGIN: auto;WIDTH: 200px;}
    .suofang img{MAX-WIDTH: 100%!important;HEIGHT: auto!important;width:expression(this.width > 200 ? "200px" :     this.width)!important;}
</style>
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
                    <li><a href="<?php echo U('Report/index');?>" class="on">周报</a></li>
                    <li><a href="<?php echo U('Report/month');?>">月报</a></li>
                    <li><a href="">实习总结</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p><span class="pull-right"><a href="<?php echo U('Report/index');?>">返回</a></span>
            <a href="" class="home"></a>
            <a href="">实习报告</a>
            &gt;
            <a href="" class="on">审核中</a>
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
                    <div class="ct">
                        <?php if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p class="suofang"><a href="<?php echo ($v); ?>" target="_blank"><img src="<?php echo ($v); ?>" alt=""></a></p><br /><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
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
</script>