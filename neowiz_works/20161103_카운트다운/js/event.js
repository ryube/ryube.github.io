require.config({
	paths: {
		TweenMax: 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/TweenMax.min',
		TimelineMax: 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/TweenMax.min'
	}
});

var BrowserDetect = {
	init: function () {
		var docElement = document.documentElement;
		this.browser = this.searchString(this.dataBrowser) || "Other";
		this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
		this.mobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ? "mobile" : "pc";
		var b = BrowserDetect.browser === "Explorer" && BrowserDetect.version<9 ? "old-man" : BrowserDetect.browser+" "+BrowserDetect.browser+BrowserDetect.version+" "+BrowserDetect.mobile;
		docElement.className = b;
	},
	searchString: function (data) {
		for (var i = 0; i < data.length; i++) {
			var dataString = data[i].string;
			this.versionSearchString = data[i].subString;

			if (dataString.indexOf(data[i].subString) !== -1) {
				return data[i].identity;
			}
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index === -1) {
			return;
		}

		var rv = dataString.indexOf("rv:");
		if (this.versionSearchString === "Trident" && rv !== -1) {
			return parseFloat(dataString.substring(rv + 3));
		} else {
			return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
		}
	},

	dataBrowser: [
		{string: navigator.userAgent, subString: "Edge", identity: "MS Edge"},
		{string: navigator.userAgent, subString: "Chrome", identity: "Chrome"},
		{string: navigator.userAgent, subString: "MSIE", identity: "Explorer"},
		{string: navigator.userAgent, subString: "Trident", identity: "Explorer"},
		{string: navigator.userAgent, subString: "Firefox", identity: "Firefox"},
		{string: navigator.userAgent, subString: "Safari", identity: "Safari"},
		{string: navigator.userAgent, subString: "Opera", identity: "Opera"}
	]

};
BrowserDetect.init();

function shuffle(array) {
	var counter = array.length;

	// While there are elements in the array
	while (counter > 0) {
		// Pick a random index
		var index = Math.floor(Math.random() * counter);

		// Decrease counter by 1
		counter--;

		// And swap the last element with it
		var temp = array[counter];
		array[counter] = array[index];
		array[index] = temp;
	}
	return array;
}

var randomRange = function(min, max) {
	return Math.floor( (Math.random() * (max - min + 1)) + min );
};

function scrollMove() {
	$('.btn_pos').off().on('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html, body').stop(true, false).animate({ scrollTop: desOffset.top-100}, 2000, 'easeInOutQuint');
		return false;
	});
}

function placeHoldBg(){
	// input value 
	$('.ph').each(function(){
		if($(this).val()==''){ $(this).addClass('ph-on');}
	});
	
	$('.ph').unbind('focusin').off().on('focusin',function(){
		if($(this).val()==''){
			$(this).removeClass('ph-on');
		}
	}).unbind('focusout').off().on('focusout',function(){
		if($(this).val()==''){
			$(this).addClass('ph-on');
		}
	});
}

function tabContents(l, t, active) {
	var linkWrap = $(l);
	var targetWrap = $(t);
	var linkTarget;
	var linkElem = linkWrap.find('li a');
	var targetContnets = targetWrap.find('>div');
	linkElem.off().on('click', function(){
		_this = $(this);
		tabChange(_this);	
		return false;
	}); 
	function tabChange(t) {
		if(t.hasClass('close')){return false;}
		linkElem.parent().removeClass('on').addClass('off');
		linkTarget = t.attr('href');
		t.parent().removeClass('off').addClass('on');
		targetContnets.fadeOut();
		$(linkTarget).stop().fadeIn();
	}
	tabChange($(linkElem[active]));
}

