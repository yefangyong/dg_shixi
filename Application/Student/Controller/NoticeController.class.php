<?php
namespace Student\Controller;
use Think\Controller;

class NoticeController extends CommonController {
    public function index() {
        $user_id = $_SESSION['adminUser']['studentno'];
        $dep_id = $_SESSION['adminUser']['dep_id'];
        $class_id = $_SESSION['adminUser']['classno'];
        $map[]="dg_notice.type!=2";
        $map[]="dg_notice.id NOT IN(SELECT notice_id FROM dg_notice_view WHERE user_id=$user_id and type=1)";
        $map[]="(dg_notice.dep_id=$dep_id or dg_notice.class_id=$class_id or school=1)";
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= M('notice')->join("LEFT JOIN dg_notice_view ON dg_notice.id=dg_notice_view.notice_id and dg_notice_view.type=0 and dg_notice_view.user_id=$user_id")->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $data = M("notice")->join("LEFT JOIN dg_notice_view ON dg_notice.id=dg_notice_view.notice_id and dg_notice_view.type=0 and dg_notice_view.user_id=$user_id")->join("LEFT JOIN dg_teacher ON dg_notice.user_id=dg_teacher.teacherno")->where($map)->page($currentPage.','.$listRows)->field("dg_notice.title,dg_notice.id,dg_notice.pubtime,dg_teacher.name,IFNULL(dg_notice_view.id,0) viewid")->select();
        //echo M("notice")->getLastSql();
        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);;
        $this->assign('data',$data);
        $this->display();
    }

    public function cat () {
        $id = $_GET['id'];
        $user_id = $_SESSION['adminUser']['studentno'];
        $rel = M("Notice")->join("LEFT JOIN dg_teacher ON dg_notice.user_id=dg_teacher.teacherno")->join("LEFT JOIN dg_notice_view ON dg_notice.id=dg_notice_view.notice_id and dg_notice_view.type=0 and dg_notice_view.user_id=$user_id")->join("LEFT JOIN dg_class ON dg_notice.class_id=dg_class.id")->join("LEFT JOIN dg_department ON dg_notice.dep_id=dg_department.id and dg_notice_view.type=0 and dg_notice_view.user_id=$user_id")->where("dg_notice.id=".$id)->field("dg_notice.*,IF(dg_notice.type=0,'所有人',IF(dg_notice.class_id!=0,dg_class.classname,IF(dg_notice.dep_id!=0, dg_department.dname,'所有'))) publisher,dg_department.dname,IFNULL(dg_notice_view.id,0) viewid, dg_teacher.name teacher_name")->select();
        if(!$rel) {
            return show(0,'此公告不存在!');
        }else {
            $this->assign('list',$rel[0]);
            $this->display();
        }
    }

    public function read() {
        $user_id = $_SESSION['adminUser']['studentno'];
        unset($_POST['data']);
        $_POST['notice_id'] = $_POST['id'];
        unset($_POST['id']);
        if(!$_POST['notice_id']) {
            $error = '没有公告id';
        }
        if(!$user_id) {
            $error = '至少提供学号或者教师编号';
        }
        if($error){
            return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
        }
        $_POST['user_id']=$user_id;
        D('notice_view')->where('notice_id='.$_POST['notice_id']." and user_id=".$user_id)->delete();
        $rel = D('notice_view')->add($_POST);
        if($rel) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
        }else {
            return $this->ajaxReturn(array('status'=>0,'info'=>'操作失败','data'=>$data));
        }
    }

    public function userdel() {
        $user_id = 0;
        $user_id = $_SESSION['adminUser']['studentno'];
        if(!$_POST['id']) {
            $error = '没有公告id';
        }
        if(!$user_id) {
            $error = '至少提供学号或者教师编号';
        }
        if($error){
            return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
        }
        $_POST['user_id']=$user_id;
        $_POST['type']=1;

        if(is_array($_POST['id'])){
            for($i=0; $i<count($_POST['id']); $i++){
                $_POST['notice_id']=$_POST['id'][$i];
            D('notice_view')->where('notice_id='.$_POST['notice_id']." and user_id=".$user_id)->delete();
                $rel = D('notice_view')->add($_POST);
            }
        }
        else{
            $_POST['notice_id'] = $_POST['id'];
            D('notice_view')->where('notice_id='.$_POST['notice_id']." and user_id=".$user_id)->delete();
            $rel = D('notice_view')->add($_POST);
        }
        
        if($rel) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
        }else {
            return $this->ajaxReturn(array('status'=>0,'info'=>'操作失败','data'=>$data));
        }
    }
}