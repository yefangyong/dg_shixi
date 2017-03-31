<?php
namespace Student\Controller;
use Think\Controller;

class ApplyController extends CommonController {

    public function index() {
        $user = $_SESSION['adminUser'];
        $condition = [
            'student_id'=>$user['studentno'],
            'mode'=>1
        ];
        $data = M('Practice')->where($condition)->find();
        if(!$data) {
            return $this->display('Apply/noapply');
        }else {
            $data = D('PracticeView')->getPracticeInfo($user['studentno']);
            if($data['status'] == 1 || $data['status'] == -1) {
                $teacher = M('Teacher')->where('teacherno='.$data['teacher_id'])->find();
                $data['teacher'] = $teacher['name'];
            }else {
                $rel = M('Teacher')->where('class_id='.$user['classno'])->find();
                $data['teacher'] = $rel['name'];
            }
            $this->assign('list',$data);
            return $this->display();
        }
    }

    public function delApply() {
        $id = $_POST['id'];
        $data = [
            'id'=>$id,
            'status'=>0,
        ];
        $rel = M('Practice')->where($data)->delete();
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
            $data = [
                'student_id'=>$user['studentno']
            ];
            $practice = M('Practice')->where($data)->find();
            if($practice) {
                if($practice['mode']==2)
                return show(0,'学校已经安排，请勿申请!');
                else
                return show(0,'请勿重复申请!');
            }
            $_POST['student_id'] = $user['studentno'];
            $corporation = M('corporation')->where('name="'.$_POST['cname'].'"')->find();
            $_POST['corporation_id'] = $corporation['id'];
            $_POST['applytime'] = date('Y-m-d H:i:s',time());
            $rel = M('practice')->add($_POST);
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
            $map = [
                'myLeave.student_id'=>$user['studentno'],
                'myLeave.stu_del'=>1
            ];
            $data = D('LeaveView')->where($map)->select();
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
        if($_POST['status'] == 1) {
            //软删除
            $data = [
                'stu_del'=>0
            ];
            $rel = M('Leave')->where('id='.$id)->save($data);
            if($rel) {
                return show(1,'删除成功!');
            }else {
                return show(0,'删除失败!');
            }
        }else {
            $data = [
                'status'=>0,
                'id'=>$id
            ];
            $rel = M('Leave')->where($data)->delete();
            if($rel) {
                return show(1,'删除成功!');
            }else {
                return show(0,'删除失败!');
            }
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
                return show(0,'请填写企业名称！');
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
            $_POST['corporation_id'] = $corporation['id'];
            if(!$corporation) {
                $_POST['corporation_id'] = 0;
            }
            $practice = M('Practice')->where('student_id='.$user['studentno']." AND status=1")->find();
            if(!$practice) {
                return show(0,'请先添加实习申请或申请审核通过!');
            }
            $data = M('Change')->where('student_id='.$user['studentno']." AND status=0")->find();

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
            $practice = M('Practice')->where('student_id='.$user['studentno']." AND status=1")->find();
            $_POST['cname'] = $practice['cname'];
            $_POST['address'] = $practice['address'];
            $_POST['detailaddress'] = $practice['detailaddress'];
            if(!$practice) {
                return show(0,'请先添加实习申请或申请审核通过!');
            }
            $data = M('Change')->where('student_id='.$user['studentno']." AND status=0")->find();
            if($data) {
                return show(0,'请不要重复申请!');
            }else {
                $_changeinfo = D("Change")->where('student_id='.$user['studentno']." AND status=1")->order(array('applytime'=>'desc'))->limit(1)->select();
                if($_changeinfo){
                    $_POST['cname']=$_changeinfo[0]['cname'];
                    $_POST['address'] = $_changeinfo[0]['address'];
                    $_POST['detailaddress'] = $_changeinfo[0]['detailaddress'];
                }
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
            $data = D('ChangeView')->where('student_id='.$user['studentno'])->order(array('applytime'=>'desc'))->select();
            //echo D('ChangeView')->getLastSql();
            $this->assign('data',$data);
            $this->display();
        }
    }

    public function delChange() {
        $id  = $_POST['id'];
        if($_POST['status'] == 0 ||$_POST['status'] == -1) {
            $rel = M('Change')->where('id='.$id)->delete();
            if($rel) {
                return show(1,'删除成功!');
            } else {
                return show(0,'删除失败!');
            }
        }else if($_POST['status'] == 1){
            return show(0,'已审核不能删除!');
        }
    }

    public function viewChange() {
        $id = $_GET['id'];
        $user = $_SESSION['adminUser'];
        $change = M('Change')->where('id='.$id)->find();
        $practice = M('Practice')->where('student_id='.$user['studentno'])->find();
        $change['pricname']=$practice['cname'];
        $change['priposition']=$practice['position'];
        $_changeinfo = D("Change")->where(array("student_id"=>$user['studentno']." AND status=1"))->order(array('applytime'=>'desc'))->limit(1,1)->select();
        if($_changeinfo){
            $change['pricname']=$_changeinfo[0]['cname'];
            $change['priposition']=$_changeinfo[0]['position'];
        }
        $this->assign('student',$user);
        $this->assign('change',$change);
        if($change['type'] == 0) {
            //变更单位
            $this->display('Apply/viewChangeCorporation');
        }elseif($change['type'] == 1) {
            //变更岗位
            $this->display('Apply/viewChangeJob');
        }
    }



}