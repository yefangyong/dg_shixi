<?php
namespace Home\Controller;
use Think\Controller;
class ClassController extends Controller {
   public function index() {
   		$jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
          $_POST[$key]=$v;
        } 
        unset($_POST['data']);
        if($_POST['school_id']){
        	$map[]="dep_id IN( SELECT id FROM dg_department WHERE school_id=".$_POST['school_id']." )";
        }
        if($_POST['dep_id']){
        	$map[]="dep_id = ".$_POST['dep_id']."";
        }
		$order = I('get._order',D('class')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
       	$data = D('class')->where($map)->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }
}