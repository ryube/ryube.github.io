<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
<script type="text/javascript">
 $(document).ready(function () {
 	fakescroll.set('custom_scroll',{ x:{disable:true}});
 });
</script>
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
								<h2 class="contents_title"><em>Server Storage</em></h2>
							</div>
							<div class="contents_top_right">
								<!-- <p class="contents_top_right_req_txt">
									<span class="ico_req">Required fileds</span>									
								</p> -->
							</div>
						</article>
						<article class="contents_layout">
							<h3 class="contents_layout_detail_head">Storage Infomation</h3>
							<article class="contents_layout_storage_wrap">
								<div class="storage_graph_holder">
									<span class="storage_used_txt">30.3 GB Used</span>
									<span class="storage_free_txt">100 GB Free</span>
									<div class="graph" style="width: 30.3%;">
										<div class="graph_txt_wrap">
											<span class="storage_used_txt">30.3 GB Used</span>
											<span class="storage_free_txt">100 GB Free</span>
										</div>
									</div>
								</div>
								<div class="list_type1">
									<table>
										<colgroup>
											<col class="">
											<col class="">
											<col class="">
											<col class="">							
										</colgroup>
										<thead>
											<tr>
												<th><span class="ellipsis">Main Menu</span></th>
												<th><span class="ellipsis">Sub Menu</span></th>
												<th><span class="ellipsis">Used Storage</span></th>
												<th class="th_last"><span class="ellipsis">Export</span></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="td_storage_main"><span class="ellipsis">User Management</span></td>
												<td class="td_storage_sub"><span class="ellipsis">User</span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td><a href="#" class="btn"><span>Export</span></a></td>
											</tr>
											<tr>
												<td class="td_storage_main"><span class="ellipsis">Device Management</span></td>
												<td><span class="ellipsis"></span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td><a href="#" class="btn"><span>Export</span></a></td>
											</tr>
											<tr>
												<td rowspan="5" class="td_storage_main"><span class="ellipsis">History</span></td>
												<td><span class="ellipsis"> </span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td><a href="#" class="btn"><span>Export</span></a></td>
											</tr>
											<tr>
												<td class="td_storage_sub"><span class="ellipsis">Sign in</span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td></td>
											</tr>
											<tr>
												<td class="td_storage_sub"><span class="ellipsis">Used Function</span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td></td>
											</tr>
											<tr>
												<td class="td_storage_sub"><span class="ellipsis">Used Group</span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td></td>
											</tr>
											<tr>
												<td class="td_storage_sub"><span class="ellipsis">Emergency Access</span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td></td>
											</tr>
											<tr>
												<td class="td_storage_main"><span class="ellipsis">Anatomy Image Library</span></td>
												<td><span class="ellipsis"></span></td>
												<td><span class="ellipsis">3GB</span></td>
												<td><a href="#" class="btn"><span>Export</span></a></td>
											</tr>
										</tbody>
									</table>
								</div>

							</article>
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
