<?php
namespace Home\Controller;
use Think\Controller;
class ProfessionController extends Controller {
   public function index() {
		$order = I('get._order',D('department')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
       	$data = D('department')->where($map)->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }
}