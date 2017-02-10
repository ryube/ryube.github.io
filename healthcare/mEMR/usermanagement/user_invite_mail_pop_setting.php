<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
<script type="text/javascript">
 $(document).ready(function () {
fakescroll.set('custom_scroll',{ x:{disable:true}});
 });
</script>
<body>
	<section class="layerpop_wrap"><!--z-index: 300;-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:690px; height:500px;; left: 50%; top: 50%; margin:-187px 0 0 -345px;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>
				<h1>Invite mail Default format</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<div class="list_type2">
						<table>
							<colgroup>
								<col class="col_list_type2_th">
								<col class="col_list_type2_td">	
							</colgroup>
							<tbody>
								<tr>
									<th><span class="ellipsis">Subject</span></th>
									<td><input type="text" class="info info_type1_input_subject" placeholder="Title"></td>
								</tr>
							</tbody>
						</table>
						<div class="invite_textarea_wrap">
							<div contenteditable="true" class="textarea">blar blar....  <span class="highlight" contenteditable="false">[[USER_NAME]]</span></div>
						</div>
					</div>
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
				<!-- layerpop_head round -->
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
								<h2 class="contents_title">User<span class="contents_title_arrow"></span><em>Invite</em></h2>
							</div>
							<div class="contents_top_right">
								<!-- <p class="contents_top_right_req_txt">
									<span class="ico_req">Required fileds</span>									
								</p> -->
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Invite mail sending</h3>
							<section class="contents_layout_detail_wrap">
								<div class="list_type2">
									<table>
										<colgroup>
											<col class="col_list_type2_th">
											<col class="col_list_type2_td">	
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">To</span></th>
												<td>
													<div class="inner_list_type1_wrap">
														<p class="inner_list_type1_topbtn">
															<a href="#" class="btn"><span>Add</span></a>
															<a href="#" class="btn"><span>Delete</span></a>
														</p>
														<div id="custom_scroll" class="list_type1 inner_scroll">
															<table>
																<colgroup>
																	<col class="col_list_type2_chk">
																	<col >
																	<col >
																</colgroup>
																<thead>
																	<tr>
																		<th class="chk"><input type="checkbox"></th>
																		<th class="th_sort">
																			<div class="sort_wrap">
																				<span class="ellipsis">User Name</span>
																				<span class="list_sort"></span>
																			</div>															
																		</th>
																		<th><span class="ellipsis">User Email</span></th>
																		<th class="th_last"><span class="ellipsis">User ID</span></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																	<tr>
																		<td class="chk"><input type="checkbox"></td>
																		<td><span class="ellipsis">Anne Hathaway</span></td>
																		<td><span class="ellipsis">anne@memr.com</span></td>
																		<td><span class="ellipsis">user ID</span></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Subject</span></th>
												<td><input type="text" class="info info_type1_input_subject" value="Title"></td>
											</tr>
										</tbody>
									</table>
									<div class="invite_textarea_wrap"><textarea class=""></textarea></div>
								</div>
								<div class="contents_layout_detail_bot_btnsec">
									<a href="#" class="btn"><span>Send</span></a>
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
