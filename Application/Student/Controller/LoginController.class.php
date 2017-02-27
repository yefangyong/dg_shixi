<?php
namespace Student\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index() {
        if(session('adminUser')) {
            redirect('/index.php?m=student&c=report');
        }
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

        $rel = D('User')->getStudentByUsername($username);
        $student = M('Student')->where('name="'.$username.'"')->find();
        if(!$student) {
            return show(0,'不存在此学生!');
        }
        if(!$rel) {
            return show(0,'该用户不存在');
        }
        if($rel['password'] !=md5($password)) {
            return show(0,'密码不正确');
        }
        session('adminUser',$rel);
        return show(1,'登录成功');
    }

    public function logout() {
        session('adminUser',null);
        redirect('/index.php?m=student&c=login');
    }
}