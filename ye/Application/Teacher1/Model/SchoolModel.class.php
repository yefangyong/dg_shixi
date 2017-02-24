<?php
namespace Teacher\Model;
use Think\Model;

class SchoolModel extends Model{
    public function getAllDepartment(){
        return $this->select();
    }
}