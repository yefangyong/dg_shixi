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
    <script type="text/javascript" src="/Public/Student/js/H-ui-Admin.js"></script>
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
                    <p><img src="img/avatar1.jpg" alt="">
                        <a href=""><?php echo getLoginUsername() ?></a>
                        <i></i>
                    </p>
                    <div class="ex">
                        <p><a href="">个人信息</a></p>
                        <p><a href="/index.php/Student/Common/password">修改密码</a></p>
                        <p><a href="/index.php/Home/Login/logOut">退出</a></p>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <ul>
                    <li><a href="/index.php?m=student&c=apply">实习申请</a></li>
                    <li><a href="/index.php?m=student&c=apply&a=change" class="on">实习变更</a></li>
                    <li><a href="/index.php?m=student&c=apply&a=leave">请假申请</a></li>
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
                            <label for="" class="control-label">变更类型</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <input name="type" type="hidden" id="type"/>
                                <p id="corporation"><a href="javascript:void(0)">单位</a></p>
                                <div class="ex">
                                    <p><a href="javascript:void(0)" id="job">岗位</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">请选择企业名称</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <p id="cname"><a href="javascript:void();">请选择企业名称</a></p>
                                <input type="hidden" value="" name="cname"/>
                                <div class="ex">
                                    <?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p><a href="javascript:void();" id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></p><?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">专业对口</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="text">
                                <input type="hidden" value="0" id="box" name="profession"/>
                                <p>
                                    <a href="" id="box1" class="rbox on"><i></i>对口</a>
                                    <span class="wh50"></span>
                                    <a href="" id="box2" class="rbox"><i></i>不对口</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">保险购买</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="text">
                                <input type="hidden" value="0" id="buy" name="insurance"/>
                                <p>
                                    <a href="" id="buy1" class="rbox on"><i></i>已购买</a>
                                    <span class="wh50"></span>
                                    <a href="" id="buy2" class="rbox"><i></i>未购买</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">实习岗位</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="position" class="form-control" id="" style="width: 210px;" placeholder="请输入实习岗位名称">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">所在地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-4">
                                <input type="text" name="address" class="form-control" id="" style="width: 210px;" placeholder="请输入所在地址">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">联系电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="phone" class="form-control" id="" style="width: 210px;" placeholder="请输入联系电话">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业老师</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-4">
                                <input type="text" name="guide" class="form-control" id="" style="width: 210px;" placeholder="请输入企业老师">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">详细地址</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="detailaddress" class="form-control" style="width: 93%;" id="" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">变更原因</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="textarea" style="width: 93%;"><label for="">0/2000</label>
                                <textarea class="form-control" name="reason" placeholder="请输入详细的变更原因"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <p class="text-center">
                            <a href="javascript:void();" id="yfycms-button-submit" class="bt-btn1 style1">提交</a>
                            <span class="wh40"></span>
                            <a href="/index.php?m=student&c=apply&a=change" class="bt-btn1 style2">取消</a>
                        </p>
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
    $("#job").click(function(){
        window.location.href='/index.php/student/Apply/changeJob';
    });
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
        'save_url' : '/index.php?m=student&c=apply&a=changeCorporation',
        'jump_url' : '/index.php?m=student&c=apply&a=change',
    };
    $("#yfycms-button-submit").click(function(){
        var type = $('#corporation').text();
        $('input[name=type]').val(type);
        var cname = $('#cname').text();
        $('input[name=cname]').val(cname);
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