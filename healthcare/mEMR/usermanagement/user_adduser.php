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
								<h2 class="contents_title">User<span class="contents_title_arrow"></span><em>Add a user</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fileds</span>									
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
												<th><span class="ellipsis"><span class="ico_req">User Name</span></span></th>
												<td>
													<span class="label_holder">
														<label for="username01">First name</label>
														<input id="username01" type="text" value="" class="info info_type1_input_width">
													</span>
													<span class="label_holder">
														<label for="username02">Last name</label>
														<input id="username02" type="text" value="" class="info info_type1_input_width">
													<span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Email Address</span></span></th>
												<td>
													<p class="info_type1_cell_split">
														<input type="text" value="Ann" class="info_type1_input_width">
														<a href="#" class="btn"><span>Check</span></a>
													</p>
													<p class="info_type1_cell_split">
														<input type="checkbox" id="idforemail"><label for="idforemail">Use this email address for User ID</label>
													</p>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">ID</span></span></th>
												<td>
													<input type="text" value="User ID" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Password</span></span></th>
												<td>
													<p class="info_type1_cell_split">
														<input type="text" value="Password" class="info info_type1_input_width">
													</p>
													<p class="info_type1_cell_split">
														<input type="text" value="Reenter Password" class="info info_type1_input_width">
													</p>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Status</span></span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="add_user_status_01"><label for="add_user_status_01">Activated</label></span>
													<span class="info_type1_radio"><input type="radio" id="add_user_status_02"><label for="add_user_status_02">Inactivated</label></span>
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
												<th><span class="ellipsis">Mobile</span></th>
												<td>
													<div class="info_type1_phone_num">
														<input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class="">
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Preliminary Email</span></th>
												<td>
													<input type="text" value="User ID" class="info info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">ORG</span></th>
												<td>
													<div class="info_type1_cell_split">
														<div class="combobox info_type1_combo_width">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Unassigned</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="info_type1_cell_split">
														<a href="#" class="btn info_type1_btn_plus_width"><span><b class="btn_ico_blue_plus"></b></span></a>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Group</span></th>
												<td>
													<div class="combobox on info_type1_combo_width">
														<a href="#"><span class="combobox_value"><span class="ellipsis">Select a Group</span></span><span class="combobox_icon"></span></a>
														<div class="combobox_list">
															<ul>
																<li><a href="#"><span class="ellipsis">option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1option 1</span></a></li>
																<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																<li><a href="#"><span class="ellipsis">option 1</span></a></li>
															</ul>
														</div>
													</div>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class="contents_layout_detail_bot_btnsec">
									<a href="#" class="btn blue"><span>Save and Send Invitation</span></a>
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
