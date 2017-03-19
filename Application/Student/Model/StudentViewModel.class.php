<?php
namespace Student\Model;
use Think\Model\ViewModel;

class StudentViewModel extends ViewModel {
    public $viewFields = array(

        'Student' => array('studentno','phone','email','address','name','id'=>'sid','_as'=>'Student'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id'),
        'Department'=>array('dname','_on'=>'Student.department_id=Department.id'),
        'Teacher'=>array('name'=>'teacher_name','_on'=>'Student.classno=Teacher.class_id')
    );


}