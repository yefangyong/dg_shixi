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
}