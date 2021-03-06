<?php
namespace Teacher\Model;
use Think\Model;

class CorporationModel extends Model
{
    public function getCorporation($data = array())
    {
        return $this->where($data)->select();
    }

    public function getCorporationById($id)
    {
        if (!isset($id) || empty($id)) {
            return '';
        } else {
            return $this->where("`id` = ".$id)->find();
        }
    }

    public function getAddress()
    {
        return $this->group("city")->field('city')->select();
    }

    public function getName()
    {
        return $this->field('name,id')->select();
    }

    public function getNameById($id)
    {
        if (!isset($id) || empty($id)) {
            return '';
        } else {
            return $this->where("`id` = " . $id)->field('name')->find();
        }
    }

    public function getCorporationType()
    {
        return $this->field('type')->select();
    }

    public function addCorporation($data)
    {
        if (!is_array($data) || empty($data)) {
            return 0;
        }
        return $this->add($data);
    }

    public function setStatus($area, $status)
    {
        if (!isset($area) || empty($area)) {
            return 0;
        }
        if (!isset($status) || empty($status)) {
            return 0;
        }
        $data['isUsed'] = $status;

        if(is_array($area)){
            $map[] = " id IN(".implode(',',$area).")";
        }else{
            $map['id'] = $area;
        }
        return $this->where($map)->save($data);
    }

    public function delCorporationById($id)
    {
        if (!isset($id) || empty($id)) {
            return 0;
        }
        if(is_array($id))
            return $this->where("`id` IN(".implode(',', $id).") ")->delete();
        else
            return $this->where("`id` = " . $id)->delete();
    }

    public function editCorporation($id,$data)
    {
        if (!is_array($data) || empty($data)) {
            return 0;
        }
        if(!isset($id)||empty($id)){
            return 0;
        }
        return $this->where("`id` = ".$id)->save($data);
    }
}