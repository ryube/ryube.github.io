<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<script type="text/javascript">
	 $(document).ready(function () {
	 	log($('#notice_desc').css('width'))
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
								<h2 class="contents_title">Admin Notice<span class="contents_title_arrow"></span><em>Add</em></h2>
							</div>
							<div class="contents_top_right">
								<div class="search_wrap">
									<div class="combobox">
										<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
										<div class="combobox_list" style="display:none;">
											<ul>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
										</ul>
										</div>
									</div><div class="search">
										<input type="text" placeholder="Search">
										<div class="search_suggest">
											<ul>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
											</ul>
										</div>									
										<a href="#" class="search_btn">Search</a>
									</div>
								</div>
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
												<td><input type="text" class="list_type2_input_width"></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Name</span></th>
												<td>
													<div class="list_type2_file_upload">
														<p class="list_type2_file_upload_btn">
															<a href="#" class="btn"><span>Delete</span></a>
															<a href="#" class="btn"><span>Edit</span></a>
														</p>
														<table class="list_type_upload">
															<colgroup>
																<col class="col_upload_chk">
																<col class="col_upload_name">
																<col class="col_upload_size">
															</colgroup>
															<thead>
																<tr>
																	<th><input type="checkbox"></th>
																	<th><span class="ellipsis">Name</span></th>
																	<th class="ac"><span class="ellipsis">Size</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="checkbox"></td>
																	<td>Galaxy Tab 7.0</td>
																	<td class="ac">1.2MB</td>
																</tr>
															</tbody>
														</table>
													</div>
												</td>
											</tr>
											<tr>
												<th><span class="ellipsis">Content</span></th>
												<td>
													<span class="label_holder vari">
														<label for="notice_desc">설명~~~</label>
														<textarea id="notice_desc" class="list_type2_textarea"></textarea>
													</span>
												</td>
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
