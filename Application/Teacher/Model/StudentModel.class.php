<?php
    namespace Teacher\Model;
    use Think\Model;

    class StudentModel extends Model{
        public function getStudentList(){
            return $this->select();
        }

        public function getStudentsName(){
            return $this->field('name,studentno')->select();
        }

        public function addStu($data)
        {
            if(!is_array($data)||empty($data)){
                return 0;
            }
            return $this->add($data);
        }

        public function delStu($id)
        {
            if(!isset($id)||empty($id)){
                return 0;
            }
            return $this->where("`id` = ".$id)->delete();
        }


        public function updateStu($id,$data)
        {
            if(!is_array($data)||empty($data)){
                return 0;
            }
            if(!isset($id)||empty($id)){
                return 0;
            }
            return $this->where("`id` = ".$id)->save($data);
        }

    }