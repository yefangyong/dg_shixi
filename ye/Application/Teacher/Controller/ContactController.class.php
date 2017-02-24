<?php
 namespace Teacher\Controller;
 use Student\Controller\CommonController;

 class ContactController extends CommonController{
     public function index(){
         $stuList = D('Student')->getStudentList();
         $this->assign('list',$stuList);
         return $this->display();
     }
 }