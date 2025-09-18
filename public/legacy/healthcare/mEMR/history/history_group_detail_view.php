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
								<h2 class="contents_title">User Group<span class="contents_title_arrow"></span><em>Anne Hathaway</em></h2>
							</div>
							<div class="contents_top_right">

							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								
							</div>
							<div class="contents_option_right">
								<div class="contents_option_right_display">
									<span class="btn_detail_pagemove">
										<a href="#" class="pagemove_prev"><span>Prev</span></a><a href="#" class="pagemove_next"><span>Next</span></a>
									</span>
									<a href="#" class="btn"><span>List</span></a>
								</div>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">User Group History Information</h3>
							<div id="detail_scroll_area" class="layout_list_mid_scroll_area">
								<div class="list_type2_detail_wrap">
									<div class="list_type2">
										<table>
											<colgroup>
												<col class="col_list_type2_th">
												<col class="col_list_type2_td">	
											</colgroup>
											<tbody>
												<tr>
													<th><span class="ellipsis">User Name</span></th>
													<td><span class="ellipsis">Anne Hatthaway</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">User ID</span></th>
													<td><span class="ellipsis">anne 1234</span></td>
												</tr>
												<tr>
													<th><span class="ellipsis">Action</span></th>
													<td>
														<table class="list_type2_detailview">
															<colgroup>
																<col>
															</colgroup>
															<tbody>
																<tr>
																	<th class="list_type2_detailview_head">
																		<span class="ellipsis">Modification</span>
																		<!-- <span class="date">2013-01-01 01:30:30</span> -->
																	</th>
																</tr>
																<tr>
																	<td class="td_table_wrap">
																		<table>
																			<colgroup>
																				<col class="col_list_type2_detailview_th">
																				<col >
																			</colgroup>
																			<tbody>
																				<tr>
																					<th><span class="ellipsis">Group Name</span></th>
																					<td><span class="ellipsis">A Group</span></td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td class="td_table_wrap">
																		<div class="modify_icon_wrap">
																			<span class="icon_modify"></span><!-- Modify Blue Icon -->
																			<table class="modification">
																				<colgroup>
																					<col class="col_list_type2_detailview_th">
																					<col >
																					<col class="col_authority_value">
																					<col class="col_authority_value">
																				</colgroup>
																				<tbody>
																					<tr>
																						<th rowspan="5">
																							<p class="list_type2_cell_split">Common</p>
																							<p class="list_type2_cell_split">(Inside/OustSide)</p>
																						</th>
																						<td><span class="ellipsis">Check patients assigned to me</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Check patients of department I belong</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Check all patients of the hospital </span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Emergency Access available</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Permission</span></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="td_table_wrap">
																		<div class="modify_icon_wrap">
																			<span class="icon_modify"></span><!-- Modify Blue Icon -->
																			<table class="modification">
																				<colgroup>
																					<col class="col_list_type2_detailview_th">
																					<col >
																					<col class="col_authority_value">
																					<col class="col_authority_value">
																				</colgroup>
																				<tbody>
																					<tr>
																						<th rowspan="14">
																							<p class="list_type2_cell_split"><span class="ellipsis">Inside</span></p>
																						</th>
																						<td><span class="ellipsis">Vital sign</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Intake &amp; output</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Allergies</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Problems</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Immunization</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Lab Reselt</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Medication</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Treatment</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Consultation</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Progress Note</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Documents</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item"></span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Operations</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item"></span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">More Records</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item"></span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item"></span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Order</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Possibility</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Possibility</span></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td class="td_table_wrap">
																		<div class="modify_icon_wrap">
																			<span class="icon_modify"></span><!-- Modify Blue Icon -->
																			<table class="modification">
																				<colgroup>
																					<col class="col_list_type2_detailview_th">
																					<col >
																					<col class="col_authority_value">
																					<col class="col_authority_value">
																				</colgroup>
																				<tbody>
																					<tr>
																						<th rowspan="14">
																							<p class="list_type2_cell_split"><span class="ellipsis">Outside</span></p>
																						</th>
																						<td><span class="ellipsis">Vital sign</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Intake &amp; output</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Allergies</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Problems</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Immunization</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Lab Reselt</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Medication</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Treatment</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Consultation</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Progress Note</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																						<td class="td_authority_value"><span class="ellipsis">No permission</span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Documents</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Operations</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">More Records</span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																						<td class="td_authority_value"><span class="ellipsis"><span class="item">Read</span><span class="item">Write</span></span></td>
																					</tr>
																					<tr>
																						<td><span class="ellipsis">Order</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Possibility</span></td>
																						<td class="td_authority_value"><span class="ellipsis">Possibility</span></td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
								
									
													</td>
												</tr>
												<tr>
													<th><span class="ellipsis">IP Address</span></th>
													<td><span class="ellipsis">192.168.0.1</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
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
													<!-- <div class="list_type2_detailview">
														<table>
															<colgroup>
																<col class="col_list_type2_detailview_th">
																<col >
															</colgroup>
															<tbody>
																<tr>
																	<th colspan="2" class="list_type2_detailview_head">
																		<span class="ellipsis">Creation</span>
																		<span class="date">2013-01-01 01:30:30</span>
																	</th>
																</tr>
																<tr>
																	<th><span class="ellipsis">Guroup Name</span></th>
																	<td><span class="ellipsis">A Gruop</span></td>
																</tr>
																<tr>
																	<th><span class="ellipsis">내부 Rights</span></th>
																	<td>
																		<div class="group_history_info_action_list">
																			<dl>
																				<dt><span class="ellipsis">적용범위</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">병원 환자 전체</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">읽기</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">V/S 조회가능</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">쓰기</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">V/S 입력 가능</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">Emergency Access</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">조회 가능</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">Order</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">Approval</span></dd>
																			</dl>
																		</div>
																	</td>
																</tr>
																<tr>
																	<th><span class="ellipsis">외부 Rights</span></th>
																	<td>
																		<div class="group_history_info_action_list">
																			<dl>
																				<dt><span class="ellipsis">적용범위</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">내게 Assing된 환자</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">읽기</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">V/S 조회가능</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">쓰기</span></dt>
																				<dd class="action_list_value"><span class="ellipsis">V/S 입력 가능</span></dd>
																			</dl>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														<table>
															<colgroup>
																<col class="col_list_type2_detailview_th">
																<col >
															</colgroup>
															<tbody>
																<tr>
																	<th colspan="2" class="list_type2_detailview_head">
																		<span class="ellipsis">Modification</span>
																		<span class="date">2013-01-01 01:30:30</span>
																	</th>
																</tr>
																<tr>
																	<th><span class="ellipsis">Guroup Name</span></th>
																	<td><span class="ellipsis">A Gruop</span></td>
																</tr>
																<tr>
																	<th><span class="ellipsis">내부 Rights</span></th>
																	<td>
																		<div class="group_history_info_action_list modification">
																			<div class="action_list_left">
																				<dl>
																					<dt><span class="ellipsis">적용범위</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">병원 환자 전체</span></dd>
																				</dl>
																				<dl>
																					<dt><span class="ellipsis">읽기</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">V/S 조회가능</span></dd>
																				</dl>
																				<dl>
																					<dt><span class="ellipsis">쓰기</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">V/S 입력 가능</span></dd>
																				</dl>
																				<dl>
																					<dt><span class="ellipsis">Emergency Access</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">조회 가능</span></dd>
																				</dl>
																				<dl>
																					<dt><span class="ellipsis">Order</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">Approval</span></dd>
																				</dl>
																			</div>
																			<div class="action_list_right">
																				<ul>
																					<li><span class="ellipsis">병원 환자 전체</span></li>
																					<li><span class="ellipsis">V/S 조회가능</span></li>
																					<li><span class="ellipsis">V/S 입력 가능</span></li>
																					<li><span class="ellipsis">조회 가능</span></li>
																					<li><span class="ellipsis">Approval</span></li>
																				</ul>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<th><span class="ellipsis">외부 Rights</span></th>
																	<td>
																		<div class="group_history_info_action_list modification">
																			<div class="action_list_left">
																				<dl>
																					<dt><span class="ellipsis">적용범위</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">내게 Assing된 환자</span></dd>
																				</dl>
																				<dl>
																					<dt><span class="ellipsis">읽기</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">V/S 조회가능</span></dd>
																				</dl>
																				<dl>
																					<dt><span class="ellipsis">쓰기</span></dt>
																					<dd class="action_list_value"><span class="ellipsis">V/S 입력 가능</span></dd>
																				</dl>
																			</div>
																			<div class="action_list_right">
																				<ul>
																					<li><span class="ellipsis">내게 Assing된 환자</span></li>
																					<li><span class="ellipsis">V/S 조회가능</span></li>
																					<li><span class="ellipsis">V/S 입력 가능</span></li>
																				</ul>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<th><span class="ellipsis">Added User</span></th>
																	<td>
																		<div class="group_history_info_action_list">
																			<dl>
																				<dt><span class="ellipsis">Anne Hathaway</span></dt>
																				<dd><span class="ellipsis">anne@memr.com</span></dd>
																				<dd class="action_list_modi"><span class="ellipsis">User ID</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">Anne Hathaway</span></dt>
																				<dd><span class="ellipsis">anne@memr.com</span></dd>
																				<dd class="action_list_modi"><span class="ellipsis">User ID</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">Anne Hathaway</span></dt>
																				<dd><span class="ellipsis">anne@memr.com</span></dd>
																				<dd class="action_list_modi"><span class="ellipsis">User ID</span></dd>
																			</dl>
																		</div>
																	</td>
																</tr>
																<tr>
																	<th><span class="ellipsis">Delete User</span></th>
																	<td>
																		<div class="group_history_info_action_list">
																			<dl>
																				<dt><span class="ellipsis">Anne Hathaway</span></dt>
																				<dd><span class="ellipsis">anne@memr.com</span></dd>
																				<dd class="action_list_modi"><span class="ellipsis">User ID</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">Anne Hathaway</span></dt>
																				<dd><span class="ellipsis">anne@memr.com</span></dd>
																				<dd class="action_list_modi"><span class="ellipsis">User ID</span></dd>
																			</dl>
																			<dl>
																				<dt><span class="ellipsis">Anne Hathaway</span></dt>
																				<dd><span class="ellipsis">anne@memr.com</span></dd>
																				<dd class="action_list_modi"><span class="ellipsis">User ID</span></dd>
																			</dl>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
														<table>
															<colgroup>
																<col class="col_list_type2_detailview_th">
																<col >
															</colgroup>
															<tbody>
																<tr>
																	<th colspan="2" class="list_type2_detailview_head">
																		<span class="ellipsis">Delection</span>
																		<span class="date">2013-01-01 01:30:30</span>
																	</th>
																</tr>
																<tr>
																	<th><span class="ellipsis">Guroup Name</span></th>
																	<td><span class="ellipsis">A Gruop</span></td>
																</tr>
															</tbody>
														</table>
													</div> -->