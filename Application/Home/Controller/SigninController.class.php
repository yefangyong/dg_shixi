<?php
namespace Home\Controller;
use Think\Controller;
class SigninController extends Controller {

   public function map(){
   		$jsondata = json_decode($_POST['data']);
  		foreach( $jsondata AS $key => $v){
  			$_POST[$key]=$v;
  		}	
  		unset($_POST['data']);
  		if($_POST['student_id']){
  			$map['student_id']=$_POST['student_id'];
  		}
  		if($_POST['teacher_id']){
  			$map[]=' student_id in(select studentno from dg_student where classno IN(select id from dg_class where master_no='.$_POST['teacher_id'].'))';
  		}
      if($_POST['class_id']){
        $map[]=' student_id in(select studentno from dg_student where classno ='.$_POST['teacher_id'].')';
      }
  		if($_POST['pubtime']){
  			$map[]= 'pubtime like "%'.$_POST['pubtime'].'%"';
  		}
  		return $map;
   }

   public function index() {
        $map = $this->map();

    		$order = I('get._order',D('Practice')->getPk());
    		// 排序方式 默认为降序排列
    		$sort  = I('get._sort','desc');
    		$worder[$order]= $sort;
    		// 统计
    		$count = D('signin')->where($map)->count();
    		import('ORG.Util.Page');
    		// 每页显示记录数
    		$listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
    		// 实例化分页类 传入总记录数和每页显示的记录数
    		$page = new \Think\Page($count,$listRows);
    		// 当前页数
    		$currentPage = I(C('VAR_PAGE'),1);
       	$data = D('signin')->where($map)->order($worder)->page($currentPage.','.$listRows)->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }

   public function signclass(){
        $jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
          $_POST[$key]=$v;
        } 
        unset($_POST['data']);
        $users = D('student')->join("LEFT JOIN dg_signin ON dg_student.studentno=dg_signin.student_id and pubtime like '".$_POST['date']."%' AND dg_student.classno=".($_POST['class_id']?$_POST['class_id']:0))->group("dg_student.studentno")->order(array("dg_student.name"=>"asc"))->field("dg_student.studentno,dg_student.name,dg_signin.address")->select();
        $no=0;
        for($i=0; $i<count($users); $i++){
          if(empty($users[$i]['address'])) $no++;
        }
        $no = count($users)-$no;
        return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$users,'ratio'=>($users ? ceil($no*100/count($users)) : 0).'%'));
   }

   public function add(){
        $jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
            $_POST[$key]=$v;
        }   
        unset($_POST['data']);
        if(empty($_POST['address'])){
            $error = '没有地址';
        }
        if(empty($_POST['student_id'])){
            $error = '没有学号';
        }
        if($error){
            return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
        }
        $data['address']=$_POST['address'];
        $data['student_id']=$_POST['student_id'];
        $data['pubtime']=date('Y-m-d H:i:s');
        $res = D('signin')->add($data);
        if($res){
            return $this->ajaxReturn(array('status'=>1,'info'=>'打卡成功','data'=>$data));
        }else{
            return $this->ajaxReturn(array('status'=>0,'info'=>'打卡失败','data'=>$data));
        }
   }
}