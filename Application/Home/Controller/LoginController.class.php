<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index() {
        session_destroy();
        return $this->display();
    }

    public function check() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)) {
            return show(0,'用户名不得为空');
        }

        if(!trim($password)) {
            return show(0,'密码不得为空');
        }
        $rel = D('student')->join("left join dg_class ON dg_student.classno=dg_class.id")->join("left join dg_department ON dg_class.dep_id=dg_department.id")->join("left join dg_school ON dg_school.id=dg_department.school_id")->where(array('studentno'=>$username))->field("dg_student.*,dg_class.classname,dg_class.dep_id,dg_department.dname,dg_department.school_id")->select();
        $rel = $rel[0];
        $url = '/index.php?m=student&c=report&a=index';
        if(empty($rel)){
            $rel = D('teacher')->join("left join dg_class ON dg_teacher.teacherno=dg_class.master_no")->join("left join dg_department ON dg_class.dep_id=dg_department.id")->join("left join dg_school ON dg_school.id=dg_department.school_id")->where(array('teacherno'=>$username))->field("dg_teacher.*,dg_class.classname,dg_class.dep_id,dg_department.dname,dg_department.school_id")->select();
            $rel = $rel[0];
            $url = '/teacher.php/Report/index';
        }

        if(!$rel) {
            return show(0,'不存在此用户!');
        }
        if($rel['password'] !=md5($password)) {
            return show(0,'密码不正确');
        }
        session('adminUser',$rel);
        return show(1,'登录成功',array('url'=>$url));
    }

    public function logout() {
        session_destroy();
        redirect('/index.php?m=home&c=login');
    }

    public function appLogin(){
    	$jsondata = json_decode($_POST['data']);
		foreach( $jsondata AS $key => $v){
			$_POST[$key]=$v;
		}	
		unset($_POST['data']);
    	$username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)) {
            return $this->ajaxReturn(array('status'=>0,'info'=>'学号或工号','data'=>$rel));
        }

        if(!trim($password)) {
            return $this->ajaxReturn(array('status'=>0,'info'=>'密码不得为空','data'=>$rel));
        }

        $rel = D('student')->join("left join dg_class ON dg_student.classno=dg_class.id")->join("left join dg_department ON dg_class.dep_id=dg_department.id")->join("left join dg_school ON dg_school.id=dg_department.school_id")->where(array('studentno'=>$username))->field("dg_student.*,dg_class.classname,dg_class.dep_id,dg_department.dname,dg_department.school_id")->select();
        $rel = $rel[0];
        if(empty($rel)){
            $rel = D('teacher')->join("left join dg_class ON dg_teacher.teacherno=dg_class.master_no")->join("left join dg_department ON dg_class.dep_id=dg_department.id")->join("left join dg_school ON dg_school.id=dg_department.school_id")->where(array('teacherno'=>$username))->field("dg_teacher.*,dg_class.classname,dg_class.dep_id,dg_department.dname,dg_department.school_id")->select();
            $rel = $rel[0];
        }
        if(!$rel) {
            return $this->ajaxReturn(array('status'=>0,'info'=>'该用户不存在','data'=>$rel));
        }
        if($rel['password'] !=md5($password)) {
            return $this->ajaxReturn(array('status'=>0,'info'=>'密码不正确','data'=>$rel));
        }
        unset($rel['password']);
        return $this->ajaxReturn(array('status'=>1,'info'=>'登录成功','data'=>$rel));
    }
}