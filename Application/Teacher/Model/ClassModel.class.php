<?php
 namespace Teacher\Model;
 use Think\Model\RelationModel;

 class ClassModel extends RelationModel{
     public function getClassName($id){
        $data['id'] = $id;
        return $this->where($data)->field('name')->find();
     }

     public function getIdByName($name){
         $data['classname'] = $name;
         return $this->where($data)->field('id')->find();
     }


     protected $_link = array(
        'Profession'=>array(
            'mapping_type' => self::BELONGS_TO,
            'class_name' => 'Profession',
            'foreign_key' => 'id',
            'mapping_name'  => 'profession',
            'mapping_fields' => 'name',
            'as_fields' => 'name:profession',
        )
     );

     public function getProfession(){
         $tmpArr = $this->relation(true)->select();
         $profession = array();
         foreach($tmpArr as $v){
             $profession[] = $v['profession'];
         }
         return $profession;
     }

     public function getAllClassesName()
     {
         return $this->select();
     }

     public function getClassIdByName($name)
     {
           if(!isset($name)||empty($name)){
               return 0;
           }

         return $this->where("`classname` = '".$name."'")->field('id')->find();
     }
 }