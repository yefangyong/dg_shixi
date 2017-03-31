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
                    <li><a href="" class="on">公告</a></li>
                    <li><a href="">系统消息</a></li>
                    <li><a href="">预警信息</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ht15"></div>
    <div class="ui-main">
        <div class="container">
            <div class="ht25"></div>
            <div class="ui-table">
                <div class="hd">
                    <div class="ui-paging">
                        <div class="pull-left">
                                <a href="" class="cbox" attr-id="0"><i></i>全选</a>
                            </div>
                    </div>
                    
                    <div class="tool">
                        <p>
                            <a href="javascript:void(0)" id="deleteall">删除</a>
                        </p>
                    </div>
                </div>
                <div class="ct">
                    <table class="yfycms-table">
                        <tbody>
                        <tr>
                            <td>&nbsp;</td>
                            <td><b>公告标题</b></td>
                            <td><b>发布人</b></td>
                            <td><b>发布时间</b></td>
                            <td><b>状态</b></td>
                            <td><b>操作</b></td>
                        </tr>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="" class="cbox" attr-id="<?php echo ($vo["id"]); ?>"></a></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><?php echo ($vo["name"]); ?></td>
                                <td><?php echo (substr($vo["pubtime"],0,10)); ?></td>
                                <td><?php if($vo["viewid"] == 0): ?>未读<?php else: ?>已读<?php endif; ?></td>
                                <td><a href="javascript:void(0)" attr-id="<?php echo ($vo["id"]); ?>" id="yfycms-cat"  class="ul">查看</a>&nbsp;<a href="javascript:void();" attr-id="<?php echo ($vo["id"]); ?>" attr-message="删除" class="del"  >删除</a>
                                    </td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ht35"></div>
            <div class="ui-paging">
                <?php echo ($page); ?>
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
    $('#deleteall').click(function(){
        var ids = new Array();
        $('.cbox').each(function(i){
            if($(this).attr('class')=='cbox on'){
                if($(this).attr('attr-id')>0)
                ids[ids.length]=$(this).attr('attr-id');
            }
        });
        if(ids.length>0)
            layer.confirm('您真的要删除选中记录吗?', {icon: 3, title:'删除记录'}, function(index){
                var $url = "<?php echo U('Notice/userdel');?>";
                $.post($url,{id:ids},function(msg){
                    if(msg.status==1){
                        layer.msg(msg.message,{icon:6},function(){
                            window.location.href="/index.php?m=student&c=notice&a=index";
                        });
                    }else{
                        layer.msg(msg.message,{icon:5},function(){
                            window.location.href="/index.php?m=student&c=notice&a=index";
                        });
                    }
                },'JSON');
            })
    });

    var SCOPE = {
        'cat_url' : '/index.php?m=student&c=notice&a=cat',
    }
    $(function(){
        /**
         * 编辑模型
         */
        $('.yfycms-table #yfycms-cat').on('click',function(){
            var id = $(this).attr('attr-id');
            var url = SCOPE.cat_url+'&id='+id;
            window.location.href=url;
        });
        $('.del').click(function(){
            var $data = $(this).attr('attr-id');
            layer.confirm('您真的要删除本条公告吗?', {icon: 3, title:'删除公告'}, function(index){
                var $url = "<?php echo U('Notice/userdel');?>";
                $.post($url,{id:$data},function(msg){
                    if(msg.status==1){
                        layer.msg(msg.message,{icon:6},function(){
                            window.location.href="/index.php?m=student&c=notice&a=index";
                        });
                    }else{
                        layer.msg(msg.message,{icon:5},function(){
                            window.location.href="/index.php?m=student&c=notice&a=index";
                        });
                    }
                },'JSON');
            });
        });
    });
</script>