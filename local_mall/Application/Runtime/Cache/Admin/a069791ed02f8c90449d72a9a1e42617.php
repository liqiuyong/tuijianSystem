<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>资产信息</title>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm.min.css">
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm-extend.min.css">
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/myPagination.css">
	<script src="<?php echo (ADMIN_JS); ?>/myPagination.js"></script>
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
		background-image: url(img/cha.png);
		background-position: 98% 9px;
	}

</style>

<body>


<!--手机界面-->

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
					<div class="buttons-row">
						<a href="#tab1" class="tab-link active button">
							<img src="<?php echo (ADMIN_IMG); ?>/img/zichanxinxi.png" class="c_img">
							<img src="<?php echo (ADMIN_IMG); ?>/img/zichanxinxi2.png">
						</a>
						<!--<a href="#tab2" class="tab-link button">-->
						<!--<img src="<?php echo (ADMIN_IMG); ?>/img/jiaoyijilu.png">-->
						<!--<img src="<?php echo (ADMIN_IMG); ?>/img/jiaoyijilu2.png" class="c_img">-->
						<!--</a>-->
					</div>
				</div>
				<div class="tabs">
					<div id="tab1" class="tab active">
						<div class="card">
							<div class="card-header">财务概况</div>
							<div class="card-content">
								<div class="card-content-inner">
									<span>资产评估：</span>
									<span class="red">&nbsp;&nbsp;&nbsp;&nbsp;<?php if($wallet): echo ($wallet['active_money']+$wallet['frozen_money']); else: ?>0<?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;人民币</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<span><?php echo ($user["level"]); ?></span>
								</div>
								<div class="card-content-inner text-center">
									<div class="row">
										<a href="./charge_m.html" class="col-50"><img src="<?php echo (ADMIN_IMG); ?>/img/chongzhi.png" width="70%"></a>
										<a href="./get_cash_m.html" class="col-50"><img src="<?php echo (ADMIN_IMG); ?>/img/tixian.png" width="70%"></a>
									</div>
								</div>
								<div class="card-content-inner text-center">
									<div class="row">
										<div class="col-33">
											我的分润<div class="red">0</div>
										</div>
										<div class="col-33">
											佣金余额<div class="red"><?php if($wallet): echo ($wallet["active_money"]); else: ?>0<?php endif; ?></div>
										</div>
										<div class="col-33">
											鼓励金<div class="red"><?php if($wallet): echo ($wallet["frozen_money"]); else: ?>0<?php endif; ?></div>
										</div>
									</div>
								</div>
								<div class="card-content-inner text-center">
									<div class="row">
										<div class="col-33">
											红积分<div class="red"><?php if($wallet): echo ($wallet["red_coin"]); else: ?>0<?php endif; ?></div>
										</div>
										<div class="col-33">
											白积分<div class="red"><?php if($wallet): echo ($wallet["white_coin"]); else: ?>0<?php endif; ?></div>
										</div>
										<div class="col-33">
											黑积分<div class="red"><?php if($wallet): echo ($wallet["black_coin"]); else: ?>0<?php endif; ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">当前行情
								<span style="font-size:.6rem;">钻石&nbsp;0</span>
								<span style="font-size:.6rem;">金&nbsp;0</span>
								<span style="font-size:.6rem;">银&nbsp;0</span>
							</div>
							<div class="card-content">
								<dic class="card-content-inner">
									<div class="row">
										<div class="col-15" style="font-size:.6rem;text-align:right">
											<div style="line-height:40px">钻石</div>
											<div style="line-height:40px">金</div>
											<div style="line-height:40px">银</div>
										</div>
										<div class="col-80" style="height:120px">
											<img src="<?php echo (ADMIN_IMG); ?>/img/k xiantu.png" width="95%">
										</div>
									</div>
							</div>
						</div>
					</div>
					<div id="tab2" class="tab">
						<div class="content-block" style="margin-top:2rem;">
							<table border="0">
								<tr class="thead">
									<th>时间<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>单号<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>代理等级<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>状态<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>金额<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>交易类型</th>
									<th>地点</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
								<tr>
									<th>2011-20-22</th>
									<th>4243552424</th>
									<th>省级</th>
									<th>有效</th>
									<th>500</th>
									<th>红积分</th>
									<th>积分商城</th>
								</tr>
							</table>
						</div>
						<div id="pagination" class="pagination"></div>
					</div>
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
<script type="text/javascript">

    $.init();

    Zepto(".open-panel").click(function(){
        Zepto(".close-panel").show();
        Zepto(".open-panel").hide();
    });
    Zepto(".close-panel").click(function(){
        Zepto(".open-panel").show();
        Zepto(".close-panel").hide();
    });

</script>
<script>
    window.onload = function () {
        new myPagination({
            id: 'pagination',
            curPage:1, //初始页码
            pageTotal: 50, //总页数
            pageAmount: 10,  //每页多少条
            dataTotal: 500, //总共多少条数据
            pageSize: 5, //可选,分页个数
            showPageTotalFlag:true, //是否显示数据统计
            showSkipInputFlag:true, //是否支持跳转
            getPage: function (page) {
                //获取当前页数
                console.log(page);
            }
        })

    }
</script>


</html>