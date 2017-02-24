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
}