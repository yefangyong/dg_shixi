<?php
namespace Student\Model;
use Think\Model\ViewModel;

class ChangeViewModel extends ViewModel {
    public $viewFields = array(

        'Change' => array('applytime','teacher_id','status','_as'=>'myChange'),
        'Student' => array('studentno','name','id'=>'sid','_on'=>'myChange.student_id=Student.studentno'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id')

    );

    public function getChangeInfo($id) {
        return $this->where('myChange.student_id='.$id)->find();
    }
}