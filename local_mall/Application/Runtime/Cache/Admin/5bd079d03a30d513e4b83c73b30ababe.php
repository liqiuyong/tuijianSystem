<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>报单</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/new_nav.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/index.css"/>
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/gonggao.css" />
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/main.css" />
	</head>
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
                window.location.href='baodan_m.html?'+path;
            }
        }
        browserRedirect();
	</script>
	<style>

		body{
			padding: 0px;
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
        
        tbody tr:nth-child(odd){background:#674527;}
        
        .order-list
        {
			background-image: url(<?php echo (ADMIN_IMG); ?>/dingdang_bg_2.png);
			background-repeat:no-repeat; background-size:100% 100%;-moz-background-size:100% 100%;
			margin-bottom: 20px;

		}
		
		
		/*二维码区域*/
		.bottom-div-cont{
			float: right;
			width: 100px;
			height: 100px;
			/*border: 1px solid white;*/
			line-height: 40px;
			
			margin: 30px 0 0 30px;
			
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
			background-image: url(<?php echo (ADMIN_IMG); ?>/img/cha.png);
			background-position: 98% 9px;
		}

		@media only screen and (max-width: 768px){
			caption, th {
				text-align: center;
			}
		}




        
	</style>
	<div>

	<div class="bg_dev_div">

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


			 <div class="asset-main">

				 <div class="asset-main-bd">


					 <div class="tab_content1-top2 active">


						 <div class="customers3">

						<div style="display: inline-block;width: 50%" >
							<div style="display: inline-block;margin: 0 30px;text-align: center"  >
								<p id="invite_p" style="color: white;font-size: 18px" <?php if(empty($user['invite_code'])): ?>hidden<?php endif; ?> >推荐码:<?php echo ($user["invite_code"]); ?></p>
								<div  id="erweima-div" <?php if(empty($user['invite_code'])): ?>hidden<?php endif; ?> >

									<?php if(empty($user['invite_code'])): ?><img id="erweima" src="qrcode.html" width="90px" height="90px"/>

										<?php else: ?>
										<img id="erweima" src="qrcode.html?invite_code=<?php echo ($user['invite_code']); ?>" width="90px" height="90px"/><?php endif; ?>
								</div>

							</div>

							<div style="display: inline-block;vertical-align: middle;text-align: center">
								<div>
									<a onclick="get_inviteCode()" style="color: white">生成推荐码</a>
								</div>
								<div>
									<a onclick="get_qrcode()" style="color: white" >生成分享二维码</a>
								</div>
								<!--<div>-->
									<!--<a style="color: white">复制链接</a>-->
								<!--</div>-->
							</div>
						</div>



							 <div style="display: inline-block;vertical-align: middle;text-align: center;width: 45%">
								 <div>
									 红积分总额: 0
								 </div>
								 <!--<div>-->
									 <!--可兑换: 5000-->
								 <!--</div>-->
								 <!--<div>-->
									 <!--<a class=""><img src="<?php echo (ADMIN_IMG); ?>/duihuan.png"></a>-->
								 <!--</div>-->
							 </div>
						 </div>

						 <table class="customers">
							 <tr>
								 <th>
                                <span class="select-wrap">
                                    <select class="select" disabled>
                                        <option value="volvo">等级</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    </span>
								 </th>
								 <th>
                                <span class="select-wrap">
                                    <select class="select" disabled>
                                        <option value="volvo">推荐总数</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <span>
								 </th>
								 <th>
                                <span class="select-wrap">
                                    <select class="select" disabled>
                                        <option value="volvo">有效数量</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    </span>
								 </th>
								 <th>红白黑积分</th>
								 <th>操作</th>
							 </tr>
							 <tr>
								 <td>省级代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
							 </tr>
							 <tr class="alt">
								 <td>市级代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
							 </tr>
							 <tr>
								 <td>金钻代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
							 </tr>
							 <tr class="alt">
								 <td>钻石代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
							 </tr>
							 <tr>
								 <td>铂金代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
							 </tr>
							 <tr class="alt">
								 <td>金牌代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
							 </tr>
							 <tr>
								 <td>银牌代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
							 </tr>
							 <tr class="alt">
								 <td>铜牌代理</td>
								 <td>0</td>
								 <td>0</td>
								 <td>0/0/0</td>
								 <td>
									 <div class="btn-box">
										 <!--<a>充 值</a>-->
										 <a href="tuijian.html">查看详情</a>
									 </div>
								 </td>
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

						<div class="list-block media-list">
							<ul>
								<li>
									<div id="invite_p2" class="item-content"<?php if(empty($user['invite_code'])): ?>style="display:none;"<?php endif; ?> >推荐码：<?php echo ($user["invite_code"]); ?></div>
									<div class="item-content">
										<div class="item-media" id="erweima-div2"  <?php if(empty($user['invite_code'])): ?>style="display:none;"<?php endif; ?> >

											<?php if(empty($user['invite_code'])): ?><img id="erweima2" src="qrcode.html" width="100">
												<?php else: ?>
												<img id="erweima2" src="qrcode.html?invite_code=<?php echo ($user['invite_code']); ?>"  width="100"/><?php endif; ?>
										</div>
										<div class="item-inner">
											<div class="item-title-row">
												<span class="item-title"  onclick="get_inviteCode()" >生成推荐码</span>
												<span class="item-title pull-right">红积分总额：0</span>
											</div>
											<div class="item-title-row">
												<span class="item-title"  onclick="get_qrcode()">生成二维码</span>
												<span class="item-title pull-right">可兑换：0</span>
											</div>
											<!--<div class="item-title-row">-->
												<!--<span class="item-title">复制</span>-->
												<!--<span class="item-title pull-right"><img src="<?php echo (ADMIN_IMG); ?>/img/duihuan.png" style="width:90px;"></span>-->
											<!--</div>-->
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="card">
							<table border="0">
							<tr class="thead">
								<th>等级<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
								<th>推荐总数<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
								<th>有效数量<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
								<th>红白黑积分</th>
								<th>操作</th>
							</tr>
							<tr>
								<th>省级代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>市级代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>金钻代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>钻石代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>铂金代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>金牌代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>银牌代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>铜牌代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
						</table>
						</div>
					</div>
					<!--<div id="pagination" class="pagination"></div>-->
				</div>

			</div>
		</div>


	</div>





	</body>
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/jquery-3.1.0.js" ></script>
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js" ></script>
	<script>

        function get_inviteCode() {
            $.post(
                'get_inviteCode.html',
                {},
                function (data) {
                    if (data.status == 1){
                        $("#invite_p").html("推荐码:"+data.invite_code);
                        $("#invite_p").show();
                        $("#invite_p2").html("推荐码:"+data.invite_code);
                        $("#invite_p2").show();
					}
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
                        $("#erweima2").attr('src',$newSrc);
                        $("#erweima-div2").show();

                    }else {
                        alert(data.msg);
                    }
                }

            )
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

        }
	</script>
</html>