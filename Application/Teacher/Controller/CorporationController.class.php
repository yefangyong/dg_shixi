<?php
 namespace Teacher\Controller;

 class CorporationController extends CommonController{

     public function index(){
         $corporationList = D('Corporation')->getCorporation();
         $this->assign('list',$corporationList);
         return $this->display();
     }

     public function add(){
         if($_POST){
             echo '<pre>';
             var_dump($_POST);
             exit;
         }
         return $this->display();
     }

     public function import()
     {

     }

     public function export()
     {

     }

     public function del()
     {
         
     }
 }
