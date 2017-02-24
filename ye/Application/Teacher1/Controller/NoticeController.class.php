<?php
namespace Teacher\Controller;
use Think\Controller;

class NoticeController extends Controller {

    public function index() {
        $data = D('NoticeView')->select();
        $this->assign('data',$data);
        $this->display();
    }

    public function add() {
        if($_POST) {
            if(!$_POST['class_name'] || !isset($_POST['class_name'])) {
                return show(0,'请选择发布对象!');
            }
            if(!$_POST['title'] || !isset($_POST['title'])) {
                return show(0,'公告标题不得为空!');
            }
            if(!$_POST['content'] || !isset($_POST['content'])) {
                return show(0,'公告内容不得为空!');
            }
            $class_id = M('Class')->where('classname="'.$_POST['class_name'].'"')->find();
            if(!$class_id) {
                return show(0,'发布对象不存在');
            }
            $_POST['class_id'] = $class_id['id'];

            $user = $_SESSION['adminUser']['username'];
            $tid = M('Teacher')->where('name="'.$user.'"')->find();
            if(!$tid) {
                return show(0,'不存在此教师!');
            }
            $_POST['user_id'] = $tid['teacherno'];
            unset($_POST['class_name']);
            $_POST['pubtime'] = date("Y-m-d :H:i:s");
            $rel = M('Notice')->add($_POST);
            if($rel) {
                return show(1,'发布成功');
            }else {
                return show(0,'发布失败');
            }
        }else {
            $list = M('Class')->select();
            $this->assign('list',$list);
            $this->display();
        }
    }

    public function del() {
        $id = $_POST['id'];
        $rel = M('Notice')->where('id='.$id)->delete();
        if($rel) {
            return show(1,'删除成功!');
        }else {
            return show(0,'删除失败!');
        }
    }
}