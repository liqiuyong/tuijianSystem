<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>订单</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/new_nav.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/index.css"/>
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/gonggao.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/main.css"/>

</head>

<body>
<style>

    body{
        padding: 0;
    }

    .table,.table>tbody>tr>td,.table>thead>tr>th{
        border:0px;
        /*text-align: center;*/
    }
    .table{
        table-layout：fixed;
        margin: 20px 0;
    }

    td{

        word-wrap:break-word;word-break:break-all;
    }

    th{
        text-align: center;
    }

    /*tbody tr:nth-child(odd){background:#674527;}*/


    @media only screen and (max-width: 768px) {
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
            padding: .45rem .75rem .2rem;
        }

    }

</style>

<div class="bg_dev_div">

<!--顶部导航区域-->
<!--导航栏-->

<nav class="navbar navbar-default navbar-default-reset" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand h3" href="index.html"><img src="<?php echo (ADMIN_IMG); ?>/logo.png" width="100%"/></a>
        </div>
        <div>
            <!--向左对齐-->
            <ul class="nav navbar-nav navbar-left">

                <li><a class="h3" href="index.html"><i><img src="<?php echo (ADMIN_IMG); ?>/zuanshi.png"/></i><span> 首页 </span></a></li>


                <?php if(ACTION_NAME != 'index' ): ?><li class="dropdown">


                        <a class="h3" href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span style="color: #feecbe;">
                                <?php if(ACTION_NAME == 'jifen_mall' ): ?>积分商城<?php endif; ?>
                                <?php if(ACTION_NAME == 'paimai' ): ?>拍卖行<?php endif; ?>
                                <?php if(ACTION_NAME == 'tool_mall' ): ?>道具商城<?php endif; ?>
                                <?php if(ACTION_NAME == 'geren' ): ?>个人信息<?php endif; ?>
                                 <?php if(ACTION_NAME == 'mimaxiugai' ): ?>个人信息<?php endif; ?>
                                 <?php if(ACTION_NAME == 'jiaoyimimaxiugai' ): ?>个人信息<?php endif; ?>
                                 <?php if(ACTION_NAME == 'kefulianxi' ): ?>个人信息<?php endif; ?>
                                 <?php if(ACTION_NAME == 'faq' ): ?>个人信息<?php endif; ?>

                                <?php if(ACTION_NAME == 'caiwu' ): ?>财务信息<?php endif; ?>
                                <?php if(ACTION_NAME == 'tuijian' ): ?>推荐列表<?php endif; ?>
                                <?php if(ACTION_NAME == 'tuijian_2' ): ?>推荐列表<?php endif; ?>
                                <?php if(ACTION_NAME == 'order_list' ): ?>订单详情<?php endif; ?>
                                <?php if(ACTION_NAME == 'baodan' ): ?>报单记录<?php endif; ?>
                                <?php if(ACTION_NAME == 'baodan_detail' ): ?>报单记录<?php endif; ?>
                                <?php if(ACTION_NAME == 'charge' ): ?>财务信息<?php endif; ?>
                                <?php if(ACTION_NAME == 'get_cash' ): ?>财务信息<?php endif; ?>
                                <?php if(ACTION_NAME == 'charge_status' ): ?>财务信息<?php endif; ?>

                                 <?php if(ACTION_NAME == 'tuijian_detail' ): ?>推荐信息<?php endif; ?>

                            </span>
                            <i><img src="<?php echo (ADMIN_IMG); ?>/sanjiao.png"/></i>
                            <!--<b class="caret"></b>-->
                        </a>


                        <ul class="dropdown-menu">
                            <li><a class="h4" href="caiwu.html">财务信息</a></li>
                            <li><a class="h4" href="tuijian.html">推荐列表</a></li>
                            <li><a class="h4" href="order_list.html">订单详情</a></li>
                            <li><a class="h4" href="baodan.html">报单记录</a></li>
                        </ul>
                    </li><?php endif; ?>

            </ul>

            <!--向右对齐-->
            <ul class="nav navbar-nav navbar-right">
                <li class="da"><a class="h3">ID:<?php echo ($user["phone"]); ?></a></li>
                <li class="da"><a class="h4" href="geren.html"><img src="<?php echo (ADMIN_IMG); ?>/new/set.png"/></a></li>
                <li class="da"><a class="h3"  href="" onclick="logout()">[退出]</a></li>
                <li class="dropdown xiao" style="">
                    <a class="h3" href="#" class="dropdown-toggle" data-toggle="dropdown">
                        ID:<?php echo ($user["phone"]); ?><i><img src="<?php echo (ADMIN_IMG); ?>/sanjiao.png"/></i>
                        <!--<b class="caret"></b>-->
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="h4" href="geren.html">个人中心</a></li>
                        <li><a class="h4" href="#">退出</a></li>

                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>



