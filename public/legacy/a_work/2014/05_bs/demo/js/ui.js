/* IE 버전별 디택팅! */
function getInternetExplorerVersion(){var rv = -1;if (navigator.appName == 'Microsoft Internet Explorer'){var ua = navigator.userAgent;var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})"); if (re.exec(ua) != null)rv = parseFloat( RegExp.$1 ); };return rv;};

/* IE 6.0 PNG 알파값 처리 */
if (getInternetExplorerVersion()<7) {var DD_belatedPNG={ns:"DD_belatedPNG",imgSize:{},delay:10,nodesFixed:0,createVmlNameSpace:function(){if(document.namespaces&&!document.namespaces[this.ns]){document.namespaces.add(this.ns,"urn:schemas-microsoft-com:vml")}},createVmlStyleSheet:function(){var b,a;b=document.createElement("style");b.setAttribute("media","screen");document.documentElement.firstChild.insertBefore(b,document.documentElement.firstChild.firstChild);if(b.styleSheet){b=b.styleSheet;b.addRule(this.ns+"\\:*","{behavior:url(#default#VML)}");b.addRule(this.ns+"\\:shape","position:absolute;");b.addRule("img."+this.ns+"_sizeFinder","behavior:none; border:none; position:absolute; z-index:-1; top:-10000px; visibility:hidden;");this.screenStyleSheet=b;a=document.createElement("style");a.setAttribute("media","print");document.documentElement.firstChild.insertBefore(a,document.documentElement.firstChild.firstChild);a=a.styleSheet;a.addRule(this.ns+"\\:*","{display: none !important;}");a.addRule("img."+this.ns+"_sizeFinder","{display: none !important;}")}},readPropertyChange:function(){var b,c,a;b=event.srcElement;if(!b.vmlInitiated){return}if(event.propertyName.search("background")!=-1||event.propertyName.search("border")!=-1){DD_belatedPNG.applyVML(b)}if(event.propertyName=="style.display"){c=(b.currentStyle.display=="none")?"none":"block";for(a in b.vml){if(b.vml.hasOwnProperty(a)){b.vml[a].shape.style.display=c}}}if(event.propertyName.search("filter")!=-1){DD_belatedPNG.vmlOpacity(b)}},vmlOpacity:function(b){if(b.currentStyle.filter.search("lpha")!=-1){var a=b.currentStyle.filter;a=parseInt(a.substring(a.lastIndexOf("=")+1,a.lastIndexOf(")")),10)/100;b.vml.color.shape.style.filter=b.currentStyle.filter;b.vml.image.fill.opacity=a}},handlePseudoHover:function(a){setTimeout(function(){DD_belatedPNG.applyVML(a)},1)},fix:function(a){if(this.screenStyleSheet){var c,b;c=a.split(",");for(b=0;b<c.length;b++){this.screenStyleSheet.addRule(c[b],"behavior:expression(DD_belatedPNG.fixPng(this))")}}},applyVML:function(a){a.runtimeStyle.cssText="";this.vmlFill(a);this.vmlOffsets(a);this.vmlOpacity(a);if(a.isImg){this.copyImageBorders(a)}},attachHandlers:function(i){var d,c,g,e,b,f;d=this;c={resize:"vmlOffsets",move:"vmlOffsets"};if(i.nodeName=="A"){e={mouseleave:"handlePseudoHover",mouseenter:"handlePseudoHover",focus:"handlePseudoHover",blur:"handlePseudoHover"};for(b in e){if(e.hasOwnProperty(b)){c[b]=e[b]}}}for(f in c){if(c.hasOwnProperty(f)){g=function(){d[c[f]](i)};i.attachEvent("on"+f,g)}}i.attachEvent("onpropertychange",this.readPropertyChange)},giveLayout:function(a){a.style.zoom=1;if(a.currentStyle.position=="static"){a.style.position="relative"}},copyImageBorders:function(b){var c,a;c={borderStyle:true,borderWidth:true,borderColor:true};for(a in c){if(c.hasOwnProperty(a)){b.vml.color.shape.style[a]=b.currentStyle[a]}}},vmlFill:function(e){if(!e.currentStyle){return}else{var d,f,g,b,a,c;d=e.currentStyle}for(b in e.vml){if(e.vml.hasOwnProperty(b)){e.vml[b].shape.style.zIndex=d.zIndex}}e.runtimeStyle.backgroundColor="";e.runtimeStyle.backgroundImage="";f=true;if(d.backgroundImage!="none"||e.isImg){if(!e.isImg){e.vmlBg=d.backgroundImage;e.vmlBg=e.vmlBg.substr(5,e.vmlBg.lastIndexOf('")')-5)}else{e.vmlBg=e.src}g=this;if(!g.imgSize[e.vmlBg]){a=document.createElement("img");g.imgSize[e.vmlBg]=a;a.className=g.ns+"_sizeFinder";a.runtimeStyle.cssText="behavior:none; position:absolute; left:-10000px; top:-10000px; border:none; margin:0; padding:0;";c=function(){this.width=this.offsetWidth;this.height=this.offsetHeight;g.vmlOffsets(e)};a.attachEvent("onload",c);a.src=e.vmlBg;a.removeAttribute("width");a.removeAttribute("height");document.body.insertBefore(a,document.body.firstChild)}e.vml.image.fill.src=e.vmlBg;f=false}e.vml.image.fill.on=!f;e.vml.image.fill.color="none";e.vml.color.shape.style.backgroundColor=d.backgroundColor;e.runtimeStyle.backgroundImage="none";e.runtimeStyle.backgroundColor="transparent"},vmlOffsets:function(d){var h,n,a,e,g,m,f,l,j,i,k;h=d.currentStyle;n={W:d.clientWidth+1,H:d.clientHeight+1,w:this.imgSize[d.vmlBg].width,h:this.imgSize[d.vmlBg].height,L:d.offsetLeft,T:d.offsetTop,bLW:d.clientLeft,bTW:d.clientTop};a=(n.L+n.bLW==1)?1:0;e=function(b,p,q,c,s,u){b.coordsize=c+","+s;b.coordorigin=u+","+u;b.path="m0,0l"+c+",0l"+c+","+s+"l0,"+s+" xe";b.style.width=c+"px";b.style.height=s+"px";b.style.left=p+"px";b.style.top=q+"px"};e(d.vml.color.shape,(n.L+(d.isImg?0:n.bLW)),(n.T+(d.isImg?0:n.bTW)),(n.W-1),(n.H-1),0);e(d.vml.image.shape,(n.L+n.bLW),(n.T+n.bTW),(n.W),(n.H),1);g={X:0,Y:0};if(d.isImg){g.X=parseInt(h.paddingLeft,10)+1;g.Y=parseInt(h.paddingTop,10)+1}else{for(j in g){if(g.hasOwnProperty(j)){this.figurePercentage(g,n,j,h["backgroundPosition"+j])}}}d.vml.image.fill.position=(g.X/n.W)+","+(g.Y/n.H);m=h.backgroundRepeat;f={T:1,R:n.W+a,B:n.H,L:1+a};l={X:{b1:"L",b2:"R",d:"W"},Y:{b1:"T",b2:"B",d:"H"}};if(m!="repeat"||d.isImg){i={T:(g.Y),R:(g.X+n.w),B:(g.Y+n.h),L:(g.X)};if(m.search("repeat-")!=-1){k=m.split("repeat-")[1].toUpperCase();i[l[k].b1]=1;i[l[k].b2]=n[l[k].d]}if(i.B>n.H){i.B=n.H}d.vml.image.shape.style.clip="rect("+i.T+"px "+(i.R+a)+"px "+i.B+"px "+(i.L+a)+"px)"}else{d.vml.image.shape.style.clip="rect("+f.T+"px "+f.R+"px "+f.B+"px "+f.L+"px)"}},figurePercentage:function(d,c,f,a){var b,e;e=true;b=(f=="X");switch(a){case"left":case"top":d[f]=0;break;case"center":d[f]=0.5;break;case"right":case"bottom":d[f]=1;break;default:if(a.search("%")!=-1){d[f]=parseInt(a,10)/100}else{e=false}}d[f]=Math.ceil(e?((c[b?"W":"H"]*d[f])-(c[b?"w":"h"]*d[f])):parseInt(a,10));if(d[f]%2===0){d[f]++}return d[f]},fixPng:function(c){c.style.behavior="none";var g,b,f,a,d;if(c.nodeName=="BODY"||c.nodeName=="TD"||c.nodeName=="TR"){return}c.isImg=false;if(c.nodeName=="IMG"){if(c.src.toLowerCase().search(/\.png$/)!=-1){c.isImg=true;c.style.visibility="hidden"}else{return}}else{if(c.currentStyle.backgroundImage.toLowerCase().search(".png")==-1){return}}g=DD_belatedPNG;c.vml={color:{},image:{}};b={shape:{},fill:{}};for(a in c.vml){if(c.vml.hasOwnProperty(a)){for(d in b){if(b.hasOwnProperty(d)){f=g.ns+":"+d;c.vml[a][d]=document.createElement(f)}}c.vml[a].shape.stroked=false;c.vml[a].shape.appendChild(c.vml[a].fill);c.parentNode.insertBefore(c.vml[a].shape,c)}}c.vml.image.shape.fillcolor="none";c.vml.image.fill.type="tile";c.vml.color.fill.on=false;g.attachHandlers(c);g.giveLayout(c);g.giveLayout(c.offsetParent);c.vmlInitiated=true;g.applyVML(c)}};try{document.execCommand("BackgroundImageCache",false,true)}catch(r){}DD_belatedPNG.createVmlNameSpace();DD_belatedPNG.createVmlStyleSheet();
	DD_belatedPNG.fix('.header h1, .new_icon, .footer, .btn_pop_close,.share_sns a, .bs_slide a,  .bs_slide b');};


