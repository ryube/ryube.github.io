var mobiQrCode = function() {
	var hostnamevar = 'http://' + location.host;
	$('.directory > table > tbody > tr').find('td:eq(6) a').mouseover(function() {
		var offset = $(this).offset();
		$('body').append('<div class="mobile_qrcode"><strong style="display:block;text-align:center;padding-top:10px;font-size:16px;">QRcode</strong><img src="http://chart.apis.google.com/chart?cht=qr&chl='+hostnamevar+$(this).attr('href')+'&chs=150x150" /></div>');
		$('.mobile_qrcode').css({'position':'absolute','background-color':'#fff','border':'1px solid #ccc','top':offset.top + 15,'left':offset.left + 15});
	}).mouseout(function() {
		$('.mobile_qrcode').remove();
	});
}

var winPopup = function() {
	var PCN = 'winpop';
	$('a[class*=' + PCN + ']').each(function() {
		var PCNA = this.className.split(' ');
		var pSize = PCNA[PCNA.length-1].slice(PCN.length+1).split('_');
		$(this).click(function() {
			var popupLeft = (screen.width - pSize[0])/2;
			var popupTop = (screen.height - pSize[1])/2;
			var popupProps = "width=" + pSize[0] + ",height=" + pSize[1] + ",scrollbars=" + pSize[2] + ",left=" + popupLeft + ",top=" + popupTop + ",toolbar=0,directories=0,status=0,menubar=0,resizable=0";
			window.open($(this).attr('href'),'popup_'+pSize[0]+'_'+pSize[1],popupProps);
			return false;
		});
	});
}

var tracUrl = function() {
	$('.directory > table > tbody > tr').each(function() {
		var $that = $(this);
		var $a = $(this).find('td:eq(6) a');
		if ($a.length>0) {
			$a.each(function() {
				var aEl = 'http://114.108.175.216:81/trac/sony/log/trunk' + $(this).attr('href');
				$that.find('td:eq(8)').children().remove().end().append('<a href="' + aEl + '" target="_blank">trac</a>');
			});
		}
	});
}

var milestoneBd = function(row) {
	$('.depth3').remove();
	$('<ul class="depth3"></ul>').insertAfter('#container .directory');
	$('.directory > table > tbody > tr').find('td:eq('+row+')').each(function(index) {
		var $that = $(this);
		var $a = $(this).text();
		if ($a.length>0) {
			$that.parent().addClass('milestone');
			$that.attr('id', 'item' + index);
			$that.clone().appendTo('.depth3');
			$('.depth3 td').replaceWith('<li><a href="#item' + index + '">' + $(this).text() + '</a></li>');
		}
	});
}

$.fn.codeViewer = function() {
	$.each(this, function(i) {
		var codeWrap = $(this).find('pre');
		var codeData = codeWrap.text();

		var codeTabWrap = $('<ul></ul>').attr({
			'class' : 'tab'
		}).appendTo(this);

		var cntWrap = $('<div></div>').attr({
			'class' : 'cntWrap'
		}).appendTo(this);

		codeWrap = $(codeWrap.remove()).appendTo(cntWrap);

		var codeView = $('<iframe></iframe>').attr({
			scrolling: 'no',
			frameBorder: '0',
			'class' : 'view',
			src: 'viewer.html'
		}).css({
			'opacity': 0
		}).appendTo(cntWrap).load(function() {
			var divWrap = $(this).contents().find('#body');
			divWrap.html(codeData);
			$(this).animate({
				'height': divWrap.outerHeight(true) + 30 + 'px',
				'opacity': 1
			}, 300);
		});

		var view = $('<li></li>').appendTo(codeTabWrap).append('View').attr({
			'class' : 'view on'
		}).click(function() {
			codeView.show();
			codeWrap.hide();
			$(this).parent().find('li').removeClass('on');
			$(this).addClass('on');
			return false;
		});

		var code = $('<li></li>').appendTo(codeTabWrap).append('Code').attr({
			'class' : 'code'
		}).click(function() {
			codeView.hide();
			codeWrap.show();
			$(this).parent().find('li').removeClass('on');
			$(this).addClass('on');
			return false;
		});
	});
};