<?php
 namespace Teacher\Model;
 use Think\Model\ViewModel;

 class SchoolViewModel extends ViewModel{
     public $viewFields = [
         'Class' => array('classname'),
         'Profession' => array('_on'=>'Profession.id = Class.profession','_type'=>'LEFT'),
         'School' => array('name'=>'deptname','_on'=>'Profession.school = School.id','_type'=>'LEFT'),
     ];


     public function getAllClass($profession)
     {
         return $this->where("profession.id = ".$profession)->select();
     }


 }


