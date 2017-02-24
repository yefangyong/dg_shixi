<?php
 namespace Teacher\Model;
 use Think\Model;

 class ProfessionModel extends Model{
   public function getAllProfession(){
     return $this->select();
   }
 }
