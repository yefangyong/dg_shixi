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
        $isTeacher = $this->isTeacher(session('adminUser'));
        if(!$isLogin) {
            $this->redirect('login/index');
        }
        if(!$isTeacher){
          exit('登录失败！');
        }
        $this->assign('user',session('adminUser')['USERNAME']);
    }

    public function getLoginUser() {
        return session("adminUser");
    }

    public function isTeacher($user)
    {
        $isTeacher = $user['type'];
        return (bool)$isTeacher;
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