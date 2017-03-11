<?php
namespace Teacher\Controller;

class ApplyController extends CommonController{
    public function index(){
        if($_POST){
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $res = D('Practice')->setResult($id,$data);
            if($res){
                show(1,'审核成功');
            }else{
                show(0,'审核失败');
            }
        }else{
            $department = I('get.department',0);
            if($department)
                $map[] = 'classno IN(select id from dg_class where dep_id='.$department.')';
            $profession = I('get.profession',0);
            $class = I('get.class',0);
            if($class)
                $map[] = 'classno = '.$class;
            $corporation = I('get.corporation',0);
            if($corporation)
                $map[] = 'Practice.corporation_id = '.$corporation;
            $status = I('get.status',0);
            if($status)
                $map[] = 'Practice.status = '.($status-1);
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
            $applyList = D('PracticeView')->where($map)->page($currentPage.','.$listRows)->select();
            foreach ($applyList as $k => $v) {
                //根据有无实习公司查询公司名称
                if ($v['corporation_id'] != 0) {
                    $corname = D('Corporation')->getNameById($v['corporation_id']);
                    $applyList[$k]['corname'] = $corname['name'];
                } else {
                    $applyList[$k]['corname'] = '';
                }
            }
            $class = D('class')->select();
            $department = D('department')->select();
            $profession = D('profession')->select();
            $corporation = D('corporation')->select();
            $this->assign('department',$department);
            $this->assign('class',$class);
            $this->assign('profession',$profession);
            $this->assign('corporation',$corporation);
            $this->assign('list',$applyList);
            $this->assign('page',$show);
            $this->assign('totalCount',$count);
            $this->assign('numPerPage',$listRows);
            $this->assign('currentPage',$currentPage);
            return $this->display();
        }
    }

    public function export(){
        $applyList = D('PracticeView')->select();
        $str = "#,学号,姓名,班级,提交时间,实习企业,专业对口,保险,职务,企业联系人,联系电话,详细地址,开始时间,截止时间,评审结果";
        $str .= "\n";
        $row = 1;
        for($i=0; $i<count($applyList); $i++)
        {
            $str .= $row++.','.$applyList[$i]['studentno'].','.$applyList[$i]['stuname'].','.$applyList[$i]['classname'].','.$applyList[$i]['applytime'].','.$applyList[$i]['corname'].','.($applyList[$i]['profession']==1 ? '对口' : '不对口').','.($applyList[$i]['insurance']==1 ? '已购买' : '未购买').','.$applyList[$i]['position'].','.$applyList[$i]['contact'].','.$applyList[$i]['telephone'].','.$applyList[$i]['detailaddress'].','.$applyList[$i]['starttime'].','.$applyList[$i]['endtime'].','.($applyList[$i]['status']==1?'已审核':($applyList[$i]['status']==0 ? '未审核' : '已退回'))."\n";
        }
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=Apply-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }


    public function edited($data)
    {
        $this->assign('apply',$data);
        $this->display('edited');
    }


    public function editApply()
    {
        if($_POST){
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $res = D('Practice')->setResult($id,$data);
            if($res){
                show(1,'审核成功');
            }else{
                show(0,'审核失败');
            }
        }else{
            $id = I('get.id',0,'intval');
            $apply = D('PracticeView')->getApply($id);
            if(!$apply['status']){
                $this->assign('apply',$apply);
                $this->display();
            }else{
                $this->edited($apply);
            }
        }
    }

    public function delApply(){
        $id = I('post.id',0,'intval');
        if(!isset($id)||empty($id)){
            show(0,'删除失败！');
        }
        $res = D('Practice')->delApply($id);
        if($res){
            show(1,'删除成功！');
        }else{
            show(0,'删除失败！');
        }
    }

