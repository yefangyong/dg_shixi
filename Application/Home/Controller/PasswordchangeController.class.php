<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\StudentModel;
use Home\Model\TeacherModel;

class PasswordchangeController extends Controller {

    public function index() {
        session_destroy();
        return $this->display('Login/password_change');
    }

    public function change_password(){

    	$user = $_REQUEST['user'];
    	$old_password = md5($_REQUEST['old_password']);
    	$update['password'] = md5($_REQUEST['new_password']);

		$studentModel = new StudentModel();
		$data = $studentModel->where("studentno=$user AND password="."'".$old_password."'")->find();
		if (!empty($data)) {
			$studentModel->where('studentno='.$user)->save($update);
			return $this->ajaxReturn(array('code'=>200,'info'=>'密码修改成功！'));
		}else{
			$teacherModel = new TeacherModel();
			$data = $teacherModel->where("teacherno=$user AND password="."'".$old_password."'")->find();
			if (!empty($data)) {
				$teacherModel->where('teacherno='.$user)->save($update);
				return $this->ajaxReturn(array('code'=>200,'info'=>'密码修改成功！'));
			}else{
				return $this->ajaxReturn(array('code'=>101,'info'=>'账号或密码错误！'));
			}
		}
				

    }


}