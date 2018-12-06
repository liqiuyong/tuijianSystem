<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>报单</title>
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
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>市级代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>金钻代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>钻石代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>铂金代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>金牌代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>银牌代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
							<tr>
								<th>铜牌代理</th>
								<th>0</th>
								<th>0</th>
								<th>0/0/0</th>
								<th><a href="tuijian_m.html"><img src="<?php echo (ADMIN_IMG); ?>/img/chakanxiangqing.png" style="width:60px"></a></th>
							</tr>
						</table>
						</div>
					</div>
					<!--<div id="pagination" class="pagination"></div>-->
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