<!--以下是公告栏-->
<div class="gonggao">

    <div class="gonggao-asset-main" style="padding: 0 40px;">
        <marquee  onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left" class="gonggao_text">欢迎登录盛英汇管理系统</marquee>

    </div>

</div>







<!--导航 结束/-->

<!--公告栏-->
<!--<div class="gonggao">-->
    <!--<marquee  onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left" class="gonggao_text">欢迎登录盛英汇管理系统</marquee>-->

<!--</div>-->

<!--内容区域-->
<div class="container main">


    <div class="main-cont">




        <div class="asset-main">
            <div class="order-mian">
                <div class="order-hd">
                    <a href="order_list.html" class="pre"><img  src="<?php echo (ADMIN_IMG); ?>/order/pre.png"></a>
                    <img class="header" src="<?php echo (ADMIN_IMG); ?>/order/header.png">
                </div>
                <div class="order-mian-bd">
                    <div class="order-num">
                        <input type="text" id="order_num" value="<?php echo ($order["order_num"]); ?>" hidden>
                        <div class="order-num-left">订单编号：<?php echo ($order["order_num"]); ?></div>
                        <div class="order-num-right"><?php echo (date("Y-m-d H:i:s",$order["addtime"])); ?></div>
                    </div>
                    <div class="order-num">
                        <div class="order-num-left">订单状态：
                            <?php if($order['charge_status'] == 1): ?>未支付<?php endif; ?>
                            <?php if($order['charge_status'] == 2): ?>已提交待审核<?php endif; ?>
                            <?php if($order['charge_status'] == 3): ?>审核通过<?php endif; ?>
                            <?php if($order['charge_status'] == 4): ?>审核不通过<?php endif; ?>


                        </div>
                        <div class="order-num-right"></div>
                    </div>
                    <div class="order-list-box margin-top-10">
                        <?php if($order['is_charge'] == 2): ?><h3>收款方</h3>
                            <?php else: ?>
                            <h3>付款方</h3><?php endif; ?>

                        <div class="order-list">开户名：<?php echo ($order["real_name"]); ?></div>
                        <?php if($order['is_charge'] == 2): ?><div class="order-list">金额：<?php echo ($order['charge_money']*89/100); ?> 元</div>
                            <?php else: ?>

                            <div class="order-list">金额：<?php echo ($order["charge_money"]); ?> 元</div><?php endif; ?>

                        <div class="order-list">开户行：<?php echo ($order["charge_bank"]); ?></div>
                        <div class="order-list">支行：<?php echo ($order["charge_sub_bank"]); ?></div>
                        <div class="order-list">银行帐号：<?php echo ($order["charge_bankcard"]); ?></div>
                        <div class="order-list">代理等级：<?php echo ($order["level"]); ?></div>
                    </div>
                    <?php if($order['charge_status'] == 1): ?><div class="order-list-box text-center">
                        <!-- 银行卡按钮-替换图片路径 -->
                        <img id="bank-btn" src="<?php echo (ADMIN_IMG); ?>/bank_charge.png" style="width: 40%;padding: 5px">
                        <!-- 支付宝按钮-替换图片路径 -->
                        <img id="zfb-btn" src="<?php echo (ADMIN_IMG); ?>/zhifubao_charge.png" style="width: 40%;padding: 5px">

                    </div><?php endif; ?>
                    <input type="text" id="charge_type" class="btn-type" style="display: none" value="1" name="">
                    <div class="order-list-box">
                        <?php if($order['is_charge'] == 2): ?><h3>付款方</h3>
                            <?php else: ?>
                            <h3>收款方</h3><?php endif; ?>
                        <div class="bank">
                            <div class="order-list">开户名：海南盛英汇电子竞技有限公司</div>
                            <div class="order-list">开户行(支行)：中国工商银行海口和平南支行</div>
                            <div class="order-list">银行帐号：2201020409200049910</div>
                        </div>
                        <div class="text-center zfb"  hidden>
                            <img src="<?php echo (ADMIN_IMG); ?>/zfberweima.jpg" style="width: 50%;">
                        </div>
                        <?php if($order['charge_status'] == 1): ?><a id="fukuan" class="order-btn"><img src="<?php echo (ADMIN_IMG); ?>/order/btn.png"></a><?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

    </div>





