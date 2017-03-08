<?php
namespace Home\Controller;
use Think\Controller;
class ImageController extends Controller {

   public function index() {
      $jsondata = json_decode($_POST['data']);
      foreach( $jsondata AS $key => $v){
        $_POST[$key]=$v;
      } 
      unset($_POST['data']);
      $file_name = base64_decode($_POST['image']);
      $file = '/tmp/img'.time();
      $m=fopen($file,"w");//当参数为"w"时是将内容覆盖写入文件，而当参数为"a"时是将内容追加写入。
      //$content=$result['keyword']."\t\t\n";
      fwrite($m,$file_name);
      fclose($m);
      $_FILES['image']['tmp_name']=$file;
      $_FILES['image']['name']=$_POST['name'];
      $upload = D('UploadImage');
      $res = $upload->imageUpload(true);
      if($res !== false) {
          return $this->ajaxReturn(array('status'=>1,'info'=>'图片上传成功','data'=>$res));
      }else {
          return $this->ajaxReturn(array('status'=>0,'info'=>'图片上传失败','data'=>array()));
      }
   }
}