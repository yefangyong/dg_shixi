<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class StudentViewModel extends ViewModel{
     public $viewFields = array(
         'Student' => array('studentno','name','address','email','sex','phone','id'=>'sid'),
         'Class' => array('classname','grade','master','_on'=>'Class.id = Student.classno'),
         'Profession' => array('name'=>'deptname','_on'=>'Profession.id = Class.profession'),
     );

     public function getStudentInfo($id)
     {
         return $this->where("Student.id = ".$id)->find();
     }


 }