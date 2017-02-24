<?php
 namespace Teacher\Model;
 use Think\Model;

 class UserModel extends Model{
     public function getUserList(){
         return $this->select();
     }

     public function findUser($data){
         if(!isset($data)||empty($data)){
             return 0;
         }
         return $this->where($data)->find();
     }
 }