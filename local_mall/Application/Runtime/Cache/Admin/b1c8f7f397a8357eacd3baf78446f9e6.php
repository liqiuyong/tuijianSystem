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
					<div class="buttons-row">
						<a href="#tab1" class="tab-link button" onclick="javascript:window.location.href ='tuijian_m.html'" >
							<img src="<?php echo (ADMIN_IMG); ?>/img/yijituijian.png" class="c_img">
							<img src="<?php echo (ADMIN_IMG); ?>/img/yijituijian2.png">
						</a>
						<a href="#tab2" class="tab-link button  active">
							<img src="<?php echo (ADMIN_IMG); ?>/img/erjituijian.png">
							<img src="<?php echo (ADMIN_IMG); ?>/img/erjituijian2.png" class="c_img">
						</a>
					</div>
				</div>
				<div class="tabs">
					<!--<div id="tab1" class="tab">-->
						<!--<div class="card">-->
							<!--<div class="card-content">-->
								<!--<div class="card-content-inner text-center" style="font-size:.55rem;color:#feecbe">-->
									<!--<div class="row no-gutter">-->
										<!--<div class="col-33">-->
											<!--一级推荐总人数：<?php echo ($user_1_arr[0]); ?>-->
										<!--</div>-->
										<!--<div class="col-33">-->
											<!--有效人数：<?php echo ($user_1_arr[1]); ?>-->
										<!--</div>-->
										<!--<div class="col-33">-->
											<!--所有推荐总奖励：0-->
										<!--</div>-->
									<!--</div>-->
									<!--<div class="row no-gutter">-->
										<!--<div class="col-50">-->
											<!--钻石金银总产量：0/0/0-->
										<!--</div>-->
										<!--&lt;!&ndash;<div class="col-50">&ndash;&gt;-->
											<!--&lt;!&ndash;奖励：800&ndash;&gt;-->
										<!--&lt;!&ndash;</div>&ndash;&gt;-->
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
						<!--<div class="card card-bottom">-->
							<!--<table border="0">-->
								<!--<tr class="thead">-->
									<!--<th>序号<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>-->
									<!--<th>姓名<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>-->
									<!--<th>级别<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>-->
									<!--<th>状态<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>-->
									<!--<th>身份<img src="<?php echo (ADMIN_IMG); ?>/img/xia.png"></th>-->
									<!--<th>钻石金银产出</th>-->
									<!--<th>操作</th>-->
								<!--</tr>-->

								<!--<?php if(is_array($userlist_1)): $i = 0; $__LIST__ = $userlist_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->


									<!--<tr>-->

									<!--<th><?php echo ($i); ?></th>-->
									<!--<th><?php echo ((isset($vo["real_name"]) && ($vo["real_name"] !== ""))?($vo["real_name"]):"未认证"); ?></th>-->

									<!--<th><?php echo ((isset($vo["level"]) && ($vo["level"] !== ""))?($vo["level"]):"未付款"); ?></th>-->
									<!--<th>-->
										<!--<?php if($vo["is_checked"] == 1): ?>-->
											<!--有效-->
											<!--<?php else: ?>-->
											<!--无效-->
										<!--<?php endif; ?>-->

									<!--</th>-->
									<!--<th>-->
										<!--<?php if($vo["game_id"] != ''): ?>-->
											<!--玩家-->
											<!--<?php else: ?>-->
											<!--代理-->
										<!--<?php endif; ?>-->
									<!--</th>-->
									<!--<th>钻石:0 金:0 银:0</th>-->
									<!--<th></th>-->

									<!--</tr>-->

								<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->


								<!--&lt;!&ndash;<tr>&ndash;&gt;-->
									<!--&lt;!&ndash;<th>201</th>&ndash;&gt;-->
									<!--&lt;!&ndash;<th>章三</th>&ndash;&gt;-->
									<!--&lt;!&ndash;<th>省级</th>&ndash;&gt;-->
									<!--&lt;!&ndash;<th>有效</th>&ndash;&gt;-->
									<!--&lt;!&ndash;<th>玩家</th>&ndash;&gt;-->
									<!--&lt;!&ndash;<th>100/100/100</th>&ndash;&gt;-->
									<!--&lt;!&ndash;<th></th>&ndash;&gt;-->
								<!--&lt;!&ndash;</tr>&ndash;&gt;-->

							<!--</table>-->
						<!--</div>-->
						<!--<div id="pagination" class="pagination"></div>-->
					<!--</div>-->
					<div id="tab2" class="tab  active">
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
							<div class="card card-bottom">
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
						<!--<div id="pagination" class="pagination"></div>-->
						<div id="" class="pagination"><?php echo ($page); ?></div>
					</div>
				</div>


			</div>

		</div>
	</div>

	<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/zepto.min.js' charset='utf-8'></script>
	<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm.min.js' charset='utf-8'></script>
	<script type='text/javascript' src='<?php echo (ADMIN_JS); ?>/sm-extend.min.js' charset='utf-8'></script>
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
//        new myPagination({
//            id: 'pagination2',
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