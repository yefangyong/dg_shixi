<?php
namespace Student\Controller;
use Think\Controller;
class ReportController extends CommonController {
   public function index() {
       $user = $_SESSION['adminUser']['username'];
       $sid = $_SESSION['adminUser']['no'];
       $cid = M('Student')->where('studentno='.$sid)->find();
       import('ORG.Util.Page');
       // 每页显示记录数
       $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
       $count = D('Report')->getWeekReportCountById($cid['studentno']);
       // 实例化分页类 传入总记录数和每页显示的记录数
       $page = new \Think\Page($count,$listRows);
       $show = $page->show();
       $currentPage = I(C('VAR_PAGE'),1);
       $corporation = M('Corporation')->where('id='.$cid['corporation_id'])->find();
       $data = D('Report')->getWeekReportData($user,$currentPage,$listRows);
       $this->assign('page',$show);
       $this->assign('corporation',$corporation['name']);
       $this->assign('data',$data);
       $this->assign('totalCount',$count);
       $this->assign('numPerPage',$listRows);
       $this->assign('currentPage',$currentPage);
       $this->display();
   }

    public function add() {
        if($_POST) {
            if(!$_POST['title'] || !isset($_POST['title'])) {
                return show(0,'实习标题不得为空');
            }
            if(!$_POST['content'] || !isset($_POST['content'])) {
                return show(0,'实习内容不得为空');
            }
            if(!$_POST['address'] || !isset($_POST['address'])) {
                return show(0,'实习地址不得为空');
            }
            if($_POST['id']) {
                return $this->save($_POST);
            }
            $user = $_SESSION['adminUser']['username'];
            $sid = D('Student')->getStudentId($user);
            $_POST['student_id'] = $sid['studentno'];
            $_POST['pubtime'] = date('Y-m-d :H:i:s',time());
            
            //新增
            $rel = D('Report')->insert($_POST);
            if($rel) {
                return show(1,'提交成功');
            }else{
                return show(0,'提交失败');
            }
        }else {
            $this->display();
        }
    }

    public function del() {
        $id = $_POST['id'];
       $rel = M('Report')->where('id='.$id)->delete($id);
        if($rel) {
            return show(1,'删除成功!');
        }else {
            return show(0,'删除失败!');
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $data = D('Report')->getReportById($id);
        $this->assign('data',$data);
        $this->display();
    }

    public function save() {
        $id = $_POST['id'];
        unset($_POST['id']);
        $rel = D('Report')->UpdateReportById($id,$_POST);
        if($rel) {
            return show(1,'提交成功!');
        }else {
            return show(0,'提交失败!');
        }
    }

    public function view() {
        $id = $_GET['id'];
        $rel = D('Report')->getReportById($id);
        if(!$rel) {
            return show(0,'不存在此报告!');
        }else {
           $this->assign('list',$rel);
            $this->display();
        }
    }
}