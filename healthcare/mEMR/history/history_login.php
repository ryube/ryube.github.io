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
								<h2 class="contents_title">History<span class="contents_title_arrow"></span><em>MC603KH</em></h2>
							</div>
							<div class="contents_top_right">
								<div class="search_wrap">
									<div class="combobox">
										<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
										<div class="combobox_list" style="display:none;">
											<ul>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
										</ul>
										</div>
									</div><div class="search">
										<input type="text" placeholder="Search">
										<div class="search_suggest">
											<ul>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
											</ul>
										</div>									
										<a href="#" class="search_btn">Search</a>
									</div>
								</div>
							</div>
						</article>
						<article class="contents_option">

							<div class="contents_option_left">

								<div class="contents_option_left_period">
									<span class="contents_option_left_period_txt">Period :</span>
									<span class="date_pick_wrap"><span href="#" class="btn_date_pick"></span><input type="text" value="2012-03-06"></span>
									<span class="contents_option_left_period_txt">~</span>
									<span class="date_pick_wrap"><span href="#" class="btn_date_pick"></span><input type="text" value="2012-04-06"></span>
								</div>
								<span class="btn_bundle">
									<a href="#" class="btn"><span><b class="btn_in_icon add"></b></span></a>
									<a href="#" class="btn"><span><b class="btn_in_icon del"></b></span></a>
									<a href="#" class="btn"><span><b class="btn_in_icon edit"></b></span></a>
									<a href="#" class="btn"><span><b class="btn_in_icon refresh"></b></span></a>
									<a href="#" class="btn"><span>Invit</span></a>
									<a href="#" class="btn"><span>delete</span></a>
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
									<!-- <span class="btn_view_ch">
										<a id="layout_none" class="btn btn_ico_view nor"><span><b>normal</b></span></a><a id="layout_vertical" class="btn btn_ico_view verti"><span><b>vertical</b></span></a><a id="layout_horizontal" class="btn btn_ico_view hori on"><span><b>horizen</b></span></a>
									</span> -->
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
													<col class="col_m_history_name">
													<col class="col_m_history_email">
													<col class="col_m_history_mobile">
													<col class="col_m_history_org">
													<col class="col_m_history_position">
													<col class="col_m_history_login">
													<col class="col_m_history_duration">
													<col class="col_m_history_ip">													
												</colgroup>
												<thead>
													<tr>
														<th class="td_chk"><input type="checkbox" /></th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Name</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Email</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Mobile</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Org</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Position</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Login Time</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Duration Time</span>
																<span class="list_sort"></span>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">IP Address</span>
																<span class="list_sort"></span>
															</div>															
														</th>
													</tr>
												</thead>
											</table>
										</div>
										<div class="layout_list_mid_scroll_area">
											<div class="list_type1">
												<table>
													<colgroup>
														<col class="col_chk">
														<col class="col_m_history_name">
														<col class="col_m_history_email">
														<col class="col_m_history_mobile">
														<col class="col_m_history_org">
														<col class="col_m_history_position">
														<col class="col_m_history_login">
														<col class="col_m_history_duration">
														<col class="col_m_history_ip">								
													</colgroup>
													<tbody>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" checked /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">anne@memr.com</span></td>
															<td><span class="ellipsis">801-102-2302</span></td>
															<td><span class="ellipsis">GS</span></td>
															<td><span class="ellipsis">Professor</span></td>
															<td><span class="ellipsis">01.01 01:30:20</span></td>
															<td><span class="ellipsis">05:30:20</span></td>
															<td><span class="ellipsis">192.168.0.1</span></td>
														</tr>
													</tbody>
												</table>
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
									<h3 class="contents_layout_detail_head">Account Information</h3>
									<div class="detail_type1">
										<h4>Product Info</h4>
										<table class="info_type1">
											<colgroup>
												<col class="col_info_th">
												<col class="col_info_td">
											</colgroup>
											<tbody>
												<tr>
													<th><span class="ellipsis">Model</span></th>
													<td><span class="ellipsis">Galaxy Tap 7.0</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Android ver.</span></th>
													<td><span class="ellipsis">Honeycomb 3.0</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Mac adderess</span></th>
													<td><span class="ellipsis">00-02-22-22-2s-23</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">S/N</span></th>
													<td><span class="ellipsis">AA-11-1234-1234</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">자산번호</span></th>
													<td><span class="ellipsis">G7001</span></td>
												</tr>
											</tbody>

										</table>
									</div>
									<h3 class="contents_layout_detail_head">Account Information</h3>
									<div class="detail_type1">
										
										<h4>Basic Info</h4>
										<table class="info_type1">
											<colgroup>
												<col class="col_info_th">
												<col class="col_info_td">
											</colgroup>
											<tbody>
												<tr>
													<th><span class="ellipsis">Activation</span></th>
													<td><span class="ellipsis">Active</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Date</span></th>
													<td><span class="ellipsis">2013-01-01</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Building</span></th>
													<td><span class="ellipsis">A</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Floor</span></th>
													<td><span class="ellipsis">1</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Ward</span></th>
													<td><span class="ellipsis">Children</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Room</span></th>
													<td><span class="ellipsis">103</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Bed Id</span></th>
													<td><span class="ellipsis">AABBCC123</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">State</span></th>
													<td><span class="ellipsis">Distributed</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</article>
								<article class="layout_detail ui-layout-east">
									<div class="detail_type1">
										<h4>Product Info</h4>
										<table class="info_type1">
											<colgroup>
												<col class="col_info_th">
												<col class="col_info_td">
											</colgroup>
											<tbody>
												<tr>
													<th><span class="ellipsis">Model</span></th>
													<td><span class="ellipsis">Galaxy Tap 7.0</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Android ver.</span></th>
													<td><span class="ellipsis">Honeycomb 3.0</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Mac adderess</span></th>
													<td><span class="ellipsis">00-02-22-22-2s-23</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">S/N</span></th>
													<td><span class="ellipsis">AA-11-1234-1234</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">자산번호</span></th>
													<td><span class="ellipsis">G7001</span></td>
												</tr>
											</tbody>

										</table>
									</div>
									<div class="detail_type1">
										<h4>Basic Info</h4>
										<table class="info_type1">
											<colgroup>
												<col class="col_info_th">
												<col class="col_info_td">
											</colgroup>
											<tbody>
												<tr>
													<th><span class="ellipsis">Activation</span></th>
													<td><span class="ellipsis">Active</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Date</span></th>
													<td><span class="ellipsis">2013-01-01</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Building</span></th>
													<td><span class="ellipsis">A</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Floor</span></th>
													<td><span class="ellipsis">1</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Wand</span></th>
													<td><span class="ellipsis">Children</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Room</span></th>
													<td><span class="ellipsis">103</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Bed Id</span></th>
													<td><span class="ellipsis">AABBCC123</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">State</span></th>
													<td><span class="ellipsis">Distributed</span></td>
												</tr>
											</tbody>
										</table>
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
