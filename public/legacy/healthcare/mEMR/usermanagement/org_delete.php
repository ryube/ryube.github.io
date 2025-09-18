<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr.php"); ?>
<body>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:320px; height:; left: 50%; top: 50%; margin:-87px 0 0 -160px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Delete</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<article class="layerpop_body_message">
						<div class="layerpop_body_message_txt org_del">
							<p class="font_color_01">삭제할 Org. 에 등록되어 있는 User가 존재합니다.</p>
							<p><span class="category_move_radio"><input type="radio" id="layer_org_del_01"><label for="layer_org_del_01">다른 Org.로 이동 시킨 후 선택된 Org. 삭제</label></span></p>
							<p><span class="category_move_radio"><input type="radio" id="layer_org_del_02"><label for="layer_org_del_02">Org. 내에 포함된 User와 함께 모두 삭제</label></span></p>
						</div>  
					</article>
					<div class="layerpop_body_bottom_btn">
				 		<a href="#" class="btn blue"><span>Done</span></a>
				 		<a href="#" class="btn"><span>Cancel</span></a>
				 	</div>
				</div>			 	
			</section>
			<footer class="layerpop_foot">
				<!-- layerpop_foot round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_foot round -->
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
								<h2 class="contents_title"><em>Org</em></h2>
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
										<input type="text" placeholder="Search" />
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
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Add</span></a>
								</span>
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Move to</span></a>
									<a href="#" class="btn"><span>Copy to</span></a>
									<a href="#" class="btn"><span>Delete</span></a>
									<a href="#" class="btn"><span>Edit</span></a>
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
													<col class="col_orglist_name">
													<col class="col_orglist_email">
													<col class="col_orglist_mobile">
													<col class="col_orglist_status">
													<col class="col_orglist_org">
													<col class="col_orglist_group">
													<col class="col_orglist_invitation">								
												</colgroup>
												<thead>
													<tr>
														<th class="td_chk"><input type="checkbox" /></th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Name</span>
																<span class="list_sort"></span>
																<div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer">
																		<div class="flter_opt_layer_chklist_wrap">
																			<ul class="flter_opt_layer_chklist">
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk01" /> <label for="filter_chk01">Option 1</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk02" /> <label for="filter_chk02">Option 2</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk03" /> <label for="filter_chk03">Option 3</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
																			</ul>
																		</div>
																		<div class="flter_opt_layer_btn">
																			<a href="#" class="btn blue"><span>Ok</span></a>
																			<a href="#" class="btn"><span>Cancel</span></a>
																		</div>
																	</div>
																</div>
															</div>															
														</th>
														<th><span class="ellipsis">E-mail</span></th>
														<th><span class="ellipsis">Mobile</span></th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Status</span>
																<span class="list_sort"></span>
																<div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer">
																		<div class="flter_opt_layer_chklist_wrap">
																			<ul class="flter_opt_layer_chklist">
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk01" /> <label for="filter_chk01">Option 1</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk02" /> <label for="filter_chk02">Option 2</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk03" /> <label for="filter_chk03">Option 3</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
																			</ul>
																		</div>
																		<div class="flter_opt_layer_btn">
																			<a href="#" class="btn blue"><span>Ok</span></a>
																			<a href="#" class="btn"><span>Cancel</span></a>
																		</div>
																	</div>
																</div>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Org</span>
																<span class="list_sort"></span>
																<div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer">
																		<div class="flter_opt_layer_chklist_wrap">
																			<ul class="flter_opt_layer_chklist">
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk01" /> <label for="filter_chk01">Option 1</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk02" /> <label for="filter_chk02">Option 2</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk03" /> <label for="filter_chk03">Option 3</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
																			</ul>
																		</div>
																		<div class="flter_opt_layer_btn">
																			<a href="#" class="btn blue"><span>Ok</span></a>
																			<a href="#" class="btn"><span>Cancel</span></a>
																		</div>
																	</div>
																</div>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Group</span>
																<span class="list_sort"></span>
																<div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer">
																		<div class="flter_opt_layer_chklist_wrap">
																			<ul class="flter_opt_layer_chklist">
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk01" /> <label for="filter_chk01">Option 1</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk02" /> <label for="filter_chk02">Option 2</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk03" /> <label for="filter_chk03">Option 3</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
																			</ul>
																		</div>
																		<div class="flter_opt_layer_btn">
																			<a href="#" class="btn blue"><span>Ok</span></a>
																			<a href="#" class="btn"><span>Cancel</span></a>
																		</div>
																	</div>
																</div>
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Invitation</span>
																<span class="list_sort"></span>
																<div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer">
																		<div class="flter_opt_layer_chklist_wrap">
																			<ul class="flter_opt_layer_chklist">
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk01" /> <label for="filter_chk01">Option 1</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk02" /> <label for="filter_chk02">Option 2</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk03" /> <label for="filter_chk03">Option 3</label></span></li>
																				<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
																			</ul>
																		</div>
																		<div class="flter_opt_layer_btn">
																			<a href="#" class="btn blue"><span>Ok</span></a>
																			<a href="#" class="btn"><span>Cancel</span></a>
																		</div>
																	</div>
																</div>
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
														<col class="col_orglist_name">
														<col class="col_orglist_email">
														<col class="col_orglist_mobile">
														<col class="col_orglist_status">
														<col class="col_orglist_org">
														<col class="col_orglist_group">
														<col class="col_orglist_invitation">							
													</colgroup>
													<tbody>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
															<td><span class="ellipsis">Active</span></td>
															<td><span class="ellipsis">IM</span></td>
															<td><span class="ellipsis">A Group</span></td>
															<td><span class="ellipsis">Invited</span></td>
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
