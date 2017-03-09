<?php
namespace Student\Controller;
use Think\Controller;

class ApplyController extends Controller {

    public function index() {
        $user = $_SESSION['adminUser'];
        $data = M('Practice')->where('student_id='.$user['studentno'])->find();
        if(!$data) {
            return $this->display('Apply/noapply');
        }else {
            $data = D('PracticeView')->getPracticeInfo($user['studentno']);
            if($data['status'] == 1 || $data['status'] == -1) {
                $teacher = M('Teacher')->where('teacherno='.$data['teacher_id'])->find();
                $data['teacher'] = $teacher['name'];
            }else {
                $data['teacher'] = '';
            }
            $this->assign('list',$data);
            return $this->display();
        }
    }

    public function delApply() {
        $id = $_POST['id'];
        $rel = M('Practice')->where('id='.$id)->delete();
        if($rel) {
            return show(1,'删除成功!');
        }else {
            return show(0,'删除失败!');
        }
    }

    public function viewApply() {
        $id = $_GET['id'];
        $rel = M('Practice')->where('id='.$id)->find();
        if($rel) {
            $user = $_SESSION['adminUser'];
            $this->assign('student',$user);
            $this->assign('practice',$rel);
            $corporation = M('corporation')->where('id='.$rel['corporation_id'])->find();
            $this->assign('corporation',$corporation);
            $this->display();
        }else {
            return show(0,'不存在此申请信息!');
        }
    }