    //实习企业变更
    public function change()
    {
        $department = I('get.department',0);
        if($department)
            $map[] = 'classno IN(select id from dg_class where dep_id='.$department.')';
        $profession = I('get.profession',0);
        $class = I('get.class',0);
        if($class)
            $map[] = 'classno = '.$class;
        $corporation = I('get.corporation',0);
        if($corporation)
            $map[] = 'Practice.corporation_id = '.$corporation;
        $status = I('get.status',0);
        if($status)
            $map[] = 'myChange.status = '.($status-1);
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(studentno like "%'.$keywords.'%" or Student.name like "%'.$keywords.'%")';

        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('ChangeView')->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $applyList = D("ChangeView")->where($map)->page($currentPage.','.$listRows)->select();
        $class = D('class')->select();
        $department = D('department')->select();
        $profession = D('profession')->select();
        $corporation = D('corporation')->select();
        $this->assign('department',$department);
        $this->assign('class',$class);
        $this->assign('profession',$profession);
        $this->assign('corporation',$corporation);
        $this->assign('list',$applyList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function exportChange(){
        $applyList = D('ChangeView')->select();
        $str = "#,学号,姓名,班级,提交时间,原因,实习企业,职位,专业对口,保险,企业指导教师,企业联系人,联系电话,详细地址,开始时间,截止时间,评审结果";
        $str .= "\n";
        $row = 1;
        for($i=0; $i<count($applyList); $i++)
        {
            $str .= $row++.','.$applyList[$i]['studentno'].','.$applyList[$i]['stuname'].','.$applyList[$i]['classname'].','.$applyList[$i]['applytime'].','.$applyList[$i]['reason'].','.$applyList[$i]['corname'].','.$applyList[$i]['position'].','.($applyList[$i]['profession']==1 ? '对口' : '不对口').','.($applyList[$i]['insurance']==1 ? '已购买' : '未购买').','.$applyList[$i]['guide'].','.$applyList[$i]['contact'].','.$applyList[$i]['telephone'].','.$applyList[$i]['detailaddress'].','.$applyList[$i]['starttime'].','.$applyList[$i]['endtime'].','.($applyList[$i]['status']==1?'已审核':($applyList[$i]['status']==0 ? '未审核' : '已退回'))."\n";
        }
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=Change-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }


    //实习企业变更
    public function corporation()
    {
        $department = I('get.department',0);
        if($department)
            $map[] = 'classno IN(select id from dg_class where dep_id='.$department.')';
        $profession = I('get.profession',0);
        $class = I('get.class',0);
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
        $map[] = "myChange.type = 1";
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('ChangeView')->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $applyList = D("ChangeView")->where($map)->page($currentPage.','.$listRows)->select();
        $class = D('class')->select();
        $department = D('department')->select();
        $profession = D('profession')->select();
        $corporation = D('corporation')->select();
        $this->assign('department',$department);
        $this->assign('class',$class);
        $this->assign('profession',$profession);
        $this->assign('corporation',$corporation);
        $this->assign('list',$applyList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function corEdited($data)
    {
        $this->assign('apply',$data);
        $this->display('coredited');
    }

    public function editChange()
    {
        if($_POST){
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $res = D('Change')->setResult($id,$data);
            if($res){
                show(1,'审核成功');
            }else{
                show(0,'审核失败');
            }
        }else{
            $id = I('get.id',0,'intval');
            $apply = D('ChangeView')->getApply($id);
            if(!$apply['status']){
                $this->assign('apply',$apply);
                $this->display();
            }else{
                $this->corEdited($apply);
            }
        }
    }

    public function editCor()
    {
        if($_POST){
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $res = D('Change')->setResult($id,$data);
            if($res){
                show(1,'审核成功');
            }else{
                show(0,'审核失败');
            }
        }else{
            $id = I('get.id',0,'intval');
            $apply = D('ChangeView')->getApply($id);
            if(!$apply['status']){
                $this->assign('apply',$apply);
                $this->display();
            }else{
                $this->corEdited($apply);
            }
        }
    }

    //实习岗位变更

    public function position()
    {
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('ChangeView')->where("myChange.type = 0")->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $applyList = D("ChangeView")->where("myChange.type = 0")->page($currentPage.','.$listRows)->select();
        $this->assign('list',$applyList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function posEdited($data)
    {
        $this->assign('apply',$data);
        $this->display('posedited');
    }

    public function editPos()
    {
        if($_POST){
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $res = D('Change')->setResult($id,$data);
            if($res){
                show(1,'审核成功');
            }else{
                show(0,'审核失败');
            }
        }else{
            $id = I('get.id',0,'intval');
            $apply = D('ChangeView')->getApply($id);
            if(!$apply['status']){
                $this->assign('apply',$apply);
                $this->display();
            }else{
                $this->posEdited($apply);
            }
        }
    }

    //请假申请

    public function leave()
    {
        $department = I('get.department',0);
        if($department)
            $map[] = 'classno IN(select id from dg_class where dep_id='.$department.')';
        $profession = I('get.profession',0);
        $class = I('get.class',0);
        if($class)
            $map[] = 'classno = '.$class;
        $corporation = I('get.corporation',0);
        if($corporation)
            $map[] = 'Practice.corporation_id = '.$corporation;
        $status = I('get.status',0);
        if($status)
            $map[] = 'myLeave.status = '.($status-1);
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(studentno like "%'.$keywords.'%" or Student.name like "%'.$keywords.'%")';
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('LeaveView')->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $leaveList = D("LeaveView")->where($map)->page($currentPage.','.$listRows)->select();
        $class = D('class')->select();
        $department = D('department')->select();
        $profession = D('profession')->select();
        $corporation = D('corporation')->select();
        $this->assign('department',$department);
        $this->assign('class',$class);
        $this->assign('profession',$profession);
        $this->assign('corporation',$corporation);
        $this->assign('list',$leaveList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
    }

    public function exportLeave(){
        $applyList = D('LeaveView')->select();
        $str = "#,学号,姓名,班级,提交时间,内容,紧急联系人,紧急联系电话,开始时间,截止时间,评审结果";
        $str .= "\n";
        $row = 1;
        for($i=0; $i<count($applyList); $i++)
        {
            $str .= $row++.','.$applyList[$i]['studentno'].','.$applyList[$i]['stuname'].','.$applyList[$i]['classname'].','.$applyList[$i]['applytime'].','.$applyList[$i]['content'].','.$applyList[$i]['emegencyconcat'].','.$applyList[$i]['telephone'].','.$applyList[$i]['starttime'].','.$applyList[$i]['endtime'].','.($applyList[$i]['status']==1?'已审核':($applyList[$i]['status']==0 ? '未审核' : '已退回'))."\n";
        }
        $str = mb_convert_encoding($str, "GBK", "UTF-8");
        Header('Cache-Control: private, must-revalidate, max-age=0');
        Header("Content-type: application/octet-stream"); 
        Header("Content-Disposition: attachment; filename=Leave-".date('Ymd').".csv"); 
        echo $str;
        exit;
    }

    public function leaveEdited($data)
    {
        $this->assign('apply',$data);
        $this->display('leaveedited');
    }

    public function editLeave()
    {
        if($_POST){
            $opinion = I('post.opinion',0,'intval');
            $data['status'] = $opinion;
            $id = I('post.id',0,'intval');
            $res = D('Leave')->setResult($id,$data);
            if($res){
                show(1,'审核成功');
            }else{
                show(0,'审核失败');
            }
        }else{
            $id = I('get.id',0,'intval');
            $apply = D('LeaveView')->getLeave($id);
            if(!$apply['status']){
                 $this->assign('apply',$apply);
                 $this->display();
            }else{
                $this->leaveEdited($apply);
            }
         }
    }

    public function delChange(){
        $id = I('post.id',0,'intval');
        if(!isset($id)||empty($id)){
            show(0,'删除失败！');
        }
        $res = D('Change')->delApply($id);
        if($res){
            show(1,'删除成功！');
        }else{
            show(0,'删除失败！');
        }
    }

    public function delLeave(){
        $id = I('post.id',0,'intval');
        if(!isset($id)||empty($id)){
            show(0,'删除失败！');
        }
        $res = D('Leave')->delApply($id);
        if($res){
            show(1,'删除成功！');
        }else{
            show(0,'删除失败！');
        }
    }

}