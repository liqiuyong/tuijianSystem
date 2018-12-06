<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>首页</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/new_nav.css?id=123"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/index.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/gonggao.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/main.css"/>

	<!--<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm.min.css">-->
	<!--<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm-extend.min.css">-->
</head>
<style>
	body{
		max-width: 100%;
	}

	.carousel-indicators li{
		border:1px solid red;
	}

	.carousel-indicators .active{
		background: red;
	}


	.glyphicon-chevron-left:before {

		color: #ffd870;
	}
	.glyphicon-chevron-right:before {
		color: #ffd870;
	}

	.new_gonggao ul{
		list-style: none;
		padding: 0;
	}
	.new_gonggao li{
		width: 100%;
	}
	.new_gonggao span{
		display: inline-block;
		height: 30px;
		line-height: 30px;
	}
	.left-span{
		float: left;
	}
	.gonggao-title{
		padding: 0 5px;
	}
	.right-span{
		float: right;
	}

	.biankuang{
		border-right: 2px solid #ffd870;
	}

	.tubiao{
		text-align: center;
		width: 100%;
		margin-top: 25px;
	}
	.tubiao ul{
		padding: 0;
	}
	.tubiao ul li{
		list-style: none;
		display: inline-block;
		text-align: center;
		box-sizing:border-box;
		-moz-box-sizing:border-box; /* Firefox */
		-webkit-box-sizing:border-box; /* Safari */
		width:25%;
		float: left;
		padding: 0 5%;
	}


	.index-right{
		background: #442e19;
	}



	.index-nav {
		width: 815px;
		justify-content: space-between;
	}

	@media only screen and (max-width: 1200px)   {
		.index-nav{
			margin: atuo 0;
		}
	}

	
	
	
	

</style>

<body style="">
<style>

	/*手机适配界面的css*/
	@media only screen and (max-width: 768px) {
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
		li{ list-style-type: none; }
	}
