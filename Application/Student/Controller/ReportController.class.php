<?php
namespace Student\Controller;
use Think\Controller;
class ReportController extends CommonController {
   public function index() {
       $userId = $_SESSION['adminUser'];
       $data = array(
           'myReport.student_id'=>$userId['studentno'],
       );
       $status = I('get.status',123);
       if($status == 0 || $status == 1) {
           $data['status'] = $status;
       }
       $data['stu_del'] = 1;
       import('ORG.Util.Page');
       // 每页显示记录数
       $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
       $count = D('ReportView')->where($data)->count();
       // 实例化分页类 传入总记录数和每页显示的记录数
       $page = new \Think\Page($count,$listRows);
       $show = $page->show();
       $currentPage = I(C('VAR_PAGE'),1);
       $corporation = M('Corporation')->where('id='.$userId['corporation_id'])->find();
       $list = D('ReportView')->where($data)->order('myReport.pubtime desc')->page($currentPage.','.$listRows)->select();
       $this->assign('page',$show);
       $this->assign('corporation',$corporation['name']);
       $this->assign('data',$list);
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
            $userId = $_SESSION['adminUser'];
            $conidition = [
                'student_id'=>$userId['studentno'],
                'status'=>1
            ];
            $practice = M('Practice')->where($conidition)->find();
            if(!$practice) {
                return show(0,'实习未申请或者未安排!');
            }
            $_POST['student_id'] = $userId['studentno'];
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
        $id = I('post.id',0,'intval');
        if(!isset($id) || empty($id)) {
            return show(0,'删除失败');
        }
        $res = D('Report')->delReport($id);
        if($res) {
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