</div>


</div>


<!--手机页面-->
<div class="sm_dev_div">
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
                                    <div class="card-content-inner">
                                        开户名：<?php echo ($order["real_name"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        金额：<?php echo ($order["charge_money"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        开户行:<?php echo ($order["charge_bank"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        银行账号：<?php echo ($order["charge_bankcard"]); ?>
                                    </div>
                                    <div class="card-content-inner">
                                        代理等级：<?php echo ($order["level"]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
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
                            <?php if($order['charge_status'] == 1): ?><a id="fukun_m" class="button" style="margin-top:.5rem">
                                    <img src="<?php echo (ADMIN_IMG); ?>/img/querenfukuan.png" style="width: 45%;">
                                </a><?php endif; ?>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

</div>






</body>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/jquery-3.1.0.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js" ></script>
<script type="text/javascript">




    $(function () {
        //        var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

//		if(browserWidth < 768)
        if(window.screen.width<=768){
            dynamicLoadCss("<?php echo (ADMIN_CSS); ?>/sm.min.css");
            dynamicLoadCss("<?php echo (ADMIN_CSS); ?>/sm-extend.min.css");
            dynamicLoadCss("<?php echo (ADMIN_CSS); ?>/myPagination.css");
            dynamicLoadJs("<?php echo (ADMIN_JS); ?>/myPagination.js");

            dynamicLoadJs("<?php echo (ADMIN_JS); ?>/zepto.min.js");
            dynamicLoadJs("<?php echo (ADMIN_JS); ?>/sm.min.js");
            dynamicLoadJs("<?php echo (ADMIN_JS); ?>/sm-extend.min.js");


        }


    })

    /**
     * 动态加载JS
     * @param {string} url 脚本地址
     * @param {function} callback  回调函数
     */
    function dynamicLoadJs(url, callback) {
        var head = document.getElementsByTagName('head')[0];
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = url;
        if(typeof(callback)=='function'){
            script.onload = script.onreadystatechange = function () {
                if (!this.readyState || this.readyState === "loaded" || this.readyState === "complete"){
                    callback();
                    script.onload = script.onreadystatechange = null;
                }
            };
        }
        head.appendChild(script);
    }

    /**
     * 动态加载CSS
     * @param {string} url 样式地址
     */
    function dynamicLoadCss(url) {
        var head = document.getElementsByTagName('head')[0];
        var link = document.createElement('link');
        link.type='text/css';
        link.rel = 'stylesheet';
        link.href = url;
        head.appendChild(link);
    }






    $('#bank-btn').click(function () {
        $('.bank').show();
        $('.zfb').hide();
        $('#charge_type').val(1);
    })

    $('#zfb-btn').click(function () {
        $('.zfb').show();
        $('.bank').hide();
        $('#charge_type').val(2);

    })







    $('input[type=radio][name=level_id]').change(function() {

        $("#coin").text(this.alt)

    });


    $("#fukuan").click(function () {
        var order_num = $("#order_num").val();
        var charge_type = $("#charge_type").val();
        $.post(
            'charge_status.html',
            {
                charge_type: charge_type,
                charge_status: 2,
                order_num : order_num
            },
            function (data) {
                if (data.status == 1){
                    alert(data.msg);
                    window.location.reload();
                }else {
                    alert(data.msg);
                }
            }
            ,'json'
        )
    })


    $("#fukun_m").click(function () {
        var order_num = $("#order_num").val();
        $.post(
            'charge_status.html',
            {
                charge_status: 2,
                order_num : order_num
            },
            function (data) {
                if (data.status == 1){
                    alert(data.msg);
                    window.location.reload();
                }else {
                    alert(data.msg);
                }
            }
            ,'json'
        )
    })




</script>

</html>