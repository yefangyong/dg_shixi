<?php
namespace Student\Model;
use Think\Model;

class NoticeModel extends Model {
    private $_db = '';

    public function __construct() {
        $this->_db = M('Notice');
    }

    public function getNoticeData() {
        return $this->_db->field('n.id,n.title,n.pubtime,t.name')->table('dg_notice n,dg_teacher t')->where('n.user_id = t.teacherno')->select();
    }
}