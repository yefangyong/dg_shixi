<?php
namespace Teacher\Model;
use Think\Model;

class LeaveModel extends Model{
    public function  getLeaveApply(){
        return $this->select();
    }

    public function setResult($id,$data){
        if(!is_array($data)||empty($data)){
            return 0;
        }else{
            return $this->where("`id` = ".$id)->save($data);
        }
    }

    public function getLeaveCount($stuid)
    {
        if(!isset($stuid)||empty($stuid)){
            return 0;
        }
        $map['student_id'] = $stuid;
        return $this->where($map)->count();
    }

    public function delApply($id)
    {
        if(!isset($id)||empty($id)){
            return 0;
        }
        if(is_array($id))
          return $this->where("`id` IN(".implode(',', $id).") ")->delete();
        else
        return $this->where("`id` = ".$id)->delete();
    }
}