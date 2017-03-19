<?php
 namespace Teacher\Controller;

 class ReportController extends CommonController{

     public function index(){
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
         if($_POST){
            $data['student_id'] = I('post.sid',0,'trim');
            $data['status'] = I('post.status',0,'intval');
            $res = D('ReportView')->getResult($data);
            exit(json_encode($res));
         }else{
            $teacher = $_SESSION['adminUser'];
            $department = I('get.department',0);
            $profession = I('get.profession',0);
            $class = I('get.class',0);
            $teacher = $_SESSION['adminUser'];
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
            if($department)
                $map[] = 'Student.classno IN(select id from dg_class where dep_id='.$department.')';
            if($class)
                $map[] = 'Student.classno = '.$class;
            $corporation = I('get.corporation',0);
            if($corporation)
                $map[] = 'Practice.corporation_id = '.$corporation;
            $status = I('get.status',0);
            if($status)
                $map[] = 'Report.status = '.($status-1);
            $keywords = I('get.keywords');
            if($keywords)
                $map[] = '(studentno like "%'.$keywords.'%" or Student.name like "%'.$keywords.'%")';

           

            $map['Report.type'] = 0;
            $count = D('ReportView')->where($map)->count();
            $page = new \Think\Page($count,$listRows);
            $show = $page->show();
            $currentPage = I(C('VAR_PAGE'),1);
            $reportList = D('ReportView')->where($map)->page($currentPage.','.$listRows)->select();  
            $profession = D('profession')->select();
            $corporation = D('corporation')->select();
            $this->assign('department',$departments);
            $this->assign('class',$classes);
            $this->assign('profession',$profession);
            $this->assign('corporation',$corporation);
            $this->assign('list',$reportList);
            $this->assign('page',$show);
            $this->assign('totalCount',$count);
            $this->assign('numPerPage',$listRows);
            $this->assign('currentPage',$currentPage);
            return $this->display();
         }
     }

     public function month()
     {
          import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
         if($_POST){
            $data['student_id'] = I('post.sid',0,'trim');
            $data['status'] = I('post.status',0,'intval');
            $res = D('ReportView')->getResult($data);
            exit(json_encode($res));
         }else{
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
            if($department)
                $map[] = 'classno IN(select id from dg_class where dep_id='.$department.')';
            $profession = I('get.profession',0);
            if($class)
                $map[] = 'classno = '.$class;
            $corporation = I('get.corporation',0);
            if($corporation)
                $map[] = 'corporation_id = '.$corporation;
            $status = I('get.status',0);
            if($status)
                $map[] = 'status = '.($status-1);
            $keywords = I('get.keywords');
            if($keywords)
                $map[] = '(studentno like "%'.$keywords.'%" or Student.name like "%'.$keywords.'%")';

            $type = session('adminUser.type');
            if($type == 1){
             //教师
             $teacherno = session('adminUser.no');
             $teacher = D('Teacher')->getTeacher($teacherno);
             if($teacher['identity'] == '系主任'){
                 //默认一个系主任管一个学院
                $map['Profession.id'] = $teacher['profession'];
                $map['Report.type'] = 1;
                $count = D('ReportView')->where($map)->count();
                $page = new \Think\Page($count,$listRows);
                $show = $page->show();
                $currentPage = I(C('VAR_PAGE'),1);
                $reportList = D('ReportView')->where($map)->page($currentPage.','.$listRows)->select();
             }elseif($teacher['identity'] == '班主任'){
                $map[] = "Class.master_no = ".$teacherno;
                $map['Report.type'] = 1;
                $count = D('ReportView')->where($map)->count();
                $page = new \Think\Page($count,$listRows);
                $show = $page->show();
                $currentPage = I(C('VAR_PAGE'),1);
                $reportList = D('ReportView')->where($map)->page($currentPage.','.$listRows)->select();
             }
            }

            $profession = D('profession')->select();
            $corporation = D('corporation')->select();
            $this->assign('department',$departments);
            $this->assign('class',$classes);
            $this->assign('profession',$profession);
            $this->assign('corporation',$corporation);
            $this->assign('list',$reportList);
            $this->assign('page',$show);
            $this->assign('totalCount',$count);
            $this->assign('numPerPage',$listRows);
            $this->assign('currentPage',$currentPage);
            return $this->display();
         }
     }

     public function export($type=0)
    {
        $teacherno = session('adminUser.no');
        $teacher = D('Teacher')->getTeacher($teacherno);
        if($teacher['identity'] == '系主任'){
             //默认一个系主任管一个学院
            $data['Profession.id'] = $teacher['profession'];
            $data['Report.type'] = $type;
            $count = D('ReportView')->where($data)->count();
            $page = new \Think\Page($count,$listRows);
            $show = $page->show();
            $currentPage = I(C('VAR_PAGE'),1);
            $reportList = D('ReportView')->where($data)->select();
        }elseif($teacher['identity'] == '班主任'){
            $data[] = "Class.master_no = ".$teacherno;
            $data['Report.type'] = $type;
            $count = D('ReportView')->where($data)->count();
            $page = new \Think\Page($count,$listRows);
            $show = $page->show();
            $currentPage = I(C('VAR_PAGE'),1);
            $reportList = D('ReportView')->where($data)->select();
        }

        $str = "#,学号,姓名,班级,提交时间,标题,内容,实习单位,评审结果";
        $str .= "\n";
        $row = 1;
        for($i=0; $i<count($reportList); $i++)
        {
            $str .= $row++.','.$reportList[$i]['studentno'].','.$reportList[$i]['name'].','.$reportList[$i]['classname'].','.$reportList[$i]['pubtime'].','.$reportList[$i]['title'].','.$reportList[$i]['content'].','.$reportList[$i]['cname'].','.($reportList[$i]['status']==1?'已审核':($reportList[$i]['status']==0 ? '未审核' : '已退回'))."\n";
        }
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=Report-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }

    public function exportWeek()
    {
        $this->export(0);
    }

    public function exportMonth()
    {
        $this->export(1);
    }

     public function del()
     {
         $id = I('post.id',0,'intval');
         $res = D('Report')->delReportById($id);
         if($res){
             show(1,'删除成功');
         }else{
             show(0,'删除失败');
         }
     }

     public function edit(){
        $status = I('post.status',0,'intval');
        $rid = I('post.rid',0,'intval');
        switch($status){
            case 0: $jumpto ='/teacher.php/Report/auditing/rid/'.$rid;break;
            case -1:
            case 1: $jumpto ='/teacher.php/Report/audited/rid/'.$rid;break;
        }
        exit(json_encode($jumpto));
     }
     
     public function auditing(){
         if($_POST){
             $rid = I('post.id',0,'intval');
             $data['suggestion'] = I('post.suggestion','','trim');
             $data['score'] = I('post.res',0,'intval');
             if(empty($data['score'])||!isset($data['score'])){
                 $returnMsg = [
                     'status'=>0,
                     'msg'=>'请给定评分！',
                 ];
                 exit(json_encode($returnMsg));
             }

             if($data['score']<60){
                 $data['status'] = -1;
             }elseif($data['score']>=60 && $data['score']<=100){
                 $data['status'] = 1;
             }
             $res = D('Report')->updateReportById($rid,$data);
             if($res){
                 show(1,'审核成功！');
             }else{
                 show(-1,'审核失败！');
             }
         }else{
             $rid = I('get.rid',0,'intval');
             $detail = D('ReportView')->getReportById($rid);
             $pics = explode(';', $detail['pic']);
             $this->assign('pics',$pics);
             $this->assign('report',$detail);
             return $this->display();
         }
     }

     public function audited(){
         $rid = I('get.rid',0,'intval');
         $detail = D('ReportView')->getReportById($rid);
         $pics = explode(';', $detail['pic']);
         $this->assign('pics',$pics);
         $this->assign('report',$detail);
         return $this->display();
     }

//     public function unaudit()
//     {
//       $rid = I('get.rid',0,'intval');
//       if($_POST){
//            $receive = explode('&',I('post.content','','trim'));
//            $rid = intval(substr($receive[0],4));
//            $suggestion = urldecode(substr($receive[1],11));
//            $data['result'] = I('post.result',0,'intval');
//            $data['suggestion'] = $suggestion;
//            if(empty($data['suggestion'])||!isset($data['suggestion'])){
//                show(0,'请填写意见！');
//            }else{
//               $res =  D('Report')->updateReportById($rid,$data);
//               if($res){
//                   show(1,'意见已更新！');
//               }else{
//                   show(-1,'意见更新失败！');
//               }
//            }
//       }else{
//           $detail = D('ReportView')->getReportById($rid);
//           $this->assign('report',$detail);
//           $this->display();
//       }
//     }
 }