<?php
namespace Student\Controller;
use Think\Controller;

class GradeController extends Controller {
    public function index() {
        $user = $_SESSION['adminUser']['username'];
        $sid = D('Student')->getStudentId($user);
        $weekReportCount = D('Report')->getWeekReportCountById($sid['studentno']);
        $monthReportCount = D('Report')->getMonthReportCountById($sid['studentno']);
        $signin = D('Signin')->getSigninById($sid['studentno']);
        $reportSum = D('Report')->getReportSum($sid['studentno']);
        $grade = D('Grade')->getGradeById($sid['studentno']);
        $this->assign('weekReportCount',$weekReportCount);
        $this->assign('monthReportCount',$monthReportCount);
        $this->assign('signin',$signin);
        $this->assign('reportSum',$reportSum);
        //$this->assign('applyCount',$applyCount);
        $this->assign('grade',$grade);
        $this->display();
    }
}