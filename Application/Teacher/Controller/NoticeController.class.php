<?php
namespace Teacher\Controller;
use Think\Controller;

class NoticeController extends Controller {

    public function index() {
        $teacher = $_SESSION['adminUser'];
        $department = I('get.department',0);
        $class = I('get.class',0);
        switch($teacher['type']){
            case 0:
                $class = $teacher['class_id'];
                break;
            case 1:
                $department = $teacher['department_id'];
                break;
        }
        if($department)
            $map[] = 'department_id='.$department.'';
        $profession = I('get.profession',0);
        if($class)
            $map[] = 'class_id = '.$class;
        if($_POST['new']&&$user_id){
            $map[]="id NOT IN(SELECT notice_id FROM dg_notice_view WHERE user_id=$user_id)";
        }
        if($_POST['read']&&$user_id){
            $map[]="id ".($_POST['read']==1 ? 'NOT' : '')." IN(SELECT notice_id FROM dg_notice_view WHERE user_id=$user_id and type=0)";
        }
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('NoticeView')->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $data = D("NoticeView")->page($currentPage.','.$listRows)->select();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        $this->display();
    }

    public function add() {
        if($_POST) {
            if(!$_POST['title'] || !isset($_POST['title'])) {
                return show(0,'公告标题不得为空!');
            }
            if(!$_POST['content'] || !isset($_POST['content'])) {
                return show(0,'公告内容不得为空!');
            }
            $user = $_SESSION['adminUser']['name'];
            $tid = M('Teacher')->where('name="'.$user.'"')->find();
            $_POST['user_id'] = $tid['teacherno'];
            $_POST['pubtime'] = date("Y-m-d :H:i:s");
            $rel = M('Notice')->add($_POST);
            if($rel) {
                return show(1,'发布成功');
            }else {
                return show(0,'发布失败');
            }
        }else {
            $teacher = $_SESSION['adminUser'];
            switch($teacher['type']){
                case 0:
                    $classes = D('class')->where("master_no='".$teacher['teacherno']."'")->select();
                    break;
                case 1:
                    $departments = D('department')->where("id='".$teacher['department_id']."'")->select();
                    $classes = D('class')->where("dep_id='".$teacher['department_id']."'")->select();
                    break;
                case 2:
                    $departments = D('department')->select();
                    $classes = D('class')->select();
                    break;
            }
            $this->assign("department", $departments);
            $this->assign("class", $classes);
            $this->display();
        }
    }

    public function del() {
        $id = $_POST['id'];
        if(is_array($id))
            $rel = M('Notice')->where("`id` IN(".implode(',', $id).") ")->delete();
        else
            $rel = M('Notice')->where('id='.$id)->delete();
        if($rel) {
            return show(1,'删除成功!');
        }else {
            return show(0,'删除失败!');
        }
    }
}