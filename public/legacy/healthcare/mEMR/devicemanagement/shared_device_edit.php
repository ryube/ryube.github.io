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
								<h2 class="contents_title">Shared Device<span class="contents_title_arrow"></span><em>Edit</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">is mandatory items</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">User Information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Model</span></span></th>
												<td>
													<input type="text" value="MC603KH" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">OS Version</span></span></th>
												<td>
													<input type="text" value="6.0.1" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Device ID</span></span></th>
												<td>
													<input type="text" value="01 242500 189404 2" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Mac Address</span></span></th>
												<td>
													<input type="text" value="CC:08:E0:59:1F:9D" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Status</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="share_device_status_01"><label for="share_device_status_01">Waiting</label></span>
													<span class="info_type1_radio"><input type="radio" id="share_device_status_02"><label for="share_device_status_02">Approved</label></span>
													<span class="info_type1_radio"><input type="radio" id="share_device_status_03"><label for="share_device_status_03">Denied</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Authority for user</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="share_device_authority_01"><label for="share_device_authority_01">Permission to use</label></span>
													<span class="info_type1_radio"><input type="radio" id="share_device_authority_02"><label for="share_device_authority_02">Denial of use</label></span>
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
