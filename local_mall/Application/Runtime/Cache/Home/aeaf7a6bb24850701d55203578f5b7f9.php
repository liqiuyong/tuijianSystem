<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>订单管理</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="<?php echo __HOME__IMG__;?>favicon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo __HOME__IMG__;?>app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="<?php echo __HOME__CSS__;?>amazeui.min.css"/>
  <link rel="stylesheet" href="<?php echo __HOME__CSS__;?>admin.css">
</head>

<style>
    /* 分页 */
    .page .current,.page a,.page a:hover,.page span{display:inline-block;margin-right:2px;padding:0 10px;height:25px;line-height:25px;vertical-align:middle}
    .page a,.page span{color:#404548;border:1px solid #D7DBDC;background-color:#F6FFFF}
    .page .current,.page a:hover{text-decoration:none;color:#FFF;background-color:#337ab7;vertical-align:middle}
    .page .next,.page .prev{font-family:"宋体"}
</style>


<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->


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

  <!-- sidebar start -->

  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">订单管理</strong><small></small></div>
    </div>

      <form>

          <div class="am-u-md-2  am-cf">
              <span  class="">订单状态:</span>
              <div class="am-fr">

                  <div class="am-input-group am-input-group-sm">
                      <select name="charge_status">
                          <option value="">--请选择--</option>
                          <option value="1" <?php if($_GET['charge_status'] == 1): ?>selected<?php endif; ?>>未支付</option>
                          <option value="2" <?php if($_GET['charge_status'] == 2): ?>selected<?php endif; ?>>已支付待审核</option>
                          <option value="3" <?php if($_GET['charge_status'] == 3): ?>selected<?php endif; ?>>审核通过</option>
                          <option value="4" <?php if($_GET['charge_status'] == 4): ?>selected<?php endif; ?>>审核不通过</option>
                      </select>

                  </div>
              </div>
          </div>

      <div class="am-u-md-2 am-cf">
          <div class="am-fr">
              <div class="am-input-group am-input-group-sm">
                  <input id="" name="order_num" placeholder="订单号" type="text" class="" value="<?php if($_GET['order_num']): echo ($_GET['order_num']); endif; ?>">
              </div>
          </div>
      </div>

      <div class="am-u-md-2 am-cf">
          <div class="am-fr">
              <div class="am-input-group am-input-group-sm">
                  <input id="" name="phone" placeholder="充值号码" type="text" class="" value="<?php if($_GET['phone']): echo ($_GET['phone']); endif; ?>">
              </div>
          </div>

      </div>



      <div class="am-u-md-6 am-cf">
          <div class="am-fr">
              <div class="am-input-group am-input-group-sm">
                  <span class="am-input-group-btn">
                  <button id="" class="am-btn am-btn-success" type="submit">搜索</button>
                </span>
              </div>
          </div>
      </div>
      </form>

    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-striped am-table-hover table-main">
          <thead>
          <tr>
              <th>创建时间</th>
              <th>推荐人</th>
              <th>订单号</th>
              <th>代理级别</th>
              <?php if($_GET['is_charge'] == 2): ?><th>提现金额</th>
                  <?php else: ?>
                  <th>金额</th><?php endif; ?>
              <th>手机</th>
              <th>姓名</th>
              <th>银行卡</th>
              <th>银行信息</th>
              <?php if($_GET['is_charge'] == 2): ?><th>税后金额</th>
                    <?php else: ?>
                  <th>充值金额</th><?php endif; ?>
              <th>订单状态</th>
              <th>支付渠道</th>
              <th>操作</th>
          </tr>
          </thead>

          <tbody>



              <?php if(is_array($order_list)): $i = 0; $__LIST__ = $order_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

                      <td><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></td>
                      <td><?php echo ((isset($vo["p_real_name"]) && ($vo["p_real_name"] !== ""))?($vo["p_real_name"]):'--'); ?></td>
                      <td><?php echo ($vo["order_num"]); ?></td>
                      <td><?php echo ($vo["level"]); ?></td>
                      <td><?php echo ($vo["charge_money"]); ?></td>
                      <td><?php echo ($vo["phone"]); ?></td>
                      <td><?php echo ($vo["real_name"]); ?></td>
                      <td><?php echo ($vo["charge_bankcard"]); ?></td>
                      <td><?php echo ($vo["charge_bank"]); ?></td>
                      <?php if($_GET['is_charge'] == 2): ?><td><?php echo ($vo['charge_money']*89/100); ?></td>
                          <?php else: ?>
                          <td><?php echo ($vo['charge_money']); ?></td><?php endif; ?>

                      <td>
                          <?php if($vo["charge_status"] == 1): ?>未支付<?php endif; ?>
                          <?php if($vo["charge_status"] == 2): ?>已支付待审核<?php endif; ?>
                          <?php if($vo["charge_status"] == 3): ?>审核通过<?php endif; ?>
                          <?php if($vo["charge_status"] == 4): ?>审核不通过<?php endif; ?>


                      </td>
                      <td>
                          <?php if($vo["charge_type"] == 1): ?>银行卡<?php endif; ?>
                          <?php if($vo["charge_type"] == 2): ?>支付宝<?php endif; ?>

                      </td>
                      <td>
                          <div class="am-btn-toolbar">
                              <div class="am-btn-group am-btn-group-xs">
                                  <!--<?php if($vo["charge_status"] == 2): ?>-->
                                    <!--<a href="<?php echo U('change_chargeStatus');?>?charge_status=3&order_num=<?php echo ($vo["order_num"]); ?>&is_charge=<?php echo ($_GET['is_charge']); ?>" class='am-btn am-btn-default am-btn-xs am-text-secondary'><span class='am-icon-pencil-square-o'></span>通过</a>-->
                                  <!--<?php endif; ?>-->
                                  <!--<?php if($vo["charge_status"] != 2): ?>-->
                                    <!--<a href="<?php echo U('change_chargeStatus');?>?charge_status=4&order_num=<?php echo ($vo["order_num"]); ?>&is_charge=<?php echo ($_GET['is_charge']); ?>"  class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span>不通过</a>-->
                                  <!--<?php endif; ?>-->

                                    <?php if($vo["charge_status"] == 2): ?><a href="<?php echo U('change_chargeStatus');?>?charge_status=3&order_num=<?php echo ($vo["order_num"]); ?>&is_charge=<?php echo ($_GET['is_charge']); ?>" class='am-btn am-btn-default am-btn-xs am-text-secondary'><span class='am-icon-pencil-square-o'></span>通过</a>


                                      <a href="<?php echo U('change_chargeStatus');?>?charge_status=4&order_num=<?php echo ($vo["order_num"]); ?>&is_charge=<?php echo ($_GET['is_charge']); ?>"  class="am-btn am-btn-default am-btn-xs am-text-danger"><span class="am-icon-trash-o"></span>不通过</a><?php endif; ?>
                              </div>
                          </div>

                      </td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>



          </tbody>

        </table>
          <div class="am-cf">
              <span>已为您查到<?php echo ($count); ?>条记录...</span>
          </div>
          <div class="am-cf">
              <div class="am-pagination">

                  <div class="page">
                      <?php echo ($page); ?>
                  </div>

              </div>
          </div>

      </div>

    </div>

  </div>
  <!-- content end -->

</div>

<!--[if lt IE 9]>
<script src="<?php echo __HOME__JS__;?>jquery1.11.1.min.js"></script>
<script src="<?php echo __HOME__JS__;?>modernizr.js"></script>
<script src="<?php echo __HOME__JS__;?>polyfill/rem.min.js"></script>
<script src="<?php echo __HOME__JS__;?>polyfill/respond.min.js"></script>
<script src="<?php echo __HOME__JS__;?>amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php echo __HOME__JS__;?>jquery.min.js"></script>
<script src="<?php echo __HOME__JS__;?>amazeui.min.js"></script>
<!--<![endif]-->
<script src="<?php echo __HOME__JS__;?>app.js"></script>
<script>

    // 订单数据删除
    function delorder(id) {
        if (window.confirm("确认是否删除本条数据?")){
            window.location.href = "index.php?g=admin&c=index&a=del&t=order&id="+id;
        }
    }



    $("#selbtn").click(function () {

        alert(123);

        var order_num = $("#selinfo").val();

        window.location.href = "<?php echo U('charge_manager');?>"+"?charge_bankcard=6227001935510043149";


    })





</script>
</body>
</html>