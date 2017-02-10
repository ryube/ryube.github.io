<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<script type="text/javascript">
 $(document).ready(function () {
 	//fakescroll.set('custom_scroll',{ x:{disable:true}});
 	 $( "#resizable" ).resizable({maxHeight: 250, maxWidth: 450, minHeight: 80, minWidth: 350});//
 	 $( "#resizable1" ).resizable({maxHeight: 250, maxWidth: 450, minHeight: 80, minWidth: 350});//
 	 $( "#resizable2" ).resizable({maxHeight: 250, maxWidth: 450, minHeight: 80, minWidth: 350});
 });
</script>
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
								<h2 class="contents_title">Device Management<span class="contents_title_arrow"></span><em>Add</em></h2>
							</div>
							<div class="contents_top_right">
							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>delete</span></a>
									<a href="#" class="btn"><span>Edit</span></a>
								</span>
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
							<h3 class="contents_layout_detail_head">Detail Information</h3>
							<div id="detail_scroll_area" class="layout_list_mid_scroll_area">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">mEMR Profile</span></span></th>
												<td><span class="ellipsis">mEMR Profile 10.1</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Main Verion</span></span></th>
												<td><span class="ellipsis">mEMR Main 10.1</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Main file</span></span></th>
												<td>
													<div id="resizable" class="provi_resize_box">
														<div class="resize_body">
															<div>mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml </div>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Status</span></span></th>
												<td><span class="ellipsis">Inactive</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">General Config File</span></th>
												<td>
													<div class="list_type2_file_upload">
														<table class="list_type_upload type1">
															<colgroup>
																<col width="20%">
																<col width="90px">
																<col>
															</colgroup>
															<thead>
																<tr>
																	<th><span class="ellipsis">Name</span></th>
																	<th><span class="ellipsis">Version</span></th>
																	<th><span class="ellipsis">File</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><span class="ellipsis">mEMR Profile 10.1</span></td>
																	<td><span class="ellipsis">10.1</span></td>
																	<td class="al">
																		<div id="resizable1" class="provi_resize_box">
																			<div class="resize_body">
																				<div>mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml </div>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Screen File</span></th>
												<td>
													<div class="list_type2_file_upload">
														<table class="list_type_upload type1">
															<colgroup>
																<col width="20%">
																<col width="90px">
																<col>
															</colgroup>
															<thead>
																<tr>
																	<th><span class="ellipsis">Name</span></th>
																	<th><span class="ellipsis">Version</span></th>
																	<th><span class="ellipsis">File</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><span class="ellipsis">mEMR Profile 10.1</span></td>
																	<td><span class="ellipsis">10.1</span></td>
																	<td class="al">
																		<div id="resizable2" class="provi_resize_box">
																			<div class="resize_body">
																				<div>mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml mainxml </div>
																			</div>
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
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
