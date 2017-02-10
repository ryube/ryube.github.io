
/* 마우스휠 이벤트 헨들러 */
!function(a){"object"==typeof exports?module.exports=a:a(jQuery)}(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});

/* easing */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});

var delta;
var currentDate = new Date(), finished = false;

function callback(event) {
	$this = $(this);
	switch(event.type){
		case "seconds":
		case "minutes":
		case "hours":
		case "days":
		case "weeks":
		case "daysLeft":
		//Add html
		if(event.type == "days"){
			if(event.value<3){
				$('span.hurry').show();
			} else {
				$('span.hurry').hide();
			}
			if((event.value).length==1){
				event.value = "0"+event.value;
			}
		}
		$this.find('li.'+event.type).html('<span class=n'+(event.value).substr((event.value).length-2, 1)+'></span><span class=n'+(event.value).substr((event.value).length-1, 1)+'></span>');
		if(finished){
			//$this.fadeTo(0, 1);
			finished = false;
		}
		break;
		case "finished":
		//$this.fadeTo('slow', .1);
		finished = true;
		break;
	}
}

function layerOpen(target) {
	var left = ( $(window).scrollLeft() + ($(window).width() - $(target).width()) / 2 );
	var top = ( $(window).scrollTop() + ($(window).height() - $(target).height()) / 2 );
	if($(window).scrollTop()>top){top = $(window).scrollTop()};
	$(target).css({'left':left,'top':top+150});
};

var vlChk = 0 
var videoSource = ''
function videoLayer() {
	if($('.btn_mov').length != 0) {
		$('.btn_mov').bind('click', function(){
			if($(this).hasClass('off')){return false;}
			$('.pm_video').bind('mousewheel');
			if(vlChk == 0) {
				$('.pm_video').fadeIn(1500, 'easeInExpo').addClass('on');
				$(videoSource).delay(1000).appendTo('.f_mov');
				vlChk = 1;
				return false;
			};
		});
		$('.btn_mov_close').bind('click', function(){
			$('.pm_video').fadeOut(500, 'easeOutExpo', function(){
				$('.f_mov iframe').detach();
				$(this).removeClass('on').hide();
			});
			vlChk = 0;
			return false;
		});
	};
	
};
function scrollMove() {
	$('.b_pos').bind('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html:not(:animated), body:not(:animated)').stop(true, false).animate({ scrollTop: desOffset.top-150 }, 2000, 'easeInOutQuint');
		return false;
	});
};
function layerBtn() {
	$('.btn_layer').bind('click', function(){
		if($(this).hasClass('off')) {return false}
		var target = $(this).attr('href')
		layerOpen(target);
		if ($(target).hasClass('on')) {return false}
		$('.layer_pop').slideUp(800,'easeInQuart').removeClass('on');
		$(target).slideDown(800,'easeOutQuart').addClass('on');
		if(!$(target).hasClass('doc-close-off')) {
			$(document).bind('click', function(){
				$('.layer_pop').slideUp(800,'easeInQuart').removeClass('on');
				$(this).unbind('click');	
			});
		};
		return false;
	});
	$('a.layer_close').bind('click', function(){
		$('.layer_pop').slideUp(800,'easeInQuart').removeClass('on');
		return false;
	});
};

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
	videoLayer();
};

