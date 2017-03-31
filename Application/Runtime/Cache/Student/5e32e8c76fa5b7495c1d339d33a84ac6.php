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
                    <li><a href="<?php echo U('Apply/index');?>" class="on">实习申请</a></li>
                    <li><a href="<?php echo U('Apply/change');?>">实习变更</a></li>
                    <li><a href="<?php echo U('Apply/leave');?>">请假申请</a></li>
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
                        <!--<div class="col-sm-2">-->
                            <!--<label for="" class="control-label">企业名称</label>-->
                        <!--</div>-->
                        <!--<div class="col-sm-4">-->
                            <!--<div class="select" style="width: 210px;">-->
                                <!--<p ><a href="#">请选择企业名称</a></p>-->
                                <!--<div class="ex">-->
                                    <!--<div class="list">-->
                                        <!--<input type="hidden" name="cname" id="cname"/>-->
                                        <!--<?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                            <!--<p><a href="javascript:void(0);" onclick="selectCor(<?php echo ($vo["id"]); ?>);"  attr-id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a></p>-->
                                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                    <!--</div>-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</div>-->
                        <div class="col-sm-2">
                            <label for="" class="control-label">请输入企业名称</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="cname"  style="width: 210px;" placeholder="请输入公司名称">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">所在地址</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="address" id="address" style="width: 210px;" placeholder="请输入公司地址">
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
                            <label for="" class="control-label">实习岗位</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" name="position" class="form-control" id="" style="width: 210px;" placeholder="请输入工作职务">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业老师</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="guide" id="contact"  style="width: 210px;" placeholder="请输入企业联系人">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">企业老师电话</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="phone" id="telephone" style="width: 210px;" placeholder="请输入联系电话">
                        </div>
                        <div class="col-sm-2">
                            <label for="" class="control-label">详细地址</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="select" style="width: 210px;">
                                <input type="text" class="form-control" name="detailaddress" id="detailaddress" style="width: 210px;" placeholder="请输入详细地址">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">开始日期</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control dtp" name="starttime" id="" style="width: 210px;" placeholder="例XXXX-XX-XX" value="">
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
                    <a href="#" id="yfycms-button-submit" class="bt-btn1 style1">提交</a>
                    <span class="wh40"></span>
                    <a href="/index.php?m=student&c=apply" class="bt-btn1 style2">取消</a>
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
            minView: "month",//设置只显示到月份
            format : "yyyy-mm-dd",//日期格式
            autoclose:true,//选中关闭
            todayBtn: true//今日按钮
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
        'save_url' : '/index.php?m=student&c=apply&a=add',
        'jump_url' : '/index.php?m=student&c=apply&a=index',
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

    function selectCor(v) {
        for(var i=1; i<corporation.length;i++) {
            console.log(corporation);
            if(corporation[i]['id'] == v) {
                $('#cname').val(corporation[i]['name']);
                $('#ccname').val(corporation[i]['name']);
                $('#address').val(corporation[i]['address']);
                //$('#contact').val(corporation[i]['contact']);
                //$('#detailaddress').val(corporation[i]['detailaddress']);
                //$('#telephone').val(corporation[i]['telephone']);
            }
        }
    }

    var corporation = new Array();
    var i=0;
    <?php if(is_array($corporation)): $i = 0; $__LIST__ = $corporation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>corporation[<?php echo ($i); ?>] = new Array();
    corporation[<?php echo ($i); ?>]['id'] = <?php echo ($vo["id"]); ?>;
    corporation[<?php echo ($i); ?>]['name'] = '<?php echo ($vo["name"]); ?>';
    corporation[<?php echo ($i); ?>]['detailaddress'] = '<?php echo ($vo["detailaddress"]); ?>';
    corporation[<?php echo ($i); ?>]['address'] = '<?php echo ($vo["address"]); ?>';
    corporation[<?php echo ($i); ?>]['contact'] = '<?php echo ($vo["contact"]); ?>';
    corporation[<?php echo ($i); ?>]['telephone'] = '<?php echo ($vo["telephone"]); ?>';<?php endforeach; endif; else: echo "" ;endif; ?>
</script>