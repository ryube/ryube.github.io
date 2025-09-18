/* easing */ 
$.easing.jswing=jQuery.easing.swing;$.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,f,a,h,g){return jQuery.easing[jQuery.easing.def](e,f,a,h,g);},easeInQuad:function(e,f,a,h,g){return h*(f/=g)*f+a;},easeOutQuad:function(e,f,a,h,g){return -h*(f/=g)*(f-2)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f+a;}return -h/2*((--f)*(f-2)-1)+a;},easeInCubic:function(e,f,a,h,g){return h*(f/=g)*f*f+a;},easeOutCubic:function(e,f,a,h,g){return h*((f=f/g-1)*f*f+1)+a;},easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a;}return h/2*((f-=2)*f*f+2)+a;},easeInQuart:function(e,f,a,h,g){return h*(f/=g)*f*f*f+a;},easeOutQuart:function(e,f,a,h,g){return -h*((f=f/g-1)*f*f*f-1)+a;},easeInOutQuart:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f+a;}return -h/2*((f-=2)*f*f*f-2)+a;},easeInQuint:function(e,f,a,h,g){return h*(f/=g)*f*f*f*f+a;},easeOutQuint:function(e,f,a,h,g){return h*((f=f/g-1)*f*f*f*f+1)+a;},easeInOutQuint:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f*f*f+a;}return h/2*((f-=2)*f*f*f*f+2)+a;},easeInSine:function(e,f,a,h,g){return -h*Math.cos(f/g*(Math.PI/2))+h+a;},easeOutSine:function(e,f,a,h,g){return h*Math.sin(f/g*(Math.PI/2))+a;},easeInOutSine:function(e,f,a,h,g){return -h/2*(Math.cos(Math.PI*f/g)-1)+a;},easeInExpo:function(e,f,a,h,g){return(f==0)?a:h*Math.pow(2,10*(f/g-1))+a;},easeOutExpo:function(e,f,a,h,g){return(f==g)?a+h:h*(-Math.pow(2,-10*f/g)+1)+a;},easeInOutExpo:function(e,f,a,h,g){if(f==0){return a;}if(f==g){return a+h;}if((f/=g/2)<1){return h/2*Math.pow(2,10*(f-1))+a;}return h/2*(-Math.pow(2,-10*--f)+2)+a;},easeInCirc:function(e,f,a,h,g){return -h*(Math.sqrt(1-(f/=g)*f)-1)+a;},easeOutCirc:function(e,f,a,h,g){return h*Math.sqrt(1-(f=f/g-1)*f)+a;},easeInOutCirc:function(e,f,a,h,g){if((f/=g/2)<1){return -h/2*(Math.sqrt(1-f*f)-1)+a;}return h/2*(Math.sqrt(1-(f-=2)*f)+1)+a;},easeInElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return -(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;},easeOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k)==1){return e+l;}if(!j){j=k*0.3;}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}return g*Math.pow(2,-10*h)*Math.sin((h*k-i)*(2*Math.PI)/j)+l+e;},easeInOutElastic:function(f,h,e,l,k){var i=1.70158;var j=0;var g=l;if(h==0){return e;}if((h/=k/2)==2){return e+l;}if(!j){j=k*(0.3*1.5);}if(g<Math.abs(l)){g=l;var i=j/4;}else{var i=j/(2*Math.PI)*Math.asin(l/g);}if(h<1){return -0.5*(g*Math.pow(2,10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j))+e;}return g*Math.pow(2,-10*(h-=1))*Math.sin((h*k-i)*(2*Math.PI)/j)*0.5+l+e;},easeInBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*(f/=h)*f*((g+1)*f-g)+a;},easeOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}return i*((f=f/h-1)*f*((g+1)*f+g)+1)+a;},easeInOutBack:function(e,f,a,i,h,g){if(g==undefined){g=1.70158;}if((f/=h/2)<1){return i/2*(f*f*(((g*=(1.525))+1)*f-g))+a;}return i/2*((f-=2)*f*(((g*=(1.525))+1)*f+g)+2)+a;},easeInBounce:function(e,f,a,h,g){return h-jQuery.easing.easeOutBounce(e,g-f,0,h,g)+a;},easeOutBounce:function(e,f,a,h,g){if((f/=g)<(1/2.75)){return h*(7.5625*f*f)+a;}else{if(f<(2/2.75)){return h*(7.5625*(f-=(1.5/2.75))*f+0.75)+a;}else{if(f<(2.5/2.75)){return h*(7.5625*(f-=(2.25/2.75))*f+0.9375)+a;}else{return h*(7.5625*(f-=(2.625/2.75))*f+0.984375)+a;}}}},easeInOutBounce:function(e,f,a,h,g){if(f<g/2){return jQuery.easing.easeInBounce(e,f*2,0,h,g)*0.5+a;}return jQuery.easing.easeOutBounce(e,f*2-g,0,h,g)*0.5+h*0.5+a;}});

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

