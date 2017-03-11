<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class ReportViewModel extends ViewModel{
     public $viewFields = array(
        'Report' => array('id'=>'rid','pubtime','pic','status','title','content','course','result','address','suggestion','score','_type'=>'LEFT'),
        'Student' => array('id'=>'sid','studentno','name','classno','_on'=>'Report.student_id = Student.studentno','_type'=>'LEFT'),
        'Class' => array('id'=>'cid','classname','_on'=>'Student.classno=Class.id','_type'=>'LEFT'),
        'Profession' => array('_on'=>'Profession.id = Class.profession','_type'=>'LEFT'),
        'Practice' => array('cname','_on'=>'Student.studentno = Practice.student_id','_type'=>'LEFT'),
     );

     public function getReportById($rid)
     {
         if(!isset($rid)||empty($rid)){
             return 0;
         }
         return $this->where("Report.id = ".$rid)->find();
     }

     public function getReportByStuno($stuno,$type=0)
     {

         if(!isset($stuno)&&empty($stuno)){
             return 0;
         }

         if(!in_array($type,array(0,1))){
             return 0;
         }
         $map['Report.student_id'] = $stuno;
         $map['Report.type'] = $type;

         return $this->where($map)->select();
     }

     public function getResult($data){
         if(!is_array($data)||empty($data)){
             return 0;
         }
         return $this->where($data)->select();
     }

     public function getAllReportByProfession($proid,$type =0)
     {
         if(!isset($proid)||empty($proid)){
             return '';
         }
         $data['Profession.id'] = $proid;
         $data['Report.type'] = $type;
        return $this->where($data)->select();
     }

     public function getAllReportByMaster($masterid)
     {
        if(!isset($masterid)||empty($masterid)){
            return '';
        }
        return $this->where("Class.master_no = ".$masterid)->select();
     }

 }
