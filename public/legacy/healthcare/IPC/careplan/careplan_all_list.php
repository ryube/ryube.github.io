<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>

<body>
	<script type="text/javascript">
	 $(document).ready(function () {

	 	//layoutSplit = new ContentsScreenControl2(CONTENTS_SCREEN_TYPE.none);

		//fakescroll.set('custom_scroll',{ x:{disable:true}});
		//fakescroll.set('custom_scroll2',{ x:{disable:true}});
	 });
	</script>
	
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
								<h2 class="contents_title"><em>Care Plan</em></h2>
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
										<input type="text" placeholder="Search" />
										<div class="search_suggest">
											<ul>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">option</span></a></li>
												<li><a href="#"><span class="ellipsis">optionoptionoptionoptionoptionoptionoptionoptionoption</span></a></li>
											</ul>
										</div>									
										<a href="#" class="search_btn">Search</a>
									</div>
								</div>
							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>For All Patient</span></a>
								</span>
							</div>
							<div class="contents_option_right">
								<div class="contents_option_right_display">
									<span>Display : </span> 
									<div class="combobox">
										<span class="combobox_value">20</span>
										<span class="combobox_icon"></span>
										<div class="combobox_list">
											<ul>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
											<li><a href="#"><span class="ellipsis">option 1</span></a></li>
										</ul>
										</div>
									</div>
									<span class="btn_view_ch">
										<a id="layout_none" class="btn btn_ico_view nor"><span><b>normal</b></span></a><a id="layout_vertical" class="btn btn_ico_view verti"><span><b>vertical</b></span></a><a id="layout_horizontal" class="btn btn_ico_view hori"><span><b>horizen</b></span></a>
									</span>
								</div>
							</div>
						</article>
						<article class="contents_layout">
							<div class="careplan_all_list">
								<table>
									<colgroup>
										<col width="20%">
										<col width="20%">
										<col>
									</colgroup>
									<thead>
										<tr>
											<th><span class="ellipsis">Date</span></th>
											<th><span class="ellipsis">Time</span></th>
											<th><span class="ellipsis">Plan</span></th>
										</tr>
									</thead>
									<tbody>
										<tr class="today">
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										<tr class="today">
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										<tr>
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										<tr>
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										<tr>
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										<tr>
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										<tr>
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										<tr>
											<td class="td_care_all_date"><span class="ellipsis">2012.1.1(Tue)</span></td>
											<td class="td_care_all_time"><span class="ellipsis">AM 12:00</span></td>
											<td class="td_care_all_plan"><span class="ellipsis">Blood Test</span></td>
										</tr>
										
									</tbody>
								</table>
							</div>
							
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
