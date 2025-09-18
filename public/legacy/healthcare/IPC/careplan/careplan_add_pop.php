<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<body>
	<section class="layerpop_wrap" ><!--z-index: 300; delete inline style-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:690px; left: 30%; top: 30%; margin:0;"><!--z-index: 600;-->
			<header class="layerpop_head">
				<!-- layerpop_head round -->
				<span class="bg_layerpop_round lt"></span>
				<span class="bg_layerpop_round rt"></span>				
				<!-- layerpop_head round -->
				<h1>Add</h1>
				<a href="#" class="btn_layer_close"></a>
			</header>
			<section class="layerpop_body">
				<div class="layerpop_body_padding type1">
					<div class="layer_detail_type1">
						<table>
							<colgroup>
								<col class="col_layer_detail_type1">
								<col >
							</colgroup>
							<tbody>
								<tr>
									<th><span class="ellipsis"><span class="ico_req">Title</span></span> </th>
									<td><input type="text" placeholder="title" class="layer_detail_long_input"></td>
								</tr>
								<tr>
									<th><span class="ellipsis">Start Time</span> </th>
									<td class="td_layer_date">
										<div class="combobox">
											<a href="#"><span class="combobox_value"><span class="ellipsis">AM</span></span><span class="combobox_icon"></span></a>
											<div class="combobox_list">
												<ul>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
												</ul>
											</div>
										</div>
										<div class="combobox">
											<a href="#"><span class="combobox_value"><span class="ellipsis">09:00</span></span><span class="combobox_icon"></span></a>
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
									<th><span class="ellipsis">End Time</span> </th>
									<td class="td_layer_date">
										<div class="combobox">
											<a href="#"><span class="combobox_value"><span class="ellipsis">AM</span></span><span class="combobox_icon"></span></a>
											<div class="combobox_list">
												<ul>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
												</ul>
											</div>
										</div>
										<div class="combobox">
											<a href="#"><span class="combobox_value"><span class="ellipsis">09:00</span></span><span class="combobox_icon"></span></a>
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
					<div class="layer_detail_fold">
						<span class="btn_fold"></span>
						<div class="layer_detail_type1" style="display: none;">
							<table>
								<colgroup>
									<col class="col_layer_detail_type1">
									<col >
								</colgroup>
								<tbody>
									<tr>
										<th><span class="ellipsis">Description</span></th>
										<td>
											<div class="layer_detail_textarea">
												<p class="txt_count">10/20 byte</p>
												<textarea></textarea>
											</div>
										</td>
									</tr>
									<tr>
										<th><span class="ellipsis">Location</span></th>
										<td>
											<input type="text" placeholder="Location">
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="layerpop_body_bottom_btn">
						<a href="#" class="btn blue"><span>Delete</span></a>
				 		<a href="#" class="btn blue"><span>Save</span></a>
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
</body>
</html>
