<?php
namespace Teacher\Model;
use Think\Model\ViewModel;

class LeaveViewModel extends ViewModel{
    public $viewFields = array(
        'Leave' => array('id','emegencyconcat','telephone','content','status','applytime','starttime','endtime','student_id','_as'=>'myLeave','_type'=>'LEFT'),
        'Student' => array('name'=>'stuname','studentno','_on'=>'myLeave.student_id = Student.studentno','_type'=>'LEFT'),
        'Practice' => array('cname','_on'=>'Student.studentno = Practice.student_id','_type'=>'LEFT'),
        'Class' => array('classname','_on'=>'Student.classno = Class.id','_type'=>'LEFT')
    );

    public function getLeave($id)
    {
        if(!isset($id)||empty($id)){
            return 0;
        }
        return $this->where("myLeave.id = ".$id)->find();
    }

    public function getLeaveByStuno($stuno)
    {

        if(!isset($stuno)&&empty($stuno)){
            return 0;
        }

        $map['myLeave.student_id'] = $stuno;
        return $this->where($map)->select();
    }

}