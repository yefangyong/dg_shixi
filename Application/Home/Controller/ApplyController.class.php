<?php
namespace Home\Controller;
use Think\Controller;
class ApplyController extends Controller {
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
		if($_POST['status']){
			$map['status']=$_POST['status']-2;
		}
		return $map;
   }
   public function index() {
        $map = $this->map();
        if($_POST['id']){
            $map[]=' dg_practice.id='.$_POST['id'];
        }
		$order = I('get._order',D('Practice')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
		// 统计
		$count = D('Practice')->where($map)->count();
		import('ORG.Util.Page');
		// 每页显示记录数
		$listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
		// 实例化分页类 传入总记录数和每页显示的记录数
		$page = new \Think\Page($count,$listRows);
		// 当前页数
		$currentPage = I(C('VAR_PAGE'),1);
       	$data = D('practice')->join("LEFT JOIN dg_student ON dg_practice.student_id=dg_student.studentno")->where($map)->order($worder)->page($currentPage.','.$listRows)->field("dg_practice.*,dg_student.name")->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }

    public function change()
    {
        $map = $this->map();
        if(!$_POST['type']){
        	$_POST['type']=1;
        }
        if($_POST['id']){
            $map[]=' dg_change.id='.$_POST['id'];
        }
        $_POST['type']=$_POST['type']-1;
		$order = I('get._order',D('change')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
		// 统计
		$count = D('change')->where($map)->count();
		import('ORG.Util.Page');
		// 每页显示记录数
		$listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
		// 实例化分页类 传入总记录数和每页显示的记录数
		$page = new \Think\Page($count,$listRows);
		// 当前页数
		$currentPage = I(C('VAR_PAGE'),1);
       	$data = D('change')->join("LEFT JOIN dg_student ON dg_change.student_id=dg_student.studentno")->where($map)->order($worder)->page($currentPage.','.$listRows)->field("dg_change.*,dg_student.name")->select();
        //echo D('change')->getLastSql();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
    }

    public function leave()
    {
        $map = $this->map();
        if($_POST['id']){
            $map[]=' dg_leave.id='.$_POST['id'];
        }
		$order = I('get._order',D('Practice')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
		// 统计
		$count = D('leave')->where($map)->count();
		import('ORG.Util.Page');
		// 每页显示记录数
		$listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
		// 实例化分页类 传入总记录数和每页显示的记录数
		$page = new \Think\Page($count,$listRows);
		// 当前页数
		$currentPage = I(C('VAR_PAGE'),1);
       	$data = D('leave')->join("LEFT JOIN dg_student ON dg_leave.student_id=dg_student.studentno")->where($map)->order($worder)->page($currentPage.','.$listRows)->field("dg_leave.*,dg_student.name")->select();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
    }

    public function auditApply()
    {
        if($_POST){
        	$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
			unset($_POST['data']);
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $data['audittime'] = date('Y-m-d H:i:s',time());
            if(!in_array($opinion, array(-1,1))){
            	$error = '状态应为-1或1';
            }
            if(!$id) {
               $error = 'id不能为空';
            }
            if($error){
            	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
            }
            $res = D('practice')->where("`id` = ".$id)->save($data);
            if($res){
			 	return $this->ajaxReturn(array('status'=>1,'info'=>'审核成功','data'=>$data));
			}else{
			 	return $this->ajaxReturn(array('status'=>0,'info'=>'审核失败','data'=>$data));
			}
        }
    }


    public function auditChange()
    {
        if($_POST){
        	$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
			unset($_POST['data']);
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $data['audittime'] = date('Y-m-d H:i:s',time());
            if(!in_array($opinion, array(-1,1))){
            	$error = '状态应为-1或1';
            }
            if(!$id) {
               $error = 'id不能为空';
            }
            if($error){
            	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
            }
            $res = D('change')->where("`id` = ".$id)->save($data);
            if($res){
			 	return $this->ajaxReturn(array('status'=>1,'info'=>'审核成功','data'=>$data));
			}else{
			 	return $this->ajaxReturn(array('status'=>0,'info'=>'审核失败','data'=>$data));
			}
        }
    }



    public function auditLeave()
    {
        if($_POST){
        	$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
			unset($_POST['data']);
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $data['audittime'] = date('Y-m-d H:i:s',time());
            if(!in_array($opinion, array(-1,1))){
            	$error = '状态应为-1或1';
            }
            if(!$id) {
               $error = 'id不能为空';
            }
            if($error){
            	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$data));
            }
            $res = D('leave')->where("`id` = ".$id)->save($data);
            if($res){
			 	return $this->ajaxReturn(array('status'=>1,'info'=>'审核成功','data'=>$data));
			}else{
			 	return $this->ajaxReturn(array('status'=>0,'info'=>'审核失败','data'=>$data));
			}
        }
    }

    public function add() {
    	if($_POST) {
    		$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
			unset($_POST['data']);
            if(!$_POST['position']) {
                $error = '请填写实习岗位！';
            }
            if(!$_POST['phone']) {
                $error = '请填写联系方式！';
            }
            if(!$_POST['student_id']) {
                $error = '请提供学号！';
            }
            if(!$_POST['cname']&&!$_POST['corporation_id']) {
                $error = '请提供公司信息';
            }
            if($error){
            	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$res));
            }
            //$_POST['student_id']
            //$_POST['corporation_id']
            //新增
            $_POST['applytime']=date('Y-m-d H:i:s');
            if($_POST['id']){
            	$rel = D('practice')->where(array('id'=>$_POST['id']))->save($_POST);
            }else{
            	$rel = D('practice')->add($_POST);
            }
            if($rel) {
            	 $res = D('practice')->where("`id` = ".$rel)->select();
             	 $res = $res[0];
                return $this->ajaxReturn(array('status'=>1,'info'=>'提交成功，请等待审核','data'=>$res));
            }else{
                return $this->ajaxReturn(array('status'=>0,'info'=>'提交失败','data'=>$res));
            }

        }
    }

    public function changeCorporation() {
        if($_POST) {
    		$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}
            if(!$_POST['position']) {
                $error = '请填写实习岗位！';
            }
            if(!$_POST['phone']) {
                $error = '请填写联系方式！';
            }
            if(!$_POST['reason']) {
                $error = '请填写变更原因！';
            }
            if(!$_POST['cname']&&!$_POST['corporation_id']) {
                $error = '请提供公司信息';
            }
            $_POST['type'] = 0;
            $_POST['applytime'] = date('Y-m-d H:i:s',time());
            if($error){
            	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$res));
            }

            //$_POST['corporation_id'];
            //$_POST['student_id']

            if($_POST['id']){
            	$rel = D('change')->where(array('id'=>$_POST['id']))->save($_POST);
            }else{
            	$rel = D('change')->add($_POST);
            }

            if($rel) {
            	 $res = D('change')->where("`id` = ".$rel)->select();
             	 $res = $res[0];
                return $this->ajaxReturn(array('status'=>1,'info'=>'提交成功，请等待审核','data'=>$res));
            }else{
                return $this->ajaxReturn(array('status'=>0,'info'=>'提交失败','data'=>$res));
            }
        }

    }

    public function changeJob() {
        if($_POST) {
    		$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
            $_POST['type'] = 1;
            if(!$_POST['position']) {
                $error = '请填写实习岗位！';
            }
            if(!$_POST['reason'] ) {
                $error = '请填写变更原因！';
            }
            if(!$_POST['guide'] ) {
                $error = '请填写企业老师！';
            }
            if(!$_POST['phone']) {
                $error = '请填写联系方式！';
            }
            if($error){
            	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$res));
            }


            $_POST['applytime'] = date('Y-m-d H:i:s',time());
            //$_POST['student_id'] = $sid['studentno'];
            //$_POST['corporation_id'] = $sid['corporation_id'];

            if($_POST['id']){
            	$rel = D('change')->where(array('id'=>$_POST['id']))->save($_POST);
            }else{
            	$rel = D('change')->add($_POST);
            }

            if($rel) {
            	$res = D('change')->where("`id` = ".$rel)->select();
             	$res = $res[0];
                return $this->ajaxReturn(array('status'=>1,'info'=>'提交成功，请等待审核','data'=>$res));
            }else{
                return $this->ajaxReturn(array('status'=>0,'info'=>'提交失败','data'=>$res));
            }
        }

    }

    public function addLeave() {
        if($_POST) {
    		$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
			if(!$_POST['student_id']) {
               $error = '学号不能为空';
            }
			$_POST['applytime'] = date('Y-m-d H:i:s',time());
        	//$_POST['student_id'] = $sid['studentno'];
        	if($_POST['id']){
            	$rel = D('leave')->where(array('id'=>$_POST['id']))->save($_POST);
            }else{
            	$rel = D('leave')->add($_POST);
            }
            if($rel) {
            	$res = D('leave')->where("`id` = ".$rel)->select();
             	$res = $res[0];
                return $this->ajaxReturn(array('status'=>1,'info'=>'提交成功，请等待审核','data'=>$res));
            }else{
                return $this->ajaxReturn(array('status'=>0,'info'=>'提交失败','data'=>$res));
            }

            $user = $_SESSION['adminUser']['username'];
            $sid = D('Student')->getStudentId($user);
        }
    }

    public function del()
    {
    	$jsondata = json_decode($_POST['data']);
		foreach( $jsondata AS $key => $v){
			$_POST[$key]=$v;
		}	
		unset($_POST['data']);
		$id = I('post.id',0,'intval');
		$type = I('post.type',0,'intval');
		if(!$id) {
        	$error = 'id不能为空';
        }
        if(!in_array($type, array(0,1,2))){
        	$error = '类型为0或1或2';
        }
        if($error){
        	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$res));
        }
        if($type==1){
        	$res = D('change')->where("`id` = ".$id)->delete();
        }elseif($type==2){
        	$res = D('leave')->where("`id` = ".$id)->delete();
        }else{
        	$res = D('practice')->where("`id` = ".$id)->delete();
        }
		
		if($res){
		 return $this->ajaxReturn(array('status'=>1,'info'=>'删除成功','data'=>$data));
		}else{
		 return $this->ajaxReturn(array('status'=>0,'info'=>'删除失败','data'=>$data));
		}
    }
}