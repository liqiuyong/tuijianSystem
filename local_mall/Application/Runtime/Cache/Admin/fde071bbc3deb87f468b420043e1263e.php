<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>充值</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm.min.css">
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm-extend.min.css">
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/myPagination.css">
    <script src="<?php echo (ADMIN_JS); ?>/myPagination.js"></script>

</head>

<body>
<style type="text/css">
    .list-block .item-content {
        height: 1rem;
        min-height: 1rem;
    }
    .card .list-block li {
        margin: 0;
    }
    .card {
        background: rgba(46, 66, 46, 0.2);
    }
    .card-content-inner {
        padding: .30rem .75rem .2rem;

    }
</style>


    <div class="page-group">
        <div class="page">
            <!--导航栏-->
            <header class="bar bar-nav">
    <a class="icon button-link button-nav pull-left back" href="">
        <img src="<?php echo (ADMIN_IMG); ?>/img/fanhui.png">
    </a>
    <h1 class="title"></h1>
    <a class="icon pull-right open-panel" data-panel=".panel-right">
        <img src="<?php echo (ADMIN_IMG); ?>/img/right.png"/>
    </a>
    <a class="icon pull-right close-panel" style="display: none">
        <img src="<?php echo (ADMIN_IMG); ?>/img/right.png"/>
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
               
                <div class="content-block">
                    <div class="card">
                        <img src="<?php echo (ADMIN_IMG); ?>/img/dingdan2.png" style="width:100%">
                        <div style="position: absolute;width: 100%;height: 90%;top: 10%;">

                            <div class="list-block">
                                <ul>
                                    <li>
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">订单编号：</div>
                                                <?php echo ($order["order_num"]); ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-content">
                                            <div class="item-inner">
                                                <div class="item-title label">订单状态</div>
                                                <?php if($order['charge_status'] == 1): ?>未支付<?php endif; ?>
                                                <?php if($order['charge_status'] == 2): ?>已提交待审核<?php endif; ?>
                                                <?php if($order['charge_status'] == 3): ?>审核通过<?php endif; ?>
                                                <?php if($order['charge_status'] == 4): ?>审核不通过<?php endif; ?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card">
                                <div class="card-content">

                                    <?php if($order['is_charge'] == 2): ?><div>收款方</div>
                                        <?php else: ?>
                                        <div>付款方</div><?php endif; ?>
                                    <div class="card-content-inner">
                                        开户名：<?php echo ($order["real_name"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        <?php if($order['is_charge'] == 2): ?>金额：<?php echo ($order['charge_money']*89/100); ?>
                                            <?php else: ?>
                                            金额：<?php echo ($order["charge_money"]); endif; ?>



                                    </div>
                                    <div class="card-content-inner">
                                        开户行:<?php echo ($order["charge_bank"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        支行:<?php echo ($order["charge_sub_bank"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        银行账号：<?php echo ($order["charge_bankcard"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        代理等级：<?php echo ($order["level"]); ?>
                                    </div>
                                </div>
                            </div>

                            <?php if($order['charge_status'] == 1): ?><div class="row text-center">
                                <!-- 银行卡按钮-替换图片路径 -->
                                <div class="col-50 btn-yhk"><img src="<?php echo (ADMIN_IMG); ?>/bank_charge.png" style="width: 70%;"></div>
                                <!-- 支付宝按钮-替换图片路径 -->
                                <div class="col-50 btn-zfb"><img src="<?php echo (ADMIN_IMG); ?>/zhifubao_charge.png" style="width: 70%;"></div>
                            </div><?php endif; ?>
                            <input type="text" id="charge_type" class="btn-type" style="display: none" value="1" name="">
                            <!-- 银行卡 -->
                            <div class="card card-yhk">
                                <div class="card-content">
                                    <?php if($order['is_charge'] == 2): ?><div>付款方</div>
                                        <?php else: ?>
                                        <div>收款方</div><?php endif; ?>
                                    <div class="card-content-inner">
                                        开户名：海南盛英汇电子竞技有限公司
                                    </div>
                                    <div class="card-content-inner">
                                        开户行：中国工商银行海口和平南支行
                                    </div>
                                    <div class="card-content-inner">
                                        银行账号：2201020409200049910
                                    </div>
                                </div>
                            </div>
                            <!-- 支付宝 -->
                            <div class="card card-zfb" style="display: none">
                                <div class="card-content">
                                    <?php if($order['is_charge'] == 2): ?><div>付款方</div>
                                        <?php else: ?>
                                        <div>收款方</div><?php endif; ?>
                                    <!--<div class="card-content-inner">-->
                                        <!--用户名：-->
                                    <!--</div>-->
                                    <!--<div class="card-content-inner">-->
                                        <!--支付宝账号：-->
                                    <!--</div>-->
                                    <div class="card-content-inner">

                                        <img src="<?php echo (ADMIN_IMG); ?>/zfberweima.jpg" style="width: 100%;">

                                    </div>
                                </div>
                            </div>



                            <input type="text" id="order_num" value="<?php echo ($order["order_num"]); ?>" hidden>
                            <?php if($order['charge_status'] == 1): ?><a id="fukun_m" class="button" style="margin-top:.5rem">
                                    <img src="<?php echo (ADMIN_IMG); ?>/img/querenfukuan.png" style="width: 45%;">
                                </a><?php endif; ?>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>







</body>
<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/zepto.min.js' charset='utf-8'></script>
<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm-extend.min.js' charset='utf-8'></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/charge.js"></script>
<script type="text/javascript">

    $.init();

    Zepto(".btn-yhk").click(function(){
        Zepto(".card-yhk").show();
        Zepto(".card-zfb").hide();
        Zepto(".btn-type").val("1");
        // alert(Zepto(".btn-type").val());
    });
    Zepto(".btn-zfb").click(function(){
        Zepto(".card-zfb").show();
        Zepto(".card-yhk").hide();
        Zepto(".btn-type").val("2");
        // alert(Zepto(".btn-type").val());
    });

    Zepto(".open-panel").click(function(){
        Zepto(".close-panel").show();
        Zepto(".open-panel").hide();
    });
    Zepto(".close-panel").click(function(){
        Zepto(".open-panel").show();
        Zepto(".close-panel").hide();
    });

</script>
</html>