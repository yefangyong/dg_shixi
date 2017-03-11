<?php
namespace Teacher\Model;
use Think\Model\ViewModel;

class LeaveViewModel extends ViewModel{
    public $viewFields = array(
        'Leave' => array('id','emegencyconcat','telephone','content','status','applytime','starttime','endtime','student_id','_as'=>'myLeave','_type'=>'LEFT'),
        'Student' => array('name'=>'stuname','studentno','_on'=>'myLeave.student_id = Student.studentno','_type'=>'LEFT'),
        'Class' => array('classname','_on'=>'Student.classno = Class.id','_type'=>'LEFT'),

        'Practice' => array('position','starttime','endtime','_on'=>'myLeave.student_id = Student.studentno','_type'=>'LEFT'),
        'Corporation' => array('name'=>'corname','city','contact','telephone','detailaddress','address'=>'coraddress','_on'=>'Practice.corporation_id = Corporation.id','_type'=>'LEFT'),
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