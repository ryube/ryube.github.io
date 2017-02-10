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
								<h2 class="contents_title">Application<span class="contents_title_arrow"></span><em>Edit</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fields</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Application Information</h3>
							<section class="contents_layout_detail_wrap">
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
													<div class="combobox info_type1_combo_width">
														<a href="#"><span class="combobox_value"><span class="ellipsis">Category1</span></span><span class="combobox_icon"></span></a>
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
												<th><span class="ellipsis"><span class="ico_req">Name</span></span></th>
												<td>
													<input type="text" value="Application Name" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">File Select</span></span></th>
												<td>
													<span class="input_file_wrap">
														<input type="text" value="File Select" class="info" id="fileNameRecive">
														<a href="#" class="btn"><span>Browse</span>
															<input type="file" id="">
														</a>
													</span>
												</td>

											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Icon</span></span></th>
												<td>
													<div class="info_type1_icon_select_wrap">
														<p><img src="" alt="" class="img_contents_icon"><span class="info_type1_icon_infotxt">권장 Size 200*200px. JPG, PNG, GIF only</span></p>
														<span class="input_file_wrap">
															<input type="text" value="File Select" class="info" id="fileNameRecive">
															<a href="#" class="btn"><span>Browse</span>
																<input type="file" id="fileGet"  onchange=" inputFileAdd('fileGet','fileNameRecive');">
															</a>
														</span>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Category</span></span></th>
												<td>
													<div class="combobox info_type1_combo_width">
														<a href="#"><span class="combobox_value"><span class="ellipsis">Select</span></span><span class="combobox_icon"></span></a>
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
												<th><span class="ellipsis">Description</span></th>
												<td>
													<div class="info_type1_textarea_wrap">
														<textarea class="info">Description</textarea>
														<p class="info_type1_textarea_txt_count">0/400 byte</p>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Developer</span></span></th>
												<td>
													<input type="text" value="First Name" class="info info_type1_input_width">
													<input type="text" value="Last Name" class="info info_type1_input_width">
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
