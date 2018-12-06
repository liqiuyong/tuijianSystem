<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>首页</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm.min.css">
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm-extend.min.css">
</head>


<style>
    .list-block .item-content {
        min-height: 1.6rem;
    }
    .list-block .item-inner {
        padding-top: 0rem;
        padding-bottom: 0rem;
        min-height: 1.6rem;
    }
    .modal{
        width: 90%;
        left: 5%;
        margin-left: 0;
        border: 2px solid #ffd870;
        border-radius: 0;
        background: #442e19;
        min-height: 50vh;
    }
    .modal-inner{
        background: #442e19;
        border-radius: 0;
    }
    .modal-buttons{
        position: absolute;
        height: 35px;
        width: 101.2%;
        top: -35px;
        left: -.6%;
    }
    .modal-buttons span{
        background:  #ffd870;
        background-repeat: no-repeat;
        background-image: url(<?php echo (ADMIN_IMG); ?>/img/cha.png);
        background-position: 98% 9px;
    }
</style>
<body>


    <div class="page-group">
        <div class="page">
            <header class="bar bar-nav">
                <h1 class="title"></h1>
                <a class="icon pull-right open-panel" data-panel=".panel-right">
                    <img src="<?php echo (ADMIN_IMG); ?>/img/right.png" width="21px" />
                </a>
                <a class="icon pull-right close-panel" style="display: none">
                    <img src="<?php echo (ADMIN_IMG); ?>/img/right.png" width="21px" />
                </a>
            </header>
            <nav class="bar bar-tab">
                <a class="tab-item" href="index_m.html" external>
                    <span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/sy.png" width="26px" /></span>
                    <span class="tab-label">首页</span>
                </a>
                <a class="tab-item" href="caiwu_m.html" external>
                    <span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/cw.png" width="26px"/></span>
                    <span class="tab-label">财务</span>
                </a>
                <a class="tab-item" href="tuijian_m.html" external>
                    <span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/tj.png" width="25px"/></span>
                    <span class="tab-label">推荐</span>
                </a>
                <a class="tab-item" href="order_list_m.html" external>
                    <span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/dd.png" width="22px"/></span>
                    <span class="tab-label">订单</span>
                </a>
                <a class="tab-item" href="baodan_m.html" external>
                    <span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/bd.png" width="24px"/></span>
                    <span class="tab-label">报单</span>
                </a>
            </nav>
            <!-- 右侧栏 -->
            <div class="panel-overlay"></div>
            <div class="panel panel-right panel-cover">
                <div class="content-block" style="padding: 0;margin: 0">
                    <div class="list-block" style="margin:0">
                        <ul style="border-bottom: 2px solid #a79e9e;padding: 10px 0">
                            <li class="item-content">
                                <div class="item-inner" style="padding-right: .75rem;font-weight: bold;font-size: .8rem">
                                    <div class="item-title">ID:<?php echo ($user["phone"]); ?></div>
                                    <div class="item-after"><img src="<?php echo (ADMIN_IMG); ?>/img/saomiao.png" style="height: 1.4rem"></div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner" style="padding-right: .75rem">
                                    <div class="item-title"><?php echo ((isset($user["real_name"]) && ($user["real_name"] !== ""))?($user["real_name"]):'未认证'); ?></div>
                                    <div class="item-after"><?php echo ((isset($user["level"]) && ($user["level"] !== ""))?($user["level"]):'无代理'); ?></div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">手机号&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($user["phone"]); ?></div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">身份证号&nbsp;&nbsp;<?php echo ((isset($user["real_card"]) && ($user["real_card"] !== ""))?($user["real_card"]):'未认证'); ?></div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">交易折扣&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red">无</span></div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">地区&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ((isset($user["province"]) && ($user["province"] !== ""))?($user["province"]):'未设置'); ?></div>
                                </div>
                            </li>
                        </ul>
                        <ul style="padding: 10px 0">
                            <a href="geren_m.html" external class="item-content">
                                <div class="item-media"><i class="icon icon-f icon-f1"></i></div>
                                <div class="item-inner">
                                    <div class="item-title">身份认证</div>
                                </div>
                            </a>
                            <a href="mimaxiugai_m.html" external class="item-content">
                                <div class="item-media"><i class="icon icon-f icon-f2"></i></div>
                                <div class="item-inner">
                                    <div class="item-title">登录密码修改</div>
                                </div>
                            </a>
                            <a href="jiaoyimimaxiugai_m.html" external class="item-content">
                                <div class="item-media"><i class="icon icon-f icon-f3"></i></div>
                                <div class="item-inner">
                                    <div class="item-title">交易密码修改</div>
                                </div>
                            </a>
                            <a href="kefulianxi_m.html" external class="item-content">
                                <div class="item-media"><i class="icon icon-f icon-f4"></i></div>
                                <div class="item-inner">
                                    <div class="item-title">联系客服</div>
                                </div>
                            </a>
                            <a href="faq_m.html" external class="item-content">
                                <div class="item-media"><i class="icon icon-f icon-f5"></i></div>
                                <div class="item-inner">
                                    <div class="item-title">F A Q</div>
                                </div>
                            </a>
                            <a href="#" class="item-content" onclick="logout()">
                                <div class="item-media"><i class="icon icon-f icon-f6"></i></div>
                                <div class="item-inner">
                                    <div class="item-title">退出</div>
                                </div>
                            </a>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="content">

                <marquee style="position: fixed;max-width:640px;height: 1.6rem;width:100%;line-height: 1.6rem;text-align: center;font-size: 0.6rem;color:#fff;background: #39455a">欢迎登录盛英汇管理系统</marquee>
               

               <div style="margin:0;border: 2px solid #ffd870;margin-top:4rem;font-size:0;border-bottom: 0;background: #442e19;padding:5px;overflow: hidden;">
                    <!--<img src="<?php echo (ADMIN_IMG); ?>/img/logo.png" width="100%" style="margin"/>-->
                    <div class="swiper-container"  data-autoplay="5000" data-loop=true data-space-between='10'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="<?php echo (ADMIN_IMG); ?>/img/lunbotu 1.png" alt="" style='width: 100%'></div>
                            <div class="swiper-slide"><img src="<?php echo (ADMIN_IMG); ?>/img/lunbotu 2.png" alt="" style='width: 100%'></div>
                            <div class="swiper-slide"><img src="<?php echo (ADMIN_IMG); ?>/img/lunbotu 3.png" alt="" style='width: 100%'></div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>



                <div id="demo" class="list-block open-tabs-modal" style="margin:0;border: 2px solid #ffd870;">
                    <ul  class="mingdan" id="holder"  style="background: #442e19;color:#fff;height: 3.2rem">
                        <marquee direction="up"  behavior="scroll" SCROLLDELAY=200 style="height: 3.2rem">
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">【公告】  游戏账号与个人手机绑定说明公告</div>
                                    <div class="item-after" style="color:#fff">11/14</div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">【公告】   游戏版本更新安排</div>
                                    <div class="item-after" style="color:#fff">11/14</div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">【公告】   拍卖行交易需小心！</div>
                                    <div class="item-after" style="color:#fff">11/14</div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">【公告】  官方在线客服优化升级公告</div>
                                    <div class="item-after" style="color:#fff">11/14</div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-inner">
                                    <div class="item-title">【公告】  官方提醒：第三方防骗请谨记</div>
                                    <div class="item-after" style="color:#fff">11/14</div>
                                </div>
                            </li>
                        </marquee>
                    </ul>
                </div>
                <div class="row text-center" style="padding:20px 10px 0">
                    <a href="javascript:alert('暂未开放!')" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/youxi.png" width="50vw"/></a>
                    <a href="javascript:alert('暂未开放!')" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/jifen.png" width="50vw"/></a>
                    <a href="javascript:alert('暂未开放!')" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/paimai.png" width="50vw"/></a>
                    <a href="javascript:alert('暂未开放!')" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/daoju.png" width="50vw"/></a>
                </div>
                <div class="row text-center" style="padding:20px 10px 0">
                    <a href="caiwu_m.html" external class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/caiwu.png" width="50vw"/></a>
                    <a href="tuijian_m.html" external class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/tuijian.png" width="50vw"/></a>
                    <a href="order_list_m.html" external class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/dingdan.png" width="50vw"/></a>
                    <a href="baodan_m.html" external class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/baodan.png" width="50vw"/></a>
                </div>

            </div>

        </div>
    </div>


