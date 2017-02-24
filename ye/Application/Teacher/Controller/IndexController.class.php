<?php
namespace Teacher\Controller;

class IndexController extends CommonController{
    public function index(){
        echo '<pre>';
        var_dump($_SESSION);
        exit;
        return $this->redirect('Report/index');
    }
}