<?php
 namespace Teacher\Model;
 use Think\Model;

 class ReportModel extends Model{
     public function updateReportById($id,$data){
         if(!isset($id)||empty($id)){
             return 0;
         }
         if(!isset($data)||!is_array($data)){
             return 0;
         }
         return $this->where("`id` = ".$id)->save($data);
     }

    public function delReportById($id){
      if(!isset($id)||empty($id)){
          return 0;
      }
      if(is_array($id))
          return $this->where("`id` IN(".implode(',', $id).") ")->delete();
      else
      return $this->where("`id` = ".$id)->delete();
    }

     public function getWeekCount($stuid)
     {
       if(!isset($stuid)||empty($stuid)){
           return 0;
       }
       $map['student_id'] = $stuid;
       $map['type'] = 0;
       return $this->where($map)->count();
     }
 }

