<?php
namespace Student\Model;
use Think\Model\ViewModel;

class LeaveViewModel extends ViewModel {
    public $viewFields = array(

        'Leave' => array('applytime','teacher_id','status','_as'=>'myLeave'),
        'Student' => array('studentno','name','id'=>'sid','_on'=>'myLeave.student_id=Student.studentno'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id')

    );

    public function getLeaveInfo($id) {
        return $this->where('myLeave.student_id='.$id)->select();
    }
}