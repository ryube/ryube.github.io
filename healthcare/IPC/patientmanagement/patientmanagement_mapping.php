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
								<h2 class="contents_title">Patient Management<span class="contents_title_arrow"></span><em>Mapping</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fields</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Detail Information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<h4><strong class="tit">Patient Info</strong><a href="#" class="btn"><span>Add</span></a></h4>
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Ward</span></th>
												<td><span class="ellipsis">Children</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Name</span></span></th>
												<td>
													<input type="text" placeholder="First Name" class="info_type1_input_width">
													<input type="text" placeholder="Last Name" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Patient ID</span></span></th>
												<td>
													<input type="text" placeholder="Patient ID" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Brith Date</span></span></th>
												<td>
													<div class="info_type1_commbo_birth">
														<div class="combobox">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Year</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
														<div class="combobox">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Month</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
														<div class="combobox">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Date</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider">
								<div class="detail_type1">
									<h4><strong class="tit">Care Team Info</strong><a href="#" class="btn"><span>Add</span></a><a href="#" class="btn"><span>Delete</span></a></h4>
									<div class="list_type1 in_detail">
										<table>
											<colgroup>
												<col width="40px;">
												<col width="18%">
												<col>							
												<col>							
												<col>							
											</colgroup>
											<thead>
												<tr>
													<th class="td_chk"><input type="checkbox"></th>
													<th><span class="ellipsis">Photo</span></th>
													<th><span class="ellipsis">Name</span></th>
													<th><span class="ellipsis">Position</span></th>
													<th class="th_last"><span class="ellipsis">Detail</span></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td><img src="" alt="" class="care_photo" width="48" height="48"></td>
													<td><span class="ellipsis">Anne Hathaway</span></td>
													<td><span class="ellipsis">Nurse</span></td>
													<td><span class="ellipsis"><a href="#">Link</a></span></td>
												</tr>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td><img src="" alt="" class="care_photo" width="48" height="48"></td>
													<td><span class="ellipsis">Anne Hathaway</span></td>
													<td><span class="ellipsis">Nurse</span></td>
													<td><span class="ellipsis"><a href="#">Link</a></span></td>
												</tr>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td><img src="" alt="" class="care_photo" width="48" height="48"></td>
													<td><span class="ellipsis">Anne Hathaway</span></td>
													<td><span class="ellipsis">Nurse</span></td>
													<td><span class="ellipsis"><a href="#">Link</a></span></td>
												</tr>
											</tbody>
										</table>
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
