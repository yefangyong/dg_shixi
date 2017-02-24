<?php
namespace Teacher\Model;
use Think\Model;

class CorporationModel extends Model
{
    public function getCorporation()
    {
        return $this->select();
    }

    public function getAddress()
    {
        return $this->field('city')->select();
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
        $map['id'] = $area;
        return $this->where($map)->save($data);
    }

    public function delCorporationById($id)
    {
        if (!isset($id) || empty($id)) {
            return 0;
        }
        return $this->where("`id` = " . $id)->delete();
    }
}