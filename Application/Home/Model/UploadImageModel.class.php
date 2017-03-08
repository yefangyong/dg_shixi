<?php
namespace Home\Model;
use Think\Model;

class UploadImageModel extends Model {

    private $uploadObj = '';

    const UPLOAD = 'upload';

    public function __construct() {
        $this->uploadObj = new \Think\Upload();
        $this->uploadObj->rootPath = './'.self::UPLOAD.'/';
        $this->uploadObj->subName = date(Y).'/'.date(m).'/'.date(d);
    }

    public function imageUpload($nohttp) {
        $res = $this->uploadObj->upload('', $nohttp);
        if($res) {
            return '/'.self::UPLOAD.'/'.$res['image']['savepath'].$res['image']['savename'];
        }else {
            return false;
        }
    }
}