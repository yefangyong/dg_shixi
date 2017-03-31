<?php
namespace Teacher\Controller;
use Think\Controller;

class NoticeController extends Controller {

    public function index() {
        $teacher = $_SESSION['adminUser'];
        $user_id = $teacher['teacherno'];
        $dep_id = $teacher['dep_id'];
        $class_id = $teacher['class_id'];
        $map[]="dg_notice.id NOT IN(SELECT notice_id FROM dg_notice_view WHERE user_id=$user_id and type=1)";
        $map[]="(dg_notice.dep_id=$dep_id or dg_notice.class_id=$class_id or school=1)";
        $map[]="(user_id=$user_id or dg_notice.type!=1)";
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('Notice')->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $data = D("Notice")->join("LEFT JOIN dg_teacher ON dg_notice.user_id=dg_teacher.teacherno")->join("LEFT JOIN dg_notice_view ON dg_notice.id=dg_notice_view.notice_id and dg_notice_view.type=0 and dg_notice_view.user_id=$user_id")->join("LEFT JOIN dg_class ON dg_notice.class_id=dg_class.id")->join("LEFT JOIN dg_department ON dg_notice.dep_id=dg_department.id ")->order(array("pubtime"=>"desc"))->page($currentPage.','.$listRows)->field("dg_notice.*,IF(dg_notice.school!=0,'所有人',IF(dg_notice.class_id!=0,dg_class.classname,IF(dg_notice.dep_id!=0, dg_department.dname,'所有'))) publisher,dg_department.dname,IFNULL(dg_notice_view.id,0) viewid, dg_teacher.name teacher_name")->select();
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

    public function cat(){
        $id = I('get.id');
        $teacher = $_SESSION['adminUser'];
        $user_id = $teacher['teacherno'];
        $info = D("Notice")->join("LEFT JOIN dg_teacher ON dg_notice.user_id=dg_teacher.teacherno")->join("LEFT JOIN dg_notice_view ON dg_notice.id=dg_notice_view.notice_id and dg_notice_view.type=0 and dg_notice_view.user_id=$user_id")->join("LEFT JOIN dg_class ON dg_notice.class_id=dg_class.id")->join("LEFT JOIN dg_department ON dg_notice.dep_id=dg_department.id and dg_notice_view.type=0 and dg_notice_view.user_id=$user_id")->where("dg_notice.id=".$id)->field("dg_notice.*,IF(dg_notice.type=0,'所有人',IF(dg_notice.class_id!=0,dg_class.classname,IF(dg_notice.dep_id!=0, dg_department.dname,'所有'))) publisher,dg_department.dname,IFNULL(dg_notice_view.id,0) viewid, dg_teacher.name teacher_name")->select();
        D('Notice_view')->where('notice_id='.$id." and user_id=".$_SESSION['adminUser']['teacherno'])->delete();
        $rel = D('Notice_view')->add(array('notice_id'=>$id, "user_id"=>$_SESSION['adminUser']['teacherno']));
        $this->assign("list", $info[0]);
        $this->display();
    }
}