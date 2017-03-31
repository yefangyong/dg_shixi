<?php
namespace Home\Controller;
use Think\Controller;
class ReportController extends Controller {
   public function index() {
       $jsondata = json_decode($_POST['data']);
		foreach( $jsondata AS $key => $v){
			$_POST[$key]=$v;
		}	
		unset($_POST['data']);
		$map['tea_del']=1;
		if($_POST['student_id']){
			$map['student_id']=$_POST['student_id'];
		}
		if($_POST['teacher_id']){
			$map[]=' student_id in(select studentno from dg_student where classno IN(select id from dg_class where master_no='.$_POST['teacher_id'].'))';
		}
		if($_POST['status']){
			$map['status']=$_POST['status']-2;
		}
		if($_POST['id']){
			$map[]='dg_report.id='.$_POST['id'];
		}
		$order = I('get._order',D('Report')->getPk());
		// 排序方式 默认为降序排列
		$sort  = I('get._sort','desc');
		$worder[$order]= $sort;
		// 统计
		$count = D('Report')->where($map)->count();
		import('ORG.Util.Page');
		// 每页显示记录数
		$listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
		// 实例化分页类 传入总记录数和每页显示的记录数
		$page = new \Think\Page($count,$listRows);
		$map[]=' dg_student.id is not null ';
		// 当前页数
		$currentPage = I(C('VAR_PAGE'),1);
       	$data = D('Report')->join("LEFT JOIN dg_student ON dg_report.student_id=dg_student.studentno")->where($map)->order($worder)->page($currentPage.','.$listRows)->field("dg_report.*,dg_student.name")->select();
       	//echo D('Report')->getLastSql();
       	return $this->ajaxReturn(array('status'=>1,'info'=>'操作成功','data'=>$data));
   }

    public function add() {
        if($_POST) {
			$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
			unset($_POST['data']);
           if(!$_POST['course']) {
               $error = '请选择实习课程';
           }
            if(!$_POST['title']) {
               $error = '实习标题不得为空';
            }
            if(!$_POST['content']) {
               $error = '实习内容不得为空';
            }
            if(!$_POST['nexplan']) {
               $error = '下周计划内容不得为空';
            }
            if(!$_POST['address']) {
               $error = '下周计划内容不得为空';
            }
            if(!$_POST['student_id']) {
               $error = '学号不能为空';
            }
            if($error){
            	return $this->ajaxReturn(array('status'=>0,'info'=>$error,'data'=>$res));
            }
            $_POST['pubtime'] = date('Y-m-d :H:i:s',time());
            
            //新增
            if($_POST['id']){
            	$rel = D('Report')->where(array('id'=>$_POST['id']))->save($_POST);
            }else{
            	$rel = D('Report')->add($_POST);
            }

            if($rel) {
            	 $res = D('Report')->where("`id` = ".$rel)->select();
             	 $res = $res[0];
                return $this->ajaxReturn(array('status'=>1,'info'=>'提交成功','data'=>$res));
            }else{
                return $this->ajaxReturn(array('status'=>0,'info'=>'提交失败','data'=>$res));
            }
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
		$res = D('Report')->where("`id` = ".$id)->save(array("tea_del"=>0));
		if($res){
		 return $this->ajaxReturn(array('status'=>1,'info'=>'删除成功','data'=>$data));
		}else{
		 return $this->ajaxReturn(array('status'=>0,'info'=>'删除失败','data'=>$data));
		}
    }

    public function audit()
    {
    	if($_POST){
    		$jsondata = json_decode($_POST['data']);
			foreach( $jsondata AS $key => $v){
				$_POST[$key]=$v;
			}	
			unset($_POST['data']);
			$rid = I('post.id',0,'intval');
			$data['suggestion'] = I('post.suggestion','','trim');
			$data['score'] = I('post.score',0,'intval');
			$data['unaudit'] = I('post.unaudit',0,'intval');
			$data['teacher_id'] = I('post.teacher_id','','trim');
			if(empty($data['score'])&&empty($data['unaudit'])){
			return $this->ajaxReturn(array('status'=>1,'info'=>'请给定评分','data'=>$res));
			}
			if(empty($data['suggestion'])) {
			 return $this->ajaxReturn(array('status'=>1,'info'=>'请填写意见','data'=>$res));
			}
			if(empty($rid)) {
			 return $this->ajaxReturn(array('status'=>1,'info'=>'报告ID没有','data'=>$res));
			}
			if(empty($data['teacher_id'])) {
			 return $this->ajaxReturn(array('status'=>1,'info'=>'教师ID没有','data'=>$res));
			}
			if($data['score']<60){
			 $data['status'] = -1;
			}elseif($data['score']>=60 && $data['score']<=100){
			 $data['status'] = 1;
			}
			$res = D('Report')->where("`id` = ".$rid)->save($data);
			if($res){
				$res = D('Report')->where("`id` = ".$rid)->select();
				$res = $res[0];
			 	return $this->ajaxReturn(array('status'=>1,'info'=>'审核成功','data'=>$res));
			}else{
			 	return $this->ajaxReturn(array('status'=>0,'info'=>'审核失败','data'=>$res));
			}
         }
    }
}