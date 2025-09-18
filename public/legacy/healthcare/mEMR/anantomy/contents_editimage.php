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
								<h2 class="contents_title">Contents<span class="contents_title_arrow"></span>Image001<span class="contents_title_arrow"></span><em>Edit</em></h2>
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
													<input type="text" value="Username" class="info info_type1_input_width">
													<a href="#" class="btn"><span>Change</span></a>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Category</span></span></th>
												<td>
													<span class="input_file_wrap">
														<input type="text" value="Select Image Files (JPG, BMF, GIF, PNG only)" class="info" id="fileNameRecive">
														<a href="#" class="btn"><span>Browse</span>
															<input type="file" id="fileGet" onchange=" inputFileAdd('fileGet','fileNameRecive');">
														</a>
													</span>
													<span>이미지 최대 N개 선택 가능</span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Image Name</span></span></th>
												<td>
													<input type="text" value="A Floder" class="info info_type1_input_width">
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
													<div class="info_type1_textarea_wrap long">
														<textarea class="info">Enter Detail info</textarea>
														<p class="info_type1_textarea_txt_count">0/4000 byte</p>
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
