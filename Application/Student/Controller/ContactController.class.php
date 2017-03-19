<?php
namespace Student\Controller;
use Student\Controller\CommonController;
use Think\Controller;

class ContactController extends CommonController {
    public function student() {
        $class_id = $_SESSION['adminUser']['classno'];
        import('ORG.Util.Page');
        // 每页显示记录数
        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        $map = array(
            'classno'=>$class_id,
        );
        $keywords = I('get.keywords');
        if($keywords) {
            $map[] = '(studentno like "%'.$keywords.'%" or name like "%'.$keywords.'%")';
        }
        $count = M('Student')->where($map)->count();
        //实例化分页类，传入总记录数和每页数
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $data = M('Student')->where($map)->page($currentPage.','.$listRows)->select();
       foreach ($data as $k=>$v) {
           $corporation_id = $data[$k]['corporation_id'];
           $corporation = M('Corporation')->where('id='.$corporation_id)->find();
           $data[$k]['cname'] = $corporation['name'];
       }
        $this->assign('page',$show);
        $this->assign('list',$data);
        $this->display();
    }

    public function teacher() {

        $listRows = I('post.numPerPage',C('PAGE_LISTROWS'));
        //查询条件
        $map =array();
        $department = I('get.department');
        if($department) {
            $map['department_id'] = $department;
        }
        $keywords = I('get.keywords');
        if($keywords) {
            $map[] ='(name like "%'.$keywords.'%")';
        }
        $count = M('Teacher')->where($map)->count();
        $page = new \Think\Page($count,$listRows);
        $show = $page->show();
        $currentPage = I(C('VAR_PAGE'),1);
        $data = M('Teacher')->where($map)->page($currentPage.','.$listRows)->select();
        foreach($data as $k=>$v) {
            if($data[$k]['identity'] == '班主任') {
                $class = M('Class')->where('id='.$data[$k]['class_id'])->find();
                $data[$k]['identity'] = $class['classname'].'班主任';
            }
        }
        foreach($data as $k=>$v) {
            $did = $data[$k]['department_id'];
            $department = M('Department')->where('id='.$did)->find();
            $data[$k]['dname'] = $department['dname'];

        }
        $dept = D('Department')->select();
        $this->assign('department',$dept);
        $this->assign('page',$show);
        $this->assign('list',$data);
        $this->display();
    }
}