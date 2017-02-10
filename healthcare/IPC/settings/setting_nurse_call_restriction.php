<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<script type="text/javascript">
$(window).load(function() {
	function settingWardHeight() {
		log($("#settingLayoutRight").innerHeight())
		var rightHeight = $("#settingLayoutRight").innerHeight(); 
		$("#settingLayoutLeft").css('height', rightHeight);
	};
	settingWardHeight();
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
								<h2 class="contents_title">Nurse Call</h2>
							</div>
							<div class="contents_top_right">

							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="btn_bundle">
									<button type="button" class="btn"><span><b class="btn_in_icon add"></b></span></button>
									<button type="button" class="btn"><span><b class="btn_in_icon del"></b></span></button>
								</span>
							</div>
							<div class="contents_option_right">
								
							</div>
						</article>
						<article class="contents_layout">
							<!-- <h3 class="contents_layout_detail_head">Restriction</h3> -->
							<section class="contents_layout_detail_wrap">
								<div class="detail_2column">
									<div class="column_left">
										<div class="detail_radio_list type1">
											<ul>
												<li><input type="radio" id="nurse_call_select_type_01"><label for="nurse_call_select_type_01">Select Patients</label></li>
												<li><input type="radio" id="nurse_call_select_type_02"><label for="nurse_call_select_type_02">All Patients</label></li>
											</ul>
										</div>
									</div>
									<div class="column_right">
										<div class="detail_list_scroll_wrap">
											<div class="list_type1">
												<table>
													<colgroup>
														<col class="col_chk">
														<col>						
														<col>						
														<col>						
													</colgroup>
													<tbody>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
														<tr>
															<td class="td_chk"><input type="checkbox" /></td>
															<td><span class="ellipsis">Anne Hathaway</span></td>
															<td><span class="ellipsis">Anne 01012</span></td>
															<td><span class="ellipsis">1988.09.27</span></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								
								<div class="contents_layout_detail_bot_btnsec setting no_border">
									<a href="#" class="btn blue"><span>Save</span></a>
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
