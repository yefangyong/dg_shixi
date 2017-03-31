<?php
namespace Student\Model;
use Think\Model\ViewModel;

class PracticeViewModel extends ViewModel {
    public $viewFields = array(

        'Practice' => array('id','isPractice','corporation_id','cname','position','starttime','endtime','guide','phone','applytime','teacher_id','status','_as'=>'myPractice','address','_type'=>'LEFT'),
        'Student' => array('studentno','name','id'=>'sid','_on'=>'myPractice.student_id=Student.studentno','_type'=>'LEFT'),
        'Class'=>array('classname','_on'=>'Student.classno=Class.id','_type'=>'LEFT'),
        'Corporation'=>array('id'=>'cid','name'=>'corname','isUsed','address'=>'coraddress','_on'=>'myPractice.corporation_id=Corporation.id')
    );

    public function getPracticeInfo($id) {
        return $this->where('myPractice.student_id='.$id)->find();
    }
}