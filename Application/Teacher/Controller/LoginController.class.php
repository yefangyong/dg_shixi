<?php
namespace Teacher\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function index(){
        if(session('adminUser')){
            return $this->redirect('Index/index');
        }else{
            if($_POST){
                $data = I('post.','','trim');
                if(!isset($data['username'])||empty($data['username'])){
                    show(0,'用户名不得为空！');
                }
                if(!isset($data['password'])||empty($data['password'])){
                    show(0,'密码不得为空！');
                }
                $data['password'] = md5($data['password']);
                //原始密码为123
                $res = M('Teacher')->where('name="'.$data['username'].'"')->find();
                if($res){
                    session('adminUser',$res);
                    show(1,'登录成功！');
                }else{
                    show(-1,'登录失败！请检查用户名和密码');
                }
            }else{
                return $this->display();
            }
        }
    }

    public function loginOut(){
       session('adminUser',null);
       return $this->redirect('index');
    }
}