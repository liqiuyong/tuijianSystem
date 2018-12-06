<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>资产信息</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/new_nav.css"/>
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/main.css" />
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/gonggao.css" />
	<script src="<?php echo (ADMIN_JS); ?>/jquery.min.js"></script>
</head>
<style>

	@media only screen and (min-width: 769px){

		.sm_dev_div{
			display: none;
		}

	}

	@media only screen and (max-width: 768px) {
		.bg_dev_div{
			display: none;
		}
		.sm_dev_div{
			display: block;
		}



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



	}

</style>

<body>


<!--手机界面-->
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
										<a href="./charge.html" class="col-50"><img src="<?php echo (ADMIN_IMG); ?>/img/chongzhi.png" width="70%"></a>
										<a href="./get_cash.html" class="col-50"><img src="<?php echo (ADMIN_IMG); ?>/img/tixian.png" width="70%"></a>
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

</div>



<div class="bg_box bg_dev_div">
	<!--<div  class="hd_box_wrap">-->
		<!--<div class="hd_box">-->
			<!--<div class="hd-left">-->
				<!--<a class="logo-a"><img src="<?php echo (ADMIN_IMG); ?>/new/logo.png"></a>-->
				<!--<img src="<?php echo (ADMIN_IMG); ?>/new/zuan.png">-->
				<!--<a href="index.html" class="color_fff">首页-</a>-->
				<!--<span class="select-wrap1">-->
                        <!--<select class="select1" onchange="window.location=this.value">-->
                            <!--<option value="caiwu.html"  selected="selected">财务信息</option>-->
                            <!--<option value="tuijian.html" >推荐列表</option>-->
                            <!--<option value="order_list.html">订单详情</option>-->
                            <!--<option value="baodan.html">报单记录</option>-->
                        <!--</select>-->
                        <!--<div class="sanjiaoxing">-->
                            <!--<img src="<?php echo (ADMIN_IMG); ?>/new/sanjiaoxing.png">-->
                        <!--</div>-->
                        <!--</span>-->

			<!--</div>-->
			<!--<div class="hd-right">-->
				<!--<a class="color_fff">ID：<?php echo ($user["phone"]); ?></a>-->
				<!--<a href="geren.html" class="set"><img src="<?php echo (ADMIN_IMG); ?>/new/set.png"></a>-->
				<!--<a class="color_fff" onclick="logout()">[退出]</a>-->
			<!--</div>-->
		<!--</div>-->

	<!--</div>-->

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


	<!--<div class="mian-title">-->
		<!--&lt;!&ndash;<a class="color_fff">首页</a>-报单记录&ndash;&gt;-->
		<!--<marquee  onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left" class="gonggao_text">欢迎登录盛英汇管理系统</marquee>-->

	<!--</div>-->
	<!--<div class="gonggao">-->

		<!--<div class="asset-main" style="padding: 0 40px;">-->
			<!--<marquee  onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left" class="gonggao_text">欢迎登录盛英汇管理系统</marquee>-->

		<!--</div>-->

	<!--</div>-->



	<div class="asset-main">
		<div class="asset-main-hd">
			<div class="asset-main-hd-tap active">资产信息</div>
			<!--<div class="asset-main-hd-tap ">交易记录</div>-->
		</div>
		<div class="asset-main-bd">
			<div class="tab_content  hide active">
				<div class="tab_content1-top">
					<div class="tab_content1-title">财务概况</div>
					<div class="assessment">
						<div><span class="color_fff">资产评估： </span> <?php if($wallet): echo ($wallet['active_money']+$wallet['frozen_money']); else: ?>0<?php endif; ?> 人民币</div>
						<div class="btn-box">
							<a href="charge.html">充 值</a>
							<a href="get_cash.html">提 现</a>
						</div>
					</div>
					<div class="assessment">
						<div><span class="color_fff">代理级别： </span> <?php echo ($user["level"]); ?></div>

					</div>
					<div class="assessment-list-wrap">
						<div class="assessment-list">
							<div class="color_fff">我的分润</div>
							<!--<div class="color_red"><?php if($wallet): echo ($wallet['active_money']+$wallet['frozen_money']); else: ?>0<?php endif; ?></div>-->
							<div class="color_red"> 0 </div>
						</div>
						<div class="assessment-list">
							<div class="color_fff">佣金余额</div>
							<div class="color_red"><?php if($wallet): echo ($wallet["active_money"]); else: ?>0<?php endif; ?></div>
						</div>
						<div class="assessment-list">
							<div class="color_fff">奖励金</div>
							<div class="color_red"><?php if($wallet): echo ($wallet["frozen_money"]); else: ?>0<?php endif; ?></div>
						</div>
						<div class="assessment-list">
							<div class="color_fff">红积分</div>
							<div class="color_red"><?php if($wallet): echo ($wallet["red_coin"]); else: ?>0<?php endif; ?></div>
						</div>
						<div class="assessment-list">
							<div class="color_fff">白积分</div>
							<div class="color_red"><?php if($wallet): echo ($wallet["white_coin"]); else: ?>0<?php endif; ?></div>
						</div>
						<div class="assessment-list">
							<div class="color_fff">黑积分</div>
							<div class="color_red"><?php if($wallet): echo ($wallet["black_coin"]); else: ?>0<?php endif; ?></div>
						</div>
					</div>
				</div>
				<div class="tab_content1-bottom">
					<div class="tab_content2-title">
						<div>当前行情</div>
						<div>
							<span>钻石</span>
							<span>0</span>
							<span>金</span>
							<span>0</span>
							<span>银</span>
							<span>0</span>
						</div>
					</div>
					<div class="tab_content1-bottom-img-box">
						<div style="width: 8%;display: inline-block;vertical-align: middle">
							<div style="height: 55px;text-align: center;"><span style="color: #feecbe;font-size: 18px;">钻石</span></div>
							<div style="height: 55px;text-align: center"><span style="color: #feecbe;font-size: 18px">金</span></div>
							<div style="height: 55px;text-align: center"><span style="color: #feecbe;font-size: 18px">银</span></div>
						</div>
						<div style="width: 90%;display: inline-block">
							<img src="<?php echo (ADMIN_IMG); ?>/new/k.png">
						</div>

					</div>
				</div>
			</div>
			<div class="tab_content hide " >
				<table class="customers">
					<tr>
						<th>
                                <span class="select-wrap">
                                <select class="select">
                                    <option value ="volvo">时间</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 <span>
						</th>
						<th>
                              <span class="select-wrap">
                                <select class="select">
                                    <option value ="volvo">单号</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 <span>
						</th>
						<th>
                                <span class="select-wrap">
                                <select class="select">
                                    <option value ="volvo">代理等级</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 <span>
						</th>
						<th>
                                <span class="select-wrap">
                                <select class="select">
                                    <option value ="volvo">状态</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 <span>
						</th>
						<th> <span class="select-wrap">
                                <select class="select">
                                    <option value ="volvo">金额</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 <span></th>


						<th>交易类型</th>
						<th>地点</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="alt">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="alt">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="alt">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="alt">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="alt">
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<!--<div class="page-box">-->
					<!--<a class="page-list"><img src="<?php echo (ADMIN_IMG); ?>/new/page-pre1.png"></a>-->
					<!--<a class="page-list"><img src="<?php echo (ADMIN_IMG); ?>/new/page-pre2.png"></a>-->
					<!--<a class="page-list">1</a>-->
					<!--<a class="page-list">2</a>-->
					<!--<a class="page-list">3</a>-->
					<!--<a class="page-list">4</a>-->
					<!--<a class="page-list">5</a>-->
					<!--<a class="page-list">...</a>-->
					<!--<a class="page-list reverse"><img src="<?php echo (ADMIN_IMG); ?>/new/page-pre1.png"></a>-->
					<!--<a class="page-list reverse margin-right-20"><img src="<?php echo (ADMIN_IMG); ?>/new/page-pre2.png"></a>-->
					<!--<div>-->
						<!--第 <input type="text" value="1"> 页共199页-->
					<!--</div>-->

				<!--</div>-->
			</div>




		</div>
	</div>

</div>






</body>

<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/jquery-3.1.0.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js" ></script>
<script>

	$(function () {
//
//        if(location.href.indexOf("#reloaded")==-1){
//            location.href=location.href+"#reloaded";
//            location.reload();
//        }
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
            refresh();


        }
    })


    function refresh(){
        url = location.href; //把当前页面的地址赋给变量 url
        //分切变量 url 分隔符号为 "#"
        if( url.indexOf("#") == -1){ //如果url后没有#
            url += "#"; //加入 #
            self.location.replace(url); //刷新页面
        }
    }


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




    $('.asset-main-hd-tap').on('click',function(){
        $('.asset-main-hd-tap').removeClass("active")
        $(this).addClass("active")
        const active_index=$(this).index()
        $(".tab_content").removeClass("active")
        $(".asset-main-bd").find(".tab_content").eq(active_index).addClass("active")
    })
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