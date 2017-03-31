<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class StudentViewModel extends ViewModel{
     public $viewFields = array(
         'Student' => array('id','studentno','password','phone'=>'stu_phone','name','address','email','sex','phone'=>'stuphone','id'=>'sid','emegencyconcat','emegencyphone','_type'=>'LEFT'),
         'Class' => array('classname','grade','master','_on'=>'Class.id = Student.classno','_type'=>'LEFT'),
         'Department' => array('dname','_on'=>'Department.id = Class.dep_id','_type'=>'LEFT'),
         'School' => array('name'=>'deptname','_on'=>'Department.school_id = School.id','_type'=>'LEFT'),
         'Practice' => array('guide','phone','cname','address'=>'pracaddress','isPractice','position','starttime','endtime','_on'=>'Practice.student_id = Student.studentno','_type'=>'LEFT'),
         'Corporation' => array('name'=>'corname','_on'=>'Practice.corporation_id = Corporation.id','_type'=>'LEFT'),
         'Report' =>array('id'=>'rid','pubtime','pic','status','title','content','course','result','address'=>'reportaddress','suggestion','_on'=>'Report.student_id = Student.studentno'),
         );

     public function getStudentInfo($id)
     {
         return $this->where("Student.id = ".$id)->find();
     }

 }