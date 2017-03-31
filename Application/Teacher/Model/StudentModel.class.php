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
            if(is_array($id)){
                D('Report')->where("student_id IN(select studentno FROM dg_student WHERE `id` IN(".implode(',', $id)."))")->delete();
                D('Practice')->where("student_id IN(select studentno FROM dg_student WHERE `id` IN(".implode(',', $id)."))")->delete();
                D('Change')->where("student_id IN(select studentno FROM dg_student WHERE `id` IN(".implode(',', $id)."))")->delete();
                D('Leave')->where("student_id IN(select studentno FROM dg_student WHERE `id` IN(".implode(',', $id)."))")->delete();
                $rs = $this->where("`id` IN(".implode(',', $id).") ")->delete();
                return $rs;
            }else{
                D('Report')->where("student_id =(select studentno FROM dg_student WHERE `id`=".$id." LIMIT 1)")->delete();
                D('Practice')->where("student_id =(select studentno FROM dg_student WHERE `id`=".$id." LIMIT 1)")->delete();
                D('Change')->where("student_id =(select studentno FROM dg_student WHERE `id`=".$id." LIMIT 1)")->delete();
                D('Leave')->where("student_id =(select studentno FROM dg_student WHERE `id`=".$id." LIMIT 1)")->delete();
                $rs = $this->where("`id` = ".$id)->delete();
                return $rs;
            }
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