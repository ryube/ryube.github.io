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
								<h2 class="contents_title">Device Management<span class="contents_title_arrow"></span><em>Add</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fields</span>									
								</p>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Detail Information</h3>
							<section class="contents_layout_detail_wrap">
								<div class="detail_type1">
									<h4>Product Info.</h4>
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Model</span></span></th>
												<td>
													<input type="text" value="Model Name" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Android ver.</span></span></th>
												<td>
													<input type="text" value="Android ver." class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Mac Address</span></span></th>
												<td>
													<input type="text" value="AA" class="info info_type1_input_width_mac">
													<input type="text" value="AA" class="info info_type1_input_width_mac">
													<input type="text" value="AA" class="info info_type1_input_width_mac">
													<input type="text" value="AA" class="info info_type1_input_width_mac">
													<input type="text" value="AA" class="info info_type1_input_width_mac">
													<input type="text" value="AA" class="info info_type1_input_width_mac">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">S/N</span></span></th>
												<td>
													<input type="text" value="AA" class="info info_type1_input_width_mac">
													<input type="text" value="AA" class="info info_type1_input_width_mac">
													<input type="text" value="1234" class="info info_type1_input_width_sn">
													<input type="text" value="1234" class="info info_type1_input_width_sn"> 
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">자산 번호</span></span></th>
												<td>
													<input type="text" value="sa1234" class="info info_type1_input_width">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<hr class="detail_divider" />
								<div class="detail_type1">
									<h4>Basic Info.</h4>
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">State</span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="device_cate_01"><label for="device_cate_01">Distributed</label></span>
													<span class="info_type1_radio"><input type="radio" id="device_cate_02"><label for="device_cate_02">Undistributed</label></span>
													<span class="info_type1_radio"><input type="radio" id="device_cate_03"><label for="device_cate_03">Malfunction</label></span>
													<span class="info_type1_radio"><input type="radio" id="device_cate_04"><label for="device_cate_04">Stopped</label></span>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Building</span></th>
												<td>
													<input type="text" value="Building Number" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Floor</span></th>
												<td>
													<input type="text" value="Floor Number" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Ward</span></th>
												<td>
													<input type="text" value="Ward Name" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Room</span></th>
												<td>
													<input type="text" value="Room Number" class="info info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Bed ID</span></th>
												<td>
													<input type="text" value="123455" class="info info_type1_input_width">
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
