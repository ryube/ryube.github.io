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
								<h2 class="contents_title">Device Management<span class="contents_title_arrow"></span><em>Edit</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">is mandatory items</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">User Information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Model</span></span></th>
												<td>
													<input type="text" value="MC603KH" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Ver</span></span></th>
												<td>
													<input type="text" value="6.0.1" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">IMEI</span></span></th>
												<td>
													<input type="text" value="01 242500 189404 2" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Mac</span></span></th>
												<td>
													<input type="text" value="CC:08:E0:59:1F:9D" class="info_type1_input_width">
												</td>
											</tr>											
										</tbody>
									</table>
								</div>
								<hr class="detail_divider" />
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">User Name</span></th>
												<td>
													<div class="info_type1_memr_username_wrap">
														<ul class="info_type1_memr_username_list">
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
															<li>
																<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
															</li>
														</ul>
														<p><a href="#" class="btn info_type1_btn_plus_width"><span><b class="btn_ico_blue_plus"></b></span></a></p>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Email</span></th>
												<td>
													<input type="text" value="User ID" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Mobile</span></th>
												<td>
													<div class="info_type1_phone_num">
														<input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class="">
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Registration</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="add_user_status_01"><label for="memr_device_reg_01">Registred</label></span>
													<span class="info_type1_radio"><input type="radio" id="add_user_status_02"><label for="memr_device_reg_02">Unregistred</label></span>
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
