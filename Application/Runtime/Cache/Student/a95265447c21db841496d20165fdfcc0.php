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
                    <div class="i">
                        <a href="/index.php/student/Report/index">
                            <p><i class="ico1"></i>
                                实习报告
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Apply/index">
                            <p><i class="ico2"></i>
                                我的申请
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i">
                        <a href="/index.php/student/Contact/index">
                            <p><i class="ico3"></i>
                                通讯录
                            </p>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="i on">
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
<!-------------------------------------- 头部结束 -------------------------------------->
<!-------------------------------------- 内容开始 -------------------------------------->
<main>
    <div class="ui-head">
        <div class="container">
            <div class="pull-right">
                <div class="user">
                    <p><img src="img/avatar1.jpg" alt="">
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
                    <li><a href="" class="on">实习申请</a></li>
                    <li><a href="">实习变更</a></li>
                    <li><a href="">请假申请</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ht15"></div>
    <div class="ui-main">

        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" id="yfycms-form">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业名称</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="select" name="cname" class="select" style="width: 210px;">
                                <div class="ex">
                                    <option value="">请选择企业名称</option>
                                    <?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">所在地址</label>
                        </div>
                        <div class="col-sm-4">
                            <select class="select"  class="select" style="width: 210px;">
                                <div class="ex">
                                    <option value="">请选择企业名地址</option>
                                    <?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["address"]); ?>"><?php echo ($vo["address"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">专业对口</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="text">
                                <p>
                                    <a href="javascript:void();" id="box1" class="rbox on"><i></i>对口</a>
                                    <input type="hidden" value="" id="box" name="profession"/>
                                    <span class="wh50"></span>
                                    <a href="javascript:void();" id="box2" class="rbox"><i></i>不对口</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">保险购买</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="text">
                                <p>
                                    <a href="" id="buy1" class="rbox on"><i></i>已购买</a>
                                    <input type="hidden" value="" id="buy" name="insurance"/>
                                    <span class="wh50"></span>
                                    <a href="" id="buy2" class="rbox"><i></i>未购买</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">职务</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="position" class="form-control" id="" style="width: 210px;" placeholder="请输入工作职务">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业联系人</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="" style="width: 210px;" placeholder="请输入企业联系人">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">联系电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="phone" id="" style="width: 210px;" placeholder="请输入联系电话">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">详细地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <input type="text" class="form-control" name="address" id="" style="width: 210px;" placeholder="请输入详细地址">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">开始日期</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control dtp" name="starttime" id="" style="width: 210px;" placeholder="例XXXX-XX-XX" value="2016-12-1">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">结束日期</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control dtp" name="endtime" id="" style="width: 210px;" placeholder="例XXXX-XX-XX">
                        </div>
                    </div>
                </form>
                <div class="ht90"></div>
                <p class="text-center">
                    <a href="javascript:void();" id="yfycms-button-submit" class="bt-btn1 style1">提交</a>
                    <span class="wh40"></span>
                    <a href="" class="bt-btn1 style2">取消</a>
                </p>
            </div>
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
<link rel="stylesheet" type="text/css" href="/Public/Student/css/bootstrap-datetimepicker.min.css">
<script type="text/javascript" src="/Public/Student/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="/Public/Student/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>
<script>
    $(function(){
        $('.dtp').datetimepicker({
            language: 'zh-CN',
            weekStart: 1,
            todayBtn:  1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
    });
</script>
</body>
</html>
<style>

</style>
<script>
    $("#box1").click(function(){
        $("#box").val('0');
    });

    $("#box2").click(function(){
        $("#box").val('1');
    });

    $("#buy1").click(function(){
        $("#buy").val('0');
    });

    $("#buy2").click(function(){
        $("#buy").val('1');
    });

    var SCOPE = {
        'save_url' : '/index.php?m=student&c=apply&a=index',
        'jump_url' : '/index.php?m=student&c=report&a=index',
    };
    $("#yfycms-button-submit").click(function(){
        var data=$("#yfycms-form").serializeArray();
        postData={};
        $(data).each(function(i){
            postData[this.name]=this.value;
        });
        console.log(postData);
        url=SCOPE.save_url;
        jump_url=SCOPE.jump_url;
        $.post(url,postData,function($result){
            if($result.status == 1){
                return dialog.success($result.message,jump_url);
            }else if($result.status == 0){
                return dialog.error($result.message);
            }
        },"JSON");
    });
</script>