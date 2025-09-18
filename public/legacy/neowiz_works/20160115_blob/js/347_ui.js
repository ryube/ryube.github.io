/* easing */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});
/* 디자인 셀렉트 박스 */ 
if(typeof jQuery!=="undefined"){(function(a){a(window).bind("resize.nui-selectbox-hide",function(){a(".nui-selectbox-on").click()});a.getUUID=function(){return(((1+Math.random())*65536)|0).toString(16).substring(1)};a.fn.selectbox=function(d){var b={default_prefix:"SelectBasic",select_suffix:"_selectArea",option_suffix:"_optionsDiv",reverse_suffix:"_reverse",reset_class:"SelectResetStyle",disabled_class:"SelectDisable",container:"",reverse:false,uuid_prefix:"nui-selectbox-",animation:"show",duration:0},c={mergeClassName:function(g,e){var f=g.split(" "),h="";a.each(f,function(j,k){h+=(k||b.default_prefix)+e+" "});return a.trim(h)},getSelectCSS:function(g){var e=a(g),k={},f=["position","left","right","top","bottom","width","visibility","float","margin-left","margin-right","margin-top","margin-bottom","vertical-align","z-index"],j,h;for(j=0,h=f.length;j<h;j++){k[f[j]]=e.css(f[j])}k.display="inline-block";return k}};return this.each(function(){var m=a(this),i,k,h,g,j,l,f,n,e;if(this.tagName.toUpperCase()!=="SELECT"||m.data("nui-selectbox-complete")){return}i=b.uuid_prefix+a.getUUID();k=c.mergeClassName(this.className,b.select_suffix);h=c.mergeClassName(this.className,b.option_suffix);g=c.mergeClassName(this.className,b.select_suffix+b.reverse_suffix);j=c.mergeClassName(this.className,b.option_suffix+b.reverse_suffix);l=m.find("option:selected").text();n=a('<a href="#"></a>').html(l);f=c.getSelectCSS(this);e=a("<span></span>").attr("id",i).addClass(b.reset_class).css(f).addClass(k).append(n).insertBefore(this);if(m.attr("disabled")){e.addClass(b.disabled_class)}e.bind("click.nui-selectbox-click",function(r){var q,u,p,o,v,w,s,t=e.is("."+b.disabled_class);if(e.is(".nui-selectbox-on")&&!t){q=a(".nui-selectbox-select").remove();q=null;e.removeClass("nui-selectbox-on")}else{if(!t){a(window).trigger("resize.nui-selectbox-hide");q=a("<div></div>").css({width:f.width,position:"absolute"}).addClass("nui-selectbox-select").addClass(h).append("<p></p>").appendTo(document.body);m.find("option").each(function(x){var y=this.className;a('<a href="#"></a>').data("nui-selectbox-optionid",x.toString()).addClass(y).html(a(this).text()).appendTo(q.find("p"))});u=e.offset();p=q.height();o=q.outerHeight(true);v=u.top+o;w=parseInt(q.css("max-height"),10);if(w>0&&p>w){q.css({"max-height":"none !important",height:w+"px !important","overflow-y":"auto !important"});p=q.height();o=q.outerHeight(true);v=u.top+o}if(b.container!==""){s=typeof b.container==="number"?b.container:a(b.container).height();if(v>s){u.top-=o;q.addClass(j);b.reverse=true}}q.find("a").one("click.nui-selectbox-option",function(x){var y=a(this);n.html(y.html());m.attr("selectedIndex",y.data("nui-selectbox-optionid")).find("option").attr("selected",null).eq(y.data("nui-selectbox-optionid")).attr("selected","selected");e.click();m.trigger("change");x.preventDefault()}).end()[b.animation](b.duration).css({left:u.left,top:u.top});e.addClass("nui-selectbox-on");if(b.reverse){e.addClass("nui-selectbox-onreverse")}}}r.preventDefault()});m.bind({hide:function(o){a("#"+a(this).data("nui-selectbox-id")).hide();a(window).trigger("resize.nui-selectbox-hide")},show:function(o){a("#"+a(this).data("nui-selectbox-id")).show()},toggle:function(o){a("#"+a(this).data("nui-selectbox-id")).toggle();a(window).trigger("resize.nui-selectbox-hide")},enable:function(o){a(this).attr("disabled",null);a("#"+a(this).data("nui-selectbox-id")).removeClass(b.disabled_class)},disable:function(o){a(window).trigger("resize.nui-selectbox-hide");a(this).attr("disabled","disabled");a("#"+a(this).data("nui-selectbox-id")).addClass(b.disabled_class)}}).data({"nui-selectbox-complete":true,"nui-selectbox-id":i}).css({visibility:"hidden",position:"absolute",left:-5000,top:-5000})})}})(jQuery)};
/* jQuery Mouse wheel*/
(function(a){function b(b){var g=b||window.event,h=i.call(arguments,1),j=0,l=0,m=0,n=0,o=0,p=0;if(b=a.event.fix(g),b.type="mousewheel","detail"in g&&(m=-1*g.detail),"wheelDelta"in g&&(m=g.wheelDelta),"wheelDeltaY"in g&&(m=g.wheelDeltaY),"wheelDeltaX"in g&&(l=-1*g.wheelDeltaX),"axis"in g&&g.axis===g.HORIZONTAL_AXIS&&(l=-1*m,m=0),j=0===m?l:m,"deltaY"in g&&(m=-1*g.deltaY,j=m),"deltaX"in g&&(l=g.deltaX,0===m&&(j=-1*l)),0!==m||0!==l){if(1===g.deltaMode){var q=a.data(this,"mousewheel-line-height");j*=q,m*=q,l*=q}else if(2===g.deltaMode){var r=a.data(this,"mousewheel-page-height");j*=r,m*=r,l*=r}if(n=Math.max(Math.abs(m),Math.abs(l)),(!f||f>n)&&(f=n,d(g,n)&&(f/=40)),d(g,n)&&(j/=40,l/=40,m/=40),j=Math[j>=1?"floor":"ceil"](j/f),l=Math[l>=1?"floor":"ceil"](l/f),m=Math[m>=1?"floor":"ceil"](m/f),k.settings.normalizeOffset&&this.getBoundingClientRect){var s=this.getBoundingClientRect();o=b.clientX-s.left,p=b.clientY-s.top}return b.deltaX=l,b.deltaY=m,b.deltaFactor=f,b.offsetX=o,b.offsetY=p,b.deltaMode=0,h.unshift(b,j,l,m),e&&clearTimeout(e),e=setTimeout(c,200),(a.event.dispatch||a.event.handle).apply(this,h)}}function c(){f=null}function d(a,b){return k.settings.adjustOldDeltas&&"mousewheel"===a.type&&b%120===0}var e,f,g=["wheel","mousewheel","DOMMouseScroll","MozMousePixelScroll"],h="onwheel"in document||document.documentMode>=9?["wheel"]:["mousewheel","DomMouseScroll","MozMousePixelScroll"],i=Array.prototype.slice;if(a.event.fixHooks)for(var j=g.length;j;)a.event.fixHooks[g[--j]]=a.event.mouseHooks;var k=a.event.special.mousewheel={version:"3.1.12",setup:function(){if(this.addEventListener)for(var c=h.length;c;)this.addEventListener(h[--c],b,!1);else this.onmousewheel=b;a.data(this,"mousewheel-line-height",k.getLineHeight(this)),a.data(this,"mousewheel-page-height",k.getPageHeight(this))},teardown:function(){if(this.removeEventListener)for(var c=h.length;c;)this.removeEventListener(h[--c],b,!1);else this.onmousewheel=null;a.removeData(this,"mousewheel-line-height"),a.removeData(this,"mousewheel-page-height")},getLineHeight:function(b){var c=a(b),d=c["offsetParent"in a.fn?"offsetParent":"parent"]();return d.length||(d=a("body")),parseInt(d.css("fontSize"),10)||parseInt(c.css("fontSize"),10)||16},getPageHeight:function(b){return a(b).height()},settings:{adjustOldDeltas:!0,normalizeOffset:!0}};a.fn.extend({mousewheel:function(a){return a?this.bind("mousewheel",a):this.trigger("mousewheel")},unmousewheel:function(a){return this.unbind("mousewheel",a)}})});

