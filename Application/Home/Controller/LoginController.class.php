<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	$jsondata = json_decode($_POST['data']);
		foreach( $jsondata AS $key => $v){
			$_POST[$key]=$v;
		}	
		unset($_POST['data']);
    	$username = $_POST['username'];
        $password = $_POST['password'];
        if(!trim($username)) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'用户名不得为空','data'=>$rel));
        }

        if(!trim($password)) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'密码不得为空','data'=>$rel));
        }

        $rel = D('User')->where(array('username'=>$username))->select();
        $rel = $rel[0];
        if(!$rel) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'该用户不存在','data'=>$rel));
        }
        if($rel['password'] !=md5($password)) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'密码不正确','data'=>$rel));
        }
        unset($rel['password']);
        return $this->ajaxReturn(array('status'=>1,'info'=>'登录成功','data'=>$rel));
    }
}