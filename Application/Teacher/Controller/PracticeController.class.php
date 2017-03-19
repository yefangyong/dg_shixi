<?php
namespace Teacher\Controller;

class PracticeController extends CommonController{
    public function index(){
        if($_POST){
           $data['name'] = I('post.name','','trim'); //school 学院名称
           $data['name'] = I('post.name','','trim');//profession 专业名称
           $data['classname'] = I('post.class','','trim');//class 班级名称
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
                $map[] = 'Practice.corporation_id = '.$corporation;
            $keywords = I('get.keywords');
            if($keywords)
                $map[] = '(studentno like "%'.$keywords.'%" or Student.name like "%'.$keywords.'%")';

            import('ORG.Util.Page');
            // 每页显示记录数
            $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
            $count= D('PracticeView')->where($map)->count();
            $page = new \Think\Page($count,$listRows);
            $show = $page->show();
            $currentPage = I(C('VAR_PAGE'),1);
            $list = D('PracticeView')->where($map)->page($currentPage.','.$listRows)->select();
            $dept = D('School')->getAllDepartment();
            foreach ($list as $k => $v) {
                //根据有无实习公司查询公司名称
                if ($v['corporation_id'] != 0) {
                    $corname = D('Corporation')->getNameById($v['corporation_id']);
                    $list[$k]['corname'] = $corname['name'];
                } else {
                    $list[$k]['corname'] = '';
                }
            }
            $this->assign('dept', $dept);
            $profession = D('profession')->select();
            $corporation = D('corporation')->select();
            $this->assign('department',$departments);
            $this->assign('class',$classes);
            $this->assign('profession',$profession);
            $this->assign('corporation',$corporation);
            $this->assign('page',$show);
            $this->assign('totalCount',$count);
            $this->assign('numPerPage',$listRows);
            $this->assign('currentPage',$currentPage);
            $this->assign('list', $list);
            return $this->display();
        }
    }

