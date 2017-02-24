<?php
namespace Student\Model;
use Think\Model;

class ApplyModel extends Model {

    public function insertLeave($data) {
        $leave = M('leave');
        return $leave->table('leave')->add($data);
    }
}