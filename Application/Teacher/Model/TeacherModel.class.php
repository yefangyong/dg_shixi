<?php
namespace Teacher\Model;
use Think\Model;

class TeacherModel extends Model{
    public function getTeacher($teacherno){
        if(!isset($teacherno)||empty($teacherno)){
            return '';
        }
        return $this->where("`teacherno` = ".$teacherno)->find();
    }

    public function delTeacher($id)
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