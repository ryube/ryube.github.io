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
								<h2 class="contents_title">Patient Management<span class="contents_title_arrow"></span><em>Anne Hathaway</em></h2>
							</div>
							<div class="contents_top_right">
							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Edit</span></a>
									<a href="#" class="btn"><span>Clear</span></a>
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
							<h3 class="contents_layout_detail_head">Patient Information</h3>
							<div id="detail_scroll_area" class="layout_list_mid_scroll_area">
								<div class="detail_type1">
									<h4><strong class="tit">Patient Info</strong><a href="#" class="btn"><span>Bed Change</span></a></h4>
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
												<th><span class="ellipsis">Patient ID</span></th>
												<td><span class="ellipsis">AABBCC1234</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Name</span></th>
												<td><span class="ellipsis">Anne Hathaway</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Birth Date</span></th>
												<td><span class="ellipsis">1988.08.27</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider">
								<div class="detail_type1">
									<h4>Care Team Info.</h4>
									<div class="list_type1 in_detail">
										<table>
											<colgroup>
												<col width="18%">
												<col>							
												<col>							
												<col>							
											</colgroup>
											<thead>
												<tr>
													<th><span class="ellipsis">Photo</span></th>
													<th><span class="ellipsis">Name</span></th>
													<th><span class="ellipsis">Position</span></th>
													<th class="th_last"><span class="ellipsis">Detail</span></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img src="" alt="" class="care_photo" width="48" height="48"></td>
													<td><span class="ellipsis">Anne Hathaway</span></td>
													<td><span class="ellipsis">Nurse</span></td>
													<td><span class="ellipsis"><a href="#">Link</a></span></td>
												</tr>
												<tr>
													<td><img src="" alt="" class="care_photo" width="48" height="48"></td>
													<td><span class="ellipsis">Anne Hathaway</span></td>
													<td><span class="ellipsis">Nurse</span></td>
													<td><span class="ellipsis"><a href="#">Link</a></span></td>
												</tr>
												<tr>
													<td><img src="" alt="" class="care_photo" width="48" height="48"></td>
													<td><span class="ellipsis">Anne Hathaway</span></td>
													<td><span class="ellipsis">Nurse</span></td>
													<td><span class="ellipsis"><a href="#">Link</a></span></td>
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
