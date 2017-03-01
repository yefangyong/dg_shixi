<?php
namespace Student\Model;
use Think\Model;

class GradeModel extends Model {
    private  $_db = '';

    public function __construct() {
        $this->_db = M('Grade');
    }

    public function getGradeById($id) {
      return  $this->_db->where('student_id='.$id)->find();
    }
}