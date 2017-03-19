<?php
namespace Student\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->init();
    }

    private function init() {
        // 如果已经登录
        $isLogin = $this->isLogin();
        if(!$isLogin) {
            // 跳转到登录页面
            $this->redirect('/home/login/index');
        }
    }

    /**
     * 获取登录用户信息
     * @return array
     */
    public function getLoginUser() {
        return session("adminUser");
    }

    /**
     * 判定是否登录
     * @return boolean
     */
    public function isLogin() {
        $user = $this->getLoginUser();
        if($user && is_array($user)) {
            return true;
        }

        return false;
    }

    /**
     * 修改密码页面
     */

    public function password() {
       $this->display();
    }

    /**
     * 修改密码
     */
    public function save() {
       if(!$_POST['oPassword'] || !isset($_POST['oPassword'])) {
           return show(0,'原始密码不得为空!');
       }
        if(!$_POST['nPassword'] || !isset($_POST['nPassword'])) {
            return show(0,'新密码不得为空!');
        }
        if(!$_POST['cPassword'] || !isset($_POST['cPassword'])) {
            return show(0,'确认密码不得为空!');
        }
        if(md5($_POST['oPassword']) != $_SESSION['adminUser']['password']) {
            return show(0,'原始密码不正确!');
        }
        if($_POST['nPassword']!= $_POST['cPassword']) {
            return show(0,'原始密码和确认密码要一致!');
        }
        $data = array(
            'password'=>md5($_POST['nPassword']),
        );
        $rel = M('Student')->where('studentno='.$_SESSION['adminUser']['studentno'])->save($data);
        if($rel) {
            return show(1,'修改密码成功!');
        }else {
            return show(0,'修改密码失败!');
        }
    }

}