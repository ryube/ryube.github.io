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
								<h2 class="contents_title">Extra App<span class="contents_title_arrow"></span><em>Add</em></h2>
							</div>
							<div class="contents_top_right">
								
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Extra App information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Extra App Name</span></th>
												<td>
													<input type="text" value="" class="info_type1_input_width">
													<a href="#" class="btn"><span>Check</span></a>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Extra App Version</span></th>
												<td>
													<input type="text" value="" class="info_type1_input_width">
													<span class="info_type1_verchk_msg">Last Version : Extra App 10.0</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">File</span></th>
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
																	<td><span class="ellipsis">mEMR ver10.1.apk</span></td>
																	<td class="ac">1.2MB</td>
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
