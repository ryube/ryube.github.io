<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
<body>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:320px; height:; left: 50%; top: 50%; margin:-87px 0 0 -160px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Cancel</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<article class="layerpop_body_message">
						<div class="layerpop_body_message_txt">
							<p>User 추가를 취소하시겠습니까? <br />
							취소 시 입력하신 정보는 저장되지 않습니다.</p>
						</div>  
					</article>
					<div class="layerpop_body_bottom_btn">
				 		<a href="#" class="btn blue"><span>OK</span></a>
				 		<a href="#" class="btn"><span>Cancel</span></a>
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
								<h2 class="contents_title">User<span class="contents_title_arrow"></span><em>Edit a user</em></h2>
							</div>
							<div class="contents_top_right">
								<p class="contents_top_right_req_txt">
									<span class="ico_req">Required fileds</span>									
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
												<th><span class="ellipsis"><span class="ico_req">User Name</span></span></th>
												<td>
													<input type="text" value="First name" class="info_type1_input_width">
													<input type="text" value="Last name" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Email Address</span></span></th>
												<td>
													<p class="info_type1_cell_split">
														<input type="text" value="Ann" class="info_type1_input_width">
														<a href="#" class="btn"><span>Check</span></a>
													</p>
													<p class="info_type1_cell_split">
														<input type="checkbox" id="idforemail"><label for="idforemail">Use this email address for User ID</label>
													</p>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">ID</span></span></th>
												<td>
													<input type="text" value="User ID" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Password</span></span></th>
												<td>
													<p class="info_type1_cell_split">
														<input type="text" value="Password" class="info_type1_input_width">
													</p>
													<p class="info_type1_cell_split">
														<input type="text" value="Reenter Password" class="info_type1_input_width">
													</p>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis"><span class="ico_req">Status</span></span></th>
												<td>
													<span class="info_type1_radio"><input type="radio" id="add_user_status_01"><label for="add_user_status_01">Activated</label></span>
													<span class="info_type1_radio"><input type="radio" id="add_user_status_02"><label for="add_user_status_02">Inactivated</label></span>
												</td>
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
												<th><span class="ellipsis">Mobile</span></th>
												<td>
													<div class="info_type1_phone_num">
														<input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class=""><span class="info_type1_phone_num_dash">-</span><input type="text" value="" class="">
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Preliminary Email</span></th>
												<td>
													<input type="text" value="User ID" class="info_type1_input_width">
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">ORG</span></th>
												<td>
													<div class="info_type1_cell_split">
														<div class="combobox info_type1_combo_width">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Unassigned</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
														<a href="#" class="btn"><span>Delete</span></a>
													</div>
													<div class="info_type1_cell_split">
														<div class="combobox info_type1_combo_width">
															<a href="#"><span class="combobox_value"><span class="ellipsis">Unassigned</span></span><span class="combobox_icon"></span></a>
															<div class="combobox_list">
																<ul>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																	<li><a href="#"><span class="ellipsis">option 1</span></a></li>
																</ul>
															</div>
														</div>
														<a href="#" class="btn"><span>Delete</span></a>
													</div>
													<div class="info_type1_cell_split">
														<a href="#" class="btn info_type1_btn_plus_width"><span><b class="btn_ico_blue_plus"></b></span></a>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Group</span></th>
												<td>
													<div class="combobox info_type1_combo_width">
														<a href="#"><span class="combobox_value"><span class="ellipsis">Select a Group</span></span><span class="combobox_icon"></span></a>
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
											
										</tbody>
									</table>
								</div>
								<div class="contents_layout_detail_bot_btnsec">
									<a href="#" class="btn blue"><span>Save and Send Invitation</span></a>
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
