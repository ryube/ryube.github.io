<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
<body>
	<section id="wrapper">
		<header id="header" >
			<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/header_memr.php"); ?>
		</header>
		<section id="contents_wrap">
			<div class="contents_width">
				<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/content_round.php"); ?>
				<nav id="left">
					<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/memr_menu.php"); ?>
				</nav>
				<section id="contents">
					<div class="contents_padding">
						<article class="contents_top">
							<div class="contents_top_left">
								<h2 class="contents_title"><em>Setting</em></h2>
							</div>
							<div class="contents_top_right">
								<!-- <div class="search_wrap">
									<div class="combobox">
										<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
										<div class="combobox_list" style="display:none;">
											<ul>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
										</ul>
										</div>
									</div><div class="search">
										<input type="text" placeholder="Search" />
										<div class="search_suggest">
											<ul>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">optionoptionoptionoptionoptionoptionoptionoptionoption</span></a></li>
											</ul>
										</div>									
										<a href="#" class="search_btn">Search</a>
									</div>
								</div> -->
							</div>
						</article>
						<article class="contents_layout">
							<section class="contents_layout_detail_wrap memr_setting"><!--  add class memr_setting -->
								<h3 class="contents_layout_detail_head">Contact Information</h3>
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Office</span></th>
												<td>
													<input type="text" value="" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Mobile</span></th>
												<td>
													<input type="text" value="" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">E-mail</span></th>
												<td>
													<input type="text" value="" class="info_type1_input_width">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<h3 class="contents_layout_detail_head">Sign in Policy</h3>
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Sing in Tool</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="signin_tool_01"><label for="signin_tool_01">ID/PW</label></span>
													<span class="info_type1_radio"><input type="radio" id="signin_tool_02"><label for="signin_tool_02">ID</label></span>
													<span class="info_type1_radio"><input type="radio" id="signin_tool_03"><label for="signin_tool_03">ID/PW or ID Card</label></span>
													<span class="info_type1_radio"><input type="radio" id="signin_tool_04"><label for="signin_tool_04">ID/PW and ID Card</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">접속허용 기기</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="signin_device_01"><label for="signin_device_01">All Device</label></span>
													<span class="info_type1_radio"><input type="radio" id="signin_device_02"><label for="signin_device_02">Registered Device</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">접속허용 지역</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="signin_area_01"><label for="signin_area_01">모두 허용</label></span>
													<span class="info_type1_radio"><input type="radio" id="signin_area_02"><label for="signin_area_02">병원 내부에서만 허용</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Auto Logoff</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="signin_logoff_01"><label for="signin_logoff_01">사용안함</label></span>
													<span class="info_type1_radio"><input type="radio" id="signin_logoff_02"><label for="signin_logoff_02">개인설정</label></span>
													<span class="info_type1_radio combo"><input type="radio" id="signin_logoff_03"><label for="signin_logoff_03">중앙 설정</label>
														<div class="combobox">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
													</span>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<h3 class="contents_layout_detail_head">Options</h3>
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Auto approval</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="opt_approval_01"><label for="opt_approval_01">Yes</label></span>
													<span class="info_type1_radio"><input type="radio" id="opt_approval_02"><label for="opt_approval_02">No</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Auto Screen Lock</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="opt_screenlock_01"><label for="opt_screenlock_01">사용 안함</label></span>
													<span class="info_type1_radio"><input type="radio" id="opt_screenlock_02"><label for="opt_screenlock_02">개인설정</label></span>
													<span class="info_type1_radio combo"><input type="radio" id="opt_screenlock_03"><label for="opt_screenlock_03">중앙 설정</label>
														<div class="combobox">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
													</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Color Setting</span></th>
												<td>
													<span class="color_pick_wrap">
														<span class="color_pick color1" id="color_setting_01"></span><label for="color_setting_01">Vital Sign Graph</label>
														<div class="color_pick_layer">
															<h5>Select Color</h5>
															<div class="color_pick_layer_selector">
																<ul>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
																	<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
																</ul>
															</div>
														</div>
													</span>
													<span class="color_pick_wrap">
														<span class="color_pick color2" id="color_setting_02"></span><label for="color_setting_02">Allergy</label>
													</span>
													<span class="color_pick_wrap">
														<span class="color_pick color3" id="color_setting_03"></span><label for="color_setting_03">RH-</label>
													</span>
													<span class="color_pick_wrap">
														<span class="color_pick color4" id="color_setting_04"></span><label for="color_setting_04">감염환자</label>
													</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Samsung Package</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="opt_samsung_package_01"><label for="opt_samsung_package_01">사용함</label></span>
													<span class="info_type1_radio"><input type="radio" id="opt_samsung_package_02"><label for="opt_samsung_package_02">사용 안함</label></span>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<h3 class="contents_layout_detail_head">Management</h3>
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">User</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="management_user_01"><label for="management_user_01">Disalbe</label></span>
													<span class="info_type1_radio"><input type="radio" id="management_user_02"><label for="management_user_02">Enable</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Orgs</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="management_orgs_01"><label for="management_orgs_01">Disalbe</label></span>
													<span class="info_type1_radio"><input type="radio" id="management_orgs_02"><label for="management_orgs_02">Enable</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Device</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="management_device_01"><label for="management_device_01">Disalbe</label></span>
													<span class="info_type1_radio"><input type="radio" id="management_device_02"><label for="management_device_02">Enable</label></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="contents_layout_detail_bot_btnsec">
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
