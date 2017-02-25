<?php
namespace Student\Model;
use Think\Model;

class LeaveModel extends Model {
    private $_db = '';
    public function __construct() {
        $this->_db = M('Leave');
    }

    public function getLeave($id) {
        return $this->_db->where('student_id='.$id)->select();
    }
}