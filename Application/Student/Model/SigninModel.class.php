<?php
namespace Student\Model;
use Think\Model;
class SigninModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('Signin');
    }

    public function getSigninById($id) {
        return $this->_db->where('student_id='.$id)->order('pubtime desc')->find();
    }
}