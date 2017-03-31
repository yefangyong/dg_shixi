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
            </div>
            <div class="tabs">
                <div class="ct">
                    <ul>
                        <li><a href="<?php echo U('Apply/index');?>" class="on">实习申请</a></li>
                        <!--<li><a href="<?php echo U('Apply/corporation');?>" class="on">实习单位变更</a></li>-->
                        <!--<li><a href="<?php echo U('Apply/position');?>">实习岗位变更</a></li>-->
                        <li><a href="<?php echo U('Apply/change');?>">实习变更</a></li>
                        <li><a href="<?php echo U('Apply/leave');?>">请假申请</a></li>
                    </ul>
                </div>
                <a href="javascript:;" class="aw prev"></a><a href="javascript:;" class="aw next"></a>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p><span class="pull-right"><a href="<?php echo U('Apply/index');?>">返回</a></span>
            <a href="" class="home"></a>
            <a href="<?php echo U('Apply/index');?>">实习申请</a>
            &gt;
            <a href="" class="on">实习申请批阅</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht15"></div>
            <div class="ui-article">
                <div class="hd">
                    <h3><?php echo ($apply["stuname"]); ?>的实习申请</h3>
                </div>
            </div>
            <div class="ht25"></div>
                <div class="ui-head1">
                    <p>个人信息</p>
                </div>
                <div class="ht15"></div>
                <div class="ui-article">
                    <div class="hd">
                        <table>
                            <tr>
                                <input type="hidden" name="id" value="<?php echo ($apply["pid"]); ?>">
                                <td align="left">学号：<?php echo ($apply["studentno"]); ?></td>
                                <td align="center">姓名：<?php echo ($apply["stuname"]); ?></td>
                                <td align="right">联系方式：<?php echo ($apply["phone"]); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
                <div class="ht25"></div>
                <div class="ui-head1">
                    <p>公司信息</p>
                </div>
                <div class="ht15"></div>
                <div class="ui-article">
            <div class="hd">
                <table>
                    <tr>
                        <td align="left">企业名称：<?php echo ($apply["cname"]); ?></td>
                        <td align="">企业地址：<?php echo ($apply["address"]); ?></td>
                        <td align="">专业对口：<?php echo (isMajor($apply["profession"])); ?></td>
                        <td align="">保险购买：<?php echo (isPayInsurance($apply["insurance"])); ?></td>
                    </tr>
                    <tr>
                        <td align="left">职务：<?php echo ($apply["position"]); ?></td>
                        <td align="">企业老师：<?php echo ($apply["guide"]); ?></td>
                        <td align="" colspan="2">联系电话：<?php echo ($apply["pracphone"]); ?></td>
                    </tr>
                    <tr>
                        <td align="left">开始时间：<?php echo (substr($apply["starttime"],0,10)); ?></td>
                        <td align="">结束时间：<?php echo (substr($apply["endtime"],0,10)); ?></td>
                        <td align="" colspan="2"></td>
                    </tr>
                </table>
                <p>
                <span class="pull-left">
                  详细地址：<?php echo ($apply["detailaddress"]); ?>
                </span>
                </p>
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
           var $url = "<?php echo U('Apply/editApply');?>";
           $.post($url,{'opinion':$data,'id':$id},function(msg){
                   if(msg.status==0){
                       layer.msg(msg.message,{icon:5,time:2000},function(){
                           window.location.href="/teacher.php/Apply";//跳转到列表页面
                       });
                   }else{
                       layer.msg(msg.message,{icon:6,time:2000},function(){
                           window.location.href="/teacher.php/Apply";//跳转到列表页面
                       });
                   }
           },'JSON');
       });
    });
</script>


</body>
</html>
<script>
</script>