<?php
require $_SERVER["DOCUMENT_ROOT"] . "/healthcare/guide/lib/config.php";
$rootIndex = 2;
?>
<?php callHeadCnt();?>
<script>
$(document).ready(function() {
	$('.codeViewer').codeViewer();
	$('<ul class="depth3"></ul>').insertAfter('#container h2');
	$('#container h3').each(function(index) {
		$(this).attr('id', 'item' + index);
		$(this).clone().appendTo('.depth3');
		$('.depth3 h3').replaceWith('<li><a href="#item' + index + '">' + $(this).text() + '</a></li>');
	});
});
</script>
</head>
<body>
<div id="document">
	<header>
		<h1><a href="/healthcare/guide/"><strong><?php echo TITLE ?></strong> - SA Guide</a></h1>
		<nav id="globalNavi">
			<?php callMainMenu();?>
		</nav>
	</header>
	<div id="container">
		<h2>Pettern - <em>Layout Example</em></h2>
		<h3>Layout</h3>
		<p class="desc"><a href="/healthcare/mEMR/usermanagement/org_mz.php" target="_blank">Default Page</a></p>
		<div style="padding:10px 0 20px;">
			<div style="border:2px solid #b53232;border-radius:3px;padding:10px;">
				<h1>wrapper</h1>
				<header style="border:2px solid #554fcc;border-radius:3px;margin:0 0 10px 0;padding:10px;">
					<h1>header</h1>
					<div style="border:2px solid #ff9933;border-radius:3px;margin:0 0 10px 0;padding:10px;">
						<h2>header_width</h2>
					</div>
				</header>
				<section style="overflow:hidden;border:2px solid #554fcc;border-radius:3px;padding:10px;">
					<h1>contents_wrap</h1>
					<div style="overflow:hidden;border:2px solid #ff9933;border-radius:3px;padding:10px; margin: 5px;">
						<h1>contents_width</h1>
						<nav style="float:left;width:30%;border:2px solid #4fccbc;border-radius:3px;padding:10px;">
							<h2>left</h2>
						</nav>
						<section style="float:right;width:65%;border:2px solid #4fccbc;border-radius:3px;padding:10px;">
							<h2>contents</h2>
						</section>
					</div>
				</section>
				<footer style="border:2px solid #554fcc;border-radius:3px;margin:10px 0 0 0;padding:10px;">
					<h1>footer</h1>
					<div style="border:2px solid #ff9933;border-radius:3px;margin:0 0 10px 0;padding:10px;">
						<h2>footer_width</h2>
					</div>
				</footer>
			</div>
		</div>
		
		<h3>Navigation</h3>
		<p>li class="<u>sub</u> on" has serve page class, li class="<u>on</u>" selected class</p>
		<!--[code lang="html"]-->
			<ul class="left_menu">
				<li class="sub on"><a href="#"><span class="ellipsis">User Management</span></a>
					<ul class="left_menu_sub" style="display: ;">
						<li class="on"><a href="#">User</a></li>
						<li><a href="#">Org</a></li>
						<li><a href="#">Group</a></li>
					</ul>
				</li>
				<li><a href="#">Device Management</a></li>
				<li class="sub"><a href="#">History</a>
					<ul class="left_menu_sub" style="display: none;">
						<li class="on"><a href="#">Login</a></li>
						<li><a href="#">Used Function</a></li>
						<li><a href="#">Group</a></li>
						<li><a href="#">Emergency Access</a></li>
					</ul>
				</li>
				<li class="sub"><a href="#">Anatomy Image Library</a>
					<ul class="left_menu_sub" style="display: none;">
						<li class="on"><a href="#">Contents</a></li>
						<li><a href="#">Category</a></li>
					</ul>
				</li>
				<li class="sub "><a href="#">Settings</a>
					<ul class="left_menu_sub" style="display: none;">
						<li class="on"><a href="#">General Settings</a></li>
						<li><a href="#">Nurse Call</a></li>
					</ul>
				</li>
			</ul>
		<!--[/code]-->
		<h3>Layout contents area [contents_top]</h3>
		<p class="desc"><a href="/healthcare/mEMR/usermanagement/org_mz.php" target="_blank">sample page</a></p>
		<!--[code lang="html"]-->
			<article class="contents_top">
				<div class="contents_top_left">
					<h2 class="contents_title">User Management<span class="contents_title_arrow"></span>Org<span class="contents_title_arrow"></span><em>Edit</em>
					</h2>
				</div>
				<div class="contents_top_right">
					<div class="search_wrap">
						<div class="combobox">
							<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
							<div class="combobox_list" style="display:none;">
								<ul>
									<li><a href="#"><span class="ellipsis">option 1</span></a></li>
								</ul>
							</div>
						</div><div class="search">
							<input type="text" placeholder="Search">
							<div class="search_suggest">
								<ul>
									<li><a href="#"><span class="ellipsis">option</span></a></li>
								</ul>
							</div>									
							<a href="#" class="search_btn">Search</a>
						</div>
					</div>
				</div>
			</article>
		<!--[/code]-->
		<h3>Layout contents area [contents_option]</h3>
		<p class="desc">
			<a href="/healthcare/mEMR/usermanagement/org_mz.php" target="_blank">sample page1</a>, 
			<a href="/healthcare/mEMR/usermanagement/user_detailview.php" target="_blank">sample page2</a>, 
			<a href="/healthcare/IPC/adminnotice/home.php" target="_blank">sample page3</a>, 
		</p>
		<!--[code lang="html"]-->
			<article class="contents_option">
				<div class="contents_option_left">
					<span class="contents_option_left_bundle">
						<a href="#" class="btn"><span>Add</span></a>
					</span>
					<span class="contents_option_left_bundle">
						<a href="#" class="btn"><span>delete</span></a>
						<a href="#" class="btn"><span>Edit</span></a>
					</span>
					<span class="contents_option_left_bundle">
						<a href="#" class="btn"><span>Import</span></a>
						<a href="#" class="btn"><span><b class="btn_ico_refresh"></b></span></a>
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
		<!--[/code]-->

		<h3>Detail list [Inner scroll type]</h3>
		<p class="desc">div class="layout_list_mid_scroll_wrapper <u>alone</u>" out of layout change function</p>
		<p class="desc"><a href="/healthcare/IPC/devicemagement/devicemanagement_detailinfo.php" target="_blank">sample page</a></p>
		<!--[code lang="html"]-->
			<div class="layout_list_mid_scroll_wrapper alone" style="height:200px;"><!-- inline style delete -->
				<h3 class="contents_layout_detail_head">Group Infomation</h3>
				<div id="custom_scroll" class="layout_list_mid_scroll_area no_paging">
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
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<!--[/code]-->

		<h3>Contents layout change [Default Markup]</h3>
		<p class="desc">section id="contents_layout_split" class="layout_change <u>verti</u>" Vertical Split Class </p>
		<p class="desc">section id="contents_layout_split" class="layout_change <u>hori</u>" Horizontal Split Class </p>
		<p class="desc"><a href="/healthcare/IPC/devicemagement/devicemanagement.php" target="_blank">sample page</a></p>
		<!--[code lang="html"]-->
			<section id="contents_layout_split" class="layout_change">
				<article class="layout_list ui-layout-center">
					<div class="layout_list_mid_scroll_wrapper">
						<div class="list_type1 right_padding">
							<table>
								<colgroup>
									<col class="col_chk">
									<col class="col_ver">
									<col class="col_mac">						
								</colgroup>
								<thead>
									<tr>
										<th class="td_chk"><input type="checkbox" /></th>
										<th><span class="ellipsis">Model</span></th>
										<th><span class="ellipsis">Model</span></th>
										<th><span class="ellipsis">Model</span></th>
									</tr>
								</thead>
							</table>
						</div>
						<div id="custom_scroll" class="layout_list_mid_scroll_area">
							<div class="list_type1">
								<table>
									<colgroup>
										<col class="col_chk">
										<col class="col_ver">
										<col class="col_mac">							
									</colgroup>
									<tbody>
										<tr>
											<td class="td_chk"><input type="checkbox" /></td>
											<td><span class="ellipsis">Galaxy Tap 7.0</span></td>
											<td><span class="ellipsis">Honeycomb 3.0</span></td>
											<td><span class="ellipsis">00-00-00-00-00-00</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<article class="paging">
							<a href="#" class="paging_first">First</a><a href="#" class="paging_prev">Previous</a>
							<span class="paging_num">
								<a href="#" class="on">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">5</a>
								<a href="#">6</a>
								<a href="#">7</a>
								<a href="#">8</a>
								<a href="#">9</a>
								<a href="#">10</a>
							</span>
							<a href="#" class="paging_next">Next</a><a href="#" class="paging_last">Last</a>
						</article>
					</div>
				</article>
				<article class="layout_list ui-layout-east">
					<div class="layout_list_mid_scroll_wrapper">
						<h3 class="contents_layout_detail_head">Account Information</h3>
						<div id="custom_scroll1" class="layout_list_mid_scroll_area no_paging">
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
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</article>
				<article class="layout_list ui-layout-south">
					<div class="layout_list_mid_scroll_wrapper">
						<h3 class="contents_layout_detail_head">Account Information</h3>
						<div id="custom_scroll1" class="layout_list_mid_scroll_area no_paging">
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
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</article>
			</section>
		<!--[/code]-->

		<h3>Contents layout change [Default List type]</h3>
		<p class="desc"><a href="/healthcare/IPC/devicemagement/devicemanagement.php" target="_blank">sample page</a></p>
		<!--[code lang="html"]-->
			<article class="layout_list">
				<div class="layout_list_mid_scroll_wrapper" style="height:200px;"><!--  delete inline style  -->
					<div class="list_type1 right_padding">
						<table>
							<colgroup>
								<col class="col_chk">
								<col class="col_m_history_name">
								<col class="col_m_history_email">
								<col class="col_m_history_mobile">
								<col class="col_m_history_org">
								<col class="col_m_history_position">
								<col class="col_m_history_login">
								<col class="col_m_history_duration">
								<col class="col_m_history_ip">													
							</colgroup>
							<thead>
								<tr>
									<thead>
										<tr>
											<th class="td_chk"><input type="checkbox"></th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Name</span>
													<span class="list_sort"></span>
												</div>															
											</th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Email</span>
													<span class="list_sort"></span>
												</div>															
											</th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Mobile</span>
													<span class="list_sort"></span>
												</div>															
											</th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Org</span>
													<span class="list_sort"></span>
												</div>															
											</th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Position</span>
													<span class="list_sort"></span>
												</div>															
											</th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Login Time</span>
													<span class="list_sort"></span>
												</div>															
											</th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">Duration Time</span>
													<span class="list_sort"></span>
												</div>															
											</th>
											<th class="th_sort">
												<div class="sort_wrap">
													<span class="ellipsis">IP Address</span>
													<span class="list_sort"></span>
												</div>															
											</th>
										</tr>
									</thead>
									
								</tr>
							</thead>
						</table>
					</div>
					<div id="custom_scroll2" class="layout_list_mid_scroll_area">
						<div class="list_type1">
							<table>
								<colgroup>
									<col class="col_chk">
									<col class="col_m_history_name">
									<col class="col_m_history_email">
									<col class="col_m_history_mobile">
									<col class="col_m_history_org">
									<col class="col_m_history_position">
									<col class="col_m_history_login">
									<col class="col_m_history_duration">
									<col class="col_m_history_ip">													
								</colgroup>
								<tbody>
									<tr>
										<td class="td_chk"><input type="checkbox" checked=""></td>
										<td><span class="ellipsis">Anne Hathaway</span></td>
										<td><span class="ellipsis">anne@memr.com</span></td>
										<td><span class="ellipsis">801-102-2302</span></td>
										<td><span class="ellipsis">GS</span></td>
										<td><span class="ellipsis">Professor</span></td>
										<td><span class="ellipsis">01.01 01:30:20</span></td>
										<td><span class="ellipsis">05:30:20</span></td>
										<td><span class="ellipsis">192.168.0.1</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<article class="paging">
						<a href="#" class="paging_first">First</a><a href="#" class="paging_prev">Previous</a>
						<span class="paging_num">
							<a href="#" class="on">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">6</a>
							<a href="#">7</a>
							<a href="#">8</a>
							<a href="#">9</a>
							<a href="#">10</a>
						</span>
						<a href="#" class="paging_next">Next</a><a href="#" class="paging_last">Last</a>
					</article>
				</div>
			</article>
		<!--[/code]-->

		<h3>Contents layout change [List small type]</h3>
		<p class="desc">div class="layout_list_mid_scroll_wrapper <u>list_small_type</u>" Small list state</p>
		<p class="desc"><a href="/healthcare/mEMR/usermanagement/org_mz.php" target="_blank">sample page</a></p>
		<!--[code lang="html"]-->
			<article class="layout_list" style="width:340px"><!--  delete inline style  -->
				<div class="layout_list_mid_scroll_wrapper list_small_type" style="height:200px;"><!--  delete inline style  -->
					<div class="list_type1 right_padding">
						<table>
							<colgroup>
								<col class="">
								<col class="">
								<col class="">							
							</colgroup>
							<thead>
								<tr>
									<th class="th_sort">
										<div class="sort_wrap">
											<span class="ellipsis">Name</span>
											<span class="list_sort"></span>
										</div>															
									</th>
									<th><span class="ellipsis">Mobile</span></th>
									<th class="th_sort">
										<div class="sort_wrap">
											<span class="ellipsis">E-mail</span>
											<span class="list_sort"></span>
										</div>															
									</th>
									
								</tr>
							</thead>
						</table>
					</div>
					<div id="custom_scroll2" class="layout_list_mid_scroll_area">
						<div class="list_type1">
							<table>
								<colgroup>
									<col class="">
									<col class="">
									<col class="">					
								</colgroup>
								<tbody>
									<tr>
										<td><span class="ellipsis">Anne Hathaway</span></td>
										<td><span class="ellipsis">Small list <br />in layout change</span></td>
										<td><span class="ellipsis">010-0000-0000</span></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<article class="paging">
						<a href="#" class="paging_first">First</a><a href="#" class="paging_prev">Previous</a>
						<span class="paging_num">
							<a href="#" class="on">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">6</a>
							<a href="#">7</a>
							<a href="#">8</a>
							<a href="#">9</a>
							<a href="#">10</a>
						</span>
						<a href="#" class="paging_next">Next</a><a href="#" class="paging_last">Last</a>
					</article>
				</div>
			</article>
		<!--[/code]-->

		<h3>Contents layout change [No paging detail ]</h3>
		<p class="desc">class="layout_list_mid_scroll_area <u>no_paging</u>"</p>
		<p class="desc"><a href="/healthcare/mEMR/usermanagement/group_mz.php" target="_blank">sample page1</a>, <a href="/healthcare/IPC/devicemagement/devicemanagement_detailinfo.php" target="_blank">sample page2</a></p>
		<!--[code lang="html"]-->
			<article class="layout_list">
				<div class="layout_list_mid_scroll_wrapper" style="height:200px;"><!-- inline style delete -->
					<h3 class="contents_layout_detail_head">Group Infomation</h3>
					<div id="custom_scroll" class="layout_list_mid_scroll_area no_paging">
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
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</article>
		<!--[/code]-->
		<h3>Contents layout change [bottom contents padding]</h3>
		<p class="desc">class="layout_list_mid_scroll_area <u>no_paging</u>"</p>
		<p class="desc"><a href="/healthcare/mEMR/usermanagement/group_mz.php" target="_blank">sample page1</a>
		<!--[code lang="html"]-->
			<article class="layout_list">
				<div class="layout_list_mid_scroll_wrapper" style="height:200px;"><!-- inline style delete -->
					<h3 class="contents_layout_detail_head">Group Infomation</h3>
					<div id="custom_scroll" class="layout_list_mid_scroll_area no_paging">
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
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</article>
		<!--[/code]-->
		
		<h3>Layerpop [Alert Type]</h3>
		<p class="desc"><a href="/healthcare/mEMR/home/login_pop.php" target="_blank">sample page</a></p>
		<!--[code lang="html"]-->
			<section class="layerpop_wrap" style="width: 500px; height: 180px; position: static"><!--z-index: 300; delete inline style-->
				<div class="mask"></div><!--z-index: 500;-->
				<article class="layerpop" style="width:320px; height:; left: 50%; top: 50%; margin:-87px 0 0 -160px;"><!--z-index: 600;-->
					<header class="layerpop_head">
						<!-- layerpop_head round -->
						<span class="bg_layerpop_round lt"></span>
						<span class="bg_layerpop_round rt"></span>				
						<!-- layerpop_head round -->
						<h1>Delete Department</h1>
						<a href="#" class="btn_layer_close"></a>
					</header>
					<section class="layerpop_body">
						<div class="layerpop_body_padding type1">
							<article class="layerpop_body_message">
								<div class="layerpop_body_message_txt">
									<p>올 바르지 않은 User ID 입니다.<br> 다시 입력해 주세요.</p>
								</div>  
							</article>
							<div class="layerpop_body_bottom_btn">
						 		<a href="#" class="btn blue"><span>OK</span></a>
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
		<!--[/code]-->
		<h3>Layerpop [Tree list]</h3>
		<p class="desc"><a href="/healthcare/mEMR/usermanagement/group_edit_gruop_moveto_mz.php" target="_blank">Custom Scroll Link</a> </p>
		<!--[code lang="html"]-->
			<section class="layerpop_wrap" style="width: 500px; height: 400px; position: static"><!--z-index: 300; delete inline style-->
				<div class="mask"></div><!--z-index: 500;-->
				<article class="layerpop" style="width:320px; height:; left: 50%; top: 0px; margin:0 0 0 -160px;"><!--z-index: 600;-->
					<header class="layerpop_head">
						<!-- layerpop_head round -->
						<span class="bg_layerpop_round lt"></span>
						<span class="bg_layerpop_round rt"></span>				
						<!-- layerpop_head round -->
						<h1>Move to</h1>
						<a href="#" class="btn_layer_close"></a>
					</header>
					<section class="layerpop_body">
						<div class="layerpop_body_padding type1">
							<div class="layerpop_body_category_topbtn">
							 	<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Add</span></a>
								</span>
							 	<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Delete</span></a>
									<a href="#" class="btn"><span>Edit</span></a>
								</span>
							</div>
							<article class="layerpop_body_category">
								<div id="custom_scroll"class="layerpop_body_category_list_wrap">
									<div class="group_tree">
										<ul>
											<li><div><input type="checkbox"><span class="group_tree_item">전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택전체선택</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
											<li class="on"><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div>
												<ul>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
													<li class="on"><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div>
														<ul>
															<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
															<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
															<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
															<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
															<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
														</ul>
													</li>
												</ul>
											</li>
											<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
										</ul>								
									</div>
								</div>
								</article>
							<div class="layerpop_body_bottom_btn">
						 		<a href="#" class="btn blue"><span>Done</span></a>
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
		<!--[/code]-->



		<!--
		<h3></h3>
		<!--[code lang="html"]-->
		<!--[/code]-->
	</div>
<?php callFootCnt();?>