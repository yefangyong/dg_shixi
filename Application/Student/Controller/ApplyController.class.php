<?php
namespace Student\Controller;
use Think\Controller;

class ApplyController extends Controller {

    public function index() {
        if($_POST) {
            if(!$_POST['cname'] || !isset($_POST['cname'])) {
                return show(0,'请选择企业名称！');
            }
            if(!$_POST['position'] || !isset($_POST['position'])) {
                return show(0,'请填写实习岗位！');
            }
            if(!$_POST['phone'] || !isset($_POST['phone'])) {
                return show(0,'请填写联系方式！');
            }
            $user = $_SESSION['adminUser']['username'];
            $sid = D('Student')->getStudentId($user);
            $_POST['student_id'] = $sid['studentno'];
            $corporation = M('corporation')->where('name="'.$_POST['cname'].'"')->find();
            if(!$corporation) {
                return show(0,'不存在这个公司!');
            }
            $_POST['corporation_id'] = $corporation['id'];
            $rel = M('practice')->add($_POST);
            if($rel) {
                return show(1,'提交成功，请等待审核!');
            }else {
                return show(0,'提价失败!');
            }
        }else {
            $corpration = M('corporation')->select();
            $this->assign('corporation',$corpration);
            $this->display();
        }

    }

    public function leave() {
        if($_POST) {
            $user = $_SESSION['adminUser']['username'];
            $sid = D('Student')->getStudentId($user);
            $_POST['student_id'] = $sid['studentno'];
            $rel = M('leave')->add($_POST);
            if($rel) {
                return show(1,'提交成功,请等待审核!');
            }else {
                return show(0,'提交失败!');
            }
        }else{
            $this->display();
        }
    }

    public function changeCorporation() {
        if($_POST) {
            if(!$_POST['cname'] || !isset($_POST['cname'])) {
                return show(0,'请选择企业名称！');
            }
            if(!$_POST['position'] || !isset($_POST['position'])) {
                return show(0,'请填写实习岗位！');
            }
            if(!$_POST['phone'] || !isset($_POST['phone'])) {
                return show(0,'请填写联系方式！');
            }
            if(!$_POST['reason'] || !isset($_POST['reason'])) {
                return show(0,'请填写变更原因！');
            }
           if($_POST['type'] == '单位') {
               $_POST['type'] = 0;
           }
            $_POST['applytime'] = date('Y-m-d H:i:s',time());
            $user = $_SESSION['adminUser']['username'];
            $sid = D('Student')->getStudentId($user);
            $_POST['student_id'] = $sid['studentno'];
            $corporation = M('corporation')->where('name="'.$_POST['cname'].'"')->find();
            if(!$corporation) {
                return show(0,'不存在这个公司!');
            }
            $_POST['corporation_id'] = $corporation['id'];
            $rel = M('change')->add($_POST);
            if($rel) {
                return show(1,'提交成功，请等待审核!');
            }else {
                return show(0,'提交失败!');
            }
        }else {
            $corpration = M('corporation')->select();
            $this->assign('corporation',$corpration);
            $this->display();
        }

    }

    public function changeJob() {
        if($_POST) {
            if($_POST['type'] == '岗位') {
                $_POST['type'] = 1;
            }
            if(!$_POST['position'] || !isset($_POST['position'])) {
                return show(0,'请填写实习岗位！');
            }
            if(!$_POST['reason'] || !isset($_POST['reason'])) {
                return show(0,'请填写变更原因！');
            }
            if(!$_POST['cor_teacher'] || !isset($_POST['cor_teacher'])) {
                return show(0,'请填写企业老师！');
            }
            if(!$_POST['phone'] || !isset($_POST['phone'])) {
                return show(0,'请填写联系方式！');
            }
            if(!$_POST['teacher_email'] || !isset($_POST['teacher_email'])) {
                return show(0,'请填写老师邮箱！');
            }
            $_POST['applytime'] = date('Y-m-d H:i:s',time());
            $user = $_SESSION['adminUser']['username'];
            $sid = D('Student')->getStudentId($user);
            $_POST['student_id'] = $sid['studentno'];
            $_POST['corporation_id'] = $sid['corporation_id'];
            $rel = M('change')->add($_POST);
            if($rel) {
                return show(1,'提交成功，请等待审核!');
            }else {
                return show(0,'提交失败!');
            }
        }else {
            $this->display();
        }

    }
}