// 아바 트레인 인트로
var secIdx = 0;
$(function(){
	var trainIntro = function(){
		if($('.ava_train_intro').length < 1){return false;}
		var secArry = $('.wrap').find('.section'),
		winW, winH,
		methods = {
			init: function() {
				if(!$('.secen_01').hasClass('on')){$('.secen_01').addClass('on');}
				wheelControl();
				buttonEvent();
				navMotion();
				methods.elMotion(1, secIdx);
				if(window.location.hash){
					var tEl = window.location.hash
					var tIdx = $(tEl).index();
					setTimeout(function(){
						switch (tIdx) {
							case 0 : 
								$('.nav a').eq(0).click();
								if($('.sec2_bg').hasClass('on')){
									$('.btn_next_secen > .b').slideDown(250, 'easeOutCubic');} 
								else {
									$('.btn_next_secen > .b').slideUp(250, 'easeOutCubic'); 
								}
								break;
							case 1 : $('.nav a').eq(1).click(); $('.btn_next_secen > .b').slideUp(250, 'easeOutCubic'); break;
							case 4 :  $('.nav a').eq(2).click(); break;
							case 7 :  $('.nav a').eq(3).click(); break;
							case 10 :  $('.nav a').eq(4).click(); break;
							case 13 :  $('.nav a').eq(5).click(); break;
							case 16 :  $('.nav a').eq(6).click(); break;
						}
					}, 1000);
				}
				
			},
			contentMotion : function(w, idx, nav) {
				$(secArry).find('.bg_fix img').stop();
				var styles = {
					marginTop : '',
					zIndex: '7'
				};
				if(nav != true){$(secArry).css('z-index', '0');}
				if(w == -1){
					// up
					styles.marginTop = '-100%'
					$(secArry[idx-2]).hide().css('z-index', '1');
					$(secArry[idx-1]).show().css('z-index', '3');
					$(secArry[idx+1]).show().css('z-index', '4');
					$(secArry[idx+2]).hide().css('z-index', '2');
				} else {
					// down
					styles.marginTop = '100%'
					$(secArry[idx-2]).hide().css('z-index', '3');
					$(secArry[idx-1]).show().css('z-index', '4');
					$(secArry[idx+1]).show().css('z-index', '2');
					$(secArry[idx+2]).hide().css('z-index', '1');
				}
				
				$(window).unbind('mousewheel');
				$(secArry[idx]).css(styles).show().delay(25).animate({marginTop: '0%'}, {duration :  800, easing : 'easeOutCubic', complete : function(){
					wheelControl();
					buttonEvent();
					methods.sectionMotion(secIdx);
					methods.elMotion(w, secIdx);

					$(secArry[idx-1]).find('.bg_fix img').attr('style', '');
					$(secArry[idx+1]).find('.bg_fix img').attr('style', '');
				}});
			},
			sectionMotion : function(idx) {
				
				if (idx == 24) {
					$('.btn_next_secen').animate({ bottom: '-10%'}, {queue : false , duration : 250, easing : 'easeOutCubic'});
					$('.footer').animate({ bottom: 0}, {queue : false , duration : 250, easing : 'easeOutCubic'});
				} else {
					$('.btn_next_secen').animate({ bottom: '3%'}, {queue : false , duration : 250, easing : 'easeOutCubic'});
					$('.footer').animate({ bottom: -90}, {queue : false , duration : 250, easing : 'easeOutCubic'});
				}

				switch (idx) {
					case 0 : 
						$('.nav a').eq(0).click();
						
						if($('.sec2_bg').hasClass('on')){
							$('.btn_next_secen > .b').slideDown(250, 'easeOutCubic');} 
						else {
							$('.btn_next_secen > .b').slideUp(250, 'easeOutCubic'); 
						}
						break;
					case 1 : $('.nav a').eq(1).click(); $('.btn_next_secen > .b').slideUp(250, 'easeOutCubic'); break;
					case 4 :  $('.nav a').eq(2).click(); break;
					case 7 :  $('.nav a').eq(3).click(); break;
					case 10 :  $('.nav a').eq(4).click(); break;
					case 13 :  $('.nav a').eq(5).click(); break;
					case 16 :  $('.nav a').eq(6).click(); break;
					default: 
				}

			},
			elMotion : function(w, idx) {
				if($(secArry[idx]).hasClass('done')){return false;}
				$(secArry[idx]).addClass('done');
				var elMo = $(secArry[idx]).find('.el-mo');
				var bgFix = $(secArry[idx]).find('.bg_fix img');
				//if (w == -1) {return false};
				elMo.hide().attr('style', '');
				var styles = {
					display : 'block',
					opacity : '0',
					marginLeft : '50px'
				};
				elMo.each(function(i){
				 	$(this).stop(true, false).css(styles).delay(i*110).animate({ opacity: 1, marginLeft: 0}, {duration : 500, easing : 'easeOutCubic'});
				});
				bgFix.animate({ width: 2112, height: 1073}, {duration : 8000, easing : 'easeOutCubic'});
			},
			navOnMotion : function(el, event) {
				var t, v;
				$('.nav a').find('.cir').animate({ left: -22}, {queue : false , duration : 250, easing : 'easeOutCubic'})
				//$('.nav a').find('.txt').animate({ top: -22}, {queue : false , duration : 250, easing : 'easeOutCubic'})
				if (el.hasClass('on')) {t = -44
					//el.find('.txt').animate({ top: 0}, {queue : false , duration : 250, easing : 'easeOutCubic'})
				} else {t = 0};
				el.find('.cir').animate({ left: t}, {queue : false , duration : 250, easing : 'easeOutCubic'})
			}
		};

		var buttonEvent = function() {
			$('.btn_next_secen').unbind('click').one('click', function(){
				if(secIdx == 0 && $(secArry[secIdx]).hasClass('on')) {
					$(secArry[secIdx]).removeClass('on');
					$(secArry[secIdx]).find('.sec2_bg').delay(25).animate({bottom: 0}, {duration :  800, easing : 'easeOutCubic', complete : function(){
						wheelControl();
						buttonEvent();
					}});
					return false; 
				} 
				secIdx += 1;
				idx = secIdx
				methods.contentMotion('1', idx);
			});
			$('.nav a').unbind('click').one('click', function(event){
				var tEl = $(this).attr('href')
				var tIdx = $(tEl).index();
				var w;
				$('.nav a').removeClass('on')
				$(this).addClass('on')
				methods.navOnMotion($(this), event);
				if(tIdx == secIdx) {return false;}
				w = (tIdx > secIdx) ? 1 : -1;
				$(secArry).hide();
				$(secArry[secIdx]).show().css('z-index', '6');
				secIdx = tIdx;
				methods.contentMotion(w, tIdx, true);

			});
			$('.nav a').unbind('mouseenter mouseleave').bind({
				mouseenter : function(event) {
					var t, v;
					if ($(this).hasClass('on')) {t = -44} else { t = 0, v = 0
						//$(this).find('.txt').css('top', 22).animate({ top: v}, {queue : false , duration : 250, easing : 'easeOutCubic'})
					};
					$(this).find('.cir').animate({ left: t}, {queue : false , duration : 250, easing : 'easeOutCubic'})
				},
				mouseleave : function() {
					var t, v;
					if ($(this).hasClass('on')) {t = -44; v = 0} else { t = -22; v = -22};
					$(this).find('.cir').animate({ left: t}, {queue : false , duration : 250, easing : 'easeOutCubic'})
					//$(this).find('.txt').animate({ top: v}, {queue : false , duration : 250, easing : 'easeOutCubic'})
				}
			})
		}

		var navMotion = function() {
			
		}

		var wheelControl = function(go, dir) {
			$('.wrap').unbind('mousewheel').one("mousewheel", function(event, delta) {
				if(delta === "undefined") {return false;}				
				var w, idx;
				if(secIdx == 0 && delta < 0 && $(secArry[secIdx]).hasClass('on')) {
					$('.btn_next_secen > .b').slideDown(250, 'easeOutCubic');
					$(secArry[secIdx]).removeClass('on');
					$(secArry[secIdx]).find('.sec2_bg').addClass('on').delay(25).animate({bottom: 0}, {duration :  800, easing : 'easeOutCubic', complete : function(){
						wheelControl();
						buttonEvent();
					}});
					return false; 
				} else if(secIdx == 0 && delta > 0) {

					
					$('.btn_next_secen > .b').slideUp(250, 'easeOutCubic');
					$(secArry[secIdx]).addClass('on');
					$(secArry[secIdx]).find('.sec2_bg').removeClass('on').delay(25).animate({bottom: -530}, {duration :  800, easing : 'easeOutCubic', complete : function(){
						wheelControl();
						buttonEvent();
					}});
					return false; 
				} else if(delta < 0){
					if(secIdx == 24){wheelControl(); return false;}
					w = 1;
					secIdx += 1;
					idx = secIdx
				} else if(delta > 0){
					if(secIdx == 0){wheelControl(); return false;}
					if(secIdx == 1){

					}
					w = -1;
					secIdx -= 1;
					idx = secIdx
				}
			 	//if (typeof go === "number") {secIdx = go; idx = go;}
				methods.contentMotion(w, idx);

			});
		}
		$(window).load(function() { 
			methods.init();
		})
		return wheelControl();
		
	}
	trainIntro();
});






$(function(){
	
	// Scroll Event
	var gnbEl = $('.wrap_pm_gnb');
	var gnbOffSet = gnbEl.offset();

	

	$(window).bind('scroll',function(){
		var wsTop = $(this).scrollTop();
		if($('.scroll_value').length != 0){$('.scroll_value').text(wsTop);}
		if (gnbOffSet.top < wsTop) {
			gnbEl.addClass('fixed')
			//gnbEl.css({position : 'absolute', top : wsTop-wrapOffSet.top})
		} else {
			gnbEl.removeClass('fixed')
			//gnbEl.css({position : 'absolute', top : '110px'})
		}
		//if(500 < wsTop) if (bulAniChk == 0) {bulletAni();};
	});
	reloadUi();	
	
	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			reloadUi();
		});
	}
});

$(window).load(function() { 
	$('#status').fadeOut(); 
	$('#preloader').delay(350).fadeOut('slow'); 
})