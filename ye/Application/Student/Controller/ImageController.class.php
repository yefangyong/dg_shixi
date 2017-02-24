<?php
namespace Student\Controller;
use Think\Controller;

class ImageController extends Controller {

     public function ajaxuploadimage(){
        $upload = D('UploadImage');
        $res=$upload->imageupload();
        if($res === false){
            return show(0,'图片上传失败');
        }
        return show(1,'图片上传成功',$res);
    }
}