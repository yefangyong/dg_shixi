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
//                    $returnMsg = [
//                        'status'=>0,
//                        'msg'=>'用户名不得为空！',
//                    ];
//                    exit(json_encode($returnMsg));
                }
                if(!isset($data['password'])||empty($data['password'])){
                    show(0,'密码不得为空！');
//                    $returnMsg = [
//                        'status'=>0,
//                        'msg'=>'密码不得为空！',
//                    ];
//                    exit(json_encode($returnMsg));
                }
                $data['password'] = md5($data['password']);
                //原始密码为123
                $res = D('User')->findUser($data);
                if($res){
                    session('adminUser',$res);
                    show(1,'登录成功！');
//                    $returnMsg = [
//                        'status'=>1,
//                        'msg'=>'登录成功！',
//                    ];
//                    exit(json_encode($returnMsg));
                }else{
                    show(-1,'登录失败！请检查用户名和密码');
//                    $returnMsg = [
//                        'status'=>-1,
//                        'msg'=>'登录失败！请检查用户名和密码',
//                    ];
//                    exit(json_encode($returnMsg));
                }
            }else{
                return $this->display();
            }
        }
    }

    public function loginOut(){
       session(C('USE_AUTH_KEY',null));
       session('USERNAME,null');
       return $this->redirect('index');
    }
}