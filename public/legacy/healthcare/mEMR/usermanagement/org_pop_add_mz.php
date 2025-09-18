<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr.php"); ?>
<body>
	<script type="text/javascript">
	 $(document).ready(function () {
	 	layoutSplit = new ContentsScreenControl2(CONTENTS_SCREEN_TYPE.vertical);
	 });
	</script>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:320px; height:; left: 50%; top: 50%; margin:-87px 0 0 -160px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Add org</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<article class="layerpop_body_message">
						<div class="layerpop_body_message_txt">
							<div class="layerpop_body_input_edit_wrap">
								<p class="layerpop_body_input_edit_tit">Org Name</p>
								<p class="layerpop_body_input_text"><input type="text"><a href="#" class="btn"><span>Edit</span></a></p>
							</div>
						</div>  
					</article>
					<div class="layerpop_body_bottom_btn">
				 		<a href="#" class="btn blue"><span>OK</span></a>
				 		<a href="#" class="btn"><span>Cancle</span></a>
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
										<h3 class="contents_layout_detail_head">Group Infomation</h3>
										<div class="layout_list_mid_scroll_area no_paging">
											<div class="group_tree">
												<ul>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li class="open"><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div>
														<ul>
															<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
															<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
															<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
															<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
															<li class="open on"><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div>
																<ul>
																	<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
																	<li class="on"><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
																	<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
																	<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
																	<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
																</ul>
															</li>
														</ul>
													</li>

												</ul>
											</div>
										</div>
									</div>
								</article>
								<article class="layout_list ui-layout-south">
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
								<article class="layout_list ui-layout-east">
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
