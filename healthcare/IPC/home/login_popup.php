<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<body>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:320px; height:; left: 50%; top: 50%; margin:-87px 0 0 -160px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Error</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<article class="layerpop_body_message">
						<div class="layerpop_body_message_txt">
							<p>올바르지 않은 ID 또는 Password 입니다.<br />
							다시 입력해 주세요.</p>
						</div>  
					</article>
					<div class="layerpop_body_bottom_btn">
				 		<a href="#" class="btn blue"><span>OK</span></a>
				 	</div>
				</div>			 	
			</section>
			<footer class="layerpop_foot">
				<!-- layerpop_foot round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_foot round -->
			</footer>
		</article>
	</section>
	<section id="wrapper">
		<div class="login_padding">
			<section id="login_wrap">
				<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/content_round.php"); ?>
				<h1>
					<img src="/healthcare/images/apps_signin.png" alt="Samsung IPC Admin">
				</h1>
				<article class="login_enter">
					<p class="login_enter_input">
						<input type="text" placeholder="User ID" class="login_enter_id">
						<input type="text" placeholder="Password" class="login_enter_pass">
						<a href="#" class="btn_login disable"><span>Log in</span></a>
					</p>
					<p class="login_enter_opt">
						<span class="login_enter_opt_chk">
							<input type="checkbox">
							Remember ID
						</span>
						<a href="#" class="login_enter_forgotlink">Forgot your ID password?</a>
					</p>
					<p class="login_enter_waring">
						<span class="txt_warning">The password is wrong.</span>
					</p>
				</article>
			</section>
		</div>
		<footer id="footer">
			<div class="footer_width">
				<div class="footer_login">
					<p class="copy">Copyright &copy;2012 Samsung Electronics Co., Ltd. All rights reserved.</p>
				</div>
			</div>
		</footer>
	</section>
</body>
</html>
