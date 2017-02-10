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
								<h2 class="contents_title">Notice<span class="contents_title_arrow"></span><em>Add</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_chk_pop"><input type="checkbox" id="noti_pop_01"><label for="noti_pop_01">팝업으로도 알리기</label></p>
							</div>
						</article>
						<article class="contents_layout">
							<section class="contents_layout_notice_wrap">
								<div class="list_type2">
									<table>
										<colgroup>
											<col class="col_list_type2_th">
											<col class="col_list_type2_td">	
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Title</span></th>
												<td>
													<div class="combobox list_type2_combobox_width">
														<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
														<div class="combobox_list">
															<ul>
																<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																<li><a href="#"><span class="ellipsis">option 1</span></a></li>
															</ul>
														</div>
													</div>

												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Title</span></th>
												<td><input type="text" class="list_type2_input_width"></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Content</span></th>
												<td><textarea class="list_type2_textarea"></textarea></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="contents_layout_notice_bot_btnsec">
									<a href="#" class="btn"><span>Save</span></a>
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
