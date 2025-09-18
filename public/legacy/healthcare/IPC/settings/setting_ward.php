<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<body>
	<section id="wrapper">
		<header id="header" >
			<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/header_ipc.php"); ?>
		</header>
		<section id="contents_wrap">
			<div class="contents_width">
				<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/content_round.php"); ?>
				<nav id="left">
					<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/ipc_menu.php"); ?>
				</nav>
				<section id="contents">
					<div class="contents_padding">
						<article class="contents_top">
							<div class="contents_top_left">
								<h2 class="contents_title"><em>Ward Settings</em></h2>
							</div>
							<div class="contents_top_right">

							</div>
						</article>
						<article class="contents_layout">
							<section class="contents_layout_detail_wrap">
								<hr class="detail_divider">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Ward Name</span></th>
												<td>
													<input type="text" value="" class="info info_type1_input_width">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Contact Info</span></th>
												<td>
													<div class="info_type1_phone_num">
														<input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class="">
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Sign in Image</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="setting_img_type_01"><label for="setting_img_type_01">Default 선택</label></span>
													<span class="info_type1_radio"><input type="radio" id="setting_img_type_02"><label for="setting_img_type_02">직접 올리기</label></span>
													<div class="info_type1_setting_img_select_wrap">
														<div class="setting_img_select">
															<p class="setting_img_select_view">
																<img src="" alt="" />
															</p>
															<ul class="setting_img_select_list">
																<li>
																	<p class="list_radio"><input type="radio" id="setting_img01" /></p>
																	<div class="list_img"><label for="setting_img01"><img src="" alt="" /></label></div>
																	<p class="list_name">IMG 01</p>
																</li>
																<li>
																	<p class="list_radio"><input type="radio" id="setting_img02" /></p>
																	<div class="setting_img_list_img"><label for="setting_img02"><img src="" alt="" /></label></div>
																	<p class="setting_img_list_name">IMG 02</p>
																</li>
																<li>
																	<p class="list_radio"><input type="radio" id="setting_img03" /></p>
																	<div class="setting_img_list_img"><label for="setting_img03"><img src="" alt="" /></label></div>
																	<p class="setting_img_list_name">IMG 03</p>
																</li>
																<li>
																	<p class="list_radio"><input type="radio" id="setting_img04" /></p>
																	<div class="setting_img_list_img"><label for="setting_img04"><img src="" alt="" /></label></div>
																	<p class="setting_img_list_name">IMG 04</p>
																</li>
																<li>
																	<p class="list_radio"><input type="radio" id="setting_img05" /></p>
																	<div class="setting_img_list_img"><label for="setting_img05"><img src="" alt="" /></label></div>
																	<p class="setting_img_list_name">IMG 05</p>
																</li>
																<li>
																	<p class="list_radio"><input type="radio" id="setting_img06" /></p>
																	<div class="setting_img_list_img"><label for="setting_img06"><img src="" alt="" /></label></div>
																	<p class="setting_img_list_name">IMG 06</p>
																</li>
															</ul>
														</div>
														<div class="setting_img_upload">
															<p class="setting_img_upload_info">권장 Size 200*200px. JPG, PNG, GIF only</p>
															<span class="input_file_wrap">
																<input type="text" value="File select" class="info" id="fileNameRecive">
																<a href="#" class="btn"><span>Browse</span>
																	<input type="file" id="">
																</a>
																<a href="#" class="btn"><span>Register</span></a>
															</span>
														</div>

													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Greeting Text</span></th>
												<td>
													<span class="info_type1_txt_count_wrap">
														<input type="text" value="Welcome to Samsung Hospital!" class="info info_type1_input_greeting">
														<span class="info_type1_txt_count">0 / 400 byte</span>
													</span>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<hr class="detail_divider">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Auto Lock</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="setting_autolock01"><label for="setting_autolock01">Every 10 Minute</label></span>
													<span class="info_type1_radio"><input type="radio" id="setting_autolock02"><label for="setting_autolock02">Every 30 Minute</label></span>
													<span class="info_type1_radio"><input type="radio" id="setting_autolock03"><label for="setting_autolock03">Every 1 hour</label></span>
													<span class="info_type1_radio"><input type="radio" id="setting_autolock04"><label for="setting_autolock04">사용안함</label></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Ward Password</span></th>
												<td>
													<input type="text" value="" class="info info_type1_input_width">
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class="contents_layout_detail_bot_btnsec">
									<a href="#" class="btn"><span>Default</span></a>
									<a href="#" class="btn"><span>Save</span></a>
									<a href="#" class="btn"><span>Cancel</span></a>									
								</div>
							</section>
						</article>
					</div>
				</section>
			</div>
		</section>
		<footer id="footer">
			<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/foot.php"); ?>
		</footer>	

	</section>
</body>
</html>
