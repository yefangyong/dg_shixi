<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class StudentsViewModel extends ViewModel{
     public $viewFields = array(
         'Student' => array('id','studentno','password','name','address','email','sex','phone'=>'stuphone','id'=>'sid','_type'=>'LEFT'),
         'Practice' => array('guide','phone','address'=>'pracaddress','isPractice','position','starttime','endtime','_on'=>'Practice.student_id = Student.studentno and Practice.status=1','_type'=>'LEFT'),
         'Class' => array('classname','grade','master','_on'=>'Class.id = Student.classno','_type'=>'LEFT'),
         'Department' => array('_on'=>'Department.id = Class.dep_id','_type'=>'LEFT'),
         'School' => array('name'=>'deptname','_on'=>'Department.school_id = School.id','_type'=>'LEFT'),
     );

     public function getStudentInfo($id)
     {
         return $this->where("Student.id = ".$id)->find();
     }
 }