    public function corporation(){
        import('ORG.Util.Page');
        // 每页显示记录数
        $address = I('get.address',0);
        if($address)
            $map[] = 'city ="'.$address.'"';
        $keywords = I('get.keywords',0);
        if($keywords)
            $map[] = '(name like "%'.$keywords.'%" or address like "%'.$keywords.'%" or detailaddress like "%'.$keywords.'%")';
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('Corporation')->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $corporationList = D('Corporation')->where($map)->page($currentPage.','.$listRows)->select();
        $address = D('Corporation')->getAddress();
        $this->assign('list',$corporationList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        $this->assign('address',$address);
        return $this->display();
    }

    public function exportCor(){
        $applyList = D('Corporation')->select();
        $str = "#,企业名称,城市,类型,联系人,部门,职务,电话号码,手机,邮箱,邮编,地址,网站,简介,详细地址,传真";
        $str .= "\n";
        $row = 1;
        for($i=0; $i<count($applyList); $i++)
        {
            $str .= $row++.','.$applyList[$i]['name'].','.$applyList[$i]['city'].','.$applyList[$i]['type'].','.$applyList[$i]['contact'].','.$applyList[$i]['department'].','.$applyList[$i]['position'].','.$applyList[$i]['telephone'].','.$applyList[$i]['mobile'].','.$applyList[$i]['email'].','.$applyList[$i]['zipcode'].','.$applyList[$i]['address'].','.$applyList[$i]['website'].','.$applyList[$i]['introduction'].','.$applyList[$i]['detailaddress'].','.$applyList[$i]['fax']."\n";
        }
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=Corporation-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }

     public function exportCortemp(){
        $applyList = D('Corporation')->select();
        $str = "#,企业名称,城市,类型,联系人,部门,职务,电话号码,手机,邮箱,邮编,地址,网站,简介,详细地址,传真";
        $str .= "\n";
        $row = 1;
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=Corporation-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }


    public function importCor(){
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
            $db = D('corporation');
            for($i=1; $i<count($lines); $i++){
                for($ii=0; $ii<count($lines[$i]); $ii++){
                    $lines[$i][$ii]=iconv("GBK", "UTF-8", $lines[$i][$ii]);
                }
                $data['name']=$lines[$i]['1'];
                if(empty($data['name'])){
                    continue;
                }
                $ct = $db->where(array('name'=>$data['name']))->select();
                $data['city']=$lines[$i]['2'];
                $data['type']=$lines[$i]['3'];
                $data['contact']=$lines[$i]['4'];
                $data['department']=$lines[$i]['5'];
                $data['position']=$lines[$i]['6'];
                $data['telephone']=$lines[$i]['7'];
                $data['mobile']=$lines[$i]['8'];
                $data['email']=$lines[$i]['9'];
                $data['zipcode']=$lines[$i]['10'];
                $data['address']=$lines[$i]['11'];
                $data['website']=$lines[$i]['12'];
                $data['introduction']=$lines[$i]['13'];
                $data['detailaddress']=$lines[$i]['14'];
                $data['fax']=$lines[$i]['15'];
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

    public function addCor(){
        if($_POST){
            $data['name'] =  I('post.name','','trim');
            if(!isset($data['name'])||empty($data['name'])){
                show(0,'请填写公司名！');
            }
            $data['city'] = I('post.city','','trim');
            if(!isset($data['city'])||empty($data['city'])){
                show(0,'请填写公司地址！');
            }
            $data["type"] = I('post.type','','trim');
             if(!isset($data['type'])||empty($data['type'])){
                show(0,'请填写公司性质！');
            }
            $data["contact"] = I('post.contact','','trim');
             if(!isset($data['contact'])||empty($data['contact'])){
                show(0,'请填写联系人！');
            }
            $data["position"] = I('post.position','','trim');
            $data["telephone"] = I('post.telephone','','trim');
            $data["mobile"] = I('post.mobile','','trim');
            $data["email"] = I('post.email','','trim');
            $data["zipcode"] = I('post.zipcode','','trim');
//            $data["fax"] = I('post.fax','','trim');
            $data["website"] = I('post.website','','trim');
            $data['address'] = I('post.address','','trim');
             if(!isset($data['address'])||empty($data['address'])){
                show(0,'请填写公司详细地址！');
            }
            $data["introduction"] = I('post.introduction','','trim');
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $res = D('Corporation')->addCorporation($data);
            if($res){
                show(1,'添加成功！');
            }else{
                show(0,'添加失败！');
            }
        }else{
            return $this->display();
        }
    }

    public function delCor()
    {
        $id = I('post.id',0,'intval');
        $res = D('Corporation')->delCorporationById($id);
        if($res){
            show(1,'删除成功');
        }else{
            show(0,'删除失败');
        }
    }

    public function editCor()
    {
        if($_POST){
            $id = I('post.id',0,'intval');
            $data['name'] =  I('post.name','','trim');
            if(!isset($data['name'])||empty($data['name'])){
                show(0,'请填写公司名！');
            }
            $data['city'] = I('post.city','','trim');
            if(!isset($data['city'])||empty($data['city'])){
                show(0,'请填写公司地址！');
            }
            $data["type"] = I('post.type','','trim');
            if(!isset($data['type'])||empty($data['type'])){
                show(0,'请填写公司性质！');
            }
            $data["contact"] = I('post.contact','','trim');
            if(!isset($data['contact'])||empty($data['contact'])){
                show(0,'请填写联系人！');
            }
            $data["position"] = I('post.position','','trim');
            $data["telephone"] = I('post.telephone','','trim');
            $data["mobile"] = I('post.mobile','','trim');
            $data["email"] = I('post.email','','trim');
            $data["zipcode"] = I('post.zipcode','','trim');
            $data["fax"] = I('post.fax','','trim');
            $data["website"] = I('post.website','','trim');
            $data['address'] = I('post.address','','trim');
            if(!isset($data['address'])||empty($data['address'])){
                show(0,'请填写公司详细地址！');
            }
            $data["introduction"] = I('post.introduction','','trim');
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $res = D('Corporation')->editCorporation($id,$data);
            if($res){
                show(1,'编辑成功！');
            }else{
                show(0,'编辑失败！');
            }
        }else{
            $id = I('get.id',0,'intval');
            if(!isset($id)||empty($id)){
                show(0,'获取失败');
            }else{
                $data['id'] = $id;
                $corporationInfo = D('Corporation')->getCorporation($data);
                $corporationInfo = $corporationInfo[0];
                $this->assign('info',$corporationInfo);
                return $this->display();
            }
        }
    }

    public function viewCor()
    {
        $id = I('get.id', 0, 'intval');
        if (!isset($id) || empty($id)) {
            show(0, '获取失败');
        } else {
            $corporationInfo = D('Corporation')->getCorporationById($id);
//            echo '<pre>';
//            var_dump($corporationInfo);
//            exit;
//            $corporationInfo = $corporationInfo[0];
            //var_dump($corporationInfo);
            $this->assign('info', $corporationInfo);
            return $this->display();
        }
    }

    public function setCorStatus()
    {
        if($_POST){
            $ids = I('post.ids');
            if(!isset($ids)||empty($ids)){
                show(0,'公司信息传送失败！');
            }
            $status = I('post.status',1,'intval');
            if(!isset($status)||empty($status)){
                show(0,'状态值接收失败！');
            }
            $res = D('Corporation')->setStatus($ids,$status);
            if($res){
                show(1,'状态修改成功！');
            }else{
                show(0,'状态修改失败！');
            }
        }else{
            show(0,'状态修改失败！');
        }
    }

    public function import()
    {
        return $this->display();
    }

    public function arrangement()
    {
        if($_POST['action']=='doarrangement'){
            $corinfo = D('corporation')->where("id=".$_POST['cor_id'])->select();
            $corinfo = $corinfo[0];
            //此处要优化
            $data['corporation_id'] = I('post.cor_id','','trim');
            $data['guide'] = I('post.guide','','trim');
            $data['address'] = I('post.address','','trim');
            $data['starttime'] = I('post.starttime','','trim');
            $data['endtime'] = I('post.endtime','','trim');
            $data['telephone'] = $corinfo['telephone'];
            $data['type'] = $corinfo['type'];
            $data['position'] = I('post.position','','trim');

            if(!isset($data['position'])||empty($data['position'])){
                show(0,'请填写职位！');
            }
            if(!isset($data['starttime'])||empty($data['starttime'])){
                show(0,'请填写开始日期！');
            }
            if(!isset($data['endtime'])||empty($data['endtime'])){
                show(0,'请填写结束日期！');
            }

            if(strtotime(urldecode($data['endtime']))<=strtotime(urldecode($data['starttime']))){
                show(0,'日期范围不正确！');
            }
            $data['mode']=2;
            $studentids = D('student')->where(array("id IN(".$_POST['studentids'].")"))->field('studentno')->select();
            for($i=0; $i<count($studentids); $i++){
                $practiceinfo = D('practice')->where(array('student_id'=>$studentids[$i]['studentno']))->select();
                $data['student_id']=$studentids[$i]['studentno'];
                if(empty($practiceinfo)){
                    $res[]=D('practice')->add($data);
                }else{
                    $res[]=D('practice')->where(array('id'=>$practiceinfo[0]['id']))->save($data);
                }
            }
            if($res){
                show(1,'安排成功');
            }else{
                show(0,'安排失败');
            }
        }else{
            $corporation  = D('corporation')->select();
            $teacher  = D('teacher')->select();
            $this->assign('corporation',$corporation);
            $this->assign('teacher',$teacher);
            $this->assign('studentids',$_POST['studentids'] ? $_POST['studentids'] : $_GET['studentid']);
            return $this->display();
        }
    }
    
    public function export(){
        return $this->display();
    }

    public function evaluation()
    {
        return $this->display();
    }

    public function addEvaluation()
    {
        return $this->display('Practice/add');
    }

    public function cancelarrangement()
    {
        $id = I('post.id','','trim');
        if(is_array($id))
            $rel = D('practice')->where("`student_id` IN(select studentno from dg_student where id IN( ".implode(',', $id)."))")->delete();
        else
            $rel = D('practice')->where("`student_id` = (select studentno from dg_student where id=".$id.")")->delete();
        if($rel)
            show(1,'取消成功');
        else
            show(0,'取消失败');
    }
}