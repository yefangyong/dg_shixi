<?php
namespace Teacher\Controller;
use Think\Controller;

class StudentController extends Controller{
    public function index(){
        $teacher = $_SESSION['adminUser'];
        $department = I('get.department',0);
        $class = I('get.class',0);
        switch($teacher['type']){
            case 0:
                $classes = D('class')->where("master_no='".$teacher['teacherno']."'")->select();
                $class = $teacher['class_id'];
                break;
            case 1:
                $departments = D('department')->where("id='".$teacher['department_id']."'")->select();
                $classes = D('class')->where("dep_id='".$teacher['department_id']."'")->select();
                $department = $teacher['department_id'];
                break;
            case 2:
                $departments = D('department')->select();
                $classes = D('class')->select();
                break;
        }
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        if($department)
            $map[] = 'classno IN(select id from dg_class where dep_id='.$department.')';
        $profession = I('get.profession',0);
        if($class)
            $map[] = 'classno = '.$class;
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(studentno like "%'.$keywords.'%" or Student.name like "%'.$keywords.'%")';
        $count = D('StudentsView')->where($map)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $studentList = D('StudentsView')->where($map)->page($currentPage.','.$listRows)->select();
        //echo D('StudentsView')->getLastSql();
        $profession = D('profession')->select();
        $this->assign('department',$departments);
        $this->assign('class',$classes);
        $this->assign('profession',$profession);
        $this->assign('list',$studentList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function teacher(){
        $teacher = $_SESSION['adminUser'];
        $department = I('get.department',0);
        $class = I('get.class',0);
        switch($teacher['type']){
            case 0:
                $classes = D('class')->where("master_no='".$teacher['teacherno']."'")->select();
                $class = $teacher['class_id'];
                break;
            case 1:
                $departments = D('department')->where("id='".$teacher['department_id']."'")->select();
                $classes = D('class')->where("dep_id='".$teacher['department_id']."'")->select();
                $department = $teacher['department_id'];
                break;
            case 2:
                $departments = D('department')->select();
                $classes = D('class')->select();
                break;
        }

        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        if($department)
            $map[] = 'department_id='.$department;
        $profession = I('get.profession',0);
        if($class)
            $map[] = 'class_id = '.$class;
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(teacherno like "%'.$keywords.'%" or Teacher.name like "%'.$keywords.'%")';
        $count = D('TeacherView')->where($map)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $studentList = D('TeacherView')->where($map)->page($currentPage.','.$listRows)->select();
        $profession = D('profession')->select();
        $this->assign('department',$departments);
        $this->assign('class',$classes);
        $this->assign('profession',$profession);
        $this->assign('list',$studentList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function department(){
        $teacher = $_SESSION['adminUser'];
        $department = I('get.department',0);
        $class = I('get.class',0);

        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(dname like "%'.$keywords.'%" )';
        $count = D('department')->where($map)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $depList = D('department')->join("LEFT JOIN dg_teacher d ON dg_department.id=d.department_id and d.type=1")->where($map)->page($currentPage.','.$listRows)->field("dg_department.*,d.name teacher")->select();
        $this->assign('list',$depList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function classes(){
        $teacher = $_SESSION['adminUser'];
        $department = I('get.department',0);
        $class = I('get.class',0);

        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(classname like "%'.$keywords.'%" )';
        $count = D('class')->where($map)->count();
        // 实例化分页类 传入总记录数和每页显示的记录数
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $depList = D('class')->join("LEFT JOIN dg_teacher d ON dg_class.master_no=d.teacherno and d.type=0")->join("LEFT JOIN dg_department dep ON dg_class.dep_id=dep.id")->join("LEFT JOIN (select count(*) ct,id FROM dg_student group by classno) s ON dg_class.id=s.id")->where($map)->page($currentPage.','.$listRows)->field("dg_class.*,d.name teacher,dep.dname,s.ct studentct")->select();
        $this->assign('list',$depList);
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
        $_changeinfo = D("Change")->where(array("student_id"=>$studentInfo['studentno'],"status"=>"1"))->order(array('applytime'=>'desc'))->limit(1)->select();
        if($_changeinfo){
            $studentInfo['cname']=$_changeinfo[0]['cname'];
            $studentInfo['pracaddress']=$_changeinfo[0]['address'];
            $studentInfo['guide']=$_changeinfo[0]['guide'];
            $studentInfo['phone']=$_changeinfo[0]['phone'];
            $studentInfo['position']=$_changeinfo[0]['position'];
        }
        $weeklyCount = D('Report')->getWeekCount($studentInfo['studentno']);
        $leaveCount = D('Leave')->getLeaveCount($studentInfo['studentno']);
        $signin = D('signin')->where(array('student_id'=>$studentInfo['studentno']))->order(array('pubtime'=>'desc'))->limit(1)->select();
        $studentInfo['signin']=$signin[0];
        $this->assign('leavecount',$leaveCount);
        $this->assign('weekcount',$weeklyCount);
        $this->assign('student',$studentInfo);
        return $this->display();
    }

    public function week()
    {
        $stuno = I('get.id',0,'intval');

        if(isset($stuno)){
            import('ORG.Util.Page');
            // 每页显示记录数
            $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
            $map['Report.student_id'] = $stuno;
            $map['Report.type'] = 0;
            $count = D('ReportView')->where($map)->count();

            $page = new \Think\Page($count,$listRows);
            $show = $page->show();
            $currentPage = I(C('VAR_PAGE'),1);
            $list = D('ReportView')->where($map)->order(array("pubtime"=>"desc"))->page($currentPage.','.$listRows)->select();
            //echo D('StudentsView')->getLastSql();
            for($i=0; $i<count($list); $i++){
                $_changeinfo = D("Change")->where(array("student_id"=>$list[$i]['studentno'],"status"=>1))->order(array('applytime'=>'desc'))->limit(1)->select();
                if($_changeinfo){
                    $list[$i]['cname']=$_changeinfo[0]['cname'];
                }
            }
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->assign('totalCount',$count);
            $this->assign('numPerPage',$listRows);
            $this->assign('currentPage',$currentPage);
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
            import('ORG.Util.Page');
            // 每页显示记录数
            $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
            $map['myLeave.student_id'] = $stuno;
            $count = D('LeaveView')->where($map)->count();

            $page = new \Think\Page($count,$listRows);
            $show = $page->show();
            $currentPage = I(C('VAR_PAGE'),1);
            $list = D('LeaveView')->where($map)->order(array("pubtime"=>"desc"))->page($currentPage.','.$listRows)->select();
            for($i=0; $i<count($list); $i++){
                $_changeinfo = D("Change")->where(array("student_id"=>$list[$i]['studentno'],"status"=>1))->order(array('applytime'=>'desc'))->limit(1)->select();
                if($_changeinfo){
                    $list[$i]['cname']=$_changeinfo[0]['cname'];
                }
            }
            $this->assign('list',$list);
            $this->assign('page',$show);
            $this->assign('totalCount',$count);
            $this->assign('numPerPage',$listRows);
            $this->assign('currentPage',$currentPage);
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
            $teacher = $_SESSION['adminUser'];
            $department = I('get.department',0);
            $class = I('get.class',0);
            switch($teacher['type']){
                case 0:
                    $classes = D('class')->where("master_no='".$teacher['teacherno']."'")->select();
                    break;
                case 1:
                    $departments = D('department')->where("id='".$teacher['department_id']."'")->select();
                    $classes = D('class')->where("dep_id='".$teacher['department_id']."'")->select();
                    break;
                case 2:
                    $departments = D('department')->select();
                    $classes = D('class')->select();
                    break;
            }
            $this->assign('class',$classes);
            $this->assign('dept',$departments);
            return $this->display();
        }
    }

    public function update(){
        if($_POST){
            $stuid = I('post.id',0,'intval');
            $data['studentno'] = I('post.studentno','','trim');
            if(empty($data['studentno'])){
                show(0,'请填写学号！');
            }
            $data['password'] = I('post.password','','trim');
            if(empty($data['password'])){
                show(0,'请填写密码！');
            }
            $data['name'] = I('post.name','','trim');
            if(empty($data['name'])){
                show(0,'请填写姓名！');
            }
            $data['phone'] = I('post.phone','','trim');
            if(empty($data['phone'])){
                show(0,'请填写手机号！');
            }
            if(strlen($data['password'])!=32){
                $data['password']=md5($data['password']);
            }
            $data['sex'] = I('post.sex',0,'intval');
            $res = D('Student')->updateStu($stuid,$data);

            show(1,'成功！');

        }else{
            
            $stuno = I('get.id',0,'intval');
            if(isset($stuno)){
                $stuinfo = D('StudentView')->getStudentInfo($stuno);
                $this->assign('info',$stuinfo);
                $teacher = $_SESSION['adminUser'];
                $department = I('get.department',0);
                $class = I('get.class',0);
                switch($teacher['type']){
                    case 0:
                        $classes = D('class')->where("master_no='".$teacher['teacherno']."'")->select();
                        break;
                    case 1:
                        $departments = D('department')->where("id='".$teacher['department_id']."'")->select();
                        $classes = D('class')->where("dep_id='".$teacher['department_id']."'")->select();
                        break;
                    case 2:
                        $departments = D('department')->select();
                        $classes = D('class')->select();
                        break;
                }
                $this->assign('class',$classes);
                $this->assign('dept',$departments);
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

    public function adddep(){
        if($_POST){
            $data = I('post.','','trim');
            if(empty($data['dname'])){
                show(0,'请填写名称！');
            }
            $res = D('department')->add($data);
            if($res){
                show (1,'添加成功！');
            }else{
                show(0,'添加失败！');
            }
        }else{
            return $this->display();
        }
    }

    public function updatedep(){
        if($_POST){
            $depid = I('post.id',0,'intval');
            $data = I('post.','','trim');
            if(empty($data['dname'])){
                show(0,'请填写名称！');
            }
            $res = D('department')->where("id=".$depid)->save($data);

            show(1,'成功！');

        }else{
            $depid = I('get.id',0,'intval');
            if(isset($depid)){
                $stuinfo = D('department')->where("id=".$depid)->find();
                $this->assign('info',$stuinfo);
                return $this->display();
            }
        }
    }

    public function deldep()
    {
        $id = I('post.id',0,'intval');
        if(!isset($id)||empty($id)){
            show(0,'请选择系部');
        }
        if(is_array($id)){
            D('Report')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id IN(".implode(',', $id).")))")->delete();
            D('Practice')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id IN(".implode(',', $id).")))")->delete();
            D('Change')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id IN(".implode(',', $id).")))")->delete();
            D('Leave')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id IN(".implode(',', $id).")))")->delete();
            D('Student')->where("classno IN(select id FROM dg_class WHERE dep_id IN(".implode(',', $id)."))")->delete();
            $rs = D('department')->where("`id` IN(".implode(',', $id).") ")->delete();
        }else{
            D('Report')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id=".$id."))")->delete();
            D('Practice')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id=".$id."))")->delete();
            D('Change')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id=".$id."))")->delete();
            D('Leave')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(select id FROM dg_class WHERE dep_id=".$id."))")->delete();
            D('Student')->where("classno IN(select id FROM dg_class WHERE dep_id=".$id.")")->delete();
            $rs = D('department')->where("`id` = ".$id)->delete();
        }
        if($rs){
            show(1,'删除成功！');
        }else{
            show(0,'删除失败');
        }
    }

    public function addclass(){
        if($_POST){
            $data = I('post.','','trim');
            if(empty($data['classname'])){
                show(0,'请填写名称！');
            }
            if(empty($data['dep_id'])){
                show(0,'请选择系部！');
            }
            if(empty($data['master_no'])){
                show(0,'请选择班主任！');
            }
            $res = D('class')->add($data);
            if($res){
                if($data['master_no']){
                    D('class')->where('master_no='.$data['master_no'].' and id!='.$res)->save(array('master_no'=>null));
                    D('teacher')->where('teacherno='.$data['master_no'])->save(array('class_id'=>$res));
                }
                show (1,'添加成功！');
            }else{
                show(0,'添加失败！');
            }
        }else{
            $teacher = D('teacher')->where("type=0")->select();
            $department = D('department')->select();
            $this->assign('teacher',$teacher);
            $this->assign('dept',$department);
            return $this->display();
        }
    }

    public function updateclass(){
        if($_POST){
            $classid = I('post.id',0,'intval');
            $data = I('post.','','trim');
            if(empty($data['classname'])){
                show(0,'请填写名称！');
            }
            if(empty($data['dep_id'])){
                show(0,'请选择系部！');
            }
            if(empty($data['master_no'])){
                show(0,'请选择班主任！');
            }
            $res = D('class')->where("id=".$classid)->save($data);
            if($data['master_no']){
                D('class')->where('master_no='.$data['master_no'].' and id!='.$classid)->save(array('master_no'=>null));
                D('teacher')->where('teacherno='.$data['master_no'])->save(array('class_id'=>$classid));
            }
            show(1,'成功！');
        }else{
            $classid = I('get.id',0,'intval');
            if(isset($classid)){
                $stuinfo = D('class')->join("LEFT JOIN dg_teacher d ON dg_class.master_no=d.teacherno and d.type=0")->join("LEFT JOIN dg_department dep ON dg_class.dep_id=dep.id")->join("LEFT JOIN (select count(*) ct,id FROM dg_student group by classno) s ON dg_class.id=s.id")->where("dg_class.id=".$classid)->field("dg_class.*,d.name teacher,dep.dname,s.ct studentct")->find();
                $teacher = D('teacher')->where("type=0")->select();
                $department = D('department')->select();
                $this->assign('teacher',$teacher);
                $this->assign('dept',$department);
                $this->assign('info',$stuinfo);
                return $this->display();
            }
        }
    }

    public function delclass()
    {
        $id = I('post.id',0,'intval');
        if(!isset($id)||empty($id)){
            show(0,'删除失败');
        }
        if(is_array($id)){
            D('Report')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(".implode(',', $id)."))")->delete();
            D('Practice')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(".implode(',', $id)."))")->delete();
            D('Change')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(".implode(',', $id)."))")->delete();
            D('Leave')->where("student_id IN(select studentno FROM dg_student WHERE classno IN(".implode(',', $id)."))")->delete();
            D('Student')->where("classno IN(select id FROM dg_department WHERE classno IN(".implode(',', $id)."))")->delete();
            $rs = D('class')->where("`id` IN(".implode(',', $id).") ")->delete();
        }else{
            D('Report')->where("student_id IN(select studentno FROM dg_student WHERE classno=".$id.")")->delete();
            D('Practice')->where("student_id IN(select studentno FROM dg_student WHERE classno=".$id.")")->delete();
            D('Change')->where("student_id IN(select studentno FROM dg_student WHERE classno=".$id.")")->delete();
            D('Leave')->where("student_id IN(select studentno FROM dg_student WHERE classno=".$id.")")->delete();
            D('Student')->where("classno =".$id)->delete();
            $rs = D('class')->where("`id` = ".$id)->delete();
        }
        if($rs){
            show(1,'删除成功！');
        }else{
            show(0,'删除失败');
        }
    }

    public function delteacher()
    {
        $id = I('post.id',0,'intval');
        if(!isset($id)||empty($id)){
            show(0,'删除失败');
        }
        $res  = D('Teacher')->delTeacher($id);
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
                $data['sex']=($lines[$i]['7']=='男') ? 1 : 0;
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


    public function exportTea()
    {
        $users = D('TeacherView')->select();
        $str = "#,教师编号,姓名,密码,手机,类型,班级,年级,系部";
        $str .= "\n";
        $row = 1;
        for($i=0; $i<count($users); $i++)
        {
            $str .= $row++.','.$users[$i]['teacherno'].','.$users[$i]['name'].','.$users[$i]['password'].','.$users[$i]['phone'].','.setTeacherType($users[$i]['type']).','.$users[$i]['classname'].','.$users[$i]['grade'].','.$users[$i]['dname']."\n";
        }
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=teacher-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }

     public function exportTeatemp()
     {
        $str = "#,教师编号,姓名,密码,手机,类型,班级,年级,系部";
        $str .= "\n";
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=teacher-template.csv"); 
        echo $str;
        exit;
     }

    public function importTea()
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
            $db = D('teacher');
            $classdb = D('class');
            $departmentdb = D('department');
            for($i=1; $i<count($lines); $i++){
                for($ii=0; $ii<count($lines[$i]); $ii++){
                    $lines[$i][$ii]=iconv("GBK", "UTF-8", $lines[$i][$ii]);
                }
                $data['teacherno']=$lines[$i]['1'];
                if(empty($data['teacherno'])){
                    continue;
                }
                $ct = $db->where(array('teacherno'=>$data['teacherno']))->select();
                $data['name']=$lines[$i]['2'];
                $data['password']=md5($lines[$i]['3']);
                $data['phone']=($lines[$i]['4']);
                $data['identity']=$lines[$i]['5'];
                $data['type']=getTeacherType($data['identity']);
                $data['classname']=trim($lines[$i]['6']);
                $data['grade']=$lines[$i]['7'];
                $data['dname']=$lines[$i]['8'];

                $departmentinfo = $departmentdb->where(array('dname="'.$data['dname'].'"'))->select();
                if(!$departmentinfo[0]){
                    if($data['dname'])
                    $id = $departmentdb->add(array('dname'=>$data['dname'],'school_id'=>1));
                    $departmentinfo = $departmentdb->where(array('id="'.$id.'"'))->select();
                }
                $data['department_id']=$departmentinfo[0]['id'] ? $departmentinfo[0]['id'] : 0;
                $classinfo = $classdb->where(array('classname="'.$data['classname'].'"'))->select();
                if(!$classinfo[0]){
                    if($data['classname'])
                    $id = $classdb->add(array('classname'=>$data['classname'],'grade'=>$data['grade'],'dep_id'=>$departmentinfo[0]['id'],'master'=>$data['name'],'master_no'=>($data['type']==0 ? $data['teacherno']:''),'addtime'=>date('Y-m-d H:i:s')));
                    $classinfo = $classdb->where(array('id="'.$id.'"'))->select();
                }else{
                    if($data['classname'])
                    $classdb->where('id='.$classinfo[0]['id'])->save(array('classname'=>$data['classname'],'grade'=>$data['grade'],'dep_id'=>$departmentinfo[0]['id'],'master'=>$data['name'],'master_no'=>($data['type']==0 ? $data['teacherno']:''),'addtime'=>date('Y-m-d H:i:s')));
                }
                $data['class_id']=$classinfo[0]['id'] ? $classinfo[0]['id'] : 0;
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