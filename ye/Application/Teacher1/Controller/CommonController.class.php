<?php
namespace Teacher\Controller;
use Think\Controller;

class CommonController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->init();
    }

    public function init() {
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            $this->redirect('login/index');
        }

        $this->assign('user',session('adminUser')['USERNAME']);
    }

    public function getLoginUser() {
        return session("adminUser");
    }


    public function isLogin() {
        $user = $this->getLoginUser();
        if($user && is_array($user)) {
            return true;
        }
        return false;
    }

}