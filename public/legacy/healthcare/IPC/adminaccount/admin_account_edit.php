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
								<h2 class="contents_title">Admin Account<span class="contents_title_arrow"></span><em>Edit</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fields</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Account Information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Permission</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="admin_account_type01"><label for="admin_account_type01">Super Admin</label></span>
													<span class="info_type1_radio"><input type="radio" id="admin_account_type02"><label for="admin_account_type02">IT Manager</label></span>
													<span class="info_type1_radio"><input type="radio" id="admin_account_type03"><label for="admin_account_type03">Nurse</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Name</span></span></th>
												<td>
													<input type="text" value="Ann" class="info_type1_input_width">
													<input type="text" value="Hathaway" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">ID</span></span></th>
												<td>
													<input type="text" value="Ann" class="info_type1_input_width">
													<a href="#" class="btn"><span>Check</span></a>
												</td>
											</tr>											
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Password</span></span></th>
												<td>
													<p class="info_type1_cell_split">
														<input type="password" value="Hathaway" class="info_type1_input_width">
													</p>
													<p class="info_type1_cell_split">
														<input type="password" value="Hathaway" class="info_type1_input_width">
													</p>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Employee</span></th>
												<td>
													<a href="#" class="btn"><span>Search</span></a>
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
												<th><span class="ellipsis">ORG</span></th>
												<td>
													<div class="info_type1_cell_split">
														<div class="combobox info_type1_combo_width">
															<a href="#"><span class="combobox_value"><span class="ellipsis">GS</span></span><span class="combobox_icon"></span></a>
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
												<th><span class="ellipsis"><span class="ico_req">Name</span></span></th>
												<td>
													<input type="text" value="Ann" class="info_type1_input_width">
													<input type="text" value="Hathaway" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">E-mail</span></span></th>
												<td>
													<input type="text" value="Ann" class="info_type1_input_width">
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
												<th><span class="ellipsis">Ward</span></th>
												<td>
													<div class="info_type1_ward_sel">
														<ul>
															<li><input type="checkbox" id="admin_acc_wardchk01"><label for="admin_acc_wardchk01"><span class="ellipsis">Ward</span></label></li>
															<li><input type="checkbox" id="admin_acc_wardchk02"><label for="admin_acc_wardchk02"><span class="ellipsis">Ward</span></label></li>
															<li><input type="checkbox" id="admin_acc_wardchk03"><label for="admin_acc_wardchk03"><span class="ellipsis">Ward</span></label></li>
															<li><input type="checkbox" id="admin_acc_wardchk04"><label for="admin_acc_wardchk04"><span class="ellipsis">Ward</span></label></li>
															<li><input type="checkbox" id="admin_acc_wardchk05"><label for="admin_acc_wardchk05"><span class="ellipsis">Ward</span></label></li>
															<li><input type="checkbox" id="admin_acc_wardchk06"><label for="admin_acc_wardchk06"><span class="ellipsis">Ward</span></label></li>
															<li><input type="checkbox" id="admin_acc_wardchk07"><label for="admin_acc_wardchk07"><span class="ellipsis">Ward</span></label></li>
														</ul>
													</div>
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
