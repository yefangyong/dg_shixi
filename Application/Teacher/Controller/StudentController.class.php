<?php
namespace Teacher\Controller;
use Think\Controller;

class StudentController extends Controller{
    public function index(){
        $studentList = D('StudentView')->select();
        $this->assign('list',$studentList);
        return $this->display();
    }

    public function getMaster(){
        $className = I('post.class','','trim');
        if(!isset($className)||empty($className)){
            return '';
        }
        $data['classname'] = $className;
        $res = M('Class')->where($data)->field('master')->find();
        exit(json_encode($res['master']));
    }

    public function view(){
        $sid = I('get.id',0,'intval');
        if(!isset($sid)||empty($sid)){
            return 0;
        }

        $studentInfo = D('StudentView')->getStudentInfo($sid);
        $this->assign('student',$studentInfo);
        return $this->display();
    }

    public function add(){
        if($_POST){
            $data = I('post.','','trim');
            if(!isset($data['phone'])||empty($data['phone'])){
                show(0,'请填写手机号！');
            }
            if(!isset($data['studentno'])||empty($data['studentno'])){
                show(0,'请填写学号！');
            }
            if(!isset($data['name'])||empty($data['name'])){
                show(0,'请填写姓名！');
            }
            if(!isset($data['dept'])||empty($data['dept'])){
                show(0,'请选择系部！');
            }
            $dept = $data['dept'];
            unset($dept);
            if(!isset($data['grade'])||empty($data['grade'])){
                show(0,'请选择年级！');
            }
            $grade = $data['grade'];
            unset($data['grade']);
            $className = ($data['class']);
            unset($data['class']);
            $classNo = D('Class')->getIdByName($className);
            $data['classno'] = $classNo['id'];
            if(!isset($className)||empty($className)){
                show(0,'请选择班级！');
            }
            if(!isset($data['course'])||empty($data['course'])){
                show(0,'请填写课程！');
            }
            if(!isset($data['email'])||empty($data['email'])){
                show(0,'请填写邮箱！');
            }
            if(!isset($data['password'])||empty($data['password'])){
                show(0,'请填写密码！');
            }
            $gender = $data['gender'];
            unset($data['gender']);
            $data['sex'] = $gender=='男'?1:0;
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $res = D('Student')->addStu($data);
            if($res){
                show (1,'添加成功！');
            }else{
                show(0,'添加失败！');
            }
        }else{
            $department = D('School')->getAllDepartment();
            $class = D('Class')->getAllClassesName();
            $this->assign('class',$class);
            $this->assign('dept',$department);
            return $this->display();
        }
    }

    public function update(){
        return $this->display();
    }
}