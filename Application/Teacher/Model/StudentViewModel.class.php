<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class StudentViewModel extends ViewModel{
     public $viewFields = array(
         'Student' => array('id','studentno','password','name','address','email','sex','phone'=>'stuphone','id'=>'sid'),
         'Class' => array('classname','grade','master','_on'=>'Class.id = Student.classno'),
         'Profession' => array('_on'=>'Profession.id = Class.profession'),
         'School' => array('name'=>'deptname','_on'=>'Profession.school = School.id'),
         'Practice' => array('guide','phone','isPractice','position','starttime','endtime','_on'=>'Practice.student_id = Student.studentno'),
         'Corporation' => array('name'=>'corname','_on'=>'Practice.corporation_id = Corporation.id'),
         'Report' =>array('id'=>'rid','pubtime','pic','status','title','content','course','result','address','suggestion'),
         );

     public function getStudentInfo($id)
     {
         return $this->where("Student.id = ".$id)->find();
     }

 }