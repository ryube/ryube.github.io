<?php include ($_SERVER["DOCUMENT_ROOT"]."/healthcare/inc/head_no_view_ch.php"); ?>
<script type="text/javascript" src=""></script>
<link rel='stylesheet' type='text/css' href='/healthcare/scripts/jquery.fullcalendar-1.5.4/fullcalendar/fullcalendar.css' />
<script type="text/javascript" src="/healthcare/scripts/jquery.fullcalendar-1.5.4/fullcalendar/fullcalendar.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev, title,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					end: new Date(y, m, d, 11, 0),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
						{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
						{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
						{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
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
								<h2 class="contents_title">Care Plan<span class="contents_title_arrow"></span><em>Anne Hathaway</em></h2>
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
							<h3 class="contents_layout_detail_head">Care Plan Information</h3>
							<div class="careplan_desc">
								<span class="careplan_item"><strong>Name</strong> : AnneHathaway</span>
								<span class="careplan_item"><strong>Patient ID</strong> : AABBBCCDD1234</span>	
								<span class="careplan_item"><strong>Brithdate</strong> : 1988.09.27</span>	
								<span class="careplan_item"><strong>Care Plan 5</strong></span>									
							</div>
							<div id="detail_scroll_area" class="layout_list_mid_scroll_area">
							<div id="calendar"></div>
							<!-- 일정 겟수 오버 마크업 
							<div class="fc-event-inner fc-event-skin more_evt">
								<span class="more_evt_txt">5 plan</span><span class="btn_list_plus">plus</span>
							</div>-->
							<!-- 일정 겟수 오버 레이어 
							<article class="layerpop layer_more_evt" style="width:200px; left: 50%; top: 70%;">
								<header class="layerpop_head">
									<span class="bg_layerpop_round lt"></span>
									<span class="bg_layerpop_round rt"></span>				
									
									<h1>2013.03.07 (Thu)</h1>
									<a href="#" class="btn_layer_close"></a>
								</header>
								<section class="layerpop_body">
									<div class="more_evt_wrap">
										<ul>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
											<li>
												<div class="fc-event fc-event-skin fc-event-hori fc-corner-left fc-corner-right" data-id="0">
													<div class="fc-event-inner fc-event-skin"><span class="fc-event-time">7p</span><span class="fc-event-title" data-id="0">Birthday Party</span></div>
												</div>
											</li>
										</ul>
									</div>
								</section>
								<footer class="layerpop_foot">
									<span class="bg_layerpop_round lt"></span>
									<span class="bg_layerpop_round rt"></span>				
								</footer>
							</article>-->
								
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
