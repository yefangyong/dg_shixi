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
            $applyList = D('PracticeView')->select();
            $this->assign('list',$applyList);
            return $this->display();
        }
    }

    public function corporation()
    {
        $applyList = D('ChangeView')->getCor();
        $this->assign('list',$applyList);
        return $this->display();
    }

    public function position()
    {
        $applyList = D('ChangeView')->getPosition();
        $this->assign('list',$applyList);
        return $this->display();
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
            $status = M('Practice')->where('id='.$id)->find();
            if($status['status'] !=0) {
                $apply = D('PracticeView')->getApply($id);
                $this->assign('apply',$apply);
                $this->display('Apply/checked');
            }else {
                $apply = D('PracticeView')->getApply($id);
                $this->assign('apply',$apply);
                $this->display();
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
            $status = M('change')->where('id='.$id)->find();

            if($status['status'] == 1) {
                $apply = D('ChangeView')->getApply($id);

                $this->assign('apply',$apply);
                $this->display('Apply/checkedCor');
            }else {
                $apply = D('ChangeView')->getApply($id);
                $this->assign('apply',$apply);
                $this->display();
            }
            
        }
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
            $status = M('change')->where('id='.$id)->find();

            if($status['status'] == 1) {
                $apply = D('ChangeView')->getApply($id);

                $this->assign('apply',$apply);
                $this->display('Apply/checkedCor');
            }else {
        
                $apply = D('ChangeView')->getApply($id);

                $this->assign('apply',$apply);
                $this->display();
            }
            
        }
    }


    public function leave()
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
            $leaveList = D('leave')->getLeaveApply();
            $this->assign('list',$leaveList);
            return $this->display();
        }
    }
}