function randomRange(min, max) {
  return Math.floor( (Math.random() * (max - min + 1)) + min );
}

function scrollTo(elem) {
	desOffset  = $(elem).offset();
	$('html:not(:animated), body:not(:animated)').stop(true, false).animate({ scrollTop: desOffset.top-200 }, 2000, 'easeInOutQuint');
	return false;
}

function evenChk(t) {
	var evenRow = $(t+':even');
	evenRow.addClass('even')
};

// input placeholder
function placeHoldBg(){
	// input value 
	$('.ph').each(function(){
		if($(this).val()==''){ $(this).addClass('ph-on');}
	})
	
	$('.ph').off('focusin').on('focusin',function(){
		if($(this).val()==''){
			$(this).removeClass('ph-on');
		};
	}).off('focusout').on('focusout',function(){
		if($(this).val()==''){
			$(this).addClass('ph-on');
		};
	});
}

function layerBtn() {
	function layerOpen(target) {
		var left = ( $(window).scrollLeft() + ($(window).width() - $(target).width()) / 2 );
		var top = ( $(window).scrollTop() + ($(window).height() - $(target).height()) / 2 );
		if($(window).scrollTop()>top){top = $(window).scrollTop()};
		$(target).css({'left':left,'top':top});
	};
	function closeAni(){
		$('.layerpop.on').stop(true, false).animate({ opacity: 0, marginTop: 25}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on')});
		$('.pop_dim').stop(true, false).animate({ opacity: 0}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on')});
	}
	function openAni(t){
		$(t).addClass('on').stop(true, false).animate({ opacity: 1, marginTop: 0}, 250, 'easeOutQuad',function(){});
		$('.pop_dim').addClass('on').stop(true, false).animate({ opacity: .7}, 250, 'easeOutQuad',function(){});
	}
	$('.btn_layer').off('click').on('click', function(){
		if($(this).hasClass('off')) {return false}
		var target = $(this).attr('href')
		layerOpen(target);
		if ($(target).hasClass('on')) {return false}
		closeAni();
		openAni(target)
		return false;
	});

	$('a.layer_close').off('click').on('click', function(){
		closeAni();
		return false;
	});
};

function tabContents(l, t, active) {
	var linkWrap = $(l);
	var targetWrap = $(t);
	var linkTarget;
	var linkElem = linkWrap.find('ul a');
	var targetContnets = targetWrap.find('>div');
	linkElem.on('click', function(){
		_this = $(this);
		tabChange(_this);	
		return false;
	}); 
	function tabChange(t) {
		if(t.hasClass('close')){return false;};
		linkElem.parent().removeClass('on').addClass('off');
		linkTarget = t.attr('href');
		t.parent().removeClass('off').addClass('on');
		targetContnets.addClass('off').removeClass('on');
		$(linkTarget).addClass('on').removeClass('off');
	};
	tabChange($(linkElem[active]));
};

function htmlPosition(elem) {
	var left = ( $(window).scrollLeft() + ($(window).width() - $(elem).width()) / 2 );
	var top = ( $(window).scrollTop() + ($(window).height() - $(elem).height()) / 2 );
	if($(window).scrollTop()>top){top = $(window).scrollTop()};
	$(elem).css({'left':left,'top':top});
};

//메인 모달레이어
var modalPlayStats = false;
function modalVideo(stats,yt_code) {
	var vCode  = yt_code,
	ytHtml = '<iframe width="100%" height="100%" src="http://www.youtube.com/embed/'+vCode+'?feature=player_detailpage&wmode=opaque&autoplay=1" frameborder="0" allowfullscreen>',
	videoHtmlHolder = $('.yt_holder'),
	modalBody = $('.modal_body'),
	toggleElem = $('.modal_pop');
	if(stats === "open" && modalPlayStats === false){
		modalPlayStats = true;
		htmlPosition(modalBody);
		$( window ).off('resize').on('resize', function(){htmlPosition(modalBody);});
		toggleElem.fadeIn(500, 'easeInExpo');
		$(ytHtml).appendTo(videoHtmlHolder);
	} else if(stats === "close") {
		$( window ).off('resize');
		toggleElem.fadeOut(500, 'easeOutExpo', function(){
			modalBody.find('iframe').detach();
			modalPlayStats = false;
		});
	};
};

function backgroundChange() {
	var i = randomRange(1, 2),
		$wrap = $('.wrap');
	//layout.css .wrap.bg-n
	$wrap.addClass('bg-'+i);
}

var ytPlayers = [],
	ytScript = false;

// YouTube Api 
function ytScriptFire() {
	var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/iframe_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	ytScript = true;
};

// Slider 
function mainBannerSlider(){
	var exSld = $('.extend_slider'),
		mSldB = $('.main_slider_banner'),
		mSldC = $('.main_slider_controler'),
		body = $('body'),
		wrap = $('.wrap'),
		fBg = $('.full_bg'),
		bgUrl = "";

	function fullBg(idx) {
		bgUrl = exSld.find('li').eq(idx).attr('bgurl');
		navSkin = exSld.find('li').eq(idx).attr('navSkin');
		fBg.css({backgroundImage : "", opacity : "0"});
		if (navSkin === "black") { body.addClass('black');} else {body.removeClass('black');};
		fBg.css('background-image', 'url('+bgUrl+')').delay(500).animate({opacity: 1}, {duration : 800, easing : 'easeOutCubic', complete : function(){
			wrap.css('background-image', 'url('+bgUrl+')');
		}});
	}

	if(exSld.length != 0) {
		exSld.flexslider({
			animation: "fade",
			easing: "easeOutQuart",
			directionNav : true,
			controlNav: false,
			slideshow: false,
			animationSpeed: 1000,
			slideshowSpeed: 5000,
			start: function(slider){
				fullBg(slider.currentSlide)
				aSide = $('.aside');
				aSideOffSet = aSide.offset();
			},
			before: function(slider) {
			},
			after: function(slider){
				fullBg(slider.currentSlide)
			}
		});
	};

	if(mSldB.length != 0) {
		mSldC.flexslider({
			animation: "slide",
			directionNav : true,
			controlNav: false,
			animationLoop: true,
			slideshow: false,
			itemWidth: 233,
			itemMargin: 0,
			asNavFor: mSldB
		});

		mSldB.flexslider({
			animation: "fade",
			directionNav : false,
			controlNav: false,
			animationLoop: true,
			slideshow: true,
			slideshowSpeed: 5000,
			sync: mSldC
		});
	};
};

function subBannerSlider(){
	var subSld = $('.sub_banner');
	if(subSld.length != 0) {
		subSld.flexslider({
			animation: "fade",
			directionNav : false,
			controlNav: true,
			animationLoop: false,
			slideshow: true,
			slideshowSpeed: 5000
		});
	};
};

function shopBannerSlider(){
	var shopSld = $('.bls_bigbanner');
	if(shopSld.length != 0) {
		shopSld.flexslider({
			animation: "slide",
			easing: "easeInOutQuint",
			animationLoop: true,
			directionNav : true,
			controlNav: false,
			itemWidth: 820,
    		itemMargin: 0,
    		move: 1,
			slideshow: true,
			animationSpeed: 1000,
			slideshowSpeed: 5000
		});
	};
};

function shopSubSlider(){
	var shopSld = $('.bls_subbanner');
	if(shopSld.length != 0) {
		shopSld.flexslider({
			animation: "slide",
			animationLoop: true,
			directionNav : true,
			controlNav: false,
			itemWidth: 820,
    		itemMargin: 0,
    		move: 1,
			slideshow: true,
			animationSpeed: 1000,
			slideshowSpeed: 5000
		});
	};
};

function wicSlider(){
	var shopSld = $('.wic_bigbanner');
	if(shopSld.length != 0) {
		shopSld.flexslider({
			animation: "fade",
			animationLoop: true,
			directionNav : false,
			controlNav: true,
    		move: 1,
			slideshow: true,
			animationSpeed: 1000,
			slideshowSpeed: 5000
		});
	};
};

function cartSlider(){
	var shopSld = $('.cart_slider');
	if(shopSld.length != 0) {
		shopSld.flexslider({
			animation: "slide",
			easing: "easeInOutQuint",
			animationLoop: true,
			directionNav : true,
			controlNav: false,
			itemWidth: 346,
    		itemMargin: 0,
			slideshow: false,
			animationSpeed: 1000,
			slideshowSpeed: 5000
		});
	};
};

// Slider 


function mainUi() {
	var ytBtn = $('.btn_ytv_layer');
	ytBtn.off().on({
		click: function () {
			var c = $(this).attr('yt-code')
			modalVideo('open',c);
			return false;
		},
		// mouseenter: function() {
		// 	idx = $(this).attr('yt-idx')
		// 	ytPlayers[idx].playVideo();	
		// },
		// mouseleave: function() {
		// 	idx = $(this).attr('yt-idx')
		// 	ytPlayers[idx].pauseVideo();
		// }
	});
	if(ytScript === false){ytScriptFire();};
};

function gnb() {
	var h = $('.header'),
	na = $('.nav>li'),
	nbg = $('.nav_bg'),
	curr = $('.under_line > .curr'),
	np = $('.nav>li.on').index(),
	popMs = $('.view_mobile');

	curr.attr('class', 'curr o'+np);

	// Gnb hover
	h.off().on({
		mouseenter: function() {
			h.parent().addClass('on');
		},
		mouseleave: function() {
			h.parent().removeClass('on')
			curr.attr('class', 'curr o'+np);
			popMs.removeClass('on');
		}
	});

	// Nav position ani
	na.off().on({
		mouseenter: function() {
			var n = $(this).index();
			curr.attr('class', 'curr o'+n);
		}
	});
};

function subUi() {
	var bc = $('.btn_cinc'),
		blGuide = $('.section_blguide'),
		btnSt = $('.btn_st')
		mIndex = $('.m_index'),
		mpBtn = $('.bl_mypage a.item'),
		mpPopClose = $('.bl_mypage a.btn_close');
	
	if(bc.length != 0) {
		bc.off().on({
			click: function() {
				var t = $(this).parent().siblings('.comments_in');
				if(t.length != 0){
					$(this).parent().toggleClass('on');
					t.toggleClass('on');
				}
				return false;
			}
		});
	};

	if(btnSt.length != 0) {
		btnSt.off().on({
			click: function() {
				$(this).parent().toggleClass('on');
				return false;
			}
		});
	};

	if(blGuide.length != 0) {
		blGuide.find('.popu_list .p').off('click').on('click', function(){
			$(this).parent().toggleClass('on')
		});
	};

	if (mIndex.length != 0) {
		var n = $('.m_nav > li.on'),
			ni = n.index(),
			m_arw = $('.m_index .arw'),
			m_wrap = $('.m_nav'),
			m_nav = m_wrap.find('li');

		m_arw.attr('class', 'arw o'+ni);
		m_nav.off().on({
			mouseenter: function() {
				console.log('asdf')
				ni = $(this).index();
				m_arw.attr('class', 'arw o'+ni);
			}
		});
		m_wrap.off().on({
			mouseleave: function() {
				ni = $('.m_nav > li.on').index()
				m_arw.attr('class', 'arw o'+ni);
			}
		});
		$('.next a').off('click').on('click', function(){
			var idx = $(this).parent().parent().index()
			m_nav.eq(idx+1).find('a').click().parent().addClass('on');
			m_arw.attr('class', 'arw o'+(idx+1));
			scrollTo('.tab_contents');
			
			return false;
		});
	};

	if(mpBtn.length != 0) {
		mpBtn.off().on({
			click: function() {
				if($(this).hasClass('off')){return false;}
				mpBtn.removeClass('on').next().removeClass('on');
				$(this).addClass('on').next().addClass('on');
				return false;
			}
		});
		mpPopClose.off().on({
			click: function() {
				mpBtn.removeClass('on').next().removeClass('on');
				return false;
			}
		});
	};


	evenChk('.td_music')
	$('.SelectHelpdesk').selectbox();

};

function wicUi() {
	var btnPackView = $('.btn_packview'),
		btnPackClose = $('.pack_info');

	
	btnPackView.off().on({
		click: function() {
			$(this).next().toggleClass('on');
			return false;
		}
	});

	btnPackClose.off().on({
		click: function() {
			$(this).toggleClass('on');
			return false;
		}
	});
}

function shopUi() {
	var btnCart = $('.btn_blscart_t');
		btnPackView = $('.btn_packview'),
		btnPackClose = $('.pack_info .btn_close');

	btnCart.off().on({
		click: function() {
			$(this).parent().toggleClass('on');
			return false;
		}
	});

	btnPackView.off().on({
		click: function() {
			$(this).next().toggleClass('on');
			return false;
		}
	});

	btnPackClose.off().on({
		click: function() {
			$(this).parent().toggleClass('on');
			return false;
		}
	});
	evenChk('.tr_d')
}



function mainYtSet() {
	var ytBtn = $('.btn_ytv_layer');
	ytBtn.each(function(i){
		$(this).attr('yt-idx', i).after('<div id="yt-player'+i+'"></div>')
		ytPlayers[i] = new YT.Player('yt-player'+i, {
			videoId: $(this).attr('yt-code'),
			events: {
				'onReady': onMainPlayerReady
			},
			playerVars : {
				origin: document.domain,
				autoplay:'0',
				controls:'0',
				modestbranding:'1',
				showinfo:'0',
				rel:'0',
				loop:'1',
				disablekb:'1',
				wmode:'transparent'
			}
		});
		$(this).addClass('ready')
	});
}


function onMainPlayerReady(event) {
	event.target.setPlaybackQuality('small');
	event.target.mute();
	event.target.setPlaybackRate(2);
};

function onYouTubeIframeAPIReady(){
	if($('body').hasClass('bless_sub')){blOstPlayer.init();};
	//if($('body').hasClass('bless_main')){mainYtSet();};
};

function gameStartSwf() {
	var g = $('.game_start'),
	s = $('#ava_gamestart');
	if(s.length != 0){
		g.off().on({
			mouseenter: function() {
				s[0].onOver();
			},
			mouseleave: function() {
				s[0].onOut();
			}
		});
	} 
}

function tabExtend() {
	var t = $('.tab_ex'),
	h = t.find('.holder'),
	l = h.find('li'),
	u = h.find('ul'),
	dw = $(l[0]).width(),
	dl = l.length,
	hw = h.width();

	u.css('width', dw*dl);
	
	function tabPage() {
		idx = h.find('li.on').index()/3;
		m = parseInt(idx);
		u.css('margin-left', -h.width()*m);
	}

	t.find('.prev').off('click').on('click', function(){
		h.find('li.on').prev().find('a').click();
		tabPage()
		return false;

	});
	t.find('.next').off('click').on('click', function(){
		h.find('li.on').next().find('a').click();
		tabPage()
		return false;
	});
};
	
///////////////////////////////////////////////////////////////////////////// blllll



function checkHash(){setTimeout(function(){reloadUi();}, 25);};
var docmode = document.documentMode; 
if ('onhashchange' in window && (docmode === undefined || docmode > 7 )) {
	window.onhashchange = checkHash;
} else {
	window.onunload = function() {setTimeout(checkHash, 25);};
} 
var aSide,	aSideOffSet;
function reloadUi() {
	var $body = $('body');
	// Scroll Event
	var wsTop;

	aSide = $('.aside'), 
	aSideOffSet = aSide.offset();

	if (aSide.length != 0) {
		$(window).off('scroll').on('scroll',function(){
			
			wsTop  = $(this).scrollTop();
			
			if (aSideOffSet.top < wsTop) {
				aSide.addClass('fixed')
			} else {
				aSide.removeClass('fixed')
			}
		});
	};

	//local mode
	if(typeof pmangpub == 'undefined'){
		mainBannerSlider();
		subBannerSlider();
		shopBannerSlider();
		shopSubSlider();
		wicSlider();
		cartSlider();
	}
	// main
	if($body.hasClass('bless_main')){
		mainUi();
		tabExtend();
	}

	// sub
	if($body.hasClass('bless_sub')){
		subUi();
	}

	if($body.hasClass('bless_shop')){
		shopUi();
	}

	if($body.hasClass('wic_shop')){
		wicUi();
	}	

	// global
	//gameStartSwf();
	gnb();
	layerBtn();
	$('.nui-selectbox-select').hide();
	$('.select').selectbox();
	$('.my_select').selectbox();

	var helpdeskOption = {
		jQueryUI: 'http://file.pmang.com/images/pmang/holeinone/cb/js/jquery-ui-1.8.18.custom.min.js', 
		datepickerBtn: 'http://file.pmang.kr/images/pmang/holeinone/cb/img/helpdesk/btn_datepicker.gif'
	};
	$.helpdeskReady(helpdeskOption);



}

//Doc Ready !
$(function(){
	reloadUi();
	backgroundChange();
	
	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			reloadUi();
		});
	}
});


