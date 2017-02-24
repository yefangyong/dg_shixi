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

    }