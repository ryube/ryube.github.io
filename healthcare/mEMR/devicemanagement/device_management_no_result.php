<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr.php"); ?>
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
								<h2 class="contents_title"><em>Device Management</em></h2>
							</div>
							<div class="contents_top_right">
								
							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span><span class="ellipsis">Delete</span></span></a>
									<a href="#" class="btn"><span><span class="ellipsis">Edit</span></span></a>
								</span>
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Approve</span></a>
									<a href="#" class="btn"><span>Delete</span></a>
								</span>
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Export</span></a>
									<a href="#" class="btn"><span>Import</span></a>
								</span>
							</div>
							<div class="contents_option_right">
								<div class="contents_option_right_display">
									<span>Display : </span> 
									<div class="combobox">
										<span class="combobox_value">20</span>
										<span class="combobox_icon"></span>
										<div class="combobox_list">
											<ul>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
										</ul>
										</div>
									</div>
									<span class="btn_view_ch">
										<a id="layout_none" class="btn btn_ico_view nor"><span><b>normal</b></span></a><a id="layout_vertical" class="btn btn_ico_view verti"><span><b>vertical</b></span></a><a id="layout_horizontal" class="btn btn_ico_view hori on"><span><b>horizen</b></span></a>
									</span>
								</div>
							</div>
						</article>
						<article class="contents_layout">
							<section id="contents_layout_split" class="layout_change">
								<article class="layout_list ui-layout-center">
									<div class="layout_list_mid_scroll_wrapper">
										<div class="list_type1 right_padding">
											<table>
												<colgroup>
													<col class="col_chk">
													<col class="col_m_devicemanage_model">
													<col class="col_m_devicemanage_ver">
													<col class="col_m_devicemanage_imei">
													<col class="col_m_devicemanage_mac">
													<col class="col_m_devicemanage_user">
													<col class="col_m_devicemanage_email">
													<col class="col_m_devicemanage_reg">
												</colgroup>
												<thead>
													<tr>
														<th class="td_chk"><input type="checkbox" /></th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Model</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Ver</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">IMEI</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Mac Address</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">User Name</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">E-mail</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Registration</span>
																<span class="list_sort"></span>
															</div>															
														</th>
													</tr>
												</thead>
											</table>
										</div>
										<div class="layout_list_mid_scroll_area">
											<div class="error_msg_wrap">
												<div class="error_msg_box">
													<p class="error_msg_box_txt">Message</p>
													<p class="error_msg_box_txt warning">Message</p>
												</div>
											</div>
										</div>
										<article class="paging">
											<a href="#" class="paging_first">First</a><a href="#" class="paging_prev">Previous</a>
											<span class="paging_num">
												<a href="#" class="on">1</a>
												<a href="#">2</a>
												<a href="#">3</a>
												<a href="#">4</a>
												<a href="#">5</a>
												<a href="#">6</a>
												<a href="#">7</a>
												<a href="#">8</a>
												<a href="#">9</a>
												<a href="#">10</a>
											</span>
											<a href="#" class="paging_next">Next</a><a href="#" class="paging_last">Last</a>
										</article>
									</div>
								</article>
								<article class="layout_detail ui-layout-south">
									<div class="layout_list_mid_scroll_wrapper">
										<h3 class="contents_layout_detail_head">Account Information</h3>
										<div class="layout_list_mid_scroll_area no_paging">
											<div class="error_msg_wrap">
												<div class="error_msg_box">
													<p class="txt">Message</p>
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="layout_list ui-layout-east">
									<div class="layout_list_mid_scroll_wrapper">
										<h3 class="contents_layout_detail_head">Account Information</h3>
										<div class="layout_list_mid_scroll_area no_paging">
											<div class="error_msg_wrap">
												<div class="error_msg_box">
													<p class="txt">Message</p>
												</div>
											</div>
										</div>
									</div>
								</article>
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
