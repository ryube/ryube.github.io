<?php
require $_SERVER["DOCUMENT_ROOT"] . "/healthcare/guide/lib/config.php";
$rootIndex = 1;
?>
<?php callHeadCnt();?>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
	$('header nav li ul li a').click(function() {
		var $link = $(this).attr('href');
		$('.content').hide().load($link, function() {
			$(this).fadeIn();
		});
		return false;
	});
});
//]]>
</script>
</head>
<body>
<div id="document">
	<header>
		<h1><a href="/healthcare/guide/"><strong><?php echo TITLE ?></strong> - SA Guide</a></h1>
		<nav id="globalNavi">
<?php callMainMenu();?>
		</nav>
	</header><!-- //header -->
	<div id="container">
		<h2>가이드 - <em>환경</em></h2>
		<?php require $_SERVER["DOCUMENT_ROOT"] . ('/healthcare/guide/contents/guide/guide1.html');?>
		
	</div><!-- //body -->
<?php callFootCnt();?>