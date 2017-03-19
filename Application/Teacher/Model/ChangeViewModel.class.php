<?php
namespace  Teacher\Model;
use Think\Model\ViewModel;

class ChangeViewModel extends ViewModel{
    public $viewFields = array(
        'Change' => array('id'=>'chid','applytime','guide','profession','position'=>'forposition','insurance','reason','status','type','_as'=>'myChange','_type'=>'LEFT'),
        'Corporation' => array('name'=>'corname','city','contact','telephone','detailaddress','address'=>'coraddress','_on'=>'myChange.corporation_id = Corporation.id','_type'=>'LEFT'),
        'Student' => array('name'=>'stuname','studentno','phone','_on'=>'Student.studentno = myChange.student_id','_type'=>'LEFT'),
        'Practice' => array('position','starttime','endtime','_on'=>'Practice.student_id = Student.studentno','_type'=>'LEFT'),
        'Class' => array('classname','_on'=>"Student.classno = Class.id",'_type'=>'LEFT'),
    );

    public function getApply($chid){
        if(!isset($chid)||empty($chid)){
            return 0;
        }
        return $this->where("myChange.id = ".$chid)->find();
    }

    public function getCor()
    {
        return $this->where("myChange.type = 1")->select();
    }


    public function getPosition()
    {
        return $this->where("myChange.type = 0")->select();
    }
}