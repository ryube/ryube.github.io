<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<body>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:320px; height:; left: 50%; top: 50%; margin:-87px 0 0 -160px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Error</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<article class="layerpop_body_message">
						<div class="layerpop_body_message_txt">
							<p>입력한 Bed에 이미 Device가 정보가 존재합니다.</p>
							<p>Mac Address : 11-22-33-44-55-66</p>
							<p>S/N : 11-22-33-44-55-66</p>
							<p>자산번호 : 123456789</p>
							<p class="layerpop_body_message_divider">해당 Bed에 새로운 Device를 등록하기 위해서는 <br />
							기존 Device의 Bed 정보를 변경해주시기 바랍니다.</p>
						</div>  
					</article>
					<div class="layerpop_body_bottom_btn">
				 		<a href="#" class="btn blue"><span>OK</span></a>
				 	</div>
				</div>			 	
			</section>
			<footer class="layerpop_foot">
				<!-- layerpop_foot round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_foot round -->
			</footer>
		</article>
	</section>
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
