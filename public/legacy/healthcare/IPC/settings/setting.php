<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<script type="text/javascript">
$(window).load(function() {
	function settingWardHeight() {
		log($("#settingLayoutRight").innerHeight())
		var rightHeight = $("#settingLayoutRight").innerHeight(); 
		$("#settingLayoutLeft").css('height', rightHeight);
	};
	settingWardHeight();
});

</script>
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
								<h2 class="contents_title"><em>General Settings</em></h2>
							</div>
							<div class="contents_top_right">

							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Add</span></a>
								</span>
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>delete</span></a>
									<a href="#" class="btn"><span>Edit</span></a>
								</span>
							</div>
							<div class="contents_option_right">
								
							</div>
						</article>
						<article class="contents_layout">
							<section class="contents_layout_detail_wrap">
								<div id="settingLayoutLeft" class="layout_setting_2col left">
									<div class="group_tree">
										<ul>
											<li class="on"><div><input type="checkbox"><span class="group_tree_item">Default</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">Ward</span></div></li>
										</ul>
									</div>	

								</div>
								<div id="settingLayoutRight"class="layout_setting_2col right">
									<div class="detail_type1">
										<table class="info_type1">
											<colgroup>
												<col class="col_info_th">
												<col class="col_info_td">
											</colgroup>
											<tbody>
												<tr>
													<th><span class="ellipsis">Hospital Name</span></th>
													<td>
														<input type="text" placeholder="Hospital Name" class="info info_type1_input_width">
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">Logo</span></th>
													<td>
														<div>
															<img src="/healthcare/images/thumb/thumb_default.png" alt="" class="setting_logo">
														</div>
														<div class="setting_img_upload">
															<span class="input_file_wrap">
																<input type="text" placeholder="File select" class="info" id="fileNameRecive">
																<a href="#" class="btn"><span>Browse</span>
																	<input type="file" id="">
																</a>
																<a href="#" class="btn"><span>Register</span></a>
															</span>
															<p class="setting_img_upload_info">권장 Size 200*200px. JPG, PNG, GIF only</p>
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
														<div class="info_type1_setting_img_select_wrap">
															<div class="setting_img_select">
																<p class="setting_img_select_view">
																	<img src="/healthcare/images/thumb/img_home.png" alt="" />
																</p>
																<ul class="setting_img_select_list">
																	<li>
																		
																		<div class="setting_img_list_img">
																			<span class="btn_input_close"></span>
																			<label for="setting_img01"><img src="" alt="" /></label>
																		</div>
																		<p class="setting_img_list_name"><input type="radio" id="setting_img01" />IMG 01</p>
																	</li>
																	<li>
																		
																		<div class="setting_img_list_img">
																			<span class="btn_input_close"></span>
																			<label for="setting_img01"><img src="" alt="" /></label>
																		</div>
																		<p class="setting_img_list_name"><input type="radio" id="setting_img02" />IMG 02</p>
																	</li>
																	<li>
																		
																		<div class="setting_img_list_img"><label for="setting_img03"><img src="" alt="" /></label></div>
																		<p class="setting_img_list_name"><input type="radio" id="setting_img03" />IMG 03</p>
																	</li>
																	<li>
																		
																		<div class="setting_img_list_img"><label for="setting_img04"><img src="" alt="" /></label></div>
																		<p class="setting_img_list_name"><input type="radio" id="setting_img04" />IMG 04</p>
																	</li>
																	<li>
																		
																		<div class="setting_img_list_img"><label for="setting_img05"><img src="" alt="" /></label></div>
																		<p class="setting_img_list_name"><input type="radio" id="setting_img05" />IMG 05</p>
																	</li>
																	<li>
																		
																		<div class="setting_img_list_img"><label for="setting_img06"><img src="" alt="" /></label></div>
																		<p class="setting_img_list_name"><input type="radio" id="setting_img06" />IMG 06</p>
																	</li>
																</ul>
															</div>
															<div class="setting_img_upload">
																
																<span class="input_file_wrap">
																	<input type="text" placeholder="File select" class="info" id="fileNameRecive">
																	<a href="#" class="btn"><span>Browse</span>
																		<input type="file" id="">
																	</a>
																	<a href="#" class="btn"><span>Register</span></a>
																</span>
																<p class="setting_img_upload_info">권장 Size 200*200px. JPG, PNG, GIF only</p>
															</div>
									
														</div>
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">Greeting Text</span></th>
													<td>
														<span class="info_type1_txt_count_wrap">
															<input type="text" placeholder="Welcome to Samsung Hospital!">
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
													<th><span class="ellipsis">General Password</span></th>
													<td>
														<input type="text" placeholder="" class="info info_type1_input_width">
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">자동 날짜 및 시간</span></th>
													<td>
														<input type="checkbox" placeholder="" class="">
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">날짜 설정</span></th>
													<td>
														<div class="info_type1_setting_combo_wrap">
															<div class="combobox">
																<a href="#"><span class="combobox_value"><span class="ellipsis">2012</span></span><span class="combobox_icon"></span></a>
																<div class="combobox_list">
																	<ul>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	</ul>
																</div>
															</div>
															<div class="combobox">
																<a href="#"><span class="combobox_value"><span class="ellipsis">12</span></span><span class="combobox_icon"></span></a>
																<div class="combobox_list">
																	<ul>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	</ul>
																</div>
															</div>
															<div class="combobox">
																<a href="#"><span class="combobox_value"><span class="ellipsis">12</span></span><span class="combobox_icon"></span></a>
																<div class="combobox_list">
																	<ul>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">시간 설정</span></th>
													<td>
														<div class="info_type1_setting_combo_wrap">
															<div class="combobox">
																<a href="#"><span class="combobox_value"><span class="ellipsis">AM</span></span><span class="combobox_icon"></span></a>
																<div class="combobox_list">
																	<ul>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	</ul>
																</div>
															</div>
															<div class="combobox">
																<a href="#"><span class="combobox_value"><span class="ellipsis">6</span></span><span class="combobox_icon"></span></a>
																<div class="combobox_list">
																	<ul>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	</ul>
																</div>
															</div>
															<div class="combobox">
																<a href="#"><span class="combobox_value"><span class="ellipsis">00</span></span><span class="combobox_icon"></span></a>
																<div class="combobox_list">
																	<ul>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																		<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	</ul>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">자동 시간대</span></th>
													<td>
														<input type="checkbox" placeholder="" class="">
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">표준 시간대 선택</span></th>
													<td>
														<div class="combobox info_type1_combo_width">
															<a href="#"><span class="combobox_value"><span class="ellipsis">한국 (서울)</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">24시간 형식 사용</span></th>
													<td>
														<input type="checkbox" placeholder="" class="">
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">날짜 형식 선택</span></th>
													<td>
														<span class="info_type1_radio"><input type="radio" id="setting_daytype01"><label for="setting_daytype01">MM/DD/YYYY</label></span>
														<span class="info_type1_radio"><input type="radio" id="setting_daytype02"><label for="setting_daytype02">DD/MM/YYYY</label></span>
														<span class="info_type1_radio"><input type="radio" id="setting_daytype03"><label for="setting_daytype03">YYYY/MM/DD</label></span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
								<div class="contents_layout_detail_bot_btnsec setting">
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
