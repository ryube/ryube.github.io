<!DOCTYPE HTML>
<html>
<head>
<title></title>	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="/healthcare/styles/style.css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/healthcare/scripts/lib/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/healthcare/scripts/lib/jquery-ui-latest.js" type="text/javascript"></script>
<script src="/healthcare/scripts/lib/jquery.layout-latest.min.js" type="text/javascript"></script>
<script src="/healthcare/scripts/common/common.js" type="text/javascript"></script>
<script src="/healthcare/scripts/common/common_contents.js" type="text/javascript"></script>
<script type="text/javascript" src="/healthcare/scripts/ui.js"></script>
<script type="text/javascript" src="/healthcare/scripts/fakescroll.js"></script>
<script type="text/javascript">

	var layoutSplit,
		leftMenu;

	$(document).ready(function () {

		//pressClass();

		layoutSplit = new ContentsScreenControl2(CONTENTS_SCREEN_TYPE.none);
		//layoutSplit.resetType(CONTENTS_SCREEN_TYPE.none);
		//setContentsLayoutSplit(LAYOUT_SPLIT_TYPE.none);
		$('#layout_none').on('click', function () {
			layoutSplit.resetType(CONTENTS_SCREEN_TYPE.none);
		});
		$('#layout_vertical').on('click', function () {
			$('.layout_change').removeClass('hori').addClass('verti')
			layoutSplit.resetType(CONTENTS_SCREEN_TYPE.vertical);

			//fakescroll.set('custom_scroll2',{ x:{disable:true}});
		});
		$('#layout_horizontal').on('click', function () {
			$('.layout_change').removeClass('verti').addClass("hori")
			layoutSplit.resetType(CONTENTS_SCREEN_TYPE.horizontal);
		});

		$('#layout_none').click()

		//leftMenu = new LeftMenuControl('left_box_menu');

		leftMenuControl.set('left_box_menu');

		var titleInfo = [{ "checkbox": true }, { "model": "" }, { "model": ""}];
		//checkbox 박스 binding 은 getList callback으로 처리.

		var html = '';

	});

</script>
</head>