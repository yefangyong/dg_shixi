<?php
namespace Student\Controller;
use Think\Controller;

class NoticeController extends Controller {
    public function index() {
        $data = D('Notice')->getNoticeData();
        $this->assign('data',$data);
        $this->display();
    }
}