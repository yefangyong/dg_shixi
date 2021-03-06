<?php
namespace Teacher\Model;
use Think\Model;

class PracticeModel extends Model{
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
          return $this->where("`student_id` IN(".implode(',', $id).") ")->delete();
        else
        return $this->where("`student_id` = ".$id)->delete();
    }



    public function getGuide()
    {
        return $this->field('guide')->select();
    }

    public function getAddress()
    {
        return $this->group("address")->field('address')->select();
    }

    public function setArrangeMent($id,$data){
       if(!isset($id)||empty($id)){
           return 0;
       }
       if(!is_array($data)||empty($data)){
           return 0;
       }
       return $this->where("`student_id` = ".$id)->save($data);

    }

}