function layerOpen(target) {
	$(target).show()
	$('.pop_wrap').fadeIn('fast')
	var left = ( $(window).scrollLeft() + ($(window).width() - $(target).width()) / 2 );
	var top = ( $(window).scrollTop() + ($(window).height() - $(target).height()) / 2 );
	if($(window).scrollTop()>top){top = $(window).scrollTop()};
	$(target).css({'left':left,'top':top});
};

function itemBgOpenAni(target) {
	var openHeight
	$(target).find('.bg_black').each(function(e) {
		($(this).hasClass('tl_big')) ? openHeight =  78 : openHeight = 53
		$(this).stop(true, false).delay(e*100).animate({height: openHeight }, 300, 'easeOutCubic');
	});
};

function itemBgCloseAni(target) {
	var bgHeight = 208
	$(target).find('.bg_black').each(function(e) {
		($(this).parent().hasClass('h2')) ? bgHeight =  423 : bgHeight = 208
		$(this).stop(true, false).delay(e*100).animate({height: bgHeight}, 300, 'easeInCubic');
	});
}

function itemBgClose() {
	var bgHeight = 208
	$('.bs_items.on').find('.bg_black').stop(true, false).each(function(e) {
		($(this).parent().hasClass('h2')) ? bgHeight =  423 : bgHeight = 208
		$(this).css('height', bgHeight)
	});
}

