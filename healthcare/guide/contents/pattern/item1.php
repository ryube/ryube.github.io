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
		<h2>Pettern - <em>Common</em></h2>

		<h3>Button [normal]</h3>
		<!--[code lang="html"]-->
		<a href="#" class="btn"><span>normal</span></a>
		<!--[/code]-->
		<h3>Button [Refresh]</h3>
		<!--[code lang="html"]-->
		<a href="#" class="btn"><span><b class="btn_ico_refresh">Refresh</b></span></a>
		<!--[/code]-->

		<h3>Button [Refresh]</h3>
		<!--[code lang="html"]-->
		<a href="#" class="btn"><span><b class="btn_ico_blue_plus">Plus</b></span></a>
		<!--[/code]-->

		<h3>Button [Blue]</h3>
		<!--[code lang="html"]-->
		<a href="#" class="btn blue"><span>확인</span></a>
		<!--[/code]-->

		<h3>Button [Gray]</h3>
		<!--[code lang="html"]-->
		<a href="#" class="btn gray"><span>확인</span></a>
		<!--[/code]-->

		<h3>Button [View Change]</h3>
		<p>class="btn btn_ico_view nor <u>on</u>" Press state</p>
		<!--[code lang="html"]-->
		<span class="btn_view_ch">
			<a id="layout_none" class="btn btn_ico_view nor on"><span><b>normal</b></span></a><a id="layout_vertical" class="btn btn_ico_view verti"><span><b>vertical</b></span></a><a id="layout_horizontal" class="btn btn_ico_view hori"><span><b>horizen</b></span></a>
		</span>
		<!--[/code]-->
		<h3>Disable [Common Class]</h3>
		<p>class="btn <u>disable</u>" Dim state</p>
		<!--[code lang="html"]-->
		<a href="#" class="btn disable"><span>Disable</span></a>
		<!--[/code]-->
		<h3>Disable [Prevent Event]</h3>
		<p>스크립트로 동작</p>
		<!--[code lang="html"]-->
		<span class="disable_wrap">
			<span class="disable_mask"></span>
			<a href="#" class="btn disable"><span>Disable</span></a>
		</span>
		<!--[/code]-->
		
		<h3>Button [Input Type File]</h3>
		<!--[code lang="html"]-->
		<span class="input_file_wrap">
			<input type="text" value="File Select" class="info">
			<a type="file"href="#" class="btn"><span>Browse</span>
				<input type="file">
			</a>
		</span>
		<!--[/code]-->
		<h3>Button [Page move]</h3>
		<!--[code lang="html"]-->
		<span class="btn_detail_pagemove">
			<a href="#" class="pagemove_prev"><span>Prev</span></a><a href="#" class="pagemove_next"><span>Next</span></a>
		</span>
		<!--[/code]-->
		<h3>Icon [Category]</h3>
		<p><a href="/healthcare/IPC/contentsdelivery/contents_management_category_add.php" target="_blank">Sample link</a></p>
		<!--[code lang="html"]-->
		<span class="icon_category"><img src="" alt=""></span>
		<!--[/code]-->
		<h3>Search</h3>
		<p><a href="/healthcare/mEMR/usermanagement/org_mz.php/" target="_blank">Sample link01</a>, <a href="/healthcare/IPC/adminnotice/home.php" target="_blank">Sample link01</a></p>
		<!--[code lang="html"]-->
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
		<!--[/code]-->
		<h3>Search result</h3>
		<p><a href="/healthcare/IPC/contentsdelivery/contents_management_searchresult.php" target="_blank">Sample link</a></p>
		<!--[code lang="html"]-->
		<article class="contents_search_result">
			<span class="contents_search_result_count">Search result 0건</span><span class="contents_search_result_value"><span class="ellipsis">Hospita</span></span>
		</article>
		<!--[/code]-->		
		<h3>Combobox</h3>
		<p>class="combobox <u>on</u>" Open state</p>
		<!--[code lang="html"]-->
		<div class="combobox on">
			<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
			<div class="combobox_list">
				<ul>
					<li><a href="#"><span class="ellipsis">option 1</span></a></li>
					<li><a href="#"><span class="ellipsis">option 1</span></a></li>
					<li><a href="#"><span class="ellipsis">option 1</span></a></li>
				</ul>
			</div>
		</div>
		<!--[/code]-->
		<h3>Combobox tree</h3>
		<!--[code lang="html"]-->
		<div class="combobox on">
			<a href="#"><span class="combobox_value"><span class="ellipsis">Name</span></span><span class="combobox_icon"></span></a>
			<div class="combobox_tree_wrap">
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
			
		</div>
		<!--[/code]-->
		<h3>Input [Value Delete Button]</h3>
		<!--[code lang="html"]-->
		<span class="info_type1_input_close_wrap"><input type="text" value="Anne Hathaway"><a href="#" class="btn_input_close">Close</a></span>
		<!--[/code]-->
		<h3>Input [Date / Date picker]</h3>
		<p class="desc"><a href="/healthcare/mEMR/history/history_emergency.php" target="_blank">sample page(Date picker)</a></p>
		<!--[code lang="html"]-->
		<span class="date_pick_wrap"><span href="#" class="btn_date_pick"></span><input type="text" value="2012-04-06"></span>
		<!--[/code]-->
		<h3>Tree list[Default]</h3>
		<p class="desc">li class="<u>open</u>" Foler open state</p>
		<p class="desc">li class="<u>on</u>" Selected state </p>
		<p class="desc">span class="group_tree_item <u>folder</u>" Icon type </p>
		<p class="desc">div class="group_tree <u>no_chk</u>" Checkbox none type </p>
		<p class="desc"><a href="/healthcare/mEMR/usermanagement/org_mz.php" target="_blank">sample page</a></p>
		<!--[code lang="html"]-->
		<div class="group_tree">
			<ul>
				<li class="open"><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div>
					<ul>
						<li class="open on"><div><input type="checkbox" checked><span class="group_tree_item folder">GS1</span></div>
							<ul>
								<li class="on"><div><input type="checkbox" checked><span class="group_tree_item">GS1</span></div></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		<!--[/code]-->
		
		<h3>Sort / Filter</h3> 
		<p class="desc">class="filter_ico <u>on</u>" Press, Open state</p>
		<p class="desc">class="filter_ico <u>selected</u>" Filter Selected state</p>  
		<!--[code lang="html"]-->
		<div class="list_type1" style="height: 290px;">
			<table>
				<colgroup>
					<col class="col_chk">
					<col class="col_ver">
					<col class="col_mac">
					<col class="col_sn">
					<col class="col_asset_num">
					<col class="col_activation">
					<col class="col_state">				
				</colgroup>
				<thead>
					<tr>
						<th class="td_chk"><input type="checkbox" /></th>
						<th class="th_sort hover">
							<div class="sort_wrap">
								<span class="ellipsis">Model</span>
								<span class="list_sort"></span>
								<div class="filter_opt">
									<span class="filter_ico"></span>
									<div class="flter_opt_layer" style="display: block;">
										<div class="flter_opt_layer_chklist_wrap">
											<ul class="flter_opt_layer_chklist">
												<li><span class="ellipsis"><input type="checkbox" id="filter_chk01" /> <label for="filter_chk01">Option 1</label></span></li>
												<li><span class="ellipsis"><input type="checkbox" id="filter_chk02" /> <label for="filter_chk02">Option 2</label></span></li>
												<li><span class="ellipsis"><input type="checkbox" id="filter_chk03" /> <label for="filter_chk03">Option 3</label></span></li>
												<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
												<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
												<li><span class="ellipsis"><input type="checkbox" id="filter_chk04" /> <label for="filter_chk04">Option 4</label></span></li>
											</ul>
										</div>
										<div class="flter_opt_layer_btn">
											<a href="#" class="btn"><span>Ok</span></a>
											<a href="#" class="btn"><span>Cancel</span></a>
										</div>
									</div>
								</div>
							</div>															
						</th>
						<th class="th_sort hover">
							<div class="sort_wrap">
								<span class="ellipsis">Ver</span>
								<span class="list_sort desc"></span>
								<div class="filter_opt">
									<span class="filter_ico on"></span>
									<div class="flter_opt_layer" style="display:block;">
										<div id="" class="flter_opt_layer_chklist_wrap tree">
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
										<div class="flter_opt_layer_btn">
											<a href="#" class="btn blue"><span>Ok</span></a>
											<a href="#" class="btn"><span>Cancel</span></a>
										</div>
									</div>
								</div>
							</div>
						</th>
						<th class="th_sort">
							<div class="sort_wrap">
								<span class="ellipsis">Mac</span>
								<span class="list_sort desc"></span>
								<div class="filter_opt">
									<span class="filter_ico on selected"></span>
									<div class="flter_opt_layer" style="display:block;">
										<div id="" class="flter_opt_layer_chklist_wrap tree">
											<div class="group_tree">
												<ul>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
												</ul>								
											</div>
										</div>
										<div class="flter_opt_layer_btn">
											<a href="#" class="btn blue"><span>Ok</span></a>
											<a href="#" class="btn"><span>Cancel</span></a>
										</div>
									</div>
								</div>
							</div>
						</th>
						<th class="th_sort">
							<div class="sort_wrap">
								<span class="ellipsis">S/N</span>
								<span class="list_sort desc"></span>
								<div class="filter_opt">
									<span class="filter_ico selected"></span>
									<div class="flter_opt_layer" style="display:block;">
										<div id="" class="flter_opt_layer_chklist_wrap tree">
											<div class="group_tree">
												<ul>
													<li><div><input type="checkbox"><span class="group_tree_item folder">GS1</span></div></li>
												</ul>								
											</div>
										</div>
										<div class="flter_opt_layer_btn">
											<a href="#" class="btn blue"><span>Ok</span></a>
											<a href="#" class="btn"><span>Cancel</span></a>
										</div>
									</div>
								</div>
							</div>
						</th>
						<th><span class="ellipsis">자산 번호</span></th>
						<th><span class="ellipsis">Activation</span></th>
						<th class="th_last"><span class="ellipsis">State</span></th>
					</tr>
				</thead>
			</table>
		</div>
		<!--[/code]-->

		<h3>Color Picker</h3>
		<p><a href="/healthcare/mEMR/setting/setting.php" target="_blank">Sample link</a></p>
		<!--[code lang="html"]-->
		<span class="color_pick_wrap">
			<span class="color_pick color1" id="color_setting_01"></span><label for="color_setting_01">Vital Sign Graph</label>
			<div class="color_pick_layer">
				<h5>Select Color</h5>
				<div class="color_pick_layer_selector">
					<ul>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#9f529c">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#1019c6">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#43888e">#colorcode</a></li>
						<li><a class="color_pick_layer_selector_item" style="background-color:#daca5c">#colorcode</a></li>
					</ul>
				</div>
			</div>
		</span>
		<!--[/code]-->
		<h3>list type [Type1]</h3>
		<p><a href="/healthcare/IPC/adminnotice/home.php" target="_blank">Sample link</a></p>
		<p class="desc">tr class="<u>on</u>" column select</p>
		<!--[code lang="html"]-->
		<div class="list_type1">
			<table>
				<colgroup>
					<col class="col_chk">
					<col class="col_no">
					<col class="col_title">
					<col class="col_name">
					<col class="col_date">								
				</colgroup>
				<thead>
					<tr>
						<th class="td_chk"><input type="checkbox"></th>
						<th>
							<span class="ellipsis">No</span>											
						</th>
						<th class="th_sort al">
							<div class="sort_wrap">
								<span class="ellipsis">Title</span>
								<span class="list_sort desc"></span>
							</div>
						</th>
						<th><span class="ellipsis">Name</span></th>
						<th class="th_last"><span class="ellipsis">Date</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="td_chk"><input type="checkbox"></td>
						<td><span class="ellipsis">999</span></td>
						<td class="al"><span class="ellipsis">알립니다. </span></td>
						<td><span class="ellipsis">Anne Hathaway</span></td>
						<td><span class="ellipsis">2013-01-01 01:30:30</span></td>
					</tr>
					<tr class="on">
						<td class="td_chk"><input type="checkbox"></td>
						<td><span class="ellipsis">999</span></td>
						<td class="al"><span class="ellipsis">알립니다. </span></td>
						<td><span class="ellipsis">Anne Hathaway</span></td>
						<td><span class="ellipsis">2013-01-01 01:30:30</span></td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<!--[/code]-->
		<h3>list type [Type2]</h3>
		<p><a href="/healthcare/IPC/adminnotice/nurse_notice_add.php" target="_blank">Sample link</a></p>
		<!--[code lang="html"]-->
		<div class="list_type2">
			<table>
				<colgroup>
					<col class="col_list_type2_th">
					<col class="col_list_type2_td">	
				</colgroup>
				<tbody>
					<tr>
						<th><span class="ellipsis">Title</span></th>
						<td><span class="ellipsis">알립니다.</span></td>
					</tr>
				</tbody>
			</table>
		</div>
		<!--[/code]-->
		<h3>Detail Head</h3>
		<!--[code lang="html"]-->
		<h3 class="contents_layout_detail_head">Account Information</h3>
		<!--[/code]-->
		<h3>Detail Type1</h3>
		<!--[code lang="html"]-->
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
		<!--[/code]-->
		<h3>Paging</h3>
		<!--[code lang="html"]-->
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
		<!--[/code]-->
		
		<h3>Layerpop</h3>
		<!--[code lang="html"]-->
		<section class="layerpop_wrap" style="width: 500px; height: 100px; position: static"><!--z-index: 300; delete inline style-->
			<div class="mask"></div><!--z-index: 500;-->
			<article class="layerpop" style="width:500px; height: 300px; left: %; top: %; margin:0;"><!--z-index: 600;-->
				<header class="layerpop_head">
					<!-- layerpop_head round -->
					<span class="bg_layerpop_round lt"></span>
					<span class="bg_layerpop_round rt"></span>				
					<!-- layerpop_head round -->
					<h1>Pop Title</h1>
					<a href="#" class="btn_layer_close"></a>
				</header>
				<section class="layerpop_body">
					Layerpop body
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
		<h3>Table header filter [test]</h3>
		<p><a href="/healthcare/mEMR/usermanagement/org_mz_header_filter.php" target="_blank">Sample link</a></p>
		<!--[code lang="html"]-->
		<section class="layer_header_filter" style="left: 0; top: 0px;">
			<div class="header_filter">
				<div class="group_tree">
					<ul id="sortable">
						<li class="on"><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div></li>
						<!-- <li><div><input type="checkbox"><span class="group_tree_item">GS1</span></div>	
							<ul>
								<li class="open on"><div><input type="checkbox" checked><span class="group_tree_item folder">GS1</span></div>
									<ul>
										<li class="on"><div><input type="checkbox" checked><span class="group_tree_item">GS1</span></div></li>
									</ul>
								</li>
							</ul>
						</li> -->
					</ul>
				</div>

			</div>
		</section>
		<!--[/code]-->
				
	</div>
<?php callFootCnt();?>