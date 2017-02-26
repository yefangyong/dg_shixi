<?php
/**
* 公用的方法
*/

function show($status,$message,$data=array()) {
    $result = array(
        'status'=>$status,
        'message'=>$message,
        'data'=>$data,
    );
    exit(json_encode($result));
}

function getLoginUsername() {
    return isset($_SESSION['adminUser']['username'])?$_SESSION['adminUser']['username']:null;
}

function status($status) {
    if($status == 0) {
        $str = '待审核';
    }elseif($status == 1) {
        $str = '已审核';
    }elseif($status == -1) {

        $str = '已退回';
    }

    return $str;
}

function getReportStatus($status){
    switch($status){
        case 1: $state = '已审核';break;
        case 0: $state = '待审核';break;
        case -1: $state = '已退回';break;
    }
    return $state;
}

function getChangeStatus($status){
    switch($status){
        case 1: $state = '已审核';break;
        case -1: $state = '未审核';break;
    }
    return $state;
}

function getAuditStatus($status){
    switch($status){
        case 0:$state='未审核';break;
        case 1:$state='已审阅';break;
        case -1:;$state='已退回';break;
    }
    return $state;
}

function CorporationStatus($status){
    return $status == 1?'是':'否';
}
