<?php
require $_SERVER["DOCUMENT_ROOT"] . "/healthcare/guide/lib/config.php";
$rootIndex = 1;
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
		<h2>Guide - <em>Common</em></h2>
		<h3>Button</h3>
		<!--[code lang="html"]-->
		<a href="#" class="btn"><span>normal</span></a>
		<a href="#" class="btn"><span><b class="btn_ico_refresh">Refresh</b></span></a>
		<a href="#" class="btn"><span><b class="btn_ico_blue_plus">Plus</b></span></a>
		<a href="#" class="btn blue"><span>확인</span></a>
		<span class="contents_option_left_bundle">
			<a href="#" class="btn"><span>Move to</span></a>
			<a href="#" class="btn"><span>Delete</span></a>
			<a href="#" class="btn"><span>Edit</span></a>
		</span>
		<span class="btn_view_ch">
			<a id="layout_none" class="btn btn_ico_view nor"><span><b>normal</b></span></a><a id="layout_vertical" class="btn btn_ico_view verti"><span><b>vertical</b></span></a><a id="layout_horizontal" class="btn btn_ico_view hori"><span><b>horizen</b></span></a>
		</span>
		<!--[/code]-->
		<h3>Search</h3>
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
		<h3>Combobox</h3>
		<!--[code lang="html"]-->
		<div class="combobox">
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
				<div class="combobox_tree">
					<ul>
						<li><div><span class="tree_icon folder">GS1</span></div></li>
						<li><div><span class="tree_icon folder">GS1</span></div></li>
						<li><div><span class="tree_icon folder">GS1</span></div></li>
						<li><div><span class="tree_icon folder">GS1</span></div></li>
						<li><div><span class="tree_icon folder">GS1</span></div></li>
						<li><div><span class="tree_icon folder">GS1</span></div></li>
						<li class="on open"><div><span class="tree_icon folder">GS1</span></div>
							<ul>
								<li><div><span class="tree_icon "><span class="ellipsis">GS1</span></span></div></li>
								<li><div><span class="tree_icon "><span class="ellipsis">GS1</span></span></div></li>
								<li><div><span class="tree_icon folder">GS1</span></div></li>
								<li><div><span class="tree_icon "><span class="ellipsis">GS1</span></span></div></li>
								<li class="on open"><div><span class="tree_icon folder">GS1</span></div>
									<ul>
										<li><div><span class="tree_icon folder">GS1</span></div></li>
										<li><div><span class="tree_icon"><span class="ellipsis">GS1</span></span></div></li>
										<li><div><span class="tree_icon"><span class="ellipsis">GS1</span></span></div></li>
										<li><div><span class="tree_icon"><span class="ellipsis">GS1</span></span></div></li>
										<li><div><span class="tree_icon"><span class="ellipsis">GS1</span></span></div></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
		<!--[/code]-->
		<h3>Input Type File</h3>
		<!--[code lang="html"]-->
		<span class="input_file_wrap">
			<input type="text" value="File Select" class="info">
			<a href="#" class="btn"><span>Browse</span>
				<input type="file">
			</a>
		</span>
		<!--[/code]-->
		
		<h3>Button Page move</h3>
		<!--[code lang="html"]-->
		<span class="btn_detail_pagemove">
			<a href="#" class="pagemove_prev"><span>Prev</span></a><a href="#" class="pagemove_next"><span>Next</span></a>
		</span>
		<!--[/code]-->
		<h3>Sort / Filter</h3>
		<!--[code lang="html"]-->
		<div class="list_type1" style="height: 170px;">
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
						<th class="th_sort">
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
						<th class="th_sort">
							<div class="sort_wrap">
								<span class="ellipsis">Ver</span>
								<span class="list_sort desc"></span>
							</div>
						</th>
						<th><span class="ellipsis">Mac</span></th>
						<th><span class="ellipsis">S/N</span></th>
						<th><span class="ellipsis">자산 번호</span></th>
						<th><span class="ellipsis">Activation</span></th>
						<th class="th_last"><span class="ellipsis">State</span></th>
					</tr>
				</thead>
			</table>
		</div>
		<!--[/code]-->
		<h3>Color Picker</h3>
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
		<!--[/code]-->
		<h3>Layerpop</h3>
		<!--[code lang="html"]-->
		<section class="layerpop_wrap" style="width: 500px; height: 300px; position: static"><!--z-index: 300; delete inline style-->
			<div class="mask"></div><!--z-index: 500;-->
			<article class="layerpop" style="width:500px; height: 300px; left: %; top: %; margin:0;"><!--z-index: 600;-->
				<header class="layerpop_head">
					<!-- layerpop_head round -->
					<span class="bg_layerpop_round lt"></span>
					<span class="bg_layerpop_round rt"></span>				
					<!-- layerpop_head round -->
					<h1></h1>
					<a href="#" class="btn_layer_close"></a>
				</header>
				<section class="layerpop_body">
					
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
		<h3>Layerpop Tree</h3>
		<!--[code lang="html"]-->
		<section class="layerpop_wrap" style="width: 500px; height: 400px; position: static"><!--z-index: 300; delete inline style-->
			<div class="mask"></div><!--z-index: 500;-->
			<article class="layerpop" style="width:320px; height:; left: 50%; top: 0; margin:0 0 0 -160px;"><!--z-index: 600;-->
				<header class="layerpop_head">
					<!-- layerpop_head round -->
					<span class="bg_layerpop_round lt"></span>
					<span class="bg_layerpop_round rt"></span>				
					<!-- layerpop_head round -->
					<h1>Delete Category</h1>
					<a href="#" class="btn_layer_close"></a>
				</header>
				<section class="layerpop_body">
					<div class="layerpop_body_padding type1">
						<article class="layerpop_body_category">
							<div class="layerpop_body_category_topbtn">
							 	<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Add</span></a>
								</span>
							 	<span class="contents_option_left_bundle">
									<a href="#" class="btn"><span>Delete</span></a>
									<a href="#" class="btn"><span>Edit</span></a>
								</span>
							</div>
							<div class="layerpop_body_category_list_wrap">
								<div class="group_tree">
									<ul style="">
										<li><div><input type="checkbox"><span class="group_tree_item">전체선택전체선택전체선택전체선택전체선택전체선</span></div></li>
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
	</div>
<?php callFootCnt();?>