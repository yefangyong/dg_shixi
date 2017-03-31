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
                    <li><a href="<?php echo U('Student/index');?>">学生管理</a></li>
                    <?php if($_SESSION['adminUser']['type'] == 2): ?><li><a href="<?php echo U('Student/teacher');?>" >教师管理</a></li>
                    <li><a href="<?php echo U('Student/classes');?>" class="on">班级管理</a></li>
                    <li><a href="<?php echo U('Student/department');?>">部门管理</a></li><?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p>
            <span class="pull-right"><a href="<?php echo U('Student/department');?>">返回</a></span>
            <a href="" class="home"></a>
            <a href="<?php echo U('Student/department');?>">部门管理</a>
            >
            <a href="javascript:void(0)" class="on">新增系部信息</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" method="post" id="studentForm">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>班级名称</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="classname" style="width: 210px;" placeholder="请输入系名" id="classname" onblur="isEmpty(this.id)">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>年级</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="gra"><a href="javascript:void(0);">请选择所在年级</a></p>
                                <div class="ex">
                                    <p><a href="javascript:void(0);" onclick="setVal('grade',2015);">2015级</a></p>
                                    <p><a href="javascript:void(0);" onclick="setVal('grade',2016);">2016级</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>班主任</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="teacher"><a href="javascript:void(0);">请选择班主任</a></p>
                                <div class="ex">
                                    <?php if(is_array($teacher)): $i = 0; $__LIST__ = $teacher;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)" onclick="setVal('master_no',<?php echo ($v["teacherno"]); ?>);"><?php echo ($v["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label"><i></i>系部</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="dept"><a href="javascript:void(0);">请选择院系部</a></p>
                                <div class="ex">
                                    <?php if(is_array($dept)): $i = 0; $__LIST__ = $dept;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p><a href="javascript:void(0)" onclick="setVal('dep_id',<?php echo ($v["id"]); ?>);"><?php echo ($v["dname"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            &nbsp;
                        </div>
                        <div class="col-sm-10">
                            <button type='button' class="bt-btn1 style1">保存</button>
                            <span class="wh40"></span>
                            <button type="reset" class="bt-btn1 style2">取消</button>
                        </div>
                    </div>
                    <input type="hidden" name="master_no" id="master_no" value="" />
                    <input type="hidden" name="dep_id" id="dep_id" value="" />
                    <input type="hidden" name="grade" id="grade" value="">
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
<script>
    function setVal(id, v){
        $('#'+id).val(v);
    }
    $(function(){

      $('button[type=button]').click(function(){
          var $dname = $('#classname').val();
          if($dname==''){
              layer.msg('班级为必填项！');
              return;
          }
          var $master_no = $('#master_no').val();
          if($master_no==''){
              layer.msg('班主任为必填项！');
              return;
          }
          var $dep_id = $('#dep_id').val();
          if($dep_id==''){
              layer.msg('系部为必填项！');
              return;
          }
          $data = $('#studentForm').serialize();
          var $url = "<?php echo U('Student/addclass');?>";
          $.ajax({
              'url':$url,
              'type':'post',
              'data':$data,
              'dataType':'json',
              success:function(msg){
                if(msg.status==0){
                    layer.msg(msg.message,{icon:5});
                }else{
                    layer.msg(msg.message,{icon:6},function(msg){
                        window.location.href="/teacher.php/Student/classes";
                    });
                }
              }
          });
      });
    });
    function isEmpty(x)
    {
        var y = document.getElementById(x).value;
        if(y==''){
            layer.msg('此项为必填项',{icon:5});
        }
    }
</script>

</body>
</html>
<script>
</script>