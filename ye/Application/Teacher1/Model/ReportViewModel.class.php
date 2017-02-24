<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class ReportViewModel extends ViewModel{
     public $viewFields = array(
        'Report' => array('id'=>'rid','pubtime','status','title','content','course','result','address','suggestion'),
        'Student' => array('id'=>'sid','studentno','name','classno','_on'=>'Report.student_id = Student.studentno'),
        'Class' => array('id'=>'cid','classname','_on'=>'Student.classno=Class.id'),
     );

     public function getReportById($rid)
     {
         if(!isset($rid)||empty($rid)){
             return 0;
         }
         return $this->where("Report.id = ".$rid)->find();
     }

     public function getResult($data){
         if(!is_array($data)||empty($data)){
             return 0;
         }
         return $this->where($data)->select();
     }
 }
