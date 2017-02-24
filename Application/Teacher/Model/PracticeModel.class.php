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

    public function getGuide()
    {
        return $this->field('guide')->select();
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