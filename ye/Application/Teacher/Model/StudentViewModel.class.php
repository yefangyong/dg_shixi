<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class StudentViewModel extends ViewModel{
     public $viewFields = array(
         'Student' => array('studentno','name','address','email','sex','phone','id'=>'sid'),
         'Class' => array('classname','grade','master','_on'=>'Class.id = Student.classno'),
         'Profession' => array('_on'=>'Profession.id = Class.profession'),
         'School' => array('name'=>'deptname','_on'=>'Profession.school = School.id'),
     );

     public function getStudentInfo($id)
     {
         return $this->where("Student.id = ".$id)->find();
     }


 }