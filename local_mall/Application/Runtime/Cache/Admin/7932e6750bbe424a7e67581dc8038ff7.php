<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>订单充值</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/new_nav.css"/>
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/gonggao.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_CSS); ?>/index.css"/>
		<link rel="stylesheet" type="text/css"  href="<?php echo (ADMIN_CSS); ?>/charge.css?id=2" />
	</head>
	<script>
        $(document).ready(function () {
            if(location.href.indexOf("#reloaded")==-1){
                location.href=location.href+"#reloaded";
                location.reload();
            }

        })
	</script>
	<style>



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
			background-image: url(<?php echo (ADMIN_IMG); ?>/chongzhi_bg.png);
			background-repeat:no-repeat; background-size:100% 100%;-moz-background-size:100% 100%;
			margin-bottom: 20px;

		}
		
		
		input{
			color: white;
			display: inline-block;
			background-color:rgba(255,255,255,0.2);
			border: none;
		}
		
		
		.dengji-ul{
			padding-left: 20px;
		}
		
		.dengji-ul li{
			list-style: none;
			float: left;
			padding: 0 10px;
		}




        
	</style>
	<body>
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
		 <div class="container main" style="max-width: 600px;">


				<div class="main-cont text-center" style="width: 100%;">
					
					
					<div class="order-list" style="margin-top: 30px;padding-top: 5%;position: relative;">
						
						<!--<div style="position: relative;">
							<img src="<?php echo (ADMIN_IMG); ?>/dingdang_bg_1.png" width="100%" />
							
							<div style="position: absolute; top: 0;left: 5%;width: 10%;">
								<a href="javascript:history.back(-1)"><img src="<?php echo (ADMIN_IMG); ?>/fanhui.png" width="100%"></a>
							</div>
						</div>-->
						
						<div style="position: absolute; top: 2%;left: 5%;width: 2%;">
								<a href="javascript:history.back(-1)"><img src="<?php echo (ADMIN_IMG); ?>/fanhui_2.png" width="100%"></a>
						</div>

						<form method="post" id="form1">

							<table class="table" style="" >
								<thead>
							
								</thead>
								<tbody>

								<tr>
									<td>用户名(手机号):</td>
									<td><input type="text" name="phone" id="" value="<?php if($user): echo ($user['phone']); endif; ?>" maxlength="11"/></td>
								</tr>
								<tr>
									<td>银行卡号:</td><td><input type="text" name="bank_card" id="" value="<?php if($user): echo ($user['bank_card']); endif; ?>" /></td>
								</tr>
								<tr>
									<td>开户行:</td><td><input type="text" name="bank_name" id="" value="<?php if($user): echo ($user['bank_name']); endif; ?>" /></td>
								</tr>
								<tr>
									<td>姓名:</td><td><input type="text" name="real_name" id="" value="<?php if($user): echo ($user['real_name']); endif; ?>" /></td>
								</tr>
								<tr>
									<td>身份证号:</td><td><input type="text" name="real_card" id="" value="<?php if($user): echo ($user['real_card']); endif; ?>" /></td>
								</tr>
								<tr>
									<td>等级:</td>
									<td>
										<ul class="dengji-ul">
											<!--<li class="daili"><input type="radio" name="level_id" id="" value="1" alt="880" checked="checked"/><span>铜牌代理</span></li><li class="daili"><input type="radio" name="level_id" id="" value="2" alt="3800" /><span>银牌代理</span></li><li class="daili"><input type="radio" name="level_id" id="" value="3" alt="8800" /><span>金牌代理</span></li><li class="daili"><input type="radio" name="level_id" id="" value="4" alt="13800" /><span>铂金代理</span></li><li class="daili"><input type="radio" name="level_id" id="" value="5" alt="28000" /><span>钻石代理</span></li><li class="daili"><input type="radio" name="level_id" id="" value="6" alt="58000" /><span>金钻代理</span></li><li class="daili"><input type="radio" name="level_id" id="" value="7" alt="400000" /><span>市级代理</span></li><li class="daili"><input type="radio" name="level_id" id="" value="8" alt="1000000" /><span>省级代理</span></li>-->
											<?php if(is_array($level_arr)): $i = 0; $__LIST__ = $level_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="daili"><input type="radio" name="level_id" id="" value="<?php echo ($vo["id"]); ?>" alt="<?php echo ($vo["coin"]); ?>" <?php if($vo["id"] == 1): ?>checked="checked"<?php endif; ?>/><span><?php echo ($vo["level"]); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
										</ul>
									</td>
								</tr>
								<tr>
									<td>充值金额:</td><td><span class="h2" id="coin" style="color: red;"><?php echo ($level_arr[0]['coin']); ?></span>元</td>

								</tr>
								</tbody>
							</table>
							<div style="text-align: center;padding:0 0 10px 0;">
								<button type="submit" class="" style="padding: 5px 10px;color: #5d3212;border: none;background-color: rgba(0, 0, 0, 0);background-image: url('<?php echo (ADMIN_IMG); ?>/new/btn.png');background-repeat:no-repeat; background-size:100% 100%;-moz-background-size:100% 100%;">订单生成</button>
							</div>

						</form>



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

						<div class="card">
							<img src="<?php echo (ADMIN_IMG); ?>/img/chongzhikuang.png" style="width:100%">
							<div style="position: absolute;width: 100%;height: 90%;top: 10%;">
								<form id="form2">

								<div class="list-block">
									<ul>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">手机号：</div>
													<div class="item-input">
														<input type="text" name="phone" value="<?php if($user): echo ($user['phone']); endif; ?>">
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">卡号：</div>
													<div class="item-input">
														<input type="text" name="bank_card" value="<?php if($user): echo ($user['bank_card']); endif; ?>">
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">开户行：</div>
													<div class="item-input">
														<input type="text" name="bank_name" value="<?php if($user): echo ($user['bank_name']); endif; ?>">
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">姓名：</div>
													<div class="item-input">
														<input type="text" name="real_name" value="<?php if($user): echo ($user['real_name']); endif; ?>">
													</div>
												</div>
											</div>
										</li>
										<li>
											<div class="item-content">
												<div class="item-inner">
													<div class="item-title label">身份证号：</div>
													<div class="item-input">
														<input type="text" name="real_card" value="<?php if($user): echo ($user['real_card']); endif; ?>">
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="row">
									等级
								</div>
								<div class="row text-center">
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio" checked="checked">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;铜牌代理</div>-->
										<!--</label>-->
									<!--</div>-->
									<?php if(is_array($level_arr)): $i = 0; $__LIST__ = $level_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-33">
											<label class="label-checkbox item-content">
												<input type="radio" name="level_id" value="<?php echo ($vo["id"]); ?>" alt="<?php echo ($vo["coin"]); ?>" <?php if($vo["id"] == 1): ?>checked="checked"<?php endif; ?>/>
												<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;<?php echo ($vo["level"]); ?></div>
											</label>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;银牌代理</div>-->
										<!--</label>-->
									<!--</div>-->
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;金牌代理</div>-->
										<!--</label>-->
									<!--</div>-->
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;铂金代理</div>-->
										<!--</label>-->
									<!--</div>-->
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;钻石代理</div>-->
										<!--</label>-->
									<!--</div>-->
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;金钻代理</div>-->
										<!--</label>-->
									<!--</div>-->
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;市级代理</div>-->
										<!--</label>-->
									<!--</div>-->
									<!--<div class="col-33">-->
										<!--<label class="label-checkbox item-content">-->
											<!--<input type="radio" name="my-radio">-->
											<!--<div class="item-media"><i class="icon icon-form-checkbox"></i>&nbsp;省级代理</div>-->
										<!--</label>-->
									<!--</div>-->
								</div>
								<a  class="button" style="margin-top:.5rem">
									<img onclick="charge()" id="sub-btn-m" src="<?php echo (ADMIN_IMG); ?>/img/dingdanshengcheng.png" style="width: 45%;">
								</a>
								</form>

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
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/charge.js" ></script>
	<!--<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/changeMTPC.js" ></script>-->
	<script>

        $(document).ready(function () {
            if(location.href.indexOf("#reloaded")==-1){
                location.href=location.href+"#reloaded";
                location.reload();
            }

        })





        $('input[type=radio][name=level_id]').change(function() {

            $("#coin").text(this.alt)

        });

//        pc端提交

        $('#form1').submit(function () {

            $.post(
                'charge.html',

                $('#form1').serialize(),
                function (data) {
//				    console.log(data);
                    if (data.status == 1){
                        alert(data.msg);
                        window.location.href="charge_status.html?order_num="+data.order_num;
                    }else if (data.status == 2){
                        alert(data.msg);
                        window.location.href="geren.html";
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
		




	
	</script>
	<script type="text/javascript">

//        $.init();

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