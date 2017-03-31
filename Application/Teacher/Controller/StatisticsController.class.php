<?php
namespace Teacher\Controller;
use Think\Controller;

class StatisticsController extends Controller{
    public function index(){
        return $this->display();
    }
}