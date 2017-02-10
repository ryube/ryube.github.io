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
								<h2 class="contents_title">Admin Account<span class="contents_title_arrow"></span><em>Anne Hathaway</em></h2>
							</div>
							<div class="contents_top_right">

							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Delete</span></a>
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
							<h3 class="contents_layout_detail_head">Provisioning Information</h3>
							<div id="detail_scroll_area" class="layout_list_mid_scroll_area">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Name</span></th>
												<td>
													<input type="text" placeholder="Ann" class="info_type1_input_width">
													<a href="#" class="btn"><span>Check</span></a>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">ID</span></th>
												<td><span class="ellipsis">anne1234</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">ORG</span></th>
												<td>
													<p class="info_type1_cell_split">
														<span class="ellipsis">A Deparment</span>
													</p>
													<p class="info_type1_cell_split">
														<span class="ellipsis">B Deparment</span>
													</p>
													<p class="info_type1_cell_split">
														<span class="ellipsis">C Deparment</span>
													</p>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Mobile</span></th>
												<td><span class="ellipsis">010-0100-0120</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">가입 일시</span></th>
												<td><span class="ellipsis">2012-01-01 12:12:30</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">마지막 로그인 일시</span></th>
												<td><span class="ellipsis">2012-01-01 12:12:30</span></td>
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
