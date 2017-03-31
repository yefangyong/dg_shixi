<?php
namespace Student\Model;
use Think\Model\ViewModel;

class ReportViewModel extends ViewModel {
    public $viewFields = array(
        'Report'=>array('id','pubtime','score','student_id','status','_as'=>'myReport','_type'=>'LEFT'),
        'Student'=>array('id'=>'sid','studentno','name','classno','_on'=>'myReport.student_id = Student.studentno','_type'=>'LEFT'),
        'Class'=>array('id'=>'cid','classname','_on'=>'Student.classno=Class.id'),
    );
}