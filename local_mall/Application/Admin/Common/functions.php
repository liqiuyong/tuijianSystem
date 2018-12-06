<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/24
 * Time: 14:17
 */


/**
 * 验证手机格式
 * @author linjunbin
 */
function check_phone($phone) {
    $pattern = "/1[345789]{1}\d{9}$/";
    return preg_match($pattern, $phone);
}




/**
 * 用于获取身份证号码的生日来确认是否已成年
 * @param $IDCard
 * @return mixed
 */

function getIDCardInfo($IDCard){
    $result['error']=0;//0：未知错误，1：身份证格式错误，2：无错误
    $result['flag']='';//1标示成年，0标示未成年
    $result['tdate']='';//生日，格式如：2012-11-15
    if(!preg_match("/^[1-9]([0-9a-zA-Z]{17}|[0-9a-zA-Z]{14})$/",$IDCard)){
        $result['error']=1;
        return $result;
    }else{
        if(strlen($IDCard)==18){
            $tyear=intval(substr($IDCard,6,4));
            $tmonth=intval(substr($IDCard,10,2));
            $tday=intval(substr($IDCard,12,2));
            if($tyear>date("Y")||$tyear<(date("Y")-100)){
                $flag=1;
            }elseif($tmonth<0||$tmonth>12){
                $flag=1;
            }elseif($tday<0||$tday>31){
                $flag=1;
            }else{
                $tdate=$tyear."-".$tmonth."-".$tday." 00:00:00";
                if((time()-mktime(0,0,0,$tmonth,$tday,$tyear))>18*365*24*60*60){
                    $flag=1;
                }else{
                    $flag=0;
                }
            }
        }elseif(strlen($IDCard)==15){
            $tyear=intval("19".substr($IDCard,6,2));
            $tmonth=intval(substr($IDCard,8,2));
            $tday=intval(substr($IDCard,10,2));
            if($tyear>date("Y")||$tyear<(date("Y")-100)){
                $flag=1;
            }elseif($tmonth<0||$tmonth>12){
                $flag=1;
            }elseif($tday<0||$tday>31){
                $flag=1;
            }else{
                $tdate=$tyear."-".$tmonth."-".$tday." 00:00:00";
                if((time()-mktime(0,0,0,$tmonth,$tday,$tyear))>18*365*24*60*60){
                    $flag=1;
                }else{
                    $flag=0;
                }
            }
        }
    }
    $result['error']=2;//0：未知错误，1：身份证格式错误，2：无错误
    $result['isAdult']=$flag;//1标示成年，0标示未成年
    $result['birthday']=$tdate;//生日日期
    return $result;
}


















