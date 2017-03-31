<?php
namespace Home\Controller;
use Think\Controller;
class TeacherController extends Controller {
   public function index() {
		$order = I('get._order',D('teacher')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
		if($_POST['teacherno']){
			$map['teacherno']=$_POST['teacherno'];
		}
       	$data = D('teacher')->where($map)->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }

   public function changepassword(){
   		$jsondata = json_decode($_POST['data']);
		foreach( $jsondata AS $key => $v){
			$_POST[$key]=$v;
		}	
		unset($_POST['data']);
    	$userid = $_POST['userid'];
        $password = $_POST['password'];
        $type = $_POST['type'];
        if($type==1){
        	$rel = D('teacher')->where(array('teacherno'=>$userid))->save(array('password'=>md5($password)));
        }else{
        	$rel = D('student')->where(array('studentno'=>$userid))->save(array('password'=>md5($password)));
        }
        if($rel) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'修改成功','data'=>array()));
        }else{
            return $this->ajaxReturn(array('status'=>0,'info'=>'修改失败','data'=>array()));
        }
   }
}