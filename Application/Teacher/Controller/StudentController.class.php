<?php
namespace Teacher\Controller;
use Think\Controller;

class StudentController extends Controller{
    public function index(){
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $department = I('get.department',0);
        if($department)
            $map[] = 'classno IN(select id from dg_class where dep_id='.$department.')';
        $profession = I('get.profession',0);
        $class = I('get.class',0);
        if($class)
            $map[] = 'classno = '.$class;
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(studentno like "%'.$keywords.'%" or Student.name like "%'.$keywords.'%")';
        $count = D('StudentsView')->where($map)->count();
        //echo D('StudentsView')->getLastSql();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $studentList = D('StudentsView')->where($map)->page($currentPage.','.$listRows)->select();
        $department = D('department')->select();
        $profession = D('profession')->select();
        $class = D('class')->select();
        $this->assign('department',$department);
        $this->assign('class',$class);
        $this->assign('profession',$profession);
        $this->assign('list',$studentList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function getMaster(){
        $className = I('post.class','','trim');
        if(!isset($className)||empty($className)){
            return '';
        }
        $data['classname'] = $className;
        $res = M('Class')->where($data)->field('master')->find();
        exit(json_encode($res['master']));
    }

    public function view(){
        $sid = I('get.id',0,'intval');
        if(!isset($sid)||empty($sid)){
            return 0;
        }
        $studentInfo = D('StudentView')->getStudentInfo($sid);
        $weeklyCount = D('Report')->getWeekCount($studentInfo['studentno']);
        $leaveCount = D('Leave')->getLeaveCount($studentInfo['studentno']);
        $this->assign('leavecount',$leaveCount);
        $this->assign('weekcount',$weeklyCount);
        $this->assign('student',$studentInfo);
        return $this->display();
    }

    public function week()
    {
        $stuno = I('get.id',0,'intval');

        if(isset($stuno)){
            $list = D('ReportView')->getReportByStuno($stuno,0);
            $this->assign('list',$list);
            return $this->display();
        }
    }


    public function showweek()
    {
        $rid = I('get.id',0,'intval');
        $detail = D('ReportView')->getReportById($rid);
        $this->assign('report',$detail);
        return $this->display();
    }

    public function leave()
    {
        $stuno = I('get.id',0,'intval');

        if(isset($stuno)){
            $list = D('LeaveView')->getLeaveByStuno($stuno);
            $this->assign('list',$list);
            return $this->display();
        }
    }

    public function showleave()
    {
        $stuno = I('get.id',0,'intval');
        if(isset($stuno)){
            $list = D('LeaveView')->getLeave($stuno);
            $this->assign('apply',$list);
            return $this->display();
        }
    }

    public function add(){
        if($_POST){
            $data = I('post.','','trim');
            if(!isset($data['phone'])||empty($data['phone'])){
                show(0,'请填写手机号！');
            }
            if(!isset($data['studentno'])||empty($data['studentno'])){
                show(0,'请填写学号！');
            }
            if(!isset($data['name'])||empty($data['name'])){
                show(0,'请填写姓名！');
            }
            if(!isset($data['dept'])||empty($data['dept'])){
                show(0,'请选择系部！');
            }
            $dept = $data['dept'];
            unset($dept);
            if(!isset($data['grade'])||empty($data['grade'])){
                show(0,'请选择年级！');
            }
            $grade = $data['grade'];
            unset($data['grade']);
            $className = ($data['class']);
            unset($data['class']);
            $classNo = D('Class')->getIdByName($className);
            $data['classno'] = $classNo['id'];
            if(!isset($className)||empty($className)){
                show(0,'请选择班级！');
            }
            if(!isset($data['password'])||empty($data['password'])){
                show(0,'请填写密码！');
            }
            $gender = $data['gender'];
            unset($data['gender']);
            $data['sex'] = $gender;
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $res = D('Student')->addStu($data);
            if($res){
                show (1,'添加成功！');
            }else{
                show(0,'添加失败！');
            }
        }else{
            $department = D('School')->getAllDepartment();
            $class = D('Class')->getAllClassesName();
            $this->assign('class',$class);
            $this->assign('dept',$department);
            return $this->display();
        }
    }

    public function update(){
        if($_POST){
            $stuid = I('post.id',0,'intval');
            $data['studentno'] = I('post.studentno','','trim');
            if(!isset($data['studentno'])||empty($data['studentno'])){
                show(0,'请填写学号！');
            }
            $data['password'] = I('post.password','','trim');
            if(!isset($data['password'])||empty($data['password'])){
                show(0,'请填写密码！');
            }
            $data['name'] = I('post.name','','trim');
            if(!isset($data['name'])||empty($data['name'])){
                show(0,'请填写姓名！');
            }
            $data['phone'] = I('post.phone','','trim');
            if(!isset($data['phone'])||empty($data['phone'])){
                show(0,'请填写手机号！');
            }
            $classno = D('Class')->getIdByName(I('post.class','','trim'));
            $data['classno'] = $classno['id'];
            $data['course']  = I('post.course','','trim');
            if(!isset($data['course'])||empty($data['course'])){
                show(0,'请填写课程！');
            }
            $data['email'] = I('post.email','','trim');
            if(!isset($data['email'])||empty($data['email'])){
                show(0,'请填写邮箱！');
            }
            $data['gender'] = I('post.gender',0,'intval');
            $res = D('Student')->updateStu($stuid,$data);
            if($res){
                show(1,'成功！');
            }else{
                show(0,'失败！');
            }

        }else{
            $department = D('School')->getAllDepartment();
            $class = D('Class')->getAllClassesName();
            $stuno = I('get.id',0,'intval');
            if(isset($stuno)){
                $stuinfo = D('StudentView')->getStudentInfo($stuno);
                $this->assign('info',$stuinfo);
                $this->assign('dept',$department);
                $this->assign('class',$class);
                return $this->display();
            }
        }
    }

    public function del()
    {
        $id = I('post.id',0,'intval');
        if(!isset($id)||empty($id)){
            show(0,'删除失败');
        }
        $res  = D('Student')->delStu($id);
        if($res){
            show(1,'删除成功！');
        }else{
            show(0,'删除失败');
        }
    }

    public function export()
    {
        $users = D('student')->join("LEFT JOIN dg_class ON dg_student.classno=dg_class.id")->field("dg_student.*,dg_class.classname")->select();
        $str = "#,学号,姓名,密码,手机号,班级,邮箱,性别,地址,紧急联系人,紧急联系电话";
        $str .= "\n";
        $row = 1;
        for($i=0; $i<count($users); $i++)
        {
            $str .= $row++.','.$users[$i]['studentno'].','.$users[$i]['name'].','.$users[$i]['password'].','.$users[$i]['phone'].','.$users[$i]['classname'].','.$users[$i]['email'].','.($users[$i]['sex']==0?'男':'女').','.$users[$i]['emegencyconcat'].','.$users[$i]['emegencyphone'].','.$users[$i]['address']."\n";
        }
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=student-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }

     public function exporttemp()
     {
        $str = "#,学号,姓名,密码,手机号,班级,邮箱,性别,地址,紧急联系人,紧急联系电话";
        $str .= "\n";
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=student-template.csv"); 
        echo $str;
        exit;
     }

    public function import()
    {
        if($_FILES['file']){
            if($_FILES['file']['error']==1 or $_FILES['file']['error']==2){
                echo '<script>alert("上传得文件超过系统限制");</script>';
                exit;
            }
            if(!is_uploaded_file($_FILES['file']['tmp_name']))
            {
                echo '<script>alert("请上传文件");</script>';
                exit;
            }
            if (($handle = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
                while(($lines[] = fgetcsv($handle))!==false);
            }else{
                echo '<script>alert("打开文件失败");</script>';
                exit;
            }
            $db = D('student');
            $classdb = D('class');
            for($i=1; $i<count($lines); $i++){
                for($ii=0; $ii<count($lines[$i]); $ii++){
                    $lines[$i][$ii]=iconv("GBK", "UTF-8", $lines[$i][$ii]);
                }
                $data['studentno']=$lines[$i]['1'];
                if(empty($data['studentno'])){
                    continue;
                }
                $ct = $db->where(array('studentno'=>$data['studentno']))->select();
                $data['name']=$lines[$i]['2'];
                $data['password']=md5($lines[$i]['3']);
                $data['phone']=$lines[$i]['4'];
                $classinfo = $classdb->where(array('classname="'.$lines[$i]['5'].'"'))->select();
                if(!$classinfo[0]){
                    $error[]="无此班级:".$classinfo[0]['id'];
                    continue;
                }
                $data['classno']=$classinfo[0]['id'];
                $data['email']=$lines[$i]['6'];
                $data['sex']=($lines[$i]['7']=='男') ? 0 : 1;
                $data['address']=$lines[$i]['8'];
                $data['emegencyconcat']=$lines[$i]['9'];
                $data['emegencyphone']=$lines[$i]['10'];
                $data['addtime'] = date('Y-m-d H:i:s',time());
                if($ct[0])
                    $db->where(array('id'=>$ct[0]['id']))->save($data);
                else
                    $db->add($data);
                echo $db->getLastSql();
            }
            if($error)
                echo '<script>alert("导入失败！'.implode("  ", $error).'");</script>';
            else
                echo '<script>alert("导入成功！");</script>';
            exit;

        }else
        $this->display();
    }
}