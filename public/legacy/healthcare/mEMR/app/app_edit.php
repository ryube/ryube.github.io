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
								<h2 class="contents_title">mEMR App<span class="contents_title_arrow"></span><em>Edit</em></h2>
							</div>
							<div class="contents_top_right">
								
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">mEMR App information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">mEMR Profile Name</span></th>
												<td>
													<input type="text" value="" class="info_type1_input_width">
													<span class="info_type1_verchk_msg">Last Profile : mEMR App 10.0</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">mEMR App Version</span></th>
												<td>
													<input type="text" value="" class="info_type1_input_width">
													<span class="info_type1_verchk_msg">Last Version : mEMR App 10.0</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">mEMR App File</span></th>
												<td>
													<div class="list_type2_file_upload">
														<p class="list_type2_file_upload_btn">
															<span class="input_file_wrap">
																<a href="#" class="btn"><span>Browse</span>
																	<input type="file">
																</a>
															</span>
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
																	<th><span class="ellipsis">File Name</span></th>
																	<th class="ac"><span class="ellipsis">Size</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="checkbox"></td>
																	<td>mEMR ver10.1.apk</td>
																	<td class="ac">1.2MB</td>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Status</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="app_status_01"><label for="app_status_01">Test</label></span>
													<span class="info_type1_radio"><input type="radio" id="app_status_02"><label for="app_status_02">Activated</label></span>
													<span class="info_type1_radio"><input type="radio" id="app_status_03"><label for="app_status_03">Inactivated</label></span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider">
								<div class="detail_listbtn">
									<a href="#" class="btn"><span>Add</span></a>
									<a href="#" class="btn"><span>Delete</span></a>
								</div>
								<div class="layout_list_mid_scroll_wrapper">
									<div class="list_type1 right_padding">
										<table>
											<colgroup>
												<col class="col_chk">
												<col>
												<col>
												<col>
												<col>
												<col>
											</colgroup>
											<thead>
												<tr>
													<th class="td_chk"><input type="checkbox"></th>
													<th class="th_sort">
														<div class="sort_wrap">
															<span class="ellipsis">Extra App Name</span>
															<span class="list_sort"></span>
														</div>															
													</th>
													<th class="th_sort">
														<div class="sort_wrap">
															<span class="ellipsis">Version</span>
															<span class="list_sort"></span>
														</div>															
													</th>
													<th class="th_sort">
														<div class="sort_wrap">
															<span class="ellipsis">File</span>
															<span class="list_sort"></span>
														</div>															
													</th>
													<th class="th_sort">
														<div class="sort_wrap">
															<span class="ellipsis">Name</span>
															<span class="list_sort"></span>
														</div>															
													</th>
													<th class="th_sort">
														<div class="sort_wrap">
															<span class="ellipsis">Date</span>
															<span class="list_sort"></span>
														</div>															
													</th>
												</tr>
											</thead>
										</table>
									</div>
									<div class="layout_list_fix_scroll_area" >
										<div class="list_type1">
											<table>
												<colgroup>
													<col class="col_chk">
													<col>
													<col>
													<col>
													<col>
													<col>							
												</colgroup>
												<tbody>
													<tr class="on">
														<td class="td_chk"><input type="checkbox" checked=""></td>
														<td><span class="ellipsis">mEMR.apk</span></td>
														<td><span class="ellipsis">10.1</span></td>
														<td><span class="ellipsis">mEMR 10.1.apk</span></td>
														<td><span class="ellipsis">Anne</span></td>
														<td><span class="ellipsis">2012-01-01/12:00:00</span></td>
													</tr>
													<tr>
														<td class="td_chk"><input type="checkbox" checked=""></td>
														<td><span class="ellipsis">mEMR.apk</span></td>
														<td><span class="ellipsis">10.1</span></td>
														<td><span class="ellipsis">mEMR 10.1.apk</span></td>
														<td><span class="ellipsis">Anne</span></td>
														<td><span class="ellipsis">2012-01-01/12:00:00</span></td>
													</tr>
													<tr>
														<td class="td_chk"><input type="checkbox" checked=""></td>
														<td><span class="ellipsis">mEMR.apk</span></td>
														<td><span class="ellipsis">10.1</span></td>
														<td><span class="ellipsis">mEMR 10.1.apk</span></td>
														<td><span class="ellipsis">Anne</span></td>
														<td><span class="ellipsis">2012-01-01/12:00:00</span></td>
													</tr>
													<tr>
														<td class="td_chk"><input type="checkbox" checked=""></td>
														<td><span class="ellipsis">mEMR.apk</span></td>
														<td><span class="ellipsis">10.1</span></td>
														<td><span class="ellipsis">mEMR 10.1.apk</span></td>
														<td><span class="ellipsis">Anne</span></td>
														<td><span class="ellipsis">2012-01-01/12:00:00</span></td>
													</tr>
													<tr>
														<td class="td_chk"><input type="checkbox" checked=""></td>
														<td><span class="ellipsis">mEMR.apk</span></td>
														<td><span class="ellipsis">10.1</span></td>
														<td><span class="ellipsis">mEMR 10.1.apk</span></td>
														<td><span class="ellipsis">Anne</span></td>
														<td><span class="ellipsis">2012-01-01/12:00:00</span></td>
													</tr>
													<tr>
														<td class="td_chk"><input type="checkbox" checked=""></td>
														<td><span class="ellipsis">mEMR.apk</span></td>
														<td><span class="ellipsis">10.1</span></td>
														<td><span class="ellipsis">mEMR 10.1.apk</span></td>
														<td><span class="ellipsis">Anne</span></td>
														<td><span class="ellipsis">2012-01-01/12:00:00</span></td>
													</tr>
													<tr>
														<td class="td_chk"><input type="checkbox" checked=""></td>
														<td><span class="ellipsis">mEMR.apk</span></td>
														<td><span class="ellipsis">10.1</span></td>
														<td><span class="ellipsis">mEMR 10.1.apk</span></td>
														<td><span class="ellipsis">Anne</span></td>
														<td><span class="ellipsis">2012-01-01/12:00:00</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
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
