<?php
namespace Teacher\Model;
use Think\Model\ViewModel;

class PracticeViewModel extends ViewModel{
    public $viewFields = array(
        'Practice' => array('id'=>'pid','student_id','corporation_id','status','starttime','endtime','position','applytime','guide','teacher','mode'),
        'Student' => array('studentno','phone','name'=>'stuname','classno','_on'=>'Practice.student_id = Student.studentno'),
        'Class' => array('id'=>'cid','classname','profession','grade','_on'=>' Student.classno = Class.id'),
        'Corporation' => array('id'=>'corid','name'=>'corname','city','contact','telephone','address','_on'=>'Practice.corporation_id = Corporation.id'),
        'Profession' => array('name'=>'proname','_on'=>'Profession.id = Class.profession'),
    );


    public function getApply($chid){
        if(!isset($chid)||empty($chid)){
            return 0;
        }
        return $this->where("Practice.id = ".$chid)->find();
    }
}