<?php
namespace Teacher\Model;
use Think\Model;

class ChangeModel extends Model{
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