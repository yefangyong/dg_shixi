<?php
namespace Teacher\Controller;
use think\Controller;
class PersonalController extends Controller {
    public function index() {
        $user = $_SESSION['adminUser'];
        $data = [
            'Student.studentno'=>$user['studentno'],
        ];
        $student = D('StudentView')->where($data)->find();
        $condition = [
            'myPractice.student_id'=>$user['studentno'],
            'myPractice.status'=>1
        ];
        $practice = D('PracticeView')->where($condition)->find();
        $_changeinfo = D("Change")->where(array("student_id"=>$user['studentno']." AND status=1"))->order(array('applytime'=>'desc'))->limit(1,1)->select();
        if($_changeinfo){
            $_changeinfo[0]['starttime']=$practice['starttime'];
            $_changeinfo[0]['endtime']=$practice['endtime'];
            $practice=$_changeinfo[0];
        }
        $weekReportCount = D('Report')->getWeekReportCountById($user['studentno']);
        $monthReportCount = D('Report')->getMonthReportCountById($user['studentno']);
        $signin = D('Signin')->getSigninById($user['studentno']);
        $reportSum = D('Report')->getReportSum($user['studentno']);
        $grade = D('Grade')->getGradeById($user['studentno']);
        $this->assign('weekReportCount',$weekReportCount);
        $this->assign('monthReportCount',$monthReportCount);
        $this->assign('signin',$signin);
        $this->assign('reportSum',$reportSum);
        //$this->assign('applyCount',$applyCount);
        $this->assign('grade',$grade);
        $this->assign('practice',$practice);
        $this->assign('student',$student);
        $this->display();
    }
}