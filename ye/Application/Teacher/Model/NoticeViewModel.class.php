<?php
namespace Teacher\Model;
use Think\Model\ViewModel;

class NoticeViewModel extends ViewModel {
    public $viewFields = array(
        'Notice' => array('id'=>'nid','pubtime','title','content'),
        'Teacher' => array('id'=>'tid','name'=>'teacher_name','_on'=>'Notice.user_id = Teacher.teacherno'),
        'Profession' => array('id'=>'pid','name','_on'=>'Notice.pro_id=Profession.id'),
    );

}