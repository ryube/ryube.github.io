<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr.php"); ?>
<body>
	<script type="text/javascript">
	$(document).ready(function () {
		layoutSplit = new ContentsScreenControl2(CONTENTS_SCREEN_TYPE.horizontal);
		fakescroll.set('custom_scroll');
	});
	</script>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:320px; height:; left: 50%; top: 120px; margin:0 0 0 -160px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Move to</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<article class="layerpop_body_category">
						<div id="custom_scroll"class="layerpop_body_category_list_wrap">
							<div class="group_tree">
								<ul>
									<li><div><input type="checkbox"><span class="group_tree_item">전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택</span></div></li>
									<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
									<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
									<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
									<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
									<li class="on"><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div>
										<ul>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li class="on"><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div>
												<ul>
													<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
								</ul>
																	
							</div>
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
								<h2 class="contents_title">User Management<span class="contents_title_arrow"></span>Group<span class="contents_title_arrow"></span>Edit<span class="contents_title_arrow"></span>
									<div class="combobox">
										<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
										<div class="combobox_tree_wrap">
											<div class="combobox_tree">
												<ul>
													<li><div><span class="combobox_tree_item folder">GS1</span></div></li>
													<li><div><span class="combobox_tree_item folder">GS1</span></div></li>
													<li><div><span class="combobox_tree_item folder">GS1</span></div></li>
													<li><div><span class="combobox_tree_item folder">GS1</span></div></li>
													<li><div><span class="combobox_tree_item folder">GS1</span></div></li>
													<li><div><span class="combobox_tree_item folder">GS1</span></div></li>
													<li class="on open"><div><span class="combobox_tree_item folder">GS1</span></div>
														<ul>
															<li><div><span class="combobox_tree_item">GS1</span></div></li>
															<li><div><span class="combobox_tree_item">GS1</span></div></li>
															<li class="on"><div><span class="combobox_tree_item folder">GS1</span></div></li>
															<li><div><span class="combobox_tree_item">GS1</span></div></li>
															<li class="on open"><div><span class="combobox_tree_item folder">GS1</span></div>
																<ul>
																	<li><div><span class="combobox_tree_item folder">GSssssssssssssssssssssssssssss1</span></div></li>
																	<li><div><span class="combobox_tree_item"><span class="ellipsis">GS1</span></span></div></li>
																	<li><div><span class="combobox_tree_item"><span class="ellipsis">GS1</span></span></div></li>
																	<li><div><span class="combobox_tree_item"><span class="ellipsis">GS1</span></span></div></li>
																	<li><div><span class="combobox_tree_item"><span class="ellipsis">GS1</span></span></div>

																	</li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
										<!-- View 용 CSS 페이지에 적용하지 마세요 -->
										<style type="text/css">
											.combobox:hover .combobox_tree_wrap {display: block;}
										</style>
										<!-- // View 용 CSS 페이지에 적용하지 마세요 -->
									</div></h2>
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
											</ul>
										</div>									
										<a href="#" class="search_btn">Search</a>
									</div>
								</div>
							</div>
						</article>
						<article class="contents_edit">
							<dl class="contents_edit_rename">
								<dt>
									<span class="ellipsis">Org Name</span>
								</dt>
								<dd>
									<span class="editable_elem" contenteditable="true">Org 5-1</span>
									<a href="#" class="btn"><span>Edit</span></a><a href="#" class="btn"><span>Done</span></a><a href="#" class="btn"><span>Cancel</span></a>
								</dd>
							</dl>
						</article>
						<article class="contents_layout">
							<section id="contents_layout_split" class="layout_change">
								<article class="layout_list ui-layout-center">
									<div class="layout_list_mid_scroll_wrapper">
										<h3 class="contents_layout_detail_head">Authority information</h3>
										<div class="layout_list_mid_scroll_area">
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
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="patients_assigned01"><label for="patients_assigned01"><span class="ellipsis">Permission</span></label>
																	<input type="checkbox" id="patients_assigned02"><label for="patients_assigned02"><span class="ellipsis">Denial</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Check patients of department I belong</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="patients_department01"><label for="patients_department01"><span class="ellipsis">Permission</span></label>
																	<input type="checkbox" id="patients_department02"><label for="patients_department02"><span class="ellipsis">Denial</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Check all patients of the hospital </span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="patients_hospital01"><label for="patients_hospital01"><span class="ellipsis">Permission</span></label>
																	<input type="checkbox" id="patients_hospital02"><label for="patients_hospital02"><span class="ellipsis">Denial</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Emergency Access available</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="emergency_access01"><label for="emergency_access01"><span class="ellipsis">Permission</span></label>
																	<input type="checkbox" id="emergency_access02"><label for="emergency_access02"><span class="ellipsis">Denial</span></label>
																</span>
															</td>
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
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_vital_sign01"><label for="inside_vital_sign01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_vital_sign02"><label for="inside_vital_sign02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Intake &amp; output</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_intake_01"><label for="inside_intake_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_intake_02"><label for="inside_intake_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Allergies</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_allergies_01"><label for="inside_allergies_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_allergies_02"><label for="inside_allergies_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Problems</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_problems_01"><label for="inside_problems_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_problems_02"><label for="inside_problems_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Immunization</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_immunization_01"><label for="inside_immunization_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_immunization_02"><label for="inside_immunization_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Lab Reselt</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_lab_reselt_01"><label for="inside_lab_reselt_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_lab_reselt_02"><label for="inside_lab_reselt_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Medication</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_medication_01"><label for="inside_medication_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_medication_02"><label for="inside_medication_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Treatment</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_treatment_01"><label for="inside_treatment_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_treatment_02"><label for="inside_treatment_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Consultation</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_consultation_01"><label for="inside_consultation_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_consultation_02"><label for="inside_consultation_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Progress Note</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_progress_note_01"><label for="inside_progress_note_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_progress_note_02"><label for="inside_progress_note_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Documents</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_documents_01"><label for="inside_documents_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_documents_02"><label for="inside_documents_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Operations</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_operations_01"><label for="inside_operations_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_operations_02"><label for="inside_operations_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">More Records</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_more_records_01"><label for="inside_more_records_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_more_records_02"><label for="inside_more_records_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Order</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="inside_order_01"><label for="inside_order_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="inside_order_02"><label for="inside_order_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
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
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_vital_sign01"><label for="outside_vital_sign01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_vital_sign02"><label for="outside_vital_sign02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Intake &amp; output</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_intake_01"><label for="outside_intake_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_intake_02"><label for="outside_intake_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Allergies</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_allergies_01"><label for="outside_allergies_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_allergies_02"><label for="outside_allergies_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Problems</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_problems_01"><label for="outside_problems_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_problems_02"><label for="outside_problems_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Immunization</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_immunization_01"><label for="outside_immunization_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_immunization_02"><label for="outside_immunization_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Lab Reselt</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_lab_reselt_01"><label for="outside_lab_reselt_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_lab_reselt_02"><label for="outside_lab_reselt_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Medication</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_medication_01"><label for="outside_medication_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_medication_02"><label for="outside_medication_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Treatment</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_treatment_01"><label for="outside_treatment_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_treatment_02"><label for="outside_treatment_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Consultation</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_consultation_01"><label for="outside_consultation_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_consultation_02"><label for="outside_consultation_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Progress Note</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_progress_note_01"><label for="outside_progress_note_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_progress_note_02"><label for="outside_progress_note_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">Documents</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_documents_01"><label for="outside_documents_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_documents_02"><label for="outside_documents_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Operations</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_operations_01"><label for="outside_operations_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_operations_02"><label for="outside_operations_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
														<tr>
															<td><span class="ellipsis">More Records</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_more_records_01"><label for="outside_more_records_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_more_records_02"><label for="outside_more_records_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
															<td><span class="ellipsis">Order</span></td>
															<td class="td_authority_value">
																<span class="info_type1_chk_hori">
																	<input type="checkbox" id="outside_order_01"><label for="outside_order_01"><span class="ellipsis">Read</span></label>
																	<input type="checkbox" id="outside_order_02"><label for="outside_order_02"><span class="ellipsis">Write</span></label>
																</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- <div class="detail_type1">
												<h4>Common</h4>
												<table class="info_type1">
													<colgroup>
														<col class="col_info_th">
														<col class="col_info_td">
														<col class="col_info_th">
														<col class="col_info_td">
													</colgroup>
													<tbody>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="detail_type1">
												<h4>Common</h4>
												<table class="info_type1">
													<colgroup>
														<col class="col_info_th">
														<col class="col_info_td">
														<col class="col_info_th">
														<col class="col_info_td">
													</colgroup>
													<tbody>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
														<tr>
															<th><span class="ellipsis">Read</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget01"><label for="access_inside_traget01"><span class="ellipsis">Allow</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_traget02"><label for="access_inside_traget02"><span class="ellipsis">Deny</span></label></span>
															</td>
															<th><span class="ellipsis">Order</span></th>
															<td>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order01"><label for="access_inside_order01"><span class="ellipsis">Read</span></label></span>
																<span class="info_type1_chk_hori"><input type="checkbox" id="access_inside_order02"><label for="access_inside_order01"><span class="ellipsis">Write</span></label></span>
															</td>
														</tr>
													</tbody>
												</table>
											</div> -->
										</div>
										<article class="layout_list_botbtn">
											<a href="#" class="btn"><span>Save</span></a>
											<a href="#" class="btn"><span>Save &amp; Add a User</span></a>
											<a href="#" class="btn"><span>Cancel</span></a>
										</article>
									</div>
								</article>
								<article class="layout_list ui-layout-south">
									<div class="layout_list_mid_scroll_wrapper">
										<div class="list_type1 right_padding ">
											<table>
												<colgroup>
													<col class="col_chk">
													<col class="">
													<col class="">
													<col class="">		
													<col class="">		
												</colgroup>
												<thead>
													<tr>
														<th class="td_chk"><input type="checkbox" /></th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Name</span>
																<span class="list_sort"></span>
																<!-- <div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer" style="display: ;">
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
																</div> -->
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">User ID</span>
																<span class="list_sort"></span>
																<!-- <div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer" style="display: ;">
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
																</div> -->
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Email</span>
																<span class="list_sort"></span>
																<!-- <div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer" style="display: ;">
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
																</div> -->
															</div>															
														</th>
														<th class="th_sort">
															<div class="sort_wrap">
																<span class="ellipsis">Mobile</span>
																<span class="list_sort"></span>
																<!-- <div class="filter_opt">
																	<span class="filter_ico"></span>
																	<div class="flter_opt_layer" style="display: ;">
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
																</div> -->
															</div>															
														</th>
												</thead>
											</table>
										</div>
										<div class="layout_list_mid_scroll_area">
											<div class="list_type1 list_verti_top">
												<table>
													<colgroup>
														<col class="col_chk">
														<col class="">						
													</colgroup>
													<tbody>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
															<td><span class="ellipsis">010-0000-0000</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne1234</span></td>
															<td><span class="ellipsis">ann@memr.com</span></td>
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
