<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>用户登陆</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="<?php echo (ADMIN_CSS); ?>/bootstrap.min.css" />
	
	</head>
	<style type="text/css">
		*,html,body{
			width: 100%;
			margin: 0;
			padding: 0;
			color: white;
		}
		.container-fluid,.row{
			margin: 0;
			padding: 0;
		}


		.login-div{

			padding:40% 10% 10% 10%;
			position: absolute;
			left: 0;
		}

		.login-div div{
			position: relative;
		}

		.login-div input,.login-div select{

			color: white;
			display: inline-block;
			background-color:rgba(255,255,255,0);
			border: none;
		}
		
		
		.form-control{
			height: 55px;
		}
		
		
		.login-div .input-right-cont{
			display: inline-block;
			position: absolute;
			top:6px ;
			right: 0px;
			color: white;
			margin: 0 auto;
			width: 25%;
			text-align: right;
			height: 100%;
		}
		
		
		
		/*修改多选框的样式*/
		.inputCheck {
			position: absolute;
			width: 16px;
			height: 16px;		
						
			visibility: hidden;
		}
		.inputCheck+label {
			display: inline-block;
			width: 16px;
			height: 16px;
			background: url(<?php echo (ADMIN_IMG); ?>/weixuan.png) no-repeat center center;
			background-size:16px 16px;
		}
		.inputCheck:checked+label {background: url(<?php echo (ADMIN_IMG); ?>/yixuan.png) no-repeat center center;background-size:16px 16px;} 
		
		label{
			margin-bottom: 0;
		}
		/*修改多选框的样式 end*/
		
		/*修改下拉框的样式*/
		#myselect{	
			border: none;
			appearance:none;  
			-moz-appearance:none;   /*去除Firefox浏览器的默认下拉图片*/
			-webkit-appearance:none;  /*去除chrome浏览器的默认下拉图片*/
			background: url(<?php echo (ADMIN_IMG); ?>/dakai.png) no-repeat right center; 
		}

		ul li{
			display: inline-block;
			float: left;
			width: 33%;
		
			font-size: 18px;

		}

		.form-group ul{
			margin-top: 20px;
		}



		@media only screen and (max-width: 500px){
			.form-group {
				margin-bottom: 10px;
			}
			.form-control {
				height: 45px;
			}
			.form-group a{
				font-size: 14px;
			}

			.form-group ul{
				margin-top: 10px;
			}

		}

	</style>
	<body>
		
	
	<div class="main container-fluid" style="">
		
		<!--背景图-->
		<div id="" style="position:absolute; width:100%; height:100%; z-index:-1">
			<img src="<?php echo (ADMIN_IMG); ?>/beijing.png" width="100%" height="100%"/>
		</div>
		
		<!--内容区域-->
		<div class="" style="margin-top: 50px;">
			<div class="row text-center">
				<div class="col-lg-offset-4 col-lg-4 col-sm-offset-2 col-sm-8 col-xs-12" style="position: relative;">
					<div class="" style="width: 100%;">
						<img src="<?php echo (ADMIN_IMG); ?>/denglu_bg.png" width="100%" />
					</div>

					<!--注册框区域   -->
					<div class="login-div" style="top: 0;">
						
						<div  class="" style="width: 100%;height: 100%;">
							<form  onsubmit="return login();" action="" method="post" style="width: 100%;">
							 
							  	<div class="form-group">
								    <input type="text" class="form-control" maxlength="11" name="username" id="username" placeholder="请输入11位手机号码">
							  	</div>
							
						
							  	<div class="form-group">
								    <input type="password" class="form-control" id="password" name="password" placeholder="请输入8-20位数字,字母组合的密码">
							 
							  	</div>
							  	
							  
							    <div class="form-group">
								    <input type="text" class="form-control" maxlength="4" id="verify_code" name="verify_code" placeholder="请输入验证码">
								    <div class="input-right-cont" >

										<img class="verify"  id="verify_code_img" src="<?php echo U('get_code');?>" onclick="this.src='<?php echo U('get_code');?>?d='+Math.random()" width="100px" height="40px"/>

									</div>
							  	</div>
							  	
							  	<!--登入按钮-->
							  	

							  	
							  	
							  	<div class="form-group" style="padding-left: 19%;padding-right:19% ;margin-top: 30px;">
							  		<button type="submit" style="background-color:rgba(255,255,255,0);border: none;"><img id="login-btn" src="<?php echo (ADMIN_IMG); ?>/dengru button.png" width="100%" ></button>
							  		
						
									<ul style="">
							  			<li><a href="./register.html">注册</a></li>
							  			<li><a>忘记密码</a></li>
							  			<li><a>&nbsp;语言</a></li>
									</ul>
							  	</div>  
							
							</form>
						
						</div>
		
					</div>
				</div>
				
				
				
				
				
				
			</div>			
		</div>

		
		
		
	</div>
	
	
	
	
	
	
	
	
	</body>
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/jquery-3.1.0.js" ></script>
	<script type="text/javascript" src="<?php echo (ADMIN_JS); ?>/bootstrap.min.js" ></script>
	<script type="text/javascript">



		function login() {

            var user = $("#username").val();
            var pwd  = $("#password").val();
            var code = $("#verify_code").val();

            $.post(
                "<?php echo U('login');?>",
                {
                    username : user,
                    password : pwd,
                    verify_code : code
                },
                function (data) {
//                    $("#info").html(data);
                    if (data.status == 0){
//                        $("#info").html(data.msg);
                        alert(data.msg);
                        $("#verify_code").val("");
                        $(".verify").attr('src',"<?php echo U('get_code');?>");
                    }else if (data.status == 1){
//                        $("#info").html(data.msg);
                        alert(data.msg);
//                        window.location.href = "./index.html";
                        window.location.href = "./router.html";
                    } else {
//                        $("#info").html("");
                    }
                }
                , 'json'
            )

            return false;
        }


        $("#login-btn").click(function () {
            var user = $("#username").val();
            var pwd  = $("#password").val();
            var code = $("#verify_code").val();

            $.post(
                "<?php echo U('login');?>",
                {
                    username : user,
                    password : pwd,
                    verify_code : code
                },
                function (data) {
//                    $("#info").html(data);
                    if (data.status == 0){
//                        $("#info").html(data.msg);
                        alert(data.msg);
                        $("#verify_code").val("");
                        $(".verify").attr('src',"<?php echo U('get_code');?>");
                    }else if (data.status == 1){
//                        $("#info").html(data.msg);
                        alert(data.msg);
//                        window.location.href = "/index.html";
                        window.location.href = "./router.html";
                    } else {
//                        $("#info").html("");
                    }
                }
                , 'json'
            )


			return false;


        })
		
	</script>
	
	
</html>