<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_memr_n.php"); ?>
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
								<h2 class="contents_title"><em>Position Management</em></h2>
							</div>
							<div class="contents_top_right">

							</div>
						</article>
						<article class="contents_option">
							<div class="contents_option_left">
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Add</span></a>
								</span>
								<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span><span class="ellipsis">Delete</span></span></a>
									<a href="#" class="btn"><span><span class="ellipsis">Edit</span></span></a>
								</span>
							</div>
							<div class="contents_option_right">
								
							</div>
						</article>
						<article class="contents_layout">
							<section class="contents_layout_detail_wrap">
								<div class="list_type1_position_wrap">
									<div class="group_tree">
										<ul>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item">교수</span></div></li>
										</ul>
									</div>
									<!-- <div class="list_type1">
										<table>
											<colgroup>
												<col class="col_chk">
												<col class="">						
											</colgroup>
											<tbody>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td class="al"><span class="ellipsis">교수</span></td>
												</tr>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td class="al"><span class="ellipsis">펠로우</span></td>
												</tr>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td class="al"><span class="ellipsis">전문의</span></td>
												</tr>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td class="al"><span class="ellipsis">일반의</span></td>
												</tr>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td class="al"><span class="ellipsis">레지던트</span></td>
												</tr>
												<tr>
													<td class="td_chk"><input type="checkbox"></td>
													<td class="al"><span class="ellipsis">인턴</span></td>
												</tr>
											</tbody>
										</table>
									</div> -->
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
