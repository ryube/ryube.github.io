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
								<h2 class="contents_title">User Management<span class="contents_title_arrow"></span>Org<span class="contents_title_arrow"></span>Edit<span class="contents_title_arrow"></span>
									<div class="combobox">
										<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
										<div class="combobox_tree_wrap" style="display: ;">
											<div class="group_tree no_chk">
												<ul>
													<li class="open"><div><span class="group_tree_item folder">GS1</span></div>
														<ul>
															<li class="open on"><div><span class="group_tree_item folder">GS1</span></div>
																<ul>
																	<li class=""><div><span class="group_tree_item">GS1</span></div></li>
																</ul>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
										<!-- View 용 CSS 페이지에 적용하지 마세요 -->
										<style type="text/css">
											.combobox:hover .combobox_tree_wrap {display: block;}
										</style>
										<!-- // View 용 CSS 페이지에 적용하지 마세요 -->
									</div>
								</h2>
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
											</ul>
										</div>									
										<a href="#" class="search_btn">Search</a>
									</div>
								</div>
							</div>
						</article>
						<article class="contents_edit">
							<dl class="contents_edit_rename">
								<dt>
									<span class="ellipsis">Org Name</span>
								</dt>
								<dd>
									<span class="editable_elem" contenteditable="true">Org 5-1</span>
									<a href="#" class="btn"><span>Edit</span></a><a href="#" class="btn"><span>Done</span></a><a href="#" class="btn"><span>Cancel</span></a>
								</dd>
							</dl>
						</article>
						<div class="contents_layout_detail_bot_btnsec">
							<a href="#" class="btn"><span>Save</span></a>
							<a href="#" class="btn blue"><span>Save and Add a user</span></a>
							<a href="#" class="btn"><span>Cancel</span></a>									
						</div>
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
