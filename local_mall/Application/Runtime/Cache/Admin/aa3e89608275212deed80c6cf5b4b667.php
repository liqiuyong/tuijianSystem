<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>提现</title>
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/favicon.ico">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm.min.css">
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/sm-extend.min.css">
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/myPagination.css">
		<script src="<?php echo (ADMIN_JS); ?>/myPagination.js"></script>
	</head>
	<style type="text/css">
		.card .list-block li {margin: .2rem 0;}
		.col-33{margin: .2rem 0}
		.row {padding: .1rem .75rem;}
	</style>
	<body>

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
							<img src="<?php echo (ADMIN_IMG); ?>/img/tixian2.png" style="width:100%">
							<div style="position: absolute;width: 100%;height: 90%;top: 10%;">
								<form id="form2">
								<div class="list-block">
									<ul>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">姓名：</div>
													<div class="item-input">
														<input type="text" name="real_name"  value="<?php if($user): echo ($user['real_name']); endif; ?>">
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">银行卡号：</div>
													<div class="item-input">
														<input type="text" name="bank_card"  value="<?php if($user): echo ($user['bank_card']); endif; ?>" >
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">开户行：</div>
													<div class="item-input" >
														<input type="text" name="bank_name" value="<?php if($user): echo ($user['bank_name']); endif; ?>" />
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">支行：</div>
													<div class="item-input" >
														<input type="text" name="sub_bank_name" value="<?php if($user): echo ($user['sub_bank_name']); endif; ?>" />
													</div>
												</div>
											</div>
										</li>
										<!--<li>-->
											<!--<div class="item-content">-->
												<!--<div class="item-inner">-->
													<!--<div class="item-title label">身份证号：</div>-->
													<!--<div class="item-input">-->
														<!--<input type="text" name="real_card" value="<?php if($user): echo ($user['real_card']); endif; ?>" >-->
													<!--</div>-->
												<!--</div>-->
											<!--</div>-->
										<!--</li>-->
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">余额：</div>
													<div class="item-input">
														<input type="text" value="<?php echo ((isset($wallet['active_money'] ) && ($wallet['active_money'] !== ""))?($wallet['active_money'] ):0); ?>元" disabled>
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">提现金额：</div>
													<div class="item-input">
														<input type="text" name="charge_money" value="">
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">

												<div class="item-inner">

													<div class="item-title label"></div>
													<div class="item-input">
														* 提现金额必须是100的整数倍,提现需扣除所得税11% *
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">交易密码：</div>
													<div class="item-input" >
														<input type="text" name="tr_password">
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								</form>
								<a href="#" class="button">
									<img onclick="get_cash_m()" src="<?php echo (ADMIN_IMG); ?>/img/dingdanshengcheng.png" style="width: 45%;">
								</a>
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
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/logout.js" ></script>
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/charge.js" ></script>
	<script type="text/javascript">
		

        $('input[type=radio][name=level_id]').change(function() {

            $("#coin").text(this.alt)

        });



        $('form').submit(function () {

            $.post(
				'get_cash.html',

                $('#form1').serialize(),
				function (data) {
//				    console.log(data);
				    if (data.status == 1){
                        alert(data.msg);
						window.location.href="charge_status_m.html?order_num="+data.order_num;
                    }else if (data.status == 2){
                        alert(data.msg);
                        window.location.href="geren_m.html";
					}

                    else {
                        alert(data.msg);

                    }
				}
				, 'json'

            )
            return false;

        })



	
	</script>
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
</html>