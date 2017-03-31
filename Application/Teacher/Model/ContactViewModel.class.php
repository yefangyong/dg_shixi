<?php
namespace Teacher\Model;
use Think\Model\ViewModel;

class ContactViewModel extends ViewModel{
    public $viewFields = array(
        'Student' => array('name'=>'stuname','studentno','phone','emegencyconcat','emegencyphone','_type'=>'LEFT'),
        'Practice' => array('cname','_on'=>'Practice.student_id = Student.studentno and Practice.status=1','_type'=>'LEFT'),
        'Corporation' => array('name'=>'corname','contact','telephone','_on'=>'Practice.corporation_id = Corporation.id','_type'=>'LEFT'),
    );
}