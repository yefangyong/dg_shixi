<?php
namespace Student\Controller;
use Think\Controller;

class GradeController extends Controller {
    public function index() {
        $user = $_SESSION['adminUser'];
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
        $this->display();
    }
}