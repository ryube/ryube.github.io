<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
<body>
	<section id="wrapper">
		<div class="login_padding">
			<section id="login_wrap">
				<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/content_round.php"); ?>
				<h1>
					<img src="/healthcare/images/apps_signin_memr.png" alt="Samsung mEMR Admin Welcome to Samsung mEMR for the Admin !">
				</h1>
				<article class="login_enter">
					<p class="login_enter_input">
						<span class="label_holder" style="display: inline-block; position: relative;/*vari: width: 100%*/">
							<label for="userid">User ID</label>
							<input id="userid" type="text" placeholder="" class="login_enter_id">
						</span>
						<span class="label_holder">
							<label for="password">Password</label>
							<input id="password"type="text" placeholder="" class="login_enter_pass">
						</span>
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
