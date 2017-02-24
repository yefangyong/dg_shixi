<?php
namespace  Teacher\Model;
use Think\Model\ViewModel;

class ChangeViewModel extends ViewModel{
    public $viewFields = array(
        'Change' => array('id'=>'chid','applytime','type','profession','insurance','reason','status','_as'=>'myChange'),
        'Corporation' => array('name'=>'corname','address','_on'=>'myChange.corporation_id = Corporation.id'),
        'Practice' => array('guide','position','_on'=>'myChange.corporation_id = Practice.corporation_id'),
        'Student' => array('name'=>'stuname','studentno','phone','_on'=>'Student.studentno = myChange.student_id'),
        'Class' => array('classname','_on'=>"Student.classno = Class.id"),
        'Profession' => array('name'=>'proname','_on'=>'Class.profession = Profession.id'),
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