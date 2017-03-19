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

function getActive($navc){
    $c = strtolower(CONTROLLER_NAME);
    if(strtolower($navc) == $c){
        return 'on';
    }
    return '';
}

function getLoginUsername() {
    return isset($_SESSION['adminUser']['name'])?$_SESSION['adminUser']['name']:null;
}

function status($status) {
    if($status == 0) {
        $str = '未审核';
    }elseif($status == 1) {
        $str = '已批准';
    }elseif($status == -1) {
        $str = '未批准';
    }

    return $str;
}

function getReportStatus($status){
    switch($status){
        case 1: $state = '已批准';break;
        case 0: $state = '未审核';break;
        case -1: $state = '未批准';break;
    }
    return $state;
}

function getChangeStatus($status){
    switch($status){
        case 1: $state = '已批准';break;
        case 0: $state = '未审核';break;
        case -1: $state = '未批准';break;
    }
    return $state;
}

function getProfessionStatus($status) {
    switch($status){
        case 1: $state = '已购买';break;
        case 0: $state = '未购买';break;
    }
    return $state;
}

function getInsuranceStatus($status) {
    switch($status){
        case 1: $state = '已购买';break;
        case 0: $state = '未购买';break;
    }
    return $state;
}

function getPracticeStatus($status) {
    switch($status) {
        case 0: $status = '未实习';break;
        case 1: $status = '在实习';break;
    }
    return $status;
}

function getAuditStatus($status){
    switch($status){
        case 0:$state='未审核';break;
        case 1:$state='已批准';break;
        case -1:;$state='未批准';break;
    }
    return $state;
}

function getApplyStatus($status){
    switch($status){
        case 0:$state='未审核';break;
        case 1:$state='已批准';break;
        case -1:;$state='未批准';break;
    }
    return $state;
}

function CorporationStatus($status){
    return $status == 1?'是':'否';
}
