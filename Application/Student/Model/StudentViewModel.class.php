<?php
namespace Student\Model;
use Think\Model\ViewModel;

class StudentViewModel extends ViewModel {
    public $viewFields = array(

        'Student' => array('studentno','phone','email','address','name','id'=>'sid','_as'=>'Student','_type'=>'LEFT'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id','_type'=>'LEFT'),
        'Department'=>array('dname','_on'=>'Student.department_id=Department.id','_type'=>'LEFT'),
        'Teacher'=>array('name'=>'teacher_name','_on'=>'Student.classno=Teacher.class_id')
    );


}