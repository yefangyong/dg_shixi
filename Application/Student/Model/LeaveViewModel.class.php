<?php
namespace Student\Model;
use Think\Model\ViewModel;

class LeaveViewModel extends ViewModel {
    public $viewFields = array(

        'Leave' => array('id','applytime','student_id','stu_del','teacher_id','status','_as'=>'myLeave','_type'=>'LEFT'),
        'Student' => array('studentno','name','id'=>'sid','_on'=>'myLeave.student_id=Student.studentno','_type'=>'LEFT'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id')

    );

    public function getLeaveInfo($id) {
        return $this->where('myLeave.student_id='.$id)->order('myLeave.applytime desc')->select();
    }
}