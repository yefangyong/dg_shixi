<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class StudentsViewModel extends ViewModel{
     public $viewFields = array(
         'Student' => array('id','studentno','password','name','address','email','sex','phone'=>'stuphone','id'=>'sid','_type'=>'LEFT'),
         'Class' => array('classname','grade','master','_on'=>'Class.id = Student.classno','_type'=>'LEFT'),
         'Profession' => array('_on'=>'Profession.id = Class.profession','_type'=>'LEFT'),
         'School' => array('name'=>'deptname','_on'=>'Profession.school = School.id','_type'=>'LEFT'),
     );

     public function getStudentInfo($id)
     {
         return $this->where("Student.id = ".$id)->find();
     }
 }