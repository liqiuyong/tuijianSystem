<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>推荐信息</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/new_nav.css"/>
	<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/gonggao.css" />


</head>

<style>

	/*分页样式*/

	.page>div{
		display: flex;
		width: 832px;
		color: #fff;
		font-size: 16px;
		font-weight: bold;
		align-items: center;
		justify-content: center;
		margin-top: 40px;
	}
	.num , .prev ,.next ,.end,.first{
		float: 0 0 auto;
		height: 34px;
		min-width: 34px;
		border-radius: 50px;
		background: #2e1d0b;
		border: 2px solid #6c553b;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 18px;
		font-weight: bold;
		color: #fff;
		cursor: pointer;
		margin: 0 3px;
	}

	.next,.end{
		transform: rotate(-180deg);
	}

	/*分页样式*/



	/*二维码区域*/

	.bottom-div{
		position: fixed;
		bottom: 125px;
		right: 240px;
	}


	.bottom-div-cont{
		float: right;
		width: 100px;
		height: 100px;
		/*border: 1px solid white;*/
		line-height: 40px;

		margin: 30px 0 0 30px;

	}
	.bottom-div a{
		color: white;
		font-size: 16px;
		font-weight: 400;
	}


	@media only screen and (min-width: 769px){

		.sm_dev_div{
			display: none;
		}

	}


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


		.bg_dev_div{
			display: none;
		}
		.sm_dev_div{
			display: block;
		}

		caption, th {
			text-align: center;
		}
		.pagination{
			display: block;
		}
	}





</style>
<body>