var check_sign = function() {
	$('.input_check').has('input:checked').addClass('check_on');
	$('.input_check').has('input:not(:checked)').removeClass('check_on');
}

function scrollMove() {
	$('.btn_pos').off().on('click', function(){
		var tar = $(this).attr('href');
		var desOffset  = $(tar).offset();
		$('html, body').stop(true, false).animate({ scrollTop: desOffset.top}, 2000, 'easeInOutQuint');
		return false;
	});
}

function placeHoldBg(){
	// input value 
	$('.ph').each(function(){
		if($(this).val()==''){ $(this).addClass('ph-on');}
	});
	
	$('.ph').off('focusin').on('focusin',function(){
		if($(this).val()==''){
			$(this).removeClass('ph-on');
		}
	}).off('focusout').on('focusout',function(){
		if($(this).val()==''){
			$(this).addClass('ph-on');
		}
	});
}

function tabContents(l, t, active) {
	var linkWrap = $(l);
	var targetWrap = $(t);
	var linkTarget;
	var linkElem = linkWrap.find('a');
	var targetContnets = targetWrap.find('>div');
	linkElem.off().on('click', function(){
		_this = $(this);
		tabChange(_this);	
		return false;
	}); 
	function tabChange(t) {
		if(t.hasClass('close')){return false;}
		linkElem.removeClass('on').addClass('off');
		linkTarget = t.attr('href');
		t.removeClass('off').addClass('on');
		targetContnets.stop(true, false).fadeOut();
		$(linkTarget).stop(true, true).fadeIn();
	}
	tabChange($(linkElem[active]));
};

