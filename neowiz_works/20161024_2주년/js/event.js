/* easing  */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});

require.config({
	paths: {
		TweenMax: 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/TweenMax.min',
		TimelineMax: 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/TweenMax.min',
		ScrollMagic: 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/ScrollMagic.min',
		ScrollToPlugin: 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/plugins/ScrollToPlugin.min',
		"animation.gsap": 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/plugins/animation.gsap.min',
		"ScrollMagic.debug": 'http://mm.pmang.com/pmang/ava/event/2016/0622/js/plugins/debug.addIndicators.min'
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

function weekSlider(t, s){

	$(t).flexslider({
		animation: "slide",
		easing: "easeOutQuart",
		directionNav : true,
		controlNav: false,
		slideshow: false,
		animationSpeed: 700,
		startAt: s,
		start: function(slider) {
			$('.filp_holder').attr('class','filp_holder w'+(slider.currentSlide+1));
		},

		before: function(slider) {
			$('.filp_holder').addClass('change');
		},
		after: function(slider){
			$('.filp_holder').attr('class','filp_holder w'+(slider.currentSlide+1));
			setTimeout(function(){
				$('.filp_holder').removeClass('change');
			},300)


		}
	});

	var filpBoard = {
		rangeStart : 0,
		rangeEnd : 1, 
		init : function(){
			filpBoard.setTime(false);
			filpBoard.Interval = setInterval(function(){
				filpBoard.setTime(true);
			}, 2000);
		},
		flipTo : function(digit, n){
			var current = digit.attr('data-num');
			digit.attr('data-num', n);
			digit.find('.front').attr('class', 'flap over front c'+current);
			digit.find('.back').attr('class', 'flap over back c'+n);
			digit.find('.under').attr('class', 'flap under c'+n);
			digit.find('.flap').css('display', 'block');
			setTimeout(function(){
				digit.find('.base').attr('class','base c'+n+'');
				digit.find('.flap').css('display', 'none');
			}, 550);
		},

		jumpTo : function (digit, n){
			digit.attr('data-num', n);
			digit.find('.base').attr('class','base c'+n+'');
		},
		updateGroup : function (t, n, flip){
			var tar = $('.'+t);
			n = String(n);
			if(n.length == 1) n = '0'+n;
			var num = n.substr(1, 1);
				if(flip) filpBoard.flipTo(tar, num);
				else filpBoard.jumpTo(tar, num);
		},
		setTime : function (flip){
			filpBoard.updateGroup('filp_holder', filpBoard.rangeStart, flip);
			filpBoard.rangeStart != filpBoard.rangeEnd ? filpBoard.rangeStart++ : filpBoard.rangeStart = 0;
		}
	}

	filpBoard.init();

}

function textSlider(t) {

	$(t).flexslider({
		animation: "fade",
		easing: "easeOutQuart",
		directionNav : false,
		controlNav: false,
		slideshow: true,
		slideshowSpeed: 3000, 
		animationSpeed: 700,
		startAt: 0,
		randomize: true,
	});
}


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

function reloadUi() {
	scrollMove();
	layerBtn();
};

$(function(){
	reloadUi();
	
	var $qck = $('.qck a, .container .section'),
		$sec = $('.container .section');

	$qck.eq(0).addClass('on');
	// Scroll Event
	$(window).on('scroll.default',function(){
		var wsTop = $(this).scrollTop();
		if($('.scroll_value').length != 0){$('.scroll_value').text(wsTop);}
		
		if(wsTop > 7200) {
			$qck.removeClass('on');
			$qck.eq(4).addClass('on');
			$sec.eq(4).addClass('on');
		} else if(wsTop > 5681) {
			$qck.removeClass('on');
			$qck.eq(3).addClass('on');
			$sec.eq(3).addClass('on');
		} else if(wsTop > 2948) {
			$qck.removeClass('on');
			$qck.eq(2).addClass('on');
			$sec.eq(2).addClass('on');
		} else if(wsTop > 1160) {
			$qck.removeClass('on');
			$qck.eq(1).addClass('on');
			$sec.eq(1).addClass('on');
		} else {
			$qck.removeClass('on');
			$qck.eq(0).addClass('on');
			$sec.eq(0).addClass('on');
		}
	});
	
	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			reloadUi();
		});
	}
	require(['TweenMax', 'TimelineMax'], function (TweenMax, TimelineMax) {

		var $h1 = $('#bsq_ev00 h1 span'),
			mtl = new TimelineMax;

		mtl.set($h1, {opacity:0, scale: 1.4});
		for (var i = 0, l = $h1.length; i < l; i++) {
			mtl.to($h1[i], 1, {opacity:1, scale:1, ease:Power3.easeOut}, Math.random()*.8, "$h1");
		}
		
		mtl.eventCallback("onComplete", function() {
			TweenMax.staggerTo(".neon span", 2,{
				opacity:.8,
				repeat:-1,
				repeatDelay:0,
				delay:0,
				yoyo:true,
				ease: RoughEase.ease.config({template: Power0.easeNone,strength: 1.5, points: 30, taper: "none", randomize: true, clamp: false}),
			}, .5);
		});
		TweenMax.staggerTo(".cir span", 1,{
			opacity: 1,
			repeat:-1,
			repeatDelay:0,
			delay:0,
			yoyo:true,
		}, 1);

		var tlcir = new TimelineMax({repeat: -1, delay: 0});
		var tlwneon = new TimelineMax({repeat: -1, delay: 0});
		var duration = 1;
		var $cir4 = $('.cir4 span'),
			$wneon = $('.wneon span'),
			length = $cir4.length,
			wlength = $wneon.length;

		for (var i = 0; i < length; i += 1) {
		    tlcir.from($cir4[i], duration, { opacity: 0, ease: Elastic.easeOut });
		    tlcir.to($cir4[i], duration, { opacity: 1, ease: Elastic.easeIn });
		}

		for (var i = 0; i < wlength; i += 1) {
		    tlwneon.from($wneon[i], duration, { opacity: 0, ease: Elastic.easeOut });
		    tlwneon.to($wneon[i], duration, { opacity: 1, ease: Elastic.easeIn });
		}
		
	});
});
