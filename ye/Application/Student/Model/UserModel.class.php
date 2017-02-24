<?php
namespace Student\Model;
use Think\Model;

class UserModel extends Model {
    private $_db = '';

    public function __construct(){
        $this->_db = M('User');
    }

    public function getStudentByUserName($username) {
        $data = array(
            'type' => array('eq',0),

        );
        $rel = $this->_db->where(['username="'.$username.'"',$data])->find();
        return $rel;
    }
}