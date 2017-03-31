<?php
namespace Student\Model;
use Think\Model\ViewModel;

class ChangeViewModel extends ViewModel {
    public $viewFields = array(

        'Change' => array('id','applytime','teacher_id','status','_as'=>'myChange','_type'=>'LEFT'),
        'Student' => array('studentno','name','id'=>'sid','_on'=>'myChange.student_id=Student.studentno','_type'=>'LEFT'),
        'Teacher' => array('teacherno','name'=>'teacher_name','id'=>'sid','_on'=>'myChange.teacher_id=Teacher.teacherno','_type'=>'LEFT'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id')

    );

    public function getChangeInfo($id) {
        return $this->where('myChange.student_id='.$id)->find();
    }
}