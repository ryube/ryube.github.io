/* easing */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});

function scrollMove() {
	$('.btn_pos').bind('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html:not(:animated), body:not(:animated)').stop(true, false).animate({ scrollTop: desOffset.top-200 }, 2000, 'easeInOutQuint');
		return false;
	});
};

function tabContents(l, t, active) {
	var linkWrap = $(l);
	var targetWrap = $(t);
	var linkTarget;
	var linkElem = linkWrap.find('a');
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
		targetContnets.hide();
		$(linkTarget).show();
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
		$('.pop_dim').addClass('on').stop(true, false).animate({ opacity: .5}, 250, 'easeOutQuad',function(){});
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

// 퀵 링크
function gotoTop() {
	$('.qck_nav a').bind('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html:not(:animated), body:not(:animated)').stop(true, false).animate({ scrollTop: desOffset.top }, 1000, 'easeOutCubic');
		return false;
	});
}

function rezerAni () {
	var $r1 = $('.r1'),
		$r2 = $('.r2'),
		$r3 = $('.r3'),
		$r4 = $('.r4'),
		$r5 = $('.r5');

	$r1.delay(500).animate({ width: 370, height: 396}, {duration : 500, easing : 'easeOutCubic', complete : function(){
		$(this).animate({opacity:0}, {duration : 500, easing : 'easeOutCubic', complete : function(){}});
	}});
	$r2.delay(100).animate({ width: 845, height: 582}, {duration : 500, easing : 'easeOutCubic', complete : function(){
		$(this).animate({opacity:0}, {duration : 500, easing : 'easeOutCubic', complete : function(){}});
	}});
	$r3.delay(0).animate({ width: 691, height: 326}, {duration : 500, easing : 'easeOutCubic', complete : function(){
		$(this).animate({opacity:0}, {duration : 500, easing : 'easeOutCubic', complete : function(){}});
	}});
	$r4.delay(400).animate({ width: 796, height: 180}, {duration : 500, easing : 'easeOutCubic', complete : function(){
		$(this).animate({opacity:0}, {duration : 500, easing : 'easeOutCubic', complete : function(){}});
	}});
	$r5.delay(300).animate({ width: 798, height: 72}, {duration : 500, easing : 'easeOutCubic', complete : function(){
		$(this).animate({opacity:0}, {duration : 500, easing : 'easeOutCubic', complete : function(){}});
	}});
}

/* 뒤로가기 대응 */
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
		setTimeout(checkHash, 25)
		//window.clearInterval(poll);
	}
}

function reloadUi() {
	layerBtn();
	scrollMove();
	setTimeout(function(){
		rezerAni();
	},1000)
};


$(function(){
	if(window.location.hash){
		var hashUrl = window.location.hash,
		hashArray = hashUrl.split('/'),
		hashEl = hashArray.pop();
		if($(hashEl).length > 0){
			var hashElOffset = $(hashEl).offset();
			setTimeout(function(){
				$('html:not(:animated), body:not(:animated)').stop(true, false).animate({ scrollTop: hashElOffset.top-250 }, 2000, 'easeInOutQuint');
			}, 500 )
		}
		
	}
	
	// Scroll Event
	var gnbEl = $('.wrap_pm_gnb');
	var gnbOffSet = gnbEl.offset();
	if(gnbEl.length != 0){
		$(window).bind('scroll',function(){
			var wsTop = $(this).scrollTop();
			if($('.scroll_value').length != 0){$('.scroll_value').text(wsTop);}
			if (gnbOffSet.top < wsTop) {
				gnbEl.addClass('fixed')
			} else {
				gnbEl.removeClass('fixed')
			}

		});
	}
	reloadUi();	

	
	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			reloadUi();
		});
	}
});