(function($) {
	$.helpdeskReady = function(options) {
		if ($('.helpDesk').length < 1) return;
		if (typeof options === 'undefined') return;
		if (parseInt($.fn.jquery.replace(/\./g, ''), 10) > 180) {
			options.jQueryUI = "http://file.pmang.kr/javascript/lib/jq/jquery-ui-1.9.2.min.js"; 
		}

		$.getScript(options.jQueryUI, function() {
			// 만족도 점수
			if ( $.fn.slider ) {
				$('input.rating_value').val('');
				$('.rating_slider').slider({
					value: 50,
					min: 0,
					max: 100,
					animate: 400,
					slide: function(event, ui) {
						$(ui.handle).parent().find('input.rating_value').css('left', ui.value + '%').val(100 - ui.value);
					}
				}).find('a').bind('focus', function() { this.blur(); });
			}
			
			if ($.datepicker) {
				/* Korean initialisation for the jQuery calendar extension. */
				/* Written by DaeKwon Kang (ncrash.dk@gmail.com), Edited by Genie. */
				$.datepicker.regional['ko'] = {
					closeText: '닫기',
					prevText: '이전달',
					nextText: '다음달',
					currentText: '오늘',
					monthNames: ['1월','2월','3월','4월','5월','6월',
					'7월','8월','9월','10월','11월','12월'],
					monthNamesShort: ['1월','2월','3월','4월','5월','6월',
					'7월','8월','9월','10월','11월','12월'],
					dayNames: ['일요일','월요일','화요일','수요일','목요일','금요일','토요일'],
					dayNamesShort: ['일','월','화','수','목','금','토'],
					dayNamesMin: ['일','월','화','수','목','금','토'],
					weekHeader: 'Wk',
					dateFormat: 'yy-mm-dd',
					firstDay: 0,
					isRTL: false,
					showMonthAfterYear: true,
					yearSuffix: '년'};
				$.datepicker.setDefaults($.datepicker.regional['ko']);

				$('.datepicker').datepicker({
					beforeShow: function() {
						// $('table tr').careChild('td');
					},
					showOn: "button",
					buttonImage: options.datepickerBtn,
					buttonImageOnly: true
				});
				$('.ui-datepicker-trigger').attr('title', '');
			}
		});
	};
	
})(jQuery);

