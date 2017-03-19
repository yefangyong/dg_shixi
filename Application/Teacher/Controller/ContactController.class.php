<?php
 namespace Teacher\Controller;
 use Student\Controller\CommonController;

 class ContactController extends CommonController{
     public function index(){
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
     	import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('ContactView')->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $stuList = D("ContactView")->where($map)->page($currentPage.','.$listRows)->select();
        $department = D('department')->select();
        $profession = D('profession')->select();
        $class = D('class')->select();
        $this->assign('department',$department);
        $this->assign('class',$class);
        $this->assign('profession',$profession);
        $this->assign('list',$stuList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
     }

     public function teacher()
     {
        $department = I('get.department',0);
        if($department)
            $map[] = ' dep_id='.$department;
        $profession = I('get.profession',0);
        $class = I('get.class',0);
        if($class)
            $map[] = 'class_id = '.$class;
        $keywords = I('get.keywords');
        if($keywords)
            $map[] = '(teacherno like "%'.$keywords.'%" or teacher.name like "%'.$keywords.'%")';
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $count= D('teacher')->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $stuList = D('teacher')->join("LEFT JOIN dg_department ON dg_teacher.department_id=dg_department.id")->where($map)->page($currentPage.','.$listRows)->field("dg_teacher.*,dg_department.dname")->select();
        $department = D('department')->select();
        $profession = D('profession')->select();
        $class = D('class')->select();
        $this->assign('department',$department);
        $this->assign('class',$class);
        $this->assign('profession',$profession);
        $this->assign('list',$stuList);
        $this->assign('page',$show);
        $this->assign('totalCount',$count);
        $this->assign('numPerPage',$listRows);
        $this->assign('currentPage',$currentPage);
        return $this->display();
     }
 }