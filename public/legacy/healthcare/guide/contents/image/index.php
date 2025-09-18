<?php
require $_SERVER["DOCUMENT_ROOT"] . "/healthcare/guide/lib/config.php";
$rootIndex = 3;
?>
<?php callHeadCnt();?>
<script>
$(document).ready(function() {
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
<?php
if ($_GET['depth'] == 'button' || $_GET['depth'] == 'icon' || $_GET['depth'] == 'text') {
	$dataFiles = getDirectoryItems('../../../images/common/' . $_GET['depth'] . '/', '/images/common/' . $_GET['depth'] . '/');

	$imageArray = array();
	$dataArray = array();

	echo str_repeat(TAB, 2) . '<h2>' . $_GET['depth'] . ' 이미지 리스트</h2>' . CRLF;

	for ($i=0; $i<count($dataFiles); $i++) {
		if (preg_match('@(gif|png|jpg|jpeg)$@i', $dataFiles[$i])) {
			//if (preg_match('@\-([^\.]+)\.[a-z0-9]+$@i', $dataFiles[$i], $matches)) {
				if (!isset($imageArray[$matches[1]])) {
					$imageArray[$matches[1]] = array();
				}
				array_push($imageArray[$matches[1]], $dataFiles[$i]);
			//} else {
			//	array_push($dataArray, $dataFiles[$i]);
			//}
		}
	}

	ksort($imageArray);
	sort($dataArray);

	foreach ($imageArray as $group => $images) {
		echo str_repeat(TAB, 2) . '<div class="wholeElementList">' . CRLF;
		echo str_repeat(TAB, 3) . "<h3><b>type: </b>{$group}</h3>" . CRLF;
		echo str_repeat(TAB, 3) . '<table border="1">' . CRLF;
		echo str_repeat(TAB, 4) . "<caption>{$group}</caption>" . CRLF;
		echo str_repeat(TAB, 4) . '<col width="20%"><col width="35%"><col width="45%">' . CRLF;
		$count = 0;
		for ($i=0; $i<count($images); $i++) {
			if ($count % 2 == 0)
				$className = 'oddline';
			else
				$className = 'evenline';

			echo str_repeat(TAB, 4) . "<tr class=\"{$className}\">" . CRLF;
			echo str_repeat(TAB, 5) . "<td class=\"imageArea\"><img src=\"{$images[$i]}\" alt=\"\" /></td>" . CRLF;
			echo str_repeat(TAB, 5) . "<td class=\"urlArea\">{$images[$i]}</td>" . CRLF;
			echo str_repeat(TAB, 5) . "<td class=\"codeArea\">&lt;img src=&quot;{$images[$i]}&quot; alt=&quot;&quot; /&gt;</td>" . CRLF;
			echo str_repeat(TAB, 4) . "</tr>" . CRLF;
			$count++;
		}

		echo str_repeat(TAB, 3) . '</table>' . CRLF;
		echo str_repeat(TAB, 2) . '</div>' . CRLF;
	}
}
?>
	</div>
<?php callFootCnt();?>