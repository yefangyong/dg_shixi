<?php
namespace Student\Controller;
use Think\Controller;

class ImageController extends Controller {

    public function ajaxUploadImage() {
        $upload = D('UploadImage');
        $res = $upload->imageUpload();
        if($res == false) {
            return show(0,'图片上传失败');
        }else {
            return show('1','图片上传成功',$res);
        }
    }
}