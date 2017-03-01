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
    public function corporation()
    {
        $applyList = D('ChangeView')->getCor();
        $this->assign('list',$applyList);
        return $this->display();
    }

    public function corEdited($data)
    {
        $this->assign('apply',$data);
        $this->display('coredited');
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
        $applyList = D('ChangeView')->getPosition();
        $this->assign('list',$applyList);
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
        $leaveList = D("LeaveView")->select();
        $this->assign('list',$leaveList);
        return $this->display();
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