</body>
<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/zepto.min.js' charset='utf-8'></script>
<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm-extend.min.js' charset='utf-8'></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/charge.js" ></script>
<script>


    	$.init();

    Zepto(".open-panel").click(function(){
        Zepto(".close-panel").show();
        Zepto(".open-panel").hide();
    });
    Zepto(".close-panel").click(function(){
        Zepto(".open-panel").show();
        Zepto(".close-panel").hide();
    });

    $(document).on('click','.open-tabs-modal', function () {

        $.modal({

            text: '<div class="tabs">'+
            '<div class="gg_t">'+
            '<div class="list-block open-tabs-modal" style="margin:0">'+
            '<ul style="background: #442e19;color:#fff">'+
            '<li class="item-content">'+
            '<div class="item-inner">'+
            '<div class="item-title">【公告】  游戏账号与个人手机绑定说明公告</div>'+
            '<div class="item-after"style="color:#fff">11/14</div>'+
            '</div>'+
            '</li>'+
            '<li class="item-content">'+
            '<div class="item-inner">'+
            '<div class="item-title">【公告】   游戏版本更新安排</div>'+
            '<div class="item-after"style="color:#fff">11/14</div>'+
            '</div>'+
            '</li>'+
            '<li class="item-content">'+
            '<div class="item-inner">'+
            '<div class="item-title">【公告】   拍卖行交易需小心！</div>'+
            '<div class="item-after"style="color:#fff">11/14</div>'+
            '</div>'+
            '</li>'+
            '<li class="item-content">'+
            '<div class="item-inner">'+
            '<div class="item-title">【公告】  官方在线客服优化升级公告</div>'+
            '<div class="item-after"style="color:#fff">11/14</div>'+
            '</div>'+
            '</li>'+
            '<li class="item-content">'+
            '<div class="item-inner">'+
            '<div class="item-title">【公告】  官方提醒：第三方防骗请谨记</div>'+
            '<div class="item-after"style="color:#fff">11/14</div>'+
            '</div>'+
            '</li>'+
            '</ul>'+
            '</div>'+
            '</div>'+
            '</div>',
            buttons: [
                {
                    text: '',
                    bold: true
                },
            ]
        })
    });

</script>
</html>