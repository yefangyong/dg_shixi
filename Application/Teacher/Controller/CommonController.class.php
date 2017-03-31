<?php
namespace Teacher\Controller;
use Think\Controller;

class CommonController extends Controller {
    //防止学生进入没做
    public function __construct(){
        parent::__construct();
        $this->init();
    }

    public function init() {
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            $this->redirect('/Login/index');
        }else if($_SESSION['adminUser']['studentno']){
            redirect('/index.php?m=student&c=report&a=index');
        }
        $this->assign('user',session('adminUser')['name']);
    }

    public function getLoginUser() {
        return session("adminUser");
    }

//    protected function getIdentity(){
//        $teacherno= session('adminUser')['teacherno'];
//        $teacher = D('Teacher')->getTeacher($teacherno);
//        if(isset($teacher['identity'])&&($teacher['identity']!='')){
//           return $teacher['identity'];
//        }else{
//            return '';
//        }
//    }


    public function isLogin() {
        $user = $this->getLoginUser();
        if(($user && is_array($user))) {
            return true;
        }
        return false;
    }

}