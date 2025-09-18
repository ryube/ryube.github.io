<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr.php"); ?>
<body>
	<script type="text/javascript">
	$(document).ready(function () {
		layoutSplit = new ContentsScreenControl3(CONTENTS_SCREEN_TYPE.none);
		fakescroll.set('custom_scroll',{ x:{disable:true}});
		fakescroll.set('custom_scroll1',{ x:{disable:true}});
		fakescroll.set('custom_scroll2',{ x:{disable:true}});
	});
		
	</script>
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
								<h2 class="contents_title"><em>Group</em></h2>
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
										<div  id="custom_scroll" class="layout_list_mid_scroll_area no_paging">
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
								<article id="custom_scroll1" class="layout_detail layout_change_bottom ui-layout-south">
									<div class="">
										<h3 class="contents_layout_detail_head">Authority Information</h3>
										<div  class="layout_list_mid_scroll_area no_paging">
											<div class="list_type2 group_detail">
												<table class="list_type2_detailview">
													<colgroup>
														<col class="col_list_type2_detailview_th">
														<col >
														<col class="col_group_detail_value_long">
													</colgroup>
													<tbody>
														<tr>
															<th rowspan="5">
																<p class="list_type2_cell_split">Common</p>
																<p class="list_type2_cell_split">(Inside/OustSide)</p>
															</th>
															<td><span class="ellipsis">Check patients assigned to me</span></td>
															<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Check patients of department I belong</span></td>
															<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Check all patients of the hospital </span></td>
															<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Emergency Access available</span></td>
															<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
														</tr>
													</tbody>
												</table>
												<table class="list_type2_detailview">
													<colgroup>
														<col class="col_list_type2_detailview_th">
														<col >
														<col class="col_group_detail_value">
														<col >
														<col class="col_group_detail_value">
													</colgroup>
													<tbody>
														<tr>
															<th rowspan="7">
																<p class="list_type2_cell_split"><span class="ellipsis">Inside</span></p>
															</th>
															<td><span class="ellipsis">Vital sign</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Intake &amp; output</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Allergies</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Problems</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Immunization</span></td>
															<td class="td_authority_value warning"><span class="ellipsis">No permission</span></td>
															<td><span class="ellipsis">Lab Reselt</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Medication</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
															<td><span class="ellipsis">Treatment</span></td>
															<td class="td_authority_value warning"><span class="ellipsis">No permission</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Consultation</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Progress Note</span></td>
															<td class="td_authority_value warning"><span class="ellipsis">No permission</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Documents</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Operations</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">More Records</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Order</span></td>
															<td class="td_authority_value"><span class="ellipsis">Possibility</span></td>
														</tr>
													</tbody>
												</table>
												<table class="list_type2_detailview">
													<colgroup>
														<col class="col_list_type2_detailview_th">
														<col >
														<col class="col_group_detail_value">
														<col >
														<col class="col_group_detail_value">
													</colgroup>
													<tbody>
														<tr>
															<th rowspan="7">
																<p class="list_type2_cell_split"><span class="ellipsis">Outside</span></p>
															</th>
															<td><span class="ellipsis">Vital sign</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Intake &amp; output</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Allergies</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Problems</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Immunization</span></td>
															<td class="td_authority_value warning"><span class="ellipsis">No permission</span></td>
															<td><span class="ellipsis">Lab Reselt</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Medication</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
															<td><span class="ellipsis">Treatment</span></td>
															<td class="td_authority_value warning"><span class="ellipsis">No permission</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Consultation</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Progress Note</span></td>
															<td class="td_authority_value warning"><span class="ellipsis">No permission</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Documents</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Operations</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">More Records</span></td>
															<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
															<td><span class="ellipsis">Order</span></td>
															<td class="td_authority_value"><span class="ellipsis">Possibility</span></td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- <div class="detail_type1 ">
												<table class="info_type1">
													<colgroup>
														<col class="col_info_th">
														<col class="col_info_td">
														<col class="col_info_th">
														<col class="col_info_td">
													</colgroup>
													<tbody>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis">Emergency Access</span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Viewer</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis">Emergency Access</span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Viewer</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis"><span class="item">Read</span></span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Oder</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
														<tr>
															<th><span class="ellipsis">Emergency Access</span></th>
															<td><span class="ellipsis">All</span></td>
															<th><span class="ellipsis">Viewer</span></th>
															<td><span class="ellipsis">All</span></td>
														</tr>
													</tbody>
												</table>
											</div> -->
										</div>
									</div>

								</article>
								<article class="layout_list ui-layout-east">
									<div class="layout_list_mid_scroll_wrapper list_small_type">
										<div class="list_type1 right_padding">
											<table>
												<colgroup>
													<col class="">
													<col class="">
													<col class="">								
												</colgroup>
												<thead>
													<tr>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Name</span>
																<span class="list_sort"></span>
																
															</div>															
														</th>
														<th><span class="ellipsis">E-mail</span></th>
														<th><span class="ellipsis">Mobile</span></th>
													</tr>
												</thead>
											</table>
										</div>
										<div id="custom_scroll2" class="layout_list_mid_scroll_area">
											<div class="list_type1">
												<table>
													<colgroup>
														<col class="">
														<col class="">
														<col class="">							
													</colgroup>
													<tbody>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
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