<div class="bg_box bg_dev_div">
	<!--<div  class="hd_box_wrap">-->
		<!--<div class="hd_box">-->


			<!--<div class="hd-left">-->
				<!--<a class="logo-a"><img src="<?php echo (ADMIN_IMG); ?>/new/logo.png"></a>-->
				<!--<img src="<?php echo (ADMIN_IMG); ?>/new/zuan.png">-->
				<!--<a href="index.html" class="color_fff">首页-</a>-->
				<!--<span class="select-wrap1">-->
                        <!--<select class="select1" onchange="window.location=this.value">-->
                            <!--<option value="caiwu.html">财务信息</option>-->
                            <!--<option value="tuijian.html" selected="selected">推荐列表</option>-->
                            <!--<option value="order_list.html">订单详情</option>-->
                            <!--<option value="baodan.html">报单记录</option>-->
                        <!--</select>-->
                        <!--<div class="sanjiaoxing">-->
                            <!--<img src="<?php echo (ADMIN_IMG); ?>/new/sanjiaoxing.png">-->
                        <!--</div>-->
                        <!--</span>-->

			<!--</div>-->
			<!---->
			<!---->
			<!---->
			<!---->
			<!---->
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
	<div class="asset-main">
		<div class="asset-main-hd">
			<div class="asset-main-hd-tap" onclick="javascript:window.location.href ='tuijian.html'">一级推荐</div>
			<div class="asset-main-hd-tap active ">二级推荐</div>
			<!--<div class="asset-main-hd-rgiht">所有推荐总奖励：30000</div>-->
		</div>
		<div class="asset-main-bd">
			<div class="tab_content  hide">
				<div class="tab_content1-top2">
					<table class="customers1">
						<tr>
							<th>一级推荐总人数：<?php echo ($user_1_arr[0]); ?></th>
							<th>有效人数：<?php echo ($user_1_arr[1]); ?></th>
							<th>钻石金银总产量：0/0/0</th>
							<!--<th>奖励：20000</th>-->
						</tr>
					</table>
					<table class="customers">
						<tr>
							<th>
                                <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">序号</option>

                                </select>
                                 </span>
							</th>
							<th>
                              <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">姓名</option>

                                </select>
                                 </span>
							</th>
							<th>
                              <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">手机号</option>

                                </select>
                                 </span>
							</th>
							<th>
                                <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">级别</option>

                                </select>
                                 </span>
							</th>
							<th>
                                <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">状态</option>

                                </select>
                                 </span>
							</th>
							<th> <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">身份</option>

                                </select>
                                 </span></th>


							<th>钻石金银产出</th>
							<th>操作</th>
						</tr>

						<?php if(is_array($userlist_1)): $i = 0; $__LIST__ = $userlist_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><tr>
									<?php else: ?>
								<tr class="alt"><?php endif; ?>

								<td><?php echo ($i); ?></td>
								<td><?php echo ((isset($vo["real_name"]) && ($vo["real_name"] !== ""))?($vo["real_name"]):"未认证"); ?></td>
								<td><?php echo ($vo["phone"]); ?></td>
								<td><?php echo ((isset($vo["level"]) && ($vo["level"] !== ""))?($vo["level"]):"未付款"); ?></td>
								<td>
									<?php if($vo["is_checked"] == 1): ?>有效
										<?php else: ?>
										无效<?php endif; ?>

								</td>
								<td>
									<?php if($vo["game_id"] != ''): ?>玩家
										<?php else: ?>
										代理<?php endif; ?>
								</td>
							<td>钻石:0 金:0 银:0</td>
							<td></td>

							</tr><?php endforeach; endif; else: echo "" ;endif; ?>




					</table>


					<!--分页部分-->
					<!---->
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

					<!--分页部分-->
					<div class="page">
						<?php echo ($page); ?>



					</div>

				</div>
			</div>
			<div class="tab_content  hide active">
				<div class="tab_content1-top2">
					<table class="customers1">
						<tr>
							<th>二级推荐总人数：<?php echo ($user_2_arr[0]); ?></th>
							<th>有效人数：<?php echo ($user_2_arr[1]); ?></th>
							<th>钻石金银总产量：0/0/0</th>
							<!--<th>奖励：20000</th>-->
						</tr>
					</table>
					<table class="customers">
						<tr>
							<th>
                                <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">序号</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 </span>
							</th>
							<th>
                              <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">姓名</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 </span>
							</th>
							<th>
                              <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">手机号</option>

                                </select>
                                 </span>
							</th>
							<th>
                                <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">级别</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 </span>
							</th>
							<th>
                                <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">状态</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 </span>
							</th>
							<th> <span class="select-wrap">
                                <select class="select" disabled>
                                    <option value ="volvo">身份</option>
                                    <option value ="saab">Saab</option>
                                    <option value="opel">Opel</option>
                                    <option value="audi">Audi</option>
                                </select>
                                 </span>
							</th>


							<th>钻石金银产出</th>
							<th>操作</th>
						</tr>
						<?php if(is_array($userlist_2)): $i = 0; $__LIST__ = $userlist_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i%2 == 1): ?><tr>
									<?php else: ?>
								<tr class="alt"><?php endif; ?>

							<td><?php echo ($i); ?></td>
							<td><?php echo ((isset($vo["real_name"]) && ($vo["real_name"] !== ""))?($vo["real_name"]):"未认证"); ?></td>
							<td><?php echo ($vo["phone"]); ?></td>
							<td><?php echo ((isset($vo["level"]) && ($vo["level"] !== ""))?($vo["level"]):"未付款"); ?></td>
							<td>
								<?php if($vo["is_checked"] == 1): ?>有效
									<?php else: ?>
									无效<?php endif; ?>

							</td>
							<td>
								<?php if($vo["game_id"] != ''): ?>玩家
									<?php else: ?>
									代理<?php endif; ?>
							</td>
							<td>钻石:0 金:0 银:0</td>
							<td></td>

							</tr><?php endforeach; endif; else: echo "" ;endif; ?>

					</table>
					<!--以下是分页类-->
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

					<!--分页部分-->
					<div class="page">
						<?php echo ($page); ?>



					</div>
				</div>
			</div>


			<!--底部分享区域-->
			<!--<div class="bottom-div">-->
				<!--<div class="bottom-div-cont text-center">-->
					<!--<div class="">-->
						<!--<a onclick="get_inviteCode()">生成推荐码</a>-->
					<!--</div>-->
					<!--<div class="">-->
						<!--<a href="">分享链接</a>-->
					<!--</div>-->
					<!--<div class="">-->
						<!--<a id="get_qrcode"  onclick="get_qrcode()" >生成二维码</a>-->
					<!--</div>-->
				<!--</div>-->
				<!--&lt;!&ndash;<div class="bottom-div-cont text-center">&ndash;&gt;-->
				<!--&lt;!&ndash;<div class="">&ndash;&gt;-->
				<!--&lt;!&ndash;<img src="<?php echo (ADMIN_IMG); ?>/erweima.png"/>&ndash;&gt;-->
				<!--&lt;!&ndash;</div>&ndash;&gt;-->
				<!--&lt;!&ndash;<div class="">&ndash;&gt;-->
				<!--&lt;!&ndash;<a href="">我的二维码</a>&ndash;&gt;-->
				<!--&lt;!&ndash;</div>&ndash;&gt;-->
				<!--&lt;!&ndash;</div>&ndash;&gt;-->
				<!--<div id="erweima-div" class="bottom-div-cont text-center" <?php if(empty($user['invite_code'])): ?>hidden<?php endif; ?> >-->
				<!--<div class="">-->
					<!--<?php if($user['invite_code']): ?>-->
						<!--<img id="erweima" src="qrcode.html?invite_code=<?php echo ($user['invite_code']); ?>" width="90px" height="90px"/>-->
						<!--<?php else: ?>-->
						<!--<img id="erweima" src="qrcode.html" width="90px" height="90px"/>-->
					<!--<?php endif; ?>-->
				<!--</div>-->
				<!--<div class="">-->
					<!--&lt;!&ndash;<a href="">推荐 吗</a>&ndash;&gt;-->
					<!--<span style="color: white;font-size: 15px">推荐码:<?php echo ($user["invite_code"]); ?></span>-->
				<!--</div>-->
			<!--</div>-->
		</div>



		</div>
	</div>


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
							<img src="<?php echo (ADMIN_IMG); ?>/img/yijituijian.png" class="c_img">
							<img src="<?php echo (ADMIN_IMG); ?>/img/yijituijian2.png">
						</a>
						<a href="#tab2" class="tab-link button">
							<img src="<?php echo (ADMIN_IMG); ?>/img/erjituijian.png">
							<img src="<?php echo (ADMIN_IMG); ?>/img/erjituijian2.png" class="c_img">
						</a>
					</div>
				</div>
				<div class="tabs">
					<div id="tab1" class="tab active">
						<div class="card">
							<div class="card-content">
								<div class="card-content-inner text-center" style="font-size:.55rem;color:#feecbe">
									<div class="row no-gutter">
										<div class="col-33">
											一级推荐总人数：<?php echo ($user_1_arr[0]); ?>
										</div>
										<div class="col-33">
											有效人数：<?php echo ($user_1_arr[1]); ?>
										</div>
										<div class="col-33">
											所有推荐总奖励：0
										</div>
									</div>
									<div class="row no-gutter">
										<div class="col-50">
											钻石金银总产量：0/0/0
										</div>
										<!--<div class="col-50">-->
											<!--奖励：800-->
										<!--</div>-->
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<table border="0">
								<tr class="thead">
									<th>序号<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>姓名<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>级别<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>状态<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>身份<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
									<th>钻石金银产出</th>
									<th>操作</th>
								</tr>

								<?php if(is_array($userlist_1)): $i = 0; $__LIST__ = $userlist_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

									<th><?php echo ($i); ?></th>
									<th><?php echo ((isset($vo["real_name"]) && ($vo["real_name"] !== ""))?($vo["real_name"]):"未认证"); ?></th>

									<th><?php echo ((isset($vo["level"]) && ($vo["level"] !== ""))?($vo["level"]):"未付款"); ?></th>
									<th>
										<?php if($vo["is_checked"] == 1): ?>有效
											<?php else: ?>
											无效<?php endif; ?>

									</th>
									<th>
										<?php if($vo["game_id"] != ''): ?>玩家
											<?php else: ?>
											代理<?php endif; ?>
									</th>
									<th>钻石:0 金:0 银:0</th>
									<th></th>

									</tr><?php endforeach; endif; else: echo "" ;endif; ?>


								<!--<tr>-->
									<!--<th>201</th>-->
									<!--<th>章三</th>-->
									<!--<th>省级</th>-->
									<!--<th>有效</th>-->
									<!--<th>玩家</th>-->
									<!--<th>100/100/100</th>-->
									<!--<th></th>-->
								<!--</tr>-->

							</table>
						</div>
						<div id="pagination" class="pagination"></div>
					</div>
					<div id="tab2" class="tab">
						<!--<div class="content-block" style="margin-top:2rem;">-->
							<div class="card">
								<div class="card-content">
									<div class="card-content-inner text-center" style="font-size:.55rem;color:#feecbe">
										<div class="row no-gutter">
											<div class="col-33">
												二级推荐总人数：<?php echo ($user_2_arr[0]); ?>
											</div>
											<div class="col-33">
												有效人数：<?php echo ($user_2_arr[1]); ?>
											</div>
											<div class="col-33">
												所有推荐总奖励：0
											</div>
										</div>
										<div class="row no-gutter">
											<div class="col-50">
												钻石金银总产量：0/0/0
											</div>
											<!--<div class="col-50">-->
												<!--奖励：800-->
											<!--</div>-->
										</div>
									</div>
								</div>
							</div>
							<div class="card">
								<table border="0">
									<tr class="thead">
										<th>序号<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
										<th>姓名<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
										<th>级别<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
										<th>状态<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
										<th>身份<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
										<th>钻石金银产出</th>
										<th>操作</th>
									</tr>
									<?php if(is_array($userlist_2)): $i = 0; $__LIST__ = $userlist_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

										<th><?php echo ($i); ?></th>
										<th><?php echo ((isset($vo["real_name"]) && ($vo["real_name"] !== ""))?($vo["real_name"]):"未认证"); ?></th>

										<th><?php echo ((isset($vo["level"]) && ($vo["level"] !== ""))?($vo["level"]):"未付款"); ?></th>
										<th>
											<?php if($vo["is_checked"] == 1): ?>有效
												<?php else: ?>
												无效<?php endif; ?>

										</th>
										<th>
											<?php if($vo["game_id"] != ''): ?>玩家
												<?php else: ?>
												代理<?php endif; ?>
										</th>
										<th>钻石:0 金:0 银:0</th>
										<th></th>

										</tr><?php endforeach; endif; else: echo "" ;endif; ?>

								</table>
							</div>
						<!--</div>-->
						<div id="pagination2" class="pagination"></div>
					</div>
				</div>


			</div>

		</div>
	</div>


