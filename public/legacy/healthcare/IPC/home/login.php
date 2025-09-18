<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<body>
	<section id="wrapper">
		<div class="login_padding">
			<section id="login_wrap">
				<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/content_round.php"); ?>
				<h1>
					<img src="/healthcare/images/apps_signin.png" alt="Samsung IPC Admin">
					<p>'Welcome to Samsung mEMR for the Admin!'</p>
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
