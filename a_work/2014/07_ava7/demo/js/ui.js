
/* ∏∂øÏΩ∫»Ÿ ¿Ã∫•∆Æ «ÓµÈ∑Ø */
(function(c){var a=["DOMMouseScroll","mousewheel"];c.event.special.mousewheel={setup:function(){if(this.addEventListener){for(var d=a.length;d;){this.addEventListener(a[--d],b,false)}}else{this.onmousewheel=b}},teardown:function(){if(this.removeEventListener){for(var d=a.length;d;){this.removeEventListener(a[--d],b,false)}}else{this.onmousewheel=null}}};c.fn.extend({mousewheel:function(d){return d?this.bind("mousewheel",d):this.trigger("mousewheel")},unmousewheel:function(d){return this.unbind("mousewheel",d)}});function b(f){var d=[].slice.call(arguments,1),g=0,e=true;f=c.event.fix(f||window.event);f.type="mousewheel";if(f.wheelDelta){g=f.wheelDelta/120}if(f.detail){g=-f.detail/3}d.unshift(f,g);return c.event.handle.apply(this,d)}})(jQuery);

/* easing */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});

function layerOpen(target) {
	var left = ( $(window).scrollLeft() + ($(window).width() - $(target).width()) / 2 );
	var top = ( $(window).scrollTop() + ($(window).height() - $(target).height()) / 2 );
	if($(window).scrollTop()>top){top = $(window).scrollTop()};
	$(target).css({'left':left,'top':top+150});
};

var bulAniChk = 0
var vlChk = 0 
function videoLayer() {
	var videoSource = '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/E7YMDjfK3a4?feature=player_detailpage&wmode=opaque&autoplay=1" frameborder="0" allowfullscreen>'
	if($('.pm_gate .btn_mov').length != 0) {
		$('.pm_gate .btn_mov').bind('click', function(){
			if($(this).hasClass('off')){return false;}
			if(vlChk == 0) {
				$('.pm_video').fadeIn(1500, 'easeInExpo');
				$(videoSource).appendTo('.f_mov');
				vlChk = 1;
				return false;
			}
			
		});
		$('.btn_mov_close').bind('click', function(){
			$('.pm_video').fadeOut(500, 'easeOutExpo', function(){
				$('.f_mov iframe').detach();
				$('.pm_video').hide();
			});
			vlChk = 0;
			return false;
		});
	};
	
}




function scrollMove() {
	$('.b_pos').bind('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html:not(:animated), body:not(:animated)').stop(true, false).animate({ scrollTop: desOffset.top-150 }, 2000, 'easeInOutQuint');
		return false;
	});
}
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
		}
		return false;
	});
	$('a.layer_close').bind('click', function(){
		$('.layer_pop').slideUp(800,'easeInQuart').removeClass('on');
		return false;
	});
}
var inElFadeOut = function(t){
	t.fadeOut(100, 'easeOutQuart', function(){$(this).css('height','')});
};

var inElFadeIn = function(t){
	var styles = {
		display : 'block',
		opacity : '0',
		left : '50px'
	}
	t.each(function(i){
	 	$(this).stop(true, false).css(styles).delay(i*110).animate({ opacity: 1, left: 0}, {duration : 250, easing : 'easeOutCubic', complete : function(){}});
	})
};

function bulletAni() {
	bulAniChk = 1
	var styles = {
		display : 'block',
		opacity : '0',
		top : '-60px'
	}, 
	el = $('.attend').find('.off, .on'),
	elCount = el.length;
	el.each(function(i){
	 	$(this).find('.bul').stop(true, false).css(styles).delay(i*70).animate({ opacity: 1}, {duration : 250, easing : 'easeOutCubic', complete : function(){
	 		$(this).next().delay(elCount*70).fadeIn(600, 'easeOutQuart');
	 		$(this).animate({top: 0, left : 0, right: 0}, {duration : 400, easing : 'easeInExpo'});
	 	}});
	})

}


$(function(){

	// Scroll Event
	var gnbEl = $('.wrap_pm_gnb');
	var gnbOffSet = gnbEl.offset();
	if(document.domain == "playnetwork.co.kr"){
		$('.event_02').bind('mouseenter', function(){
			if (bulAniChk == 0) {bulletAni();};
		})
	} else {
		$(window).bind('scroll',function(){
			var wsTop = $(this).scrollTop();
			$('.scroll_value').text(wsTop);
			if (gnbOffSet.top < wsTop) {
				gnbEl.addClass('fixed')
				//gnbEl.css({position : 'absolute', top : wsTop-wrapOffSet.top})
			} else {
				gnbEl.removeClass('fixed')
				//gnbEl.css({position : 'absolute', top : '110px'})
			}
			if(500 < wsTop) if (bulAniChk == 0) {bulletAni();};
		});
	}
	$('.before .btn_box').bind({
		mouseenter : function() {
			if($(this).parent().hasClass('before')){

				$(this).find('.btn_gun.select').stop(true, false).css({display : 'block', opacity : '0'}).animate({ opacity: 1}, {duration : 250, easing : 'easeOutCubic', complete : function(){}});
			}
		},
		mouseleave : function() {
			if($(this).parent().hasClass('before')){
				$(this).find('.btn_gun.select').stop(true, false).css({display : 'block', opacity : '1'}).animate({ opacity: 0}, {duration : 250, easing : 'easeOutCubic', complete : function(){
					$(this).css({display : 'none'});
				}});
			}
		}
	});
	$('.gun_list li a').bind('click', function(){
		$('.pop_gun_sel .layer_close').click();
	})
	
	
	layerBtn();
	scrollMove();
	videoLayer();
	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			bulAniChk = 0
			layerBtn();
			scrollMove();
			videoLayer();
		});
	}
});
