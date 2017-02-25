<?php
namespace Student\Controller;
use Think\Controller;

class NoticeController extends Controller {
    public function index() {
        $data = D('Notice')->getNoticeData();
        $this->assign('data',$data);
        $this->display();
    }

    public function cat () {
        $id = $_GET['id'];
        $rel = M('Notice')->where('id='.$id)->find();
        if(!$rel) {
            return show(0,'此公告不存在!');
        }else {
            $pub = M('Teacher')->where('teacherno='.$rel['user_id'])->find();
            $rel['pub'] = $pub['name'];
            $this->assign('list',$rel);
            $this->display();
        }
    }
}