</style>
	<div class="bg_box bg_dev_div">



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

			<!--<div class="asset-main" style="padding: 0 40px;">-->
				<!--<marquee  onmouseover=this.stop() onmouseout=this.start() behavior="scroll" direction="left" class="gonggao_text">欢迎登录盛英汇管理系统</marquee>-->

			<!--</div>-->

		<!--</div>-->
		<!--内容区域-->
		<div class="asset-main">
			<div class="index-mian">
				<div class="index-img-box">
					<div id="myCarousel" class="carousel slide" style="">
						<!-- 轮播（Carousel）指标 -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>
						<!-- 轮播（Carousel）项目 -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="<?php echo (ADMIN_IMG); ?>/lunbo1.png" width="100%" alt="First slide">
							</div>
							<div class="item">
								<img src="<?php echo (ADMIN_IMG); ?>/lunbo2.jpg" width="100%" alt="Second slide">
							</div>
							<div class="item">
								<img src="<?php echo (ADMIN_IMG); ?>/lunbo3.jpg" width="100%" alt="Third slide">
							</div>
						</div>
						<!-- 轮播（Carousel）导航 -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>

				<div class="index-right">
					<img src="<?php echo (ADMIN_IMG); ?>/gonggao_head.png">
					<ul class="news-box-wrap">
						<li>
							<a>
								<div class="news-box">
									<div class="news-box-left"> 【公告】</div>
									<div class="news-box-right">
										<div class="news-box-con"> 游戏账号与个人手机绑定说明公告</div>
										<div class="news-box-time">
											<div></div>
											<div>11/14</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a>
								<div class="news-box">
									<div class="news-box-left"> 【公告】</div>
									<div class="news-box-right">
										<div class="news-box-con"> 游戏版本更新安排</div>
										<div class="news-box-time">
											<div></div>
											<div>11/14</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a>
								<div class="news-box">
									<div class="news-box-left"> 【公告】</div>
									<div class="news-box-right">
										<div class="news-box-con"> 拍卖行交易需小心！</div>
										<div class="news-box-time">
											<div></div>
											<div>11/14</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a>
								<div class="news-box">
									<div class="news-box-left"> 【公告】</div>
									<div class="news-box-right">
										<div class="news-box-con">官方在线客服优化升级公告</div>
										<div class="news-box-time">
											<div></div>
											<div>11/14</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a>
								<div class="news-box">
									<div class="news-box-left"> 【公告】</div>
									<div class="news-box-right">
										<div class="news-box-con"> 官方提醒：第三方防骗请谨记</div>
										<div class="news-box-time">
											<div></div>
											<div>11/14</div>
										</div>
									</div>
								</div>
							</a>
						</li>
						<!--<li>-->
							<!--<a>-->
								<!--<div class="news-box">-->
									<!--<div class="news-box-left"> 【公告】</div>-->
									<!--<div class="news-box-right">-->
										<!--<div class="news-box-con"> 11月15日 早9点不停机停机更新</div>-->
										<!--<div class="news-box-time">-->
											<!--<div>公告</div>-->
											<!--<div>11/14</div>-->
										<!--</div>-->
									<!--</div>-->
								<!--</div>-->
							<!--</a>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a>-->
								<!--<div class="news-box">-->
									<!--<div class="news-box-left"> 【公告】</div>-->
									<!--<div class="news-box-right">-->
										<!--<div class="news-box-con"> 11月15日 早9点不停机停机更新</div>-->
										<!--<div class="news-box-time">-->
											<!--<div>公告</div>-->
											<!--<div>11/14</div>-->
										<!--</div>-->
									<!--</div>-->
								<!--</div>-->
							<!--</a>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a>-->
								<!--<div class="news-box">-->
									<!--<div class="news-box-left"> 【公告】</div>-->
									<!--<div class="news-box-right">-->
										<!--<div class="news-box-con"> 11月15日 早9点不停机停机更新</div>-->
										<!--<div class="news-box-time">-->
											<!--<div>公告</div>-->
											<!--<div>11/14</div>-->
										<!--</div>-->
									<!--</div>-->
								<!--</div>-->
							<!--</a>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a>-->
								<!--<div class="news-box">-->
									<!--<div class="news-box-left"> 【公告】</div>-->
									<!--<div class="news-box-right">-->
										<!--<div class="news-box-con"> 11月15日 早9点不停机停机更新</div>-->
										<!--<div class="news-box-time">-->
											<!--<div>公告</div>-->
											<!--<div>11/14</div>-->
										<!--</div>-->
									<!--</div>-->
								<!--</div>-->
							<!--</a>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a>-->
								<!--<div class="news-box">-->
									<!--<div class="news-box-left"> 【公告】</div>-->
									<!--<div class="news-box-right">-->
										<!--<div class="news-box-con"> 11月15日 早9点不停机停机更新</div>-->
										<!--<div class="news-box-time">-->
											<!--<div>公告</div>-->
											<!--<div>11/14</div>-->
										<!--</div>-->
									<!--</div>-->
								<!--</div>-->
							<!--</a>-->
						<!--</li>-->
					</ul>
				</div>
			</div>
			<div class="index-nav">
				<a href="javascript:alert('暂未开放!')" ><img src="<?php echo (ADMIN_IMG); ?>/youxi.png"></a>
				<a href="jifen_mall.html"><img src="<?php echo (ADMIN_IMG); ?>/jifen.png"></a>
				<a href="paimai.html"><img src="<?php echo (ADMIN_IMG); ?>/paimai.png"></a>
				<a href="tool_mall.html"><img src="<?php echo (ADMIN_IMG); ?>/daoju.png"></a>

			</div>
			<div class="index-nav">

				<a href="caiwu.html"><img src="<?php echo (ADMIN_IMG); ?>/caiwu.png"></a>
				<a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/tuijian.png"></a>
				<a href="order_list.html"><img src="<?php echo (ADMIN_IMG); ?>/dingdan.png"></a>
				<a href="baodan.html"><img src="<?php echo (ADMIN_IMG); ?>/baodan.png"></a>
			</div>
		</div>
	</div>


	<div class="sm_dev_div">
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
					<a class="tab-item" href="index.html">
						<span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/sy.png" width="26px" /></span>
						<span class="tab-label">首页</span>
					</a>
					<a class="tab-item" href="caiwu.html">
						<span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/cw.png" width="26px"/></span>
						<span class="tab-label">财务</span>
					</a>
					<a class="tab-item" href="tuijian.html">
						<span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/tj.png" width="25px"/></span>
						<span class="tab-label">推荐</span>
					</a>
					<a class="tab-item" href="order_list.html">
						<span class="icon"><img src="<?php echo (ADMIN_IMG); ?>/img/dd.png" width="22px"/></span>
						<span class="tab-label">订单</span>
					</a>
					<a class="tab-item" href="baodan.html">
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
								<a href="geren.html" class="item-content">
									<div class="item-media"><i class="icon icon-f icon-f1"></i></div>
									<div class="item-inner">
										<div class="item-title">身份认证</div>
									</div>
								</a>
								<a href="mimaxiugai.html" class="item-content">
									<div class="item-media"><i class="icon icon-f icon-f2"></i></div>
									<div class="item-inner">
										<div class="item-title">登录密码修改</div>
									</div>
								</a>
								<a href="jiaoyimimaxiugai.html" class="item-content">
									<div class="item-media"><i class="icon icon-f icon-f3"></i></div>
									<div class="item-inner">
										<div class="item-title">交易密码修改</div>
									</div>
								</a>
								<a href="kefulianxi.html" class="item-content">
									<div class="item-media"><i class="icon icon-f icon-f4"></i></div>
									<div class="item-inner">
										<div class="item-title">联系客服</div>
									</div>
								</a>
								<a href="faq.html" class="item-content">
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
						<!--<div class="swiper-container"  data-autoplay="5000" data-loop=true data-space-between='10'>-->
							<!--<div class="swiper-wrapper">-->
								<!--<div class="swiper-slide"><img src="<?php echo (ADMIN_IMG); ?>/img/lunbotu 1.png" alt="" style='width: 100%'></div>-->
								<!--<div class="swiper-slide"><img src="<?php echo (ADMIN_IMG); ?>/img/lunbotu 2.png" alt="" style='width: 100%'></div>-->
								<!--<div class="swiper-slide"><img src="<?php echo (ADMIN_IMG); ?>/img/lunbotu 3.png" alt="" style='width: 100%'></div>-->
							<!--</div>-->

							<!--<div class="swiper-pagination"></div>-->
						<!--</div>-->

						<div id="myCarousel2" class="carousel slide" style="">
							<!-- 轮播（Carousel）指标 -->
							<ol class="carousel-indicators" style="z-index: 2">
								<li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel2" data-slide-to="1"></li>
								<li data-target="#myCarousel2" data-slide-to="2"></li>
							</ol>
							<!-- 轮播（Carousel）项目 -->
							<div class="carousel-inner">
								<div class="item active">
									<img src="<?php echo (ADMIN_IMG); ?>/lunbo1.png" width="100%" alt="First slide">
								</div>
								<div class="item">
									<img src="<?php echo (ADMIN_IMG); ?>/lunbo2.jpg" width="100%" alt="Second slide">
								</div>
								<div class="item">
									<img src="<?php echo (ADMIN_IMG); ?>/lunbo3.jpg" width="100%" alt="Third slide">
								</div>
							</div>
							<!-- 轮播（Carousel）导航 -->
							<!--<a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">-->
								<!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
								<!--<span class="sr-only">Previous</span>-->
							<!--</a>-->
							<!--<a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">-->
								<!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
								<!--<span class="sr-only">Next</span>-->
							<!--</a>-->
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
						<a href="caiwu.html" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/caiwu.png" width="50vw"/></a>
						<a href="tuijian.html" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/tuijian.png" width="50vw"/></a>
						<a href="order_list.html" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/dingdan.png" width="50vw"/></a>
						<a href="baodan.html" class="col-25"><img src="<?php echo (ADMIN_IMG); ?>/img/baodan.png" width="50vw"/></a>
					</div>

				</div>

			</div>
		</div>
	</div>