    public function add() {
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
            $user = $_SESSION['adminUser'];
            $_POST['student_id'] = $user['studentno'];
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

    /**
     * 请假申请
     */
    public function addLeave() {
        if($_POST) {
            if(!$_POST['content'] || !isset($_POST['content'])) {
                return show(0,'请假原因不得为空！');
            }
            if(!$_POST['emegencyconcat'] || !isset($_POST['emegencyconcat'])) {
                return show(0,'紧急联系人不得为空！');
            }
            if(!$_POST['telephone'] || !isset($_POST['telephone'])) {
                return show(0,'手机号码不得为空！');
            }
            if(!$_POST['starttime'] || !isset($_POST['starttime'])) {
                return show(0,'开始时间不得为空！');
            }
            if(!$_POST['endtime'] || !isset($_POST['endtime'])) {
                return show(0,'结束时间不得为空！');
            }
            $_POST['applytime'] = date('Y-m-d H:i:s',time());
            $user = $_SESSION['adminUser'];
            $_POST['student_id'] = $user['studentno'];
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

    public function leave() {
        $user = $_SESSION['adminUser'];
        $rel = D('Leave')->getLeave($user['studentno']);
        if(!$rel) {
            return $this->display('Apply/noleave');
        }else {
            $data = D('LeaveView')->getLeaveInfo($user['studentno']);
            foreach ($data as $k=>$v) {
                if($data[$k]['status'] == 1) {
                    $teacher = M('Teacher')->where('teacherno='.$data[$k]['teacher_id'])->find();
                    $data[$k]['teacher'] =$teacher['name'];
                }else {
                    $data[$k]['teacher'] = '';
                }
            }
            $this->assign('list',$data);
            $this->display();
        }
    }

    public function delLeave() {
        $id = $_POST['id'];
        $rel = M('Leave')->where('id='.$id)->delete();
        if($rel) {
            return show(1,'删除成功!');
        }else {
            return show(0,'删除失败!');
        }
    }

    public function viewLeave() {
        $id = $_GET['id'];
        $rel = M('Leave')->where('id='.$id)->find();
        if($rel) {
            $this->assign('rel',$rel);
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
            $user = $_SESSION['adminUser'];
            $_POST['student_id'] = $user['studentno'];
            $corporation = M('corporation')->where('name="'.$_POST['cname'].'"')->find();
            if(!$corporation) {
                $_POST['corporation_id'] = 0;
            }
            $_POST['corporation_id'] = $corporation['id'];
            $practice = M('Practice')->where('student_id='.$user['studentno'])->find();
            if(!$practice) {
                return show(0,'请先添加实习申请!');
            }
            $data = M('Change')->where('student_id='.$user['studentno'])->find();
            if($data) {
                return show(0, '请不要重复申请变更!');
            }else {
                $rel = M('change')->add($_POST);
                if($rel) {
                    return show(1,'提交成功，请等待审核!');
                }else {
                    return show(0,'提交失败!');
                }
            }
        }else {
            $corpration = M('corporation')->select();
            $this->assign('corporation',$corpration);
            $this->display();
        }

    }

    public function changeJob() {
        if($_POST) {
            if(!$_POST['position'] || !isset($_POST['position'])) {
                return show(0,'请填写实习岗位！');
            }
            if(!$_POST['reason'] || !isset($_POST['reason'])) {
                return show(0,'请填写变更原因！');
            }
            if(!$_POST['guide'] || !isset($_POST['guide'])) {
                return show(0,'请填写企业老师！');
            }
            if(!$_POST['phone'] || !isset($_POST['phone'])) {
                return show(0,'请填写联系方式！');
            }
            if(!$_POST['guide_email'] || !isset($_POST['guide_email'])) {
                return show(0,'请填写老师邮箱！');
            }
            if($_POST['type'] == '岗位') {
                $_POST['type'] = 1;
            }
            $_POST['applytime'] = date('Y-m-d H:i:s',time());
            $user = $_SESSION['adminUser'];
            $_POST['student_id'] = $user['studentno'];
            $_POST['corporation_id'] = $user['corporation_id'];
            $practice = M('Practice')->where('student_id='.$user['studentno'])->find();
            if(!$practice) {
                return show(0,'请先添加实习申请!');
            }
            $data = M('Change')->where('student_id='.$user['studentno'])->find();
            if($data) {
                return show(0,'请不要重复申请!');
            }else {
                $rel = M('change')->add($_POST);
                if($rel) {
                    return show(1,'提交成功，请等待审核!');
                }else {
                    return show(0,'提交失败!');
                }
            }
        }else {
            $this->display();
        }

    }

    public function change() {
        $user = $_SESSION['adminUser'];
        $rel = M('Change')->where('student_id='.$user['studentno'])->find();
        if(!$rel) {
            $this->display('Apply/nochange');
        }else {
            $data = D('ChangeView')->getChangeInfo($user['studentno']);
            if($data['status'] == 1) {
                $teacher = M('Teacher')->where('teacherno='.$data['teacher_id'])->find();
                $data['teacher'] = $teacher['name'];
            }else {
                $data['teacher'] = '';
            }
            $this->assign('data',$data);
            $this->display();
        }
    }

    public function delChange() {
        $id  = $_POST['id'];
        $rel = M('Change')->where('id='.$id)->delete();
        if($rel) {
            return show(1,'删除成功!');
        } else {
            return show(0,'删除失败!');
        }
    }

    public function viewChange() {
        $id = $_GET['id'];
        $change = M('Change')->where('id='.$id)->find();
        if($change['type'] == 0) {
            //变更单位
            $user = $_SESSION['adminUser'];
            $corporation = M('Corporation')->where('id='.$user['corporation_id'])->find();
            $change = M('Change')->where('student_id='.$user['studentno'])->find();
            $this->assign('student',$user);
            $this->assign('practice',$corporation);
            $this->assign('change',$change);
            $this->display('Apply/viewChangeCorporation');
        }elseif($change['type'] == 1) {
            //变更岗位
            $user = $_SESSION['adminUser'];
            $practice = M('Practice')->where('student_id='.$user['studentno'])->find();
            $corporation = M('Corporation')->where('id='.$user['corporation_id'])->find();
            $change = M('Change')->where('student_id='.$user['studentno'])->find();
            $this->assign('corporation',$corporation);
            $this->assign('practice',$practice);
            $this->assign('student',$user);
            $this->assign('change',$change);
            $this->display('Apply/viewChangeJob');
        }
    }



}