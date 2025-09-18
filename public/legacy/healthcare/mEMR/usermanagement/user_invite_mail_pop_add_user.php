<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
<script type="text/javascript">
 $(document).ready(function () {
 	fakescroll.set('custom_scroll',{ x:{disable:true}});
 });
</script>
<body>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:690px; height:; left: 50%; top: 50%; margin:-187px 0 0 -345px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Add a User</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<article class="contents_option">
						<div class="contents_option_left">
							<div class="contents_option_left_bundle has_combo">
								<div class="combobox">
									<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
									<div class="combobox_list">
										<ul>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="contents_option_right">
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
											<li><a href="#"><span class="ellipsis">option</span></a></li>
											<li><a href="#"><span class="ellipsis">option</span></a></li>
											<li><a href="#"><span class="ellipsis">option</span></a></li>
											<li><a href="#"><span class="ellipsis">optionoptionoptionoptionoptionoptionoptionoptionoption</span></a></li>
										</ul>
									</div>									
									<a href="#" class="search_btn">Search</a>
								</div>
							</div>
						</div>
					</article>
					<article class="contents_layout">
						<div class="layout_list_mid_scroll_wrapper">
							<div class="list_type1 right_padding">
								<table>
									<colgroup>
										<col class="col_chk">
										<col class="col_usemanagement_group_name">
										<col class="col_usemanagement_group_email">
										<col>
										<col class="col_usemanagement_group_status">
										<col class="col_usemanagement_group_org">
										<col class="col_usemanagement_group_group">
										<col class="col_usemanagement_group_invitation">								
									</colgroup>
									<thead>
										<tr>
											<th class="td_chk"><input type="checkbox"></th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">User Name</span>
													<span class="list_sort desc"></span>
												</div>
											</th>
											<th><span class="ellipsis">User E-mail</span></th>
											<th><span class="ellipsis">User ID</span></th>
											<th><span class="ellipsis">User Moblie</span></th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Status</span>
													<span class="list_sort"></span>
													<div class="filter_opt">
														<span class="filter_ico"></span>
														<div class="flter_opt_layer" style="display: ;">
															<div class="flter_opt_layer_chklist_wrap">
																<ul class="flter_opt_layer_chklist">
																	<li><span class="ellipsis"><input type="checkbox" id="filter_chk01" /> <label for="filter_chk01">Option 1</label></span></li>
																</ul>
															</div>
															<div class="flter_opt_layer_btn">
																<a href="#" class="btn"><span>Ok</span></a>
																<a href="#" class="btn"><span>Cancel</span></a>
															</div>
														</div>
													</div>
												</div>															
											</th>
											<th><span class="ellipsis">Org</span></th>
											<th class="th_last"><span class="ellipsis">Invitation</span></th>
										</tr>
									</thead>
								</table>
							</div>
							<div class="layout_list_mid_scroll_area">
								<div class="list_type1">
									<table>
										<colgroup>
											<col class="col_chk">
											<col class="col_usemanagement_group_name">
											<col class="col_usemanagement_group_email">
											<col>
											<col class="col_usemanagement_group_status">
											<col class="col_usemanagement_group_org">
											<col class="col_usemanagement_group_group">
											<col class="col_usemanagement_group_invitation">								
										</colgroup>
										<tbody>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
											</tr>
											<tr>
												<td class="td_chk"><input type="checkbox"></td>
												<td><span class="ellipsis">Anne Hathaway</span></td>
												<td><span class="ellipsis">ann@memr.com</span></td>
												<td><span class="ellipsis">User ID</span></td>
												<td><span class="ellipsis">010-0123-1234</span></td>
												<td><span class="ellipsis">Active</span></td>
												<td>
													<span class="tool_tip_wrap">
														<span class="ellipsis">GS</span>
														<span class="btn_list_plus">plus
															<span class="tool_tip_layer">
																<span class="tool_tip_layer_body">
																	Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1, Org1
																</span>
															</span>
														</span>
													</span>
												</td>
												<td><span class="ellipsis">Uninvited</span></td>
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


					<div class="layerpop_body_bottom_btn">
				 		<a href="#" class="btn blue"><span>OK</span></a>
				 		<a href="#" class="btn"><span>Cancel</span></a>
				 	</div>
				</div>			 	
			</section>
			<footer class="layerpop_foot">
				<!-- layerpop_foot round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
			</footer>
		</article>
	</section>
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
								<h2 class="contents_title">User<span class="contents_title_arrow"></span><em>Invite</em></h2>
							</div>
							<div class="contents_top_right">
								<!-- <p class="contents_top_right_req_txt">
									<span class="ico_req">Required fileds</span>									
								</p> -->
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Invite mail sending</h3>
							<section class="contents_layout_detail_wrap">
								<div class="list_type2">
									<table>
										<colgroup>
											<col class="col_list_type2_th">
											<col class="col_list_type2_td">	
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">To</span></th>
												<td>
													<div class="inner_list_type1_wrap">
														<p class="inner_list_type1_topbtn">
															<a href="#" class="btn"><span>Add</span></a>
															<a href="#" class="btn"><span>Delete</span></a>
														</p>
														<div id="custom_scroll" class="list_type1 inner_scroll">
															<table>
																<colgroup>
																	<col class="col_list_type2_chk">
																	<col >
																	<col >
																</colgroup>
																<thead>
																	<tr>
																		<th class="chk"><input type="checkbox"></th>
																		<th class="th_sort">
																			<div class="sort_wrap">
																				<span class="ellipsis">User Name</span>
																				<span class="list_sort"></span>
																			</div>															
																		</th>
																		<th><span class="ellipsis">User Email</span></th>
																		<th class="th_last"><span class="ellipsis">User ID</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Subject</span></th>
												<td><input type="text" class="info info_type1_input_subject" value="Title"></td>
											</tr>
										</tbody>
									</table>
									<div class="invite_textarea_wrap"><textarea class=""></textarea></div>
								</div>
								<div class="contents_layout_detail_bot_btnsec">
									<a href="#" class="btn"><span>Send</span></a>
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
