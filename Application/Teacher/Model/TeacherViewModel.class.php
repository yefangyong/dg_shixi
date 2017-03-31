<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class TeacherViewModel extends ViewModel{
     public $viewFields = array(
         'Teacher' => array('*','_type'=>'LEFT'),
         'Class' => array('classname','grade','master','_on'=>'Class.master_no = Teacher.teacherno','_type'=>'LEFT'),
         'Department' => array('dname','_on'=>'Department.id = Teacher.department_id','_type'=>'LEFT')
         );

     public function getTeacherInfo($id)
     {
         return $this->where("Teacher.id = ".$id)->find();
     }

 }