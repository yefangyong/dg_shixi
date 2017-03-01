<?php
namespace Student\Controller;
use Think\Controller;

class ContactController extends Controller {
    public function student() {
        $data = M('Student')->select();
       foreach ($data as $k=>$v) {
           $corporation_id = $data[$k]['corporation_id'];
           $corporation = M('Corporation')->where('id='.$corporation_id)->find();
           $data[$k]['cname'] = $corporation['name'];
       }
        $this->assign('list',$data);
        $this->display();
    }

    public function teacher() {
        $data = M('Teacher')->select();
        foreach($data as $k=>$v) {
            $did = $data[$k]['department_id'];
            $department = M('Department')->where('id='.$did)->find();
            $data[$k]['dname'] = $department['dname'];

        }
        $this->assign('list',$data);
        $this->display();
    }
}