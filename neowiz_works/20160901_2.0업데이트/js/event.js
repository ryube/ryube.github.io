/* easing  */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});
/* 마우스휠 이벤트 헨들러 */
!function(a){"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});


var BrowserDetect = {
	init: function () {
		var docElement = document.documentElement
		this.browser = this.searchString(this.dataBrowser) || "Other";
		this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
		this.mobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ? "mobile" : "pc"
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

var rRange = function(min, max) {
	return Math.floor( (Math.random() * (max - min + 1)) + min );
}

function scrollMove() {
	$('.btn_pos').bind('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html, body').stop(true, false).animate({ scrollTop: desOffset.top}, 2000, 'easeInOutQuint');
		return false;
	});
};

function placeHoldBg(){
	// input value 
	$('.ph').each(function(){
		if($(this).val()==''){ $(this).addClass('ph-on');}
	})
	
	$('.ph').unbind('focusin').bind('focusin',function(){
		if($(this).val()==''){
			$(this).removeClass('ph-on');
		};
	}).unbind('focusout').bind('focusout',function(){
		if($(this).val()==''){
			$(this).addClass('ph-on');
		};
	});
}

function check_sign(t) {
	function toggleChk(t){
		$(t).has('input:checked').addClass('check_on');
		$(t).has('input:not(:checked)').removeClass('check_on');
	}
	toggleChk(t);
	$(t).off().on('click', function(){
		var checkbox = $(t).children('input[type=checkbox]');
		$(checkbox).is(":checked") ? $(checkbox).attr('checked', false) : $(checkbox).attr('checked', true);
		toggleChk(t);
	});
}

function tabContents(l, t, active) {
	var linkWrap = $(l);
	var targetWrap = $(t);
	var linkTarget;
	var linkElem = linkWrap.find('li a');
	var targetContnets = targetWrap.find('>div')
	linkElem.bind('click', function(){
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
	};
	tabChange($(linkElem[active]));
};

function layerBtn() {
	function layerOpen(target) {
		var left = ( $(window).scrollLeft() + ($(window).width() - $(target).width()) / 2 );
		var top = ( $(window).scrollTop() + ($(window).height() - $(target).height()) / 2 );
		if($(window).scrollTop()>top){top = $(window).scrollTop()};
		$(target).css({'left':left,'top':top});
	};
	function closeAni(){
		$('.layer_pop.on').stop(true, false).animate({ opacity: 0, marginTop: 25}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on')});
		$('.pop_dim').stop(true, false).animate({ opacity: 0}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on')});
	}
	function openAni(t){
		$(t).addClass('on').stop(true, false).animate({ opacity: 1, marginTop: 0}, 250, 'easeOutQuad',function(){});
		$('.pop_dim').addClass('on').stop(true, false).animate({ opacity: .7}, 250, 'easeOutQuad',function(){});
	}
	$('.btn_layer').bind('click', function(){
		if($(this).hasClass('off')) {return false}
		var target = $(this).attr('href')
		layerOpen(target);
		if ($(target).hasClass('on')) {return false}
		closeAni();
		openAni(target)
		return false;
	});

	$('a.layer_close').bind('click', function(){
		closeAni();
		return false;
	});
};


function gotoTop() {
	$('.qck_nav a').bind('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html:not(:animated), body:not(:animated)').stop(true, false).animate({ scrollTop: desOffset.top }, 1000, 'easeOutCubic');
		return false;
	});
}

var	ytScript = false;
// YouTube Api 
function ytScriptFire() {
	var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	ytScript = true;
};

var gWh, player, ytTime; // window height
function fullbgVideo() {
	//https://youtu.be/SjkKVOGoE4k 
	var $holder = $('#video .yt, #cha_video'),
		ytCode = '41hFiIGdRIo',
		videoWidth,
		videoHeight;
	function setVideoSize(holder) {
		var winWidth = $(window).width(),
			mLeft, mTop, w, h;
			gWh = $(window).height();
		// if(gWh<900 || winWidth < 1450){
		// 	winWidth = 1450
		// 	gWh = 900
		// }


			videoHeight = gWh;
			videoWidth = (videoHeight*16)/9;
		
			$holder.css({height:gWh});
			w = videoWidth;
			h = videoHeight;
			if(winWidth>videoWidth){
				videoWidth = winWidth;
				videoHeight = (winWidth*9)/16;
				w = videoWidth;
				h = videoHeight;
			}

			mTop = videoHeight/2;
			mLeft = videoWidth/2;

			$holder.css({
				width : w,
				height : h,
				marginLeft : -mLeft,
				marginTop : -mTop 
			});
	};

	player = new YT.Player('yt_video', {
	width: '100%',
	height: '100%',
	videoId: ytCode,
	events: {
		'onReady': onPlayerReady,
	},
		playerVars : {
			enablejsapi:'1',
			autoplay:'1',
			controls:'0',
			modestbranding:'1',
			showinfo:'0',
			rel:'0',
			loop:'1',
			fs:'0',
			disablekb:'1',
			playlist: ytCode,
			listType:'playlist',
			wmode:'opaque'
		}
	});
	
	setVideoSize();
	$(window).on('resize', function(){
		setTimeout(function(){
			setVideoSize();
		}, 200)
	});

};

if (!$('html').hasClass('old-man')) {
	function onPlayerReady(event) {
		event.target.setPlaybackQuality('hd1080');
		event.target.mute();
		setTimeout(function(){blessUpdate.init();},500);
		$('.wrap').addClass('ready');
	};

	function onYouTubeIframeAPIReady(){
		fullbgVideo();
		// ytFx();

	};

}
function ytFx(){
	var ww,
		wh,
		$target = $('#yt_video');
	ww = $(window).width()
	wh = $(window).height()
	$(window).on('resize.ytFx',function() {
		ww = $(window).width();
		wh = $(window).height();
	});
	$(document).on('mousemove',function( event ) {
		cx = Math.ceil($('body').width() / 2.0);
		cy = Math.ceil($('body').height() / 2.0);
		dx = event.pageX - cx;
		dy = event.pageY - cy;

		tiltx = (dy / cy);
		tilty = - (dx / cx);
		radius = Math.sqrt(Math.pow(tiltx,2) + Math.pow(tilty,2));
		degree = (radius * 20);
		$target.css({
		'transform' : 'scale(1.2) rotate3d(' + tiltx*1.4 + ', ' + tilty*1.4+ ', 0, ' + degree/2 + 'deg)'
		})

	});
}
function ytChange() {
	var $btn = $('.promo_list .btn_mov'),
		vCode,
		ytHtml,
		videoHtmlHolder = $('.promo_video');

		$btn.on('click', function(){
			if($(this).hasClass('off')){
				var img = $(this).attr('img-url')
				var imgHtml = '<img src="'+img+'">'
				videoHtmlHolder.find('iframe, img').detach();
				$(imgHtml).appendTo(videoHtmlHolder);
			} else {
				vCode = $(this).attr('yt-code')
				ytHtml = '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/'+vCode+'?feature=player_detailpage&wmode=opaque&autoplay=0&vq=hd1080" frameborder="0" allowfullscreen>',
				videoHtmlHolder.find('iframe, img').detach();
				$(ytHtml).appendTo(videoHtmlHolder);
				
			}
			
			$btn.removeClass('on');
			$(this).addClass('on');
			return false;
		});
		$btn.eq(0).click();
}

function htmlPosition(elem) {
	var left = ( $(window).scrollLeft() + ($(window).width() - $(elem).width()) / 2 );
	var top = ( $(window).scrollTop() + ($(window).height() - $(elem).height()) / 2 );
	if($(window).scrollTop()>top){top = $(window).scrollTop()};
	$(elem).css({'left':left,'top':top});
}

function cellFx(targetId) {
    /* 
		setFade = [ view/hidden[0] , boxSize[1] , fadeTime[2], boxDelayMin[3], boxDelayMax[4], translateZmin[5],translateZmax[6]] 
	*/
    var setFade = ['view', 45, 0.5, 0, 50, 100, 150];
    boxZindex = 200,
        boxBg = $(targetId).css('background-image');

    if (setFade[0] === 'view') {
        $(targetId).addClass('fadeOn');
    }
    $(targetId).each(function(e) {
        boxNumber = 0;
         isNaN($(this).attr('data-delay')) ? orderDelay = 0 : orderDelay = Number($(this).attr('data-delay'))
        maxX = $(this).innerWidth() / setFade[1];
        maxY = $(this).innerHeight() / setFade[1];
        for (y = 0; y < maxY; y++) {
            for (x = 0; x < maxX; x++) {
                $(this).append('<span class="cell c' + boxNumber + '" style="width:' + setFade[1] + 'px; height:' + setFade[1] + 'px; left:' + (x * setFade[1]) + 'px; top:' + (y * setFade[1]) + 'px; background-position:-' + (x * setFade[1]) + 'px -' + (y * setFade[1]) + 'px; transition-delay:' + (orderDelay+(rRange(setFade[3], setFade[4]) / 100)) + 's; transform:translate3d(0,0,' + (rRange(-setFade[5], setFade[6])) + 'px);"></span>');
            }
        }
    });
}

function blsliders() {
	$('#nav .banner').flexslider({
		animation: "fade",
		easing: "easeOutQuart",
		directionNav : false,
		controlNav: true,
		slideshow: true,
		animationSpeed: 1000,
		slideshowSpeed: 5000,
		before: function(slider) {
		},
		after: function(slider){
		}
	});
	$('#s10 .raid_slides').flexslider({
		animation: "fade",
		easing: "easeOutQuart",
		directionNav : false,
		controlNav: true,
		slideshow: false,
		animationSpeed: 450,
		slideshowSpeed: 5000,
		before: function(slider) {
		},
		after: function(slider){
		}
	});	
	$('#s12 .zito_slides').flexslider({
		animation: "fade",
		easing: "easeOutQuart",
		directionNav : false,
		controlNav: true,
		slideshow: false,
		animationSpeed: 450,
		slideshowSpeed: 5000,
		manualControls: "#s12 .m_control a",
		before: function(slider) {
		},
		after: function(slider){
		}
	});
	$('#s14 .north_slides').flexslider({
		animation: "fade",
		easing: "easeOutQuart",
		directionNav : false,
		controlNav: true,
		slideshow: false,
		animationSpeed: 450,
		slideshowSpeed: 5000,
		manualControls: "#s14 .m_control a",
		before: function(slider) {
		},
		after: function(slider){
		}
	});
	$('#s15 .south_slides').flexslider({
		animation: "fade",
		easing: "easeOutQuart",
		directionNav : false,
		controlNav: true,
		slideshow: false,
		animationSpeed: 450,
		slideshowSpeed: 5000,
		manualControls: "#s15 .m_control a",
		before: function(slider) {
		},
		after: function(slider){
		}
	});	
}
var blessUpdate = {
	elem : {},
	init : function() {
		blessUpdate.index = 0;
		blessUpdate.subIndex = 0;
		blessUpdate.delay = 500;
		blessUpdate.playerCurrentTime = 0;

		blsliders();
		blessUpdate.wheelControl();
		blessUpdate.elem.$sec = $('.wrap > .section');
		blessUpdate.elem.$wrap = $('.wrap');
		blessUpdate.elem.$d1 = $('.dept1 > li');
		blessUpdate.elem.$d1_1 = $('.s1 + .dept2 > li');
		blessUpdate.elem.$d2_1 = $('.s2 + .dept2 > li');
		blessUpdate.elem.$d3_1 = $('.s3 + .dept2 > li');
		blessUpdate.elem.$d4_1 = $('.s4 +.dept2 > li');
		blessUpdate.elem.$pv = $('.promo_video');
		blessUpdate.elem.char = document.getElementById('cha_video');

		if(window.location.hash){
			var hashUrl = window.location.hash,
			hashArray = hashUrl.split('/'),
			hashEl = hashArray.pop();
			blessUpdate.index = Number(hashEl.replace(/[^0-9]/g,''));
			
		}
		blessUpdate.indexUpdate(blessUpdate.index, blessUpdate.subIndex);

		$('.btn-goto').on('click', function(e){
			e.preventDefault();
			var n = $(this).attr('data-idx').split('_');
			blessUpdate.index = Number(n[0]);
			blessUpdate.index>10 ? blessUpdate.subIndex = 4 : blessUpdate.subIndex = 0;
			if(n[1]){blessUpdate.subIndex = Number(n[1]);}
			blessUpdate.indexUpdate(blessUpdate.index, blessUpdate.subIndex);
		});

	},
	ytPlayerTime : function(t1, t2, idx) {
		if(blessUpdate.index == blessUpdate.before){return false;}
		player.seekTo(t1);
		clearInterval(blessUpdate.playerInterval);
		blessUpdate.playerInterval = setInterval(function(){
			blessUpdate.ytTime = player.getCurrentTime();
			if(blessUpdate.ytTime>t2){
				player.seekTo(t1);
			}
			blessUpdate.before = idx
		},200);
	},
	wheelControl : function() {
		$(document).off('mousewheel.blupdate').one("mousewheel.blupdate", function(event, delta) {
			if(delta < 0){
				//down
				if(blessUpdate.index == 10 && blessUpdate.subIndex < 4) {
					blessUpdate.subIndex++;
				} else if(blessUpdate.index < 17) {
					blessUpdate.index++;
				}
			} else if(delta > 0){
				//up
				if(blessUpdate.index == 10 && blessUpdate.subIndex > 0){
					blessUpdate.subIndex--;
				} else if(blessUpdate.index > 0) {
					blessUpdate.index--;
				}
			}
			blessUpdate.indexUpdate(blessUpdate.index, blessUpdate.subIndex)
			setTimeout(blessUpdate.wheelControl, blessUpdate.delay);
		});
	},
	indexUpdate : function(idx, subIdx) {
		blessUpdate.elem.$sec.removeClass('sec-on sec-prev sec-next')
		$(blessUpdate.elem.$sec[idx]).prev('.section').addClass('sec-prev');
		$(blessUpdate.elem.$sec[idx]).addClass('sec-on');
		$(blessUpdate.elem.$sec[idx]).next('.section').addClass('sec-next');
		blessUpdate.subIndex;
		blessUpdate.caseControl(idx, subIdx);
	},
	caseControl : function(idx, subIdx) {
		function navPosition(i){
			blessUpdate.elem.$d1.removeClass('on');
			blessUpdate.elem.$d1_1.removeClass('on');
			blessUpdate.elem.$d2_1.removeClass('on');
			blessUpdate.elem.$d3_1.removeClass('on');
			blessUpdate.elem.$d4_1.removeClass('on');
			blessUpdate.elem.$d1.eq(i).addClass('on');
			if(blessUpdate.elem.char)blessUpdate.elem.char.pause();
			if(idx== 10){
				blessUpdate.elem.$d3_1.eq(blessUpdate.subIndex).addClass('on');
				$('.raid_slides .flex-control-nav li').eq(blessUpdate.subIndex).find('a').click();
			}

			if (idx>11) {
				blessUpdate.elem.$d4_1.eq(blessUpdate.index-12).addClass('on');	
			}
			if (idx>2 && idx < 7) {
				blessUpdate.elem.$d1_1.eq(0).addClass('on');
					
			}
			if (idx==8) {
				blessUpdate.elem.$d2_1.eq(0).addClass('on');	
			}
			var $g = $('.gnb');
			setTimeout(function(){$g.css('margin-top', -$g.innerHeight()/2);}, 500)
		}
		blessUpdate.elem.$pv.find('iframe, img').detach();
		player.playVideo();
		idx<1 ? blessUpdate.elem.$wrap.addClass('s0') : blessUpdate.elem.$wrap.removeClass('s0')
		idx == 1 ? blessUpdate.elem.$wrap.addClass('dim') : blessUpdate.elem.$wrap.removeClass('dim')
		switch (idx) {
			case 0 :
				blessUpdate.ytPlayerTime(0, 12, idx);
				navPosition(0);
				
				break;
			case 1 : 
				$('.promo_list .m1').click();
				navPosition(0);
				player.pauseVideo();
				break;
			case 2 : 
				blessUpdate.ytPlayerTime(13.8, 25.2, idx);
				navPosition(1);
				if(blessUpdate.elem.char)blessUpdate.elem.char.play();
				player.pauseVideo();
				break;
			case 3 :
				navPosition(1);
				break;
			case 4 : 
				navPosition(1);
				player.pauseVideo();
				break;
			case 5 : 
				navPosition(1);
				player.pauseVideo();
				break;
			case 6 : 
				navPosition(1);
				player.pauseVideo();
				break;
			case 7 : 
				blessUpdate.ytPlayerTime(26, 40, idx);
				navPosition(2);
				break;
			case 8 : 
				navPosition(2);
				break;
			case 9 : 
				blessUpdate.ytPlayerTime(42, 52, idx);
				navPosition(3);
				break;
			case 10 :
				navPosition(3);
				break;
			case 11 : 
				blessUpdate.ytPlayerTime(55, 66, idx);
				navPosition(4);
				break;
			case 12 :
				navPosition(4);
				break;
			case 13 : 
				navPosition(4);
				break;
			case 14 : 
				navPosition(4);
				break;
			case 15 : 
				navPosition(4);
				break;
			case 16 : 
				blessUpdate.ytPlayerTime(67, 79, idx);
				navPosition(5);
				break;
			case 17 : 
				break;
		}
	}
}

//doc Ready
$(function(){
	scrollMove();
	layerBtn();
	ytScriptFire();
	check_sign('.input_check');
	cellFx('.cell-fx');
	ytChange();
	//slider
});
