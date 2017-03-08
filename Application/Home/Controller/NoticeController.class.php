<?php
namespace Home\Controller;
use Think\Controller;
class NoticeController extends Controller {

   public function map(){
   		$jsondata = json_decode($_POST['data']);
  		foreach( $jsondata AS $key => $v){
  			$_POST[$key]=$v;
  		}	
  		unset($_POST['data']);
      $user_id = 0;
      $user_id = $_POST['student_id'] ? $_POST['student_id'] : $_POST['teacher_id'];
  		if($user_id){
        //$map['user_id']=$_POST['user_id'];
  		}
      if($_POST['new']&&$user_id){
        $map[]="id NOT IN(SELECT notice_id FROM dg_notice_view WHERE user_id=$user_id)";
      }
      if($_POST['read']&&$user_id){
        $map[]="id ".($_POST['read']==1 ? 'NOT' : '')." IN(SELECT notice_id FROM dg_notice_view WHERE user_id=$user_id and type=0)";
      }
  		return $map;
   }

   public function index() {
        $map = $this->map();

    		$order = I('get._order',D('notice')->getPk());
    		// 排序方式 默认为降序排列
    		$sort  = I('get._sort','desc');
    		$worder[$order]= $sort;
    		// 统计
    		$count = D('notice')->where($map)->count();
    		import('ORG.Util.Page');
    		// 每页显示记录数
    		$listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
    		// 实例化分页类 传入总记录数和每页显示的记录数
    		$page = new \Think\Page($count,$listRows);
    		// 当前页数
    		$currentPage = I(C('VAR_PAGE'),1);
       	$data = D('notice')->where($map)->order($worder)->page($currentPage.','.$listRows)->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }

   public function add() {
        $jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
          $_POST[$key]=$v;
        } 
        unset($_POST['data']);
        if(!$_POST['title']) {
            $error = '公告标题不得为空';
        }
        if(!$_POST['content']) {
            $error = '公告内容不得为空';
        }
        if(!$_POST['user_id']) {
            $error = '发布用户id不能为空';
        }
        if($error){
            return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
        }
        $_POST['pro_id'] = $pro_id['id'];
        if($_POST['id']){
          $_POST['edittime'] = date("Y-m-d :H:i:s");
          $rel = D('notice')->where(array('id'=>$_POST['id']))->save($_POST);
        }else{
          $_POST['pubtime'] = date("Y-m-d :H:i:s");
          $rel = D('notice')->add($_POST);
        }
        if($rel){
            $data = D(notice)->where(array(id=>$rel))->select();
            return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
        }else{
            return $this->ajaxReturn(array('status'=>0,'info'=>'操作失败','data'=>$data));
        }
    }

    public function del() {
        $jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
          $_POST[$key]=$v;
        } 
        unset($_POST['data']);
        $id = $_POST['id'];
        $rel = M('notice')->where('id='.$id)->delete();
        M('notice_view')->where('notice_id='.$id)->delete();
        if($rel) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'删除成功','data'=>$data));
        }else {
            return $this->ajaxReturn(array('status'=>0,'info'=>'删除失败','data'=>$data));
        }
    }

    public function read() {
        $jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
          $_POST[$key]=$v;
        } 
        $user_id = 0;
        $user_id = $_POST['student_id'] ? $_POST['student_id'] : $_POST['teacher_id'];
        unset($_POST['data']);
        $_POST['notice_id'] = $_POST['id'];
        unset($_POST['id']);
        if(!$_POST['notice_id']) {
            $error = '没有公告id';
        }
        if(!$user_id) {
            $error = '至少提供学号或者教师编号';
        }
        if($error){
            return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
        }
        $_POST['user_id']=$user_id;
        D('notice_view')->where('notice_id='.$_POST['notice_id']." and user_id=".$user_id)->delete();
        $rel = D('notice_view')->add($_POST);
        if($rel) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
        }else {
            return $this->ajaxReturn(array('status'=>0,'info'=>'操作失败','data'=>$data));
        }
    }

    public function userdel() {
        $jsondata = json_decode($_POST['data']);
        foreach( $jsondata AS $key => $v){
          $_POST[$key]=$v;
        } 
        $user_id = 0;
        $user_id = $_POST['student_id'] ? $_POST['student_id'] : $_POST['teacher_id'];
        unset($_POST['data']);
        $_POST['notice_id'] = $_POST['id'];
        unset($_POST['id']);
        if(!$_POST['notice_id']) {
            $error = '没有公告id';
        }
        if(!$user_id) {
            $error = '至少提供学号或者教师编号';
        }
        if($error){
            return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
        }
        $_POST['user_id']=$user_id;
        $_POST['type']=1;
        D('notice_view')->where('notice_id='.$_POST['notice_id']." and user_id=".$user_id)->delete();
        $rel = D('notice_view')->add($_POST);
        if($rel) {
            return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
        }else {
            return $this->ajaxReturn(array('status'=>0,'info'=>'操作失败','data'=>$data));
        }
    }

}