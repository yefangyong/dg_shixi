<?php

/**
 * 设置实习报告评审结果
 * @param $status 评审结果状态
 * @return string
 */

 function setReportStatus($status){
     switch($status){
         case 1: $state = '已审核';break;
         case 0: $state = '未审核';break;
         case -1: $state ='已退回';break;
     }
     return $state;
 }




function setAuditStatus($status){
    switch($status){
        case 0:$state='未审核';break;
        case 1:$state='已审阅';break;
        case -1:;$state='已退回';break;
    }
    return $state;
}

/**
 * 设置公司状态
 * @param $status
 * @return string
 */

function setCorporationStatus($status){
    return $status == 1?'是':'否';
}

function setGrade($grade){
    switch($grade){
        case 1:$res = '一年级';break;
        case 2:$res = '二年级';break;
        case 3:$res = '三年级';break;
        case 4:$res = '四年级';break;
    }
    return $res;
}

/**
 * 是否对口
 * @param $major
 */

function isMajor($major){
    return $major == 1 ? '对口' :'不对口';
}

function isPayInsurance($insurance){
    return $insurance == 1 ? '是' : '否';
}


function setPracticeMode($mode){
     return $mode == 1 ? '自己寻找' : '学校安排';
}

