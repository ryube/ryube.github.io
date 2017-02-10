/* easing */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});


function htmlPosition(elem) {
	var left = ( $(window).scrollLeft() + ($(window).width() - $(elem).width()) / 2 );
	var top = ( $(window).scrollTop() + ($(window).height() - $(elem).height()) / 2 );
	if($(window).scrollTop()>top){top = $(window).scrollTop()};
	$(elem).css({'left':left,'top':top});
}


function flashAni(t, d) {
	$(t).each( function(e) {
		$(this).delay(e*200)
	})
		.animate({opacity: .8}, {duration : d, easing : 'easeOutCubic'})//.fadeIn(300, 'easeOutCubic');
		.animate({opacity: .6}, {duration : d, easing : 'easeOutCubic', complete : function(){
			flashAni($(this));
		}});//.fadeIn(300, 'easeOutCubic');
}


function thorModal(stats){
	var l1 = $('.modal_body .l1'),
		l2 = $('.modal_body .l2'),
		l3 = $('.modal_body .l3'),
		tl = $('.modal_body .tl'),
		s1 = $('.modal_body .s1'),
		s2 = $('.modal_body .s2'),
		d = $('.d2'),
		startDuration = 1000;

		s1.animate({opacity: 1}, {duration : startDuration, easing : 'easeOutCubic'});
		l1.delay(startDuration+500).animate({opacity: 1}, {duration : 70, easing : 'easeOutCubic'});
		d.delay(startDuration+500)
			.animate({opacity: .5, Zindex: 1200}, {duration : 70, easing : 'easeOutCubic'})
			.animate({opacity: 0, zIndex: 1106}, {duration : 1000, easing : 'linear'});
		l2.delay(startDuration+600).animate({opacity: 1}, {duration : 50, easing : 'easeOutCubic'});
		$(tl).delay(startDuration+500).animate({opacity: 1}, {duration : 50, easing : 'easeOutCubic'});
		setTimeout(function(){
			flashAni(s2, 200)	
		}, 2500);
		if(stats == "off"){
			s1.stop();	
			s2.stop();	
		}
};

//메인 모달레이어
var modalPlayStats = false;
function modalVideo(stats,yt_code) {
	if(yt_code){
		var vCode  = yt_code,
			ytHtml = '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/'+vCode+'?feature=player_detailpage&wmode=opaque&autoplay=1&vq=hd720" frameborder="0" allowfullscreen>';
	}
	var videoHtmlHolder = $('.yt_holder'),
		modalBody = $('.modal_body'),
		toggleElem = $('.modal_pop');
		
	if(stats === "open" && modalPlayStats === false){
		modalPlayStats = true;
		htmlPosition(modalBody);
		$( window ).on('resize', function(){htmlPosition(modalBody);});
		toggleElem.fadeIn(500, 'easeInExpo', function(){
			setTimeout(function(){
				thorModal();
			}, 500);
		});
		$(ytHtml).appendTo(videoHtmlHolder);
		
	} else if(stats === "close") {
		$( window ).off('resize');
		toggleElem.fadeOut(500, 'easeOutExpo', function(){
			modalBody.find('iframe').detach();
			modalPlayStats = false;
		});
		thorModal('off');
	}
}

