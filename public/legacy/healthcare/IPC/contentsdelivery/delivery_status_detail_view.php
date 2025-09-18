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
								<h2 class="contents_title">Contents Management<span class="contents_title_arrow"></span><em>Hospital Introdution</em></h2>
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
							<h3 class="contents_layout_detail_head">Delivery Information</h3>
							<div id="detail_scroll_area" class="layout_list_mid_scroll_area">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">ID</span></th>
												<td><span class="ellipsis">AABBCC1234</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Name</span></th>
												<td><span class="ellipsis">Anne Hathaway</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Birthdate</span></th>
												<td><span class="ellipsis">1988.09.27</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Released Contents</span></th>
												<td><span class="ellipsis">10</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider" />
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Content List</span></th>
												<td>
													<ul class="info_type1_contents_delivery_list">
														<li>
															<span class="ellipsis">Hospital Introduction(필수)Hospital Introduction(필수)Hospital Introduction(필수)Hospital Introduction(필수)Hospital Introduction(필수)Hospital Introduction(필수)Hospital Introduction(필수)Hospital Introduction(필수)Hospital Introduction(필수)</span>
															<span class="contents_delivery_list_state">Completed</span>
														</li>
														<li>
															<span class="ellipsis">Hospital Introduction(필수)</span>
															<span class="contents_delivery_list_state">Completed</span>
														</li>
														<li>
															<span class="ellipsis">Hospital Introduction</span>
															<span class="contents_delivery_list_state unompleted">Unompleted</span>
														</li>
													</ul>
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
