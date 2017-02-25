<?php
 namespace Teacher\Controller;

 class ReportController extends CommonController{

     public function index(){
         if($_POST){
             $data['student_id'] = I('post.sid',0,'trim');
             $data['status'] = I('post.status',0,'intval');
             $res = D('ReportView')->getResult($data);
             exit(json_encode($res));
         }else{

             //上部查询框
//             $student = D('Student')->getStudentsName();//获取所有学生的姓名和ID
//             $this->assign('student',$student);
//             $class = D('Class')->getAllClassesName();
//             $this->assign('class',$class);
//             $corporation = D('Corporation')->getCorporation();
//             $this->assign('corporation',$corporation);
             $reportList = D('ReportView')->field('rid,pubtime,classname,studentno,name,result,status')->where("`isDel` = 0")->select();
             $count = D('ReportView')->field('rid,pubtime,status,classname,studentno,name,status')->where("`isDel` = 0")->count();
             $pageNum = ceil($count/1);
             $this->assign('list',$reportList);
             $this->assign('count',$count);
             $this->assign('num',$pageNum);
             return $this->display();
         }
     }

     public function weekly()
     {
           return $this->display();
     }
     
     
     public function del()
     {
         $id = I('post.id',0,'intval');
         $res = D('Report')->delReportById($id);
         if($res){
             show(1,'删除成功');
         }else{
             show(0,'删除失败');
         }
     }

     public function edit(){
        $status = I('post.status',0,'intval');
        $rid = I('post.rid',0,'intval');
        switch($status){
            case 0: $jumpto ='/teacher.php/Report/auditing/rid/'.$rid;break;
            case -1:
            case 1: $jumpto ='/teacher.php/Report/audited/rid/'.$rid;break;
        }
        exit(json_encode($jumpto));
     }
     
     public function auditing(){
         if($_POST){
             $rid = I('post.id',0,'intval');
             $data['suggestion'] = I('post.suggestion','','trim');
             $data['score'] = I('post.res',0,'intval');
             if(empty($data['score'])||!isset($data['score'])){
                 $returnMsg = [
                     'status'=>0,
                     'msg'=>'请给定评分！',
                 ];
                 exit(json_encode($returnMsg));
             }
             if(empty($data['suggestion'])||!isset($data['suggestion'])) {
                 show(0,'请填写意见！');
             }
             if($data['score']<60){
                 $data['status'] = -1;
             }elseif($data['score']>=60 && $data['score']<=100){
                 $data['status'] = 1;
             }
             $res = D('Report')->updateReportById($rid,$data);
             if($res){
                 show(1,'审核成功！');
             }else{
                 show(-1,'审核失败！');
             }
         }else{
             $rid = I('get.rid',0,'intval');
             $detail = D('ReportView')->getReportById($rid);
             $this->assign('report',$detail);
             return $this->display();
         }
     }

     public function audited(){
         $rid = I('get.rid',0,'intval');
         $detail = D('ReportView')->getReportById($rid);
         $this->assign('report',$detail);
         return $this->display();
     }

     public function unaudit()
     {
       $rid = I('get.rid',0,'intval');
       if($_POST){
            $receive = explode('&',I('post.content','','trim'));
            $rid = intval(substr($receive[0],4));
            $suggestion = urldecode(substr($receive[1],11));
            $data['result'] = I('post.result',0,'intval');
            $data['suggestion'] = $suggestion;
            if(empty($data['suggestion'])||!isset($data['suggestion'])){
                show(0,'请填写意见！');
            }else{
               $res =  D('Report')->updateReportById($rid,$data);
               if($res){
                   show(1,'意见已更新！');
               }else{
                   show(-1,'意见更新失败！');
               }
            }
       }else{
           $detail = D('ReportView')->getReportById($rid);
           $this->assign('report',$detail);
           $this->display();
       }
     }
 }