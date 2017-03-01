<?php
namespace Teacher\Controller;

class PracticeController extends CommonController{
    public function index(){
        if($_POST){
           $data['name'] = I('post.name','','trim'); //school 学院名称
           $data['name'] = I('post.name','','trim');//profession 专业名称
           $data['classname'] = I('post.class','','trim');//class 班级名称
        }else{
            $list = D('PracticeView')->select();
            $dept = D('School')->getAllDepartment();
            $profession = D('Profession')->getAllProfession();
            $class = D('Class')->getAllClassesName();
            foreach ($list as $k => $v) {
                //根据有无实习公司查询公司名称
                if ($v['corporation_id'] != 0) {
                    $corname = D('Corporation')->getNameById($v['corporation_id']);
                    $list[$k]['corname'] = $corname['name'];
                } else {
                    $list[$k]['corname'] = '';
                }
            }
            $this->assign('dept', $dept);
            $this->assign('profession', $profession);
            $this->assign('class', $class);
            $this->assign('list', $list);
            return $this->display();
        }
    }

    public function corporation(){
        $corporationList = M('Corporation')->select();
        $this->assign('list',$corporationList);
        return $this->display();
    }

    public function addCor(){
        if($_POST){
            $data['name'] =  I('post.name','','trim');
            if(!isset($data['name'])||empty($data['name'])){
                show(0,'请填写公司名！');
            }
            $data['city'] = I('post.city','','trim');
            if(!isset($data['city'])||empty($data['city'])){
                show(0,'请填写公司地址！');
            }
            $data["type"] = I('post.type','','trim');
             if(!isset($data['type'])||empty($data['type'])){
                show(0,'请填写公司性质！');
            }
            $data["contact"] = I('post.contact','','trim');
             if(!isset($data['contact'])||empty($data['contact'])){
                show(0,'请填写联系人！');
            }
            $data["position"] = I('post.position','','trim');
            $data["telephone"] = I('post.telephone','','trim');
            $data["mobile"] = I('post.mobile','','trim');
            $data["email"] = I('post.email','','trim');
            $data["zipcode"] = I('post.zipcode','','trim');
//            $data["fax"] = I('post.fax','','trim');
            $data["website"] = I('post.website','','trim');
            $data['address'] = I('post.address','','trim');
             if(!isset($data['address'])||empty($data['address'])){
                show(0,'请填写公司详细地址！');
            }
            $data["introduction"] = I('post.introduction','','trim');
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $res = D('Corporation')->addCorporation($data);
            if($res){
                show(1,'添加成功！');
            }else{
                show(0,'添加失败！');
            }
        }else{
            return $this->display();
        }
    }

    public function delCor()
    {
        $id = I('post.id',0,'intval');
        $res = D('Corporation')->delCorporationById($id);
        if($res){
            show(1,'删除成功');
        }else{
            show(0,'删除失败');
        }
    }

    public function editCor()
    {
        if($_POST){
            $id = I('post.id',0,'intval');
            $data['name'] =  I('post.name','','trim');
            if(!isset($data['name'])||empty($data['name'])){
                show(0,'请填写公司名！');
            }
            $data['city'] = I('post.city','','trim');
            if(!isset($data['city'])||empty($data['city'])){
                show(0,'请填写公司地址！');
            }
            $data["type"] = I('post.type','','trim');
            if(!isset($data['type'])||empty($data['type'])){
                show(0,'请填写公司性质！');
            }
            $data["contact"] = I('post.contact','','trim');
            if(!isset($data['contact'])||empty($data['contact'])){
                show(0,'请填写联系人！');
            }
            $data["position"] = I('post.position','','trim');
            $data["telephone"] = I('post.telephone','','trim');
            $data["mobile"] = I('post.mobile','','trim');
            $data["email"] = I('post.email','','trim');
            $data["zipcode"] = I('post.zipcode','','trim');
//            $data["fax"] = I('post.fax','','trim');
            $data["website"] = I('post.website','','trim');
            $data['address'] = I('post.address','','trim');
            if(!isset($data['address'])||empty($data['address'])){
                show(0,'请填写公司详细地址！');
            }
            $data["introduction"] = I('post.introduction','','trim');
            $data['addtime'] = date('Y-m-d H:i:s',time());
            $res = D('Corporation')->editCorporation($id,$data);
            if($res){
                show(1,'编辑成功！');
            }else{
                show(0,'编辑失败！');
            }
        }else{
            $id = I('get.id',0,'intval');
            if(!isset($id)||empty($id)){
                show(0,'获取失败');
            }else{
                $data['id'] = $id;
                $corporationInfo = D('Corporation')->getCorporation($data);
                $corporationInfo = $corporationInfo[0];
                $this->assign('info',$corporationInfo);
                return $this->display();
            }
        }
    }

