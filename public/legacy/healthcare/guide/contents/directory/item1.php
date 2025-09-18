<?php
require $_SERVER["DOCUMENT_ROOT"] . "/healthcare/guide/lib/config.php";
$rootIndex = 3;
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
		<h2>작업현황판 - <em>IPC - Admin</em></h2>
		<p class="info">
			△ : 작업중  ○ : 마크업 완료  
		</p>
		<div class="directory">
			<table border="1" summary="작업 디렉토리구조도입니다.">
				<caption>디렉토리 구조도</caption>
				<colgroup>
					<col width="50px" />
					<col width="%" />
					<col width="%" />
					<col width="%" />
					<col width="%" />
					<col width="%" />
					<col width="%" />
					<col width="%" />
					<col width="%" />
				</colgroup>
				<thead>
					<tr>
						<th>구분</th>
						<th>N1</th>
						<th>N2</th>
						<th>N3</th>
						<th>N4</th>
						<th>N5</th>
						<th>실작업 페이지</th>
						<th>UI</th>
						<th>GUI</th>
						<th>Publish</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td>Global</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Login</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/login</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/home/login.php">IPC_login</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Login InvalidDataAlert</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>2.2.Sign in_message</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Logout</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>/logout</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Logout SucsesseResult</td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>/goodbye</td>
						<td>X</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td>FindID</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/accounts/find</td>
						<td>X</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>FindPW</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/accounts/find</td>
						<td>O</td>
						<td>2.3.Sign in_forgot password</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Global Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Global Common UnloadConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>X</td>
						<td>2.2.Sign in_message</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>AdminNotice</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminNotice List</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/bulletins</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminnotice/home.php">IPC_home</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminNotice Detail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/bulletins/{id}</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminnotice/notice_detail_view.php">IPC_home_norse notice_detail view</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminNotice Add</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/bulletins/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminnotice/nurse_notice_add.php">IPC_home_norse notice_add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminNotice Edit</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/bulletins/{id}/edit</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminnotice/nurse_notice_edit.php">IPC_home_norse notice_edit</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminNotice Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>AdminNotice Common DeleteConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>AdminNotice Common InvalidDataAlert</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>X</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_add_pop_id.php">IPC_adminaccount_add_popup_id(1)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>AdminNotice Common SaveConfirm </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>DeviceManagement</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>DeviceManagement List</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/devicemagement/devicemanagement.php">IPC_devicemanagement</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>DeviceManagement Detail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/devices</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/devicemagement/devicemanagement_detailinfo.php">IPC_devicemanagement_detailinfo</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>DeviceManagement Add</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/devices/{id}</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/devicemagement/devicemanagement_add.php">IPC_devicemanagement_add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>DeviceManagement Edit</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/devices/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/devicemagement/devicemanagement_edit.php">IPC_devicemanagement_edit</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>DeviceManagement Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>/devices/{id}/edit</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td></td>
						<td>DeviceManagement Common ImportResult</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>X</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>DeviceManagement Common DuplicationBed</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/devicemagement/devicemanagement_add_pop_error.php">4.7.Device Management_add_messages_01</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>DeviceManagement Common BedSelect</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>X</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>DeviceManagement Common DeleteConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>4.9.Device Management_Confirm popup</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>[</td>
						<td>DeviceManagement Common InvalidDataAlert </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>4.7.Device Management_add_messages_03</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>DeviceManagement Common SaveConfirm </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>4.7.Device Management_add_messages_02</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>DeviceManagement Common StatusTooltip</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>4.11.Device Management_mouse over</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td>CarePlan</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td>CarePlan List</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/careplans</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/careplan/careplan_list.php">6.1.Care Plan_list</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>수정</td>
						<td></td>
						<td>CarePlan Detail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/careplans/{id}</td>
						<td>X</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>CarePlan DetailDaily</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/careplan/careplan_detail.php">6.2.Care Plan_detail view_daily</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>CarePlan DetailWeekly</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/careplan/careplan_detail.php">6.3.Care Plan_detail view_weekly</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>CarePlan DetailMonthly</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/careplan/careplan_detail.php">6.4.Care Plan_detail view_monthly</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>CarePlan DetailAllList</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/careplan/careplan_all_list.php">6.5.Care Plan_detail view_all list</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td>CarePlan Add</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/careplans/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/careplan/careplan_add_pop.php">6.6.Care Plan_detail view_add popup_01</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td>CarePlan Edit</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/careplans/{id}/edit</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/careplan/careplan_add_pop02.php">6.6.Care Plan_detail view_edit popup_02</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td>CarePlan ForAllPatientList</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>6.8.Care Plan_list_for all patient_01</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td>CarePlan ForAllPatientDetail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>6.8.Care Plan_list_for all patient_02</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td>CarePlan Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>6.8.Care Plan_list_for all patient_popup_delete_01</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td></td>
						<td>CarePlan Common DeleteConfirm </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td></td>
						<td>CarePlan Common InvalidDataAlert  </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td></td>
						<td>CarePlan Common SaveConfirm </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>6.9.Care Plan_list_for all patient_add_popup_cancel</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>CarePlan Common ImportResult</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>X</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>CarePlan Common Calendar</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>6.2.Care Plan_detail view_daily</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>CarePlan Common ResultogSearch</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>AdminAccount</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminAccount List</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/managers</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account.php">IPC_adminaccount</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminAccount Detail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/managers/{id}</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_detailinfo.php">IPC_adminaccount_detailinfo</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminAccount Add</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/managers/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_add.php">IPC_adminaccount_add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminAccount Edit</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/managers/{id}/edit</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_edit.php">IPC_adminaccount_edit</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>AdminAccount Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>AdminAccount Common DeleteConfirm </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>5.9.Admin Account_confirm popup_02</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>AdminAccount Common DeletePasswordConfirm </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>5.9.Admin Account_confirm popup_01</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>AdminAccount Common SelectEmployees</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>X</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>AdminAccount Common InvalidDataAlert </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_add_pop_id.php">IPC_adminaccount_add_popup_id(1)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>AdminAccount Common SaveConfirm </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>IPC_adminaccount_add_popup_02</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>AdminAccount Common CheckConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>5.7.Admin Account_add_popup_03~04</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>ContentsDelivery</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td>IPC_adminaccount_add_popup_01</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement List</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/contents_management.php">IPC_contentsdelivery_contents management</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Detail</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files/{id}</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/contents_management_detail_view.php">IPC_contents delivery_contents management_detail view</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Add</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/contents_management_add.php">IPC_contents delivery_contents management_add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Edit</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files/{id}/edit</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/contents_management_edit.php">IPC_contents delivery_contents management_edit</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Common</td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Common SelectPatients</td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/devicemagement/devicemanagement_pop_send_to.php">IPC_contents_popup_send</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Common DeleteConfirm </td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Common InvalidDataAlert  </td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_add_pop_id.php">IPC_adminaccount_add_popup_id(1)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Common SaveConfirm </td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery ContentsManagement Common Moveto</td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td>IPC_contents_popup_move to</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>ContentsDelivery Category</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery Category List</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files/categories</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/contents_management_pop_category.php">IPC_contents_popup_category</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery Category Add</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files/categories/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/contents_management_category_add.php">IPC_contents_popup_category add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery Category Edit</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files/categories/{id}/edit</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery Category Delete</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/files/categories/{id}/delete</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/contents_management_category_move.php">IPC_contents_popup_category_del</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>ContentsDelivery DeliveryStatus</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery DeliveryStatus List</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/delivery_status.php">IPC_contentsdelivery_delivery status</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>ContentsDelivery DeliveryStatus Detail</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/contentsdelivery/delivery_status_detail_view.php">IPC_contentsdelivery_delivery status_detail view</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Application</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Application List</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/application/application.php">IPC_application</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Application Detail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps/{id}</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/application/application_detail_view.php">IPC_application_detail_view</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Application Add</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/application/application_add.php">IPC_application_add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Application Edit</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps/{id}/edit</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/application/application_edit.php">IPC_application_edit</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td>Application UpgradetoPatient</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td>Application UpgradetoWard</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Application Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td></td>
						<td>Application Common DistributetoPatient</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>수정</td>
						<td></td>
						<td></td>
						<td>Application Common DistributetoAllPatient</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/application/application_popup_distribute.php">IPC_application_popup_distribute(1)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>수정</td>
						<td></td>
						<td></td>
						<td>Application Common DistributetoWard</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/application/application_popup_distribute02.php">IPC_application_popup_distribute(2)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Common MoveTo</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>7.1.6.Contetnts Management_move to_02</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Common DeleteConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Common InvalidDataAlert </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>7.1.11.Contetnts Management_add_messages_02</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Common SaveConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>7.1.11.Contetnts Management_add_messages_01</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Application Category</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Category List</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps/categories</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/application/application_popup_category.php">IPC_application_popup_category</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Category Add</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps/categories/add</td>
						<td>O</td>
						<td>7.1.10.Contetnts Management_add</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Category Edit</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps/categories/{id}/edit</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Application Category Delete</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/apps/categories/{id}/delete</td>
						<td>O</td>
						<td>7.1.8.Contetnts Management_delete</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>PatientNotice</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientNotice List</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientnotice/notice.php">IPC_notice</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientNotice Detail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications/{id}</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientnotice/notice_detail_view.php">IPC_notice_detail view</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientNotice Add</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientnotice/notice_add.php">IPC_notice_add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientNotice Edit</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications/{id}/edit</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientnotice/notice_edit.php">IPC_notice_edit</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientNotice Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Common MoveTo</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientnotice/notice_popup_moveto.php">IPC_notice_popup_move_to</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Common DeleteConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Common InvalidDataAlert  </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_add_pop_id.php">IPC_adminaccount_add_popup_id(1)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Common SaveConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientNotice Category </td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Category List</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications/categories</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientnotice/notice_popup_category.php">IPC_notice_popup_category</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Category Add</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications/categories/add</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Category Edit</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications/categories/{id}/edit</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientNotice Category Delete</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/notifications/categories/{id}/delete</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>Settings</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Settings General</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>수정</td>
						<td></td>
						<td></td>
						<td>Settings General Detail</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/settings</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/settings/setting.php">10.1.Settiings_general settings_default_01~02</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Settings Restriction</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>Settings Restriction Detail</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>수정</td>
						<td></td>
						<td></td>
						<td>Settings Restriction Patients</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/settings/restrictions?tab=patients</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/settings/setting_restriction.php">IPC_settings_restriction</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>수정</td>
						<td></td>
						<td></td>
						<td>Settings Restriction Wards</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/settings/restrictions?tab=wards</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/settings/setting_restriction.php">IPC_settings_restriction</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>Settings NurseCall</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall List</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/settings/nursecalls</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/settings/setting_nurse_call.php">IPC_settings_nursecall</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall Detail</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/settings/nursecalls/{id}</td>
						<td>X</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall Add</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/settings/nursecalls/add</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/settings/setting_nurse_call_add.php">IPC_settings_nursecall_add</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall Edit</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/settings/nursecalls/{id}/edit</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall Common</td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall DeleteConfirm</td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall InvalidDataAlert  </td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_add_pop_id.php">IPC_adminaccount_add_popup_id(1)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>Settings NurseCall SaveConfirm</td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td>Settings Ward</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td></td>
						<td>Settings Ward List</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td></td>
						<td>Settings Ward Detail</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>삭제</td>
						<td></td>
						<td></td>
						<td>Settings Ward Add</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>PatientManagement</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientManagement List</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/patients</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientmanagement/patientmanagement.php">IPC_nurse_parientmanagement</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientManagement Detail</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>/patients/{id}</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientmanagement/patientmanagement_detail.php">IPC_nurse_parientmanagement_detail</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>미정</td>
						<td></td>
						<td>PatientManagement Mapping</td>
						<td></td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientmanagement/patientmanagement_mapping.php">IPC_nurse_parientmanagement_mapping</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>PatientManagement Common</td>
						<td></td>
						<td></td>
						<td></td>
						<td>0</td>
						<td>-</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>PatientManagement SelectPatient</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientManagement SelectBed</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/patientmanagement/patientmanagement_bedchange.php">IPC_nurse_parientmanagement_bedchange</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>신규</td>
						<td></td>
						<td></td>
						<td>PatientManagement SelectCareTeam</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td></td>
						<td>O</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientManagement ClearConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientManagement InvalidDataAlert </td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td><a target="_blank" href="/healthcare/IPC/adminaccount/admin_account_add_pop_id.php">IPC_adminaccount_add_popup_id(1)</a></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>PatientManagement SaveConfirm</td>
						<td></td>
						<td></td>
						<td>1</td>
						<td>-</td>
						<td>O</td>
						<td>-</td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<?php callFootCnt();?>