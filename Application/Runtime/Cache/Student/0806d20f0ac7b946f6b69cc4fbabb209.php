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
                    <li><a href="<?php echo U('Report/index');?>" class="on">周报</a></li>
                    <li><a href="<?php echo U('Report/month');?>">月报</a></li>
                    <li><a href="">实习总结</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="ui-path">
        <p><span class="pull-right"><a href="/index.php/student/Report/index" style="font-size: 15px">返回</a></span>
            <a href="" class="home"></a>
            <a href=""style="font-size: 15px">实习报告</a>
            >
            <a href="" class="on"style="font-size: 15px">新增实习报告</a>
        </p>
    </div>
    <div class="ui-main">
        <div class="container">
            <div class="ht10"></div>
            <div class="ui-form style2">
                <form class="form-horizontal" id="yfycms-form">
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">标题</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="" style="width: 210px;" placeholder="请输入实习报告标题" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">内容</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="textarea"><label for="">0/2000</label>
                                <textarea class="form-control" name="content" placeholder="请输入实习报告标题"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">照片</label>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-5">
                                <input id="file_upload"  type="file" multiple="true" >
                                <img style="display: none" id="upload_org_code_img" src="" width="150" height="150">
                                <input id="file_upload_image" name="pic" type="hidden" multiple="true" value="">
                                <div class="row" id="uploadimagediv">
                                    <?php if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v): ?><div class="col-xs-3" >
                                            <img class="img-square" src="<?php echo ($v); ?>">
                                            <div class="closeLayer"  onClick="delcfm('<?php echo ($v); ?>')" href="#" id="huajiao">
                                                <img  src="/Public/Student/img/close.png">
                                            </div>
                                        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <label for="" class="control-label">地址</label>
                        </div>
                        <div class="col-sm-10">
                            <div class="select" style="width: 510px;">
                                <input type="text" id="address" name="address" class="form-control" id="" style="width: 510px;" placeholder="请输入实习地址">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-10" style="height:300px;">
                           <div id="container" style="width:300px;height:300px;">
                                </div>
                        </div>
                    </div>
                    <div class="ht15"></div>
                    <div class="form-group">
                        <div class="col-sm-2" >
                        </div>
                        <div class="col-sm-10">
                            <button type="button" class="bt style1" style="width: 120px;" id="yfycms-button-submit">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<!-------------------------------------- 内容结束 -------------------------------------->
</body>
</html>
<script type="text/javascript">
var SCOPE = {
    'save_url' : '/index.php?m=student&c=report&a=add',
    'jump_url' : '/index.php?m=student&c=report&a=index',
    'ajax_upload_image_url' : '/index.php?m=student&c=image&a=ajaxuploadimage',
    'ajax_upload_swf' : '/Public/Student/js/party/uploadify.swf',
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
<link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
<script src="http://cache.amap.com/lbs/static/es5.min.js"></script>
<script src="http://webapi.amap.com/maps?v=1.3&key=a91f6f04d6b62e16ca47de6879a7e0a7"></script>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=bffdffb14ce6de2b05e646279eda8dbc&plugin=AMap.Walking"></script>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=bffdffb14ce6de2b05e646279eda8dbc&plugin=AMap.Geocoder"></script>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=bffdffb14ce6de2b05e646279eda8dbc&plugin=AMap.CitySearch"></script>

<script>

    var map, geolocation;
    //加载地图，调用浏览器定位服务
    map = new AMap.Map('container', {
        dragEnable: false,
        zoomEnable: false
    });

    function regeocoder(lnglatXY) {  //逆地理编码
        var geocoder = new AMap.Geocoder({
            radius: 1000,
            extensions: "all"
        });
        geocoder.getAddress(lnglatXY, function (status, result) {
            if (status === 'complete' && result.info === 'OK') {
              //alert(lnglatXY[0], lnglatXY[1],result.regeocode.formattedAddress); //返回地址描述
              $('#address').val(result.regeocode.formattedAddress);
            }
        });
    }

    function getCurrentAddress (){
        map.plugin('AMap.Geolocation', function() {
                geolocation = new AMap.Geolocation({
                enableHighAccuracy: true,//是否使用高精度定位，默认:true
                timeout: 10000,          //超过10秒后停止定位，默认：无穷大
                buttonOffset: new AMap.Pixel(10, 20),//定位按钮与设置的停靠位置的偏移量，默认：Pixel(10, 20)
                zoomToAccuracy: true,      //定位成功后调整地图视野范围使定位位置及精度范围视野内可见，默认：false
                buttonPosition:'RB'
                });
            map.addControl(geolocation);
            geolocation.getCurrentPosition();
            AMap.event.addListener(geolocation, 'complete', onComplete);//返回定位信息
            AMap.event.addListener(geolocation, 'error', onError);      //返回定位出错信息
        });
        //解析定位结果
        function onComplete(data) {
            regeocoder([data.position.getLng(),data.position.getLat()]);
        }
        //解析定位错误信息
        function onError(data) {
            alert("定位失败"+JSON.stringify(data));
        }
    }
    getCurrentAddress();





</script>