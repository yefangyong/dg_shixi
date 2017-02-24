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
            if(!$_POST['pro_name'] || !isset($_POST['pro_name'])) {
                return show(0,'请选择发布对象!');
            }
            if(!$_POST['title'] || !isset($_POST['title'])) {
                return show(0,'公告标题不得为空!');
            }
            if(!$_POST['content'] || !isset($_POST['content'])) {
                return show(0,'公告内容不得为空!');
            }
            $pro_id = M('profession')->where('name="'.$_POST['pro_name'].'"')->find();
            if(!$pro_id) {
                return show(0,'发布对象不存在');
            }
            $_POST['pro_id'] = $pro_id['id'];

            $user = $_SESSION['adminUser']['username'];
            $tid = M('Teacher')->where('name="'.$user.'"')->find();
            $_POST['user_id'] = $tid['teacherno'];
            unset($_POST['pro_name']);
            $_POST['pubtime'] = date("Y-m-d :H:i:s");
            $rel = M('Notice')->add($_POST);
            if($rel) {
                return show(1,'发布成功');
            }else {
                return show(0,'发布失败');
            }
        }else {
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