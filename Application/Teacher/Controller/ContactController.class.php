<?php
 namespace Teacher\Controller;
 use Student\Controller\CommonController;

 class ContactController extends CommonController{
     public function index(){
         $stuList = D('ContactView')->select();
         $this->assign('list',$stuList);
         return $this->display();
     }

     public function teacher()
     {
         return $this->display();
     }
 }