<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\StudentModel;
use Home\Model\TeacherModel;
use Home\Model\VerifycodeModel;
use sdk\message\top\TopClient;
Vendor('aliyunmsg.top.TopClient');
Vendor('aliyunmsg.top.ResultSet');
Vendor('aliyunmsg.top.RequestCheckUtil');
Vendor('aliyunmsg.top.TopLogger');
Vendor('aliyunmsg.top.request.AlibabaAliqinFcSmsNumSendRequest');


class PasswordforgetController extends Controller {

    public function index() {
        session_destroy();
        return $this->display('Login/password_forget');
    }

    public function check_phone(){

    	$phone = $_REQUEST['phone'];

		$studentModel = new StudentModel();		
		$data = $studentModel->where('phone='.$phone)->find();

		if (empty($data)) {
			$teacherModel = new TeacherModel();
			$data = $teacherModel->where('phone='.$phone)->find();
		}

		if (empty($data)) {
			return $this->ajaxReturn(array('code'=>100,'info'=>'不存在该电话对应的用户！'));
		}else{
			//生成验证码
			$msg_code = mt_rand(10000,99999);
			//验证码入库
			$verifyCodeModel = new VerifycodeModel();
			$data['phone'] = $phone;
			$data['code'] = $msg_code;
			$data['created_at'] = date('Y-m-d H:i:s');
			$data['updated_at'] = date('Y-m-d H:i:s');
			$verifyCodeModel->add($data,$options=array(),$replace=true);
			//发送验证码
			$this->send_msg($phone,$msg_code);
			return $this->ajaxReturn(array('code'=>200,'info'=>'存在该电话对应的用户！'));

		}

    }

    public function change_password(){

    	$phone = $_REQUEST['phone'];
    	$code = $_REQUEST['code'];
    	$newpassword = md5($_REQUEST['password']);

		//验证电话与验证码
    	$verifyCodeModel = new VerifycodeModel();
    	$data = $verifyCodeModel->where('phone='.$phone.' AND code='.$code)->find();
    	if (!empty($data)) {
    		if ($data['phone']==$phone && $data['code']==$code) {

    			$update['password'] = $newpassword;

    			$studentModel = new StudentModel();
				$data = $studentModel->where('phone='.$phone)->find();
				if (!empty($data)) {
					$studentModel->where('phone='.$phone)->save($update);
					return $this->ajaxReturn(array('code'=>200,'info'=>'密码修改成功！'));
				}else{
					$teacherModel = new TeacherModel();
					$data = $teacherModel->where('phone='.$phone)->find();
					if (!empty($data)) {
						$teacherModel->where('phone='.$phone)->save($update);
						return $this->ajaxReturn(array('code'=>200,'info'=>'密码修改成功！'));
					}else{
						return $this->ajaxReturn(array('code'=>101,'info'=>'未找到对应用户！'));
					}
				}
				
    		}else{
    			return $this->ajaxReturn(array('code'=>200,'info'=>'验证码不正确！'));
    		}
    	}else{
    		return $this->ajaxReturn(array('code'=>200,'info'=>'验证码不正确！'));
    	}


    }

    public function send_msg($phone,$code) {

    	$appkey = '23727128';
    	$secret = '30048e83015055b99c9d3b1179e5e348';
	    $c = new \TopClient;
		$c ->appkey = $appkey ;
		$c ->secretKey = $secret ;
		$req = new \AlibabaAliqinFcSmsNumSendRequest;
		$req ->setExtend( "" );
		$req ->setSmsType( "normal" );
		$req ->setSmsFreeSignName( '去实习' );
		$req ->setSmsParam("{\"code\":\"$code\"}");
		$req ->setRecNum( "$phone" );
		$req ->setSmsTemplateCode( "SMS_59095144" );
		$resp = $c ->execute( $req );

	}

}