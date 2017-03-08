<?php
namespace Home\Controller;
use Think\Controller;
class DepartmentController extends Controller {
   public function index() {
   		$jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
          $_POST[$key]=$v;
        } 
        unset($_POST['data']);
        if($_POST['school_id']){
        	$map[]="school_id = ".$_POST['school_id']."";
        }
		$order = I('get._order',D('department')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
       	$data = D('department')->where($map)->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }
}