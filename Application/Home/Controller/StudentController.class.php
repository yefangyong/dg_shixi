<?php
namespace Home\Controller;
use Think\Controller;
class StudentController extends Controller {
   public function index() {
       $jsondata = json_decode($_POST['data']);
		foreach( $jsondata AS $key => $v){
			$_POST[$key]=$v;
		}	
		unset($_POST['data']);
		if($_POST['studentno']){
			$map['studentno']=$_POST['studentno'];
		}
		if($_POST['teacherno']){
			$map[]=' classno IN (select id from dg_class where master_no='.$_POST['teacherno'].')';
		}
		if($_POST['class_id']){
			$map[]=' classno='.$_POST['class_id'].'';
		}
		if($_POST['department_id']){
			$map[]=' classno in(select id from dg_class where dep_id='.$_POST['department_id'].')';
		}
		if($_POST['schoool_id']){
			$map[]=' classno in(select id from dg_class where dep_id IN(select id from dg_department where schoool_id='.$_POST['schoool_id'].'))';
		}
		$order = I('get._order',D('Report')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
		// 统计
		$count = D('student')->where($map)->count();
		import('ORG.Util.Page');
		// 每页显示记录数
		$listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
		// 实例化分页类 传入总记录数和每页显示的记录数
		$page = new \Think\Page($count,$listRows);
		$map[]=' dg_student.id is not null ';
		// 当前页数
		$currentPage = I(C('VAR_PAGE'),1);
       	$data = D('student')->where($map)->order($worder)->page($currentPage.','.$listRows)->field("id,studentno,name,phone,classno,course,corporation_id,email,sex,address,addtime,emegencyconcat,emegencyphone,department_id")->select();
       	//echo D('Report')->getLastSql();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }
}