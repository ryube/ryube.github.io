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
								<h2 class="contents_title">Contents<span class="contents_title_arrow"></span><em>Add a Image</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">is mandatory items</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<section class="contents_layout_detail_wrap memr_setting"><!--  add class memr_setting -->
								<h3 class="contents_layout_detail_head">Image Information</h3>
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Category</span></span></th>
												<td>
													<div class="list_type2_file_upload">
														<p class="list_type2_file_upload_btn">
															<a href="#" class="btn"><span>Delete</span></a>
															<a href="#" class="btn"><span>Edit</span></a>
														</p>
														<table class="list_type_upload">
															<colgroup>
																<col class="col_upload_chk">
																<col class="col_upload_name">
																<col class="col_upload_size">
															</colgroup>
															<thead>
																<tr>
																	<th><input type="checkbox"></th>
																	<th><span class="ellipsis">Name</span></th>
																	<th class="ac"><span class="ellipsis">Size</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="checkbox"></td>
																	<td>
																		<span class="ellipsis file_progress_target">img001.jpg
																			<span class="file_progress_holder">
																				<span class="file_progress_txt1">50%</span>
																				<span class="file_progress_bar" style="width: 50%;">
																					<span class="file_progress_txt2">50%</span>
																				</span>
																			</span>
																		</span>
																	</td>
																	<td class="ac">1.2MB</td>
																</tr>
																<tr>
																	<td><input type="checkbox"></td>
																	<td>img001.jpg</td>
																	<td class="ac">1.2MB</td>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Status</span></span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="anatomy_status_01"><label for="anatomy_status_01">Activated</label></span>
													<span class="info_type1_radio"><input type="radio" id="anatomy_status_02"><label for="anatomy_status_02">Inactivated</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Description</span></th>
												<td>
													<div class="combobox info_type1_combo_width">
														<a href="#"><span class="combobox_value"><span class="ellipsis">Select a Group</span></span><span class="combobox_icon"></span></a>
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
												<th><span class="ellipsis">Tag</span></th>
												<td>
													<span class="info_type1_tagset_wrap">
														<input type="text" value="Tag" class="info info_type1_input_width">
														<input type="text" value="Tag" class="info info_type1_input_width">
														<input type="text" value="Tag" class="info info_type1_input_width">
														<input type="text" value="Tag" class="info info_type1_input_width">
													</span>
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
