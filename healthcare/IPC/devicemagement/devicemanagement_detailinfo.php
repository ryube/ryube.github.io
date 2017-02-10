<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<script type="text/javascript">
 $(document).ready(function () {
 	//fakescroll.set('custom_scroll',{ x:{disable:true}});
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
								<h2 class="contents_title">Device Management<span class="contents_title_arrow"></span><em>Add</em></h2>
							</div>
							<div class="contents_top_right">
							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="btn_bundle">
									<a href="#" class="btn"><span><b class="btn_in_icon add"></b></span></a><a href="#" class="btn"><span><b class="btn_in_icon del"></b></span></a>
								</span>
							</div>
							<div class="contents_option_right">
								<span class="btn_bundle">
									<a href="#" class="btn"><span><b class="btn_in_icon prev"></b></span></a>
									<a href="#" class="btn"><span><b class="btn_in_icon next"></b></span></a>
									<a href="#" class="btn list"><span>List</span></a>
								</span>
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Detail Information</h3>
							<div id="detail_scroll_area" class="layout_list_mid_scroll_area">
								<div class="detail_type1">
									<h4>Product Info</h4>
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Model</span></th>
												<td><span class="ellipsis">Galaxy Tap 7.0</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Android ver.</span></th>
												<td><span class="ellipsis">Honeycomb 3.0</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Mac adderess</span></th>
												<td><span class="ellipsis">00-02-22-22-2s-23</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">S/N</span></th>
												<td><span class="ellipsis">AA-11-1234-1234</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">자산번호</span></th>
												<td><span class="ellipsis">G7001</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="detail_type1">
									<h4>Basic Info.</h4>
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Activation</span></th>
												<td><span class="ellipsis">Active</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Date</span></th>
												<td><span class="ellipsis">2013-01-01</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Floor</span></th>
												<td><span class="ellipsis">A</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Ward</span></th>
												<td><span class="ellipsis">1</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Room</span></th>
												<td><span class="ellipsis">Children</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Bed ID</span></th>
												<td><span class="ellipsis">103</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">State</span></th>
												<td><span class="ellipsis">Distributed</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="detail_type1">
									<h4>Pratient Info.</h4>
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Model</span></th>
												<td><span class="ellipsis">Children</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Patient ID</span></th>
												<td><span class="ellipsis">AABBCC1234</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Name</span></th>
												<td><span class="ellipsis">Anne Hathaway</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Birth Date</span></th>
												<td><span class="ellipsis">1955.09.27</span></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="detail_type1">
									<h4>Care Team Info.</h4>
									<table class="info_type1">
										<colgroup>
											<col class="col_info_th">
											<col class="col_info_td">
										</colgroup>
										<tbody>
											<tr>
												<th><span class="ellipsis">Photo</span></th>
												<td><img src="" alt="" class="care_photo" width="48" height="48"></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Position</span></th>
												<td><span class="ellipsis">Nurse</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Name</span></th>
												<td><span class="ellipsis">Anne Hathaway</span></td>
											</tr>
											<tr>
												<th><span class="ellipsis">Detail</span></th>
												<td><span class="ellipsis"><a href="#">Link</a></span></td>
											</tr>
										</tbody>
									</table>
								</div>
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
