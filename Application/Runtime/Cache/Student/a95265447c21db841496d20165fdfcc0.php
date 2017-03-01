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
            $('.i').removeClass('on');
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
                        <p><a href="">修改密码</a></p>
                        <p><a href="">退出</a></p>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <ul>
                    <li><a href="/index.php?m=student&c=apply" class="on">实习申请</a></li>
                    <li><a href="/index.php?m=student&c=apply&a=change">实习变更</a></li>
                    <li><a href="/index.php?m=student&c=apply&a=leave">请假申请</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ht15"></div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-filter">


            <div class="ht30"></div>
            <div class="ui-table">
                <div class="hd">

                </div>
                <div class="ct">
                    <table class="yfycms-table">
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>学号</b></td>
                            <td><b>提交人</b></td>
                            <td><b>班级</b></td>
                            <td><b>提交时间</b></td>
                            <td><b>审核人</b></td>
                            <td><b>评审结果</b></td>
                            <td><b>操作</b></td>
                        </tr>

                            <tr>
                                <td><a href="" class="cbox"></a></td>
                                <td><?php echo ($list['studentno']); ?></td>
                                <td><?php echo ($list['name']); ?></td>
                                <td><?php echo ($list['classname']); ?></td>
                                <td><?php echo ($list['starttime']); ?></td>
                                <td><?php echo ($list['teacher']); ?></td>
                                <td><?php echo (getReportStatus($list['status'])); ?></td>
                                <td>
                                    <a href="javascript:void(0);" id="yfycms-view" attr-id="<?php echo ($list['id']); ?>">查看</a> <a href="javascript:void(0);" id="yfycms-delete" attr-message="删除" attr-id="<?php echo ($list['id']); ?>">删除</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
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
</body>
</html>
<style>

</style>
<script>

        var SCOPE = {
            'jump_url' : '/index.php?m=student&c=apply&a=index',
            'set_status_url':'/index.php?m=student&c=apply&a=delApply',
            'edit_url':'/index.php?m=student&c=apply&a=edit',
            'view_url':'/index.php?m=student&c=apply&a=viewApply'
        };

        $('#yfycms-delete').on('click',function(){
            var id = $(this).attr('attr-id');
            var message=$(this).attr('attr-message');
            var url = SCOPE.set_status_url;
            data={};
            data['id'] = id;

            layer.open({
                type : 0,
                title : '是否提交？',
                btn : ['yes','no'],
                icon :3,
                closeBtn : 2,
                content : '是否确认'+message,
                scorllbar : true,
                yes: function(){
                    todelete(url,data);
                },
            });
        });

        function todelete(){
            var url = SCOPE.set_status_url;
            //ajax的异步操作，交互性好
            $.post(
                    url,data,function(s){
                        if(s.status == 1){
                            return dialog.success('删除成功','');
                        }else{
                            return dialog.error('删除失败');
                        }
                    },"JSON");
        }

    /**
     * 查看模型
     */
    $('.yfycms-table #yfycms-view').on('click',function(){
        var id = $(this).attr('attr-id');
        var url = SCOPE.view_url+'&id='+id;
        window.location.href=url;
    });
</script>