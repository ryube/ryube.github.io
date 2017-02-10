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
								<h2 class="contents_title">Nurse Call<span class="contents_title_arrow"></span><em>Add</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fields</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Contents Information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Name</span></span></th>
												<td>
													<input type="text" value="Nurse Call Name" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Icon</span></th>
												<td>
													<div class="info_type1_icon_select_wrap">
														<p><img src="" alt="" class="img_contents_icon"></p>
														<ul>
															<li>
																<label for="nurse_call_icon01"><img src="" alt="" class="img_contents_icon"></label>
																<div class="info_type1_icon_radio_wrap"><input type="radio" id="nurse_call_icon01"></div>
															</li>
															<li>
																<label for="nurse_call_icon02"><img src="" alt="" class="img_contents_icon"></label>
																<div class="info_type1_icon_radio_wrap"><input type="radio" id="nurse_call_icon02"></div>
															</li>
															<li>
																<label for="nurse_call_icon03"><img src="" alt="" class="img_contents_icon"></label>
																<div class="info_type1_icon_radio_wrap"><input type="radio" id="nurse_call_icon03"></div>
															</li>
															<li>
																<label for="nurse_call_icon04"><img src="" alt="" class="img_contents_icon"></label>
																<div class="info_type1_icon_radio_wrap"><input type="radio" id="nurse_call_icon04"></div>
															</li>
															<li>
																<label for="nurse_call_icon05"><img src="" alt="" class="img_contents_icon"></label>
																<div class="info_type1_icon_radio_wrap"><input type="radio" id="nurse_call_icon05"></div>
															</li>
															
														</ul>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Messages</span></span></th>
												<td>
													<div class="info_type1_textarea_wrap">
														<textarea class="info">Message</textarea>
														<p class="info_type1_textarea_txt_count">10/20</p>
													</div>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								<div class="contents_layout_detail_bot_btnsec">
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
