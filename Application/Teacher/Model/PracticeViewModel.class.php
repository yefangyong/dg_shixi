<?php
namespace Teacher\Model;
use Think\Model\ViewModel;

class PracticeViewModel extends ViewModel{
    public $viewFields = array(
        'Student' => array('id'=>'sid','studentno','phone','name'=>'stuname','classno','_type'=>'LEFT'),
        'Practice' => array('id'=>'pid','student_id','corporation_id','cname','status','starttime','endtime','position','applytime','guide','teacher','phone'=>'pracphone','mode','insurance','profession','address','detailaddress','_on'=>'Practice.student_id = Student.studentno','_type'=>'LEFT'),
        'Class' => array('id'=>'cid','classname','grade','_on'=>' Student.classno = Class.id','_type'=>'LEFT'),
        'Corporation' => array('id'=>'corid','name'=>'corname','city','contact','telephone','detailaddress'=>'cordetailaddress','address'=>'coraddress','_on'=>'Practice.corporation_id = Corporation.id')
    );

    public function getApply($chid){
        if(!isset($chid)||empty($chid)){
            return 0;
        }
        return $this->where("Practice.id = ".$chid)->find();
    }
}