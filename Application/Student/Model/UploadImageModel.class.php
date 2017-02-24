<?php
namespace Student\Model;
use Think\Model;

class UploadImageModel extends Model {

    private $uploadObj = '';

    const UPLOAD = 'upload';

    public function __construct() {
        $this->uploadObj = new \Think\Upload();
        $this->uploadObj->rootPath = './'.self::UPLOAD.'/';
        $this->uploadObj->subName = date(Y).'/'.date(m).'/'.date(d);
    }

    public function imageUpload() {
        $res = $this->uploadObj->upload();
        if($res) {
            return '/'.self::UPLOAD.'/'.$res['file']['savepath'].$res['file']['savename'];
        }else {
            return false;
        }
    }
}