<?php
namespace Student\Model;
use Think\Model;

class ReportModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('Report');
    }

    public function getWeekReportData($user,$currentPage,$listRows) {
        return $this->_db->field('s.studentno,s.name,s.classno,r.id,r.status,r.pubtime,c.classname')->table('dg_student s,dg_report r,dg_class c')->
        where('s.studentno=r.student_id and name="'.$user.'" and c.id = s.classno and r.type=0')->order('r.pubtime desc')->page($currentPage.','.$listRows)->select();

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

    //周报数量
    public function getWeekReportCountById($id) {
        $data =array(
            'student_id'=>$id,
            'type'=>0
        );
        return $this->_db->where($data)->Count();
    }

    //月报数量
    public function getMonthReportCountById($id) {
        $data =array(
            'student_id'=>$id,
            'type'=>1
        );
        return $this->_db->where($data)->Count();
    }

    //实习小结
    public function getReportSum($id) {
        $data =array(
            'student_id'=>$id,
            'type'=>2
        );
        return $this->_db->where($data)->Count();
    }

    public function delReport($id) {
        if(!isset($id) || empty($id)) {
            return 0;
        }
        $data = [
            'stu_del'=>0,
        ];
        if(is_array($id)) {
            return $this->_db->where("`id` IN(".implode(',',$id).")")->save($data);
        }else {
            return $this->_db->where('id='.$id)->save($data);
        }
    }






}