<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>订单详情</title>
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

	/*分页样式*/

	.pagination>div{
		list-style: none;
		padding-left: 0;
		text-align: center;
	}
	.pagination>div img{
		width: 28px;
		height: 28px;
	}
	.pagination>div>div{
		background: transparent;
		cursor: default;
		border: none;
		padding: 0 6px;
		color: white;
		display: inline-block;
	}
	.num , .prev ,.next ,.end,.first,.current {
		background-image: url(<?php echo (ADMIN_IMG); ?>/img/konganniu.png);
		background-size: 28px 28px;
		background-repeat: no-repeat;
		vertical-align: top;
		display: inline-block;
		font-size: 14px;
		min-width: 28px;
		min-height: 28px;
		line-height: 28px;
		cursor: pointer;
		box-sizing: border-box;
		text-align: center;
		color: #fff;
		border-radius: 50%;
		margin: 0 3px;
		height: 30px;
	}

	/*.next,.end{*/
		/*transform: rotate(-180deg);*/
	/*}*/

	/*分页样式*/




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
	.card-content-inner {
		padding: .30rem .75rem .2rem;

	}
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
               
				<div  class="card card-bottom"  style="margin-top: 3rem">
					<table border="0">
						<tr class="thead">
							<th>时间<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
							<th>单号<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
							<th>代理等级<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
							<th>状态<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
							<th>金额<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>
							<th>交易类型</th>
							<th>操作</th>
						</tr>


						<?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<th><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></th>
								<th><?php echo ($vo["order_num"]); ?></th>
								<th><?php echo ((isset($vo["level"]) && ($vo["level"] !== ""))?($vo["level"]):"未付款"); ?></th>
								<th>
									<?php if($vo["charge_status"] == 1): ?>未支付<?php endif; ?>
									<?php if($vo["charge_status"] == 2): ?>已提交待审核<?php endif; ?>
									<?php if($vo["charge_status"] == 3): ?>审核通过<?php endif; ?>
									<?php if($vo["charge_status"] == 4): ?>审核不通过<?php endif; ?>
								</th>
								<?php if($vo["is_charge"] == 1): ?><th><?php echo ($vo["charge_money"]); ?></th><?php endif; ?>
								<?php if($vo["is_charge"] == 2): ?><th><?php echo ($vo['charge_money']*89/100); ?></th><?php endif; ?>


								<th>
									<?php if($vo["is_charge"] == 1): ?>充值<?php endif; ?>
									<?php if($vo["is_charge"] == 2): ?>提现<?php endif; ?>
								</th>
								<th>
									<a href="charge_status_m.html?order_num=<?php echo ($vo["order_num"]); ?>" external>查看详情</a>
								</th>


							</tr><?php endforeach; endif; else: echo "" ;endif; ?>




						<!--<tr>-->
							<!--<th>201</th>-->
							<!--<th>213231</th>-->
							<!--<th>省级</th>-->
							<!--<th>有效</th>-->
							<!--<th>400</th>-->
							<!--<th>红积分</th>-->
							<!--<th>积分商城</th>-->
						<!--</tr>-->
						<!--<tr>-->
							<!--<th>201</th>-->
							<!--<th>213231</th>-->
							<!--<th>省级</th>-->
							<!--<th>有效</th>-->
							<!--<th>400</th>-->
							<!--<th>红积分</th>-->
							<!--<th>积分商城</th>-->
						<!--</tr>-->
						<!--<tr>-->
							<!--<th>201</th>-->
							<!--<th>213231</th>-->
							<!--<th>省级</th>-->
							<!--<th>有效</th>-->
							<!--<th>400</th>-->
							<!--<th>红积分</th>-->
							<!--<th>积分商城</th>-->
						<!--</tr>-->
						<!--<tr>-->
							<!--<th>201</th>-->
							<!--<th>213231</th>-->
							<!--<th>省级</th>-->
							<!--<th>有效</th>-->
							<!--<th>400</th>-->
							<!--<th>红积分</th>-->
							<!--<th>积分商城</th>-->
						<!--</tr>-->
					</table>
				</div>
				<!--<div id="pagination" class="pagination"></div>-->
				<div id="" class="pagination"><?php echo ($page); ?></div>

			</div>

		</div>
	</div>


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
//    window.onload = function () {
//        new myPagination({
//            id: 'pagination',
//            curPage:1, //初始页码
//            pageTotal: 50, //总页数
//            pageAmount: 10,  //每页多少条
//            dataTotal: 500, //总共多少条数据
//            pageSize: 5, //可选,分页个数
//            showPageTotalFlag:true, //是否显示数据统计
//            showSkipInputFlag:true, //是否支持跳转
//            getPage: function (page) {
//                //获取当前页数
//                console.log(page);
//            }
//        })
//
//    }
</script>
</body>
</html>