</body>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/jquery-3.1.0.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js" ></script>

<!--<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/zepto.min.js' charset='utf-8'></script>-->
<!--<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm.min.js' charset='utf-8'></script>-->
<!--<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm-extend.min.js' charset='utf-8'></script>-->

<script>
    function browserRedirect() {
        var sUserAgent = navigator.userAgent.toLowerCase();
        var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
        var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
        var bIsMidp = sUserAgent.match(/midp/i) == "midp";
        var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
        var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
        var bIsAndroid = sUserAgent.match(/android/i) == "android";
        var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
        var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
        if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) ){
//            var path=window.location.search;
//            window.location.href='index.html?'+path;

        }else{
            var path=window.location.search;
            window.location.href='index_m.html?'+path;
        }
    }
    browserRedirect();
</script>














<script type="text/javascript">

    $(function () {
//        var browserWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

//		if(browserWidth < 768)
        if(window.screen.width<=768){
            dynamicLoadCss("<?php echo (ADMIN_CSS); ?>/sm.min.css");
            dynamicLoadCss("<?php echo (ADMIN_CSS); ?>/sm-extend.min.css");
//            dynamicLoadCss("<?php echo (ADMIN_CSS); ?>/myPagination.css");
//            dynamicLoadJs("<?php echo (ADMIN_JS); ?>/myPagination.js");

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


//	$.init();

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
            '<div class="item-title">[公告]11月15号早9点不停机更新公告</div>'+
            '<div class="item-after"style="color:#fff">11/14</div>'+
            '</div>'+
            '</li>'+
            '<li class="item-content">'+
            '<div class="item-inner">'+
            '<div class="item-title">[公告]11月15号早9点不停机更新公告</div>'+
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
<script type="text/javascript">
    $(function(){

        $('#myCarousel').carousel({
            interval:5000
        })

        $('#myCarousel2').carousel({
            interval:5000
        })

    })
</script>
</html>