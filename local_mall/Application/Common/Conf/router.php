<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/19
 * Time: 18:39
 */

////配置路由
return array(
    'URL_ROUTE_RULES' => array(

        'router'                  => 'admin/index/router', //首页


        'index'                   => 'admin/index/index', //首页

        'caiwu'                   => 'admin/index/caiwu', //财务页面
        'tuijian'                 => 'admin/index/tuijian', //推荐页面
        'tuijian_2'                 => 'admin/index/tuijian_2', //推荐页面
        'tuijian_detail'                 => 'admin/index/tuijian_detail', //推荐详情

        'geren'                   => 'admin/index/geren', //个人信息页面

        'mimaxiugai'              => 'admin/index/mimaxiugai', //个人页面
        'jiaoyimimaxiugai'        => 'admin/index/jiaoyimimaxiugai', //财务页面
        'kefulianxi'              => 'admin/index/kefulianxi', //财务页面
        'faq'                     => 'admin/index/faq', //财务页面
        'charge'                     => 'admin/index/charge', //用户充值界面
        'charge_status'                     => 'admin/index/charge_status', //用户订单状态
        'get_cash'                     => 'admin/index/get_cash', //用户提现界面
        'order_list'                     => 'admin/index/order_list', //订单列表界面
        'jifen_mall'                     => 'admin/index/jifen_mall', //积分商城界面
        'tool_mall'                     => 'admin/index/tool_mall', //道具商城界面
        'paimai'                     => 'admin/index/paimai', //拍卖行
        'baodan'                     => 'admin/index/baodan', //报单界面
        'baodan_detail'                     => 'admin/index/baodan_detail', //报单界面


        'register'                     => 'admin/user/register', //用户注册
        'login'                     => 'admin/user/login', //用户登录
        'logout'                     => 'admin/user/logout', //用户注销



        'get_phoneCode'          => 'admin/index/get_phoneCode', //获取手机验证码
        'upload_img'          => 'admin/index/upload_img', //图片上传
        'get_inviteCode'        => 'admin/index/get_inviteCode', //获取推荐码
        'qrcode'        => 'admin/index/qrcode', //获取二维码
        'get_qrcode'        => 'admin/index/get_qrcode', //获取二维码


        //手机端页面

        'index_m'                   => 'admin/phone/index', //首页
        'caiwu_m'                   => 'admin/phone/caiwu', //财务页面
        'tuijian_m'                 => 'admin/phone/tuijian', //推荐页面
        'tuijian_2_m'                 => 'admin/phone/tuijian_2', //推荐页面
        'tuijian_detail_m'                 => 'admin/phone/tuijian_detail', //推荐详情

        'geren_m'                   => 'admin/phone/geren', //个人信息页面

        'mimaxiugai_m'              => 'admin/phone/mimaxiugai', //个人页面
        'jiaoyimimaxiugai_m'        => 'admin/phone/jiaoyimimaxiugai', //财务页面
        'kefulianxi_m'              => 'admin/phone/kefulianxi', //财务页面
        'faq_m'                     => 'admin/phone/faq', //财务页面
        'charge_m'                     => 'admin/phone/charge', //用户充值界面
        'charge_status_m'                     => 'admin/phone/charge_status', //用户订单状态
        'get_cash_m'                     => 'admin/phone/get_cash', //用户提现界面
        'order_list_m'                     => 'admin/phone/order_list', //订单列表界面
        'jifen_mall_m'                     => 'admin/phone/jifen_mall', //积分商城界面
        'tool_mall_m'                     => 'admin/phone/tool_mall', //道具商城界面
        'paimai_m'                     => 'admin/phone/paimai', //拍卖行
        'baodan_m'                     => 'admin/phone/baodan', //报单界面
        'baodan_detail_m'                     => 'admin/phone/baodan_detail', //报单界面


    ),
);