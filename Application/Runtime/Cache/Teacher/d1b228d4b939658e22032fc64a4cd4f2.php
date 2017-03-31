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
                <div class="user">
    <p><img src="/Public/teacher/img/avatar1.jpg" alt="">
        <a href=""><?php echo getLoginUsername()?></a>
        <i></i>
    </p>
    <div class="ex">
        <p><a href="">个人信息</a></p>
        <p><a href="">修改密码</a></p>
        <p><a href="<?php echo U('Login/loginOut');?>">退出</a></p>
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
            <div class="ht10"></div>
            <div class="ui-table">
                <div class="hd">
                    <div class="ui-paging">
                        <div class="pull-left">
                            <a href="" class="cbox" attr-id="0"><i></i>全选</a>
                        </div>
                    </div>
                    <div class="tool">
                        <p>
                            <a href="/teacher.php?c=notice&a=add">新增</a>
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
                            <td><b>发布对象</b></td>
                            <td><b>对象类型</b></td>
                            <td><b>发布时间</b></td>
                            <td><b>状态</b></td>
                            <td><b>操作</b></td>
                        </tr>
                        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td><a href="" class="cbox" attr-id="<?php echo ($vo["id"]); ?>"></a></td>
                                <td><?php echo ($vo["title"]); ?></td>
                                <td><?php echo ($vo["teacher_name"]); ?></td>
                                <td><?php echo ($vo["publisher"]); ?></td>
                                <td><?php if($vo["type"] == 1): ?>学生<?php elseif($vo["type"] == 2): ?>教师<?php else: ?>不限<?php endif; ?></td>
                                <td><?php echo (substr($vo["pubtime"],0,10)); ?></td>
                                <td><?php if($vo["viewid"] == 0): ?>未读<?php else: ?>已读<?php endif; ?></td>
                                <td>
                                    <a href="/teacher.php?c=notice&a=cat&id=<?php echo ($vo["id"]); ?>">查看</a>
                                    <a href="javascript:void();" attr-id="<?php echo ($vo["id"]); ?>" attr-message="删除" id="yfycms-delete">删除</a>
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
                var $url = "<?php echo U('Notice/del');?>";
                $.post($url,{id:ids},function(msg){
                    if(msg.status==1){
                        layer.msg(msg.message,{icon:6},function(){
                            window.location.href="/teacher.php/Notice/index";
                        });
                    }else{
                        layer.msg(msg.message,{icon:5},function(){
                            window.location.href="/teacher.php/Notice/index";
                        });
                    }
                },'JSON');
            })
    });

    var SCOPE = {
        'jump_url' : '/index.php?m=teacher&c=notice&a=index',
        'set_status_url':'/index.php?m=teacher&c=notice&a=del',
    };

    $('.yfycms-table #yfycms-delete').on('click',function(){
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
</script>

</body>
</html>
<script>
</script>