    public function viewCor()
    {
        $id = I('get.id', 0, 'intval');
        if (!isset($id) || empty($id)) {
            show(0, '获取失败');
        } else {
            $corporationInfo = D('Corporation')->getCorporationById($id);
//            echo '<pre>';
//            var_dump($corporationInfo);
//            exit;
//            $corporationInfo = $corporationInfo[0];
            $this->assign('info', $corporationInfo);
            return $this->display();
        }
    }

    public function setCorStatus()
    {
        if($_POST){
            $ids = I('post.ids');
            if(!isset($ids)||empty($ids)){
                show(0,'公司信息传送失败！');
            }
            $ids = implode(',',$ids);
            $status = I('post.status',1,'intval');
            if(!isset($status)||empty($status)){
                show(0,'状态值接收失败！');
            }
            $res = D('Corporation')->setStatus($ids,$status);
            if($res){
                show(1,'状态修改成功！');
            }else{
                show(0,'状态修改失败！');
            }
        }else{
            show(0,'状态修改失败！');
        }
    }

    public function import()
    {
        return $this->display();
    }

    public function arrangement()
    {
        if($_POST){
            $formData = explode('&',$_POST['data']);
            foreach($formData as $k=>$v){
                $tmpArr[] = explode('=',$v);
            }
            $data = array();
            foreach($tmpArr as $k=>$v){
                $data[$v[0]] = $v[1];
            }
            $data['city'] = I('post.address','','trim');
            $corporationName = I('post.name','','trim');
            $data['corporation_id'] = M('Corporation')->where("`name` = '".$corporationName."'")->field('id')->find();
            //此处要优化
            $data['corporation_id'] = $data['corporation_id']['id'];
            $data['guide'] = I('post.guide','','trim');
            $data['telephone'] = I('post.telephone','','trim');
            $data['type'] = I('post.type','','trim');
            $data['position'] = urldecode($data['position']);
            if(!isset($data['position'])||empty($data['position'])){
                show(0,'请填写职位！');
            }
            if(!isset($data['city'])||($data['city']=='请选择企业所在地址')){
                show(0,'请选择地区！');
            }
            if(!isset($data['guide'])||empty($data['guide'])){
                show(0,'请选择校外指导教师！');
            }
            if(!isset($data['starttime'])||empty($data['starttime'])){
                show(0,'请填写开始日期！');
            }
            if(!isset($data['endtime'])||empty($data['endtime'])){
                show(0,'请填写结束日期！');
            }

            if(strtotime(urldecode($data['endtime']))<=strtotime(urldecode($data['starttime']))){
                show(0,'日期范围不正确！');
            }

            if(!isset($data['type'])||empty($data['type'])){
                show(0,'请选择公司性质！');
            }
            $res = D('Practice')->setArrangeMent($data['stuno'],$data);
            if($res){
                show(1,'安排成功');
            }else{
                show(0,'安排失败');
            }
        }else{
            $addressList  = D('Corporation')->getAddress();
            echo '<pre>';
            var_dump($addressList);
            exit;
            $nameList = D('Corporation')->getName();
            $guideList = D('Practice')->getGuide();
            $typeList = D('Corporation')->getCorporationType();
            $this->assign('guide',$guideList);
            $this->assign('addr',$addressList);
            $this->assign('name',$nameList);
            $this->assign('type',$typeList);
            return $this->display();
        }
    }
    
    public function export(){
        return $this->display();
    }

    public function evaluation()
    {
        return $this->display();
    }

    public function addEvaluation()
    {
        return $this->display('Practice/add');
    }
}