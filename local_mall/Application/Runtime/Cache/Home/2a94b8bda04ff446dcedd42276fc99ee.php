<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>后台管理系统</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="<?php echo __HOME__IMG__;?>favicon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo __HOME__IMG__;?>app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="<?php echo __HOME__CSS__;?>amazeui.min.css"/>
  <link rel="stylesheet" href="<?php echo __HOME__CSS__;?>admin.css">
</head>
<body>


<header class="am-topbar admin-header">
    <div class="am-topbar-brand">
        <strong></strong> <small>管理员系统</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <!--<li><a href="index.php"><span class="am-icon-envelope-o"></span> 回到首页</a></li>-->
            <!--<li><a href="index.php"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>-->
            <!--<li class="am-dropdown" data-am-dropdown>-->
            <!--<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">-->
            <!--<span class="am-icon-users"></span> 用户 <span class="am-icon-caret-down"></span>-->
            <!--</a>-->
            <!--<ul class="am-dropdown-content">-->
            <!--<li><a href="#"><span class="am-icon-user"></span> 资料</a></li>-->
            <!--<li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>-->
            <!--<li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>-->
            <!--</ul>-->
            <!--</li>-->
            <li><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">

  
    <div class="admin-sidebar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo U('index');?>"><span class="am-icon-home"></span> 首页<?php if(ACTION_NAME == 'index'): ?><span class='am-icon-star am-fr am-margin-right admin-icon-yellow'></span><?php endif; ?></a></li>


            <li><a href="<?php echo U('user_manager');?>" class="am-cf"><span class="am-icon-check"></span> 用户信息<?php if(ACTION_NAME == 'user_manager'): ?><span class='am-icon-star am-fr am-margin-right admin-icon-yellow'></span><?php endif; ?></a></li>
            <li><a href="<?php echo U('charge_manager',array('is_charge'=>1));?>"><span class="am-icon-puzzle-piece"></span> 充值管理<?php if((ACTION_NAME == 'charge_manager') AND ($_GET['is_charge'] == 1)): ?><span class='am-icon-star am-fr am-margin-right admin-icon-yellow'></span><?php endif; ?></a></li>
            <li><a href="<?php echo U('charge_manager',array('is_charge'=>2));?>"><span class="am-icon-table"></span>提款申请<?php if(ACTION_NAME == 'charge_manager' AND $_GET['is_charge'] == 2): ?><span class='am-icon-star am-fr am-margin-right admin-icon-yellow'></span><?php endif; ?></a></li>
            <li><a href=""><span class="am-icon-pencil-square-o"></span>商城配置 </a></li>
            <li><a href=""><span class="am-icon-pencil-square-o"></span> 道具商城 </a></li>

            <li><a href="index.php?g=admin&c=user&a=checkout"><span class="am-icon-sign-out"></span> 注销</a></li>
        </ul>
    </div>


<div class="admin-content">

  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small class="am-text-primary am-text-lg">相关数据统计</small></div>
  </div>

  <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
    <li><a href="<?php echo U('user_manager');?>" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>总用户数<br/><?php echo ((isset($totle_user) && ($totle_user !== ""))?($totle_user):0); ?></a></li>
    <li><a href="<?php echo U('charge_manager');?>" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>订单数<br/><?php echo ((isset($totle_order) && ($totle_order !== ""))?($totle_order):0); ?></a></li>
    <li><a href="<?php echo U('charge_manager');?>" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br/>充值总额<br/><?php echo ((isset($totle_charge) && ($totle_charge !== ""))?($totle_charge):0); ?></a></li>
    <li><a href="" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>提现总额<br/><?php echo ((isset($totle_getCash) && ($totle_getCash !== ""))?($totle_getCash):0); ?></a></li>
  </ul>
</div>
</div>


<script src="<?php echo __HOME__JS__;?>jquery1.11.1.min.js"></script>
<script src="<?php echo __HOME__JS__;?>modernizr.js"></script>
<script src="<?php echo __HOME__JS__;?>polyfill/rem.min.js"></script>
<script src="<?php echo __HOME__JS__;?>polyfill/respond.min.js"></script>
<script src="<?php echo __HOME__JS__;?>amazeui.legacy.js"></script>
<script src="<?php echo __HOME__JS__;?>jquery.min.js"></script>
<script src="<?php echo __HOME__JS__;?>amazeui.min.js"></script>

<script src="<?php echo __HOME__JS__;?>app.js"></script>
</body>
</html>