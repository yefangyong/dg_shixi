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
                <p><img src="/Public/Student/img/avatar1.jpg" alt="">
                    <a href=''><?php echo getLoginUsername();?></a>
                    <i></i>
                </p>
                <div class="ex">
                    <p><a href="">个人信息</a></p>
                    <p><a href="">修改密码</a></p>
                    <p><a href="/index.php/student/login/logout">退出</a></p>
                </div>
            </div>
          </div>
          <div class="tabs">
            <ul>
              <li><a href="" class="on">周报</a></li>
              <li><a href="">月报</a></li>
              <li><a href="">实习总结</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="ht15"></div>
      <div class="ui-main">
        <div class="container">
          <div class="ht10"></div>
          <div class="ui-filter">
            <div class="select">
              <p><a href="">时间</a></p>
              <div class="ex">
                <div class="time">
                  <p>月份</p>
                  <div class="ct">
                    <table>
                      <tr>
                        <td><a href="">1</a></td>
                        <td><a href="">2</a></td>
                        <td><a href="" class="on">3</a></td>
                        <td><a href="">4</a></td>
                        <td><a href="">5</a></td>
                      </tr>
                      <tr>
                        <td><a href="">6</a></td>
                        <td><a href="">7</a></td>
                        <td><a href="">8</a></td>
                        <td><a href="">9</a></td>
                        <td><a href="">10</a></td>
                      </tr>
                      <tr>
                        <td><a href="">11</a></td>
                        <td><a href="">12</a></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <span class="wh10"></span>
            <div class="select">
              <p><a href="">批阅情况</a></p>
              <div class="ex">
                <div class="list">
                  <p><a href="">已批阅</a></p>
                  <p><a href="">未批阅</a></p>
                </div>
              </div>
            </div>
            <span class="wh10"></span>
            <a href="" class="bt">查询</a>
          </div>
          <div class="ht30"></div>
          <div class="ui-addone">
            <p>
              <a href="/index.php/student/report/add" class="bt add">补交实习报告</a>
            </p>
          </div>
          <div class="ht15"></div>
          <div class="ui-table">
            <div class="hd">
              <div class="tool">
                <p>
                  <a href="/index.php/student/report/add">新增</a>
                  &nbsp;
                  <a href="">导入</a>
                  &nbsp;
                  <a href="">导出</a>
                  &nbsp;
                  <a href="">删除</a>
                </p>
              </div>
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
                    <td><b>实习单位</b></td>
                    <td><b>评审结果</b></td>
                    <td><b>操作</b></td>
                  </tr>
                  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <td><a href="" class="cbox"></a></td>
                      <td><?php echo ($vo["studentno"]); ?></td>
                      <td><?php echo ($vo["name"]); ?></td>
                      <td><?php echo ($vo["classname"]); ?></td>
                      <td><?php echo ($vo["pubtime"]); ?></td>
                      <td><?php echo ($corporation); ?></td>
                      <td><?php echo (status($vo["status"])); ?></td>
                      <td>
                        <a href="javascript:void(0);" attr-id="<?php echo ($vo["id"]); ?>" id="yfycms-view">查看</a>
                        <a href="javascript:void(0);" <?php if($vo["status"] == 0): ?>id="yfycms-edit"<?php endif; ?> attr-id="<?php echo ($vo["id"]); ?>">编辑</a>
                        <a href="javascript:void(0);" attr-id="<?php echo ($vo["id"]); ?>" attr-message="删除" id="yfycms-delete">删除</a>
                      </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>      
                </tbody>
              </table>
            </div>
          </div>
          <div class="ht35"></div>
          <div class="ui-paging">
            <span>共15页，共143条记录</span>
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
    'jump_url' : '/index.php?m=student&c=report&a=index',
    'set_status_url':'/index.php?m=student&c=report&a=del',
    'edit_url':'/index.php?m=student&c=report&a=edit',
      'view_url':'/index.php?m=student&c=report&a=view'
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

  /**
   * 编辑模型
   */
  $('.yfycms-table #yfycms-edit').on('click',function(){
    var id = $(this).attr('attr-id');
    var url = SCOPE.edit_url+'&id='+id;
    window.location.href=url;
  });

  /**
   * 查看模型
   */
  $('.yfycms-table #yfycms-view').on('click',function(){
    var id = $(this).attr('attr-id');
    var url = SCOPE.view_url+'&id='+id;
    window.location.href=url;
  });
</script>