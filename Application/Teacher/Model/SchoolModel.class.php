<?php
namespace Teacher\Model;
use Think\Model;

class SchoolModel extends Model{
    public function getAllDepartment(){
        return $this->select();
    }

    public function getIdByName($name){
        if(!isset($name)||empty($name)){
            return 0;
        }
        return $this->where("`name` = ".$name)->field('id')->find();
    }

}