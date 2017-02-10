<?php
require $_SERVER["DOCUMENT_ROOT"] . "/healthcare/guide/lib/config.php";
$rootIndex = 2;
?>
<?php callHeadCnt();?>
<script>
$(document).ready(function() {
	mobiQrCode();
	winPopup();
	milestoneBd(1);
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
		<h2>작업현황판 - <em>공통 영역</em></h2>
		<p class="info">
			△ : 작업중  ○ : 마크업 완료  ● : 기획컨펌 완료
		</p>
		<div class="directory">
			<table border="1" summary="작업 디렉토리구조도입니다.">
				<caption>디렉토리 구조도</caption>
				<colgroup>
					<col width="9%" />
					<col width="9%" />
					<col width="9%" />
					<col width="9%" />
					<col width="9%" />
					<col width="9%" />
					<col width="9%" />
					<col width="3%" />
					<col width="3%" />
					<col />
				</colgroup>
				<thead>
					<tr>
						<th>-</th>
						<th>1 Depth</th>
						<th>2 Depth</th>
						<th>3 Depth</th>
						<th>4 Depth</th>
						<th>화면ID</th>
						<th>페이지 명</th>
						<th>상태</th>
						<th>로그</th>
						<th>비고</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td><!-- 1dept -->
						<td>Layout</td><!-- 2dept -->
						<td></td><!-- 3dept -->
						<td></td><!-- 4dept -->
						<td></td><!-- 5dept -->
						<td></td><!-- 화면 ID -->
						<td><a href="/healthcare/IPC/home/main.php" target="_blank">main.php</a></td><!-- Page -->
						<td>○</td><!-- 상태 -->
						<td></td><!-- 로그 -->
						<td></td><!-- 비고 -->
					</tr>
					<tr>
						<td></td><!-- 1dept -->
						<td>Layout</td><!-- 2dept -->
						<td></td><!-- 3dept -->
						<td></td><!-- 4dept -->
						<td></td><!-- 5dept -->
						<td></td><!-- 화면 ID -->
						<td><a href="/healthcare/IPC/home/main_mid_scroll.php" target="_blank">main_mid_scroll.php</a></td><!-- Page -->
						<td>○</td><!-- 상태 -->
						<td></td><!-- 로그 -->
						<td></td><!-- 비고 -->
					</tr>
					<tr>
						<td></td><!-- 1dept -->
						<td>Login</td><!-- 2dept -->
						<td></td><!-- 3dept -->
						<td></td><!-- 4dept -->
						<td></td><!-- 5dept -->
						<td></td><!-- 화면 ID -->
						<td><a href="/healthcare/IPC/home/login.php" target="_blank">login.php</a></td><!-- Page -->
						<td>○</td><!-- 상태 -->
						<td></td><!-- 로그 -->
						<td></td><!-- 비고 -->
					</tr>
					<tr>
						<td></td><!-- 1dept -->
						<td>Detail Add</td><!-- 2dept -->
						<td></td><!-- 3dept -->
						<td></td><!-- 4dept -->
						<td></td><!-- 5dept -->
						<td></td><!-- 화면 ID -->
						<td><a href="/healthcare/IPC/adminaccount/admin_account_add.php" target="_blank">admin_account_add.php</a></td><!-- Page -->
						<td>○</td><!-- 상태 -->
						<td></td><!-- 로그 -->
						<td></td><!-- 비고 -->
					</tr>
					
				</tbody>
			</table>
		</div>
	</div>
<?php callFootCnt();?>