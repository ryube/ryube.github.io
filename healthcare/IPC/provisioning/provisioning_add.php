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
								<h2 class="contents_title">Admin Account<span class="contents_title_arrow"></span><em>Anne Hathaway</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fields</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Provisioning Information</h3>
							<div class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">mEMR Profile</span></span></th>
												<td>
													<input type="text" placeholder="Ann" class="info_type1_input_width">
													<a href="#" class="btn"><span>Check</span></a>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Main Verion</span></span></th>
												<td>
													<input type="text" placeholder="" class="info_type1_input_width">
													<span class="info_type1_verchk_msg">Profile Last Version : mEMR Profile 10.0</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Main file</span></span></th>
												<td>
													<span class="input_file_wrap">
														<input type="text" placeholder="File Select" class="info">
														<a href="#" class="btn"><span>Browse</span>
															<input type="file">
														</a>
													</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Status</span></span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="provisioning_status01"><label for="provisioning_status01">Test</label></span>
													<span class="info_type1_radio"><input type="radio" id="provisioning_status02"><label for="provisioning_status02">Active</label></span>
													<span class="info_type1_radio"><input type="radio" id="provisioning_status03"><label for="provisioning_status03">Inactive</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">General Config File</span></th>
												<td class="vt">
													<div class="list_type2_file_upload">
														<table class="list_type_upload type1">
															<colgroup>
																<col width="20%">
																<col width="90px">
																<col>
															</colgroup>
															<thead>
																<tr>
																	<th><span class="ellipsis">Name</span></th>
																	<th><span class="ellipsis">Version</span></th>
																	<th><span class="ellipsis">File</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<tr>
																		<td><input type="text" class="provi_name_input_width"></td>
																		<td><input type="text" class="provi_ver_input_width"></td>
																		<td class="al">
																			<span class="input_file_wrap">
																				<input type="text" placeholder="File Select" class="provi_file_input_width">
																				<a href="#" class="btn"><span>Browse</span>
																					<input type="file">
																				</a>
																			</span>
																		</td>
																	</tr>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Screen File</span></th>
												<td>
													<div class="list_type2_file_upload">
														<table class="list_type_upload type1">
															<colgroup>
																<col width="20%">
																<col width="90px">
																<col>
															</colgroup>
															<thead>
																<tr>
																	<th><span class="ellipsis">Name</span></th>
																	<th><span class="ellipsis">Version</span></th>
																	<th><span class="ellipsis">File</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<tr>
																		<td><input type="text" class="provi_name_input_width"></td>
																		<td><input type="text" class="provi_ver_input_width"></td>
																		<td class="al">
																			<span class="input_file_wrap">
																				<input type="text" placeholder="File Select" class="provi_file_input_width">
																				<a href="#" class="btn"><span>Browse</span>
																					<input type="file">
																				</a>
																			</span>
																			<span class="add_set_wrap">
																				<a href="#" class="btn"><span><b class="btn_ico_blue_plus">Plus</b></span></a><a href="#" class="btn"><span><b class="btn_ico_blue_minus">Minus</b></span></a>
																			</span>
																		</td>
																	</tr>
																</tr>
															</tbody>
														</table>
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
							</div>
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
