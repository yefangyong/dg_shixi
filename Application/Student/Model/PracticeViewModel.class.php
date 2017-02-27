<?php
namespace Student\Model;
use Think\Model\ViewModel;

class PracticeViewModel extends ViewModel {
    public $viewFields = array(

        'Practice' => array('id','starttime','teacher_id','status','_as'=>'myPractice'),
        'Student' => array('studentno','name','id'=>'sid','_on'=>'myPractice.student_id=Student.studentno'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id')

    );

    public function getPracticeInfo($id) {
        return $this->where('myPractice.student_id='.$id)->find();
    }
}