</div>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/jquery-3.1.0.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js" ></script>
<script>


    function get_inviteCode() {
        $.post(
            'get_inviteCode.html',
            {},
            function (data) {
                alert(data.msg);
            }
            ,'json'
        )
    }


    function get_qrcode() {
//            alert(123)
        $.post(
            'get_qrcode',
            {},
            function (data) {
                if (data.status == 1){
                    alert(data.msg);
                    $newSrc = "qrcode.html?invite_code="+data.invite_code;
                    $("#erweima").attr('src',$newSrc);
                    $("#erweima-div").show();

                }else {
                    alert(data.msg);
                }
            }

        )
    }

	$(function () {

        $('.asset-main-hd-tap').on('click',function(){
            $('.asset-main-hd-tap').removeClass("active")
            $(this).addClass("active")
            const active_index=$(this).index()
            $(".tab_content").removeClass("active")
            $(".asset-main-bd").find(".tab_content").eq(active_index).addClass("active")
        })


    })


    function selectText(x) {
        if (document.selection) {
            var range = document.body.createTextRange();//ie
            range.moveToElementText(x);
            range.select();
        } else if (window.getSelection) {
            var selection = window.getSelection();
            var range = document.createRange();
            selection.removeAllRanges();
            range.selectNodeContents(x);
            selection.addRange(range);
        }
        //参考：http://blog.csdn.net/boyit0/article/details/41082941
    }
    function cp(x)
    {
        selectText(x);
        document.execCommand("copy");
        alert("复制成功！");
    }


</script>

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

        new myPagination({
            id: 'pagination2',
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
</body>
</html>