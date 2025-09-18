<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<body>
	<section class="layerpop_wrap" ><!--z-index: 300; delete inline style-->
		<div class="mask"></div><!--z-index: 500;-->
		<article class="layerpop" style="width:780px; left: 5%; top: 5%; margin:0;"><!--z-index: 600;-->
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
									<th><span class="ellipsis"><span class="ico_req">Time</span></span> </th>
									<td class="">
										<input type="hidden" id="cp_startTimeValue" />
										<div id="cp_startTime" class="combobox care_time_combo">
											<a href="#"><span class="combobox_value"><span class="ellipsis">09:00</span></span><span class="combobox_icon"></span></a>
											<div class="combobox_list">
												<ul>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
													<li><a href="#"><span class="ellipsis">option 1</span></a></li>
												</ul>
											</div>
										</div>
										<input type="hidden" id="cp_endTimeValue" />
										<div id="cp_endTime" class="combobox care_time_combo">
											<a href="#"><span class="combobox_value"><span class="ellipsis">AM 09:00</span></span><span class="combobox_icon"></span></a>
											<div class="combobox_list">
												<ul>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
												</ul>
											</div>
										</div>
										<span class="layer_sch_chk"><input type="checkbox" id="isToDo"><spring:message code="label.careplan.not.timeSetting" /></span>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="td_layer_date">
										<span class="ellipsis evt_period_tit">Start</span><input type="text" placeholder="2013.01.01">
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
										~
										<span class="ellipsis evt_period_tit end">End</span><input type="text" placeholder="2013.01.01">
										<span class="disable_wrap">
											<span class="disable_mask"></span>
											<div class="combobox disable">
												<a href="#"><span class="combobox_value"><span class="ellipsis">AM 09:00</span></span><span class="combobox_icon"></span></a>
												<div class="combobox_list">
													<ul>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													</ul>
												</div>
											</div>
										</span>
										<span class="layer_sch_chk"><input type="checkbox">All day</span>
									</td>
								</tr>
									<!-- 
									<th><span class="ellipsis">Start</span> </th>
									<td class="td_layer_date">
										<input type="text" placeholder="2013.01.01">
										<span class="disable_wrap">
											<span class="disable_mask"></span>
											<div class="combobox disable">
												<a href="#"><span class="combobox_value"><span class="ellipsis">AM 09:00</span></span><span class="combobox_icon"></span></a>
												<div class="combobox_list">
													<ul>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													</ul>
												</div>
											</div>
										</span>
										~
										<input type="text" placeholder="2013.01.01">
										<span class="disable_wrap">
											<span class="disable_mask"></span>
											<div class="combobox disable">
												<a href="#"><span class="combobox_value"><span class="ellipsis">AM 09:00</span></span><span class="combobox_icon"></span></a>
												<div class="combobox_list">
													<ul>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
														<li><a href="#"><span class="ellipsis">AM 09:00</span></a></li>
													</ul>
												</div>
											</div>
										</span>
										<span class="layer_sch_chk"><input type="checkbox">All day</span>
									</td> -->
								</tr>
								<tr>
									<th><span class="ellipsis">All day</span> </th>
									<td><input type="checkbox"></td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr class="detail_divider"/>
					<div class="layer_detail_type1">
						<table>
							<colgroup>
								<col class="col_layer_detail_type1">
								<col >
							</colgroup>
							<tbody>
								<tr>
									<th><span class="ellipsis">Repeat</span></th>
									<td><input type="checkbox"></td>
								</tr>
								<tr>
									<th><span class="ellipsis">반복 주기</span></th>
									<td>
										<div class="combobox repeat_width">
											<a href="#"><span class="combobox_value"><span class="ellipsis">Every Week</span></span><span class="combobox_icon"></span></a>
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
									<th><span class="ellipsis">반복 일</span></th>
									<td>
										<span class="disable_wrap">
											<span class="disable_mask"></span>
											<div class="btn_sequence_set disable">
												<a href="#" class="btn first on"><span class="ellispsis">Sun.</span></a>
												<a href="#" class="btn mid"><span class="ellispsis">Mon.</span></a>
												<a href="#" class="btn mid"><span class="ellispsis">Tue.</span></a>
												<a href="#" class="btn mid" ><span class="ellispsis">Wed.</span></a>
												<a href="#" class="btn mid"><span class="ellispsis">Thu.</span></a>
												<a href="#" class="btn mid"><span class="ellispsis">Fri.</span></a>
												<a href="#" class="btn last"><span class="ellispsis">Sat.</span></a>
											</div>
										</span>
									</td>
								</tr>
								<tr>
									<th><span class="ellipsis">반복 범위</span></th>
									<td>
										<span class="ellipsis repeat_date">2012.02.02</span>
										~
										<span class="date_pick_wrap"><span href="#" class="btn_date_pick"></span><input type="text" value="2012-04-06"></span>
										<!-- <span class="layer_sch_chk"><input type="checkbox" id="repeat_forever"><label for="repeat_forever">Forever</label></span> -->
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="repeat_setting_view">
											<p>AM 09:00 ~ AM 10:00</p>
											<p>AM 09:00 ~ AM 10:00</p>
											<p>AM 09:00 ~ AM 10:00</p>
											<ul class="repeat_setting_list">
												<li>AM 09:00 ~ AM 10:00</li>
												<li>1주 마다 화요일</li>
												<li>2013.02.01 까지</li>
											</ul>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr class="detail_divider mb10"></hr>
					<div class="layer_detail_type1 " style="">
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
											
											<textarea></textarea>
											<p class="txt_count">10/20 byte</p>
										</div>
									</td>
								</tr>
								<tr>
									<th><span class="ellipsis">Location</span></th>
									<td>
										<input type="text" class="layer_detail_long_input" placeholder="Location">
									</td>
								</tr>
							</tbody>
						</table>
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