function wapperPadding(size) {
	setTimeout(function(){
			$('.wrapper').stop(true, false).animate({ paddingLeft: size }, 300, 'easeInCubic');
		}, 500);
}

$(window).load(function() {
    // 세월호 배너
    //$('<img src="http://mm.pmang.com/pmang/asker/event/20140425/img/banner_pray.gif" style="position:absolute; top: 58px; left: 722px;">').appendTo('.header');
	var $bsContainer = $('.bs_contents');
	var $bsContents = $('.bs_contents').find('.bs_items');
	var $bsSlideNavs = $('.slide_nav').find('a');
	var $bsPopWrap = $('.pop_wrap');

	$bsContainer.masonry({
		itemSelector : '.bs_items',
		columnWidth : 1,
		isAnimated: true
	});
	setTimeout(function(){
		$bsContainer.css('width', 'auto');
		$bsContainer.masonry(  );
		setTimeout(function(){
			$navBtn.eq(5).click();
			if($(window).width() < 1100) {
				wapperPadding(20);
			}
		}, 500);
	},300);

	var $navBtn = $('.nav > li > a');
	
	// GNB 버튼 이벤트
	$navBtn.on('click', function() {
		if($(this).hasClass('on')){return false;}
		itemBgClose();
		var t = $(this).attr('class');
		$navBtn.removeClass('on');
		$bsContents.removeClass('on');
		$(this).addClass('on');
		tar = $bsContainer.find('.' + t);
		beforeItems = $(tar);
		$(tar).addClass('on');
		itemBgOpenAni(tar);
		return false;
	});

	// 각 컨텐츠 아이템 이벤트
	$bsContents.on('click', function() {
		var popElem;
		itemBgCloseAni($bsContainer.find('.bs_items.on'));
		$navBtn.removeClass('on');
		$bsContents.removeClass('on');
		itemBgOpenAni($(this));	
		if($(this).hasClass('about')){
			$(this).addClass('on');
			popElem = $bsPopWrap.find('.pop.movie')
		};
		if($(this).hasClass('movie')){
			$(this).addClass('on');
			popElem = $bsPopWrap.find('.pop.movie')
		};
		if($(this).hasClass('screen')){
			var n = $(this).attr('shotnum');
			$(this).addClass('on');
			popElem = $bsPopWrap.find('.pop.screen')
			$bsSlideNavs.eq(n-1).click();
		};
		if($(this).hasClass('world_ill')){
			$(this).addClass('on');
			popElem = $bsPopWrap.find('.pop.world_ill')
		};
		if($(this).hasClass('char_ill')){
			$(this).addClass('on');
			popElem = $bsPopWrap.find('.pop.char_ill')
		};
		
		if($(this).hasClass('news')){
			$(this).addClass('on');
			return false;
		};
		setTimeout(function(){ layerOpen($(popElem));}, 20);

	});
	$bsContents.hover(
		function () {
			itemBgOpenAni($(this));
		},
		function () {
			if($(this).hasClass('on')){return false;}
			itemBgCloseAni($(this));
		}
	);
	

	$(window).bind( "resize", function(){
		
		if($(this).width() < 1100) {
			wapperPadding(20);
		}
		if($(this).width() > 1300) {
			wapperPadding(87);
		}
	});

	$('.btn_pop_close').on('click', function() {
		$('.pop').hide()
		$bsPopWrap.fadeOut('fast')
	});
	$('.header>h1>a').on('click', function() {
		$navBtn.eq(5).click();
		return false;
	});

	/*
	var toggleStatus = 0
	$('.btn_share,.share_layer>.bg_black').on('click', function() {
		if(toggleStatus === 0){
			$('.share_layer').show();
			toggleStatus = 1;
		} else {
			$('.share_layer').hide();
			toggleStatus = 0;
		}
		
	});
	*/

	$('.bs_slide').hover(
		function () {
			$('.btn_prev, .btn_next').stop(true, false).fadeIn('fast');
		},
		function () {
			$('.btn_prev, .btn_next').stop(true, false).fadeOut('fast');
		}
	);

	$('.sreen_slider,.world_ill_silder,.char_ill_silder').slideshow();
		
});