function layerBtn() {
	function layerOpen(target) {
		var docHeight = $(document).height();
		var winsTop = $(window).scrollTop();
		var winsLeft = $(window).scrollLeft();
		var winWidth = $(window).width();
		var winHeight = $(window).height();
		var tarWidth = $(target).width();
		var tarHeight = $(target).height();
		var left = (winsLeft + (winWidth - tarWidth) / 2 );
		var top = (winsTop + (winHeight - tarHeight) / 2 );
		
		if(winsTop+tarHeight > docHeight){
			top = docHeight - tarHeight;
		} else if(winsTop>top) {
			top = winsTop;
		}
		
		$(target).css({'left':left,'top':top});
	}
	function closeAni(){
		$('.layer_pop.on').stop(true, false).animate({ opacity: 0, marginTop: 25}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on ani-on')});
		$('.pop_dim').stop(true, false).animate({ opacity: 0}, 250, 'easeInQuad',function(){$(this).attr('style','').removeClass('on')});
		//docScrollBlock(false);
	}
	function openAni(t){
		$(t).addClass('on').stop(true, false).animate({ opacity: 1, marginTop: 0}, 250, 'easeOutQuad',function(){
			$(this).addClass('ani-on');
		});
		$('.pop_dim').addClass('on').stop(true, false).animate({ opacity: .90}, 250, 'easeOutQuad',function(){});
		//docScrollBlock(true);
	}
	$('.btn_layer').off('click.layerpop').on('click.layerpop', function(){
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

	$('a.layer_close, .pop_dim').off('click.layerpop').on('click.layerpop', function(){
		if ($(this).parent().attr('yt-code')){
			$(this).parent().find('.yt_holder>iframe').detach();
		}
		closeAni();
		return false;
	});
};

var docScrollBlock = function(off){
	off ? $(document).on("mousewheel.block DOMMouseScroll.block", function(e){e.stopPropagation();e.preventDefault();}) : $(document).off("mousewheel.block DOMMouseScroll.block")
};


function htmlPosition(elem) {
	var docHeight = $(document).height();
	var winsTop = $(window).scrollTop();
	var winsLeft = $(window).scrollLeft();
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var tarWidth = $(target).width();
	var tarHeight = $(target).height();
	var left = (winsLeft + (winWidth - tarWidth) / 2 );
	var top = (winsTop + (winHeight - tarHeight) / 2 );
	
	if(winsTop+tarHeight > docHeight){
		top = docHeight - tarHeight;
	} else if(winsTop>top) {
		top = winsTop;
	}
	$(elem).css({'left':left,'top':top});
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
		setTimeout(checkHash, 25)
		//window.clearInterval(poll);
	}
}

var blMarble = {
	vars : {
		testMode : false,
		position : [
			[600,45],
			[678,114],
			[754,158],
			[837,202], 
			[918,247],
			[999,292],
			[1081,338],
			[1160, 383],
			[1081,429],
			[999,472],
			[918,523],
			[837,563],
			[754,609],
			[837,654],
			[918,697],
			[837,739],
			[759,786],
			[678,833],
			[600,878],
			[520,833],
			[436,786],
			[358,739],
			[278,697],
			[358,654],
			[436,609],
			[358,563],
			[278,523],
			[196,472],
			[117,429],
			[38,383],
			[117,338],
			[196,292],
			[278,247],
			[358,202],
			[436,158],
			[520,114]
		],
		
	},
	init : function(){
		this.$marble = $('#bl_marble'),
		this.$btnRoll = this.$marble.find('.btn_roll'),
		this.$horse = this.$marble.find('.horse'),
		this.$dicecount = this.$marble.find('.count .n'),
		this.$double = $('#double'),
		this.$puzzle = $('#pop_puzzle .puzzle span'),
		this.$itemHolder = $('#item_holder'),
		this.$completionCount = $('#pop_puzzle .pc span');

		if(marblePlayer.camp === "union") {
			this.$horse.addClass('union');
		}
		
		this.textDisplay(); // ����Ƚ��, ���� �� ��ġ
		this.moveHorse(marblePlayer.currLoc);
		this.btnEvt();
		//test 
		if(this.vars.testMode){
			this.testfuntion();
		}


	},
	textDisplay : function(){
		var l = this.vars.position.length;
		marblePlayer.completion<26 ? marblePlayer.completion = parseInt(marblePlayer.total/l) : marblePlayer.completion = 25; // ����Ƚ��
		marblePlayer.currLoc = marblePlayer.total%l; // ���� �� ��ġ
		this.$dicecount.text(marblePlayer.dicecount); // �ֻ��� ���� �ټ�
		this.$completionCount.text(marblePlayer.completion);
		this.$puzzle.each(function(i){
			if($(this).index()+1 > marblePlayer.completion){
				return false;
			}
			$(this).addClass('on');
		})
	},
	update : function(){
		
	},
	moveHorse : function(d) {
		blMarble.$horse.addClass('move').css({left: this.vars.position[d][0], top: this.vars.position[d][1]});
		setTimeout(function(){
			blMarble.$horse.removeClass('move');
		}, 1025);
	},
	diceroll : function(n){
		this.$btnRoll.attr("class", "btn_roll rolling-ani n"+n);
		setTimeout(function(){
			blMarble.moveHorse(marblePlayer.currLoc);
		},2000);
		
	},
	itemOpen : function(n, isDouble, delay, popOff){
		 if (n === 0 || popOff){
			setTimeout(function(){
				blMarble.reset();
			}, delay);
		} else {
			var image = document.createElement('img');
				image.src = "http://mm.pmang.com/pmang/bless/event/2017/0522/img/items/"+n+".png";

			setTimeout(function(){
				if(isDouble){
					blMarble.$double.addClass('on')
				} else {
					blMarble.$double.removeClass('on')
				}
				blMarble.$itemHolder.html(image)
				$('.btn_popreward').click();
			}, delay);
		}

	},
	reset : function(){
		this.$btnRoll.attr('class', 'btn_roll');
		this.btnEvt();
		if(marblePlayer.dicecount == 0){
			this.rollEnd();
		}
	},
	rollEnd : function(){
		this.$btnRoll.addClass('off');
	},
	btnEvt : function() {
		// �ֻ��� ��ư �̺�Ʈ ���ε� 
		this.$btnRoll.off().on('click.roll', function(event){
			event.preventDefault();
			blMarble.update();
			$(this).off('click.roll');
		});

	},
	testfuntion : function() {
		// console.log(this.vars.position.length);
		// console.log('completion === '+marblePlayer.completion);
		// console.log('currLoc === '+marblePlayer.currLoc);
		for (var i = 0; i < this.vars.position.length; i++) {
			var html = '<span class="dot" data-idx="'+i+'" style="left:'+this.vars.position[i][0]+'px; top:'+this.vars.position[i][1]+'px"></span>';
			this.$marble.append(html)

		}
	}
}


function reloadUi() {
	layerBtn();
	scrollMove();
	check_sign();	
	$('.input_check').on('click',check_sign);
	// var helpdeskOption = {
	// 	jQueryUI: 'http://file.pmang.com/images/pmang/holeinone/cb/js/jquery-ui-1.8.18.custom.min.js', 
	// 	datepickerBtn: 'http://file.pmang.kr/images/pmang/holeinone/cb/img/helpdesk/btn_datepicker.gif'
	// };
	// $.helpdeskReady(helpdeskOption);
	
};

$(function(){
	$(window).on('scroll.event',function(){
		wsTop = $(this).scrollTop();
		if($('.scroll_value').length != 0){$('.scroll_value').text(wsTop);}
	});
	
	reloadUi();	
	// ajax reload
	if (typeof pmangpub !== 'undefined' && pmangpub.setOnloadView) {
		pmangpub.setOnloadView(function() {
			reloadUi();
		});
	}
});

