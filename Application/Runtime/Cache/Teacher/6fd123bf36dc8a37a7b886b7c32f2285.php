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
                                申请审核
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i on">
                        <a href="<?php echo U('Practice/index');?>">
                            <p><i class="ico6"></i>
                                实习管理
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i ">
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

    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
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
            </div>
            <div class="tabs">
                <div class="ct">
                    <ul>
                        <li><a href="<?php echo U('Practice/index');?>" class="on">学生实习安排</a></li>
                        <li><a href="<?php echo U('Practice/corporation');?>">实习企业管理</a></li>
                        <li><a href="">合同管理</a></li>
                        <li><a href="">学生考评设置</a></li>
                    </ul>
                </div>
                <!--<a href="javascript:;" class="aw prev"></a><a href="javascript:;" class="aw next"></a>-->
            </div>
        </div>
    </div>
    <div class="ht15"></div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-filter">
                <div class="select">
                    <p><a href="">实习批次</a></p>
                    <div class="ex">
                        <div class="list" style="width: 190px;">
                            <p><a href="">【414】2009~2010批次</a></p>
                            <p><a href="">【413】2008~2009批次</a></p>
                            <p><a href="">【412】2008~2009批次</a></p>
                            <p><a href="">【414】2009~2010批次</a></p>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="">院系</a></p>
                    <div class="ex">
                        <div class="list">
                            <p><a href="">机械学院</a></p>
                            <p><a href="">水利学院</a></p>
                        </div>
                    </div>
                </div>
                <span class="wh10"></span>
                <div class="select">
                    <p><a href="">专业</a></p>
                    <div class="ex">
                        <div class="list">
                            <p><a href="">机械设计</a></p>
                            <p><a href="">电气自动化</a></p>
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
                <input type="text" class="text control-form" placeholder="学号/姓名">
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
                            <a href="">批量安排岗位</a>
                            &nbsp;
                            <a href="javascript:void(0)" id="cancel">取消安排岗位</a>
                            &nbsp;
                            <a href="">导入</a>
                            &nbsp;
                            <a href="">导出</a>
                        </p>
                    </div>
                </div>
                <div class="ct">
                    <div class="tb">
                        <table style="width: 140%;">
                            <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td><b>学号</b></td>
                                <td><b>姓名</b></td>
                                <td><b>班级</b></td>
                                <td><b>联系电话</b></td>
                                <td><b>实习单位</b></td>
                                <td><b>实习岗位</b></td>
                                <td><b>校内老师</b></td>
                                <td><b>安排方式</b></td>
                                <td><b>操作</b></td>
                            </tr>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                                    <td><a href="" class="cbox"></a></td>
                                    <td><?php echo ($v["student_id"]); ?></td>
                                    <td><?php echo ($v["stuname"]); ?></td>
                                    <td><?php echo ($v["classname"]); ?></td>
                                    <td><?php echo ($v["phone"]); ?></td>
                                    <td><?php echo ($v["corname"]); ?></td>
                                    <td><?php echo ($v["position"]); ?></td>
                                    <td><?php echo ($v["teacher"]); ?></td>
                                    <td><?php echo (setPracticeMode($v["mode"])); ?></td>
                                    <td>
                                        <?php if($v["mode"] == 1 ): ?><p>无需操作</p>
                                            <?php elseif($v["mode"] == 0): ?>
                                            <a href="/teacher.php/Practice/arrangement/id/<?php echo ($v["student_id"]); ?>">安排岗位</a><?php endif; ?>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!--<a href="javascript:;" class="aw prev"></a><a href="javascript:;" class="aw next"></a>-->
                </div>
            </div>
            <div class="ht35"></div>
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
<footer>
    <div class="container">
    </div>
</footer>
<script>
    $(function(){
       $('#cancel').click(function(){
          layer.msg('删除');
       });

       function  checkChange(){
           console.log($(this).text());
       }



      $('.bt').click(function(){
          $dept = $('#dept').text();
          $profession = $('#profession').text();
          $class = $('#class').text();
//          console.log($data);
         var $url = "<?php echo U('Practice/index');?>";
          $.ajax({
              'url':$url,
              'type':'post',
              'data': {
                  'dept':$dept,
                  'profession':$profession,
                  'class':$class
              },
              'dataType':'json',
              success:function(msg){

              }
          });
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