function layerBtn() {
	function layerOpen(target) {
		var left = ( $(window).scrollLeft() + ($(window).width() - $(target).width()) / 2 );
		var top = ( $(window).scrollTop() + ($(window).height() - $(target).height()) / 2 );
		if($(window).scrollTop()>top){top = $(window).scrollTop()}
		$(target).css({'left':left,'top':top});
	}
	function closeAni(){
		$('.layer_pop.on').stop(true, false).animate({ opacity: 0, marginTop: 25}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on')});
		$('.pop_dim').stop(true, false).animate({ opacity: 0}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on')});
		//docScrollBlock(false);
	}
	function openAni(t){
		$(t).addClass('on').stop(true, false).animate({ opacity: 1, marginTop: 0}, 250, 'easeOutQuad',function(){});
		$('.pop_dim').addClass('on').stop(true, false).animate({ opacity: .5}, 250, 'easeOutQuad',function(){});
		//docScrollBlock(true);
	}

	$('.btn_layer').off().on('click', function(){
		if($(this).hasClass('off')) {return false};

		var target = $(this).attr('href');
		if ($(target).attr('yt-code')) {
			vCode = $(target).attr('yt-code')
			videoSource = '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/'+vCode+'?feature=player_detailpage&wmode=opaque" frameborder="0" allowfullscreen>'
			$(videoSource).appendTo($(target).find('.yt_holder'));
		}
		layerOpen(target);
		if ($(target).hasClass('on')) {return false};
		closeAni();
		openAni(target)
		return false;
	});

	$('a.layer_close').off().on('click', function(){
		if ($(this).parent().attr('yt-code')){
			$(this).parent().find('.yt_holder>iframe').detach();
		}
		closeAni();
		return false;
	});
}

var docScrollBlock = function(off){
	off ? $(document).on("mousewheel.block DOMMouseScroll.block", function(e){e.stopPropagation();e.preventDefault();}) :  $(document).off("mousewheel.block DOMMouseScroll.block")
}


function htmlPosition(elem) {
	var left = ( $(window).scrollLeft() + ($(window).width() - $(elem).width()) / 2 );
	var top = ( $(window).scrollTop() + ($(window).height() - $(elem).height()) / 2 );
	if($(window).scrollTop()>top){top = $(window).scrollTop()};
	$(elem).css({'left':left,'top':top});
}


//yotube 
var ytScript = false;
var player;
// YouTube Api 
function ytScriptFire() {
	var tag = document.createElement('script');
   tag.src = "https://www.youtube.com/iframe_api";
   var firstScriptTag = document.getElementsByTagName('script')[0];
   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	ytScript = true;
};

function onYouTubeIframeAPIReady() {
	player = new YT.Player('yt_video', {
	width: '100%',
	height: '100%',
	videoId: 'ogB7oAd_H0w',
	events: {
		'onReady': onPlayerReady,
	},
   playerVars: {
      enablejsapi:'1',
      autoplay:'0',
      controls:'1',
      modestbranding:'1',
      showinfo:'1',
      rel:'0',
      loop:'1',
      fs:'0',
      disablekb:'1',
      // playlist: ytCode,
      // listType:'playlist',
      wmode:'opaque'
   }
	});
};

function onPlayerReady(event) {
	event.target.setPlaybackQuality('hd720');
	//event.target.mute();
};


function checkHash(){
	setTimeout(function(){reloadUi();}, 25);
};

var docmode = document.documentMode; 
if ('onhashchange' in window && (docmode === undefined || docmode > 7 )) {
	window.onhashchange = checkHash;
} 
// IE7 doesn't support the hashchange event so we fall back to standard polling technique
else {
	//poll = window.setInterval(checkHash, 500);
	// Clean-up objects as IE7 has hideous performance
	window.onunload = function() {
		setTimeout(checkHash, 25);
		//window.clearInterval(poll);
	};
}

// day counter
function getTimeRemaining(endtime) {
	serverTime.setSeconds(serverTime.getSeconds()+1);
	var t = endtime.getTime() - serverTime.getTime();
	var seconds = Math.floor((t / 1000) % 60);
	var minutes = Math.floor((t / 1000 / 60) % 60);
	var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	var days = Math.floor(t / (1000 * 60 * 60 * 24));

	return {
		'total': t,
		'days': days,
		'hours': hours,
		'minutes': minutes,
		'seconds': seconds
	};
}

function initializeClock(endtime) {
	var $d = $('.days');
	var $d_lcg = $d.find('.cg.left');
	var $d_lc = $d.find('.cg.left .c');
	var $d_rc = $d.find('.cg.right .c');
	var $h = $('.hours');
	var $h_lcg = $h.find('.cg.left');
	var $h_lc = $h.find('.cg.left .c');
	var $h_rc = $h.find('.cg.right .c');
	var $m = $('.mins');
	var $m_lcg = $m.find('.cg.left');
	var $m_lc = $m.find('.cg.left .c');
	var $m_rc = $m.find('.cg.right .c');
	var $s = $('.sec');
	var $s_lcg = $s.find('.cg.left');
	var $s_lc = $s.find('.cg.left .c');
	var $s_rc = $s.find('.cg.right .c');

	function degCal(p){
		var rd = -180,
			ld = -180,
			ldi = -180;

		if(p<=50){
			rd= rd+(p/50*180);
		} else {
			rd = 0;
			p = p-50;
			ld = ld+(p/50*180);
			ldi = -180-(p/50*180);
		}
		return {
			'rd' : rd,
			'ld' : ld,
			'ldi' : ldi
		};
	};

	function updateClock() {
		var t = getTimeRemaining(endtime),
         tday = Math.max(t.days, 0), 
         thours = Math.max(t.hours, 0), 
         tminutes = Math.max(t.minutes, 0), 
         tsec = Math.max(t.seconds, 0),
			dp = parseInt(100-(tday/10*100)),
			hp = parseInt(100-(thours/24*100)),
			mp = parseInt(100-(tminutes/60*100)),
			sp = parseInt(100-(tsec/60*100));
      
		$d.attr('class','count days p-'+dp+'').find('em').text(tday);
		$h.attr('class','count hours p-'+hp+'').find('em').text(('0' + thours).slice(-2));
		$m.attr('class','count mins p-'+mp+'').find('em').text(('0' + tminutes).slice(-2));
		$s.attr('class','count sec p-'+sp+'').find('em').text(('0' + tsec).slice(-2));

		$d_rc.css('transform', 'rotateZ('+degCal(dp).rd+'deg)');
		$d_lcg.css('transform', 'rotateZ('+degCal(dp).ld+'deg)');
		$d_lc.css('transform', 'rotateZ('+degCal(dp).ldi+'deg)');

		$h_rc.css('transform', 'rotateZ('+degCal(hp).rd+'deg)');
		$h_lcg.css('transform', 'rotateZ('+degCal(hp).ld+'deg)');
		$h_lc.css('transform', 'rotateZ('+degCal(hp).ldi+'deg)');

		$m_rc.css('transform', 'rotateZ('+degCal(mp).rd+'deg)');
		$m_lcg.css('transform', 'rotateZ('+degCal(mp).ld+'deg)');
		$m_lc.css('transform', 'rotateZ('+degCal(mp).ldi+'deg)');


		$s_rc.css('transform', 'rotateZ('+degCal(sp).rd+'deg)');
		$s_lcg.css('transform', 'rotateZ('+degCal(sp).ld+'deg)');
		$s_lc.css('transform', 'rotateZ('+degCal(sp).ldi+'deg)');
		

		if (t.total <= 0) {
			clearInterval(timeinterval);
		}
	}
	updateClock();
	var timeinterval = setInterval(updateClock, 1000);
}

function reloadUi() {
	scrollMove();
	layerBtn();
	// ytScriptFire();
};

$(function(){
   ytScriptFire();
	reloadUi();
	//type Character;
	var typewriter = __reqIs('typewriter');
	var $te1 = document.getElementById('tw1');
	var $te2 = document.getElementById('tw2');
	var $te3 = document.getElementById('tw3');
	
	var tb1 = typewriter($te1).withAccuracy(100)
			.withMinimumSpeed(8)
			.withMaximumSpeed(20)
			.build();
	var tb2 = typewriter($te2).withAccuracy(100)
			.withMinimumSpeed(8)
			.withMaximumSpeed(20)
			.build();

	var tb3 = typewriter($te3).withAccuracy(100)
			.withMinimumSpeed(8)
			.withMaximumSpeed(20)
			.build();

	var msg1 = '사전공개 서비스',
		msg2 = '2016.11.29 PM 5:00',
		msg3 = '세계관 영상';

	msg1 = Hangul.disassemble(msg1); 
	msg1 = Hangul.typewrite(msg1);

	msg3 = Hangul.disassemble(msg3);
	msg3 = Hangul.typewrite(msg3);

	

	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			reloadUi();
		});
	}

	require(['TweenMax', 'TimelineMax'], function (TweenMax, TimelineMax) {
		initializeClock(deadline);

		var $pat = $('.pattern'),
			$window = $(window);
		
		function setPattern(){
			var len = parseInt($window.height()/99),
				elClass,
				span ="";
			//set span
			for (var i = 0; i <= len-1; i++) {
				elClass = i%2 == 0 ? "even" : "odd";
				span +='<span class="'+elClass+'"style="top:'+i*99+'px"></span>';
			};
			$pat.html(span);
			//set timeline 
			var	$patEm = $pat.find('span');
			var	patTl = new TimelineMax({repeat:-1, repeatDelay:2});

			patTl.staggerTo($patEm,0.4, {scale:1.1, ease:Power3.easeInOut,repeat:1,yoyo:true}, 0.05)

			//if(scene1){scene1.setTween(patTl)};
		};
		

		

		var checkT1 = false,
			checkT2 = false;
		$('.btn_e1').on('click',function(){
			if(!$(this).hasClass('on')){
				$('.btn_side').removeClass('on');
				$(this).addClass('on');
				$('body').removeClass('ev2-change').addClass('ev1-change');
            
            try {
               if(player) player.stopVideo();   
            } catch(err) {}

				if(!checkT1){
					$te1.innerHTML = '';
					$te2.innerHTML = '';
					tb1.clear().wait(200).type(msg1);
					tb2.clear().wait(2500).type(msg2);

					checkT1 = true;
				}
			}
			return false;
		});
		$('.btn_e2').on('click',function(){
			if(!$(this).hasClass('on')){
				$('.btn_side').removeClass('on');
				$(this).addClass('on');
				$('body').removeClass('ev1-change').addClass('ev2-change');

            try {
               if(player) player.playVideo();
            } catch(err) {}

				if(!checkT2){
					$te3.innerHTML = '';
					tb3.clear().wait(200).type(msg3).wait(500).type('', function () {});
					checkT2 = true;
				}

			}
			return false;
		});

		//init
		setPattern();
		setTimeout(function(){
			$('body').addClass('ready');
			$('.btn_e1').click()

		}, 2000);
		$window.on('resize', function(){
			setTimeout(setPattern, 100);
		});
	});

});
