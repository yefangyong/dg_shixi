<?php
namespace Student\Model;
use Think\Model;

class StudentModel extends Model {

    private $_db = '';

    public function __construct() {
        $this->_db = M('Student');
    }

    public function getStudentId($user) {
        return $this->_db->field('studentno,corporation_id,name,phone')->where('name="'.$user.'"')->find();
    }
}