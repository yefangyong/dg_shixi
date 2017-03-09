<?php
namespace Student\Model;
use Think\Model\ViewModel;

class ReportViewModel extends ViewModel {
    public $viewFields = array(
        'Report'=>array('id','pubtime','student_id','status','_as'=>'myReport'),
        'Student'=>array('id'=>'sid','studentno','name','classno','_on'=>'myReport.student_id = Student.studentno'),
        'Class'=>array('id'=>'cid','classname','_on'=>'Student.classno=Class.id'),
    );
}