<?php
namespace Student\Model;
use Think\Model;

class ReportModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('Report');
    }

//    public $viewFields = array(
//        'Report'=>array('id'=>'rid','pubtime','status'),
//        'Student'=>array('id'=>'sid','studentno','name','class','_on'=>'Report.student_id = Student.studentno'),
//        'Class'=>array('id'=>'cid','name'=>'classname','_on'=>'Student.class=Class.id'),
//    );

    public function getReportData($user) {
        return $this->_db->field('s.studentno,s.name,s.classno,r.id,r.status,r.pubtime,c.classname')->table('dg_student s,dg_report r,dg_class c')->
        where('s.studentno=r.student_id and name="'.$user.'" and c.id = s.classno')->select();

    }

    public function getReportById($id) {
        return $this->_db->where('id='.$id)->find();
    }

    public function insert($data) {
        if(!$data || !is_array($data)){
            return show(0,'数据不合法');
        }
        return $this->_db->add($data);
    }

    public function UpdateReportById($id,$data) {
        if(!$data || !is_array($data)){
            return show(0,'数据不合法');
        }

        return $this->_db->where('id='.$id)->save($data);
    }




}