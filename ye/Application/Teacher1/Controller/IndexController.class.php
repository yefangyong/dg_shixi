<?php
namespace Teacher\Controller;

class IndexController extends CommonController{
    public function index(){
        return $this->redirect('Report/index');
    }
}